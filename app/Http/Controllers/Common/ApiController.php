<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Route as LaravelRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\View\View;
use ReflectionException;
use ReflectionMethod;
use ReflectionNamedType;
use Throwable;

class ApiController extends Controller
{
    public function index(): View
    {
        return view('common.api', [
            'openApiSpecUrl' => route('api.spec'),
        ]);
    }

    public function spec(): JsonResponse
    {
        return response()->json($this->buildOpenApi());
    }

    private function buildOpenApi(): array
    {
        $baseUrl = rtrim((string) (config('app.url') ?: request()->getSchemeAndHttpHost()), '/');
        $paths = [];

        collect(Route::getRoutes())
            ->filter(fn (LaravelRoute $route) => str_starts_with(ltrim((string) $route->uri(), '/'), 'api/v1/'))
            ->each(function (LaravelRoute $route) use (&$paths): void {
                $methods = collect((array) $route->methods())
                    ->reject(fn (string $m) => in_array($m, ['HEAD', 'OPTIONS'], true))
                    ->values();

                if ($methods->isEmpty()) {
                    return;
                }

                $httpMethod = strtolower((string) $methods->first());
                $uri = '/'.ltrim((string) $route->uri(), '/');
                $path = preg_replace('#^/api/v1#', '', $uri) ?: '/';
                $path = '/'.ltrim($path, '/');
                if ($path === '//') {
                    $path = '/';
                }

                $meta = $this->resolveControllerMeta($route);
                $routeName = (string) ($route->getName() ?: '');
                $summary = $meta['summary'] ?: ($routeName !== '' ? $routeName : strtoupper($httpMethod).' '.$path);

                $middlewares = collect($route->gatherMiddleware())->values();
                $authRequired = $middlewares->contains(fn (string $m) => str_contains($m, 'auth:sanctum'));

                $pathParams = $this->extractPathParameters($path);
                $requestRules = $this->extractRequestRules($meta['class'], $meta['method']);

                $queryParams = [];
                $bodyParams = [];
                foreach ($requestRules as $field => $ruleInfo) {
                    $param = $this->normalizeRuleToParam($field, $ruleInfo);
                    if (in_array($httpMethod, ['get', 'delete'], true)) {
                        $queryParams[] = $param;
                    } else {
                        $bodyParams[] = $param;
                    }
                }

                if ($path === '/upload' && in_array($httpMethod, ['post', 'put', 'patch'], true)) {
                    $hasFileParam = collect($bodyParams)->contains(fn (array $p) => $p['name'] === 'file');
                    if (!$hasFileParam) {
                        $bodyParams[] = [
                            'name' => 'file',
                            'required' => true,
                            'description' => 'required|file',
                            'schema' => ['type' => 'string', 'format' => 'binary'],
                        ];
                    }
                }

                $parameters = array_merge(
                    $pathParams,
                    array_map(fn (array $p) => [
                        'name' => $p['name'],
                        'in' => 'query',
                        'required' => $p['required'],
                        'description' => $p['description'],
                        'schema' => $p['schema'],
                    ], $queryParams)
                );

                $operation = [
                    'summary' => $summary,
                    'operationId' => Str::slug(($routeName !== '' ? $routeName : $httpMethod.'-'.$path), '_'),
                    'parameters' => $parameters,
                    'responses' => [
                        '200' => [
                            'description' => 'Success',
                            'content' => [
                                'application/json' => [
                                    'schema' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'status' => ['type' => 'boolean'],
                                            'message' => ['type' => 'string'],
                                            'data' => ['type' => 'object', 'nullable' => true],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ];

                if ($authRequired) {
                    $operation['security'] = [['bearerAuth' => []]];
                }

                if (!empty($bodyParams) && in_array($httpMethod, ['post', 'put', 'patch', 'delete'], true)) {
                    $required = array_values(array_map(
                        fn (array $p) => $p['name'],
                        array_filter($bodyParams, fn (array $p) => $p['required'])
                    ));

                    $properties = [];
                    foreach ($bodyParams as $p) {
                        $properties[$p['name']] = $p['schema'];
                    }

                    $contentType = $this->resolveRequestBodyContentType($bodyParams);
                    $operation['requestBody'] = [
                        'required' => !empty($required),
                        'content' => [
                            $contentType => [
                                'schema' => [
                                    'type' => 'object',
                                    'required' => $required,
                                    'properties' => $properties,
                                ],
                            ],
                        ],
                    ];
                }

                $paths[$path][$httpMethod] = $operation;
            });

        return [
            'openapi' => '3.0.3',
            'info' => [
                'title' => config('app.name', 'LSKY PRO').' API',
                'version' => '1.0.0',
            ],
            'servers' => [
                ['url' => $baseUrl.'/api/v1'],
            ],
            'components' => [
                'securitySchemes' => [
                    'bearerAuth' => [
                        'type' => 'http',
                        'scheme' => 'bearer',
                        'bearerFormat' => 'Sanctum',
                    ],
                ],
            ],
            'paths' => (object) $paths,
        ];
    }

    private function resolveControllerMeta(LaravelRoute $route): array
    {
        $action = (string) $route->getActionName();
        if (!str_contains($action, '@')) {
            return [
                'class' => null,
                'method' => null,
                'summary' => '',
            ];
        }

        [$class, $method] = explode('@', $action, 2);
        $summary = '';

        try {
            $ref = new ReflectionMethod($class, $method);
            $doc = (string) $ref->getDocComment();
            $summary = $this->extractPhpDocSummary($doc);
        } catch (ReflectionException $e) {
            $summary = '';
        }

        return [
            'class' => $class,
            'method' => $method,
            'summary' => $summary,
        ];
    }

    private function extractPhpDocSummary(string $doc): string
    {
        if ($doc === '') {
            return '';
        }

        $lines = preg_split('/\R/', $doc) ?: [];
        foreach ($lines as $line) {
            $line = trim((string) $line);
            $line = preg_replace('/^\/\*\*?\s?/', '', $line) ?? $line;
            $line = preg_replace('/^\*\s?/', '', $line) ?? $line;
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '@')) {
                continue;
            }

            return $line;
        }

        return '';
    }

    private function extractPathParameters(string $path): array
    {
        preg_match_all('/\{([^}]+)\}/', $path, $matches);
        $params = [];

        foreach ($matches[1] ?? [] as $name) {
            $params[] = [
                'name' => (string) $name,
                'in' => 'path',
                'required' => true,
                'description' => 'Path parameter',
                'schema' => [
                    'type' => 'string',
                ],
            ];
        }

        return $params;
    }

    private function extractRequestRules(?string $controllerClass, ?string $controllerMethod): array
    {
        if (!$controllerClass || !$controllerMethod || !class_exists($controllerClass)) {
            return [];
        }

        try {
            $method = new ReflectionMethod($controllerClass, $controllerMethod);
        } catch (ReflectionException $e) {
            return [];
        }

        foreach ($method->getParameters() as $parameter) {
            $type = $parameter->getType();
            if (!$type || !($type instanceof ReflectionNamedType) || $type->isBuiltin()) {
                continue;
            }

            $typeName = $type->getName();
            if (!class_exists($typeName) || !is_subclass_of($typeName, FormRequest::class)) {
                continue;
            }

            try {
                /** @var FormRequest $form */
                $form = app($typeName);
                $rules = $form->rules();
            } catch (Throwable $e) {
                return [];
            }

            if (!is_array($rules)) {
                return [];
            }

            return collect($rules)->map(function ($rule) {
                $ruleList = is_array($rule) ? $rule : explode('|', (string) $rule);
                $ruleList = array_values(array_filter(array_map(fn ($item) => trim((string) $item), $ruleList)));

                return [
                    'rules' => $ruleList,
                    'required' => in_array('required', $ruleList, true),
                    'schema' => $this->ruleListToSchema($ruleList),
                ];
            })->all();
        }

        return $this->extractInlineValidateRules($controllerClass, $controllerMethod);
    }

    private function normalizeRuleToParam(string $field, array $ruleInfo): array
    {
        $rules = $ruleInfo['rules'] ?? [];

        return [
            'name' => $field,
            'required' => (bool) ($ruleInfo['required'] ?? false),
            'description' => empty($rules) ? '-' : implode('|', $rules),
            'schema' => $ruleInfo['schema'] ?? ['type' => 'string'],
        ];
    }

    private function ruleListToSchema(array $rules): array
    {
        $flat = strtolower(implode('|', $rules));

        if (str_contains($flat, 'array')) {
            return ['type' => 'array', 'items' => ['type' => 'string']];
        }
        if (str_contains($flat, 'file') || str_contains($flat, 'image') || str_contains($flat, 'mimes:') || str_contains($flat, 'mimetypes:')) {
            return ['type' => 'string', 'format' => 'binary'];
        }
        if (str_contains($flat, 'integer')) {
            return ['type' => 'integer'];
        }
        if (str_contains($flat, 'numeric')) {
            return ['type' => 'number'];
        }
        if (str_contains($flat, 'boolean')) {
            return ['type' => 'boolean'];
        }
        if (str_contains($flat, 'date')) {
            return ['type' => 'string', 'format' => 'date-time'];
        }

        return ['type' => 'string'];
    }

    private function resolveRequestBodyContentType(array $bodyParams): string
    {
        foreach ($bodyParams as $param) {
            $schema = $param['schema'] ?? [];
            if (($schema['format'] ?? null) === 'binary') {
                return 'multipart/form-data';
            }
        }

        return 'application/json';
    }

    private function extractInlineValidateRules(string $controllerClass, string $controllerMethod): array
    {
        try {
            $method = new ReflectionMethod($controllerClass, $controllerMethod);
        } catch (ReflectionException $e) {
            return [];
        }

        $file = $method->getFileName();
        if (!$file || !is_file($file)) {
            return [];
        }

        $startLine = $method->getStartLine();
        $endLine = $method->getEndLine();
        if (!$startLine || !$endLine || $endLine < $startLine) {
            return [];
        }

        $lines = @file($file);
        if (!is_array($lines)) {
            return [];
        }

        $source = implode('', array_slice($lines, $startLine - 1, $endLine - $startLine + 1));
        if ($source === '') {
            return [];
        }

        preg_match_all('/->validate\s*\(\s*\[(.*?)\]\s*\)/s', $source, $matches);
        $blocks = $matches[1] ?? [];
        if (empty($blocks)) {
            return [];
        }

        $rules = [];
        foreach ($blocks as $block) {
            $rules = array_merge($rules, $this->parseValidationArrayBlock((string) $block));
        }

        return $rules;
    }

    private function parseValidationArrayBlock(string $block): array
    {
        if ($block === '') {
            return [];
        }

        preg_match_all('/([\'"])([^\'"]+)\1\s*=>\s*(?:([\'"])(.*?)\3|\[(.*?)\])\s*,?/s', $block, $matches, PREG_SET_ORDER);
        if (empty($matches)) {
            return [];
        }

        $rules = [];
        foreach ($matches as $match) {
            $field = trim((string) ($match[2] ?? ''));
            if ($field === '') {
                continue;
            }

            $ruleList = [];
            if (isset($match[4]) && $match[4] !== '') {
                $ruleList = explode('|', (string) $match[4]);
            } elseif (isset($match[5]) && $match[5] !== '') {
                preg_match_all('/[\'"]([^\'"]+)[\'"]/', (string) $match[5], $arrRules);
                $ruleList = $arrRules[1] ?? [];
            }

            $ruleList = array_values(array_filter(array_map(fn ($item) => trim((string) $item), $ruleList)));
            if (empty($ruleList)) {
                continue;
            }

            $rules[$field] = [
                'rules' => $ruleList,
                'required' => in_array('required', $ruleList, true),
                'schema' => $this->ruleListToSchema($ruleList),
            ];
        }

        return $rules;
    }
}

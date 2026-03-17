@section('title', '接口')

@push('styles')
    <style>
        .api-doc-wrap {
            width: 100%;
            min-width: 0;
            height: calc(100vh - var(--header-height, 48px) - 20px);
            height: calc(100dvh - var(--header-height, 48px) - 20px);
            min-height: 520px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            overflow: hidden;
        }

        #swagger-ui {
            width: 100%;
            height: 100%;
            overflow: auto;
            padding: 12px;
            background: #f8fafc;
        }

        #swagger-ui .topbar {
            display: none;
        }

        #swagger-ui .scheme-container {
            box-shadow: none;
            padding: 8px 10px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            margin-bottom: 10px;
        }

        #swagger-ui .information-container.wrapper,
        #swagger-ui .swagger-ui .wrapper {
            max-width: none;
            padding: 0;
        }

        #swagger-ui .info {
            margin: 0 0 10px;
            padding: 12px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            position: sticky;
            top: 0;
            z-index: 4;
        }

        #swagger-ui .info .title {
            font-size: 20px;
            color: #0f172a;
        }

        #swagger-ui .opblock-tag {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            margin: 0 0 10px;
            padding: 10px 12px !important;
        }

        #swagger-ui .opblock {
            border-radius: 10px;
            margin: 0 0 10px;
            box-shadow: none;
            border-width: 1px;
        }

        #swagger-ui .opblock .opblock-summary {
            padding: 8px 10px;
        }

        #swagger-ui .opblock .opblock-section-header {
            background: #f8fafc;
            box-shadow: none;
            border-bottom: 1px solid #e2e8f0;
        }

        #swagger-ui .opblock .opblock-body {
            background: #fff;
        }

        #swagger-ui .parameters-container,
        #swagger-ui .responses-wrapper {
            padding: 0 10px 10px;
        }

        #swagger-ui table.model,
        #swagger-ui table.parameters {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        #swagger-ui .btn {
            border-radius: 8px;
            font-weight: 600;
            box-shadow: none;
        }

        #swagger-ui .btn.authorize {
            border-color: #2563eb;
            color: #2563eb;
        }

        #swagger-ui .btn.execute {
            background: #16a34a;
            border-color: #16a34a;
        }

        #swagger-ui .responses-inner,
        #swagger-ui .highlight-code {
            border-radius: 8px;
        }

        #swagger-ui .highlight-code,
        #swagger-ui .microlight,
        #swagger-ui pre {
            max-height: 340px;
            overflow: auto;
        }

        #swagger-ui input[type=text],
        #swagger-ui textarea,
        #swagger-ui select {
            border-radius: 8px;
            border-color: #cbd5e1;
        }

        #swagger-ui .model-box,
        #swagger-ui section.models {
            border-radius: 10px;
            border-color: #e2e8f0;
        }

        #swagger-ui .servers-title,
        #swagger-ui .opblock-summary-path,
        #swagger-ui .parameter__name,
        #swagger-ui .response-col_status {
            color: #0f172a;
        }

        #swagger-ui .parameters-container,
        #swagger-ui .responses-wrapper {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            padding: 10px;
        }

        #swagger-ui .responses-wrapper .responses-inner {
            border: 0;
        }

        @media (min-width: 1280px) {
            #swagger-ui .opblock .opblock-body {
                display: grid;
                grid-template-columns: minmax(420px, 1fr) minmax(500px, 1fr);
                gap: 10px;
                align-items: start;
                padding: 0 10px 10px;
            }

            #swagger-ui .opblock .opblock-body > .opblock-description-wrapper,
            #swagger-ui .opblock .opblock-body > .opblock-external-docs-wrapper,
            #swagger-ui .opblock .opblock-body > .opblock-section-header,
            #swagger-ui .opblock .opblock-body > .parameters-container,
            #swagger-ui .opblock .opblock-body > .request-body,
            #swagger-ui .opblock .opblock-body > .execute-wrapper {
                grid-column: 1;
            }

            #swagger-ui .opblock .opblock-body > .responses-wrapper {
                grid-column: 2;
                position: sticky;
                top: 72px;
            }
        }
    </style>
@endpush

<x-app-layout>
    <div class="api-doc-wrap">
        <div id="swagger-ui"><div style="padding:12px;color:#64748b;">API 文档加载中...</div></div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="{{ asset('vendor/swagger-ui/swagger-ui.css') }}" />
<script src="{{ asset('vendor/swagger-ui/swagger-ui-bundle.js') }}"></script>
<script src="{{ asset('vendor/swagger-ui/swagger-ui-standalone-preset.js') }}"></script>
<script>
    (function () {
        const el = document.getElementById('swagger-ui');
        if (!el) return;

        if (typeof window.SwaggerUIBundle === 'undefined') {
            el.innerHTML = '<div style="padding:12px;color:#ef4444;">Swagger UI 脚本未加载成功（本地资源）。</div>';
            return;
        }

        fetch(@json($openApiSpecUrl), { credentials: 'same-origin' })
            .then((r) => {
                if (!r.ok) throw new Error('spec ' + r.status);
                return r.json();
            })
            .then((spec) => {
                window.SwaggerUIBundle({
                    spec: spec,
                    dom_id: '#swagger-ui',
                    deepLinking: true,
                    displayRequestDuration: true,
                    persistAuthorization: true,
                    docExpansion: 'list',
                    filter: true,
                    displayOperationId: true,
                    defaultModelsExpandDepth: 0,
                    defaultModelExpandDepth: 2,
                    presets: [
                        window.SwaggerUIBundle.presets.apis,
                        window.SwaggerUIStandalonePreset,
                    ],
                    layout: 'BaseLayout',
                });
            })
            .catch((err) => {
                el.innerHTML = '<div style="padding:12px;color:#ef4444;">OpenAPI 数据加载失败：' + String(err) + '</div>';
            });
    })();
</script>

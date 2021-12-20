<?php

/**
 * This file is part of Krizalys' OneDrive SDK for PHP.
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @author    Christophe Vidal
 * @copyright 2008-2021 Christophe Vidal (http://www.krizalys.com)
 * @license   https://opensource.org/licenses/BSD-3-Clause 3-Clause BSD License
 * @link      https://github.com/krizalys/onedrive-php-sdk
 */

namespace Krizalys\Onedrive\Parameter\Injector;

/**
 * A class supporting hierarchical parameter injection.
 *
 * @since 2.4.0
 */
class HierarchicalInjector implements InjectorInterface
{
    /**
     * @var string[]
     *      The path.
     */
    private $path;

    /**
     * Constructor.
     *
     * @param string[] $path
     *        The path.
     *
     * @since 2.4.0
     */
    public function __construct(array $path)
    {
        $this->path = $path;
    }

    /**
     * {@inheritDoc}
     *
     * @param mixed[string] $values
     *        The array of values.
     * @param mixed $value
     *        The value to inject.
     *
     * @return mixed[string]
     *         The resulting array of values.
     *
     * @throws \Exception
     *         Thrown if the path is empty.
     *
     * @since 2.4.0
     */
    public function inject(array $values, $value)
    {
        if (empty($this->path)) {
            throw new \Exception('A hierarchical injector path cannot be empty');
        }

        $keys = array_reverse($this->path);
        $key  = array_shift($keys);

        $root = [
            $key => $value,
        ];

        foreach ($keys as $key) {
            $root = [
                $key => $root,
            ];
        }

        return array_replace_recursive($values, $root);
    }
}

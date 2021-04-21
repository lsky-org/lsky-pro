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

namespace Krizalys\Onedrive\Serializer;

/**
 * A class to serialize order by parameters into string representations.
 *
 * @since 2.3.0
 */
class OrderBySerializer implements SerializerInterface
{
    /**
     * {@inheritDoc}
     *
     * @param string[][] $value
     *        The value to serialize.
     *
     * @return string
     *         The serialized value.
     *
     * @since 2.3.0
     */
    public function serialize($value)
    {
        $properties = array_map(function (array $tuple) {
            list($property, $direction) = $tuple;

            return "$property $direction";
        }, $value);

        return implode(', ', $properties);
    }
}

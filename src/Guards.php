<?php

/*
 * (c) Rob Bast <rob.bast@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

 /*
 * *
 * * Modified by Edward Yarian <edward.email0@gmail.com>
 * * Removed exceptions to handle error messages
 * *
 * */

namespace edward_y\ISO3166;

use edward_y\ISO3166\Exception\DomainException;
use edward_y\ISO3166\Exception\InvalidArgumentException;

final class Guards
{
    /**
     * Assert that input looks like a name key.
     *
     * @param string $name
     *
     * @throws \edward_y\ISO3166\Exception\InvalidArgumentException if input is not a string
     */
    public static function guardAgainstInvalidName($name)
    {
        if (!is_string($name)) {
            return false;
            //throw new InvalidArgumentException(sprintf('Expected $name to be of type string, got: %s', gettype($name))); // Remove exception to control error message
        } else {
            return true;
        }
    }

    /**
     * Assert that input looks like an alpha2 key.
     *
     * @param string $alpha2
     *
     * @throws \edward_y\ISO3166\Exception\InvalidArgumentException if input is not a string
     * @throws \edward_y\ISO3166\Exception\DomainException if input does not look like an alpha2 key
     */
    public static function guardAgainstInvalidAlpha2($alpha2)
    {
        $checks = 0;

        if (!is_string($alpha2)) {
            return false;
            //throw new InvalidArgumentException(sprintf('Expected $alpha2 to be of type string, got: %s', gettype($alpha2))); // Remove exception to control error message
        } else {
            $checks = 1;
        }

        if (!preg_match('/^[a-zA-Z]{2}$/', $alpha2)) {
            return false;
            //throw new DomainException(sprintf('Not a valid alpha2 key: %s', $alpha2)); // Remove exception to control error message
        } else {
            if($checks == 1) { // Make sure the string check passes
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Assert that input looks like an alpha3 key.
     *
     * @param string $alpha3
     *
     * @throws \edward_y\ISO3166\Exception\InvalidArgumentException if input is not a string
     * @throws \edward_y\ISO3166\Exception\DomainException if input does not look like an alpha3 key
     */
    public static function guardAgainstInvalidAlpha3($alpha3)
    {
        $checks = 0;

        if (!is_string($alpha3)) {
            return false;
            //throw new InvalidArgumentException(sprintf('Expected $alpha3 to be of type string, got: %s', gettype($alpha3))); // Remove exception to control error message
        } else {
            $checks = 1;
        }

        if (!preg_match('/^[a-zA-Z]{3}$/', $alpha3)) {
            return false;
            //throw new DomainException(sprintf('Not a valid alpha3 key: %s', $alpha3)); // Remove exception to control error message
        } else {
            if($checks == 1) { // Make sure the string check passes
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Assert that input looks like a numeric key.
     *
     * @param string $numeric
     *
     * @throws \edward_y\ISO3166\Exception\InvalidArgumentException if input is not a string
     * @throws \edward_y\ISO3166\Exception\DomainException if input does not look like a numeric key
     */
    public static function guardAgainstInvalidNumeric($numeric)
    {
        $checks = 0;

        if (!is_string($numeric)) {
            return false;
            //throw new InvalidArgumentException(sprintf('Expected $numeric to be of type string, got: %s', gettype($numeric))); // Remove exception to control error message
        } else {
            $checks = 1;
        }

        if (!preg_match('/^[0-9]{3}$/', $numeric)) {
            return false;
            //throw new DomainException(sprintf('Not a valid numeric key: %s', $numeric)); // Remove exception to control error message
        } else {
            if($checks == 1) { // Make sure the string check passes
                return true;
            } else {
                return false;
            }
        }
    }
}

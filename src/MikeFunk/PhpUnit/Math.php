<?php
/**
 * Simple example math class
 *
 * @package PhpUnit
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpUnit;

/**
 * Math
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class Math
{

    /**
     * add two numbers together. Wow. Such complicated.
     *
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function add($number1, $number2)
    {
        return $number1 + $number2;
    }
}

<?php
/**
 * Math PHPUnit test
 *
 * @package AutoClassifiedsPlatform
 * @copyright 2015 Internet Brands, Inc. All Rights Reserved.
 */
namespace MikeFunk\PhpUnit\Tests;

use MikeFunk\PhpUnit\Math;
use PHPUnit_Framework_TestCase;

/**
 * MathTest
 *
 * @author Michael Funk <mike.funk@internetbrands.com>
 */
class MathTest extends PHPUnit_Framework_TestCase
{

    /**
     * math class instance
     *
     * @var Math
     */
    private $math;

    /**
     * setUp
     *
     * @test
     * @return void
     */
    public function setUp()
    {
        $this->math = new Math();
    }

    /**
     * itAddsTwoNumbers test
     *
     * @test
     * @return void
     */
    public function itAddsTwoNumbers()
    {
        $expected = 2;
        $actual = $this->math->add(1, 1);
        $this->assertEquals($expected, $actual);
    }
}

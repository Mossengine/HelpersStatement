<?php

/**
 * Class HelpersStatementTest
 */
class HelpersStatementTest extends PHPUnit_Framework_TestCase
{
    public function testIfIs() {
        foreach (
            [
                [1, '==', '1'],
                [1, '!=', '2'],
                [1, '===', 1],
                [1, '!==', 2],
                [2, '>', 1],
                [3, '>=', 3],
                [5, '<', 6],
                [4, '<=', 4]
            ]
            as $arrayTest
        ) {
            $this->assertTrue(
                \Mossengine\Helpers\_Statement\_Is::_Is(
                    $arrayTest[0],
                    $arrayTest[1],
                    $arrayTest[2]
                )
            );
        }
    }
    public function testIfNotIs() {
        foreach (
            [
                [1, '==', '2'],
                [1, '!=', '1'],
                [1, '===', 2],
                [1, '!==', 1],
                [1, '>', 2],
                [2, '>=', 3],
                [6, '<', 5],
                [5, '<=', 4]
            ]
            as $arrayTest
        ) {
            $this->assertFalse(
                \Mossengine\Helpers\_Statement\_Is::_Is(
                    $arrayTest[0],
                    $arrayTest[1],
                    $arrayTest[2]
                )
            );
        }
    }
    public function testIfIsInvalid() {
        $this->assertFalse(
            \Mossengine\Helpers\_Statement\_Is::_Is(
                1,
                'banana',
                1
            )
        );
    }
    public function testIfIsAlwaysTrue() {
        $this->assertTrue(
            \Mossengine\Helpers\_Statement\_IsAlwaysTrue::_IsAlwaysTrue()
        );
    }
    public function testIfIsAlwaysFalse() {
        $this->assertFalse(
            \Mossengine\Helpers\_Statement\_IsAlwaysFalse::_IsAlwaysFalse()
        );
    }

}
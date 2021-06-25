<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsNotSame
 * @package Mossengine\Helpers\_Statement
 */
class _IsNotSame
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsNotSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft !== $mixedRight);
    }

}
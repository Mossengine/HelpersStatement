<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsMoreOrSame
 * @package Mossengine\Helpers\_Statement
 */
class _IsMoreOrSame
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsMoreOrSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft >= $mixedRight);
    }

}
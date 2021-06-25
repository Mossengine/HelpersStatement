<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsSame
 * @package Mossengine\Helpers\_Statement
 */
class _IsSame
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft === $mixedRight);
    }

}
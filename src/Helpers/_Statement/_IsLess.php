<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsLess
 * @package Mossengine\Helpers\_Statement
 */
class _IsLess
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsLess($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft < $mixedRight);
    }

}
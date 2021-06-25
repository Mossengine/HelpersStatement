<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsLessOrSame
 * @package Mossengine\Helpers\_Statement
 */
class _IsLessOrSame
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsLessOrSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft <= $mixedRight);
    }

}
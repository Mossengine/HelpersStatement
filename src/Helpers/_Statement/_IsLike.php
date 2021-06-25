<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsLike
 * @package Mossengine\Helpers\_Statement
 */
class _IsLike
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsLike($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft == $mixedRight);
    }

}
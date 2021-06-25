<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsNotLike
 * @package Mossengine\Helpers\_Statement
 */
class _IsNotLike
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsNotLike($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft != $mixedRight);
    }

}
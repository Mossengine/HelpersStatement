<?php namespace Mossengine\Helpers\_Statement;

/**
 * Class _IsMore
 * @package Mossengine\Helpers\_Statement
 */
class _IsMore
{

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function _IsMore($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft > $mixedRight);
    }

}
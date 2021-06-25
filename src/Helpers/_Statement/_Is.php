<?php namespace Mossengine\Helpers\_Statement;

use Illuminate\Support\Arr;

/**
 * Class _Is
 * @package Mossengine\Helpers\_Statement
 */
class _Is
{

    /**
     * @param $mixedLeft
     * @param string $operator
     * @param $mixedRight
     * @return bool
     */
    public static function _Is($mixedLeft, string $operator, $mixedRight) : bool {
        $stringClassAndMethod = Arr::get(
            [
                '==' => '_IsLike',
                '===' => '_IsSame',
                '!=' => '_IsNotLike',
                '!==' => '_IsNotSame',
                '>' => '_IsMore',
                '>=' => '_IsMoreOrSame',
                '<' => '_IsLess',
                '<=' => '_IsLessOrSame'
            ],
            $operator,
            '_IsAlwaysFalse'
        );

        return call_user_func_array(
            [
                'Mossengine\\Helpers\\_Statement\\' . $stringClassAndMethod,
                $stringClassAndMethod
            ],
            [$mixedLeft, $mixedRight]
        );
    }

}
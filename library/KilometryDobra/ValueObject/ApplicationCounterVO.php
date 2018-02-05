<?php
namespace KilometryDobra\ValueObject;

Class ApplicationCounterVO extends AbstractValueObject {

    public static function getCounterString($counterValue)
    {
        if ($counterValue < 100) {
            return '0' . ((string) $counterValue);
        }

        return $counterString = (string) $counterValue;
    }
}

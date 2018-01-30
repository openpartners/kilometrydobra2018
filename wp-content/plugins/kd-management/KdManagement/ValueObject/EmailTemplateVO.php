<?php

namespace KdManagement\ValueObject;

class EmailTemplateVO
{
    const PAYMENT_SUCCESS   = 1;
    const PAYMENT_NEW       = 2;

    public static $emailTemplateToFile = [
        self::PAYMENT_SUCCESS   => 'emails/paymentSuccess',
        self::PAYMENT_NEW       => 'emails/paymentNew'
    ];
}

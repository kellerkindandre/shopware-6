<?php

declare(strict_types=1);

namespace PayonePayment\Payone\Request\IDeal;

use PayonePayment\Struct\PaymentTransaction;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;

class IDealAuthorizeRequest extends AbstractIDealAuthorizeRequest
{
    public function getRequestParameters(
        PaymentTransaction $transaction,
        RequestDataBag $dataBag,
        Context $context
    ): array {
        return array_merge(parent::getRequestParameters($transaction, $dataBag, $context), [
            'request' => 'authorization',
        ]);
    }
}

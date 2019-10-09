<?php

/**
 * Transaction request model
 *
 * @copyright   2019 Concardis GmbH
 * @author      Paylink Development Team <info@pay-link.eu>
 * @since       v2.0
 */
namespace Paylink\Models\Request;

/**
 * Transaction class
 *
 * @package Paylink\Models\Request
 */
class Transaction extends \Paylink\Models\Base
{
    /** @var int $amount */
    protected $amount;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Paylink\Models\Response\Transaction();
    }
}

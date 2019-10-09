<?php

/**
 * The PaymentProvider request model.
 *
 * @author    Paylink Development <dev@pay-link.eu>
 * @copyright 2019 Concardis GmbH
 * @since     v2.0
 */

namespace Paylink\Models\Request;

/**
 * Class PaymentProvider
 * @package Paylink\Models\Request
 */
class PaymentProvider extends \Paylink\Models\Base
{
    /** @var string $name */
    protected $name;

    /** @var array $paymentMethods */
    protected $paymentMethods;

    /** @var array $activePaymentMethods */
    protected $activePaymentMethods;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return array
     */
    public function getActivePaymentMethods()
    {
        return $this->activePaymentMethods;
    }

    /**
     * @param array $activePaymentMethods
     */
    public function setActivePaymentMethods($activePaymentMethods)
    {
        $this->activePaymentMethods = $activePaymentMethods;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Paylink\Models\Response\PaymentProvider();
    }
}

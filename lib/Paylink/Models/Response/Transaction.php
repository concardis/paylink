<?php

/**
 * Transaction response model
 * @copyright 2019 Concardis GmbH
 * @since     v2.0
 */
namespace Paylink\Models\Response;

/**
 * Transaction class
 *
 * @package Paylink\Models\Response
 */
class Transaction extends \Paylink\Models\Request\Transaction
{

    private $uuid;
    private $time;
    private $status;
    private $lang;
    private $psp;
    private $payment;

    /**
     * @access  public
     * @param   string  $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @access  public
     * @param   string  $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @access  public
     * @param   string  $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @access  public
     * @param   string  $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @access  public
     * @param   string  $psp
     */
    public function setPsp($psp)
    {
        $this->psp = $psp;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getPsp()
    {
        return $this->psp;
    }

    /**
     * @access  public
     * @param   array  $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @access  public
     * @return  array
     */
    public function getPayment()
    {
        return $this->payment;
    }
}

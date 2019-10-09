<?php
/**
 * The AuthToken response model
 * @copyright 2019 Concardis GmbH
 * @since     v1.0
 */
namespace Paylink\Models\Response;

/**
 * Class AuthToken
 * @package Paylink\Models\Response
 */
class AuthToken extends \Paylink\Models\Request\Invoice
{
    protected $authToken = '';
    protected $authTokenExpirationDate = null;
    protected $link = '';

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = $authToken;
    }

    /**
     * @return null
     */
    public function getAuthTokenExpirationDate()
    {
        return $this->authTokenExpirationDate;
    }

    /**
     * @param null $authTokenExpirationDate
     */
    public function setAuthTokenExpirationDate($authTokenExpirationDate)
    {
        $this->authTokenExpirationDate = $authTokenExpirationDate;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getSubscriptionPeriodMinAmount()
    {
        return $this->subscriptionPeriodMinAmount;
    }

    /**
     * @param string $subscriptionPeriodMinAmount
     */
    public function setSubscriptionPeriodMinAmount($subscriptionPeriodMinAmount)
    {
        $this->subscriptionPeriodMinAmount = $subscriptionPeriodMinAmount;
    }
}

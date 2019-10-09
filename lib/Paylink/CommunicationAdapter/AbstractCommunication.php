<?php
/**
 * This class is a template for all communication handler classes.
 * @copyright 2019 Concardis GmbH
 * @since     v1.0
 */
namespace Paylink\CommunicationAdapter;

/**
 * Class AbstractCommunication
 * @package Paylink\CommunicationAdapter
 */
abstract class AbstractCommunication
{
    /**
     * Perform an API request
     *
     * @param string $apiUrl
     * @param array  $params
     * @param string $method
     *
     * @return mixed
     */
    abstract public function requestApi($apiUrl, $params = array(), $method = 'POST');
}

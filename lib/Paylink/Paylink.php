<?php
/**
 * The Paylink client API basic class file
 * @copyright 2019 Concardis GmbH
 * @since     v1.0
 */
namespace Paylink;

use Paylink\Communicator;

/**
 * All interactions with the API can be done with an instance of this class.
 * @package Paylink
 */
class Paylink
{
    /**
     * @var Communicator The object for the communication wrapper.
     */
    protected $communicator;

    /**
     * Generates an API object to use for the whole interaction with Paylink.
     *
     * @param string $instance             The name of the Paylink instance
     * @param string $apiSecret            The API secret which can be found in the Paylink administration
     * @param string $communicationHandler The preferred communication handler.
     *                                     If nothing is defined the Paylink API will use the cURL communicator.
     */
    public function __construct($instance, $apiSecret, $communicationHandler = '', $apiBaseDomain = Communicator::API_URL_BASE_DOMAIN)
    {
        $this->communicator = new Communicator(
            $instance,
            $apiSecret,
            $communicationHandler ?: Communicator::DEFAULT_COMMUNICATION_HANDLER,
            $apiBaseDomain
        );
    }

    /**
     * This method returns the version of the API communicator which is the API version used for this
     * application.
     *
     * @return string The version of the API communicator
     */
    public function getVersion()
    {
        return $this->communicator->getVersion();
    }

    /**
     * This magic method is used to call any method available in communication object.
     *
     * @param string $method The name of the method called.
     * @param array  $args   The arguments passed to the method call. There can only be one argument which is the model.
     *
     * @return \Paylink\Models\Response\Base[]|\Paylink\Models\Response\Base
     * @throws \Paylink\PaylinkException The model argument is missing or the method is not implemented
     */
    public function __call($method, $args)
    {
        if (!$this->communicator->methodAvailable($method)) {
            throw new \Paylink\PaylinkException('Method ' . $method . ' not implemented');
        }
        if (empty($args)) {
            throw new \Paylink\PaylinkException('Argument model is missing');
        }
        $model = current($args);
        return $this->communicator->performApiRequest($method, $model);
    }
}

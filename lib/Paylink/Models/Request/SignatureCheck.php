<?php
/**
 * The signatureCheck request model
 * @author    Remo Siegenthaler <remo.siegenthaler@pay-link.eu>
 * @copyright 2019 Concardis GmbH
 * @since     v2.0
 */
namespace Paylink\Models\Request;

/**
 * Class SignatureCheck
 * @package Paylink\Models\Request
 */
class SignatureCheck extends \Paylink\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Paylink\Models\Response\SignatureCheck();
    }
}

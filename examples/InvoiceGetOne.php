<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your paylink installation.
// https://{$instanceName}.pay-link.eu
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the paylink secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the paylink administration
$secret = 'YOUR_SECRET';

$paylink = new \Paylink\Paylink($instanceName, $secret);

$invoice = new \Paylink\Models\Request\Invoice();
$invoice->setId(2);
try {
    $response = $paylink->getOne($invoice);
    var_dump($response);
} catch (\Paylink\PaylinkException $e) {
    print $e->getMessage();
}

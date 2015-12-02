<?php

namespace Ubikz\Pyt;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Message\Response;
use Ubikz\Pyt\Config\Config;
use Ubikz\Pyt\Manager\Connect;

/**
 * Class Pyt
 * @package Ubikz\Pyt
 */
class Pyt
{
    /**
     * @param $action
     * @param $parameters
     * @return null
     */
    public static function __callStatic($action, $parameters)
    {
        /** @var Response|null $response */
        $response = null;

        /** @var Config $config */
        $query = $parameters[0];
        $config = $parameters[1];
        $url =
            $config->getOntimeUrl() . '/api/v' . $config->getApiVersion() . '/' .
            $action . '?' . http_build_query($query);
        try {
            $request = (new Client($url))->createRequest('GET', $url, [
                'Authorization' => 'Bearer ' . $config->getToken(),
            ]);
            $response = $request->send();
        } catch (BadResponseException $e) {
            $error = $e->getResponse()->json();
            if (isset($error['error']) && $error['error'] === 'invalid_token') {
                $parameters['config']->setToken((new Connect($config))->requestToken());
                $response = self::__callStatic($action, $parameters);
            } elseif (in_array($e->getResponse()->getStatusCode(), [404])) {
                $response = null;
            } elseif (isset($error['error_description'])) {
                $response['error'] = $e->getResponse()->json();
            }
        }

        return $response ? $response->json() : '{}';
    }
}

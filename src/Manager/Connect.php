<?php

namespace Ubikz\Pyt\Manager;

use Guzzle\Http\StaticClient;

/**
 * Class Connect
 * @package Ubikz\Pyt\Manager
 */
class Connect extends AbstractManager
{
    public function requestToken()
    {
        $token = null;
        $parameters = [
            'grant_type'    => 'password',
            'username'  => $this->config->getUsername(),
            'password'  => $this->config->getPassword(),
            'client_id' => $this->config->getClientId(),
            'client_secret' => $this->config->getClientSecret(),
            'scope' => $this->config->getScope(),
        ];

        $response = StaticClient::get($this->config->getOntimeUrl() . '/api/oauth2/token', [
            'query' => $parameters,
        ]);
        if ($response->getStatusCode() === 200) {
            $jsonResponse = $response->json();
            if (isset($jsonResponse['access_token'])) {
                $token = $jsonResponse['access_token'];
            }
        }

        return $token;
    }
}

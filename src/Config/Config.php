<?php

namespace Ubikz\Pyt\Config;

/**
 * Class Config
 * @package Ubikz\Pyt\Config
 */
class Config implements InterfaceConfig
{
    /** @return string */
    private $ontimeUrl;

    /** @return string */
    private $apiVersion;

    /** @return string */
    private $clientId;

    /** @return string */
    private $clientSecret;

    /** @return string */
    private $scope;

    /** @return string */
    private $username;

    /** @return string */
    private $password;

    /** @return string */
    private $token;

    /**
     * @return mixed
     */
    public function getOntimeUrl()
    {
        return $this->ontimeUrl;
    }

    /**
     * @param $ontimeUrl
     * @return $this
     */
    public function setOntimeUrl($ontimeUrl)
    {
        $this->ontimeUrl = $ontimeUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param $apiVersion
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}

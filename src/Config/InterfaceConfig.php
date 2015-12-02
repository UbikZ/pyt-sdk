<?php

namespace Ubikz\Pyt\Config;

/**
 * Interface InterfaceConfig
 * @package Ubikz\Pyt\Config
 */
interface InterfaceConfig
{
    /** @return string */
    public function getOntimeUrl();

    /** @return string */
    public function getApiVersion();

    /** @return string */
    public function getClientId();

    /** @return string */
    public function getClientSecret();

    /** @return string */
    public function getScope();

    /** @return string */
    public function getUsername();

    /** @return string */
    public function getPassword();

    /** @return string */
    public function getToken();
}

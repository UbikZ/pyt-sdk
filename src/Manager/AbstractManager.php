<?php

namespace Ubikz\Pyt\Manager;

use Ubikz\Pyt\Config\Config;

/**
 * Class AbstractManager
 * @package Ubikz\Pyt\Manager
 */
abstract class AbstractManager
{
    /** @var  Config */
    protected $config;

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }
}
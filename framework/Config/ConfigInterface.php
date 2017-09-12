<?php
namespace Fd\Config;

interface ConfigInterface
{
    public static function getInstance($path);

    public function get($key);
}
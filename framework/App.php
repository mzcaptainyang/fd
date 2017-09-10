<?php
namespace Fd;

class App
{
    use InstanceTrait;

    // App 以哪种模式运行
    const APP_MODE_WEB = 'web';
    const APP_MODE_CONSOLE = 'console';

    public function run($rootPath, $appName, $appMode = null)
    {

    }
}
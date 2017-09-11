<?php
namespace Fd;

class App
{
    use InstanceTrait;

    // App 以哪种模式运行
    const APP_MODE_WEB = 'web';
    const APP_MODE_CONSOLE = 'console';

    private $init;
    private $appMode = self::APP_MODE_WEB;
    private $appName;
    private $appPath;
    private $appNamespace;
    private $rootPath;

    private function init($rootPath, $appName, $appMode = null)
    {
        $this->init = true;
        $this->appName = $appName;
        $this->appMode = $appMode;

        $rootPath = rtrim($rootPath, '/\\');
        $this->appPath = $rootPath . DS . 'src' . DS . 'App' . DS . $appName;
        $this->rootPath = $rootPath;
        $this->appNamespace = APP_NAMESPACE . DS . $this->appName;
    }

    public function run($rootPath, $appName, $appMode = null)
    {
        // 初始化框架
        if (!$this->init) {
            $this->init($rootPath, $appName, $appMode);
        }
    }
}
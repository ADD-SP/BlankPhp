<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 16:43
 */

namespace Blankphp\Provider;


use Blankphp\Application;
use Blankphp\Config\Config;
use Blankphp\Config\ConfigServiceProvider as BaseProvider;

class ConfigServiceProvider extends BaseProvider
{
    protected $configPath = APP_PATH . 'config/';

    public function filter()
    {
        if ($this->app->getSignal('config')==[]) {
            $config = [];
            if (is_dir($this->configPath)) {
                if ($dh = opendir($this->configPath)) {
                    while (($file = readdir($dh)) !== false) {
                        if (preg_match_all("/(.+?)\.php/", $file, $matches)) {
                            $config[$matches[1][0]] = require $this->configPath . $matches[0][0];
                        }
                    }
                    closedir($dh);
                }
            }
            $this->app->signal('config', $config);
        }else{
            $this->app->instance('config.get',new Config());
        }
    }




}
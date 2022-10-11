<?php

namespace YourPluginName\Utility;

use Cake\Core\App;
use Cake\Core\Configure;
use RuntimeException;

class Config
{

    public function __constructor()
    {
        self::loadPluginConfiguration();
    }

    public static function loadPluginConfiguration()
    {
        if (file_exists(ROOT . DS . 'config' . DS . 'app_your_plugin_name.php')) {
            Configure::load('app_your_plugin_name');
        } else {
            Configure::load('YourPluginName.app_your_plugin_name');
        }

    }

    /**
     *
     * @return null|string
     */
    public static function defaultDatabaseConnection(): ?string
    {
        return Configure::read('YourPluginName.connection', null);
    }

    /**
     * Default log status
     *
     * @return boolean
     */
    public static function defaultLog(): bool
    {
        return Configure::read('YourPluginName.log', false);
    }

    /**
     * Token Security
     *
     * @return string
     */
    public static function tokenSecurity(): string
    {
        return Configure::read('YourPluginName.token_security', 'HS256');
    }

}

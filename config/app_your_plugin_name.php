<?php

/**
 * This file configures default behavior for all workers
 *
 * To modify these parameters, copy this file into your own CakePHP config directory or copy the array into your existing file.
 */
return [
    'YourPluginName' => [

        /**
         * Default plugin connection
         */
        'connection' => 'default',

        /**
         * Default plugin locale
         */
        'defaultLocale' => 'en_US',

        /**
         *  Determine whether logging is enabled
         */
        'log' => false,

        /**
         *  Token Security
         */
        'token_security' => 'HS256',

    ],
];

<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        /*// set target language to be Russian
        'language' => 'it',

        // set source language to be English
        'sourceLanguage' => 'en',

        'languages' => ['en', 'it'],*/

        /*'language' => 'it-IT', // <- here!*/
    ],
];

<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$cookieValidationKey = '3d6b6e5a1d3c2b2a1e1f5b6a7d8e9f0d';

$config = [
  'id' => 'basic',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'aliases' => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
  ],
  'components' => [
    'request' => [
      'cookieValidationKey' => $cookieValidationKey,
        'enableCsrfValidation' => true,
    ],
    'cache' => [
      'class' => 'yii\caching\FileCache',
    ],
    'user' => [
      'identityClass' => 'app\models\User',
      'enableAutoLogin' => true,
    ],
    'errorHandler' => [
      'errorAction' => 'site/error',
    ],
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
    ],
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets' => [
        [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ],
      ],
    ],
    'db' => $db,
    'assetManager' => [
      'bundles' => [
        'yii\web\JqueryAsset' => [
          'sourcePath' => '@bower/jquery/dist',
          'js' => [
            'jquery.min.js',
          ],
        ],
      ],
    ],
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [],
    ],
  ],
  'params' => $params,
];

return $config;

<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mishika.c2fjpgtysnhg.us-west-2.rds.amazonaws.com:3306;dbname=newschema',
            'username' => 'ravialmt1',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
'class' => 'yii\swiftmailer\Mailer',
'useFileTransport' => false,
'transport' => [
'class' => 'Swift_SmtpTransport',
'host' => 'smtp.gmail.com',
'username' => 'ravialmt2@gmail.com',
'password' => 'boxer123',
'port' => '587',
'encryption' => 'tsl',
],
],
    ],
];

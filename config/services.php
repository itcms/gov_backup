<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'elastic' => [
        'endpoint' => env('ELASTIC_ENDPOINT')
    ],

    'storage' => [
        'bucket' => 'govbackup-public',
//        'type' => 'openstack',
//        'options' => [
//            'username' => env('OPENSTACK_USERNAME'),
//            'password' => env('OPENSTACK_PASSWORD'),
//            'tenantId' => env('OPENSTACK_TENANT_ID'),
//            'authUrl'  => env('OPENSTACK_AUTH_URL', 'https://auth.cloud.ovh.net/v2.0'),
//            'region'   => env('OPENSTACK_REGION', 'WAW1'),
//            'keystoneAuth' => env('OPENSTACK_KEYSTONE_AUTH', 'v2'),
//        ],
        'type' => 's3',
        'options' => [
            'endpoint' => env('S3_ENDPOINT'),
            'accessKey' => env('S3_ACCESS_KEY'),
            'secretKey' => env('S3_SECRET_KEY'),
        ]
    ],
];

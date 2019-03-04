<?php
/**
 * Part of the GoCardless Pro PHP Client package integration for Laravel
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Gocardless Laravel
 * @version    0.1.0
 * @author     Nested.net
 * @license    MIT
 * @link       https://nested.net
 */

return [

    /**
     * The environment of the Gocardless API that you want to use.
     * 'SANDBOX' || 'LIVE'
     */
    'environment' => env('GOCARDLESS_ENVIRONMENT', 'SANDBOX'),

    /**
     * Your Gocardless API token.
     */
    'token' => env('GOCARDLESS_TOKEN'),

    'webhooks' => [

        /**
         * Your Gocardless webhook secret endpoint.
         */
        'webhook_endpoint_secret' => env('GOCARDLESS_WEBHOOK_ENDPOINT_SECRET'),

        /**
         * Your Gocardless webhook model. The class should be or extend GocardlessWebhookCall.
         */
        'model' => Nestednet\Gocardless\Laravel\GocardlessWebhookCall::class,
    ],
];
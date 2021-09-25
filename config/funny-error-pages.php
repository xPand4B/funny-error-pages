<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Active Error Pages
    |--------------------------------------------------------------------------
    |
    | Select which error pages you would like to have active. They are then
    | displayed by a random chance.
    | If nothing is set at all the Laravel default will be displayed.
    |
    | Available pages:
    |   404 => heart, lost, space, vampire
    |
    */

    'active_error_pages' => [
        '404' => [
            'heart',
            'lost',
            'space',
            'vampire',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Redirect link
    |--------------------------------------------------------------------------
    |
    | Set the redirect link for your error pages.
    |
    */

    'redirect_link' => url('/'),
];

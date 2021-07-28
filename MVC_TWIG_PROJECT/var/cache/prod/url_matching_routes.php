<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'show-my-name', '_controller' => 'App\\Controller\\LearningController::showMyName'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/change/([^/]++)(*:23)'
                .'|/about\\-([^/]++)(*:46)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'change-name', '_controller' => 'App\\Controller\\LearningController::changeName'], ['name'], null, null, false, true, null]],
        46 => [
            [['_route' => 'about-me', '_controller' => 'App\\Controller\\LearningController::aboutMe'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

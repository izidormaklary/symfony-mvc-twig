<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'change-name' => [['name'], ['_controller' => 'App\\Controller\\LearningController::changeName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/change']], [], []],
    'show-my-name' => [[], ['_controller' => 'App\\Controller\\LearningController::showMyName'], [], [['text', '/']], [], []],
    'about-me' => [['name'], ['_controller' => 'App\\Controller\\LearningController::aboutMe'], [], [['variable', '-', '[^/]++', 'name', true], ['text', '/about']], [], []],
];

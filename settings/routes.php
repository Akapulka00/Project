<?php

return [
    [
        'path' => '/',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::index'
    ],
    [
        'path' => '/home',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::index'
    ],
    [
        'path' => '/reception',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::zapis'
    ],
    [
    'path' => '/show_course',
    'method' => 'POST',
    'controller' => 'Course\Controllers\AddCourseController::show_course'
    ],
    [
        'path' => '/otziv',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::otziv'
    ],
    [
        'path' => '/autification',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::autification'
    ],
    [
        'path' => '/admin_panel',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::admin_panel'
    ],
    [
        'path' => '/portfolio',
        'method' => 'GET',
        'controller' => 'Course\Controllers\IndexController::portfolio'
    ]

];

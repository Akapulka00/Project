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
    'path' => '/show_course',
    'method' => 'POST',
    'controller' => 'Course\Controllers\AddCourseController::show_course'
    ],
    [
    'path' => '/addcake',
    'method' => 'POST',
    'controller' => 'Course\Controllers\AddCourseController::addCake'
   ],
  [
    'path' => '/cake',
    'method' => 'GET',
    'controller' => 'Course\Controllers\AddCourseController::showCake'
  ],
  [
    'path' => '/getcake',
    'method' => 'POST',
    'controller' => 'Course\Controllers\AddCourseController::printcakeById'
  ],
  [
    'path' => '/getcake',
    'method' => 'GET',
    'controller' => 'Course\Controllers\AddCourseController::getCakeByID'
  ],
  [
    'path' => '/delcake',
    'method' => 'POST',
    'controller' => 'Course\Controllers\AddCourseController::delCakeById'
  ]


];

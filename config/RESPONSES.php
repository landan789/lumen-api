<?php
/**
 * Created by PhpStorm.
 * User: Landan
 * Date: 2018/9/28
 * Time: 14:11
 *
 */return [
    'SUCCEED_TO_SHOW_LOTTERY' => [
        'STATUS' => 200,
        'RESULT' => 1,
        'CODE' => 0,
        'MESSAGE' => 'succeed to show lottery'
    ],
    'SUCCEED_TO_SHOW_ISSUE' => [
        'STATUS' => 200,
        'RESULT' => 1,
        'CODE' => 0,
        'MESSAGE' => 'succeed to show issue'
    ],

    'IS_UNKNOWN_ERROR' => [
        'STATUS' => 500,
        'RESULT' => -1,
        'CODE' => -0.01,
        'MESSAGE' => 'is unknown error'
    ],

    'REQUEST_UNDEFINED_PATH' => [
        'STATUS' => 501,
        'RESULT' => -1,
        'CODE' => -0.02,
        'MESSAGE' => 'request undefined path'
    ],

    'FAIL_TO_SHOW_LOTTERY' => [
        'STATUS' => 500,
        'RESULT' => -1,
        'CODE' => -1.01,
        'MESSAGE' => 'fail to show lottery'
    ],


    'JWT_IS_FORBIDDEN' => [
        'STATUS' => 403,
        'RESULT' => -1,
        'CODE' => -0.01,
        'MESSAGE' => 'is forbidden'
    ],
    'JWT_IS_EXPIRED' => [
        'STATUS' => 403,
        'RESULT' => -1,
        'CODE' => -3,
        'MESSAGE' => 'is expired'
    ],

    'JWT_IS_UNAUTHORIZED' => [
        'STATUS' => 401,
        'RESULT' => -1,
        'CODE' => -0.02,
        'MESSAGE' => 'jwt is authorized'
    ],
    'JWT_IS_EMPTY' => [
        'STATUS' => 401,
        'RESULT' => -1,
        'CODE' => -1,
        'MESSAGE' => 'jwt is empty'
    ],

];
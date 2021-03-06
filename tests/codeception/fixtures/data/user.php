<?php

use \app\models\User;

return [
    '1-superuser' => [
        'id' => 1,
        'username' => 'superuser',
        'email' => 'superuser@example.com',
        'auth_key' => 'dKz8PzyduJUDyrrhAC05-Mn53IvaXvoA',
        // password: fghfgh
        'password' => '$2y$13$1hW57Qext3hd0jwNFl7pQuDcd0bIBo4h4KXF.3Uwxt/yI77Yqvx82',
        'password_reset_token' => 'aPDnNGI85L4va3dYJ_0xoz-Kw7NtzloS_' . time(),
        'email_confirm_token' => 'a7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_ACTIVE,
        'role' => User::ROLE_SUPERUSER
    ],
    '2-active' => [
        'id' => 2,
        'username' => 'example-2',
        'email' => 'example-2@example.com',
        'auth_key' => 'xFK_r79Q976mtxqccblijO-SmqjBwbNd',
        // password: 123123
        'password' => '$2y$13$2c0xt9QwWVq1yBUPmWl3ZeD/poVF8cyrwWrX87suGrYyRbP47Y1Mq',
        'password_reset_token' => 'bPDnNGI85L4va3dYJ_0xoz-Kw7NtzloS_' . time(),
        'email_confirm_token' => 'b7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_ACTIVE
    ],
    '3-blocked' => [
        'id' => 3,
        'username' => 'example-blocked',
        'email' => 'example-blocked@example.com',
        'auth_key' => 'xFK_r79Q976mtxqccblijO-SmqjBwbNd',
        // password: 123123
        'password' => '$2y$13$2c0xt9QwWVq1yBUPmWl3ZeD/poVF8cyrwWrX87suGrYyRbP47Y1Mq',
        'password_reset_token' => 'cPDnNGI85L4va3dYJ_0xoz-Kw7NtzloS_' . time(),
        'email_confirm_token' => 'c7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_BLOCKED
    ],
    '4-deleted' => [
        'id' => 4,
        'username' => 'example-deleted',
        'email' => 'example-deleted@example.com',
        'auth_key' => 'xFK_r79Q976mtxqccblijO-SmqjBwbNd',
        // password: 123123
        'password' => '$2y$13$2c0xt9QwWVq1yBUPmWl3ZeD/poVF8cyrwWrX87suGrYyRbP47Y1Mq',
        'password_reset_token' => 'dPDnNGI85L4va3dYJ_0xoz-Kw7NtzloS_' . time(),
        'email_confirm_token' => 'd7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_DELETED
    ],
    '5-wrong_password_reset_token' => [
        'id' => 5,
        'username' => 'example-5',
        'email' => 'example-5@example.com',
        'auth_key' => 'xFK_r79Q976mtxqccblijO-SmqjBwbNd',
        // password: 123123
        'password' => '$2y$13$2c0xt9QwWVq1yBUPmWl3ZeD/poVF8cyrwWrX87suGrYyRbP47Y1Mq',
        'password_reset_token' => '123_0',
        'email_confirm_token' => 'd7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_ACTIVE
    ],
    '6-active' => [
        'id' => 6,
        'username' => 'example-6',
        'email' => 'example-6@example.com',
        'auth_key' => 'xFK_r79Q976mtxqccblijO-SmqjBwbNd',
        // password: 123123
        'password' => '$2y$13$2c0xt9QwWVq1yBUPmWl3ZeD/poVF8cyrwWrX87suGrYyRbP47Y1Mq',
        'password_reset_token' => 'dPDnNGI85L4va3dYJ_0xoz-Kw7NtzloS_' . time(),
        'email_confirm_token' => 'd7QKA1EkFe0cNoUJ7hIwDPDtdQtrQ7JY_' . time(),
        'date_create' => '2015-01-01 12:02:00',
        'date_update' => '2015-01-01 12:02:00',
        'ip' => '2130706433',
        'status' => User::STATUS_ACTIVE
    ],
];

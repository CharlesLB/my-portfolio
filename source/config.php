<?php

//
// ─── DATABASE ───────────────────────────────────────────────────────────────────
//

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "200.131.96.47",
    "port" => "3306",
    "dbname" => "alunolp2i",
    "username" => "alunolp2i",
    "passwd" => "lp2iBD_2019",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
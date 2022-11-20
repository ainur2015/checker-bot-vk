<?php
$conf = json_decode(file_get_contents("conf.json"));

define("BOT_TOKEN", $conf->bot->token, false);
define("BOT_CODE", $conf->bot->authcode, false);
define("MYSQL_HOST", $conf->database->host, false);
define("MYSQL_USER", $conf->database->user, false);
define("MYSQL_PASSWORD", $conf->database->password, false);
define("MYSQL_DB", $conf->database->db, false);

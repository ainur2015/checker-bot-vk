<?php
$storage            = new \Nette\Caching\Storages\FileStorage("tmp");
$connection         = new \Nette\Database\Connection("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB, MYSQL_USER, MYSQL_PASSWORD);
$structure          = new \Nette\Database\Structure($connection, $storage);
$conventions        = new \Nette\Database\Conventions\DiscoveredConventions($structure);
$GLOBALS["context"] = new \Nette\Database\Context($connection, $structure, $conventions, $storage); 

function database(): Nette\Database\Context
{
    return $GLOBALS["context"];
}

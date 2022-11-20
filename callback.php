<?php
require "vendor/autoload.php";
require "includes/constants.php";

$input = json_decode(file_get_contents("php://input"));
if($input->type === "confirmation")
    exit(BOT_CODE);
else if($input->type !== "message_new")
    exit("ok");

require "includes/make_db.php";
require "includes/vk_driver.php";
require "includes/dispatcher.php";
dispatchCommand($input->object);

exit("ok");

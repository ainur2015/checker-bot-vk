<?php

function handle($arguments, $message, $print, $resolve, $db, $vk)
{
    $user = $db->table("fulldostup")->get($message->from_id);
    if(!$user)
        $license = "Отсутствует";
    else
        $license = ucfirst($user->groups);
    
    $resolve("profile", [
        "user"    => $message->from_id,
        "name"    => $vk->users->get([
            "user_ids" => $message->from_id
        ])[0]["first_name"],
        "license" => $license,
    ]);
} 

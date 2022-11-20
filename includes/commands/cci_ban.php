<?php

function handle($arguments, $message, $print, $resolve, $db, $vk)
{
    $invalid_args = "[RaidRP]: ▹ Некорректное количество аргументов.\n\n ▹ Использование: give <nick> <time> <Причина бана>";
	$banadministrator = "RaidRP";
    
    $caller = $db->table("fulldostup")->get($message->from_id);
    if(!$caller) return $print("[RaidRP]: ▹ Недостаточно прав.");
    
    switch($arguments[0]) {
        case "give":
            if(sizeof($arguments) !== 4) return $print($invalid_args);
            break;
        case "revoke":
            if(sizeof($arguments) !== 2) return $print($invalid_args);
            break;
        default:
            return $print("[RaidRP]: ▹ Нераспознанная подкоманда.\n\n ▹ Доступные подкоманды:\n ▹  ▹ give <nick> <time> — выдать бан\n ▹  ▹ revoke <nick> — Удалить баны ") ;
    }
    
    if(!$db->table("bannames")->get($arguments[1])) {
        $db->table("bannames")->insert([
            "Name"     => $arguments[1],
            "BanSeconds" => $arguments[2] ?? "0",
			"BanReason" => $arguments[3] ?? "Нет причины",
        ]);
        
        $print("[RaidRP]: ▹ СОСТОЯНИЕ 20170: Пользователь был создан.");
    } else {
        $db->table("bannames")->where("Name", $arguments[1])->update([
            "BanSeconds" => $arguments[2] ?? "0",
			"BanReason" => $arguments[3] ?? "Нет причины",
			
        ]);
        
        $print("[RaidRP]: ▹ СОСТОЯНИЕ 20110: Пользователь был отредактирован.");
    }
} 

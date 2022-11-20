<?php

function handle($arguments, $message, $print, $resolve, $db, $vk)
{
    $invalid_args = "[RaidRP]: ▹ Некорректное количество аргументов.\n\n ▹ Использование: makeadmin give <nick> <lvl>";
    
    $caller = $db->table("fulldostup")->get($message->from_id);
    if(!$caller) return $print("[RaidRP]: ▹ Недостаточно прав.");
    
    switch($arguments[0]) {
        case "give":
            if(sizeof($arguments) !== 3) return $print($invalid_args);
            break;
        default:
            return $print("[RaidRP]: ▹ Нераспознанная подкоманда.\n\n ▹ Доступные подкоманды:\n ▹  ▹ give <nick> <lvl> — выдать админку\n  ") ;
    }
     
	 if(!$db->table("accounts")->get($arguments[1])) {
	       $db->table("accounts")->where("NickName", $arguments[1])->update([
            "Admin" => $arguments[2] ?? "0",
        ]);
        
			
		 $print("[RaidRP]: ▹ Изменения вступили, Если нет такого ника то изменение не будут.....");
    } else {
        $db->table("accounts")->where("NickName", $arguments[1])->update([
            "Admin" => $arguments[2] ?? "0",
        ]);
        
        $print("[RaidRP]: ▹ Изменения вступили, Если нет такого ника то изменение не будут");
    }
} 

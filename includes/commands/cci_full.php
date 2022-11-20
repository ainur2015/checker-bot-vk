<?php

function handle($arguments, $message, $print, $resolve, $db, $vk)
{
    $invalid_args = "[RaidRP]: ▹ Некорректное количество аргументов.\n\n ▹ Использование: full give <nick> ";
    
    $caller = $db->table("fulldostup")->get($message->from_id);
    if(!$caller) return $print("[RaidRP]: ▹ Недостаточно прав.");
    
    switch($arguments[0]) {
        case "give":
            if(sizeof($arguments) !== 2) return $print($invalid_args);
            break;
        default:
            return $print("[RaidRP]: ▹ Нераспознанная подкоманда.\n\n ▹ Доступные подкоманды:\n ▹  ▹ give <nick> <Уник ид>  — выдать фулл\n  ") ;
    }
     
	 if(!$db->table("fulldostup")->get($arguments[1])) {
	       $db->table("fulldostup")->insert([
            "Name"     => $arguments[1],
        ]);
			
		 $print("[RaidRP]: ▹ Изменения вступили, Если нет такого ника то изменение не будут.....");
    } else {
        $db->table("fulldostup")->where("name", $arguments[1])->update([
        ]);
        
        $print("[RaidRP]: ▹ Изменения вступили, Если нет такого ника то изменение не будут");
    }
} 

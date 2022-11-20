<?php

function handle($arguments, $message, $print, $resolve, $db, $vk)
{
    if(sizeof($arguments) !== 1) return $print("[RaidRP]: ▹ Можно указать только 1 имя за раз.");
    
    $user = $db->table("fulldostup")->get($message->from_id);
    if(!$user) return $print("[RaidRP]: ▹ Недостаточно прав.");
    
    $record = $db->table("bannames")->where("Name", $arguments[0])->fetch();
    if(!$record) return $print("[RaidRP]: ▹ На аккаунте бана нет.");
    
    $resolve("bannames", [
        "Name"     => $record->Name,
        "BanAdmin" => $record->BanAdmin,
		"BanReason" => $record->BanReason,
		"BanSeconds" => $record->BanSeconds,
		"BanDate" => $record->BanDate,
		
    ]);
}

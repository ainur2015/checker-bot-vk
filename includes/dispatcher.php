<?php

function makeReplyFunctor($message, $vk)
{
    return (function(string $text) use ($message, $vk) {
        return $vk->messages->send([
            "peer_id"   => $message->peer_id,
            "message"   => $text,
            "random_id" => random_int(256, PHP_INT_MAX),
        ]);
    });
}

function dispatchCommand(object $message)
{
    $command   = explode(" ", $message->text);
    $arguments = array_slice($command, 1);
    $command   = $command[0];
    
    $vk    = new VK;
    $reply = makeReplyFunctor($message, $vk);
    
    @include("includes/commands/cci_$command.php");
    if(!function_exists("handle")) return $message->from_id === $message->peer_id ? $reply(file_get_contents("answers/404.msg")) : NULL;
    
    handle($arguments, $message, $reply, (function(string $file, array $data) use ($reply) {
        $smarty = new Smarty;
        foreach($data as $variable => $value) $smarty->assign($variable, $value);
        
        return $reply($smarty->fetch("answers/$file.msg"));
    }), database(), $vk);
}

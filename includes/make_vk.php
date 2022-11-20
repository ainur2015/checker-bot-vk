<?php
use VK\Client\VKApiClient;
use VK\Client\Enums\VKLanguage;

$GLOBALS["vk"] = new VKApiClient("5.101", VKLanguage::GERMAN);

class VK
{
    function __get(string $name): ?object
    {
        if(!method_exists($GLOBALS["vk"], $name)) return null;
        $object = call_user_func([$GLOBALS["vk"], $name]);
        unset($name);
        
        return (new class($object) {
            private $col;
            
            function __construct(object $object) {
                $this->col = $object;
            }
            
            function __call(string $name, array $arguments)
            {
               return $this->col->{$name}(BOT_TOKEN, $arguments[0]);
            }
        });
    }
}

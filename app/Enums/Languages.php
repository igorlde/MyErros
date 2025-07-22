<?php

namespace App\Enums;

enum Languages:string
{
    case PT_BR = 'pt-br';
    case EN_US = 'en-us';
    case ES_ES = 'es-es';

    public function label():string
    {
        return match($this){
            self::PT_BR => 'português (BRASIL)',
            self::EN_US => 'English (US)',
            self::ES_ES => 'Espanhol (ES)',
        };
    }
}

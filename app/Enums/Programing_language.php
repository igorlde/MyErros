<?php

namespace App\Enums;


enum Programing_language:string
{
    //c++', 'java', 'php', 'go', 'python', 'laravel', 
    //'spring boot', 'c', 'pascal','assembly', 'javascript', 'typescript', 'outros'
    
            
    case CPP = 'C++';
    case JAVA = 'JAVA';
    case PHP = 'PHP';
    case GO = 'go';
    case SQL = 'SQL';
    case PYTHON = 'python';
    case LARAVEL = 'laravel';
    case SPRING_BOOT = 'spring boot';
    case C = 'c';
    case PASCAL = 'pascal';
    case ASSEMBLY = 'assembly';
    case JAVA_SCRIPT = 'javascript';
    case TYPE_SCRIPT = 'typescript';
    case OTHERS = 'outros';
    
    public function label():string{
        return match($this){
            self::CPP => 'C++',
            self::JAVA => 'JAVA',
            self::PHP => 'PHP',
            self::GO => 'go',
            self::SQL => 'SQL',
            self::PYTHON => 'python',
            self::LARAVEL => 'laravel',
            self::SPRING_BOOT => 'spring boot',
            self::C => 'c',
            self::PASCAL => 'pascal',
            self::ASSEMBLY => 'assembly',
            self::JAVA_SCRIPT => 'javascript',
            self::TYPE_SCRIPT => 'typescript',
            self::OTHERS=> 'outros',
        };
    }
}

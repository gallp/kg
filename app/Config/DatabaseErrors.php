<?php
namespace Config;

use Exception;

class DatabaseErrors {
    const ERROR_MAP = [
        // Duplicate entry errors
        1062 => [
            'type' => 'DUPLICATE_ENTRY',
            'message' => 'Wartość jest już używana dla innego rekordu',
            'http_code' => 409
        ],
        
        // Foreign key constraint
        1451 => [
            'type' => 'FOREIGN_KEY_CONSTRAINT', 
            'message' => 'Nie można usunąć rekordu - istnieją powiązane dane',
            'http_code' => 409
        ],
        1452 => [
            'type' => 'FOREIGN_KEY_CONSTRAINT',
            'message' => 'Powiązany rekord nie istnieje',
            'http_code' => 400
        ],
        
        // Connection errors
        1045 => [
            'type' => 'ACCESS_DENIED',
            'message' => 'Błąd dostępu do bazy danych',
            'http_code' => 500
        ],
        2002 => [
            'type' => 'CONNECTION_ERROR',
            'message' => 'Nie można połączyć się z serwerem bazy danych',
            'http_code' => 500
        ],
        
        // Data too long
        1406 => [
            'type' => 'DATA_TOO_LONG',
            'message' => 'Wprowadzono zbyt długą wartość',
            'http_code' => 400
        ],
        
        // Table doesn't exist
        1146 => [
            'type' => 'TABLE_NOT_FOUND',
            'message' => 'Tabela nie istnieje',
            'http_code' => 500
        ]
    ];
    
    public static function getMessage(Exception $e): string {
        $code = $e -> getCode();
        return self::ERROR_MAP[$code]['message'] ?? "Błąd bazy danych (kod: $code)";
    }
    
    public static function getType(int $code): string {
        return self::ERROR_MAP[$code]['type'] ?? 'UNKNOWN_ERROR';
    }
    
    public static function getHttpCode(int $code): int {
        return self::ERROR_MAP[$code]['http_code'] ?? 500;
    }

    public static function getField(Exception $e) : array {

        $message = $e->getMessage();
        d($message);
        
        if(preg_match("/Duplicate entry '(.+)' for key '(.+)'/", $message, $matches)){;
        //dd($matches);
           
            return $matches;

        }
        
        $array[0] = "nieznane pole";
        return $array;

        
        
        
    }
}
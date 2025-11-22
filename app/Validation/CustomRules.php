<?php

namespace App\Validation;

class CustomRules
{
    /**
     * Sprawdza, czy input zawiera tylko litery (w tym polskie) i spacje
     *
     * @param string $str
     * @param string|null $fields
     * @param array|null $data
     * @return bool
     */
    public function polish_letters_space(string $str, string $fields = null, array $data = null): bool
    {
        // Wyrażenie regularne:
        // ^ i $ - początek i koniec całego stringa
        // a-zA-Z - litery angielskie
        // ąćęłńóśźżĄĆĘŁŃÓŚŹŻ - polskie znaki
        // spacja
        // + - co najmniej jeden znak
        return preg_match('/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ ]+$/u', $str) === 1;
    }

    
}

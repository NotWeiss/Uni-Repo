<?php

enum Type: string {
    case HTML = 'html';
    case SPECIAL_CHARACTER = 'special_character';
    case LETTER = 'letter';
    case NUMBER = 'number';
}

class Validator
{
    // directs the input to the desired cleanse function
    public function cleanse(string $value, Type $director) : string
    {
        return match($director)
        {
            Type::HTML => $this->wipeHtml($value),
            Type::SPECIAL_CHARACTER => $this->wipeSpecial($value),
            Type::LETTER => $this->wipeLetter($value),
            Type::NUMBER => $this->wipeNumber($value),
        };
    }

    // wipes HTML tags
    private function wipeHtml(string $data) : string
    {
        return strip_tags($data);
    }

    // Only allowed specias are dash "-" and underscores "_"
    private function wipeSpecial(string $data) : string
    {
        return preg_replace('/[^\w_-]/', '', $data);
    }

    // wipes all letters
    private function wipeLetter(string $data) : string
    {
        return preg_replace('/[A-Za-z]/', '', $data);
    }

    // wipes all numbers
    private function wipeNumber(string $data) : string
    {
        return preg_replace('/[0-9]/', '', $data);
    }

}

?>
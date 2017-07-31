<?php

class Room
{
    public $height;
    public $length;
    public $width;

    public function __construct($height, $width, $length)
    {
        $this -> height = $height;
        $this -> length = $length;
        $this -> width = $width;
    }

    public function roomName()
    {
        return 'it`s WC';
    }

    public function getContent()
    {
        return "height: " . $this -> height . ', width: ' . $this -> width;
    }

    public function getSquare()
    {
        if (empty($this -> square)) {
            $this -> square = $this -> height * $this -> length;
        }
        return $this -> square;
    }

    public function getAmount ()
    {
        $this -> amount = $this -> width * $this -> length * $this -> height;
        return $this -> amount;
    }

//    public static function roomDescription()
//    {
//        return 'it`s default room but ' . self::roomName();
//    }
}
$room = new Room(2, 4, 4);
echo $room -> getAmount();

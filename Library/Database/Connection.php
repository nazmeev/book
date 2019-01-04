<?php
namespace Library\Database;
class Connection{
    public static function connect(){
        $link = mysqli_connect("localhost", "root", "1", "library")
        or die("Ошибка " . mysqli_error($link));
        return $link;
    }
}


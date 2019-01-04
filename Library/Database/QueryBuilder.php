<?php
namespace Library\Database;
class QueryBuilder{
    private $db;
    private $books = [];
    private $defaultBook = ['name', 'author', 'type', 'category'];

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * @param $table
     * @return array
     */
    public function select($table){
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $query);
        while( $row = mysqli_fetch_object($result)){
            $this->books[] = $row;
        }
        mysqli_free_result($result);
        return $this->books;
//        while($row = mysql_fetch_array($result))
//        {
//            echo "Номер: ".$row['id']."<br>\n";
//            echo "Имя: ".$row['firstname']."<br>\n";
//            echo "Фамилия: ".$row['surname']."<br><hr>\n";
//        }
        //return $result;
    }
    function addBook($book){
        echo "<pre>";
        print_r($book);die;
        $fields = [];
        echo "<br>addBook -- start<br>";
        foreach($this->defaultBook as $value){
            $fields[$value] = htmlentities(mysqli_real_escape_string($this->db, $book[$value]));
        }
        print_r($fields);
        echo "<br>addBook -- end<br>";
    }
}
<?php
namespace Library\Database;
class QueryBuilder{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function select($table){
        $query = $this->db->query("SELECT * FROM $table");
        return $query->fetchAll(FETCH_ASSOC);
    }
}
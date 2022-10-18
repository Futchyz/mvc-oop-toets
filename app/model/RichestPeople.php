<?php

class RichestPeople{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getRichestPeople()
    {
        $this->db->query("SELECT * FROM richestpeople ORDER BY Networth DESC;");
        $result = $this->db->resultset();
        return $result;
    }
}
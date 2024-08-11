<?php

class Home
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getEmployeeList()
    {

        $this->db->query('SELECT *
                        FROM employee
                        WHERE is_active = :is_active');

        $this->db->bind(':is_active', 'Y');

        $results = $this->db->resultSet();

        return $results;
    }

}
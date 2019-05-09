<?php

namespace ToDo\Model;

class ToDoModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}
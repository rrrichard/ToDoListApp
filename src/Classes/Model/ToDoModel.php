<?php

namespace ToDo\Model;

class ToDoModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTasks(){
        $query = $this->db->prepare("SELECT `task` FROM `task_list` WHERE `completed` = '0';");
        $query->execute;
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
<?php

namespace ToDo\Model;

class ToDoModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTasks(){
        $query = $this->db->prepare("SELECT `id`,`task` FROM `task_list` WHERE `completed` = 0;");
        $query->execute();
        return $query->fetchAll();
    }

    public function addTasks($newTask){
        $query = $this->db->prepare("INSERT INTO `task_list` (`task`) VALUES (:newTask); ");
        $query->bindParam(':newTask', $newTask);
        return $query->execute();
    }

    public function completeTasks($completedId){
        $query = $this->db->prepare("UPDATE `task_list` SET `completed` = '1' WHERE `id` = :completedId;");
        $query->bindParam(':completedId', $completedId);
        return $query->execute();
    }
}
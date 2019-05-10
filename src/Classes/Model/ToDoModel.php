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

    public function addTasks($newTask, $date){
        $query = $this->db->prepare("INSERT INTO `task_list` (`task`,`deadline`) VALUES (:newTask, :date); ");
        $query->bindParam(':newTask', $newTask);
        $query->bindParam(':date', $date);
        return $query->execute();
    }

    public function completeTasks($hiddenId){
        $query = $this->db->prepare("UPDATE `task_list` SET `completed` = '1' WHERE `id` = :hiddenId;");
        $query->bindParam(':hiddenId', $hiddenId);
        return $query->execute();
    }


}
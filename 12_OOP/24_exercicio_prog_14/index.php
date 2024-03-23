<?php

class Task{
    public $title = "Estudar";
    public $description = "Estudar para a prova";
    public $completed;
    
    public function markAsCompleted(){
        $this->completed = true;
    }
    
    public function markAsIncomplete(){
        $this->completed = false;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function isCompleted(){
        if($this->completed == true){
            return true;
        } else {
            return false;
        }
    }
    
}
<?php
    require_once 'ConnectDatabase.php';
    function gettodolists(){
        $db = ConnectDatabase::connect();
        return $db->query("SELECT * FROM todolist, authors");   
    }

    // function gettodolist($id){
    //     $db = ConnectDatabase::connect();
    //     $req = $db->prepare("SELECT title, creation_date, details FROM todolist WHERE id_todolist = ?");
    //     $req -> execute(array($id));
    // }
    // function addTodolist($title, $details, $id_author ){
    //     $db = ConnectDatabase::connect();
    //     $req = $db->prepare("INSERT INTO todolist(id_todolist, title, details, creation_date, id_author) VALUES (?, ?, ?, ?, ?)");
    //     $req -> execute(array($title, $details, $id_author));
    // }
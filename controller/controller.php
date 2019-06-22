<?php
    require_once("model/model.php");
    
    function printtodolists(){

        $listTodo = gettodolists();
        require_once("view/listtodolist.php");
    }

    // function addTodo(){

    //     addTodolist($title, $details, $id_author );

    // }
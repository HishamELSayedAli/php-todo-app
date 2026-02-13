<?php 
if(isset ($_GET['id'])){
        $id=$_GET['id'];    
        include 'connect.php';
        $query=$conn->prepare("DELETE FROM tasks WHERE id='$id'");
        $query->execute();
        session_start();
        $_SESSION['msg']="Successful Deleted";
        header("Location:todo.php");
    }
    else{
        header("Location:todo.php");
    }
<?php 
if  ($_SERVER['REQUEST_METHOD']==='POST'){
    include 'connect.php';
    $id=$_POST['id'];
    $name=$_POST['name'];
    $query=$conn->prepare("UPDATE tasks SET name='$name' WHERE id='$id' ");
    $query->execute();
    $task=$query->fetchAll();
    header("Location:todo.php");
    }
    else{
      header("Location:todo.php");
    }
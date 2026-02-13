<?php 
session_start();
$name=$_POST['name'];
if(empty($name)){
    $errors[]=' Name cannot be empty';
    header("Location:todo.php");
}
 
if(isset($errors)){
   $_SESSION['errors']= $errors;
}
 
 
else if($_SERVER['REQUEST_METHOD']==='POST'){
    include 'connect.php';
    $query=$conn->prepare("INSERT INTO tasks SET name='$name'");
    $query->execute();
    $task=$query->fetchAll();
    $_SESSION['msg']= 'task inserted successfully';
    header("Location:todo.php");
}
else{
    header("Location:todo.php");
    
}
    
   

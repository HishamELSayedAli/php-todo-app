<?php
if(isset ($_GET['id'])){
$id=$_GET['id'];
include 'connect.php';
$query=$conn->prepare("SELECT * FROM tasks WHERE id='$id' ");
$query->execute();
$task=$query->fetch();
}
else{
    header("Location:Index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="css/style.css">
    <title>To-Do Edit </title>
</head>
<body>

    <div class="container">
            <div class="row">
                <div class="head">
                    <h2> To-Do : </h2>
                    <hr>
                    
                </div>
                <div class="todo">
                    <form method="post" action="update.php">
                    <input type="hidden" value="<?=$task['id']?>" name="id">    
                    <input placeholder="+ Add New Task" value="<?=$task['name']?>" name="name" type="text">
                        <button class="btn btn-orange">Add</button>
                    </form>
                </div>
            </div>
    </div>


</body>    
</html>
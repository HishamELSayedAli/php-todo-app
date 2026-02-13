<?php
include 'task.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>To-Do </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="head">
                <h2> To-Do : </h2>
                <?php if (isset($_SESSION['msg'])) {
                    echo '<div class="success">' . $_SESSION['msg'] . '</div>';
                    unset($_SESSION['msg']);
                }

                if (isset($_SESSION['errors'])) {
                    foreach ($_SESSION['errors'] as $error) {
                        echo '<div class="error">Error message' . $error . '</div>';
                    }
                    unset($_SESSION['errors']);
                } ?>

                <hr>

            </div>
            <div class="todo">
                <form method="post" action="insert.php">
                    <input placeholder="+ Add New Task" name="name" type="text">
                    <button class="btn btn-orange">Add</button>
                </form>
                <?php foreach ($tasks as $task) { ?>
                    <div class="card">
                        <div class="name">
                            <h3><?= $task['name'] ?></h3>
                        </div>
                        <div class="icons">
                            <a href="edit.php?id=<?= $task['id'] ?>">
                                <i class="fa-sharp fa-regular fa-pen-to-square pen"></i>
                            </a>
                            <a href="delete.php?id=<?= $task['id'] ?>">
                                <i class="fa-sharp fa-solid fa-x x"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>






        </div>







    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script>
    setTimeout(() => {
        $('.success').hide(500),
            $('.error').hide(500)

    }, 2000)
</script>

</html>
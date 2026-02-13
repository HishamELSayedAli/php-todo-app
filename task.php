<?php
include 'connect.php';
$query=$conn->prepare("SELECT * FROM tasks");
$query->execute();
$tasks=$query->fetchAll();

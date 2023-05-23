<?php
if(!isset($_SESSION['umail'])){
    header('Location: index.php');
}

if(isset($_POST['Lout'])){
    session_destroy();
    header('Location: index.php');
}


?>
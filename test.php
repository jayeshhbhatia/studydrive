<?php
ob_start();
if (isset($_GET['task'])){
    //echo $_POST['user_ids'];
    $user_array[] = $_POST['user_ids'];
    foreach ($user_array as $item) {
        echo $item;
    }
}

?>
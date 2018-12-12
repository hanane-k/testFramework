<?php
if (!empty($_POST)) {
    insertUser($_POST);
    header("location:listeUser");
    exit;
}
require "view/insertUserView.php";

?>
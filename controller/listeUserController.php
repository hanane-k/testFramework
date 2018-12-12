<?php
if (!empty($_POST) || !empty($_POST["city"])) {
    $volonteers = sortedVolonteers($_POST, $db);
    // var_dump($_POST);
}
else {
    $volonteers = getVolonteers();
}
require "view/indexView.php";

?>
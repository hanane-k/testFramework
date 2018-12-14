<?php
function InsertMsg() {
    if (!empty($_POST)) {
        addMessage($message, $sender);
        rederectTo("insertMsg");
    }
    require "view/insertMsgView.php";
}
function listeMsg() {
        // initializeUserSession($user);
        // session_start();
        // $userId = $_SESSION["user"]["ID"];
        // $message = getMessages($userId);
    require "view/listeMsgView.php";
}


?>
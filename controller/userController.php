<?php
function insertUser() {
    if (!empty($_POST)) {
        addUser($_POST);
        redirectTo("listeUser");
    }
    require "view/insertUserView.php";
}

function listeUser() {
    // if (!empty($_POST) || !empty($_POST["city"])) {
    //     $volonteers = sortedVolonteers();
    //     session_start();
    // }
    // else {
        $volonteers = getVolonteers();
    // }
    require "view/indexView.php";
}

function loginUser() {
    
    if(!empty($_POST)) {
        $volonteers = getVolonteers();
        foreach($_POST as $key => $value) {
            $_POST[$key] = htmlspecialchars($value);
        }
        foreach ($volonteers as $key => $volonteer) {
        if ($volonteer["name"] === $_POST["name"] && $volonteer["password"] === $_POST["password"]) {
            initializeUserSession($volonteer);
        }
        }
    }
    if (isLogged()){
        redirectTo("listeUser");
    }
    require "view/loginView.php";
}

function update() {
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $volonteer = getVolonteer($id);
    }
    if(!empty($_POST)) {
        updateUser($_POST);
        redirectTo("listeUser.php");
    }
    require "view/updateUserView.php";
}

function deleteUser() {
    $id = htmlspecialchars($_GET["id"]);
    deleteVolonteer($id);
    redirectTo("listeUser");
}

function deconnectUser() {
    logout();
    redirectTo("");
}

function adminRights() {
    if ($_SESSION["user"] === "admin") {
        redirectTo("listeUser");
    }
    else {
        redirectTo("");
    }
}
function userRights() {
    if ($_SESSION["user"] === "user") {
        
    }
}
?>
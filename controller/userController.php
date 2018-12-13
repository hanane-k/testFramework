<?php
function insertUser() {
    if (!empty($_POST)) {
        addUser($_POST);
        redirectTo("user/list");
    }
    require "view/insertUserView.php";
}

function listeUser() {
    if (!empty($_POST) || !empty($_POST["city"])) {
        $volonteers = sortedVolonteers();
    }
    else {
        $volonteers = getVolonteers();
    }
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


?>
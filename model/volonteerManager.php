<?php
// get volonteers function
    function getVolonteers() {
        $db = getDataBase();
        $req = $db->query("SELECT * FROM volonteer");
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
// get volonteers function
    function getVolonteer($id) {
        $db = getDataBase();
        $req = $db->prepare("SELECT * FROM volonteer WHERE ID = :ID");
        $req->execute(["ID" => $id]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function getVolonteerByName($name) {
        $db = getDataBase();
        $req = $db->prepare("SELECT * FROM volonteer WHERE name = ?");
        $req->execute([$name]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
// delete volonteer function
    function deleteVolonteer($id) {
        $db = getDataBase();
        $req = $db->prepare("DELETE FROM volonteer WHERE ID = :ID");
        $result = $req->execute(["ID" => $id]);
        return $result;
    }
// insert function
    function addUser($volonteer) {
        $db = getDataBase();
        $req = $db->prepare("INSERT INTO volonteer (name, firstname, password, status, age, comment, disponibility, street, city) VALUES(:name, :firstname, :password, :status, :age, :comment, :disponibility, :street, :city)");
        $result = $req->execute([
            "name" => $volonteer["name"],
            "firstname" => $volonteer["firstname"],
            "age" => $volonteer["age"],
            "password" => $volonteer["password"],
            "status" => $volonteer["status"],
            "comment" => $volonteer["comment"],
            "disponibility" => $volonteer["disponibility"],
            "street" => $volonteer["street"],
            "city" => $volonteer["city"]
        ]);
        return $result;
    }
// update function
    function updateUser($form) {
        $db = getDataBase();
        $req = $db->prepare("UPDATE volonteer SET name = :name, firstname = :firstname, password = :password, status = :status, age = :age, comment = :comment, disponibility = :disponibility, street = :street, city = :city WHERE ID = :ID");
        $result = $req->execute([
            "name" => $form["name"],
            "firstname" => $form["firstname"],
            "password" => $form["password"],
            "status" => $form["status"],
            "age" => $form["age"],
            "comment" => $form["comment"],
            "disponibility" => $form["disponibility"],
            "street" => $form["street"],
            "city" => $form["city"],
            "ID" => $form["ID"]
        ]);
        return $result;
    }


    function sortedVolonteers($form) {
        $db = getDataBase();
        $sql = "SELECT * FROM volonteer";
        if (isset($form["order"]) && !empty($form["order"])) {
            $sql .= " ORDER BY " . $form["order"];
            // if ($db["city"] === $form["city"]) {
            //     $sql .= " WHERE city = ";
            //     $sql .= $db["city"];
            // }
        }
        $req = $db->query($sql);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>
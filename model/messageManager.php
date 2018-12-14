<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, v.name FROM msg AS m INNER JOIN volonteer AS v ON m.sender = v.ID WHERE recipient = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $sender, $volonteer) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO msg(object, msg, date, recipient, sender) VALUES (:object, :msg, NOW(), :recipient, :sender)");
  $result = $query->execute([
    "object" => $message["object"],
    "msg" => $message["msg"],
    "recipient" => $volonteer["ID"],
    "sender" => $sender
  ]);
  $query->closeCursor();
  return $result;
}

function deleteMessage($id) {
  $db = getDataBase();
  $req = $db->prepare("DELETE FROM msg WHERE ID = :ID");
  $result = $req->execute(["ID" => $id]);
  return $result;
}

 ?>

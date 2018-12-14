<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, v.name FROM msg AS m INNER JOIN volonteer AS v ON m.sender = v.ID WHERE recipient = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $sender) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO msg(object, msg, date, recipient, sender) VALUES (:object, :msg, NOW(), :recipient, :sender)");
  $result = $query->execute([
    "object" => $message["object"],
    "msg" => $message["msg"],
    "recipient" => $message["name"],
    "sender" => $sender
  ]);
  $query->closeCursor();
  return $result;
}

 ?>

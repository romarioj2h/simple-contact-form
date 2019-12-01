<?php

$db = new PDO('mysql:host=localhost;dbname=contact', 'root', '123');

$stmt = $db->prepare('INSERT INTO contact (subject, email, message) VALUES (:subject, :email, :message)');
$stmt->bindParam('subject', $_POST['subject']);
$stmt->bindParam('email', $_POST['email']);
$stmt->bindParam('message', $_POST['message']);
$stmt->execute();

header('Location: index.php?success=1');

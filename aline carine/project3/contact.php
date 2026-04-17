<?php
include "db.php";

$sql = "INSERT INTO messages 
(full_name, email, phone, location, message)
VALUES
('$_POST[full_name]', '$_POST[email]', '$_POST[phone]',
 '$_POST[location]', '$_POST[message]')";

$conn->query($sql);

echo "Message sent!";
?>
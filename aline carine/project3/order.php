<?php
include "db.php";

$sql = "INSERT INTO orders 
(full_name, email, phone, menu_item, address, order_date)
VALUES
('$_POST[full_name]', '$_POST[email]', '$_POST[phone]',
 '$_POST[menu_item]', '$_POST[address]', '$_POST[order_date]')";

if ($conn->query($sql)) {
    echo "Order saved successfully!";
} else {
    echo "Error";
}
?>
<?php

// DATABASE CONNECTION
$conn = new mysqli("localhost", "root", "", "student_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET FORM DATA
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$dob_day = $_POST['dob_day'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];

$address = $_POST['address'];
$city = $_POST['city'];
$pin_code = $_POST['pin_code'];
$state = $_POST['state'];
$country = $_POST['country'];

// HOBBIES (array → string)
$hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : "";
$other_hobby = $_POST['other_hobby'];

// QUALIFICATIONS
$class10_board = $_POST['class10_board'];
$class10_percent = $_POST['class10_percent'];
$class10_year = $_POST['class10_year'];

$class12_board = $_POST['class12_board'];
$class12_percent = $_POST['class12_percent'];
$class12_year = $_POST['class12_year'];

$grad_board = $_POST['grad_board'];
$grad_percent = $_POST['grad_percent'];
$grad_year = $_POST['grad_year'];

$masters_board = $_POST['masters_board'];
$masters_percent = $_POST['masters_percent'];
$masters_year = $_POST['masters_year'];

$course = $_POST['course'];

// INSERT QUERY
$sql = "INSERT INTO students (
    first_name, last_name,
    dob_day, dob_month, dob_year,
    email, mobile, gender,
    address, city, pin_code, state, country,
    hobbies, other_hobby,
    class10_board, class10_percent, class10_year,
    class12_board, class12_percent, class12_year,
    grad_board, grad_percent, grad_year,
    masters_board, masters_percent, masters_year,
    course
) VALUES (
    '$first_name', '$last_name',
    '$dob_day', '$dob_month', '$dob_year',
    '$email', '$mobile', '$gender',
    '$address', '$city', '$pin_code', '$state', '$country',
    '$hobbies', '$other_hobby',
    '$class10_board', '$class10_percent', '$class10_year',
    '$class12_board', '$class12_percent', '$class12_year',
    '$grad_board', '$grad_percent', '$grad_year',
    '$masters_board', '$masters_percent', '$masters_year',
    '$course'
)";

// EXECUTE
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
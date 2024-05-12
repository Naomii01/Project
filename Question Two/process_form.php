<?php
$servername = "DESKTOP-00Q48AJ"; 
$username = "student_registration"; 
$password = "new_password"; 
$dbname = "students"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $firstName = sanitize_input($_POST["firstName"]);
    $lastName = sanitize_input($_POST["lastName"]);
    $dob = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
    $email = sanitize_input($_POST["email"]);
    $mobile = sanitize_input($_POST["mobile"]);
    $gender = sanitize_input($_POST["gender"]);
    $address = sanitize_input($_POST["address"]);
    $city = sanitize_input($_POST["city"]);
    $pincode = sanitize_input($_POST["pincode"]);
    $state = sanitize_input($_POST["state"]);
    $country = sanitize_input($_POST["country"]);

    $sql = "INSERT INTO student_registration (first_name, last_name, dob, email, mobile, gender, address, city, pincode, state, country)
    VALUES ('$firstName', '$lastName', '$dob', '$email', '$mobile', '$gender', '$address', '$city', '$pincode', '$state', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

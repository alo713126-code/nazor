<?php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = trim($_POST["first_name"]);
    $last_name  = trim($_POST["last_name"]);
    $username   = trim($_POST["username"]);
    $email      = trim($_POST["email"]);
    $phone      = trim($_POST["phone"]);
    $password   = trim($_POST["password"]);

    if (
        empty($first_name) ||
        empty($last_name) ||
        empty($username) ||
        empty($email) ||
        empty($phone) ||
        empty($password)
    ) {

        die("تمام فیلدها الزامی هستند.");
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
    (first_name,last_name,username,email,phone,password)
    VALUES (?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $first_name,
        $last_name,
        $username,
        $email,
        $phone,
        $password
    );

    if ($stmt->execute()) {

        header("Location: login.php?success=1");
        exit;
    } else {

        echo "ثبت نام انجام نشد.";
    }
}

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_GET['name'];
    $phone_no = $_GET['phone_no'];
    $gender = $_GET['gender'];
    $Message = $_GET['Message'];

    // Validation and sanitization should be done here

    $data = array("NAME:$name", "PHONE_NUMBER:$phone_no", "Feedback:$Message", "GENDER:$gender");
    $file = fopen("webdata.csv", "a");
    fputcsv($file, $data);
    fclose($file);
    header("Location: C:\Users\Lokesh S\Desktop\src\public\successfullmessage.html");
    exit();
} else {
    header("Location: C:\Users\Lokesh S\Desktop\src\public\feedback.html");
    exit();
}
?>

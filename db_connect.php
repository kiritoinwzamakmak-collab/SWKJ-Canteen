<?php
$servername = "localhost"; // เปลี่ยนกลับเป็น localhost
$db_username = "root";    // โดยทั่วไปคือ root
$db_password = "";        // โดยทั่วไปคือว่างเปล่า
$dbname = "food_order_db"; // ชื่อฐานข้อมูล Localhost ของคุณ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ถ้าสำเร็จ $conn จะถูกกำหนดค่า
?>

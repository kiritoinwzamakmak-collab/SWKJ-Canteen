<?php
// กำหนดข้อมูลการเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$db_username = "root";     // โดยทั่วไป XAMPP/WAMP จะใช้ 'root'
$db_password = "";         // โดยทั่วไป XAMPP/WAMP จะไม่มีรหัสผ่าน (เป็นช่องว่าง)
$dbname = "food_order_db"; // ชื่อฐานข้อมูลที่คุณสร้างไว้

// สร้างการเชื่อมต่อฐานข้อมูล (MySQLi Object-Oriented)
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    // ถ้าเชื่อมต่อไม่ได้ ให้แสดงข้อผิดพลาดและหยุดการทำงานทันที
    die("Connection failed: " . $conn->connect_error);
}

// *** ห้ามเพิ่มโค้ดอื่นใดที่นี่ เช่น การเรียก include/require ไฟล์อื่น ***

?>

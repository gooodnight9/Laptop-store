<?php
// Thông tin kết nối cơ sở dữ liệu
$host = "172.27.192.1";
$username = "root"; // Tên người dùng MySQL
$password = "root";     // Mật khẩu MySQL
$database = "QuanLySinhVien"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
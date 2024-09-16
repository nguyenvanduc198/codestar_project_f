<?php
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "codestar_db_webcoban";
// $dbname = "project_shop";
$dbname = "web-mvc";
$port = "3306";

$con = mysqli_connect($servername, $username, $password, $dbname);
// echo "ket noi db thanh cong";
if (!$con) {
    // echo "ket noi db thanh cong";
    die("Cannot Connect to Database" . mysqli_connect_error());
}


function filteration($data)
{
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        $data[$key] = $value;
    }
    return $data;
}

function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con, "SELECT * FROM $table");
    return $res;
}
// Hàm insert dữ liệu vào cơ sở dữ liệu
function insert($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];

    // Chuẩn bị câu truy vấn
    if ($stmt = mysqli_prepare($con, $sql)) {
        // Ràng buộc giá trị
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        // Thực thi câu truy vấn
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt); // Lấy số dòng bị ảnh hưởng
        } else {
            // Hiển thị thông báo lỗi nếu truy vấn thất bại
            die("Truy vấn không thể thực thi: " . mysqli_stmt_error($stmt));
        }

        // Đóng câu lệnh sau khi hoàn thành
        mysqli_stmt_close($stmt);

        // Trả về kết quả
        return $res;
    } else {
        // Hiển thị thông báo lỗi nếu câu truy vấn không thể chuẩn bị
        die("Truy vấn không thể chuẩn bị: " . mysqli_error($con));
    }
}

// function insert($sql, $values, $datatypes)
// {
//     $con = $GLOBALS['con'];
//     if ($stmt = mysqli_prepare($con, $sql)) {
//         mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
//         if (mysqli_stmt_execute($stmt)) {
//             $res = mysqli_stmt_affected_rows($stmt);
//             mysqli_stmt_close($stmt);
//             return $res;
//         } else {
//             mysqli_stmt_close($stmt);
//             die("Query cannot be executed - Insert");
//         }
//     } else {
//         die("Query cannot be prepared - Insert");
//     }
// }

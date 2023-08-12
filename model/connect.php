<?php
function connectdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=assignment_php1", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "OK";
    } catch (PDOException $e) {
        // echo "failed: " . $e->getMessage();
    }
    return $conn;
}

//Thực thi truy vấn SQL và trả về một mảng chứa tất cả các bản ghi kết quả.
function get_all($sql)
{
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    $conn = null;
    return $kq;
}

//Thực thi truy vấn SQL và trả về một bản ghi kết quả đầu tiên dưới dạng mảng kết hợp.
function get_one($sql)
{
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetch();
    $conn = null;
    return $kq;
}

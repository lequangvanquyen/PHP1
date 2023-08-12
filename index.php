<?php
session_start();  // Khởi đầu (session)
ob_start(); // Bắt đầu bộ đệm đầu ra động
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header('Location: login.php');
    exit();  // Dừng thực hiện mã sau khi chuyển hướng.
}

include "model/connect.php";  // Kết nối tới cơ sở dữ liệu.
include "model/product.php";  // Đưa vào các chức năng liên quan đến sản phẩm.
include "model/catalog.php";  // Đưa vào các chức năng liên quan đến danh mục sản phẩm.

include_once "view/header.php";  // Đưa vào nội dung phần header của trang.

// Kiểm tra biến 'page' từ URL để xác định trang hiển thị.
if (isset($_GET['page']) && ($_GET['page'] != "")) {
    switch ($_GET['page']) {
        case 'product':
            // Xác định danh mục sản phẩm dựa trên tham số 'idcatalog' từ URL.
            if (isset($_GET['idcatalog']) && ($_GET['idcatalog'])) {
                $idcatalog = $_GET['idcatalog'];
            } else {
                $idcatalog = 0;
            }
            // Lấy danh sách sản phẩm mới nhất và sản phẩm theo danh mục.
            $productlist = getnewproduct($idcatalog);
            $product_list = getproduct($idcatalog);
            $cataloglist = getcatalog();  // Lấy danh sách danh mục.
            include_once 'view/product.php';  // Hiển thị trang sản phẩm.
            break;
        case 'cart':
            include_once 'view/viewcart.php';  // Hiển thị trang giỏ hàng.
            break;
        case 'delcart':
            // Xóa sản phẩm khỏi giỏ hàng dựa trên chỉ số ind được truyền qua biến $_GET
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['ind'], 1); // Loại bỏ phần tử ở chỉ số ind trong mảng $_SESSION['giohang']
                header('location: index.php?page=viewcart'); // Chuyển hướng người dùng đến trang xem giỏ hàng sau khi xóa
            }
            break;
        case 'viewcart':
            // Hiển thị nội dung của giỏ hàng bằng cách bao gồm tập tin viewcart.php
            include_once "view/viewcart.php";
            break;
        case 'addcart':
            // Thêm một sản phẩm vào giỏ hàng dựa trên dữ liệu gửi từ biểu mẫu POST
            if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $soluong = $_POST['soluong'];
                $price = $_POST['price'];

                // Tạo một mảng chứa thông tin sản phẩm để thêm vào giỏ hàng
                $sp = ["id" => $id, "img" => $img, "name" => $name, "price" => $price, "soluong" => $soluong];

                // Thêm mảng sp vào mảng giỏ hàng $_SESSION['giohang']
                $_SESSION['giohang'][] = $sp;

                header('location: index.php?page=viewcart'); // Chuyển hướng người dùng đến trang xem giỏ hàng sau khi thêm sản phẩm
            }
            break;
        case 'checkout':
            include_once 'view/checkout.php';  // Hiển thị trang thanh toán.
            break;
        case 'contact':
            include_once 'view/contact.php';  // Hiển thị trang liên hệ.
            break;
        case 'login-register':
            include_once 'view/login-register.php';  // Hiển thị trang đăng nhập và đăng ký.
            break;
        case 'my-account':
            include_once 'view/my-account.php';  // Hiển thị trang tài khoản người dùng.
            break;
        case 'productdetail':
            // Lấy thông tin sản phẩm dựa trên tham số 'idproduct' từ URL.
            if (isset($_GET['idproduct']) && ($_GET['idproduct'] > 0)) {
                $idproduct = $_GET['idproduct'];
                $detail = getproductdetail($idproduct);
                include_once 'view/productdetail.php';  // Hiển thị trang chi tiết sản phẩm.
            } else {
                header('location: index.php');  // Nếu không có ID sản phẩm hợp lệ, chuyển hướng về trang chủ.
            }
            break;
        default:
            $newproduct = getnewproduct();  // Lấy danh sách sản phẩm mới nhất.
            $sale = getnewproduct_promotion();  // Lấy danh sách sản phẩm khuyến mãi.
            $view = getnewproduct_view();  // Lấy danh sách sản phẩm nhiều lượt xem.
            include_once 'view/home.php';  // Hiển thị trang chủ mặc định.
            break;
    }
} else {
    $newproduct = getnewproduct();  // Lấy danh sách sản phẩm mới nhất.
    $saleproduct = getnewproduct_promotion();  // Lấy danh sách sản phẩm khuyến mãi.
    $viewproduct = getnewproduct_view();  // Lấy danh sách sản phẩm nhiều lượt xem.
    include_once "view/home.php";  // Hiển thị trang chủ mặc định nếu không có tham số 'page'.
}
include_once "view/footer.php";  // Đưa vào nội dung phần footer của trang.

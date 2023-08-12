<?php
// Hàm lấy danh sách các mục trong bảng 'catalog' từ cơ sở dữ liệu.
function getcatalog()
{
    $sql = "SELECT * FROM catalog ORDER BY name";
    return get_all($sql);
}

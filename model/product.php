<?php

/**
 * Lấy danh sách các sản phẩm mới (theo thứ tự id giảm dần).
 *
 * Mảng chứa thông tin các sản phẩm mới.
 */
function getnewproduct()
{
    $sql = "SELECT * FROM product ORDER BY id DESC";
    return get_all($sql);
}

/**
 * Lấy danh sách các sản phẩm theo id danh mục (nếu có).
 *
 * $idcatalog ID của danh mục sản phẩm (mặc định là 0).
 * Mảng chứa thông tin các sản phẩm theo điều kiện id danh mục (nếu có).
 */
function getproduct($idcatalog = 0)
{
    $sql = "SELECT * FROM product WHERE 1";
    if ($idcatalog > 0) {
        $sql .= " AND idcatalog=" . $idcatalog;
    }
    $sql .= " ORDER BY id DESC";
    return get_all($sql);
}

/**
 * Lấy danh sách các sản phẩm mới có khuyến mãi (theo thứ tự khuyến mãi giảm dần).
 *
 * Mảng chứa thông tin các sản phẩm mới có khuyến mãi.
 */
function getnewproduct_promotion()
{
    $sql = "SELECT * FROM product WHERE promotion > 0 ORDER BY promotion DESC";
    return get_all($sql);
}

/**
 * Lấy danh sách các sản phẩm mới theo số lượt xem (theo thứ tự lượt xem giảm dần).
 *
 * Mảng chứa thông tin các sản phẩm mới theo lượt xem.
 */
function getnewproduct_view()
{
    $sql = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC";
    return get_all($sql);
}

/**
 * Lấy thông tin chi tiết của một sản phẩm dựa trên ID.
 *
 * $idproduct ID của sản phẩm cần lấy thông tin.
 * null Mảng chứa thông tin chi tiết của sản phẩm hoặc null nếu không tìm thấy.
 */
function getproductdetail($idproduct)
{
    $sql = "SELECT * FROM product WHERE id=" . $idproduct;
    return get_one($sql);
}

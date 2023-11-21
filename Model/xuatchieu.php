<?php

function xuatchieu_select_all()
{
    $sql = "SELECT xuat_chieu.id, xuat_chieu.ngay_chieu, phim.ten_phim, phim.img_phim, phong_chieu.ten_phongchieu  FROM xuat_chieu INNER JOIN phim ON phim.id = xuat_chieu.id_phim INNER JOIN phong_chieu ON xuat_chieu.id_phongchieu = phong_chieu.id";
    return pdo_query($sql);
}

function xuatchieu_select_by_id_phim($id)
{
    $sql = "SELECT xuat_chieu.id, xuat_chieu.ngay_chieu, phim.ten_phim, phim.img_phim, phong_chieu.ten_phongchieu  FROM xuat_chieu INNER JOIN phim ON phim.id = xuat_chieu.id_phim INNER JOIN phong_chieu ON xuat_chieu.id_phongchieu = phong_chieu.id WHERE phim.id= '$id'";
    return pdo_query($sql);
}

function phong_select()
{
    $sql = "SELECT * FROM phong_chieu";
    return pdo_query($sql);
}
function xuatchieu_insert($ngay_xc, $ten_phim, $ten_phong)
{
    $sql = "INSERT INTO `xuat_chieu` (`id`, `id_phongchieu`, `id_phim`, `ngay_chieu`) VALUES (NULL, '$ten_phong', '$ten_phim', '$ngay_xc')";
    pdo_execute($sql);
}
function xuatchieu_select_by_id($id)
{
    $sql = "SELECT * FROM xuat_chieu WHERE id=?";
    return pdo_query_one($sql, $id);
}
function xuat_chieu_update($ngay_chieu, $id_phim, $id_phongchieu, $id)
{
    $sql = "UPDATE xuat_chieu SET ngay_chieu=?,id_phim=?,id_phongchieu=? WHERE id=?";
    pdo_execute($sql, $ngay_chieu, $id_phim, $id_phongchieu, $id);
}
function xuat_chieu_delete($id)
{
    $sql = "DELETE FROM xuat_chieu WHERE id = ?";
    pdo_execute($sql, $id);
}

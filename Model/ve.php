<?php
require_once 'pdo.php';

// function ve_insert($ten_phim, $img_phim, $img_banner_phim, $mota,  $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim)
// {
//     $sql = "INSERT INTO `phim` (`id`, `ten_phim`, `img_phim`, `img_banner`, `mota`, `nsx`, `nph`,`thoi_luong_phim`  , `cs_danh_gia`,`quocgia`,`dienvien1`,`dienvien2`,`dienvien3`,`tt`, `id_loaiphim`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_phim, $img_phim, $img_banner_phim, $mota, $nsx, $nph, $thoi_luong_phim, $cs_danh_gia, $qg, $dv1, $dv2, $dv3, $tt, $id_loaiphim);
// }

function lock_ghe($id_kgc, $id_xc, $id_phim)
{
    $sql = "SELECT ve.ghe FROM ve JOIN khung_gio_chieu ON ve.id_kgc = khung_gio_chieu.id JOIN xuat_chieu ON xuat_chieu.id = khung_gio_chieu.id_xuat_chieu  WHERE tt_ve = 1  AND id_kgc = '$id_kgc' AND xuat_chieu.id = '$id_xc' AND xuat_chieu.id_phim = '$id_phim' ";
    return pdo_query($sql);
}



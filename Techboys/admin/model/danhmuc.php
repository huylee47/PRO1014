<?php
require_once "pdo.php";
function list_danhmuc()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
function them_danhmuc($tendm)
{
    $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES ('$tendm')";
    pdo_execute($sql);
}
function xoa_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc = '$id'";
    pdo_execute($sql);
}
function list_motdanhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc =$id";
    return pdo_query_one($sql);
}
function update_danhmuc($id, $tendm)
{
    $sql = "UPDATE danhmuc SET ten_danhmuc = '$tendm' WHERE id_danhmuc = '$id'";
    pdo_execute($sql);
}

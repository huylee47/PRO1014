<?php
require_once "pdo.php";
function check_user($username,$password){
    $sql= "SELECT * FROM taikhoan WHERE user ='".$username."' AND password ='".$password."' ";
    return pdo_query_one($sql);
}
function insert_taikhoan($email, $user, $pass) {
    $sql = "INSERT INTO taikhoan(`user`, `password`, `email`) VALUES('$user', '$pass', '$email')";
    session_unset ();
    pdo_execute($sql);
  }
function get_ten_theo_id($id_tk){
  $sql= "SELECT * FROM taikhoan WHERE id_taikhoan = $id_tk";
  return pdo_query_one($sql)['ten'];
}
?>

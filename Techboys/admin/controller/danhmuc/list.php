<?php
require_once "model/danhmuc.php";
$listdanhmuc = list_danhmuc();
include "view/danhmuc/list.php";
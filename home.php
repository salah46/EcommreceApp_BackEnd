<?php 

include "connect.php";

$alldata=array();
$categoriesData = getAllData("categories",null,null,false);
$itemsData = getAllData("items","items_discount !=0",null,false);
$alldata['status'] = "success";
$alldata['categories'] = $categoriesData;
$alldata['items'] = $itemsData;

echo json_encode($alldata);


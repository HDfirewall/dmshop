<?php
include_once("./_dmshop.php");

// 폼 체크
if (!$_POST['form_check']) {

    alert("요청하신 서비스를 찾을 수 없습니다.\\n\\n확인하신 후 다시 이용하시기 바랍니다.");

}

if ($dmshop_user['datetime'] != $_POST['form_check']) {

    alert("요청하신 서비스를 찾을 수 없습니다.\\n\\n확인하신 후 다시 이용하시기 바랍니다.");

}

// common
$sql_common = "";
$sql_common .= " set syndi_type = '".trim(strip_tags(mysql_real_escape_string($_POST['syndi_type'])))."' ";
$sql_common .= ", syndi_token = '".trim(strip_tags(mysql_real_escape_string($_POST['syndi_token'])))."' ";

// update
sql_query(" update $shop[config_table] $sql_common ");

if ($url) {

    $urlencode = urldecode($url);

} else {

    $urlencode = urldecode($_SERVER[REQUEST_URI]);

}

url($urlencode);
?>
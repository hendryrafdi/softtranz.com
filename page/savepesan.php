<?php

include"config.php";

$nama = $_POST[name];
$kerjaan = $_POST[company]; 
$email = $_POST[email];
$hp = $_POST[phone];
$pesan = $_POST[msg];
$save = mysql_query("insert into message values('$name', '$kerjaan', '$email', '$hp', '$pesan')");

if ($save) {
    header("location:index.php?link=succes");
} else {
    header("location:index.php?link=failed");
}

?>
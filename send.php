<?php
$fio = $_POST['username'];
$email = $_POST['useremail'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("xayom1996@gmail.com", "������ � �����", "���:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "��������� ������� ����������"; 
} else { 
    echo "��� �������� ��������� �������� ������";
}?>
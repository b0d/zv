<?php 
 
if($_POST) {
        $title = 'Заявка на сайте';
        $emails = htmlspecialchars($_POST['emails']);
        $names = htmlspecialchars($_POST['names']); 
        $phones = htmlspecialchars($_POST['phones']); 
        $mess = '
        Имя отправителя:'. $names.'
        Телефон:'.$phones.'
        Товар: '.$emails.'
        ';
       
        $to = 'zvyagel.net@gmail.com'; 
        
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <zvyagel.net@gmail.com>\r\n"; //Наименование и почта отправителя
        mail($to, $title, $mess, $headers);  
} 

?> 
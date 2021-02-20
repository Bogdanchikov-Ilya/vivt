<?php
    $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'workers'); 

    //Конструкция проверки подключения
    if($connection == false){
        echo "Сбой соеденения <br/>";
        echo mysqli_connect_error();
        exit();
    }
    
    // Запрос к БД $result - это переменная, в которую складируется результат запроса
    // Принимает в себя функцию подключения,запрос читаетя: "ВЫБЕРИ ВСЕ ИЗ articles_categories"
    
    // $result = mysqli_query($connection, "SELECT * FROM `workers`");
    // $obr = mysqli_fetch_assoc($result);
    
?>
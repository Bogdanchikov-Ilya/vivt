<?php


    require 'php/db.php';
    if(!empty($_GET['id']))
    {
    $del = "DELETE FROM `workers` WHERE `id` = '{$_GET['id']}'";}
    $del_query = mysqli_query($connection, "DELETE FROM `workers` WHERE `id` = '{$_GET['id']}'")
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1170">
    <link rel="shortcut icon" href="/img/works.png" type="image/x-icon">
    <title>Works Monitor</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="js/anime.min.js"></script>
</head>
<body>

<div class="wrap">
    <div class="toggle__switch">
        <div class="slider"></div>
        <input type="checkbox">
    </div>
</div>

<div class="clock">
        <p class="time">
            00:00
        </p>
        
    <p class="date">
        <?php
            $_monthsList = array(
                "1"=>"Январь","2"=>"Февраль","3"=>"Март",
                "4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
                "7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
                "10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
                 
                $month = $_monthsList[date("n")];
                 
                echo date('d '. $month .' Y')
        ?>
    </p>
    
</div>



<div class="popup" id="popup">
        <div class="popup__body">
            <div class="popup__content">
                <a href="#" class="popup__close"><svg id="close" height="20px" viewBox="0 0 329.26933 329" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg></a>

                <form action="#" class="form" method="post" enctype="myltipart/form-data">

                    <div class="popup__title"><span>Имя сотрудника</span></div><br>
                    <input type="text" class="input" placeholder="Жмых Жмышенко" name="new_fio">
                    
                    <div class="popup__title"><span>Должность</span></div><br>
                    <input type="text" class="input" placeholder="Секретарь" name="new_post">
                    
                    <div class="popup__title"><span>График работы</span></div><br>
                    <input type="text" class="input" placeholder="Пн - Пт 8-00 17-00" name="new_schedule">
                    
                    <div class="popup__title"><span>Статус</span></div><br>
                    <input type="text" class="input" placeholder="Отдыхает" name="new_status">
                    
                    <div class="popup__title"><span>Введите IP</span></div><br>
                    <input type="text" class="input" placeholder="255.198.5.5" name="new_ip">
                    
                    <div class="popup__title"><span>Цветовой индикатор</span></div><br>
                    
                    <div class="form_radio_btn">
                        <input id="radio-1" type="color" name="color"  checked class="input__color">
                    </div>
                    

                    <a class="popup__link" onclick="addGrup()" href="index.php"><div class="popup__button">
                    <input type="submit" value="Добавить" class="send__form">
                    </div></a>

                </form>
            </div>
        </div>
    </div>

    <?php



        require 'php/db.php';

        $data = $_POST;
    
        $new_fio = $_POST['new_fio'];
        $new_post = $_POST['new_post'];
        $new_schedule = $_POST['new_schedule'];
        $new_status = $_POST['new_status'];
        $new_ip = $_POST['new_ip'];

        $photo_dir = $_POST['photo'];
        

        $color = $_POST['color'];

        



        if(!empty($new_fio) && !empty($new_post)){

            

            $query_test = mysqli_query($connection, "SELECT `fio` FROM `workers`");
            $row_test = mysqli_fetch_assoc($query_test);
            
            $query = "INSERT INTO `workers` (`fio`, `post`, `status`, `schedule`, `ip`, `color`, `photo`) VALUES ('$new_fio', '$new_post', '$new_status', '$new_schedule', '$new_ip', '$color', '$photo_dir')";
            $add_result = mysqli_query($connection, $query);
        
                    
            unset ( $new_fio );
            
            
        }else{
                    
        }
    ?>
    <main class="main">
        <div class="sidebar">
            <ul class="group__list" >
                <li class="list__title">
                    <i>
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="19" height="19" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                            <g>
                                <g id="_x33__32_">
                                    <g>
                                        <path d="M59.226,88.839C26.513,88.839,0,115.352,0,148.064s26.513,59.226,59.226,59.226s59.226-26.514,59.226-59.226
                                            S91.938,88.839,59.226,88.839z M59.226,246.774C26.513,246.774,0,273.288,0,306c0,32.713,26.513,59.226,59.226,59.226
                                            s59.226-26.513,59.226-59.226C118.452,273.288,91.938,246.774,59.226,246.774z M59.226,404.71C26.513,404.71,0,431.223,0,463.936
                                            c0,32.712,26.513,59.226,59.226,59.226s59.226-26.514,59.226-59.226C118.452,431.223,91.938,404.71,59.226,404.71z
                                            M197.419,187.548h375.096c21.815,0,39.484-17.669,39.484-39.484s-17.669-39.484-39.484-39.484H197.419
                                            c-21.815,0-39.484,17.669-39.484,39.484S175.604,187.548,197.419,187.548z M572.516,266.516H197.419
                                            c-21.815,0-39.484,17.669-39.484,39.484c0,21.814,17.669,39.484,39.484,39.484h375.096c21.815,0,39.484-17.67,39.484-39.484
                                            C612,284.185,594.331,266.516,572.516,266.516z M572.516,424.451H197.419c-21.815,0-39.484,17.67-39.484,39.484
                                            s17.669,39.483,39.484,39.483h375.096c21.815,0,39.484-17.669,39.484-39.483S594.331,424.451,572.516,424.451z"/>
                                    </g>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>

                    </i>
                    <span class="item__bar-title">Все сотрудники</span>
                </li>
                <div class="item__bar">
                    <?php
                        require 'php/db.php';

                        $item_query = mysqli_query($connection, "SELECT * FROM `workers`");

                        while($item = mysqli_fetch_assoc($item_query)){
                            echo '<a class="item__wrapper" id="'.$item['id'].'" href="index.php?elem_id='.$item['id'].'">
                            <li class="list__item" id="'.$item['id'].'">
                                <div class="color_list" id="'.$item['id'].'" style="background-color: '.$item['color'].' !important"></div>
                                <span class="item__text" id="'.$item['id'].'"><?php';
                            ?>

                            <li class="item"><?php echo $item['fio'] ?></li>

                            <?php
                            echo `</span>`;
                            // echo '<button type="submit" id="item__del" onclick="itemDel()" alt="Удлить">× '.echo $row['id'];. '</button>';
                            echo '<a href="index.php?id='. $item['id'] . '><button type="submit" id="item__del">×' . $item[''] . '</button></a>';
                            echo '</button> ';
                           echo `</li>                           
                            </a>`;
                        }
                        
                        
                    ?>
                </div>
            </ul>
            </a>


            <div class="sidebar__bottom">
                <div class="button__add-wrapper">
                    <a href="#popup" class="popup-link">
                        <div class="button__add" href="">
                            Добавить
                        </div>
                    </a>
                </div>
            </div>
        </div>
        

        <div class="content">
            <div class="content__body">
                    <?php
                    require 'php/db.php';
                    
                    $elem_id = $_GET['elem_id'];
                    
                    $result = mysqli_query($connection, "SELECT * FROM `workers` WHERE `id`= '$elem_id'");
                    $row = mysqli_fetch_assoc($result);
                    ?><script>
                    if(document.querySelector(".content__body").value = ''){

                    }

                    let out = document.querySelector(".content__body");
                    out.innerHTML = '  ';

                    </script><?php
                   
                    if($row['fio'] != ''){
                        do{
                            
                            $show_img = base64_encode($row['photo']);?>
                            <img src="data:image/jpeg;base64, <?php echo($show_img); ?>" alt="">
                            <?php 
                            echo('<img class="worker_photo animate__animated animate__bounceInRight" src="img/profile.png" alt="img">');
                            echo('<p class="title animate__animated animate__bounceInRight">'. $row['fio']. '</p>');  
                            echo '<hr/ class="hr__content">' ;             
                            echo ('<div class="post animate__animated animate__bounceInRight"> ' . $row['post']. '</div>');
                            echo ('<div class="work__time animate__animated animate__bounceInRight">График работы: <span> ' . $row['schedule']. '</span></div>');
                            echo ('<div class="status animate__animated animate__bounceInRight"><span class="status__label animate__animated animate__bounceInRight"> Статус:   </span> ' . $row['status'].' </div>');
                            echo ('<div class="ip"> <span class="ip__label ">IP: </span> ' . $row['ip']. '</div>');
                            echo ('<div class="id"><span class="span__label">ID: ' . $row['id']. '</div>');
                            echo('<table class="animate__animated animate__bounceInRight">
                            <tr>
                              <th></th>
                              <th>Вход в здание</th>
                              <th>Приступил(а) к работе</th>
                              <th>Закончил(а) работу </th>
                              <th>Выход из здания</th>
                              </tr>
                             <tr>
                              <td>Понедельник</td>
                              <td>7:43</td>
                              <td>8:00</td>
                              <td>16:47</td>
                              <td>17:13</td>
                             </tr>
                            <tr>
                              <td>Вторник</td>
                              <td>7:43</td>
                              <td>8:00</td>
                              <td>16:47</td>
                              <td>17:13</td>
                            </tr>
                            <tr>
                              <td>Среда</td>
                              <td>7:43</td>
                              <td>8:00</td>
                              <td>16:47</td>
                              <td>17:13</td>
                            </tr>
                            <tr>
                              <td>Четверг</td>
                              <td>7:43</td>
                              <td>8:00</td>
                              <td>16:47</td>
                              <td>17:13</td>
                            </tr>
                            <tr>
                              <td>Пятница</td>
                              <td>7:43</td>
                              <td>8:00</td>
                              <td>16:47</td>
                              <td>17:13</td>
                            </tr>
                            <tr>
                              <td>Суббота</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                            </tr>
                            </table>');
                            
                        }
                        while($row = mysqli_fetch_assoc($result)); 
                    }
                    
                ?>
                
            </div>
        </div>
    </main>

    <script src="js/popups.js"></script>
    <script src="js/clock.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/addContent.js"></script>
    <script src="js/idFind.js"></script>
    <script src="js/changeThemes.js"></script>
</body>
</html>
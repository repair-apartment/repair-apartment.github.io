<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'ПОЧТА ОТЦА, ПОЧТА ТИМУРА'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Сообщение с сайта по ремонту'; //Заголовок сообщения
        $message = '
                     <head>
                        <title>'.$subject.'</title>
                        <style></style>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Сообщение: '.$_POST['message'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: НАЗВАНИЕ САЙТА <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <title>Ремонт квартир</title>
</head>
<body>

  <h1>Спасибо за заявку!</h1>
  <h2>Наш мастер свяжется с вами в ближайшее время</h2>
  <a href="/">Вернуться на сайт</a>




<style>
  body{
    padding-top: 30px;
    font-family: "Open Sans",sans-serif;
    text-align: center;
    color: #fff;
    background-color: #34495E;
  }

  a{
    padding: 10px;
    background-color: #fff;
    text-decoration: none;
    color: #34495E;
    border-radius: 3px;
    margin-top: 50px;
    display: inline-block;
    box-shadow: 0 2px 3px #333;
    -webkit-transition: 1s all;
    -o-transition: 1s all;
    transition: 1s all;
  }

  a:hover{
    background-color: #34495E;
    color: #fff;
    box-shadow: none;
    border: 1px solid #fff;
  }

</style>
</body>
</html>

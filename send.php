<?php
    $Name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $Name = htmlspecialchars($Name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);

    $Name = urldecode($Name);
    $tel = urldecode($tel);
    $email = urldecode($email);

    $Name = trim($Name);
    $tel = trim($tel);
    $email = trim($email);

    if (mail("r.bakshishov@gmail.com",
            "Новое письмо с сайта",
            "Имя: ".$Name. "\n".
            "Телефон: ".$tel. "\n". 
            "Почта: ".$email. "\n".
            "From: no-replay@mydomain.ru \r\n")  
    ) {
        echo ('Письмо успешно отправелно');
    }

    else {
        echo ('Есть ошибка, проверьте данные...');
    }
?>
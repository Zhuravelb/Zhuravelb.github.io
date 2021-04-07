<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) -->
<meta http-equiv='refresh' content='10; url=http://thecode.local/'>
<meta charset="UTF-8" />
<!-- Начался блок PHP -->
    <?php
    // Получаем значения переменных из пришедших данных
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];
    // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
    $mes = "Имя: $name \nE-mail: $email \nТема: $project \nТекст: $message";
    // Пытаемся отправить письмо по заданному адресу
    // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
    $send = mail($email, $project, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

    if ($send == 'true') {echo "Сообщение отправлено";}
    // Если письмо не ушло — выводим сообщение об ошибке
    else {echo "Ой, что-то пошло не так";}
    ?>

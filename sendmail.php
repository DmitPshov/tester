<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Здесь указывается email, на который будет отправлено сообщение
    $to = "dpushn@gmail.com";
    $subject = "Новое сообщение с вашего сайта от $name";
    $email_content = "Имя: $namen";
    $email_content .= "Email: $emailnn";
    $email_content .= "Сообщение:n$messagen";

    // Заголовки письма
    $email_headers = "From: $name <$email>";

    // Отправка письма
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Здесь можно добавить сообщение об успешной отправке
        echo "Спасибо! Ваше сообщение было отправлено.";
    } else {
        // Здесь можно добавить сообщение об ошибке
        echo "Ошибка отправки сообщения.";
    }
} else {
    // Не POST запрос, перенаправляем на HTML форму
    header("Location: index.html");
}
?>
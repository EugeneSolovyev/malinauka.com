<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
 
    $to = "eugenesolovyev92@gmail.com"; /*Укажите адрес, га который должно приходить письмо*/
    $sendfrom   = "malinauka@malinauka.com"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "ВОЛОНТЕР";
    $message = "<b>Имя пославшего: </b>$name<br><b>Телефон: </b>$phone<br><b>E-mail: </b>$formData";
    $send = mail ($to, $subject, $message, $headers);
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>
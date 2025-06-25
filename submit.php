<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/phpmailer/PHPMailer.php';
require_once __DIR__ . '/phpmailer/SMTP.php';
require_once __DIR__ . '/phpmailer/Exception.php';


// Подключение к базе
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expedition_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из POST
$name = trim(strip_tags($_POST['name'] ?? ''));
$email = trim($_POST['email'] ?? '');
$planet = trim($_POST['planet'] ?? '');
$date = $_POST['date'] ?? '';

// Валидация email и даты
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Неверный формат email");
}
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
  die("Неверный формат даты");
}

// Сохраняем в базу
$stmt = $conn->prepare("INSERT INTO requests (name, email, planet, date) VALUES (?, ?, ?, ?)");
if (!$stmt) {
  die("Ошибка подготовки запроса: " . $conn->error);
}
$stmt->bind_param("ssss", $name, $email, $planet, $date);

if ($stmt->execute()) {
  // Письмо
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';       // SMTP сервер (пример: Gmail)
    $mail->SMTPAuth = true;
    $mail->Username = 'andrtrotchenko30@gmail.com';      // 👉 замени на свою почту
    $mail->Password = 'gvxp jary maeb zrzb';        // 👉 замени на App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('andrtrotchenko30@gmail.com', 'Expedition-42');
    $mail->addAddress($email, $name);  // отправляем пользователю

    $mail->Subject = '=?UTF-8?B?' . base64_encode('Expedition-42: Подтверждение регистрации') . '?=';
    $mail->Body = "Здравствуйте, $name!\n\nВы успешно зарегистрированы на полёт:\n" .
                  "Планета назначения: $planet\nДата отправления: $date\n\n" .
                  "Спасибо, что выбрали Expedition-42!";
    $mail->send();
    $mail_sent = true;
  } catch (Exception $e) {
    $mail_sent = false;
  }
} else {
  echo "Ошибка: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Заявка отправлена</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .message-box {
      background-color: rgba(22, 27, 34, 0.95);
      padding: 40px;
      border-radius: 12px;
      text-align: center;
      border: 1px solid #30363d;
      box-shadow: 0 0 20px rgba(88, 166, 255, 0.2);
      position: relative;
      width: 400px;
      margin-left: 50%;
      margin-top: 10%;
      transform: translate(-50%, 0);
    }
    .message-box h1 { font-size: 24px; margin-bottom: 20px; }
    .message-box .btn {
      background-color:rgb(24, 54, 76);
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }
    .message-box .btn:hover { background-color: #58a6ff; }
  </style>
</head>
<body>
  <div class="message-box">
    <h1>
      <?php if (isset($mail_sent) && $mail_sent): ?>
        ✅ Заявка отправлена и письмо доставлено!
      <?php else: ?>
        ✅ Заявка записана, но письмо не доставлено.
      <?php endif; ?>
    </h1>
    <a href="index.php#home" class="btn">На главную</a>
  </div>
</body>
</html>

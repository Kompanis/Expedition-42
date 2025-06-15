<?php
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

// Валидация email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Неверный формат email");
}

// Валидация даты
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
  die("Неверный формат даты");
}

// Подготовка запроса (защита от SQL-инъекций)
$stmt = $conn->prepare("INSERT INTO requests (name, email, planet, date) VALUES (?, ?, ?, ?)");
if (!$stmt) {
  die("Ошибка подготовки запроса: " . $conn->error);
}

// Привязка параметров
$stmt->bind_param("ssss", $name, $email, $planet, $date);

if ($stmt->execute()) {
  echo "✅ Заявка успешно отправлена!";
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

    .message-box h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

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

    .message-box .btn:hover {
      background-color: #58a6ff;
    }
  </style>
</head>
<body>
  <div class="message-box">
    <h1>Заявка успешно отправлена!</h1>
    <a href="index.php#home" class="btn">На главную</a>
  </div>
</body>
</html>

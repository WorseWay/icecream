<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form id="registrationForm">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Зарегистрироваться</button>
            <button type="button" class="cancel" onclick="window.location.href='index.php'">Отмена</button>
        </form>
        <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
        <script>
            document.getElementById('registrationForm').addEventListener('submit', function (event) {
                window.location.href = "index.php";
                event.preventDefault();
            });
        </script>
    </div>
</body>

</html>
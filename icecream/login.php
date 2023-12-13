<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <h2>Авторизация</h2>
        <form id="registrationForm">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Вход</button>
            <button type="button" class="cancel" onclick="window.location.href='reg.php'">Отмена</button>
        </form>
        <script>
            document.getElementById('registrationForm').addEventListener('submit', function (event) {
                window.location.href = "index.php";
                event.preventDefault();
            });
        </script>
    </div>
</body>

</html>
<?php
include "Database.php";
$result = mysqli_query($link, "SELECT * FROM icecream");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/products.css">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <div class="container">
            <div id="clock"></div>
            <div class="nav">
                <div class="nav">
                    <span class="logo">Lorem Ipsum</span>
                    <ul class="menu">
                        <li>
                            <a href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li>
                            <a href="delivery.php">ДОСТАВКА</a>
                        </li>
                        <li>
                            <a href="products.php">ПРОДУКТЫ</a>
                        </li>
                        <li>
                            <a href="creators.php">СОЗДАТЕЛИ</a>
                        </li>
                    </ul>
                    <a href="reg.php" class="REG">РЕГИСТРАЦИЯ</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="row">
            <img src="img/123.png" alt="img123">
            <div class="why">
                <h3>Почему мы?</h3>
                <h1>Мы делаем это вкусно!</h1>
                <p>Вкусно, дешево, а главное большой выбор. Мороженое Lorem ipsum вы заслуживаете того, чтобы съесть сегодня сладкое</p>
                <button><img class="small-ice" img src="img/ice1.png" alt="ice1">60+</button>
                <button><img class="small-ice" img src="img/ice2.png" alt="ice1">120+</button>
                <button><img class="small-ice" img src="img/ice3.png" alt="ice1">180+</button>
                <div> <button onclick="openModal()">Купить</button></div>
                
            </div>
        </div>
    </section>
    <div id="myModal" class="modal">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <?php
                            while($icecream = mysqli_fetch_assoc($result))
                            {?>
                                 <div class="product-info">
                <p><img src="img/moroz.png" alt=""></p>
                <p class="product-price"><?php echo $icecream["price"]?>р</p>
                <p class="product-price"><?php echo $icecream["text"]?></p>
                <button class="add-to-cart-btn">Добавить в корзину</button>
            </div><?php
                            }
                        ?>
            
    </div>

    <div><form action="insert.php" method="post">
    <div>
                        <h5>Добавить товар</h5>
                        <input name="price" type="number" placeholder="Введите цену">
                        <input name="text" type="text" placeholder="Введите описание">
                        <button type="submit">Добавить</button>
                </div>
    </form></div>
    <footer>
        <div class="footer">
            <div class="footer_content">
                <div class="logo">
                    <a href="index.php"><img src="img/ice.png" alt="" ></a>
                </div>
                <div class="help">
                    <h6>Помощь</h6>
                    <a href="#">О нас</a>
                    <a href="#">Продукт</a>
                    <a href="#">Связь с нами</a>
                    <a href="#">Цена</a>
                    
                </div>
                <div class="sub">
                    <h6>Подписки</h6>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="new">
                    <div class="new">
                        <h6>Подписка на новости</h6>
                        <input type="email" placeholder="Введите ваш email">
                        <button>Подписаться</button>
                </div>
            </div>    
     </footer>
     <script>
        // Функция для открытия модального окна
        function openModal() {
            document.getElementById('myModal').style.display = 'flex';
        }

        // Функция для закрытия модального окна
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }
    </script>
</body>

</html>
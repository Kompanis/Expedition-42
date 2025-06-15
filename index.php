<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expedition-42 | Межзвёздные путешествия</title>
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/script.js"></script>
  
</head>
<body>
  <!-- 🔼 HEADER -->
  <header class="site-header">
    <div class="nav-container">
      <a href="#home" class="logo">🚀 Expedition-42</a>
      <nav class="main-nav">
        <ul>
          <li><a href="#home">Главная</a></li>
          <li><a href="#expeditions">Экспедиции</a></li>
          <li><a href="#story">История</a></li>
          <li><a href="#contact">Регистрация</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- 🔧 MAIN -->
  <main>
    <!-- 🪐 HERO -->
    <section id="home" class="hero">
      <h1>Время для космического приключения</h1>
      <p>Только сегодня — телепорт по галактикам за 15.48B. Присоединяйся к экспедиции будущего!</p>
      <button class="cta-button" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">
        🚀 Вперёд!
      </button>
    </section>

    <!-- 🌌 THREE IMAGES GRID -->
    <section class="three-images-grid">
      <div class="big-card">
        <div class="image-wrapper">
          <img src="images/111.jpg" alt="Главная экспедиция">
          <div class="overlay-text">
            <h2>Исследуй глубже</h2>
            <p>Основной портал на неизведанную планету</p>
          </div>
        </div>
      </div>

      <div class="small-cards">
        <div class="image-wrapper small">
          <img src="images/22.png" alt="Маленькая экспедиция 1">
          <div class="overlay-text">
            <h2>Больше эмоций</h2>
            <p>Открой аномальные зоны</p>
          </div>
        </div>
        <div class="image-wrapper small">
          <img src="images/33.png" alt="Маленькая экспедиция 2">
          <div class="overlay-text">
            <h2>Свежий взгляд</h2>
            <p>Туманные кольца Хроноса</p>
          </div>
        </div>
      </div>
    </section>


    <!-- 🌍 EXPEDITIONS -->
    <section id="expeditions">
      <div class="page-container">
        <div class="features-intro">
          <h2>Куда на этот раз за порцией наслаждения?</h2>
          <p>Только самые захватывающие экспедиции по всей галактике</p>
        </div>

        <div class="features-grid">
          <!-- Повторяющиеся блоки -->
          <div class="feature">
            <h3>Z-12</h3>
            <p>Самая посещаемая из всех</p>
            <img src="images/pl1.jpg" alt="Планета 1">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>

          <div class="feature">
            <h3>Punario</h3>
            <p>Больше эмоций</p>
            <img src="images/pl2.jpg" alt="Планета 2">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>

          <div class="feature">
            <h3>Terra Crimson-Edge</h3>
            <p>Свежо и остро </p>
            <img src="images/pl3.jpg" alt="Планета 3">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>

          <div class="feature">
            <h3>Salyarite</h3>
            <p>Небесные дыры и древние обсерватории</p>
            <img src="images/pll4.jpg" alt="Планета 4">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>

          <div class="feature">
            <h3>Chronos</h3>
            <p>Планета-времени. Всё течёт иначе</p>
            <img src="images/pl5.jpg" alt="Планета 5">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>

          <div class="feature">
            <h3>Phantomia</h3>
            <p>Мир иллюзий и параллельных реальностей</p>
            <img src="images/pl6.jpg" alt="Планета 6">
            <div class="card-bottom">
              <button class="cta-button to-form">Записаться</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="story" class="story-slider">
    <div class="story-slide active">
      <div class="story-text">
        <h2>История Expedition-42</h2>
        <p>Проект Expedition-42 начался с мечты исследовать далёкие миры. Мы приглашаем и тебя — отправься в экспедицию, выбрав свой путь.</p>
      </div>
      <div class="story-image">
        <img src="images/s3.jpg" alt="Слайд 1">
      </div>
    </div>

    <div class="story-slide">
      <div class="story-text">
        <h2>Новые открытия</h2>
        <p>Каждая планета в нашей программе уникальна: пейзажи, атмосфера, а иногда и живые формы. Готов к открытиям?</p>
      </div>
      <div class="story-image">
        <img src="images/s1.jpg" alt="Слайд 2">
      </div>
    </div>

    <div class="story-slide">
      <div class="story-text">
        <h2>Будущее за горизонтом</h2>
        <p>С каждым прыжком мы приближаемся к краю Вселенной. История Expedition-42 продолжается — присоединяйся!</p>
      </div>
      <div class="story-image">
        <img src="images/s2.jpg" alt="Слайд 3">
      </div>
    </div>

    <div class="story-pagination">
      <span class="dot active" onclick="showSlide(1)"></span>
      <span class="dot" onclick="showSlide(2)"></span>
      <span class="dot" onclick="showSlide(3)"></span>
    </div>
  </section>


    <!-- 📝 CONTACT FORM -->
    <section id="contact">
      <h2 class="text-center">Подать Заявку</h2>
      <form action="submit.php" method="POST" class="contact-form">
        <div class="form-row">
          <input type="text" class="form-control" name="name" placeholder="Имя капитана" required>
          <input type="email" class="form-control" name="email" placeholder="Электронная почта" required>
        </div>
        <div class="form-row">
          <select name="planet" class="form-control" required>
            <option value="" disabled selected>Выберите планету назначения</option>
            <option value="Z-12">Z-12</option>
            <option value="Punario">Punario</option>
            <option value="Terra Crimson-Edge">Terra Crimson-Edge</option>
            <option value="Salyarite">Salyarite</option>
            <option value="Chronos">Chronos</option>
            <option value="Phantomia">Phantomia</option>
          </select>

          <input type="date" class="form-control" name="date" required>
        </div>
        <button type="submit" class="cta-button">Отправить заявку</button>
      </form>
    </section>
  </main>

  <!-- 🔻 FOOTER -->
  <footer class="site-footer-expedition">
    <div class="footer-content">
      <div class="footer-left">
        <h2>🚀 EXPEDITION-42</h2>
        <p>Программа межзвёздных путешествий. Исследуй планеты, пересекай галактики и открывай новые миры вместе с нашей командой.</p>
      </div>
      <div class="footer-right">
        <p><img alt="Location:" class="footer-icon"> Earth-Base 7, Sector X, Lunar Ridge</p>
        <p><img alt="Email:" class="footer-icon">
          <a href="mailto:andrtrotchenko30@gmail.com">andrtrotchenko30@gmail.com</a>
        </p>
        <div class="footer-social">
          <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="images/telegram.png" alt="Telegram"></a>
          <a href="https://wa.me/996700123456" target="_blank"><img src="images/whatsapp.png" alt="WhatsApp"></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 Expedition-42. Все права защищены.</p>
    </div>
  </footer>
</body>
</html>

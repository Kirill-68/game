<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь | Главная страница</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="library/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="stylesheet" href="styles/pages/index.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <!-- <div class="kartinka1">
                <img src="1.jpg" alt="dfegh" class="kart1">
            </div> -->
            <a href="index.html" class="logo">New Live</a>
            <ul>
                <li>
                    <a href="">Поиск</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <!-- <img src="img/1.jpg" alt="kartink"> -->
       <section class="hero">
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/1777.jpg" alt="kartink">
                          <p>Хорёк</p>
                          <p>Lorem ipsum dolor sit amet consectetur adipsic</p>
                          <a href="">Подробнее</a>
                        </div> <div class="swiper-slide">
                            <img src="img/koshka.jpg" alt="kartink">
                              <p>Кошка</p>
                              <p>Lorem ipsum dolor sit amet consectetur adipsic</p>
                              <a href="">Подробнее</a>
                            </div> <div class="swiper-slide">
                                <img src="img/merkuriy.jpg" alt="kartink">
                                  <p>Меркурий</p>
                                  <p>Lorem ipsum dolor sit amet consectetur adipsic</p>
                                  <a href="">Подробнее</a>
                                </div> <div class="swiper-slide">
                                    <img src="img/1.jpg" alt="kartink">
                                      <p>Ультрафиолет</p>
                                      <p>Lorem ipsum dolor sit amet consectetur adipsic</p>
                                      <a href="">Подробнее</a>
                                    </div>
            </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </div>
       </section> 
       <section class="short-search">
        <div class="container">
          <form>
            <label for="type-animal">Вид животного</label>
            <select name="type-animal" id="type-animal" class="nq">
              <option value="cat">Кот</option>
              <option value="dog">Собака</option>
            </select>
            <button type="submit">Поиск</button>
          </form>
        </div>
       </section>
      <section class="facts">
        <div class="container">
          <h2>Факты</h2>
          <ul>
            <li>
              <i class="fa fa-camera-retro" aria-hidden="true"></i>
              <h3>Помогли найти животных.</h3>
              </li>
              <li>
              <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
              <h3>Одно животное не нашлось</h3>
              </li>
              <li>
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              <h3>Все животные оказались здоровыми</h3>
            </li>
          </ul>
        </div>
      </section>
      <section class="search">
        <div class="container">
          <div class="search_item">
            <form>
              <label for="place">Район</label>
              <select name="place" id="place" class="nq2">
                <option value="0">Правый берег</option>
                <option value="1">Левый берег</option>
              </select>
              <label for="animal">Вид животного</label>
              <select name="animal" id="animal" class="nq3">
                <option value="cat">Кот</option>
                <option value="dog">Собака</option>
                <option value="rabbit">Кролик</option>
                <option value="hamster">Хомяк</option>
                <option value="parrot">Попугай</option>
              </select>
              <button type="submit">Поиск</button>
            </form>
          </div>
          <div class="search_item">
            <img src="img/14.jpg" alt="">
          </div>
        </div>
      </section>
      <section class="reviews">
        <div class="container">
          <h2>Отзывы</h2>
          <div class="swiper reviews-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Фото животного</div>
              <div class="swiper-slide">Фото животного</div>
              <div class="swiper-slide">Фото животного</div>
              <div class="swiper-slide">Фото животного</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
      <section class="sub">
        <div class="container">
          <form>
            <label for="email">Почта</label>
            <input type="email" name="email" id="email" placeholder="example@mail.ru">
            <input type="textbob" name="agree" id="agree">
            <label for="agree">Согласие на обработку персональных данных</label>
            <button type="submit">Подписаться</button>
          </form>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="container">
        <div class="footer_item">
          <li>
          <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
          <a class="mail" href="mailto:mail@newlife.ru">mail@newlife.ru</a>
          </li>
          <li>
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          <a class="tel" href="tel:88001234567">8 (800)123-45-67</a>
          </li>
          <li>
          <a class="firstname" href="firstname:Kirill">Кирилл</a>
          </li>
          <li>
          <a class="lastname" href="lastname:Жирнов">Жирнов</a>
          </li>
          <li>
          <a class="username" href="username: Витальевич">Витальевич</a>
          </li>
        </div>
        <div class="footer_item">
          <ul>
            <li><a href="glavn.html">Главная</a></li>
            <li><a href="glavn2.html">Просмотр</a></li>
            <li><a href="glavn3.html">Выбрать</a></li>
            <li><a href="glavn4.html">Зарегистрироваться</a></li>
            <li><a href="glavn5.html">Войти</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView:3,
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var reviewsSwiper = new Swiper(".reviews-swiper", {
        slidesPerView:3,
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>
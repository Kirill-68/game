<?php
//session_start();
include_once 'api/db.php';
//if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $searchParams = $_GET;
    $posts;
    if(!empty($searchParams)){
        $animalType = $searchParams['animal-type'];
        $address = $searchParams['address'];

        $posts = $db->query("
        SELECT * FROM posts WHERE type_animal='$animalType' OR address='$address'
        ")->fetchAll();
        echo json_encode($posts);
    }
//}
$glavn = "<a href='glavn.php'>На главную</a>";
echo $glavn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <header>
        <div class="container">
            <!-- <a href="glavn.php">На главную</a> -->
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info_item">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="info_item">
                <form method = "GET" action = "" class="search-form">
                    <div class="search-input">
                        <input type="text" placeholder="Поиск объявлений...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <button type="submit" class="b">Найти</button>
                    <div class="search-filters">
                        <select name="animal-type">
                            <option value="">Все категории</option>
                            <option value="dog">Собаки</option>
                            <option value="cats">Кошки</option>
                            <option value="other">Другие животные</option>
                        </select>
                        <select name="address">
                            <option value="">Все районы</option>
                            <option value="central">Центральный</option>
                            <option value="north">Северный</option>
                            <option value="south">Южный</option>
                        </select>
                        <select name="status">
                            <option value="">Все статусы</option>
                            <option value="lost">Потерян</option>
                            <option value="found">Найден</option>
                        </select>
                    </div>
                </form>
                <?php
                foreach($posts as $key => $value){
                    $type = $value['type_animal'];
                    $desc = $value['description'];
                    $mark = $value['mark'];
                    $address = $value['address'];
                    $date = $value['date_found'];
                    $id = $value['id'];
                    echo "
                    <tr>
                    <td>$type</td>
                    <td><img src='img/1.jpg' alt='Фото животного'</td>
                    <td>$desc</td>
                    <td>$mark</td>
                    <td>$address</td>
                    <td>0$date</td>
                    </tr>
                    <td><a href='info.php?id=$id'>Подробнее</a></td>";
                }
                ?>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <h2>Объявления</h2>
                <select name="type" id="type">
                    <option value="0">Активно</option>
                    <option value="1">На модерации</option>
                    <option value="2">Найдено</option>
                    <option value="3">В архиве</option>
                </select>
                <div class="ad-list">
                    <div class="ad-item">
                        <img src="img/1.jpg" alt="">
                        <small>23.11.2022|Какой-то район</small>
                        <h3>Животное</h3>
                        <p>Животное агрессивное, пожалуйста да!</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/1.jpg" alt="">
                        <small>23.11.2022|Какой-то район</small>
                        <h3>Животное</h3>
                        <p>Животное агрессивное, пожалуйста да!</p>
                    </div>
                    <div class="ad-item">
                        <img src="img/1.jpg" alt="">
                        <small>23.11.2022|Какой-то район</small>
                        <h3>Животное</h3>
                        <p>Животное агрессивное, пожалуйста да!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
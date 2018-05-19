<?php
    require_once '../admin/php/db.php';
    require_once './php/function.php';
    
    $article = get_certain_article($_GET['i']);
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <title><?php echo $article['title']?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="107暑期環島">
    <meta name="keywords" content="環島,107,暑假,暑期,islandRounding,IslandRounding">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">            
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9"
        crossorigin="anonymous">
</head>

<body>
    <section class="main-page">
        <div class="topnav" id="myTopnav">
            <a href="../index.php">107暑期環島</a>
            <a href="#">關於我們</a>
            <a href="#">行程安排</a>
            <a href="./index.php" class="menu-active">每日遊記</a>
            <a href="#">推薦攜帶用品</a>
            <a href="#">登入</a>
            <a href="../admin/index.php">註冊</a>
            <a href="javascript:void(0);" class="icon" onclick="responsive_nav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>

    <article class="article-list">        
        <article class="article-container">    
            <section class = "article-item">
                <h1 class="title">
                    <?php echo $article['title']?>
                </h1>
                <p>
                    <?php 
                    echo $article['content'];                                        
                    ?>
                </p>
                <h3 class = "author">
                    <?php echo $article['author']?>            
                </h3>
                <h3 class = "post-date">
                    <?php echo $article['post_date']?>            
                </h3>
            </section>
        </article>
    </article>    



    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/smooth.js"></script>
</body>

</html>
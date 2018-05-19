<?php
    require_once '../admin/php/db.php';
    require_once './php/function.php';
    
    $datas = get_publish_article();
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <title>107IslandRounding</title>
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

    <!-- <article class="article-list">
        <section "article-container">
            <h1>
                test
            </h1>
            <p>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
            </p>
            <h3>yiwei</h3>
            <h3>2018-05-19</h3>
        </section>
    </article> -->
    <article class="article-list">        
        <article class="article-container">    
            <?php if(!empty($datas)):?>
                <?php foreach($datas as $article):?>
                        <section class = "article-item">
                            <h1 class="title">
                                <?php echo $article['title']?>
                            </h1>
                            <p>
                                <?php 
                                    $slice_article = mb_substr($article['content'],0,180,"UTF-8");
                                    echo $slice_article ." ... ";
                                ?>
                                <a href="article.php?i=<?php echo $article['id'];?>">繼續閱讀</a>
                            </p>
                            <h3 class = "author">
                                <?php echo $article['author']?>            
                            </h3>
                            <h3 class = "post-date">
                                <?php echo $article['post_date']?>            
                            </h3>
                        </section>
                <?php endforeach;?>
            <?php endif;?>
        </article>
    </article>    



    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/smooth.js"></script>
</body>

</html>
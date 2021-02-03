<?php 
require("controller/includer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nyheder | Nordic Telematics</title>
    <?php include 'includes/head.php'?>
    <link rel="stylesheet" href="style/css/nyheder.css">
</head>
<body>
    <header>
        <?php include 'includes/nav.php'?>
    </header>

    <section id="topbanner">
        <div id="container">
            <h1>Nyheder</h1>
            <h3>Det nyeste fra os</h3>
        </div>
    </section>

<section id="main">
    <div id="container">
        <?php
        $sql = "SELECT * FROM news ORDER BY newsid DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($news = mysqli_fetch_assoc($result)) {?>
            <div class="news" id="<?php echo $news['newsid']?>">
                <div class="news_img"><img src="/uploads/news/<?php echo $news['newsimage'] ?>" alt=""></div>
                <div class="news_title"><h3><?php echo $news['newstitle']?></h3></div>
                <div class="news_desc"><p><?php echo $news['newsdesc']?></p></div>
                <?php if ($news['newsbuttontext'] == "") { echo ''; } else {echo '<a class="news_button" href="' . $news["newsbuttonlink"] . '">' . $news["newsbuttontext"] .' </a>';} ?>
                <div class="news_time"><p><?php echo $news['newstime']?></p></div>
            </div>
        <?php }
        } else {
        echo "Ingen nyheder";
        } ?>
    </div>
</section>
    <?php include 'includes/footer.php'?>
</body>
</html>
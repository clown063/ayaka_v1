<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Meta from Template -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <!-- Link from Template -->
        <!-- <link rel="shortcut icon" href="assets/img/profile.png" type="image/vnd.microsoft.icon">
        <link rel="icon" href="assets/img/profile.png" type="image/vnd.microsoft.icon">
        <link rel="apple-touch-icon" href="assets/img/profile.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/profile.png"> -->
        <!-- Title of this website -->
        <title>Ayaka Fukada</title>
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="res.css">
        <!-- FONTS -->
        <link href="https://fonts.cdnfonts.com/css/the-amsterdam" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka&family=Fredoka+One&family=Hind&family=Inter&family=Laila&family=League+Gothic&family=League+Script&family=League+Spartan:wght@300;500;600;700;800&family=Montserrat&family=Old+Standard+TT&family=Pontano+Sans&family=Poppins&family=Press+Start+2P&family=Quicksand&family=Roboto&family=Share+Tech+Mono&display=swap" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="top" id="top">
            <nav class="header">
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about-me">About Me</a></li>
                    <li><a href="#">Background</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="top-img">
                <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
                $top_imgs_size = ["10%", "25%", "50%", "10%", "20%", "15%"];
                for ($i = 0; $i < COUNT($top_imgs); $i ++):?>
                    <img src="img/<?php echo $top_imgs[$i] ?>" alt="Ayaka_Fukada" class="top-imgs" />
                <?php endfor; ?>
            </div>
            <div class="top-img-dummy"></div>
            <div class="top-title">
                <h1>Fukada Ayaka</h1>
                <p>Freelance Model</p>
            </div>
        </div>
        <div class="about-me" id="about-me">
            <div class="left">
                <div class="name">
                    <p>Ayaka</p>
                </div>
                <div class="brief-profiles">
                    <div class="brief-profile sm">
                        <ul>
                            <li>深田彩華 / freelance model</li>
                            <li>📍Tokyo / 163cm / Model</li>
                            <li>Born in Fukuoka City, Fukuoka Prefecture</li>
                            <li>1998.05.02 (24)</li>
                        </ul>
                    </div>
                    <div class="brief-profile lg">
                        <ul>
                            <li>広告、ビューティー、ブライダル、アパレルetc...</li>
                            <li>ミスチャペル2023 グランプリ👰🏼</li>
                            <li>撮影のご依頼はDMへお願いします💌</li>
                        </ul>
                    </div>
                </div>
                <nav class="me-nav">
                    <ul>
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#measurements">Measurements</a></li>
                        <li><a href="composite">Composite</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <div class="img-frame">
                    <img src="img/2.jpg" alt="Ayaka_Fukada">
                </div>
            </div>
        </div>
    </body>
    <script src="jQuery.js"></script>
    <script src="style.js"></script>
</html>
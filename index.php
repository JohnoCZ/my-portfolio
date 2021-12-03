<?php
session_start();

$available_langs = array('cz','en');

$_SESSION['lang'] = 'cz';

if(isset($_GET['lang']) && $_GET['lang'] != ''){
    if(in_array($_GET['lang'], $available_langs))
    {
        $_SESSION['lang'] = $_GET['lang'];
    }
}
include('langs/'.$_SESSION['lang'].'.php');

if ($_SESSION['lang'] == "cz")
    $html_lang = "cs_CZ";
else if ($_SESSION['lang'] == "en")
    $html_lang = "en";
?>

<?php

mb_internal_encoding("UTF-8");

$hlaska = '';
if (isset($_GET['uspech']))
    $hlaska = $lang['form-error-success'];

if(!isset($_SESSION['code'])) {
    $_SESSION['code'] = RandomCode();
}

if ($_POST)
{
    if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
        isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['zprava']) && $_POST['zprava'] &&
        isset($_POST['rok']) && $_POST['rok'] == $_SESSION['code'])
    {
        $hlavicka = 'From:' . $_POST['email'];
        $upravenaZprava = '<b>Jméno: </b>'.$_POST['jmeno'].'<br/><br/>'.'<b>Email: </b>'.$_POST['email'].'<br/><br/>'.'<b>Zpráva: </b><br/>'.$_POST['zprava'];
        $hlavicka .= "\nMIME-Version: 1.0\n";
        $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
        $adresa = 'jonas.zidek@seznam.cz';
        $predmet = 'Nová zpráva z webu Johno95';
        $uspech = mb_send_mail($adresa, $predmet, $upravenaZprava, $hlavicka);
        if ($uspech)
        {
            $hlaska = $lang['form-error-success'];
            header('Location: /');
            exit;
        }
        else
            $hlaska = $lang['form-error-send'];
    }
    else
        $hlaska = $lang['form-error-not-fill'];
}

// AntiSpam
function RandomCode() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomCode = '';
    for ($i = 0; $i < 4; $i++) {
        $randomCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomCode;
}

$_SESSION['code'] = RandomCode();
?>

<?php
$random = mt_rand(1, 6);
if ($random == 1)
    $url = 'images/gallery/IMG_601.jpg';
else if ($random == 2)
    $url = 'images/gallery/IMG_614.jpg';
else if ($random == 3)
    $url = 'images/gallery/IMG_667.jpg';
else if ($random == 4)
    $url = 'images/gallery/IMG_486.jpg';
else if ($random == 5)
    $url = 'images/gallery/IMG_561.jpg';
else if ($random == 6)
    $url = 'images/gallery/IMG_571.jpg';
$image = $url;
?>

<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="<?= $html_lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ahoj a vítej na mém webovém portfóliu. Já jsem Johno a zabývám se vývojem software & web aplikací.">
    <meta name="keywords" content="Johno, developer, software, website">
    <meta name="autor" content="Johno">

    <link rel="icon" href="images/icons/devil.png" type="image/x-icon"/>
    <link rel="icon" href="images/icons/devil.png">
    <link rel="shortcut icon" href="images/icons/devil.png" type="image/x-icon"/>

    <meta property="og:title" content="Johno | Software & Web developer" />
    <meta property="og:description" content="Ahoj a vítej na mém webovém portfóliu. Já jsem Johno a zabývám se vývojem software & web aplikací." />
    <meta property="og:site_name" content="Johno" />
    <meta property="og:image" content="images/icon.png" />


    <title>Johno | Software & Web developer</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111792557-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111792557-4');
    </script>
</head>
<body>
    <div id="select-lang">
        <a href="index.php?lang=cz"><img src="images/icons/czech-republic.png" height="32" width="32" alt="CZ"></a>
        <a href="index.php?lang=en"><img src="images/icons/united-kingdom.png" height="32" width="32" alt="EN"></a>
    </div>
    <header>
        <div class="container text-center" id="header-container">
            <h1>HI! I'm <span id="header-nick">Johno</span></h1>
            <p>Software & Web developer</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#about"><?= $lang['about'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projects"><?= $lang['projects'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#social-sites"><?= $lang['social-sites'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"><?= $lang['contact'] ?></a>
            </li>
        </ul>
        </div>
    </nav>

    <!-- About -->
    <section id="about" class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= $image ?>" id="img" alt="Main obrázek">
            </div>
            <div class="col-sm-9">
                <h2><?= $lang['about'] ?></h2>
                <p><?= $lang['about-text-1'] ?></p>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="container">
        <h2><?= $lang['projects'] ?></h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>DRIP s.r.o <span class="date">2021 - <?= $lang['current'] ?></span></h3>
                        <p><span class="badge bg-danger">PHP</span> <span class="badge bg-info">JavaScript</span> <span class="badge bg-primary">SQL</span></p>
                        <p><?= $lang['DRIP'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>PASPAL <span class="date">2021 - <?= $lang['current'] ?></span></h3>
                        <p><span class="badge bg-danger">PHP</span> <span class="badge bg-info">JavaScript</span> <span class="badge bg-dark">CSS</span> <span class="badge bg-primary">SQL</span></p>
                        <p><?= $lang['PASPAL'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>Friday <span class="date">2020 - <?= $lang['current'] ?></span></h3>
                        <p><span class="badge bg-success">PYTHON</span> <span class="badge bg-primary">SQL</span></p>
                        <p><?= $lang['Friday'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>Chápeš.cz <span class="date">2021 - <?= $lang['current'] ?></span></h3>
                        <p><span class="badge bg-danger">PHP</span> <span class="badge bg-info">JavaScript</span></p>
                        <p><?= $lang['Chapes.cz'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>TraiderBlocks.eu <span class="date">2020 - 2021</span></h3>
                        <p><span class="badge bg-danger">PHP</span> <span class="badge bg-info">Java</span> <span class="badge bg-primary">SQL</span></p>
                        <p><?= $lang['TraiderBlocks.eu'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body own-card">
                        <h3>ProjectFuture.cz <span class="date">2021</span></h3>
                        <p><span class="badge bg-danger">PHP</span> <span class="badge bg-primary">SQL</span> <span class="badge bg-secondary">Linux</span></p>
                        <p><?= $lang['ProjectFuture.cz'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social sites -->
    <section id="social-sites" class="container">
        <h2><?= $lang['social-sites'] ?></h2>
        <div class="row">
            <div class="col">
                <a href="https://www.instagram.com/no_dev_in_the_room/"><img src="images/icons/instagram.png" height="64" width="64" alt="Twitter"></a>
            </div>
            <div class="col">
                <a href="https://github.com/Johno95CZ"><img src="images/icons/github.png" height="64" width="64" alt="Github"></a>
            </div>
            <div class="col">
                <a href="https://twitter.com/johnocz"><img src="images/icons/twitter.png" height="64" width="64" alt="Twitter"></a>
            </div>
        </div>
        <div class="margin-top-20">
            <a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/johnocz?ref_src=twsrc%5Etfw">Tweets by johnocz</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="container">
        <h2><?= $lang['contact'] ?></h2>
        <?php
        $jmeno = (isset($_POST['jmeno'])) ? $_POST['jmeno'] : '';
        $email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $zprava = (isset($_POST['zprava'])) ? $_POST['zprava'] : '';
        ?>
        <?php if ($hlaska) : ?>
            <div class="alert alert-info">
                <?= $hlaska ?>
            </div>
        <?php endif ?>

        <form method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <input name="jmeno" type="text" class="form-control" placeholder="<?= $lang['form-name'] ?>" value="<?= htmlspecialchars($jmeno) ?>"/><br>
                </div>
                <div class="col-sm-6">
                    <input name="email" type="email" class="form-control" placeholder="<?= $lang['form-email'] ?>" value="<?= htmlspecialchars($email) ?>"/>
                </div>
            </div>
            <br>
            <textarea class="form-control" placeholder="<?= $lang['form-text'] ?>" name="zprava" rows="8"><?= htmlspecialchars($zprava) ?></textarea><br>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <?= $lang['verify-code'] ?>: <?= $_SESSION['code'] ?>
                    <input name="rok" class="form-control" placeholder="<?= $lang['form-code'] ?>" type="text" /><br>
                </div>
                <div class="col-sm-6">
                    <br />
                    <input class="btn btn-success form-control" type="submit" value="<?= $lang['form-send'] ?>" />
                </div>
            </div>
        </form>
    </section>

    <footer class="container-fluid bg-dark text-white">
        <p>&copy; Johno95 <?= date('Y') ?> | <?= $lang['copyright'] ?></p>
        <h3><?= $lang['advertise'] ?></h3>
        <div class="container">
            <script>
                _adsys_id = 37678;
                _adsys_size = 2;
            </script>
            <script src="https://d.wedosas.net/d.js"></script>
            <endora>
        </div>

    </footer>
</body>
</html>

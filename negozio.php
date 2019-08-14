<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <meta name="description" content="Azienda Agricola e Cantina Crova Massimo, Sala Monferrato">
        <link rel="icon" type="image/jpg" href="images/logo.jpg" />
    </head>
    <body>
        <div id="header" class="header">
            <div>
                <br/>
                <a href="index.php" ><img src="images/logo.jpg" width=130px class="headIMG"></a>
                <div class="mainTitle">
                    <h1><i>Crova Massimo Vini</i></h1>
                    <h2><i><?php echo $lang['titolone'];?></i></h2><br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
        <label for="showMenu" class="showMenu">&#9776;</label>
        <input type="checkbox" id="showMenu" role="button"></input>
        <ul class="ul" id="menu">
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="Home"></input></li>
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='azienda.php'" value="<?php echo $lang['btn_azienda']?>"></input></li>
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='eventi.php'" value="<?php echo $lang['btn_eventi']?>"></input></li>
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='negozio.php'" value="<?php echo $lang['btn_negozio']?>"></input></li>
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='galleria.php'" value="<?php echo $lang['btn_album']?>"></input></li>
            <li class="li"><input type="button" class="menubuttons" onclick="document.location='contatti.php'" value="<?php echo $lang['btn_chi']?>"></input></li>
            <li class="li"><input type="button" class="menubuttons" value="Lingua / Language"><span style=\"font-size:8px\"></span></input>
                <div class="hidden">
                    <ul class="ul">
                        <li class="li" style=\"border-bottom:1px solid #CCC\"><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
                        <li class="li"><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
                    </ul>
                </div>
            </li>
        </ul>
        <h3 class="center"><?php echo $lang['negozio_text0']?></h3>
        <h3 class="center"><?php echo $lang['par_manutenzione']?></h3>
        <h3 class="center"><img src="images/fb.png" width="50px" height="auto"/><br /><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
    </body>
</html>

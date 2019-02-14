<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <meta name="description" content="Azienda Agricola e Cantina Crova Massimo, Sala Monferrato">
        <link rel="icon" type="image/jpg" href="images/logo.jpg" />
        <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
        <script src="js/maps.js"></script>
    </head>
    <body onload="myMap();">
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
        <div class="center">
            <div class="content_menu">
                <ul class="list" id="horiznav">
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="Home"></input></li>
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='azienda.php'" value="<?php echo $lang['btn_azienda']?>"></input></li>
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='eventi.php'" value="<?php echo $lang['btn_eventi']?>"></input></li>
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='negozio.php'" value="<?php echo $lang['btn_negozio']?>"></input></li>
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='galleria.php'" value="<?php echo $lang['btn_album']?>"></input></li>
                    <li class="list"><input type="button" class="menubuttons" onclick="document.location='contatti.php'" value="<?php echo $lang['btn_chi']?>"></input></li>

                    <li class="list"><input type="button" class="menubuttons" value="Lingua / Language"></input>
                        <ul class="list">
                            <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
                            <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="content_menu">
        </div>
        <div class="center">
            <h2><?php echo $lang['indirizzo'];?></h2>
            <h3><i>Via Olearo 27<br />15030 Sala Monferrato (AL)</i></h3>
            <h2><?php echo $lang['sede_legale'];?></h2>
            <h3><i>Via Asilo 14<br />15030 Sala Monferrato (AL)</i></h3>
            <h2><?php echo $lang['contatti'];?></h2>
            <h3><i>E-Mail: ilnotu@libero.it</i></h3>
            <h3><i>Massimo 329 4925192</i></h3>
            <h3><i>Silvia 349 3872704</i></h3>
        </div>
        <div class="map" id="map"></div>
        <h3 class="center"><?php echo $lang['par_manutenzione']?></h3>
        <h3 class="center"><img src="images/fb.png" width="50px" height="auto"/><br /><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
    </body>
</html>

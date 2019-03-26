<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/slideshow.css" />
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
        </div>
        </br>
        <div class="container">
            </br>
            <?php
                ini_set('display_errors', 1);
                error_reporting(E_ALL);

                $mysqli = new mysqli("localhost", "croma_croma1", "Crovamassimo321!", "croma1_vini");

                if ($mysqli->connect_errno) {
                    printf("Connect failed: %s\n", $mysqli->connect_error);
                    exit();
                }

                $result = $mysqli->query("SELECT titolo, testo FROM news WHERE test<>1 ORDER BY ordinamento DESC");
                while ($row = $result->fetch_assoc()) {
                    echo "<fieldset>";
                        echo "<h3 class=\"center\">";
                            echo $row["titolo"]."</br>";
                            echo $row["testo"];
                        echo "</h3>";
                    echo "</fieldset>";
                }
            ?>

            <!--<fieldset>
                <h3 class="center">
                    Dicono di noi...</br>
                    <a href="https://www.papilleclandestine.it/nel-bicchiere/aleatico-crova-sala-monferrato/">Che ci fa un aleatico in Monferrato?
                        </br>
                        <img src="news/immagini/sfizioso.jpg" width="auto" height="auto"/>
                    </a>
                </h3>
            </fieldset>-->
        </div>
        <h3 class="center"><img src="images/fb.png" width="50px" height="auto"/><br /><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
    </body>
</html>

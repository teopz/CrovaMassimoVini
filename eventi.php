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
        <div class="content_menu">
            </br>
            <?php
                if(!($database=mysql_connect("localhost:3306", "croma_croma1", "Crovamassimo321!"))) die ("Non è stato possibile connettersi al DB");
    				mysql_select_db("croma1_vini");
            ?>
            <fieldset>
                <h3 class="center">
                    Dicono di noi...</br>
                    <a href="https://www.papilleclandestine.it/nel-bicchiere/aleatico-crova-sala-monferrato/">Che ci fa un aleatico in Monferrato?
                        </br>
                        <img src="news/immagini/sfizioso.jpg" width="auto" height="auto"/>
                    </a>
                </h3>
            </fieldset>
        </div>
        <h3 class="center"><img src="images/fb.png" width="50px" height="auto"/><br /><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
    </body>
</html>

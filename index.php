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
        <div class="content_menu">
            <ul class="list" id="horiznav">
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="Home"></input></li>
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='azienda.php'" value="<?php echo $lang['btn_azienda']?>"></input></li>
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
        <div class="page-wrap">
            <h3 class="center"><?php echo $lang['index_text0']?></h3>
        </div>

    </body>
    <footer>
        <h3 class="center"><img src="images/fb.png" width="35px" height="auto"/><br /><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
        <iframe style="margin-left:auto; margin-right:auto" src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/crovamassimovini?fref=ts"
            scrolling="no" frameborder="0"
            style="border:none; width:100%; height:60px;">
        </iframe>
    </footer>
</html>

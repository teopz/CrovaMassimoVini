<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/slideshow.css" />
        <meta name="description" content="Azienda Agricola e Cantina Crova Massimo, Sala Monferrato">
        <link rel="icon" type="image/jpg" href="images/logo.jpg" />
        <script src="js/gallery.js"></script>
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
                    <ul>
                        <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
                        <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
                    </ul>
                </li>
            </ul>
        </div>
        <h2 class="center"><i><?php echo $lang['titolo_galleria'];?></i></h2><br/><br/>
        <div class="row">
            <?php
                $imgDir='images/album';
                $i=0;
                if ($dir = array_diff(scandir($imgDir),array('.','..'))) {
                    foreach ($dir as $album) {
                        $i=0;
                        if (is_dir($imgDir."/".$album."/thumbnails")){
                            $path=$imgDir."/".$album."/thumbnails";
                        }
                        else {
                            $path=$imgDir."/".$album;
                        }
                        $subDir = array_diff(scandir($path),array('.','..'));
                        foreach ($subDir as $imgCopertina) {
                            if ($i==0){
                                echo "<div class=\"column\">";
                                echo "<h4 class=\"text\">".$album."</h4>";
                                echo "<a href=\"album.php?album=".$album."\">";
                                echo "<img src=\"".$path."/".$imgCopertina."\"class=\"hover-shadow\"/>";
                                echo "</a></div>";
                            }
                            $i++;
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>

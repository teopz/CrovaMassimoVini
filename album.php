<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <meta name="description" content="Azienda Agricola e Cantina Crova Massimo, Sala Monferrato">
        <link rel="icon" type="image/jpg" href="images/logo.jpg" />
         <script src="js/script.js"></script>
    </head>
    <body>
        <div id="header" class="header">
            <div>
                <br/>
                <a href="index.php" ><img src="/images/logo.jpg" width=130px class="headIMG"></a>
                <div class="mainTitle">
                    <h1><i>Crova Massimo Vini</i></h1>
                    <h2><i><?php echo $lang['titolone'];?></i></h2><br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
        <div class="content_menu">
            <ul class="list" id="horiznav">
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="Home"></input></li>
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="<?php echo $lang['btn_azienda']?>"></input></li>
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="<?php echo $lang['btn_negozio']?>"></input></li>
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='album.php'" value="<?php echo $lang['btn_album']?>"></input></li>
                <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="<?php echo $lang['btn_chi']?>"></input></li>
                <li class="list"><input type="button" class="menubuttons" value="Lingua / Language"></input>
                    <ul>
                        <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
                        <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
          <h2><i>Galleria
            <?php
              if (isset($_GET['cartella'])){
                $album=$_GET['cartella'];
                echo $_GET['cartella'];
              }else $album='album1';
            ?>
          </i></h2>
        </div>
        <div class="row">
        <?php
            $imgDir='images/album/'.$album;
            $i=0;
            if ($dir = array_diff(scandir($imgDir),array('.','..'))) {
                foreach ($dir as $elemento) {
                    $i++;
                    $elemento=$imgDir."/".$elemento;
                    echo "<div class=\"column\"><img src=\"".$elemento."\" onclick=\"openModal();currentSlide(".$i.")\" class=\"hover-shadow\"></div>";
                }
            }
        ?>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <?php
                    $i=0;
                    $len=count($dir);
                    foreach ($dir as $elemento) {
                        $i++;
                        $elemento=$imgDir."/".$elemento;
                        echo "<div class=\"mySlides\">";
                        echo "<div class=\"numbertext\">".$i." / ".$len."</div>";
                        echo "<img src=\"".$elemento."\" style=\"width:100%\"></div>";
                    }
                ?>
                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </body>
</html>

<?php include_once 'lingua.php'; ?>
<html>
    <head>
        <title>Crova Massimo Vini</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" media="screen" title="style" href="css/slideshow.css" />
        <link rel="stylesheet" type="text/css" href="css/elastislide.css" />

        <meta name="description" content="Azienda Agricola e Cantina Crova Massimo, Sala Monferrato">
        <link rel="icon" type="image/jpg" href="images/logo.jpg" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/gallery.js"></script>
        <script src="js/jquery.elastislide.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.tmpl.min.js"></script>
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Precedente</a>
                        <a href="#" class="rg-image-nav-next">Successiva</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>
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
        <div>
            <h2 class="center">
                <i>
                    <?php
                        if (isset($_GET['album'])){
                            $album="images/album/".$_GET['album'];
                        }else $album="images/album/In Vigna";
                        echo $_GET['album'];
                    ?>
                </i>
            </h2>
        </div>
        <div id="rg-gallery" class="rg-gallery">
        	<div class="rg-thumbs">
        		<!-- Elastislide Carousel Thumbnail Viewer -->
        		<div class="es-carousel-wrapper">
        			<div class="es-nav">
        				<span class="es-nav-prev">Precedente</span>
        				<span class="es-nav-next">Successiva</span>
        			</div>
        			<div class="es-carousel">
                        <ul>
                        <?php
                            $i=0;
                            if ($dir = array_diff(scandir($album."/thumbnails"),array('.','..'))) {
                                foreach ($dir as $elemento) {
                                    $i++;
                                    $thumbnail=$album."/thumbnails/".$elemento;
                                    $picture=$album."/".$elemento;
                                    echo "<li><a href=\"#\">";
                                    echo "<img src=\"".$thumbnail."\" data-large=\"".$picture."\" />";
                                    echo "</a></li>";
                                }
                            }
                        ?>
        				</ul>
        			</div>
        		</div>
    		<!-- End Elastislide Carousel Thumbnail Viewer -->
        	</div><!-- rg-thumbs -->
        </div><!-- rg-gallery -->
    </body>
</html>

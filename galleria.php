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
      <?php
          $imgDir='images/album';
          $i=0;
          if ($dir = array_diff(scandir($imgDir),array('.','..'))) {
              foreach ($dir as $elemento) {
                if (is_dir($imgDir."/".$elemento)){
                  $subDir = array_diff(scandir($imgDir."/".$elemento),array('.','..'));
                  foreach ($subDir as $nuovoElemento) {
                    echo $nuovoElemento;
                  }
                  //echo $subDir;
                }
              }
          }
      ?>
    </body>
</html>

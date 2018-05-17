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
            <li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="<?php echo $lang['btn_chi']?>"></input></li>
            <li class="list"><input type="button" class="menubuttons" value="Lingua / Language"></input>
            <ul class="list">
               <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
               <li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
            </ul>
            </li>
         </ul>
      </div>
      <!--
      <div class="menu">
      <ul id="vertnav" >
      <li><input type="button" class="menubuttons" onclick="document.location='aziende.php'" value="<?php echo $lang['btn_aziende']?>"></input></li>
      <li><input type="button" class="menubuttons" onclick="document.location='privati.php'" value="<?php echo $lang['btn_privati']?>"></input></li>
      <li><input type="button" class="menubuttons" value="<?php echo $lang['btn_turismo']?>"></input>
      <ul class="list">
      <li><input type="button" class="menubuttons" onclick="document.location='proposte_tematiche.php'" value="<?php echo $lang['btn_tema']?>"></input></li>
      <li><input type="button" class="menubuttons" onclick="document.location='esp_personalizzate.php'" value="<?php echo $lang['btn_esperienze']?>"></input></li>
      </ul>
      </li>
      <li class="list"><input type="button" class="menubuttons" onclick="document.location='notizie.php'" value="<?php echo $lang['btn_notizie']?>"></input></li>
      </ul>
      </div>-->

      <h3 class="center"><?php echo $lang['par_manutenzione']?></h3>
      <h3 class="center"><a href="https://www.facebook.com/crovamassimovini/">Crova Massimo Vini</a></h3>
   </body>

</html>

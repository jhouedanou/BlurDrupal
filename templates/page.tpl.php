<!--page par defaut-->
<!--fun starts here-->
<h1 style="display:none">

  </h1>
<!--i guess the loading was not that much of a good idea
<div id="dvLoading">
    <p id="msf">
      <blink>...</blink>
        Images en cours de chargement, veuillez patienter
      <blink>...</blink>
    </p>
whole thing-->
<div id="shim">
  <h1>
<!--TO DO : add some seo juice here-->
  </h1>
</div>
<div id="content" class="ym-wrapper">
  <!--codaslider-->
  <div class="cswrapper" class="ym-wbox">
    <div class="coda-slider" id="slider-1">
      <div id="accueil">
       <div id="branding" style="text-align:center">
          <!--insert logo here-->
           <img src="<?php print $logo ?>" title="<?php print $site_name; ?>" alt="<?php print $site_name; ?>" style="margin:0 auto"/>
      </div>
       <div class="logo">
            <h1 id="prenom" >Jean Luc<span style="color:#FFF !important"> Houedanou</span></h1>
          <div id="titrez">
            Utilisez les touches gauche ou droite de votre clavier pour d&eacute;buter</br>
            <a href="#pleinecran" id="fsbutton">Cliquez ici pour activer le mode plein écran</a>
          </div>
      </div>
      </div>
       <div id="sites-web">
        <h2 class="title" >Sites web & templates pour CMS</h2>
        <p>Intégration PSD à XHTML/CSS pour site web statique, dynamique, Joomla, Wordpress et Drupal. </p>
          <?php print render($page['siteweb']) ;?>
      </div>
      <div id="graph">
        <h2 class="title" >Print et infographie</h2>
        <p>Conception de flyers, d&rsquo;affiches publicitaires, logos et mise en page</p>
          <?php print render($page['graphisme']) ;?>
      </div>
      <div id="webstra">
        <h2 class="title" >Applications mobiles</h2>
        <p>Applications Android, iOs & Windows Phone</p>
                  <?php print render($page['app']) ;?>
      </div>
      <div id="app">
        <h2 class="title" >Conseil et stratégie web</h2>
        <p>SEO, Strat&eacute;gie web et renforcement des capacit&eacute;s et des comp&eacute;tences dans l'utilisation des technologies de l&rsquo;information et de la communication.</p>
                  <?php print render($page['webstra']) ;?>
      </div>
      <div id="ctc">
        <h2 class="title" >Contactez moi</h2>
<?php print render($page['contact']);?>

      </div>
    </div> <!--endcodaslider-->
  </div><!--cswrapper-->
</div><!--content-->
   <div class="navigateur">
    <div class="menu" class="ym-gl">
      <ul>
        <li><a href="#2" data-ref="slider-1" class="vert">Templates & Sites web</a></li>
        <li><a href="#3" data-ref="slider-1" class="jaune" >Print & Infographie</a></li>
        <li><a href="#4"  data-ref="slider-1" class="rouge">App & Développement mobile</a></li>
        <li><a href="#5"  data-ref="slider-1" class="bleu">Conseil & stratégie web</a></li>
        <li><a href="#6"  data-ref="slider-1" class="violet">Contact</a>
        </li>
         <li><a href="http://leblogde.jeanluchouedanou.com" rel="dofollow"  target="_blank" class="violet">Blog</a>
        </li>
        <!--<li><a href="/user/login">Espace clients</a>-->
      </ul>

    </div>
    <div id="res" class="ym-gr">
      <ul class="social">
            <li><a target="_blank" href="http://facebook.com/bloghouedanou" class="fb"></a></li>
            <li><a target="_blank" href="http://twitter.com/afrowebdesigner" class="tw"></a></li>
            <li><a target="_blank" href="http://www.linkedin.com/in/jlhouedanou" class="lin"></a></li>
            <li>Theme sous licence <a class="lic" rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.fr"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" /></a></li>
          </ul>

    </div>

  </div>
<!--lien de telechargement blur-->
<a href="https://github.com/jhouedanou/Blur" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>

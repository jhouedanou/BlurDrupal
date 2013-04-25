<!--user login page-->
<div class="marchand">
    <div id="upperbox" class="ym-box">
    </div>
    <div id="wrapper" class="ym-wrapper">
        <div id="admin-box" class="ym-wbox">
                    <!--logo-->
                    <div id="brnad">
                        <img src="<?php print $logo ?>" alt="<?php print $site_name; ?>" />
                    </div>
                 <!--formulaire de connexion-->
                    <div id="admin-text">
                      <?php print render($page['content']); ?>
                    </div>
        </div>
    </div>
</div>

<div id="myModal1" style="display:none" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Gestion de votre compte</h3>
    </div>
    <!--niveau des stocks-->
    <div class="modal-body">
        <?php print render($page['connex']); ?>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
    </div>
</div>

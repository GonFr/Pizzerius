<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Pseudo</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="comments" class="form-label">Commentaire</label>
            <input type="text" name="comments" id="comments" class="form-control">
        </div>
        <input type="submit" value="Enregistrer" name="addcomments" class="btn btn-primary">
    </form>
</div>
</div>

<h1 class="text-center titlecomments text-black fs-1">Espace commentaire</h1>
<!-- Trigger/Open The Modal -->
<button class="btn rounded-4 btncustom" id="myBtn">Ajouter un commentaire</button>

<?php foreach ($comments as $comment) { ?>
        
<h2 class="fs-3 textcomments">Pseudo : <span class="text-dark"><?php echo $comment['name']; ?></span></h2>
<h3 class="fs-3 textcomments">Commentaire : <span class="text-dark fontnormal fs-5"><?php echo $comment['comments']; ?></span></h3>
&nbsp; 
<?php } ?>
    </div>

</div>
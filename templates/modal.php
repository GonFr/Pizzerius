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
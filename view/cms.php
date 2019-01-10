<?php include('partials/header.php'); ?>
  <h1> Teksten aanpassen</h1><br>
	<table class="table">
	<tr>
	<th scope="col">Pagina naam</th>
	<th scope="col">Content</th>
	<th scope="col">Wijzig</th>
	</tr>
	<?php foreach ($cms as $allcms):
	if(strlen($allcms['content']) > 20) $allcms['content'] = substr($allcms['content'], 0, 100).'...'; ?>
		<tr>
			<td><?php echo $allcms['naam']; ?></td>
			<td><?php echo $allcms['content']; ?></td>
			<td>
				<button style="background-color: #A3CB38; border: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Wijzig </button>
			</td>
		<tr>
	<?php endforeach; ?>
	</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wijzig <?php echo $allcms['naam'] ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hier komt de form
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <a href="../adminController/adminPanel" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <span style="font-size: 20px;">Terug naar Dashboard</span>
      </div>
    </div>
    </a>
  </div>
</div>
<?php include('partials/footer.php'); ?>

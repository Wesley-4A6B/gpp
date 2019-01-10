<?php include('partials/header.php'); ?>
 <h1> Bioscopen </h1><br>
<div class="row">
  <div class="col-md-4">
    <a href="../adminController/addBios" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-plus fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Bioscoop toevoegen</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="#" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-minus fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Bioscoop verwijderen</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="#" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-pen fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Bioscoop aanpassen</span>
      </div>
    </div>
    </a>
  </div>

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

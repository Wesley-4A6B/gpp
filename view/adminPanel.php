<?php include('partials/header.php'); ?>
 <h1> Dashboard </h1><br>
<div class="row">
  <div class="col-md-4">
    <a href="../adminController/biosPanel" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-film fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Bioscopen</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="../adminController/showCMS" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-pen fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Teksten aanpassen</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="#" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <i class="fas fa-chart-bar fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Analytics</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="#" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
         <i class="fas fa-ticket-alt fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Reserveringen</span>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-4">
    <a href="../biosController/home" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
         <i class="fas fa-sign-out-alt fa-3x" style="float: right;"></i><br><br><br>
        <span style="font-size: 20px;">Uitloggen</span>
      </div>
    </div>
    </a>
  </div>
</div>

<?php include('partials/footer.php'); ?>

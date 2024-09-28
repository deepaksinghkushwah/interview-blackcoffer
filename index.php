<?php
$heroTitle = "Home / Analytics";
include('./includes/header.php')
?>
<div class="row">
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card shadow p-3 rounded-2 justify-content-between flex-row">
      <div class="mt-3">
        <h5 class="text-secondary fw-light">Countires</h5>
        <span class="badge border border-primary text-primary me-3">Records</span>
      </div>
      <div id="countries"></div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card shadow p-3 rounded-2 justify-content-between flex-row">
      <div class="mt-3">
        <h5 class="text-secondary fw-light">Regions</h5>
        <span class="badge border border-primary text-primary me-3">Records</span>
      </div>
      <div id="regions"></div>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card shadow p-3 rounded-2 justify-content-between flex-row">
      <div class="mt-3">
        <h5 class="text-secondary fw-light">City</h5>
        <span class="badge border border-primary text-primary me-3">Records</span>
      </div>
      <div id="cities"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 mt-3">
    <div class="card shadow mb4">
      <div class="card-header">Sources</div>
      <div class="card-body">
        <div id="sources"></div>
      </div>
    </div>
  </div>
</div>


<div class="row mt-3">
  <div class="col-md-6">
    <div class="card shadow mb4">
      <div class="card-header">Sectors</div>
      <div class="card-body">
        <div id="sectors"></div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card shadow mb4">
      <div class="card-header">Topics</div>
      <div class="card-body">
        <div id="topics"></div>
      </div>
    </div>
  </div>


  <div class="col-md-12 mt-3">
    <div class="card shadow mb4">
      <div class="card-header">Intensity & Relevance</div>
      <div class="card-body">
        <div id="overall"></div>
      </div>
    </div>
  </div>
</div>


<?php include('./includes/footer.php') ?>
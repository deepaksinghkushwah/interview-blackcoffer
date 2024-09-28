<?php

use classes\Coffer;
use classes\DB;
$heroTitle = "Home / Records";
include('./includes/header.php')
?>
<div class="row">
  <div class="col-md-12 mt-3">
    <div class="card shadow mb4">
      <div class="card-header">All Records</div>
      <div class="card-body overflow-auto">
        <table class="table table-bordered" id="table1">
          <thead>
            <tr>
              <th>#</th>
              <th>End Year</th>
              <th>Intensity</th>
              <th>Sector</th>
              <th>Topics</th>
              
              <th>Swot</th>
              
              <th>Region</th>
              <th>Start Year</th>
              <th>Added</th>
              <th>Published</th>
              <th>Impact</th>
              <th>City</th>
              <th>Country</th>
              <th>Relevance</th>
              <th>Pestle</th>
              <th>Source</th>
              <th>Likelihood</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $records = Coffer::getRecords();
            foreach ($records as $row) {
            ?>
              <tr>
              <td><?= $row->id; ?></td>
                <td><?= $row->end_year; ?></td>
                <td><?= $row->intensity; ?></td>
                <td><?= $row->sector; ?></td>
                <td><?= $row->topic; ?></td>                
                <td><?= $row->swot; ?></td>               
                <td><?= $row->region; ?></td>
                <td><?= $row->start_year; ?></td>
                <td><?=date('F, d Y H:i:s', strtotime($row->added));?></td>
                <td><?=date('F, d Y H:i:s', strtotime($row->published));?></td>
                <td><?= $row->impact; ?></td>
                <td><?= $row->city; ?></td>
                <td><?= $row->country; ?></td>
                <td><?= $row->relevance; ?></td>
                <td><?= $row->pestle; ?></td>
                <td><?= $row->source; ?></td>
                <td><?= $row->likelihood; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include('./includes/footer.php') ?>
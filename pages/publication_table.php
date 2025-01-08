<?php
include '../config/config.php';
$vals = $_POST['vals'];
$year = $vals[0];
$section = $vals[1];

if($year == 'all'){

  if($section == 'all'){
    $sql = $bdd -> prepare("SELECT * FROM publication ORDER BY date DESC");
    $sql -> execute();
  }else{
    $sql = $bdd -> prepare("SELECT * FROM publication WHERE section = :section ORDER BY date DESC");
    $sql -> execute([
      ":section" => $section
    ]);
  }

}else{

  if ($section == 'all'){
    $sql = $bdd -> prepare("SELECT * FROM publication WHERE year = :year ORDER BY date DESC");
    $sql -> execute([
      ":year" => $year
    ]);
  }else{
    $sql = $bdd -> prepare("SELECT * FROM publication WHERE year = :year AND section = :section ORDER BY date DESC");
    $sql -> execute([
      ":year" => $year,
      ":section" => $section
    ]);
  }

}
?>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr class="table_head_font_publication">
      <th>Year</th>
      <th>Section</th>
      <th>Description</th>
      <th>Date</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($data = $sql -> fetch()){
    ?>
    <tr class="table_body_font_publication">
      <td>
        <div class="d-flex align-items-center">
          <?= $data[1] ?>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?= $data[2] ?></p>
      </td>
      <td>
        <div class="d-flex align-items-center">
          <?= $data[4] ?>
        </div>
      </td>
      <td>
        <?= $data[5] ?>
      </td>
      <td>
        <a href="./controllers/assets/files/publication/<?= $data[3] ?>" target="_blank">
          <button type="button" class="btn btn-primary btn-sm btn-rounded">
            Download
          </button>
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
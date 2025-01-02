<?php

include '../config/config.php';
$id = $_POST['id'];
$id_array = explode(',', $id);
$id = $id_array[0];
$year = $id_array[1];
$filename = $id_array[2] ;

echo "<script>
    $('#id').val(" . json_encode($id) . ");
    $('#year').val(" . json_encode($year) . ");
    $('#yearid').val(" . json_encode($year) . ");
</script>";

$sql_data = [
    ['table' => 'publication', 'des' => 'title', 'type' => 'datalist'],
    ['table' => 'sin_publication', 'des' => 'sin_title', 'type' => 'datalist-sinhala'],
    ['table' => 'tam_publication', 'des' => 'tam_title', 'type' => 'datalist-tamil']
];

foreach($sql_data as $data){
    $table = $data['table'];

    $sql = $bdd -> prepare("SELECT * FROM $table WHERE id = :id AND year = :year");
    $sql -> execute([
        ":id" => $id,
        ":year" => $year
    ]);
    $fetch_data = $sql -> fetch();

    $type = $data['type'];
    $des = $data['des'];
    $fetch_type = htmlspecialchars($fetch_data['section']);
    $fetch_des = htmlspecialchars($fetch_data['des']);

    echo "<script>
        $('#$type').val(" . json_encode($fetch_type) . ");
        $('#$des').val(" . json_encode($fetch_des) . ");
    </script>";
}
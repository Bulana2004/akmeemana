<?php
include '../config/config.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!$id) {
    die("Invalid ID");
}

function fetchData($bdd, $table, $id) {
    $query = $bdd->prepare("SELECT * FROM $table WHERE id = :id");
    $query->execute([":id" => $id]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

$data = fetchData($bdd, 'news', $id);
$sin_data = fetchData($bdd, 'sin_news', $id);
$tam_data = fetchData($bdd, 'tam_news', $id);

$title = htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8');
$des = htmlspecialchars($data['des'], ENT_QUOTES, 'UTF-8');
$sin_title = htmlspecialchars($sin_data['title'], ENT_QUOTES, 'UTF-8');
$sin_des = htmlspecialchars($sin_data['des'], ENT_QUOTES, 'UTF-8');
$tam_title = htmlspecialchars($tam_data['title'], ENT_QUOTES, 'UTF-8');
$tam_des = htmlspecialchars($tam_data['des'], ENT_QUOTES, 'UTF-8');

echo "<script>
    $('#id').val(" .json_decode($id). ");
    $('#title').val(" . json_encode($title) . ");
    $('#description').val(" . json_encode($des) . ");
    $('#sin-title').val(" . json_encode($sin_title) . ");
    $('#sin-description').val(" . json_encode($sin_des) . ");
    $('#tam-title').val(" . json_encode($tam_title) . ");
    $('#tam-description').val(" . json_encode($tam_des) . ");
</script>";
?>

<?php

include '../config/config.php';

$vals = json_decode($_POST['vals'], true);
$year = $vals[1];
$type = $vals[2];
$sin_type = $vals[3];
$tam_types = $vals[4];
$des = $vals[5];
$sin_des = $vals[6];
$tam_des = $vals[7];
$date = $vals[8];
$yearid = $vals[9];

if($vals[0] > 0){
    
    $data = [
        ["table" => 'publication', 'section' => $type, 'des' => $des],
        ['table' => 'sin_publication', 'section' => $sin_type, 'des' => $sin_des],
        ['table' => 'tam_publication', 'section' => $tam_types, 'des' => $tam_des]
    ];

    foreach($data as $sql_data){
        $table = $sql_data['table'];
        $type = $sql_data['section'];
        $des = $sql_data['des'];

        $sql = $bdd -> prepare("UPDATE $table SET section = :section, des = :des, date = :date, year = :year WHERE id = :id AND year = :yearid");
        $sql -> execute([
            ":section" => $type,
            ":des" => $des,
            ":date" => $date,
            ":year" => $year,
            ":id" => $vals[0],
            ":yearid" => $yearid
        ]);
    }

    echo "<script>window.location.reload()</script>";
    
}else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['uploadedFiles'])) {
            $uploadFileDir = '../assets/files/publication/';

            // Check if the directory exists; if not, create it
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0777, true);
            }

            $response = '';

            foreach ($_FILES['uploadedFiles']['error'] as $key => $error) {
                if ($error === UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES['uploadedFiles']['tmp_name'][$key];
                    $fileName = $_FILES['uploadedFiles']['name'][$key];
                    $dest_path = $uploadFileDir . $fileName;

                    if (file_exists($dest_path)) {
                        echo "<div class='alert alert-danger' role='alert'>
                                Error: A file with the name '$fileName' already exists
                            </div>";
                    } else {
                        // Success file uploaded
                        if (move_uploaded_file($fileTmpPath, $dest_path)) {

                            $data = [
                                ["table" => 'publication', 'section' => $type, 'des' => $des],
                                ['table' => 'sin_publication', 'section' => $sin_type, 'des' => $sin_des],
                                ['table' => 'tam_publication', 'section' => $tam_types, 'des' => $tam_des]
                            ];

                            foreach($data as $datafortable){
                                $table = $datafortable['table'];
                                $type = $datafortable['section'];
                                $description = $datafortable['des'];

                                $sql = $bdd -> prepare("SELECT * FROM $table ORDER BY id DESC");
                                $sql -> execute();
                                $id = $sql -> fetch();
                                $id = $id[0];

                                if(empty($id)){
                                    $newid = 1;
                                }else{
                                    $newid = $id + 1;
                                }

                                $stmt = $bdd -> prepare("INSERT INTO $table VALUES (:id, :year, :section, :files, :des, :date)");
                                $stmt -> execute([
                                    ':id' => $newid,
                                    ':year' => $year,
                                    ':section' => $type,
                                    ':files' => $fileName,
                                    ':des' => $description,
                                    ':date' => $date
                                ]);
                            }

                            echo "<script>window.location.reload()</script>";

                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                There was an error moving file '$fileName'
                            </div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                                Error uploading file '$fileName'. Code: $error
                            </div>";
                }
            }

            echo $response;
        } else {
            echo "No files uploaded or there was an upload error.";
        }
    }
}

?>

<?php

include '../config/config.php';

$vals = json_decode($_POST['vals'], true);
$title = $vals[0];
$date = $vals[2];
$sin_title = $vals[3];
$tam_title = $vals[4];

if($vals[1] > 0){

    if($title){
        $sql = $bdd -> prepare('update tenders set title = :title , date = :date where id = :id');
        $sql -> execute([
            ":id" => $vals[1],
            ":title" => $vals[0],
            ":date" => $date
        ]);
    }

    if($sin_title){
        $sql = $bdd -> prepare('update sin_tenders set title = :title , date = :date where id = :id');
        $sql -> execute([
            ":id" => $vals[1],
            ":title" => $sin_title,
            ":date" => $date
        ]);
    }

    if($tam_title){
        $sql = $bdd -> prepare('update tam_tenders set title = :title , date = :date where id = :id');
        $sql -> execute([
            ":id" => $vals[1],
            ":title" => $tam_title,
            ":date" => $date
        ]);
    }
    echo "<div class='alert alert-primary' role='alert'>
            Update Successfully!
        </div>";
}else{
    $sql = $bdd -> prepare("select * from tenders ORDER BY id DESC");
    $sql -> execute();
    $id = $sql -> fetch();
    $id = $id[0] + 1;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['uploadedFiles'])) {
            $uploadFileDir = '../controllers/assets/files/tenders/';

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

                            if($title){
                                $sql = $bdd -> prepare("insert into tenders (id, file, title, date) values (:id, :filename, :title, :date)");
                                $sql -> execute([
                                    ":id" => $id,
                                    ":filename" => $fileName,
                                    ":title" => $title,
                                    ":date" => $date
                                ]);
                            }
                            
                            if($sin_title){
                                $sql = $bdd -> prepare("insert into sin_tenders (id, file, title, date) values (:id, :filename, :title, :date)");
                                $sql -> execute([
                                    ":id" => $id,
                                    ":filename" => $fileName,
                                    ":title" => $sin_title,
                                    ":date" => $date
                                ]);
                            }

                            if($tam_title){
                                $sql = $bdd -> prepare("insert into tam_tenders (id, file, title, date) values (:id, :filename, :title, :date)");
                                $sql -> execute([
                                    ":id" => $id,
                                    ":filename" => $fileName,
                                    ":title" => $tam_title,
                                    ":date" => $date
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

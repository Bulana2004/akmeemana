<?php

include '../config/config.php';

$vals = json_decode($_POST['vals'], true);
$title = $vals[0];
$description = $vals[1];

if($vals[2] > 0){
    // $sql = $bdd -> prepare('update slider set title = :title , paragraph = :des where id = :id');
    // $sql -> execute([
    //     ":id" => $vals[2],
    //     ":title" => $vals[0],
    //     ":des" => $vals[1]
    // ]);
    // echo "<div class='alert alert-primary' role='alert'>
    //         Update Successfully!
    //     </div>";
}else{
    $sql = $bdd -> prepare("select * from slider ORDER BY id DESC");
    $sql -> execute();
    $id = $sql -> fetch();
    $id = $id[0] + 1;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['uploadedFiles'])) {
            $uploadFileDir = '../controllers/assets/img/slider/';

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
                            $sql = $bdd -> prepare("insert into slider (id, images, title, paragraph) values (:id, :filename, :title, :description)");
                            $sql -> execute([
                                ":id" => $id,
                                ":filename" => $fileName,
                                ":title" => '',
                                ":description" => ''
                            ]);
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

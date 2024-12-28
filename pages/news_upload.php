<?php

include '../config/config.php';

$vals = json_decode($_POST['vals'], true);
$title = $vals[0];
$description = $vals[1];
$date = $vals[3];
$sin_title = $vals[4];
$sin_des = $vals[5];
$tam_title = $vals[6];
$tam_des = $vals[7];

if ($vals[2] > 0) {
    if($title){
        $sql = $bdd->prepare('UPDATE news SET title = :title, des = :des , date = :date WHERE id = :id');
        $sql->execute([
            ":id" => $vals[2],
            ":title" => $vals[0],
            ":des" => $vals[1],
            ":date" => $vals[3]
        ]);
    }

    if($sin_title){
        $sql = $bdd->prepare('UPDATE sin_news SET title = :title, des = :des , date = :date WHERE id = :id');
        $sql->execute([
            ":id" => $vals[2],
            ":title" => $sin_title,
            ":des" => $sin_des,
            ":date" => $vals[3]
        ]);
    }

    if($tam_title){
        $sql = $bdd->prepare('UPDATE tam_news SET title = :title, des = :des , date = :date WHERE id = :id');
        $sql->execute([
            ":id" => $vals[2],
            ":title" => $tam_title,
            ":des" => $tam_des,
            ":date" => $vals[3]
        ]);
    }

    echo "<div class='alert alert-primary' role='alert'>
            Update Successfully!
        </div>";

} else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['uploadedFiles'])) {
            $uploadFileDir = '../controllers/assets/img/news/';

            // Check if the directory exists; if not, create it
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0777, true);
            }

            $uploadedFiles = [];
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

                            // Set Filenames to an array
                            $uploadedFiles[] = $fileName;
                            // echo "<div class='alert alert-primary' role='alert'>
                            //     File uploaded successfully '$fileName'
                            // </div>";
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

            // Set file name as a string
            $fileNamesString = implode(',', $uploadedFiles);

            // Display alert instead of inserting into the database
            if (!empty($fileNamesString)) {

                if($title){
                    // Select last id from database
                    $sql = $bdd->prepare("SELECT * FROM news ORDER BY id DESC");
                    $sql->execute();
                    $id = $sql->fetch();
                    $id = $id[0] + 1;

                    $sql = $bdd -> prepare("insert into news (id, img, title, des, date) values (:id, :img, :title, :des, :date)");
                    $sql -> execute([
                        ":id" => $id,
                        ":img" => $fileNamesString,
                        ":title" => $title,
                        ":des" => $description,
                        ":date" => $date
                    ]);

                }
                
                if($sin_title){

                    // Select last id from database
                    $sql = $bdd->prepare("SELECT * FROM sin_news ORDER BY id DESC");
                    $sql->execute();
                    $id = $sql->fetch();
                    $sinid = $id[0] + 1;

                    $sql = $bdd -> prepare("insert into sin_news (id, img, title, des, date) values (:id, :img, :title, :des, :date)");
                    $sql -> execute([
                        ":id" => $sinid,
                        ":img" => $fileNamesString,
                        ":title" => $sin_title,
                        ":des" => $sin_des,
                        ":date" => $date
                    ]);

                }
                
                if($tam_des){

                    // Select last id from database
                    $sql = $bdd->prepare("SELECT * FROM tam_news ORDER BY id DESC");
                    $sql->execute();
                    $id = $sql->fetch();
                    $tamid = $id[0] + 1;

                    $sql = $bdd -> prepare("insert into tam_news (id, img, title, des, date) values (:id, :img, :title, :des, :date)");
                    $sql -> execute([
                        ":id" => $tamid,
                        ":img" => $fileNamesString,
                        ":title" => $tam_title,
                        ":des" => $tam_des,
                        ":date" => $date
                    ]);

                }

                // echo "<div class='alert alert-success' role='alert'>
                //                 $filenameString File Upload Successfully
                //             </div>";

                echo "<script>window.location.reload()</script>";
            }

        } else {
            echo "No files uploaded or there was an upload error.";
        }
    }
}

?>

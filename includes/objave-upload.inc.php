<?php

if (isset($_POST['submit'])) {
    $newFileName = "gallery";
    $price = $_POST['fileprice'];
    $timefrom = $_POST['filetimefrom'];
    $timeto = $_POST['filetimeto'];
    $service = $_POST['fileservice'];
    $Desc = $_POST['filedesc'];
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../img/gallery/" . $imageFullName;

                include_once "dbh.inc.php";

                if (empty($price) || empty($timefrom) || empty($timeto) || empty($service) || empty($Desc)) {
                    header("Location: ../pronadi.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM objave;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "Greška";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO objave (priceObjave,fromObjave,toObjave,serviceObjave,descObjave,imgFullNameObjave) VALUES (?,?,?,?,?,?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "Greška";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssssss", $price, $timefrom, $timeto, $service, $Desc, $imageFullName);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: ../pronadi.php?upload=success");
                        }
                    }
                }
            } else {
                echo "Slika je prevelika!";
                exit();
            }
        } else {
            echo "Greška!";
            exit();
        }
    } else {
        echo "Trebaš odabrati file u odabranom formatu!";
        exit();
    }
}

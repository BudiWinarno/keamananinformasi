<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing PHP | Budi Winarno</title>
</head>

<body>
    <?php
    $inputdata = "budiwinarno";

    echo "Data Sebelum Hash : $inputdata";

    echo "<br>";

    $datahash = password_hash("budiwinarno", PASSWORD_DEFAULT);

    echo "Data Setelah Hash : $datahash";

    echo "<br>";
    echo "<br>";

    if (password_verify($inputdata, $datahash)) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
    ?>
</body>

</html>
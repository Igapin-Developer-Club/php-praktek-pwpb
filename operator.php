<?php
if (isset($_POST["bilAwal"])) {
    $angka1 = $_POST["bilAwal"];
    $angka2 = $_POST["bilAkhir"];
    $hasil = $angka1 + $angka2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan</title>
</head>
<body>
    <form method = "post">
    <table size=10>
        <tr>
            <td>
                <input type="text" name="bilAwal" value="<?php echo $angka1; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="bilAkhir" value="<?php echo $angka2; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Kerjakan">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" value="<?php  
                echo $hasil;     
             ?>">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
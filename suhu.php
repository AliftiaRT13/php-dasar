<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <h1>Konversi Satuan Suhu</h1>
    <form method="POST">
        <br>
        <div> 
            <label for="">Konversi</label>
            <select name="konversi" id="">
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Reamur">Reamur</option>
                <option value="Kelvin">Kelvin</option>
            </select>
        </div>
        <div> 
            <label for="">Suhu</label>
            <input type="number" name="Suhu">
        </div>
        </br>
        <button>Hitunglah</button> 
    </form>

    <?php
    if (isset($_POST['Suhu'])) {
        $suhuCelsius = $_POST['Suhu'];

        if (isset($_POST['konversi'])) {
            $konversi = $_POST['konversi'];

            if ($konversi == "Fahrenheit") {
                $suhuFahrenheit = ($suhuCelsius * 9 / 5) + 32;
                echo "Hasil konversi suhu ke Fahrenheit adalah: " . $suhuFahrenheit . " °F";
            } elseif ($konversi == "Reamur") {
                $suhuReamur = $suhuCelsius * 0.8;
                echo "Hasil konversi suhu ke Reamur ialah: " . $suhuReamur . " °R";
            } elseif ($konversi == "Kelvin") {
                $suhuKelvin = $suhuCelsius + 273;
                echo "Hasil konversi suhu ke Kelvin ialah: " . $suhuKelvin . " K";
            }
        }
    }
    ?>
</body>
</html>
<?php

$mahasiswa = [
    [1, "D212111001", "Aliftia Radianti Taniasari"],
    [2, "D212111002", "Cahya Julianti"],
    [3, "D212111003", "Dasimah Seftiani"],
    [4, "D212111004", "Desi Syifa Fitria"],
    [5, "D212111005", "Dewi Yulianti"],
    [6, "D212111009", "Islah Nurhasanah"],
    [7, "D212111031", "Siti Nur Rohimah"],
];
	
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr><th>No</th><th>NIM</th><th>Nama</th></tr>";

foreach ($mahasiswa as $row) {
    echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
          </tr>";
}
echo "</table>";
?>
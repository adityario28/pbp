<?php
$mahasiswas = [
    [
        'nama' => 'saifur',
        'alamat' => 'kalinyamatan',
        'tanggal_lahir' => '5 Maret 1997',
        'umur' => 22
    ],
    [
        'nama' => 'mega',
        'alamat' => 'lebak',
        'tanggal_lahir' =>'24 Mei 1999',
        'umur' => 20,
    ],
];

foreach($mahasiswas as $mahasiswa){
    echo "Nama: ".$mahasiswa['nama']."<br/>";
    echo "Alamat: ".$mahasiswa['alamat']."<br/>";
    echo "Tanggal Lahir: ".$mahasiswa['tanggal_lahir']."<br/>";
    echo "Umur: ".$mahasiswa['umur']."<br/>";
}
?>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tanggal Lahir</td>
        <td>Umur</td>
    </tr>
<?php
$no = 1;

foreach($mahasiswas as $mahasiswa){
    echo "<tr>";
    echo "<td>".$no."</td>
        <td>".$mahasiswa['nama']."</td>
        <td>".$mahasiswa['alamat']."</td>
        <td>".$mahasiswa['tanggal_lahir']."</td>
        <td>".$mahasiswa['umur']."</td>";
    echo "</tr>";
    $no++;
}
?>
</table>

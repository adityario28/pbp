<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 </title>
</head>
<body>
    <form method="post" action="halaman2.php">
<!--
        <label for="firstname">First Name : </label>
        <br>
        <input type="text" name="firstname">
        <br><br>
        <label for="lastname">Last Name : </label>
        <br>
        <input type="text" name="lastname">
        <br><br><br>
        Pilih jenis kelamin : 
        <br>
        <input type="radio" name="jenis_kelamin" value="Male">
        Male
        <br>
        <input type="radio" name="jenis_kelamin" value="Female">
        Female
        <br><br><br>
        Makanan Favorit : 
        <br>
        <input type="checkbox" name="makanan" value="baksow">
        Baksow
        <br>
        <input type="checkbox" name="makanan" value="burgir">
        Burgir
        <br>
        <input type="checkbox" name="makanan" value="emie">
        Emie
        <br>
        <input type="checkbox" name="makanan" value="endog">
        Endog
        <br><br><br>
        <input type="submit" value="SUBMIT">

  -->
  <table border="2" cellpadding="15">
        <tr bgcolor="cyan">
            <th colspan="2">Form Pendaftaran</th>
        </tr>
        <tr>
            <td>Nama Awal</td>
            <td ><input type="text" name="fnama"></td>
        </tr>
        <tr>
            <td>Nama Akhir</td>
            <td ><input type="text" name="lnama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Pria">Pria <br>
                <input type="radio" name="jenis_kelamin" value="Wanita">Wanita
            </td>
        </tr>
        <tr>
            <td>Pekerjaan </td>
            <td>
            <select name="pekerjaan">
            <option value="pelajar">Pelajar</option>    
            <option value="pengangguran">Pengangguran</option>
            <option value="karyawan_swasta">Karyawan Swasta</option>
            <option value="wiraswasta">Wiraswasta</option>
            </select>
            </td>
        </tr>
        <tr bgcolor="cyan"><th colspan="3">
        <input type="submit" value="SUBMIT" style="width:100px; height:50px"> 
        <input type="reset" value="Reset" style="width:100px; height:50px"> 

    </th>  
    </table>

    </form>
</body>
</html>
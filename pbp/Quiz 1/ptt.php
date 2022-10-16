<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table border=2>
            <tr>
                <td>
                    No
                </td>
                <td>
                    Nama Barang
                </td>
                <td>
                    Harga
                </td>
                <td>
                    Beli
                </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    Keyboard
                </td>
                <td>
                    80.000
                </td>
                <td>
                    <input type="checkbox" name="beli1" id="">
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    Mouse
                </td>
                <td>
                    100.000
                </td>
                <td>
                    <input type="checkbox" name="beli2" id="">
                </td>
            </tr>
                <tr>
                <td>
                    3
                </td>
                <td>
                    Monitor
                </td>
                <td>
                    600.000
                </td>
                <td>
                    <input type="checkbox" name="beli3" id="">
                </td>
            </tr>
            <tr>
                <td>
                    4
                </td>
                <td>
                    Printer
                </td>
                <td>
                    1.000.000
                </td>
                <td>
                    <input type="checkbox" name="beli4" id="">
                </td>
            </tr>
            <tr>
                <td>
                    5
                </td>
                <td>
                    Speaker
                </td>
                <td>
                    300.000
                </td>
                <td>
                    <input type="checkbox" name="beli5" id="">
                </td>
            </tr>
        </table>
        <br>
        <br>
        <input type="submit" value="Belanja">
    </form>
    
    <br>
    <br>

    <?php
        if(isset($_POST['beli1']) || isset($_POST['beli2']) || isset($_POST['beli3']) || isset($_POST['beli4']) || isset($_POST['beli5'])) {

            $harga1 = 80000;
            $harga2 = 100000;
            $harga3 = 600000;
            $harga4 = 1000000;
            $harga5 = 300000;

            $total = 0;
            $jumlah = 0;
            ?>
                <table border="2">
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Nama Barang
                        </td>
                        <td>
                            Harga
                        </td>
                    </tr>
            <?php


            if(filter_has_var(INPUT_POST, 'beli1')) {
                $jumlah++;
                ?>
                    <tr>
                        <td><?php echo($jumlah) ?></td>
                        <td>Keyboard</td>
                        <td><?php echo($harga1) ?></td>
                    </tr>
                <?php
                $total = $total + $harga1;
            }
            if(filter_has_var(INPUT_POST, 'beli2')) {
                $jumlah++;
                ?>
                    <tr>
                        <td><?php echo($jumlah) ?></td>
                        <td>Keyboard</td>
                        <td><?php echo($harga2) ?></td>
                    </tr>
                <?php
                $total = $total + $harga2;
            }
            if(filter_has_var(INPUT_POST, 'beli3')) {
                $jumlah++;
                ?>
                    <tr>
                        <td><?php echo($jumlah) ?></td>
                        <td>Keyboard</td>
                        <td><?php echo($harga3) ?></td>
                    </tr>
                <?php
                $total = $total + $harga3;
            }
            if(filter_has_var(INPUT_POST, 'beli4')) {
                $jumlah++;
                ?>
                    <tr>
                        <td><?php echo($jumlah) ?></td>
                        <td>Keyboard</td>
                        <td><?php echo($harga4) ?></td>
                    </tr>
                <?php
                $total = $total + $harga4;
            }
            if(filter_has_var(INPUT_POST, 'beli5')) {
                $jumlah++;
                ?>
                    <tr>
                        <td><?php echo($jumlah) ?></td>
                        <td>Keyboard</td>
                        <td><?php echo($harga5) ?></td>
                    </tr>
                <?php
                $total = $total + $harga5;
            }                
            ?>
                <tr>
                    <td><b>x</b></td>
                    <td><b>Jumlah</b></td>
                    <td><b><?php echo($total) ?></b></td>
                </tr>
            <?php
        }
    ?>
            </table>
</body>
</html>
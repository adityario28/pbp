<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 1</title>
</head>
<body>
    <form method="post" action="">
        <table cellpadding="5" border="1">
            <tr>
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Beli</td>
            </tr>
            <tr>
                    <td>1</td>
                    <td>Keyboard</td>
                    <td>80.000</td>
                    <td><input type="checkbox" name="beli1"></td>
            </tr>
            <tr>
                    <td>2</td>
                    <td>Mouse</td>
                    <td>100.000</td>
                    <!--<td><input type="checkbox" name="beli2" id=""></td>-->
                    <td><input type="checkbox" name="beli2"></td>
            </tr>
            <tr>
                    <td>3</td>
                    <td>Monitor</td>
                    <td>600.000</td>
                    <!--<td><input type="checkbox" name="beli3" id=""></td>-->
                    <td><input type="checkbox" name="beli3"></td>

            </tr>
            <tr>
                    <td>4</td>
                    <td>Printer</td>
                    <td>1.000.000</td>
                    <!--<td><input type="checkbox" name="beli4" id=""></td>-->
                    <td><input type="checkbox" name="beli4"></td>
            </tr>
            <tr>
                    <td>5</td>
                    <td>Speaker</td>
                    <td>300.000</td>
                    <!--<td><input type="checkbox" name="beli5" id=""></td>-->
                    <td><input type="checkbox" name="beli5"></td>
            </tr>
        </table>
        <input type="submit" value="BELANJA" style="width:260px; height:30px">
        </form>
        
        <br>
        <br>
        <?php
         if(isset($_POST['beli1']) || isset($_POST['beli2']) || isset($_POST['beli3']) || isset($_POST['beli4']) || isset($_POST['beli5'])){
            $hg1 = 80000;
            $hg2 = 100000;
            $hg3 = 600000;
            $hg4 = 1000000;
            $hg5 = 300000;

            $total = 0;

            echo("<table cellpadding='5' border='1'>
            <th colspan='2'>Keranjang Belanja</th>
            <tr>
                <td>Nama</td>
                <td>Harga</td>
            </tr>");
            if(isset($_POST['beli1'])){
            echo("<tr>
                <td>Keyboard</td>
                <td>$hg1</td>
            </tr>");
            $total = $total + $hg1;
        }
            if(isset($_POST['beli2'])){
            echo("<tr>
                <td>Mouse</td>
                <td>$hg2</td>
            </tr>");
            $total = $total + $hg2;
        }
            if(isset($_POST['beli3'])){
            echo("<tr>
                <td>Monitor</td>
                <td>$hg3</td>
            </tr>");
            $total = $total + $hg3;
        }
            if(isset($_POST['beli4'])){
            echo("<tr>
                <td>Printer</td>
                <td>$hg4</td>
            </tr>");
            $total = $total + $hg4;
            }
            if(isset($_POST['beli5'])){
            echo("<tr>
                <td>Speaker</td>
                <td>$hg5</td>
            </tr>");
            $total = $total + $hg5;
        }
            echo("<tr>
                <td>Total</td>
                <td>$total</td>
            </tr>");
         }
        ?>
         </table>
</body>
</html>
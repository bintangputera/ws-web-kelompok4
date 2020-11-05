<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <h2>Transaksi</h2>
        <br />
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Masukan Harga</td>
                    <td><input type="text" name="harga" required onkeypress="return hanyaAngka(event)"/></td>
                </tr>
                <tr>
                    <td>Masukan Diskon (Tanpa Tanda %)</td>
                    <td><input type="number" min="1" max="100" name="diskon" required  /></td>
                </tr>
                <tr>
                    <td>
                        <label><br><br>
                        <input type="submit" name="Submit" value="Hitung" id="prn">
                    </label>
                        <label>
                        <input type="reset" name="reset" value="Batal" id="prn">
                    </label>
                        <label>
                         <a href="./registration.php">Hitung Ulang</a>
                    </label>
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>
        <div id="hasil">
            <?php
            error_reporting (E_ALL ^ E_NOTICE);
              $harga =$_POST['harga'];
              $diskon =$_POST['diskon'];
              $nilai = ($diskon/100) * $harga;
              echo 'Nominal diskon ';
              echo $diskon;
              echo '% dari '; 
              echo number_format($harga,2,",","."); 
              echo ' adalah sebesar <u>';
              echo number_format($nilai,2,",",".");
              echo '</u>';
            ?>
        </div>
</body>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
</html>
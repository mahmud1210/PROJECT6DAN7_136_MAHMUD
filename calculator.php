<html>
<head>
    <title>Calculatorku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        if(isset($_POST['hitung'])){
            $bil1    =$_POST['bil1'];
            $bil2    =$_POST['bil2'];
            $operasi=$_POST['operasi'];
        
            switch ($operasi) {
                case 'tambah':
                    $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                    $hasil = $bil1-$bil2;
                break;
                case 'kali':
                    $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                    $hasil = $bil1/$bil2;
                break; 
                case 'modulus':
                    $hasil = $bil1%$bil2;
                break;
                case "akar":
                    $hasil = sqrt ($bil1);
                break;
            }
        }
    ?>
    <div class="kalkulator">
        <h4 class="judul">KALKULATOR SEDERHANA</h4>
        <form method="post" action="calculator.php"> 
            <input type="text" name="bil1" class="bil" placeholder="Masukkan Angka ke-1" required/>
            <input type="text" name="bil2" class="bil" placeholder="Masukkan Angka ke-2" required/>
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
                <option value="bagi">%</option>
                <option value="bagi">^</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="hitung"/> 
            <a href="./" style="text-decoration:none;">
            <input type="reset" value="Hapus" class="hapus"/></a> 
        
        <?php if(isset($_POST['hitung'])){
        ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
        <?php
        }
        else{
        ?>
            <input type="text" value="0" class="hasil"/>
        <?php
        }
        ?>
        </form> 
    </div>
</body>
</html>
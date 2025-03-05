<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <?php
    $bil1 = "";
    $bil2 = "";
    $hasil = "";
    $operasi = "";

    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        switch ($operasi){
            case 'tambah': $hasil = $bil1 + $bil2;
                break;
            case 'kurang': $hasil = $bil1 - $bil2;
                break;
            case 'kali': $hasil = $bil1 * $bil2;
                break;
            case 'bagi': $hasil = $bil1 / $bil2;
                break; 
        }
    }
    
    
    ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl text-center font-semibold mb-5">
            Kalkulator
        </h2>
        <form action="" method="POST">
            <input type="text" name="bil1" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="Bilangan Pertama" value="<?php echo $bil1;?>">
            <input type="text" name="bil2" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="Bilangan Kedua" value="<?php echo $bil2;?>">
            <select name="operasi" class="w-full p-3 mb-4 border border-gray-200 rounded">
            <option value="tambah" <?php echo $operasi == 'tambah' ? 'selected' : ''; ?>>+</option>
            <option value="kurang" <?php echo $operasi == 'kurang' ? 'selected' : ''; ?>>-</option>
            <option value="kali" <?php echo $operasi == 'kali' ? 'selected' : ''; ?>>*</option>
            <option value="bagi" <?php echo $operasi == 'bagi' ? 'selected' : ''; ?>>/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="w-full p-3 mb-4 border border-gray-200 rounded bg-violet-600 hover:bg-violet-800 text-white">
            <input type="text" name="hasil" placeholder="Hasil Bilangan" class="w-full p-3 mb-4 border border-violet-600 rounded" readonly value="<?php echo $hasil;?>">
        </form>
    </div>
  </body>
</html>
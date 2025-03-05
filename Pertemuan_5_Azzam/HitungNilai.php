<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen gap-10">



    <?php
    $nama = "";
    $nilai_akhir = "";
    $predikat = ""; 
    $tugas = "";

    $uts = ""; 
    $uas = "";
    
// isset() memeriksa apakah variabel ada dan tidak bernilai null.
//         Mengembalikan true jika variabel ada dan tidak null.

// !isset() memeriksa apakah variabel tidak ada atau bernilai null.
//          Mengembalikan true jika variabel tidak ada atau null.

//  session : digunakan untuk menyimpan data sementara yang dapat diakses
//            oleh pengguna selama periode tertentu


session_start();

// memeriksa apakah $_SESSION['siswaList'] sudah ada dalam sesi atau belum
if(!isset($_SESSION['siswaList'])) { //true
    $_SESSION['siswaList'] = []; //jika kondisi true maka akan dibuatkan array kosong
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama']) && isset($_POST['tugas']) && isset($_POST['uts']) && isset($_POST['uas'])){
    // cek apakah inputan form ada dan tidak kosong
        $nama = $_POST['nama'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        
        if (is_numeric($tugas) && is_numeric($uts) && is_numeric($uas)) {

            $nilai_akhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

            if ($nilai_akhir >= 85) {
                $predikat = 'A';
            } elseif ($nilai_akhir >= 70) {
                $predikat = 'B';
            } elseif ($nilai_akhir >= 60) {
                $predikat = 'C';
            } elseif ($nilai_akhir >= 50) {
                $predikat = 'D';
            } else {
                $predikat = 'E';
            }
        } else {
            $nilai_akhir = $predikat = "Input tidak valid";
        }}

    

  

        // simpan data ke dalam sesi
        $_SESSION['siswaList'][] = [
            'nama' => $nama,
            'nilai_akhir' => $nilai_akhir,
            'predikat' => $predikat,
        ];
    }

    if (isset($_POST['delete'])) {
        session_destroy(); //hapus seluruh data sesi

        session_start();
        $_SESSION['siswaList'] = [];
    }
    ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl text-center font-semibold mb-5">
            Form Input Nilai Siswa
        </h2>
        <form action="" method="POST">
            Nama Siswa
            <input type="text" name="nama" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="" >
            Nilai Tugas
            <input type="text" name="tugas" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="" >
            Nilai UTS
            <input type="text" name="uts" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="" >
            Nilai UAS
            <input type="text" name="uas" class="w-full p-3 mb-4 border border-gray-200 rounded" autocomplete="off" placeholder="" >
            <input type="submit" name="hitung" value="HitungNilai" class="w-full p-3 mb-4 border border-gray-200 rounded bg-blue-500 hover:bg-blue-600 text-white">
        </form>
    </div>

    <div class="flex flex-col gap-5">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl text-center font-semibold mb-5">Hasil Penilaian</h2>
        <table class="border-collapse border border-gray-400 w-full">
    <thead>
        <tr>
          <th class="border border-gray-300 bg-gray-600 text-white p-2">Nama</th>
          <th class="border border-gray-300 bg-gray-600 text-white p-2">Nilai Akhir</th>
          <th class="border border-gray-300 bg-gray-600 text-white p-2">Predikat</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_SESSION['siswaList'] as $list): ?>
        <tr>
          <td class="border border-gray-300 text-center p-2"><?= ($list['nama']); ?></td>
          <td class="border border-gray-300 text-center p-2"><?= ($list['nilai_akhir']); ?></td>
          <td class="border border-gray-300 text-center p-2"><?= ($list['predikat']); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>

    <form action="" method="POST">
    <input type="submit" name="delete" value="delete" class="w-full p-3 mb-4 border border-gray-200 rounded bg-red-400 hover:bg-red-500 text-white">
    </form>

    </div>
  </body>
</html>

<?php
// PENJELASAN PHP
// PHP (Hypertext Preprocessor) adalah bahasa pemrograman sisi server yang digunakan untuk
// mengembangkan aplikasi web dinamis. PHP pertama kali dikembangkan oleh Rasmus Lerdorf pada tahun 1994.
// PHP sangat populer karena mudah digunakan, kompatibel dengan banyak database (MySQL, PostgreSQL, dll.),
// dan dapat berjalan di berbagai sistem operasi seperti Windows, macOS, dan Linux.

// PHP biasanya digunakan untuk:
// - Mengembangkan website dinamis
// - Mengelola database
// - Membuat sistem login dan autentikasi
// - Mengolah data formulir
// - Membangun API

// PERSIAPAN UNTUK MENJALANKAN PHP
// 1. Instalasi Web Server: Apache, Nginx, atau IIS
// 2. Instalasi PHP: Unduh dari https://www.php.net/
// 3. Instalasi Database (Opsional): MySQL, PostgreSQL, SQLite
// 4. Menggunakan Local Server seperti XAMPP, MAMP, atau WAMP untuk kemudahan pengelolaan
// 5. Teks Editor atau IDE: VS Code, PHPStorm, Sublime Text, atau Notepad++


// STANDAR OUTPUT
// echo dan print digunakan untuk menampilkan output ke browser

// Menggunakan echo (bisa menampilkan banyak parameter)
echo "Halo, selamat datang!<br>";
echo "Jum'at<br>";

// Menggunakan print (hanya bisa menampilkan satu parameter)
print "Hello, World!<br>";


// PENULISAN PHP
// PHP bisa ditulis di dalam HTML, atau HTML di dalam PHP

// Contoh PHP di dalam HTML:
?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP</title>
</head>

<body>
    <h1><?php echo "Halo, Selamat Datang!"; ?></h1>
</body>

</html>
<?php

// Contoh HTML di dalam PHP:
echo "<h2>Ini ditulis menggunakan PHP!</h2>";


// VARIABEL
// Variabel dalam PHP diawali dengan tanda $
// Nama variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka di tengah atau akhir

$nama = "Divta Suryawan";
$pesan = "Halo, selamat datang $nama";
echo $pesan . "<br>";


// OPERATOR

// 1. Operator Aritmatika
// Operator yang digunakan untuk operasi matematika: +, -, *, /, %

$a = 10;
$b = 20;
echo "Hasil Penjumlahan: " . ($a + $b) . "<br>";
echo "Hasil Pengurangan: " . ($b - $a) . "<br>";
echo "Hasil Perkalian: " . ($a * $b) . "<br>";
echo "Hasil Pembagian: " . ($b / $a) . "<br>";
echo "Hasil Modulus: " . ($b % $a) . "<br>";


// 2. Operator Penggabungan String (Concatenation)
// Digunakan untuk menggabungkan string menggunakan titik (.)

$nama_depan = "Divta";
$nama_belakang = "Suryawan";
echo "Nama Lengkap: " . $nama_depan . " " . $nama_belakang . "<br>";


// 3. Operator Assignment / Penugasan
// =, +=, -=, *=, /=, %=, .=

$x = 10;
$x += 5; // Sama dengan $x = $x + 5
echo "Nilai x setelah ditambah 5: $x <br>";

$text = "Divta";
$text .= " Suryawan"; // Menggabungkan string
echo "Nama Lengkap: $text <br>";


// 4. Operator Perbandingan / Comparison
// ==, <=, >=, <, >, !=

var_dump(10 == "10"); // true karena nilainya sama (tanpa cek tipe data)
var_dump(10 === "10"); // false karena tipe data berbeda (integer vs string)
var_dump(10 != 20); // true karena 10 tidak sama dengan 20
var_dump(10 > 5); // true karena 10 lebih besar dari 5
var_dump(10 < 20); // true karena 10 lebih kecil dari 20


// 5. Operator Identitas / Strict Comparison
// Digunakan untuk membandingkan nilai dan tipe data

var_dump(10 === "10"); // false karena tipe datanya berbeda
var_dump(10 !== 10); // false karena nilainya sama


// 6. Operator Logika / Logical
// Digunakan untuk pengambilan keputusan dengan kondisi

$a = 10;
$b = 20;

if ($a < $b && $b == 20) {
    echo "Kondisi Benar!<br>";
}

if ($a > $b || $b == 20) {
    echo "Salah satu kondisi benar!<br>";
}

if (!($a > $b)) {
    echo "Negasi: a tidak lebih besar dari b <br>";
}
?>
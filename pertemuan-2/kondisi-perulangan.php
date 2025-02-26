<?php

// 1. if
$age = 18;
// Jika usia lebih besar atau sama dengan 18
if ($age >= 18) {
    echo "Anda sudah cukup umur untuk mengemudi.";
}

// 2. if else
$age = 16;
// Jika usia lebih besar atau sama dengan 18
if ($age >= 18) {
    echo "Anda sudah cukup umur untuk mengemudi.";
} else {
    echo "Anda belum cukup umur untuk mengemudi.";
}

// 3. while
$i = 1;

// Perulangan while: akan terus berjalan selama $i kurang dari atau sama dengan 5
while ($i <= 5) {
    echo "Nomor: $i";
    $i++; // Increment nilai $i setelah setiap iterasi
}


// 4. for
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor: $i";
}

// 5.  foreach
// Membuat array dengan beberapa nilai
$fruits = array("Apel", "Mangga", "Jeruk", "Pisang");

// Perulangan foreach untuk menampilkan setiap elemen dalam array $fruits
foreach ($fruits as $fruit) {
    echo "Buah: $fruit\n"; // Menampilkan nama buah
}


// 6. do while
$i = 1; // Inisialisasi variabel $i dengan nilai 1

// Perulangan do-while: akan menjalankan kode sekali sebelum memeriksa kondisi
do {
    echo "Nomor: $i"; // Menampilkan nomor $i
    $i++; // Increment nilai $i setelah setiap iterasi
} while ($i <= 5); // Perulangan akan terus berjalan selama $i kurang dari atau sama dengan 5

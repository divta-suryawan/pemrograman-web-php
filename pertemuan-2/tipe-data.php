<!-- TIPE DATA -->
<!-- 
1. String
2. Integer
3. Float
4. Boolean 
5. Array 
6. Objek 
7. Null  
-->
<?php
// 1. Tipe Data String (teks)
// String adalah kumpulan karakter yang diapit dengan tanda kutip ("" atau '').
$string1 = "Halo, PHP!";
$string2 = 'Belajar PHP itu menyenangkan';
var_dump($string1);
var_dump($string2);


// 2. Tipe Data Integer (bilangan bulat)
// Integer adalah bilangan bulat tanpa desimal.
$integer = 100;
var_dump($integer);

// 3. Tipe Data Float (bilangan desimal)
// Float adalah bilangan yang memiliki titik desimal.
$float = 10.5;
var_dump($float);


// 4. Tipe Data Boolean (true/false)
// Boolean hanya memiliki dua nilai: true atau false.
$booleanTrue = true; // Bernilai benar
$booleanFalse = false; // Bernilai salah

var_dump($booleanTrue);
var_dump($booleanFalse);



//  5. Tipe Data Array (kumpulan nilai)
// Array adalah variabel yang dapat menyimpan banyak nilai dalam satu variabel.
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);


// 6. Tipe Data Objek (kumpulan properti)
// Objek adalah instance dari sebuah class yang berisi properti (variabel) dan metode (fungsi).
// Mendefinisikan kelas sederhana bernama "Person"
class Person
{
    // Properti (atribut/variable) yang akan dimiliki oleh objek
    public $name;
    public $age;
    // Konstruktor untuk menginisialisasi properti ketika objek dibuat
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    // Metode(fungsi) untuk menampilkan informasi objek
    public function greet()
    {
        return "Halo, nama saya " . $this->name . " dan saya berusia " . $this->age . " tahun.";
    }
}

// Membuat objek dari kelas Person
$person1 = new Person("Budi", 25);

// Memanggil metode(fungsi) greet() dari objek person1
echo $person1->greet();
var_dump($person1);


// 7. Tipe data NULL
$x = "Hello world!";
$x = null;
var_dump($x);

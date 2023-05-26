<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <form action="#" method="post">
        <label for="angkaSatu">Angka 1 : </label>
        <input type="number" name="angkaSatu" id="angkaSatu"><br>
        <label for="angkaDua">Angka 2 : </label>
        <input type="number" name="angkaDua" id="angkaDua"><br>
        <input type="submit" name="kirim" value="tekan" >
    </form>
<?php class Aritmatika {
    private $angkaSatu;
    protected $angkaDua;

    public function __construct($angkaSatu, $angkaDua) {
        $this->angkaSatu = $angkaSatu;
        $this->angkaDua = $angkaDua;
    }

    public function tambah() {
        return $this->angkaSatu + $this->angkaDua;
    }

    public function kurang() {
        return $this->angkaSatu - $this->angkaDua;
    }

    public function kali() {
        return $this->angkaSatu * $this->angkaDua;
    }

    public function bagi() {
        return $this->angkaSatu / $this->angkaDua;
    }

    public function modulus() {
        return $this->angkaSatu % $this->angkaDua;
    }

}

class Kalkulator extends Aritmatika {
    public function tampilkanHasil() {
        echo "Perkalian: " . $this->kali() . "<br>";  
        echo "Pengurangan: " . $this->kurang() . "<br>";
        echo "Pembagian: " . $this->bagi() . "<br>"; 
        echo "Modulus: " . $this->modulus() . "<br>"; 
        echo "Penjumlahan: " . $this->tambah() . "<br>";
    }
}

?>

<?php
    if (isset($_POST['kirim'])) {
        $angkaSatu = $_POST['angkaSatu'];
        $angkaDua = $_POST['angkaDua'];

        $kalkulator = new Kalkulator($angkaSatu, $angkaDua);
        $kalkulator->tampilkanHasil();
    }
?>
</body>
</html>
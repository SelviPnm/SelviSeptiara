<!DOCTYPE html>
<html>
<head>
    <title>Melakukan Pencarian User</title>
</head>
<body>
    <form action="" method="get">
    Pencarian Nama User : <input type="text" name="cari">
    <br><br>
    <input type="submit" name="tombol" value="Search">
    </form>

<?php
if(isset($_GET['cari'])){

$cari = $_GET['cari'];
$user = array(
    array(
        "nama"              => "Arsene Lupin",
        "nik"               => "1234",
        "jenis_kelamin"     => "Male",
        "tgl_lahir"         => "1902-03-23"
    ),
    array(
        "nama"              => "Sherlock Holmes",
        "nik"               => "4321",
        "jenis_kelamin"     => "Male",
        "tgl_lahir"         => "1812-01-11"
    ),
    array(
        "nama"              => "Irene Adler",
        "nik"               => "7890",
        "jenis_kelamin"     => "Female",
        "tgl_lahir"         => "1232-04-13"
    )
);
$x=0;
$y=0;
foreach($user as $z){
if(strtoupper($z["nama"]) == strtoupper($cari)){
$x=1;
$y=$z;} 
}

if($x){
echo "<ul>";
echo "<li>Nama              : ".$y["nama"]."</li>";
echo "<li>NIK               : ".$y["nik"]."</li>";
echo "<li>Jenis Kelamin     : ".$y["jenis_kelamin"]."</li>";
echo "<li>Tanggal Lahir     : ".$y["tgl_lahir"]."</li>";
echo "</ul>";}
}
?>
</body>
</html>
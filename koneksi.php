<?php
$koneksi=mysqli_connect("localhost","root","","db_barang" );
if($koneksi){
    echo "Koneksi Berhasil";
}else
echo "koneksi gagal";



?>

<?php
$conn = mysqli_connect("localhost" , "root", "" , "db_barang");


// function query($query){
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     };

//     return $rows;
// }

function tambah($data){
    global $conn;
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO barang VALUES 
    ('', '$barang', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>
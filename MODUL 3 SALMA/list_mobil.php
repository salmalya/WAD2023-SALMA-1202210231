<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            
                $sql = "SELECT * FROM showroom_mobil";
                $query = mysqli_query($connect, $sql);
                $mobil = mysqli_fetch_assoc($query);

                //$query = mysqli_connect($connect, "SELECT * FROM showroom_mobil");
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'
                if(mysqli_num_rows($query)){
                    die("tidak ada data dalam tabel");
                }
            ?>
            <!--  **********************  1  **************************     -->
            <div class="continer mt-5" style="width: 50%">;
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">brand_mobil</th>
                    <th scope="col">warna_mobil</th>
                    <th scope="col">tipe_mobil</th>
                    <th scope="col">harga_mobil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $selects['id']?></th>
                    <td><?= $selects['brand_mobil']?></td>
                    <td><?= $selects['warna_mobil']?></td>
                    <td><?= $selects['tipe_mobil']?></td>
                    <td><?= $selects['harga_mobil']?></td>
                </tr>
                <?php
                        
                    
                ?>
            </tbody>
        </table>
            







            <!--  **********************  1  **************************     -->

            <!--  **********************  2  **************************     -->

            
            

            
            
            <!--  **********************  2  **************************     -->
            
        </div>
    </center>
</body>
</html>

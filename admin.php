<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <style>
            body{
                background-color:#ffffff;
            }
            header {
                text-align: center;
                background-color: #000000;
                color: #FFFFFF ; 
                margin-top: -15px;
                margin-left: -15px;
                margin-right: -15px;
                padding: 30px 10px;
            }
            h2{
                color: white;
                text-align:center;
            }
            table{
                border-collapse:collapse;
                margin-top:20px;
                margin-left:auto;
                margin-right:auto;
            }
            table th, table td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align:left;
            }
            table th{
                background-color: #f2f2f2;
            }
            nav {
                border: 2px solid black;
                margin-left: -9px;
                margin-right: -9px;
                padding: 20px;
            }
            .btn {
                padding: 8px 15px;
                text-decoration: none;
                background-color:#4caf50;
                color:white;
                border:none;
                border-radius:4px;
                transition: background-color 0.3s ease;
            }
            .btn1 {
                padding: 8px 15px;
                text-decoration: none;
                background-color:#ff0000;
                color:white;
                border:none;
                border-radius:4px;
                transition: background-color 0.3s ease;
            }
            nav a {
                text-decoration: none; 
                color: grey; 
                margin-right: 15px;
                font-family:arial; 
            }

            nav a:last-child {
                margin-right: 0; 
            }
            header img {
            width: 100px; /* Adjust the width of the image */
            height: auto; /* Maintain the aspect ratio of the image */
            border-radius: 50%; /* Optional: Add rounded corners to the image */
            }
        </style>
    </head>
    <body>
        <header>
        <img src="Favicon-SMK-N-2-Surakarta.png" >
        <h2>SISTEM INFORMASI SISWA</h2>
        <h5> SMK NEGERI 2 SURAKARTA <h5>
        </header>
        <nav>
            <a href="home.php">Home </a>
            <a href="index.php">Siswa </a>
            <a href="admin.php">Admin </a>
            <a href="form-login.php">Login <a>
            <a href="form-signup.php">Sign up <a>
        </nav>
    <form method="post" action = "simpan.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name = "nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name = "nama"></td></tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value = "L">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value = "P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>
                        <select name="jurusan" >
                        <option value="PPLG">PPLG</option>
                            <option value="TJKT">TJKT</option>
                            <option value="TM">TM</option>
                            <option value="TO">TO</option>
                            <option value="DPIB">DPIB</option>
                            <option value="TKP">TKP</option>
                            <option value="TFLM">TFLM</option>
                            <option value="GEOSPASIAL">GEOSPASIAL</option>
                            <option value="TE">TE</option>
                            <option value="TKL">TKL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name = "alamat"></td>
                </tr>
                <tr>
                    <td colspan = "2"><button type = "submit" value = "simpan" class='btn'>SIMPAN</button></td>
                </tr>
            </table>
        </form>
<h2>List Mahasiswa</h2>
<table border = "1">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
    </tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no = 1;
    foreach($mahasiswa as $row) {
        $jenis_kelamin = $row['jenis_kelamin'] == 'P'?'Perempuan':'Laki-Laki';
        echo "<tr>
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
                <td>".$row['alamat']."</td>
                <td>
                <a href = 'form-edit.php?id_mhs=$row[id_mhs]' class='btn'>EDIT</a>
                <a href = 'delete.php?id_mhs=$row[id_mhs]'class='btn1'>DELETE</a>
                </td>
                </tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>

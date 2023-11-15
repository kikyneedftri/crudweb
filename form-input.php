<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Input Data</title>
    </head>
    <body>
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
                    <td colspan = "2"><button type = "submit" value = "simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
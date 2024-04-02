<!DOCTYPE html>
<html>
    <head>
        <title>Contoh form dengan PHP</title>
    </head>
    <body>
        <h2>Form contoh</h2>
        <form action="proses_lanjut.php" method="post">
            <label for="buah">Pilih buah: </label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>
            <br>
            <label>Pilih warna favorite: <br></label>
            <input type="checkbox" name="warna[]" value="merah">Merah <br>
            <input type="checkbox" name="warna[]" value="biru">Biru <br>
            <input type="checkbox" name="warna[]" value="hijau">Hijau <br>
            <br>

            <label>Pilih jenis kelamin: <br></label>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki laki <br>
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
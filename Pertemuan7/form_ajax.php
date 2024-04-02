<!DOCTYPE html>
<html>
    <head><title>Contoh form dengan PHP dan query</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h2>Form contoh</h2>
        <form id="myForm">
            <label for="buah">Pilih buah</label>
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

        <div id="hasil">
            <!-- hasil -->
        </div>

        <script>
            $(document).ready(function(){{
                $("#myForm").submit(function(e){
                    e.preventDefault(); //mencegah pengiriman form scr default

                    // mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    // kirim data ke server PHP
                    $.ajax({
                        url: "proses_lanjut.php",
                        type: "POST",
                        data: formData,
                        success: function(response){
                            // hasil div
                            $("#hasil").html(response);
                        }
                    });
                });
            }});
        </script>
    </body>
</html>
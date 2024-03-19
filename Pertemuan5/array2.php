<!DOCTYPE html>
<html>
    <head>
        <style>
            .body{
                font-family: 'Times New Roman';
                color: blue;
            }
            td, th{
                border-radius: 10px;
                background-color: yellow;
            }
            table{
                background-color: pink;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body class=body>
        <?php
         $dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis kelamin' => 'Perempuan'
         ];
         echo "
            <table border=1>
                <tr>
                    <th>Nama</th>
                    <td>{$dosen['nama']}</td>
                </tr>
                <tr>
                    <th>Domisili</th>
                    <td>{$dosen['domisili']}</td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td>{$dosen['jenis kelamin']}</td>
                </tr>
            </table>
            ";
        //  echo "Nama : {$dosen ['nama']} <br>";
        //  echo "Domisili: {$dosen ['domisili']} <br>";
        //  echo "Jenis kelamin: {$dosen ['jenis kelamin']}";
        ?>
    </body>
</html>
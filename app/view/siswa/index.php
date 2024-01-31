<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <table class= "siswa">
        <thead>
            <tbody>
            <tr>
                <th>No</th>
                <th>Nama</th>                
            </tr>
        </thead>
            </tbody>
    </table>

    <?php
        foreach ($data['siswa'] as $sis){
            ?>
            <tr>
                <td>1</td>
                <td><?= $sis['Nama'] ?></td>
            </tr>
            <?php
        }
    ?>
</body>
</html>

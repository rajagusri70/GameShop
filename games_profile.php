<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <?php

    $steamAppID = $_GET['appid'];
    $url = 'http://store.steampowered.com/api/appdetails?appids='.$_GET['appid'];
    $data = file_get_contents($url);
    $content = json_decode($data, true);

    ?>

    <table>
        <tr>
            <td>Nama Game</td>
            <td>Gambar</td>
            <td>Deskripsi</td>
        </tr>
        <?php
        print "<tr>";
        print "<td>".$content[$steamAppID]['data']['name']."</td>";
        print "<td><img src='".$content[$steamAppID]['data']['header_image']."'></img></td>";
        print "<td>".$content[$steamAppID]['data']['detailed_description']."</td>";
        print "</tr>";
        ?>
    </table>

</body>
</html>
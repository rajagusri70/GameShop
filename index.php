<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>

    <?php

        $url = 'http://api.steampowered.com/ISteamApps/GetAppList/v0001/';
        $data = file_get_contents($url);
        $content = json_decode($data, true);


        //=====Pencarian=====
        // function filterValuePart(arr, part) {
        // return arr.filter(function(obj) {
        // return Object.keys(obj)
        //              .some(function(k) { 
        //                        return obj[k].indexOf(part) !== -1; 
        //         });
        //     });
        // });
        //echo $content['applist']['apps']['app'][0];
        echo "<h1 align='center'>Daftar game Steam</h1>";
        echo "<br/>";
    ?>

    <table>
        <tr>
            <th>Nomor</th>
            <th>App ID</th>
            <th>Name</th>
            <th>Link</th>
        </tr>
        <?php
        for($a=0; $a < 20; $a++){
            print "<tr>";
            print "<td>".$a."</td>";
            print "<td>".$content['applist']['apps']['app'][$a]['appid']."</td>";
            print "<td>".$content['applist']['apps']['app'][$a]['name']."</td>";
            print "<td><a href='games_profile.php?appid=".$content['applist']['apps']['app'][$a]['appid']."''>KLIK</a></td>";
            print "<tr>";
        }
        ?>
    </table>
    Go to Apps</a>
</body>
</html>
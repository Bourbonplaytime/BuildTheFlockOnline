<?php //server testing
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die("Fatal Error");

    if (isset($_POST['delete']) && isset($_POST['twitter']))
    {
        $twitter = get_post($conn, 'twitter');
        $query = "DELETE FROM profile_urls WHERE twitter='$twitter'";
        $result = $conn->query($query);
        if(!$result) echo "DELETE failed<br><br>";
    }

    if (isset($_POST['twitter']) &&
        isset($_POST['instagram']) &&
        isset($_POST['facebook']) &&
        isset($_POST['section']))
    {
        $twitter = get_post($conn, 'twitter');
        $instagram = get_post($conn, 'instagram');
        $facebook = get_post($conn, 'facebook');
        $section = get_post($conn, 'section');
        $query = "INSERT INTO profile_urls VALUES('$twitter', '$instagram', '$facebook', '$section')";
        $result = $conn->query($query);
        if (!$result) echo "INSERT failed <br><br>";
    }

    echo <<<_END
        <form action="server_connect.php" method="post"><pre>
        Twitter <input type="text" name="twitter">
        Instagram <input type="text" name="instagram">
        Facebook <input type="text" name="facebook">
        Section <input type="number" min="100" max="99999" name="section">
        <input type="submit" value="Add info">
        </pre></form>
_END;

    $query = "SELECT * FROM profile_urls";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");

    $rows = $result->num_rows;

    for($j = 0; $j < $rows; ++$j)
    {
        $row = $result->fetch_array(MYSQLI_NUM);

        $r0 = htmlspecialchars($row[0]);
        $r1 = htmlspecialchars($row[1]);
        $r2 = htmlspecialchars($row[2]);
        $r3 = htmlspecialchars($row[3]);

        echo <<<_END
            <pre>
                Twitter $r0
                Instagram $r1
                Facebook $r2
                Section $r3
            </pre>
            <form action="server_connect.php" method="post">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="twitter" value="$r0">
            <input type="submit" value="DELETE RECORD"></form>
_END;
    }

    $result->close();
    $conn->close();

    function get_post($conn, $var)
    {
        return $conn->real_escape_string($_POST[$var]);
    }
?>
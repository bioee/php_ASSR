<html>
    <body>
        <?php
        require "connexionbase.php";
        $query = "SELECT * FROM user;";
        $sth = $dbh->query($query);
        $count = 1;
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) :
            ?>
        <tr>
            <td><?= htmlspecialchars($count) ?></td>
            <td><?= htmlspecialchars($row['login']) ?></td>     
        </tr>   

        <?php
        $count++;
    endwhile;
    ?>
</body>
</html>

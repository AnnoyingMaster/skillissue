<table class="content-table">
    <thead>
        <tr>
            <td>Dátum:</td>
            <td>Felhasználó:</td>
            <td>Komment:</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){?>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['felhasznalo']; ?></td>
            <td><?php echo $row['comment']; ?></td>
        </tr>
            <?php
            }?>
        </tr>
    </tbody>
</table>
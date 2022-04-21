<?php  
  $query = "SELECT * from sensors";

  $stmt = $pdo->prepare($query);

  $stmt->execute();

  $res = $stmt->fetchAll();

    
  ?>


<div class="container-with-table">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Температура</th>
                <th scope="col">Давление</th>
                <th scope="col">Время</th>
                <th scope="col">Дата</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1?>
            <?php foreach ($res as $row): ?>
            <tr>
                <th scope="row"><?=$number?></th>
                <td><?=$row["temperature"]?></td>
                <td><?=$row["barometer"]?></td>
                <td><?=$row["time"]?></td>
                <td><?=$row["date"]?></td>
            </tr>
            <?php 
            $number += 1;
            endforeach
            ?>

        </tbody>
    </table>
</div>
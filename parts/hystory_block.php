<?php  
  $query1 = "SELECT * from  hystory LEFT JOIN person ON person.person_id = hystory.person_id";

  $stmt1 = $pdo->prepare($query1);

  $stmt1->execute();

  $res1 = $stmt1->fetchAll();    
  ?>


<div class="container-with-table">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Время</th>
                <th scope="col">Дата</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1?>
            <?php foreach ($res1 as $row): ?>
            <tr>
                <th scope="row"><?=$number?></th>
                <td><?=$row["name"]?></td>
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
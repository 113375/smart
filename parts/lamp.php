<?php  
include "dataBase.php";
  $query = "SELECT * from lamp";

  $stmt = $pdo->prepare($query);

  $stmt->execute();

  $res = $stmt->fetchAll();

  $status = $res[sizeof($res) - 1]["status"];
    
  ?>

<div class="lamp-con">
    <div class="swww">
        <label class="switch" >
            <?php if($status == 1):?>
                <input type="checkbox" id="lampSW" checked>    
            <?php else: ?>
                <input type="checkbox" id="lampSW">
            <?php endif; ?>
            <span class="slider round"></span>
        </label>
    </div>
</div>

<script src="js/lamp.js"></script>
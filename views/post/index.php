<h1>My Action Index</h1>
<p><?= $hello ?></p>
<p>
  <?php
      foreach ($names as $name)
      {
          echo $name . "<br>";
      }
  ?>
</p>
<p>
  <?=$id?>
</p>
<?php
//echo debug(yii::$app);
echo debug($names);
?>



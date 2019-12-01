<?php include 'inc/header.php' ?>

<h2 class="page-header">Draudėjo kodas: <?php echo $comment->code ?></h2>
<i>Data: <?php echo $comment->date;?></i>
<hr>
<?php  ?>
<p class="lead"><?php echo $comment->name; ?></p>

<ul class="list-group">
  <li class="list-group-item"><strong>Įmonės juridinių asmenų registro kodas: </strong> <?php echo $comment->jarCode;?></li>
  <li class="list-group-item"><strong>Įmonė registruota: </strong> <?php echo $comment->municipality;?></li>
  <li class="list-group-item"><strong>EcoActCode: </strong> <?php echo $comment->ecoActCode;?></li>
  <li class="list-group-item"><strong>EcoActName: </strong> <?php echo $comment->ecoActName;?></li>
  <li class="list-group-item"><strong>Apdraustųjų skaičius: </strong> <?php echo $comment->numInsured;?></li>
  <li class="list-group-item"><strong>Draudimo įmokų skola: </strong> <?php echo $comment->debt;?></li>
  <li class="list-group-item"><strong>Draudimo įmokų atidėta skola: </strong> <?php echo $comment->deferredDebt;?></li>
</ul>
<br>
<br>
<a href="index.php">Atgal</a>

<?php include 'inc/footer.php' ?>

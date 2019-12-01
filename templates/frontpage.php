<?php include 'inc/header.php' ?>
<main role="main">

  <div class="jumbotron">
    <div class="container">
      <form class="" action="" method="POST">
        <div class="form-group">
          <label for="csvText">Įveskite draudėjo kodą</label>
          <input type="text" class="form-control" id="csvText" name="code" required placeholder="Draudėjo kodas">
          <input class="btn btn-info mt-2" type="submit" name="submit" value="ieškoti"/>
          <input class="btn btn-info mt-2" type="submit" name="json" value="Konvertuoti informaciją į Csv failą"/>
        </div>
      </form>
    </div>
  </div>

  <div class="container">
    <?php if(isset($_POST['submit'])): ?>
      <?php foreach($comments as $comment): ?>
        <div class="row">
          <div class="col-md-10">
            <h2>Draudėjo kodas: <?php echo $comment->code; ?></h2>
            <i><?php echo $comment->date; ?></i>
            <p><?php echo $comment->name; ?></p>
          </div>
          <div class="col-md-2">
          <a class="btn btn-outline-dark" href="single.php?id=<?php echo $comment->id; ?>">Peržiūrėti</a>
        </div>
        </div>
        <hr>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>



<?php include 'inc/footer.php' ?>

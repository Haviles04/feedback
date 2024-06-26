<?php include 'inc/header.php'; ?>

<?php

?>


<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt-3"> There is no feedback</p>
<?php endif; ?>


<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">
        - <?php echo $item['name'] ?>
      </div>
    </div>
  </div>
<?php endforeach ?>

<?php include 'inc/footer.php';

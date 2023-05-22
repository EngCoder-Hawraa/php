<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <div class="container">
      <h1 class="display-3"><?php echo $data['title']; ?></h1>
      <p class="lead"><?php echo $data['description']; ?></p>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

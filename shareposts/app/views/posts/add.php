<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
    <div class="card card-body bg-light mt-3 pt-4 pb-4">
    <h2>Add Post</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">
      <div class="form-group mt-3">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg mt-2 <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group mt-3">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg mt-2 <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success mt-3" value="Submit">
    </form
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
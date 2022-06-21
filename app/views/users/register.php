<!-- Includes Header -->
<?php require APPROOT . '/views/inc/header.php' ?>

<!-- Content -->
<div class="row">
  <div class="col-6 mx-auto">
    <div class="card bg-light px-5 py-4 mt-3">
      <h3 class="m-auto">Register</h3>
      <hr class="mb-3">
      <form action="<?php echo URLROOT ?>/users/register" class="flex" method='post'>
        <div class="form-group mb-3">
          <label for="name">Name:</label>
          <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" name="name">
          <span class="invalid-feedback">
            <?php echo $data['name_err']; ?>
          </span>
        </div>
        <div class="form-group mb-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="email">
          <span class="invalid-feedback">
            <?php echo $data['email_err']; ?>
          </span>
        </div>
        <div class="form-group mb-3">
          <label for="password">Password:</label>
          <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password">
          <span class="invalid-feedback">
            <?php echo $data['password_err']; ?>
          </span>
        </div>
        <div class="form-group mb-3">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" name="confirm_password">
          <span class="invalid-feedback">
            <?php echo $data['confirm_password_err']; ?>
          </span>
        </div>
        <div class="row flex justify-between gap-5 mx-0">
          <input type="submit" class="col btn btn-primary" value='Submit'>
          <a class="col btn btn-link">Have an account? Login</a>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Includes Footer -->
<?php require APPROOT . '/views/inc/footer.php' ?>
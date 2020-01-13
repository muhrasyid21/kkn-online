<div class="container">
  <div class="mx-auto w-50">
    <div class="card my-5">
      <div class="card-header">Form Login</div>
      <div class="card-body">
        <form action="<?= base_url('admin/login'); ?>" method="post">
          <?php if (isset($_SESSION['wrong'])) : ?>
            <div class="alert alert-danger">
              <?php echo $_SESSION['wrong']; ?>
            </div>
          <?php endif; ?>
          <?php if (isset($_SESSION['not_exist'])) : ?>
            <div class="alert alert-danger">
              <?php echo $_SESSION['not_exist']; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="alert alert-danger">
            <p>Akun default: </p>
            <p class="mb-0">Username : <strong>admin</strong></p>
            <p>Password : <strong>admin123</strong></p>
          </div>
          <button type="submit" class="btn btn-primary float-right">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wishing Tree Management</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/admin_login.css'); ?>" rel="stylesheet">
  </head>

  <body class="text-center">
      <?php
          $arrFormOptions = array('class' => 'form-login');
          echo form_open('', $arrFormOptions);
      ?>
      <h1>Wishing Tree Admin System</h1>
      <?php
        if (isset($error)) {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
      </div>
      <input type="hidden" name="previousURL" value="<?php echo($previousURL); ?>">

      <?php
          unset($error);
        }
      ?>
      <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
    </form>
  </body>
</html>

      <?php
        if (isset($success)) {
      ?>
      <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
      </div>
      <?php
          unset($success);
        }
      ?>

      <div class="base-template">
        <h1>Users</h1>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col" class="d-none d-lg-table-cell">Date Created</th>
                <th scope="col" class="d-none d-lg-table-cell">Date Modified</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($objUsers as $key => $objUser) : ?>
              <tr>
                  <td><?php echo ($key+1); ?></td>
                  <td><?php echo $objUser->UsFirstName; ?></td>
                  <td><?php echo $objUser->UsLastName; ?></td>
                  <td><?php echo $objUser->UsEmailAddress; ?></td>
                  <td><?php echoUserLevel($objUser->UsAccess); ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo $objUser->UsDateCreated; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo $objUser->UsDateModified; ?></td>
                  <td>
                    <a href="<?php echo base_url('/admin/users/edit/' . $objUser->UsCollectionID); ?>" class="btn btn-block btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <a href="#" data-message="<?php echo $objUser->UsEmailAddress; ?>" data-link="<?php echo base_url('/admin/users/delete/' . $objUser->UsCollectionID); ?>" class="btn btn-block btn-danger deleteLink"><i class="fa fa-eraser" aria-hidden="true"></i> Delete</a>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <a href="<?php echo base_url('/admin/users/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New User</a>
      </div>

      <script type="text/javascript">

        $(document).on('click', '.deleteLink', function(e) {
            e.preventDefault();
            $objThis = $(this);
            txtMessage =  $objThis.data("message");
            if (confirm("Are you sure you want to delete the following?\n\n" + txtMessage)) {
              window.location.href = $objThis.data("link");
            }
        });

      </script>

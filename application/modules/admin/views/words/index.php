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
        <h1>Banned Words</h1>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Word</th>
                <th class="d-none d-lg-table-cell" scope="col">Date Created</th>
                <th class="d-none d-lg-table-cell" scope="col">Date Modified</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($objWords as $key => $objWord) : ?>
              <tr>
                  <td><?php echo ($key+1); ?></td>
                  <td><?php echo $objWord->WoText; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo $objWord->WoDateCreated; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo $objWord->WoDateModified; ?></td>
                  <td>
                    <a href="<?php echo base_url('/admin/words/edit/' . $objWord->WoCollectionID); ?>" class="btn btn-block btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <a href="#" data-message="<?php echo $objWord->WoText; ?>" data-link="<?php echo base_url('/admin/words/delete/' . $objWord->WoCollectionID); ?>" class="btn btn-block btn-danger deleteLink"><i class="fa fa-eraser" aria-hidden="true"></i> Delete</a>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <a href="<?php echo base_url('/admin/words/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Word</a>
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

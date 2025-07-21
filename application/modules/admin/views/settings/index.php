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
        <h1>Settings</h1>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Value</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Modified</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($objSettings as $key => $objSetting) : ?>
              <tr>
                  <td><?php echo ($key+1); ?></td>
                  <td><?php echo $objSetting->SeName; ?></td>
                  <td><?php echo $objSetting->SeValue; ?></td>
                  <td><?php echo $objSetting->SeDateCreated; ?></td>
                  <td><?php echo $objSetting->SeDateModified; ?></td>
                  <td>
                    <a href="<?php echo base_url('/admin/settings/edit/' . $objSetting->SeCollectionID); ?>" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <a href="<?php echo base_url('/admin/settings/delete/' . $objSetting->SeCollectionID); ?>" class="btn btn-primary"><i class="fa fa-eraser" aria-hidden="true"></i> Delete</a>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <a href="<?php echo base_url('/admin/settings/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Setting</a>
      </div>


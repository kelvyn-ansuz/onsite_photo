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
        <h1>Messages</h1>
        <a href="<?php echo base_url('/admin/attendees/download/'); ?>">Download All Messages as .CSV</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <!--<th scope="col">Email</th>-->
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Text</th>
                <!--<th scope="col">Row</th>-->
                <!--<th scope="col">Column</th>-->
                <!--<th scope="col">Alignment</th>-->
                <th width="150" scope="col">Published</th>
                <th width="150" scope="col">Pinned</th>
                <th scope="col" class="d-none d-lg-table-cell">Date Created</th>
                <th scope="col" class="d-none d-lg-table-cell">Date Modified</th>
                <th width="150" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($objAttendees as $key => $objAttendee) : ?>
              <tr>
                  <td><?php echo ($key+1); ?></td>
                  <!--<td><?php echo $objAttendee->AtEmailAddress; ?></td>-->
                  <td><?php echo $objAttendee->AtFirstName; ?></td>
                  <td><?php echo $objAttendee->AtLastName; ?></td>
                  <td><?php echo $objAttendee->AtText; ?></td>
                  <!--<td><?php echo $objAttendee->AtRow; ?></td>-->
                  <!--<td><?php echo $objAttendee->AtColumn; ?></td>-->
                  <!--<td><?php echo $objAttendee->AtAlignment; ?></td>-->
                  <td>
                    <?php
                      if($objAttendee->AtIsPublished==1) {
                    ?>
                    <a href="<?php echo base_url('/admin/attendees/unpublish/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-success"><i class="fa fa-undo" aria-hidden="true"></i> <br>Published</a>
                    <?php
                      } else {
                    ?>
                    <a href="<?php echo base_url('/admin/attendees/publish/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-info"><i class="fa fa-redo" aria-hidden="true"></i> <br>Unpublished</a>
                    <?php
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      if($objAttendee->AtIsPinned==1) {
                    ?>
                    <a href="<?php echo base_url('/admin/attendees/unpin/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-success"><i class="fa fa-undo" aria-hidden="true"></i> <br>Pinned</a>
                    <?php
                      } else {
                    ?>
                    <a href="<?php echo base_url('/admin/attendees/pin/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-info"><i class="fa fa-redo" aria-hidden="true"></i> <br>Unpinned</a>
                    <?php
                      }
                    ?>
                  </td>
                  <td class="d-none d-lg-table-cell"><?php echo $objAttendee->AtDateCreated; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo $objAttendee->AtDateModified; ?></td>
                  <td>
                    <a href="<?php echo base_url('/admin/attendees/edit/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <a href="#" data-link="<?php echo base_url('/admin/attendees/delete/' . $objAttendee->AtCollectionID); ?>" class="btn btn-block btn-danger deleteLink" data-message="<?php echo $objAttendee->AtText; ?>"><i class="fa fa-eraser" aria-hidden="true"></i> Delete</a>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <a name="end">&nbsp;</a>

        <a href="<?php echo base_url('/admin/attendees/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Message</a>
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

        var conn = new WebSocket('<?php echo $this->config->item('sockets_server'); ?>');
        conn.onopen = function(e) {
          conn.send("submitted_1");
        };



      </script>





      <div class="base-template">
        <h1><?php echo(ucfirst($mode)); ?> Messages <?php if ($name) { echo(" - " . $name); } ?></h1>

        <?php
            $arrFormOptions = array('id' => 'frmPage');
            echo form_open('', $arrFormOptions);
            echo form_hidden("ID", $objAttendee->AtCollectionID);
        ?>
            <div class="form-group">
                <label for="txtText">First Name</label>
                <input id="txtText" name="FirstName" type="text" class="form-control" placeholder="First Name" value="<?php echo($objAttendee->AtFirstName); ?>" required autofocus>
            </div>

            <div class="form-group">
                <label for="txtText">Last Name</label>
                <input id="txtText" name="LastName" type="text" class="form-control" placeholder="Last Name" value="<?php echo($objAttendee->AtLastName); ?>" required autofocus>
            </div>

            <div class="form-group">
                <label for="txtText">Text</label>
                <input id="txtText" name="Text" type="text" class="form-control" placeholder="Text" value="<?php echo($objAttendee->AtText); ?>" required autofocus>
            </div>

            <div class="form-group">
                <label for="txtPublished">Published</label>

                <select class="form-control" id="txtPublished" name="IsPublished" required>
                    <option value="" hidden>Please Select an Option</option>
                    <option <?php if($objAttendee->AtIsPublished==1) {echo("SELECTED ");} ?>value="1">Published</option>
                    <option <?php if($objAttendee->AtIsPublished==0) {echo("SELECTED ");} ?>value="0">Not Published</option>
                </select>
            </div>


            <div class="form-group">
                <label for="txtPinned">Pinned</label>

                <select class="form-control" id="txtPinned" name="IsPinned" required>
                    <option value="" hidden>Please Select an Option</option>
                    <option <?php if($objAttendee->AtIsPinned==1) {echo("SELECTED ");} ?>value="1">Pinned</option>
                    <option <?php if($objAttendee->AtIsPinned==0) {echo("SELECTED ");} ?>value="0">Not Pinned</option>
                </select>
            </div>


            <input id="btnSave" type="submit" name="btnSave" class="btn btn-primary" value="Save">

        </form>

      </div>

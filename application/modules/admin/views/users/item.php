

      <div class="base-template">
        <h1><?php echo(ucfirst($mode)); ?> User <?php if ($name) { echo(" - " . $name); } ?></h1>

        <?php
            $arrFormOptions = array('id' => 'frmPage');
            echo form_open('', $arrFormOptions);
            echo form_hidden("ID", $objUser->UsCollectionID);
        ?>
            <div class="form-group">
                <label for="txtFirstName">First Name</label>
                <input id="txtFirstName" name="FirstName" type="text" class="form-control" placeholder="First Name" value="<?php echo($objUser->UsFirstName); ?>" required autofocus>
            </div>
            <div class="form-group">
                <label for="txtLastName">Last Name</label>
                <input id="txtLastName" name="LastName" type="text" class="form-control" placeholder="Last Name" value="<?php echo($objUser->UsLastName); ?>" required>
            </div>
            <div class="form-group">
                <label for="txtEmailAddress">Email Address</label>
                <input id="txtEmailAddress" name="EmailAddress" type="email" class="form-control" placeholder="Email" value="<?php echo($objUser->UsEmailAddress); ?>" required>
            </div>
            <div class="form-group">
            <label for="txtPassword">Password</label>
                <input id="txtPassword" name="Password" type="password" class="form-control" placeholder="Password" <?php if($mode=="add") {echo(" required");} ?>>
            </div>
            <div class="form-group">
                <label for="txtAccess">Access</label>

                <select class="form-control" id="txtAccess" name="Access" required>
                    <option value="" hidden>Please Select an Access Level</option>
                    <option <?php if($objUser->UsAccess==1) {echo("SELECTED ");} ?>value="1">Admin</option>
                    <option <?php if($objUser->UsAccess==2) {echo("SELECTED ");} ?>value="2">Moderator</option>
                </select>
            </div>


            <input id="btnSave" type="submit" name="btnSave" class="btn btn-primary" value="Save">

        </form>

      </div>

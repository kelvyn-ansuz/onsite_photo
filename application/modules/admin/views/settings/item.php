

      <div class="base-template">
        <h1><?php echo(ucfirst($mode)); ?> Setting <?php if ($name) { echo(" - " . $name); } ?></h1>

        <?php
            $arrFormOptions = array('id' => 'frmPage');
            echo form_open('', $arrFormOptions);
            echo form_hidden("ID", $objSetting->SeCollectionID);
        ?>
            <div class="form-group">
                <label for="txtName">Text</label>
                <input id="txtName" name="Name" type="text" class="form-control" placeholder="Name" value="<?php echo($objSetting->SeName); ?>" required autofocus>
            </div>
            <div class="form-group">
                <label for="txtValue">Text</label>
                <input id="txtValue" name="Value" type="text" class="form-control" placeholder="Value" value="<?php echo($objSetting->SeValue); ?>" required autofocus>
            </div>
            <input id="btnSave" type="submit" name="btnSave" class="btn btn-primary" value="Save">

        </form>

      </div>

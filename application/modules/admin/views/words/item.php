

      <div class="base-template">
        <h1><?php echo(ucfirst($mode)); ?> Banned Words <?php if ($name) { echo(" - " . $name); } ?></h1>

        <?php
            $arrFormOptions = array('id' => 'frmPage');
            echo form_open('', $arrFormOptions);
            echo form_hidden("ID", $objWord->WoCollectionID);
        ?>
            <div class="form-group">
                <label for="txtText">Text</label>
                <input id="txtText" name="Text" type="text" class="form-control" placeholder="Text" value="<?php echo($objWord->WoText); ?>" required autofocus>
            </div>
            <input id="btnSave" type="submit" name="btnSave" class="btn btn-primary" value="Save">

        </form>

      </div>

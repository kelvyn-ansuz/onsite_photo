      <div class="unfoldClickableArea" id="click<?php echo($id); ?>"></div>
      <div class="birdUnfold <?php echo($bgcolor); ?>" id="bird<?php echo($id); ?>" data-postedname="<?php echo($firstname); ?> <?php echo($lastname); ?>" data-postedtext="<?php echo($text); ?>" data-bgcolor="<?php echo($bgcolor); ?>" data-flipped="<?php echo($flipped); ?>">

        <div class="closeBird birdButtons">
          <a href="javascript:void(0)" class="closeBirdBtn">
            <i class="fa fa-times circle-icon" style="width: 90px; height: 90px; line-height: 90px; font-size:60px; color: #ffffff"></i>
          </a>
        </div>

        <div class="previousBird birdButtons">
          <a href="javascript:void(0)" class="previousBirdBtn">
            <i class="fas fa-chevron-left circle-icon" style="width: 70px; height: 70px; line-height: 70px; font-size:50px; color: #ffffff"></i>
          </a>
        </div>

        <div class="nextBird birdButtons">
          <a href="javascript:void(0)" class="nextBirdBtn">
            <i class="fas fa-chevron-right circle-icon" style="width: 70px; height: 70px; line-height: 70px; font-size:50px; color: #ffffff"></i>
          </a>
        </div>

        <div class="step1 headUnfold <?php echo($bgcolor); ?>"></div>
        <div class="step1 mainUnfold <?php echo($bgcolor); ?>"></div>
        <div class="step1 unfoldCloneContainer <?php echo($bgcolor); ?>">
          <div class="step1 mainCloneUnfold <?php echo($bgcolor); ?>"></div>
        </div>
        <div class="step1 backUnfold <?php echo($bgcolor); ?>"></div>
        <div class="step1 frontFeetUnfold <?php echo($bgcolor); ?>"></div>
        <div class="step1 backFeetUnfold <?php echo($bgcolor); ?>"></div>

        <div class="step2 quarterBack <?php echo($bgcolor); ?>"></div>
        <div class="step2 quarterFoldContainer <?php echo($bgcolor); ?>">
          <div class="step2 quarterUnfold <?php echo($bgcolor); ?>"></div>
        </div>

        <div class="step3 half <?php echo($bgcolor); ?>"></div>
        <div class="otherHalfContainer <?php echo($bgcolor); ?>">
          <div class="otherHalf <?php echo($bgcolor); ?>"></div>
        </div>

        <div class="unfoldBirdText <?php echo($bgcolor); ?>">
          <div class="text-inner-container">
            <div style="width: 100%" class="postedText"><?php echo($text); ?></div>
            <div style="padding-left: 200px; padding-top:20px; text-align: right;" class="postedName"><?php echo($firstname); ?> <?php echo($lastname); ?></div>
          </div>
        </div>
      </div>
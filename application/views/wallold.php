<!DOCTYPE html>
<html>
<head>
  <script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
  <style>

    html, body {
      margin: 0;
      height: 100%;
      overflow: hidden
    }

    body {
      padding: 0px;
      margin: 0px;
    }

    .divTable{
      position: absolute;
      top: 0px;
      left: 0px;
      display: table;
      padding: 0px;
      z-index: 999;
    }
    .divTableRow {
      display: table-row;
      padding: 0px;
    }
    .divTableHeading {
      background-color: #EEE;
      display: table-header-group;
    }
    .divTableCell, .divTableHead {
      border: 0px;
      display: table-cell;
      padding: 0px;
    }
    .divTableHeading {
      background-color: #EEE;
      display: table-header-group;
      font-weight: bold;
    }
    .divTableFoot {
      background-color: #EEE;
      display: table-footer-group;
      font-weight: bold;
    }
    .divTableBody {
      display: table-row-group;
    }

    .flip-box {
      background-color: transparent;
      width: 200px;
      height: 200px;
      border: 0px;
      perspective: 1000px;
    }

    .flip-box-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      opacity: 0.3;
    }

    .flip-box-front, .flip-box-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }

    .flip-box-front {
      background-color: #AAAAAA;
      color: black;
    }

    .flip-box-back {
      background-color: #555555;
      color: white;
      transform: rotateY(180deg);
    }

    .logo{
      padding: 50px;
      margin: 0px;
      z-index: -90;
    }

    #status {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 15px;
      background-color: rgba(40, 40, 40, 0.5);
      color: white;
      text-align: center;
      z-index: 10;
    }

  </style>
  </head>
<body>
  <div>
  </div>

  <div id="status" style="display:none;">aaa</div>

  <div class="logo">
    <img src="../assets/images/logo_1536x512.svg">
  </div>

  <div class="divTable">
    <div class="divTableBody">

      <?php
        //$intCols = 8;
        //$intRows = 8;

        for($x=1;$x<=$intRows;$x++){
      ?>

      <div class="divTableRow">

        <?php
          for($y=1;$y<=$intCols;$y++){

            if($y%2==0){
              $direction = "right";
            } else {
              $direction = "left";
            }
        ?>

        <div class="divTableCell">
          <div class="flip-box">
            <div class="flip-box-inner" id="cell_<?php echo($x); ?>_<?php echo($y); ?>">
              <div class="flip-box-front">
                <img src="../assets/images/<?php echo($direction); ?>.jpg" style="width:100%; height: 100%;" id="image_<?php echo($x); ?>_<?php echo($y); ?>">
              </div>
              <div class="flip-box-back">
                </div>
              </div>
          </div>
        </div>

        <?php
          }
        ?>

      </div>


      <?php
        }
      ?>

    </div>
  </div>

  <script type="text/javascript">

    var growTimer = null;

    function flipTile(intX, intY){
      let strElement = "#cell_" + intX + "_" + intY;

      strTransform = $(strElement).css("transform");
      if(strTransform == null || strTransform.length==0 || strTransform=="none"){
        $(strElement).css("transform","rotateY(180deg)");


        setTimeout(function(){
          $(strElement).css("transform","");
        },500);
      }
    }

    function getRndInteger(min, max) {
      return Math.floor(Math.random() * (max - min) ) + min;
    }

    function growTile(intX, intY){
      //console.log("start growing" + intX + "_" + intY);
      let strElement = "#cell_" + intX + "_" + intY;
      let commonX = intX;
      let commonY = intY;

      strTransform = $(strElement).css("transform");
      if(strTransform == null || strTransform.length==0 || strTransform=="none"){

        if(intX==1 && intY==1) {
          $(strElement).css("transform-origin","top left");
        } else if (intX==1 && intY==<?php echo $intCols ?>) {
          $(strElement).css("transform-origin","top right");
        } else if (intX==1) {
          $(strElement).css("transform-origin","top");
        } else if(intX==<?php echo $intRows ?> && intY==1) {
          $(strElement).css("transform-origin","bottom left");
        } else if (intX==<?php echo $intRows ?> && intY==<?php echo $intCols ?>) {
          $(strElement).css("transform-origin","bottom right");
        } else if (intX==<?php echo $intRows ?>) {
          $(strElement).css("transform-origin","bottom");
        } else if(intY==1) {
          $(strElement).css("transform-origin","left");
        } else if (intY==<?php echo $intCols ?>) {
          $(strElement).css("transform-origin","right");
        }

        if(growTimer==null){

          //console.log("can grow");

          $(strElement).css("transform","scale(2,2)");
          $(strElement).css("opacity","1");
          $(strElement).parent().css("z-index","9999999");

          growTimer = setTimeout("console.log('animationActive')",300000);

          setTimeout(function(){
            $(strElement).css("transform-origin","");
            $(strElement).css("transform","");
            $(strElement).css("opacity","0.3");
            $(strElement).parent().css("z-index","");
            clearTimeout(growTimer);
            growTimer = null;
          },5000);


        } else {
          setTimeout(function(){
            growTile(commonX, commonY);
          },1000);
        }
      }
    }

    function randomGrow(){

      rngCol = getRndInteger(1, <?php echo $intCols ?>);
      rngRow = getRndInteger(1, <?php echo $intRows ?>);

      rngCol = 1;
      rngRow = 1;

      strSrc = $("#image_" + rngRow +  "_" + rngCol).attr("src");
      //console.log(strSrc);

      if(strSrc.includes("convert")){

        growTile(rngRow, rngCol);

        setTimeout(function(){
          randomGrow()
        },10000);

      } else {
        setTimeout(function(){
          randomGrow()
        },500);

      }

    }


    $(document).ready(function() {

      function resizeGrids(){
        //console.log($(window).width());
        //console.log($(window).height());

        intRows = <?php echo $intRows ?>;
        intCols = <?php echo $intCols ?>;

        intHeight = Math.floor($(window).height()/intRows);
        intWidth = Math.floor($(window).width()/intCols);

        $(".flip-box").css("width", intWidth);
        $(".flip-box").css("height", intHeight);
      }

      function initGrids(){
        $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
          if(data){

            intCnt = 1;

            data.forEach(function(objItem){
              //alert(objItem.toSource());

              setTimeout(function(){
                //$("#image_" + flipX + "_" + flipY).attr("src","wall/" + image);

                $("#image_" + objItem.AtRow +  "_" + objItem.AtColumn).attr("src","<?php echo(base_url("ajax/convert/")); ?>" + objItem.AtCollectionID);
                flipTile(objItem.AtRow, objItem.AtColumn);
              }, 500 * intCnt);

              intCnt++;
            });

            //randomGrow();
          }
        });
      }


      function initSocket(){
        var conn = new WebSocket('<?php echo $this->config->item('sockets_server'); ?>');
        var statusDiv = $('#status');

        function checkServer(){
          intTimeStamp = new Date().getTime()
          conn.send("ping_" + intTimeStamp);


          setTimeout(function(){
            checkServer()
          },5000);
        }

        conn.onopen = function(e) {
          statusDiv.text('Connection established');
          statusDiv.fadeIn(300).delay(1000).fadeOut(300);
          checkServer();
          conn.send("is_screen");
        };

        conn.onclose = function(e) {
          statusDiv.text('Connection dropped');
          statusDiv.fadeIn(300).delay(1000).fadeOut(300);
        };


        conn.onmessage = function(e) {
            var strMessage = e.data;

            if (strMessage.startsWith("publish")) {
              $.getJSON("<?php echo(base_url("ajax/getTile/")); ?>" + strMessage.split("_")[1], function (data) {
                console.log("pubish");
                console.log(data);
                objItem = data;
                $("#image_" + objItem.AtRow +  "_" + objItem.AtColumn).attr("src","<?php echo(base_url("ajax/convert/")); ?>" + objItem.AtCollectionID);
                flipTile(objItem.AtRow, objItem.AtColumn);

                setTimeout(function(){
                  growTile(objItem.AtRow, objItem.AtColumn);
                },2000);


              });

            } else if (strMessage.startsWith("unpublish")) {
              $.getJSON("<?php echo(base_url("ajax/getTile/")); ?>" + strMessage.split("_")[1], function (data) {
                console.log("unpublish");
                console.log(data);
                objItem = data;

                if(objItem.AtColumn%2==0){
                  strDirection = "right";
                } else {
                  strDirection = "left";
                }

                $("#image_" + objItem.AtRow +  "_" + objItem.AtColumn).attr("src","<?php echo(base_url("assets/images/")); ?>" + strDirection + ".jpg");
                flipTile(objItem.AtRow, objItem.AtColumn);
              });
            }

        };


      }


      $(window).on('resize', function(){
        resizeGrids();
      });

      resizeGrids();
      initGrids();

      //flipTile(2,2);
      //growTile(2,4);

      initSocket();
    });



  </script>

</body>
</html>
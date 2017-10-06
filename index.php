<?php

  /*
     SQLMAP - REST Client & Web Operator
       Coded by: Hood3dRob1n

     Beta: http://uppit.com/ol1jc0jdrzpf/sqlmap_web_edition.zip

  */

  @session_start();                           // Start a new Session, if not already created (tracking later?)
  @set_time_limit(0);                         // May run long at times, remove time limits on script execution time
  $sess = session_id();                       // Current Session ID, use tbd...
  $salt = "!SQL!";                            // Salt for form token hash generation
  $token = sha1(mt_rand(1, 1000000) . $salt); // Generate CSRF Token Hash
  $_SESSION['token'] = $token;                // Set CSRF Token for Form Submit Verification

  include_once("header.php");                 // Bring in our Page Header Content
  ?>


    <div class="container">

      <div class="jumbotron" id="jumbotron">
        <p style="font-size=18px; font-weight: bold;">
          欢迎使用SQLMAP Web GUI!
        </p>
        <p style="font-size=12px;">
          使用以下选项卡来配置扫描设置<br />
          然后只需点击底部的按钮完成启动新的扫描<br />
        </p>
      </div>

      <form class="form-horizontal" role="form" id="myForm" action="/sq1map_web_gui/scans.php" method="POST" target="_blank">
        <input type="hidden" name="token" value="<?php echo $token; ?>">
        <div class="settings" id="settings">
          <div class="nav_wrap" id="nav_wrap">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="active"><a href="#" onClick="tabFlipper(1);" style="font-size=14px; font-weight: bold;">基本</a></li>
              <li><a href="#" onClick="tabFlipper(3);" style="font-size=14px; font-weight: bold;">请求</a></li>
              <li><a href="#" onClick="tabFlipper(2);" style="font-size=14px; font-weight: bold;">注入 & 技术</a></li>
              <li><a href="#" onClick="tabFlipper(6);" style="font-size=14px; font-weight: bold;">检测</a></li>
              <li><a href="#" onClick="tabFlipper(4);" style="font-size=14px; font-weight: bold;">枚举</a></li>
              <li><a href="#" onClick="tabFlipper(5);" style="font-size=14px; font-weight: bold;">访问</a></li>
            </ul>
          </div>
          <br />

          <div class="settings_basics_container" id="settings_basics_container">
            <?php include("basics.php"); ?>
          </div>

          <div class="settings_request_container" id="settings_request_container">
            <?php include("request.php"); ?>
          </div>

          <div class="settings_idt_container" id="settings_idt_container">
            <?php include("idt.php"); ?>
          </div>

          <div class="settings_idt2_container" id="settings_idt2_container">
            <?php include("idt2.php"); ?>
          </div>

          <div class="settings_enum_container" id="settings_enum_container">
            <?php include("enum.php"); ?>
          </div>

          <div class="settings_access_container" id="settings_access_container">
            <?php include("access.php"); ?>
          </div>
        </div>

        <br /><br />
        <input type="submit" class="btn" name="submit" value="运行 SQLMAP Web 扫描"/>
        <br /><br />
      </form>
    </div>


  <?php
  include_once("footer.php");                  // Bring in our Page Footer Content


  /*
    End of File
  */
?>


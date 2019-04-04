<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">

        <div class="wrapper">
          <?php
            require "aside-left.php";
          ?>
          <div class="posts">
            <?php
              require "upload.php"
            ?>
          </div>
          <div class="aside-main-right">
            <?php
              require "aside-right.php"
            ?>
          </div>
        </div>
      </div>
    </main>

<?php
  require "footer.php";
?>

<?php
  require "header.php";
 ?>

<div class="contact-title">
  <h1>Say Hello</h1>
  <h2>We are always ready to help you!</h2>
</div>

        <div class="contact-from">
  <form action="cont-form.php">
    <input type="text" class="form-control" name="name" placeholder="Your name..">
    <br>
    <input type="text" class="form-control" name="E-mail" placeholder="Your E-mail..">
    <br>
    <input type="text" class="form-control" id="subject1" name="subject" placeholder="Subject">
    <br>
    <textarea name="message" class="form-control" placeholder="Write something.." rows="4" required></textarea>
    <br>
    <input type="submit" class="submit"value="Submit">

  </form>
</div>
      </nav>
    </header>
<?php
 require "footer.php";
 ?>

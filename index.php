<?php
include("includes/header.php");
?>
<div class="container-fluid topping">
  <div class="header">
    <div class="imagepad">
      <h3 class="minisection">Welcome to Mimi's Flavors</h3>
      <div class="minisection">
        <p>You can order for any assortment of our finely brewed tea at the best prices ever. <br> No one brews it better than Mimi!</p>
      </div>
    </div>
  </div>
<div class="container order">
  <div class="row">
    <div class="col-lg-12 teaform">
      <form id="contactForm" action="index.html" method="post">
        <span> <h4 id="cta">Order with your tea account</h4> </span><br>
        <input class="inputstyle" type="text" name="name" placeholder="please type your name"><br>
        <input class="inputstyle" type="password" name="pwd" placeholder="please type your password"><br>
        <input class="inputstyle btn btn-primary" type="submit" name="login" value="signin">
      </form>
    </div>
  </div>
</div>
</div>
<?php
require_once("includes/footer.php")
 ?>

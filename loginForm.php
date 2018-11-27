<?php
  include "template/headerLoginForm.php";
?>

<form action="loginTreatment.php" method="post" name="formPortfolio">
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mailLogin" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group col-md-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="passwordLogin" placeholder="Password">
  </div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </div>
</form>

<?php
  include "template/footer.php";
?>

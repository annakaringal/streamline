
<div class="modal fade" id="regform" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <!--header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <!--body-->
      <div class="modal-body control-group">
          <form role="form" method="post" action="../login/register.php" id="registerForm">
              <div class="form-group name"><input type="name" class="form-control" placeholder="user name" name="username"/></div>
              <div class="form-group email"><input type="email" class="form-control" placeholder="email address" name="email"/></div>
              <div class="form-group password"><input type="password" class="form-control" placeholder="password" name="password"/></div>
              <div class="form-group checkpassword"><input type="password" class="form-control" placeholder="re-enter password" name="validatePassword"/></div>
              <div class="form-group checkbox"><input type="checkbox" name="terms"> I agree to the <a href="#" style="text-decoration:underline !important">Terms &amp; Conditions</a>.</div>
      </div>
      <!--footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" value="Register" class="btn btn-warning">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
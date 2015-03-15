
<div class="modal fade" id="signform" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <!--header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
      </div>
      <!--body-->
      <div class="modal-body control-group">
          <form role="form" method="post" action="forms/signin.php">
              <div class="form-group email"><input type="email" class="form-control" placeholder="email address" name="email"/></div>
              <div class="form-group password"><input type="password" class="form-control" placeholder="password" name="password"/></div>

      </div>
      <!--footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" value="Sign In" class="btn btn-warning">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>
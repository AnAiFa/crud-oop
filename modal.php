<div class="modal" id="addNewUserModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body px-4">
        <form action="" method="POST" id="addNewUserForm">
          <div class="form-group">
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter fullname" required>
          </div>
          <div class="form-group">
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter gender" required>
          </div>
          <div class="form-group">
            <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" required>
          </div>
          <div class="form-group">
            <input type="submit" name="saveUserBtn" id="saveUserBtn" value="Save New User" class="btn btn-primary btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
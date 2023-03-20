<div class="modal fade" id="addNewUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="addUserForm" novalidate>
          <div class="row mb-3">
            <div class="col">
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Fullname" required>
              <div class="invalid-feedback">Fullname is required!</div>
            </div>
            <div class="col">
              <input type="number" name="age" id="age" class="form-control" placeholder="Enter Age" required>
              <div class="invalid-feedback">Age is required!</div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender" required>
              <div class="invalid-feedback">Gender is required!</div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>  
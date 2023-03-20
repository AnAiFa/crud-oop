<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.css" rel="stylesheet"/>

</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-6">
        <h4>All Users</h4>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addNewUserModal"><i class="fas fa-user-plus fa-lg"></i> Add New User</button>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive" id="allUser">
          <table class="table table-striped table-sm table-bordered">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center text-secondary">
                <td>1</td>
                <td>Evan</td>
                <td>Male</td>
                <td>23</td>
                <td>
                  <a href="#" title="View Details" class="text-info"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                  <a href="#" title="Edit User" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                  <a href="#" title="Delete User" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'modal.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
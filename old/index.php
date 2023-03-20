<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <?php include_once 'modals.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div><h1>All Users</h1></div>
        <div><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New User</button></div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Fullname</th>
                <th>Documents</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>pic</td>
                <td>evan</td>
                <td>docs</td>
                <td>
                  <a href="#" class="btn btn-info btn-sm rounded-pill py-0">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm rounded-pill py-0">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
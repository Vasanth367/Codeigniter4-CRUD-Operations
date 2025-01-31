<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome to CodeIgniter 4!</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3">Student Details</h1>
      <a class="btn btn-info" href="<?php echo base_url('student_form') ?>">Add Student</a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone NO</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $series=1;
           foreach ($student_details as $student): 
           
           ?>
            <tr>
              <td><?= $series++; ?></td>
              <td><?= $student->firstname ?></td>
              <td><?= $student->middlename ?></td>
              <td><?= $student->lastname ?></td>
              <td><?= $student->email ?></td>
              <td><?= $student->phone ?></td>
              <td><?= $student->address ?></td>
              <td><?= $student->gender ?></td>
              <td><?= $student->age ?></td>
              <td>
                <a href="<?php echo base_url('edit/' . $student->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?php echo base_url('delete/' . $student->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>

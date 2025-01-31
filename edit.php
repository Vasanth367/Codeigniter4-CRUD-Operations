<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Student</h2>
<form action="<?= base_url('update') ?>" method="post">
    <input type="hidden" name="id" value="<?= $student->id ?>">

    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?= $student->firstname ?>" required>
    </div>

    <div class="mb-3">
        <label for="middlename" class="form-label">Middle Name</label>
        <input type="text" name="middlename" class="form-control" value="<?= $student->middlename ?>">
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control" value="<?= $student->lastname ?>" required>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $student->email ?>" required>
        </div>
        <div class="col">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="tel" name="phone" class="form-control" value="<?= $student->phone ?>" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" name="address" required><?= $student->address ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Gender</label>

    <div>
        <input type="radio" name="gender" value="Male"
            <?php if ($student->gender == 'Male') { echo 'checked'; } ?>> Male

        <input type="radio" name="gender" value="Female"
            <?php if ($student->gender == 'Female') { echo 'checked'; } ?>> Female

        <input type="radio" name="gender" value="Other"
            <?php if ($student->gender == 'Other') { echo 'checked'; } ?>> Other
    </div>
        <!-- <div>
            <input type="radio" name="gender" value="Male" <?= ($student->gender == 'Male') ? 'checked' : '' ?>> Male
            <input type="radio" name="gender" value="Female" <?= ($student->gender == 'Female') ? 'checked' : '' ?>> Female
            <input type="radio" name="gender" value="Other" <?= ($student->gender == 'Other') ? 'checked' : '' ?>> Other
        </div> -->
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" value="<?= $student->age ?>" required>
    </div>

    <div class="d-flex justify-content-between">
        <a class="btn btn-secondary" href="<?php echo base_url() ?>">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>

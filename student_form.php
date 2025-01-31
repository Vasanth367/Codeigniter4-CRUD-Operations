<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg w-50 my-5">
            <h4 class="text-center mb-3">Student Information</h4>
            <form method="post" action="<?php echo base_url('create') ?>">
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                    <div class="col">
                        <label for="middleName" class="form-label">Middle Name</label>
                        <input type="text" name="middlename" class="form-control" id="middleName" placeholder="Middle Name">
                    </div>
                    <div class="col">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <label for="phone" class="form-label">Mobile Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Mobile Number">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter Address"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div>
                        <input type="radio" name="gender" id="male" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="Female" class="ms-2">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="other" value="Other" class="ms-2">
                        <label for="other">Other</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age">
                </div>

                <div class="d-flex justify-content-between">
                    <a class="btn btn-secondary" href="<?php echo base_url() ?>">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

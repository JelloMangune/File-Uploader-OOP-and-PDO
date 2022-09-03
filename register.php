<?php
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <style>
        .header{
            padding-left:450px;
            padding-top:50px;
        }
        .table{
            padding-left:450px;
            padding-right:300px;
        }
    </style>
    <title>Registration Form</title>
</head>
<body>
    <div class="header">
        <h1>Registration Form</h1>
    </div>
    <div class="table">

        
        <form method="POST" enctype="multipart/form-data" action="upload-handler.php">
            <div class="form-group row">
                <label for="complete_name" class="col-sm-2 col-form-label">Complete Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="complete_name" name="complete_name" placeholder="Complete Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" value="email@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-6">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="input_file" class="col-sm-2 col-form-label">Choose File</label>
                <div class="col-sm-6">
                <input type="file" class="form-control" id="input_file" name="input_file">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mb-2" style="margin-left:130px;">Submit Registration</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Employee Form</title>
</head>
<body>

<div class="container">
    
    <h2 class="mt-5">Employee Form
        <a href="<?= site_url('employee') ?>" class="btn btn-secondary btn-sm float-right">Back</a>
    </h2>

    <form action="<?= site_url('/employee/update/'.$employee['id']) ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <input type="hidden" name="_method" value="PUT" />
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $employee['name'] ?>" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $employee['email'] ?>" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="<?= $employee['phone'] ?>" required>
            <div class="invalid-feedback">Please enter your phone number.</div>
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" class="form-control" id="department" placeholder="Enter department" name="department" value="<?= $employee['department'] ?>" required>
            <div class="invalid-feedback">Please enter your department.</div>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
            <img src="<?= base_url('app/images/' . $employee['image']) ?>" alt="<?= esc($employee['name']) ?>" width="100">
            <div class="invalid-feedback">Please upload an image.</div>
        </div>
        <button type="submit" class="btn btn-primary">update data</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



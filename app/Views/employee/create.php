
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

    <form action="<?= site_url('/employee/store') ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
            <div class="invalid-feedback">Please enter your phone number.</div>
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" class="form-control" id="department" placeholder="Enter department" name="department" required>
            <div class="invalid-feedback">Please enter your department.</div>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
            <div class="invalid-feedback">Please upload an image.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</body>
</html>



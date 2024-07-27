
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeIgniter_crud</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?= $this->include('templates/header') ?>
        <h2 class="mb-4">Single Employee Data
        <a href="<?= site_url('employee') ?>" class="btn btn-primary btn-sm float-right">Back</a>
        </h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td><?= $employee['id'] ?></td>
                            <td><?= esc($employee['name']) ?></td>
                            <td><?= esc($employee['email']) ?></td>
                            <td><?= esc($employee['phone']) ?></td>
                            <td><?= esc($employee['department']) ?></td>
                            <td>
                                <?php if (!empty($employee['image'])): ?>
                                    <img src="<?= base_url('app/images/' . $employee['image']) ?>" alt="<?= esc($employee['name']) ?>" width="100">
                                <?php else: ?>
                                    <span>No Image</span>
                                <?php endif; ?>
                            </td>
                        </tr>
            </tbody>
        </table>
    </div>
    <?= $this->include('templates/footer') ?>
    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


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
    <?= $this->include('templates/header') ?>
    <div class="container mt-5">
    <?php if (session()->getFlashdata('success')){
        echo "<div class='alert alert-success'>".session()->getFlashdata('success')."</div>";
    }0

    ?>
        <h2 class="mb-4">Employees</h2>
        <a href="<?= site_url('employee/create') ?>" class="btn btn-primary mb-3">Create a new employee</a>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($employees) && is_array($employees)): ?>
                    <?php foreach ($employees as $employee): ?>
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
                            <td>
                                <a href="<?= site_url('employee/view/' . $employee['id']) ?>" class="btn btn-info btn-sm">View</a>
                                <a href="<?= site_url('employee/edit/' . $employee['id']) ?>" class="btn btn-warning btn-sm">Edit</a>

                                <!-- <a href="<?= site_url('employee/delete/' . $employee['id']) ?>" class="btn btn-danger btn-sm">Delete</a> -->
                                <form action="<?= site_url('employee/delete/' . $employee['id']) ?>"  method="post">
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No employees found.</td>
                    </tr>
                <?php endif; ?>
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

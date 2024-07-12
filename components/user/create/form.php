<?php
include "../../initials/header.php";
?>


<form method="POST" action="create.php">
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="address" class="col-sm-2 col-form-label">Address:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="address" required>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <button type="submit" name="create" class="btn btn-primary">Create User</button>
            <button type="reset" name="create" class="btn btn-danger">Reset</button>
        </div>
    </div>
</form>
<?php
include "../../initials/footer.php";
?>

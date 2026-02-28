<?php include('../templates/header.php'); ?>

<?php include('students.php')?>


<div class="container">

    <div class="row mt-5">
        <div class="col-md-5">
            <form action="" method="POST">
                <div class="card">
                    <div class="card-header">
                        Students
                    </div>
                    <div class="card-body">
                        <label for="idInput" class="form-label">ID</label>
                        <input id="idInput"
                            name="id"
                            type="text"
                            class="form-control mb-3"
                            placeholder="Example: 5">
                        <label for="nameInput" class="form-label">Name</label>
                        <input id="nameInput"
                            name="name"
                            type="text"
                            class="form-control mb-3"
                            placeholder="Example: Facundo">

                        <label for="nameInput" class="form-label">Last Name</label>
                        <input id="lastNameInput"
                            name="last_name"
                            type="text"
                            class="form-control mb-3"
                            placeholder="Example: Scrollini">

                        <!-- <label for="programs" class="form-label">Programs</label>
                        <select name="program" id="programs" class="form-select mb-3">
                            <option selected>Choose a program</option>
                            <option value="1">Program 1</option>
                            <option value="2">Program 2</option>
                            <option value="3">Program 3</option>
                        </select> -->
                    </div>
                    <div class="card-footer">
                        <div class="btn-group">
                            <button name="action" value="add" class="btn btn-success">Add</button>
                            <button name="action" value="edit" class="btn btn-warning">Edit</button>
                            <button name="action" value="delete" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Facundo</td>
                        <td>Scrollini</td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" value="1" name="id" />
                                <button class="btn btn-primary" >
                                    Select
                                </button> 
                            </form>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include('../templates/footer.php'); ?>
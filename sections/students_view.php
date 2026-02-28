<?php include('../templates/header.php'); ?>

<?php include('students.php') ?>


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
                            value="<?= $id ?>"
                            type="number"
                            class="form-control mb-3"
                            placeholder="Example: 5">
                        <label for="nameInput" class="form-label">Name</label>
                        <input id="nameInput"
                            name="name"
                            value="<?= $name ?>"
                            type="text"
                            class="form-control mb-3"
                            placeholder="Example: Facundo">

                        <label for="nameInput" class="form-label">Last Name</label>
                        <input id="lastNameInput"
                            name="last_name"
                            value="<?= $last_name ?>"
                            type="text"
                            class="form-control mb-3"
                            placeholder="Example: Scrollini">

                        <label class="form-label">Programs</label>
                        <!-- <select multiple name="program" id="programs" class="form-select mb-3">
                            <option selected>Choose a program</option>
                            <option value="1">Program 1</option>
                            <option value="2">Program 2</option>
                            <option value="3">Program 3</option>
                        </select> -->
                        <?php foreach($programList as $program){?>
                        <div class="form-check">
                            <input name="programs[]"
                             id="program<?= $program["id"]?>Check" 
                             type="checkbox" value="<?= $program["id"]?>" 
                             class="form-check-input">
                            <label for="program<?= $program["id"]?>Check" class="form-check-label"><?= $program["id"] ?> - <?= $program["program_name"]?></label>
                            
                        </div>
                        <?php } ?>
                       

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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student) { ?>
                        <tr>
                            <td><?= $student["id"] ?></td>
                            <td><?= $student["name"] ?> <?= $student["last_name"] ?>
                            <br/>
                            <?php foreach($student["programs"] as $program){?>
                                - <a href="#"><?php echo $program["program_name"]?></a></br>
                              <?php  }?>
                        </td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" value="<?= $student["id"] ?>" name="id" />
                                    <button name="action" value="select" class="btn btn-primary">
                                        Select
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include('../templates/footer.php'); ?>
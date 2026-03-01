<?php include('../templates/header.php'); ?>

<?php include('programs.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="">
                <div class="card">
                    <div class="card-header">Programs</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputId"
                                class="form-label">ID</label>
                            <input id="inputId"
                                name="id"
                                value="<?= $id ?>"
                                type="number"
                                class="form-control" 
                                placeholder="ID">
                        </div>
                        <div class="mb-3">
                            <label for="inputName"
                                class="form-label">Name</label>
                            <input id="inputName"
                                name="program_name"
                                type="text"
                                class="form-control"
                                value="<?= $program_name ?>"
                                placeholder="Program name">
                        </div>
                        <div class="btn-group" role="group" aria-label="Programs">
                            <button type="submit" value="add" name="action" class="btn btn-success">Add</button>
                            <button type="submit" value="edit" name="action" class="btn btn-warning">Edit</button>
                            <button type="submit" value="delete" name="action" class="btn btn-danger">Delete</button>
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($programList as $program){?>
                    <tr>
                        <td><?= $program["id"] ?></td>
                        <td><?= $program["program_name"] ?></td>
                        <td>
                            <form method="POST">
                            <input  type="hidden" name="id" value=<?= $program["id"]?>>
                            <input type="submit" value="Select" name="action" class="btn btn-primary">
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
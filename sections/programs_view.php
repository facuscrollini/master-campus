<?php include('../templates/header.php'); ?>

<?php include('programs.php'); ?>


<div class="container">
    <div class="row mt-5">

        <div class="col-md-5">
            <form method="POST" action="">
                <div class="card">
                    <div class="card-header">Programs</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputId"
                                class="form-label">ID</label>
                            <input id="inputId"
                                type="text"
                                class="form-control" p
                                laceholder="ID">
                        </div>
                        <div class="mb-3">
                            <label for="inputName"
                                class="form-label">Name</label>
                            <input id="inputName"
                                type="text"
                                class="form-control"
                                placeholder="Program name">
                        </div>
                        <div class="btn-group" role="group" aria-label="Programs">
                            <button type="submit" class="btn btn-success">Add</button>
                            <button type="submit" class="btn btn-warning">Edit</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
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
                    <tr>
                        <td>1</td>
                        <td>Sitio Web con PHP</td>
                        <td>Seleccionar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../templates/footer.php'); ?>
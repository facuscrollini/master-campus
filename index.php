<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header>

        <!-- place navbar here -->
    </header>




    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="card mt-5" style="width: 18rem;">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form method="POST" action="sections/index.php">
                                <div class="mb-3">
                                    <label for="inputUser" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="inputUser" aria-describedby="userHelp" required>
                                    <div id="userHelp" class="form-text text-muted">We'll never share your username with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" minlength="5" maxlength="15" class="form-control" id="inputPassword" aria-describedby="passwordHelp" required>
                                    <div id="passwordrHelp" class="form-text text-muted">Enter 5~15 characters.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            Card footer
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>



    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
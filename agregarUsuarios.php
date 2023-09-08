<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php include('comunes/titulo.php'); ?>
    <title>Agregar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include('comunes/navbar.php'); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include('comunes/sidebar.php');
            include('conexiones/conn.php'); ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Administrar Usuarios</h1>
                    <div class="card p-2 mb-3 bg-dark text-white">
                        Agregar Usuarios
                    </div>
                    <div class="card-body">
                        <form action="agregarUsuarios.php" method="post">
                            <div class="row">
                                <div class="col-lg mb-3">
                                    <div class="form-group">
                                        <label>Tipo de documento:</label>
                                        <select class="form-control" name="tipoDocumento" id="tipoDocumento" required>
                                            <option value="">Seleccione...</option>
                                            <?php
                                            $tiposRol = "SELECT * FROM sub_items
                                            WHERE id_items = 1 ORDER BY nom_subit ASC";
                                            $queryRol = mysqli_query($conexion, $tiposRol);
                                            while ($row = mysqli_fetch_array($queryRol)) {
                                                echo "<option value=" . $row['id'] . ">" . $row['nom_subit'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Documento:</label>
                                        <input type="text" class="form-control" name="documento" id="documento" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Nombres:</label>
                                        <input type="text" class="form-control" name="nombres" id="nombres" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Apellidos:</label>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="form-group">
                                        <label>Correo:</label>
                                        <input type="email" class="form-control" name="correo" id="correo" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Télefono:</label>
                                        <input type="text" class="form-control" name="teléfono" id="teléfono" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Contraseña:</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Rol:</label>
                                        <select class="form-control" name="rol" id="rol" required>
                                            <option value="">Seleccione</option>
                                            <?php
                                            $tiposRol = "SELECT * FROM sub_items
                                            WHERE id_items = 2 ORDER BY nom_subit ASC";
                                            $queryRol = mysqli_query($conexion, $tiposRol);
                                            while ($row = mysqli_fetch_array($queryRol)) {
                                                echo "<option value=" . $row['id'] . ">" . $row['nom_subit'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Registrar Usuarios</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Usuarios del Sistema
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo de documento</th>
                                        <th>Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Télefono</th>
                                        <th>Rol</th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
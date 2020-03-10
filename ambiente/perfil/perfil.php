<?php
    include('conn.php');
    session_start();
    //$id = $_SESSION['id'];

    $nome = $_POST['nome'];
    //$idusuario = $_POST['idusuario'];

    $sql = "SELECT * FROM cdusuario";
    $resultado = $conn->query($sql);
    if($resultado->num_rows == 1){
        while($linha = $resultado->fetch_assoc()){
            $nome = $linha['nome'];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Meu perfil | Laboratório Maricondi </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../starter.html" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../contato/contato.html" class="nav-link">Contato</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../starter.php" class="brand-link">
        <img src="../../dist/img/Logo_Bolinha_Transparente.png" alt="Laboratório Maricondi logo" class="brand-image"
          style="opacity: .8">
        <span class="brand-text font-weight-light">
          <!--<img src="dist/img/Logo_Letras.png" alt="Laboratório Maricondi logo" class="brand-image">-->
          Laboratório Maricondi
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../user-color.png" class="img-circle elevation-2" alt=" Image User">
          </div>
          <div class="info">
            <a href="perfil.php" class="d-block">Meu perfil</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="../../starter.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!--<span class="right badge badge-danger">New</span>-->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../ficha/ficha.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Ficha Cadastral
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../editaFicha/editar.php" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                <p>
                  Finalizar ficha
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../tabela/tabela.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tabela de preços
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../logout/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Sair
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Meu perfil</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Meu perfil</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dados pessoais</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                    class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                    class="fas fa-remove"></i></button>
              </div>
            </div> <!-- /.card-header -->

            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <p>Nome do usuário: <?php echo $nome;?>
                      <!--php-->
                    </p>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <p>Telefone: <?php echo $telefone;?>
                      <!--php-->
                    </p>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <p>E-mail: <?php echo $email;?>
                      <!--php-->
                    </p>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <p></p>
                    <p>Função: <?php echo $funcao; ?>
                      <!--php-->
                    </p>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="col-md-6">
                  <button type="button" class="btn btn-lg btn-outline-success mr-4">Sair</button>
                </div>
      
              </div> <!-- /.card-body -->
            </div>
          </div> <!-- /.card -->
  

        </div> <!-- /.container-fluid -->
      </div> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Desenvolvido por Natália G. Valério 2020
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
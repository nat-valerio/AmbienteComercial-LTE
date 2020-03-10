<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Ficha Cadastral | Laboratório Maricondi </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
          <a href="../../starter.php" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../contato/contato.php" class="nav-link">Contato</a>
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
            <a href="../perfil/perfil.php" class="d-block">Usuário</a>
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
              <h1 class="m-0 text-dark">Ficha Cadastral</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../starter.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Ficha Cadastral</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <form action="insert.php">
            <!-- SELECT2 DADOS PESSOAIS -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DADOS PESSOAIS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                      class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">

                    <div class="form-group">
                      <label for="vendedor">Vendedor</label>
                      <input type="text" name="vendedor" id="vendedor" class="form-control shadow-sm">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="aprovador">Aprovador</label>
                      <input type="text" name="aprovador" id="aprovador" class="form-control shadow-sm">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cdcliente">Código do cliente</label>
                      <input type="text" name="cdcliente" id="cdcliente" class="form-control shadow-sm">
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                      <label for="rsocial">Razão social</label>
                      <input type="text" name="rsocial" id="razao" class="form-control shadow-sm">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nfantasia">Nome fantasia</label>
                      <input type="text" name="nfantasia" id="nfantasia" class="form-control maiuscula shadow-sm"
                        required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="endereco">Endereço</label>
                      <input type="text" name="ende" id="endereco" class="form-control maiuscula shadow-sm" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="bairro">Bairro</label>
                      <input type="text" name="bairro" id="bairro" class="form-control maiuscula shadow-sm" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="cep">CEP</label>
                      <input class="form-control cep shadow-sm" type="text" placeholder="Digite somente os números"
                        required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="tel">Telefone</label>
                      <input type="text" name="telefone" id="telefone" class="form-control tel shadow-sm"
                        placeholder="Digite somente os números" required />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="cel">Celular</label>
                      <input type="text" class="form-control cel shadow-sm" name="cel" id="cel"
                        placeholder="Digite somente os números" required />
                    </div>
                    <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="cidade">Cidade</label>
                      <input type="text" name="cidade" id="cid-est" class="form-control maiuscula shadow-sm"
                        placeholder="Ex: São Paulo" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="estado">Estado</label>
                      <select id="estado1" class="form-control select2bs4" style="width: 100%;" name="estado">
                        <option value="select" selected="selected">Selecione o estado...</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                      </select>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="cnpj">CNPJ</label>
                      <input type="text" class="form-control cnpj shadow-sm" name="cnpj" id="cnpj-n"
                        placeholder="Digite somente os números" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="resplab">Responsável pelo laboratório</label>
                      <input type="text" name="resplab" id="resp-lab" class="form-control maiuscula shadow-sm" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="emaillab">E-mail</label>
                      <input type="email" name="emaillab" id="emaillab" class="form-control shadow-sm" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="iniciolab">Início das atividades</label>
                      <input type="text" class="form-control data shadow-sm" name="iniciolab" id="inic-ativ"
                        placeholder="Digite somente os números" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->

            <!-- SELECT2 CONTATOS -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CONTATOS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                      class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nomec">Nome completo</label>
                      <input type="text" class="form-control maiuscula shadow-sm" name="nomec" id="nome-comp1" required>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" name="emailc" id="email1" class="form-control shadow-sm" required>
                    </div>
                    <!-- /.form-group -->
                  </div>

                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="celc">Celular</label>
                      <input type="text" class="form-control cel shadow-sm" name="celc" id="celular1"
                        placeholder="Digite somente os números" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="func">Função</label>
                      <input type="text" name="rsocial" id="razao" class="form-control shadow-sm">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div> <!-- /.card-body -->
            </div><!-- /.card -->

            <!-- SELECT2 COBRANÇA -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DADOS PARA COBRANÇA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                      class="fas fa-remove"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="endcob">Endereço de cobrança</label>
                      <input type="text" class="form-control maiuscula shadow-sm" name="end-cob" id="end-cob" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="bairrocob">Bairro</label>
                      <input type="text" class="form-control maiuscula shadow-sm" name="bairro-dad" id="bairro-dad"
                        required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cepcob">CEP</label>
                      <input type="text" name="cepcob" id="cep-dad" class="form-control cep shadow-sm"
                        placeholder="Digite somente os números" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="telcob">Telefone</label>
                      <input type="text" name="telcob" id="telcob" class="form-control tel shadow-sm"
                        placeholder="Digite somente os números" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="celcob">Celular</label>
                      <input type="text" class="form-control cel shadow-sm" name="celcob" id="cel-dad"
                        placeholder="Digite somente os números" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="cidadecob">Cidade</label>
                      <input type="text" class="form-control maiuscula shadow-sm" name="cidadecob" id="cid-dad"
                        required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="estadocob">Estado</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option name="estadocob" value="select" selected="selected">Selecione o estado...</option>
                        <option name="estadocob" value="AC">AC</option>
                        <option name="estadocob" value="AL">AL</option>
                        <option name="estadocob" value="AP">AP</option>
                        <option name="estadocob" value="AM">AM</option>
                        <option name="estadocob" value="BA">BA</option>
                        <option name="estadocob" value="CE">CE</option>
                        <option name="estadocob" value="DF">DF</option>
                        <option name="estadocob" value="ES">ES</option>
                        <option name="estadocob" value="GO">GO</option>
                        <option name="estadocob" value="MA">MA</option>
                        <option name="estadocob" value="MT">MT</option>
                        <option name="estadocob" value="MS">MS</option>
                        <option name="estadocob" value="MG">MG</option>
                        <option name="estadocob" value="PA">PA</option>
                        <option name="estadocob" value="PB">PB</option>
                        <option name="estadocob" value="PR">PR</option>
                        <option name="estadocob" value="PE">PE</option>
                        <option name="estadocob" value="PI">PI</option>
                        <option name="estadocob" value="RJ">RJ</option>
                        <option name="estadocob" value="RN">RN</option>
                        <option name="estadocob" value="RS">RS</option>
                        <option name="estadocob" value="RO">RO</option>
                        <option name="estadocob" value="RR">RR</option>
                        <option name="estadocob" value="SC">SC</option>
                        <option name="estadocob" value="SP">SP</option>
                        <option name="estadocob" value="SE">SE</option>
                        <option name="estadocob" value="TO">TO</option>
                      </select>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="contatofin">Contato financeiro</label>
                      <input type="text" class="form-control cel tel shadow-sm" name="contatofin" id="cont-dad"
                        placeholder="Digite somente os números" required>
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div> <!-- /.row -->
              </div> <!-- /.card-body -->
            </div><!-- /.card -->


            <!-- SELECT2 INFORMAÇÕES DE TI E ENVIO -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">INFORMAÇÕES DE T.I. E ENVIO</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                      class="fas fa-remove"></i></button>
                </div>
              </div> <!-- /.card-header -->

              <!-- iCheck -->
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <h4 class="mb-3">Etiquetadora Zebra</h4>
                    <!-- checkbox -->
                    <div class="form-group clearfix">

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" type="radio" id="radiozebra" name="radiozebra"
                          value="sim">
                        <label class="form-check-label" class="form-check-input" for="radiozebra">Sim</label>
                      </div>

                      <div class="form-check d-block">
                        <label class="form-check-label" for="radiozebra">
                          <input class="form-check-input shadow-sm" type="radio" id="radiozebra" name="radiozebra"
                            value="nao">Não</label>
                      </div>

                    </div>
                    <!--/.form-group--->
                  </div>
                  <!--/.col--->

                  <div class="col-sm-6">
                    <h4 class="mb-3">Forma de envio</h4>
                    <!-- radio -->
                    <div class="form-group clearfix">

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" type="checkbox" id="interf" name="interf"
                          value="interf">
                        <label class="form-check-label" for="interf">Interfaceado</label>
                      </div>

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" id="etiquet" name="etiquet" type="checkbox"
                          value="etiquetado">
                        <label class="form-check-label" for="etiquet">Etiquetado</label>
                      </div>

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" id="manual" name="manual" type="checkbox"
                          value="manual">
                        <label class="form-check-label" for="manual">Manual</label>
                      </div>


                    </div>
                    <!--/.form-group--->
                  </div>
                  <!--/.col--->
                </div>
                <!--/.row--->

                <!-- Minimal red style -->
                <div class="row">
                  <div class="col-sm-6">
                    <h4 class="mb-3">Insumos fornecidos</h4>
                    <!-- checkbox -->
                    <div class="form-group clearfix">

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" name="ttransp" id="ttransp" type="checkbox"
                          value="transporte" />
                        <label class="form-check-label" for="ttransp">Tubo de transporte</label>
                      </div>

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" name="tsoro" type="checkbox" value="soro" />
                        <label class="form-check-label" value="tsoro">Tubo de soro</label>
                      </div>

                      <div class="form-check d-block">
                        <input class="form-check-input shadow-sm" name="tedta" type="checkbox" value="edta">
                        <label class="form-check-label" for="tedta">Tubo EDTA</label>
                      </div>
                    </div>
                    <!--/.form-group--->
                  </div>
                  <!--/.col--->
                </div> <!-- /.col (right) -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="slis">Sistema LIS: </label>
                      <input type="text" class="form-control shadow-sm" name="slis" id="sist-lis">
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="obst">Observações</label>
                      <input type="text" class="form-control shadow-sm" name="obst" id="obst">
                    </div> <!-- /.form-group -->
                  </div> <!-- /.col -->
                </div>
                <!--/.row--->
              </div> <!-- /.card-body -->

            </div> <!-- /.card -->


            <!-- SELECT2 USO INTERNO -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">USO INTERNO</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                      class="fas fa-remove"></i></button>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="mb-3">Horário de funcionamento do laboratório</h4>
                    <div class="form-group">
                      <label class="mr-2" id="lab1" for="dhora">Das</label>
                      <input class="form-control hr shadow-sm mr-2 col-12 col-md-3 d-inline" type="time" name="dhora"
                        id="das">

                      <label class="mr-2" for="ashora" id="lab2">ás</label>
                      <input class="form-control hr shadow-sm  col-12 col-md-3 d-inline" type="time" name="ashora"
                        id="ashora">
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                      <label for="mhora">Melhor horário para retirada</label>
                      <input class="form-control hr shadow-sm col-md-3" type="time" name="mhora" id="mhora">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="repre">Representante</label>
                      <select id=cbRepre class="form-control select2 select2bs4 cb shadow-sm" required>
                        <option name="repre" value="repre">Selecione o representante...</option>
                        <option name="repre" value="repre1">Representante 1</option>
                        <option name="repre" value="repre2">Representante 2</option>
                        <option name="repre" value="repre3">Representante 3</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="regiaoh">Região</label>
                      <select class="form-control select2-primary shadow-sm select2bs4" id="estado2" name="regiaoh"
                        style="width: 100%;">
                        <option name="regiaoh" value="select" selected="selected">Selecione o estado...</option>
                        <option name="regiaoh" value="AC">AC</option>
                        <option name="regiaoh" value="AL">AL</option>
                        <option name="regiaoh" value="AP">AP</option>
                        <option name="regiaoh" value="AM">AM</option>
                        <option name="regiaoh" value="BA">BA</option>
                        <option name="regiaoh" value="CE">CE</option>
                        <option name="regiaoh" value="DF">DF</option>
                        <option name="regiaoh" value="ES">ES</option>
                        <option name="regiaoh" value="GO">GO</option>
                        <option name="regiaoh" value="MA">MA</option>
                        <option name="regiaoh" value="MT">MT</option>
                        <option name="regiaoh" value="MS">MS</option>
                        <option name="regiaoh" value="MG">MG</option>
                        <option name="regiaoh" value="PA">PA</option>
                        <option name="regiaoh" value="PB">PB</option>
                        <option name="regiaoh" value="PR">PR</option>
                        <option name="regiaoh" value="PE">PE</option>
                        <option name="regiaoh" value="PI">PI</option>
                        <option name="regiaoh" value="RJ">RJ</option>
                        <option name="regiaoh" value="RN">RN</option>
                        <option name="regiaoh" value="RS">RS</option>
                        <option name="regiaoh" value="RO">RO</option>
                        <option name="regiaoh" value="RR">RR</option>
                        <option name="regiaoh" value="SC">SC</option>
                        <option name="regiaoh" value="SP">SP</option>
                        <option name="regiaoh" value="SE">SE</option>
                        <option name="regiaoh" value="TO">TO</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="fatura">Faturamento estimado / Mês</label>
                      <input type="text" class="form-control shadow-sm" name="fatura" id="fatura" required />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="fatura"></label>
                      <label for="centcusto">Centro de custo</label>
                      <input type="text" class="form-control shadow-sm" name="centcusto" id="centcusto" maxlength="5"
                        required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="prazo">Prazo de pagamento</label>
                      <input type="text" class="form-control data shadow-sm" name="prazo"
                        placeholder="Digite somente os números" required>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="fatura"></label>
                      <label for="comentario">Comentários do representante</label>
                      <input type="text" class="form-control shadow-sm" id="com-rep" name="comentario" />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="btn_add">Adicionar arquivo (Consulta SPC Serasa)</label>
                      <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                      <input type="file" class="form-control-file border" name="serasa" />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="btn_add">Adicionar arquivo (Contrato Social )</label>
                      <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                      <input type="file" class="form-control-file border" name="contrato" />
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->


              </div>
              <!-- /.card-body -->

            </div><!-- /.card -->

            <div>
              <button name="btn_salva" class="btn btn-lg btn-outline-success mr-4" type="submit">SALVAR</button>
            </div>
          </form>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../../plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>
</body>

</html>
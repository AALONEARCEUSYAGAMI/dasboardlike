<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Darken | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/simplebar/css/simplebar.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/semi-dark.css" rel="stylesheet">
  <link href="sass/bordered-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

</head>

<body>

 <!--start header-->

<!--end top header-->

<?php include 'head.php'; ?>
<!--start sidebar-->
<?php include 'nav.php'; ?>
<!--end sidebar-->

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <div class="table-tab d-md-flex mb-4">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="All-tab" data-bs-toggle="tab" data-bs-target="" type="button" role="tab" aria-selected="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todo</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link " id="Pending-tab" data-bs-toggle="tab" data-bs-target="pending" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendiente</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link  position-relative" id="progress-tab" data-bs-toggle="tab" data-bs-target="inprogress" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En curso</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link " id="Completed-tab" data-bs-toggle="tab" data-bs-target="completed" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terminado</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link " id="Partial-tab" data-bs-toggle="tab" data-bs-target="partial" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parcial</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link " id="Processing-tab" data-bs-toggle="tab" data-bs-target="processing" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tratamiento</font></font></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link " id="Canceled-tab" data-bs-toggle="tab" data-bs-target="canceled" type="button" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelado</font></font></button>
			</li>
		</ul>
    <form action="/orders" method="get">
			<input type="text" class="form-control" placeholder="Buscar" id="searchInput" value="" name="search">
		</form>
		
	</div>
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Dashboard</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Index</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<button type="button" class="btn btn-outline-primary">Settings</button>
					<button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
						<a class="dropdown-item" href="javascript:;">Another action</a>
						<a class="dropdown-item" href="javascript:;">Something else here</a>
						<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
					</div>
				</div>
			</div>
		</div>
		<!--end breadcrumb-->
      
    	<!--aqui copie y pegue la info-->
    <div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IDENTIFICACIÓN</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enlace</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cargar</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar el conteo</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Servicio</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Restos</font></font></th>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></th>
							<th>&nbsp;</th>						</tr>
					</thead>
					<tbody>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645445353
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645445353')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18/09/2024 03:46:30
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.instagram.com/p/C_e9_wjOoe9/" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.instagram.com/p/C_e9_wjOoe9/</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,065</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1002</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 166</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de Instagram [Máx .: 999K] [Hora de inicio: 0-1 hora] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="0">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374999
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374999')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:17:45
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2875</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7450</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máximo 30&nbsp;000] [Hora de inicio: 0-1 hora] [Velocidad: 5&nbsp;000/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td>
																<span class="badge badge-processing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Tratamiento
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374937
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374937')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:17:27
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,03125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">135</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8247</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374855
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374855')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:17:13
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,04375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">80</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8107</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 5K] [Recarga: No] [Hora de inicio: 0 - 1 hora] [Velocidad: 5K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="0">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374737
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374737')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:16:53
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,125</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 1735</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Máx.: 350&nbsp;000] [Recarga: 30&nbsp;D] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td>
																<span class="badge badge-processing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Tratamiento
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374176
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374176')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17-09-2024 23:15:00
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,475</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1305</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">200</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645374108
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645374108')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:14:39
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,18525</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">840</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">78</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="0">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645373812
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645373812')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17-09-2024 23:13:45
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345</font></font></td>
							<td>
																<span class="badge badge-canceled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Cancelado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645372790
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645372790')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:10:07
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/silbatazomx/status/1834763825259688034?s=48&amp;t=chJAl6wkWgeVI5412N6jCQ" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/silbatazomx/status/1834763825259688034?s=48&amp;t=chJAl6wkWgeVI5412N6jCQ</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">303</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645372684
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645372684')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:09:45
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427?t=U6PTQ4QbJPYa4aaNEn_qKQ&amp;s=08" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427?t=U6PTQ4QbJPYa4aaNEn_qKQ&amp;s=08</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1305</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645372575
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645372575')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:09:25
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">840</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645372502
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645372502')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:09:10
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475?t=rgw6s3j_N6tNEc6ermR9tA&amp;s=08" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475?t=rgw6s3j_N6tNEc6ermR9tA&amp;s=08</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">637</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="0">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645372409
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645372409')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:08:54
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.00</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td>
																<span class="badge badge-canceled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Cancelado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371505
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371505')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:05:51
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">351</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371447
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371447')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:05:40
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/silbatazomx/status/1834763825259688034?s=48&amp;t=chJAl6wkWgeVI5412N6jCQ" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/silbatazomx/status/1834763825259688034?s=48&amp;t=chJAl6wkWgeVI5412N6jCQ</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,175</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">295</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">560</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371373
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371373')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:05:21
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">608</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371209
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371209')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:05:02
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0834375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">633</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">267</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371117
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371117')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:04:42
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475?t=rgw6s3j_N6tNEc6ermR9tA&amp;s=08" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475?t=rgw6s3j_N6tNEc6ermR9tA&amp;s=08</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,28125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">446</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">900</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645371020
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645371020')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:04:24
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">353</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645370736
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645370736')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:03:39
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.1735</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">233238</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645370639
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645370639')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:03:17
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.81377</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">720573</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">287900</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645370436
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645370436')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:02:38
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.68714</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">412991</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">267800</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645370310
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645370310')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:02:15
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.1735</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">786395</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645369589
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645369589')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 23:00:08
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0044</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">200</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7725</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Impresiones de Twitter + Visitas al perfil + Interacción [Recarga: No] [Máx.: 100 M] [Hora de inicio: 0-1 h] [Velocidad: 10 M/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="40.130434782609">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645365166
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645365166')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:45:22
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,48898</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1079</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4600</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2754</font></font></td>
							<td>
																<div class="progress-container">
									<span class="badge badge-inprogress">
										<div class="progress-bar" style="width: 40.1304%;"></div>
										<span class="progress-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En proceso - </font></font><span class="progress-percentage"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40%</font></font></span></span>
									</span>
								</div>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645365038
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645365038')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:45:01
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,29764</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1945</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2800</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="21.109090909091">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645364946
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645364946')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:44:38
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,58465</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9731</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5500</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4339</font></font></td>
							<td>
																<div class="progress-container">
									<span class="badge badge-inprogress">
										<div class="progress-bar" style="width: 21.1091%;"></div>
										<span class="progress-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En proceso - </font></font><span class="progress-percentage"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21%</font></font></span></span>
									</span>
								</div>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645364558
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645364558')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:43:19
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,33523</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">159222</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">478900</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645364369
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645364369')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:42:47
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,24332</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">193175</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">347600</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645364244
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645364244')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:42:14
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@larisaviral0/video/7413859225065164038" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@larisaviral0/video/7413859225065164038</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2415</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1048000</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                645364000
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('645364000')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 de septiembre de 2024 22:41:22
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,1323</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1411505</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">189000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="0">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643668283
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643668283')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:35:24
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,23125</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7974</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: 30 días] [Máximo 10&nbsp;000] [Hora de inicio: 0-1 hora] [Velocidad: 8&nbsp;000/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td>
																<span class="badge badge-processing"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Tratamiento
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643668225
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643668225')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:35:11
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">540</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 5062</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: No] [Máx.: 500] [Hora de inicio: 0-1 hora] [Velocidad: 500/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643668128
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643668128')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:34:59
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,2125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 23</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máximo 100&nbsp;000] [Hora de inicio: 0-1 hora] [Velocidad: 50&nbsp;000/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643668078
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643668078')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:34:46
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,114</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7920</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máximo 50&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 10&nbsp;000&nbsp;USD/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643667979
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643667979')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:34:20
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,1696875</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">543</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643667869
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643667869')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 04:33:58
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/SilbatazoMX/status/1834763825259688034" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/SilbatazoMX/status/1834763825259688034</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.4742</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">81</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">234000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656598
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656598')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:48:58
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,28</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">896</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656513
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656513')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:48:28
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4.22667</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50839</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">670900</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656450
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656450')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:48:10
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,043125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">345</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8860</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656368
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656368')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:47:55
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,49</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">980</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8861</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: 30D] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                                                <a href="/orders/643656368/refill" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" aria-label="Rellenar" data-bs-original-title="Refill">
                        <i class="fas fa-recycle" style="color: white;"></i>
                    </a>
                
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656147
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656147')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:46:59
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,228</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">456</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8861</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: 30D] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                                                <a href="/orders/643656147/refill" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" aria-label="Rellenar" data-bs-original-title="Refill">
                        <i class="fas fa-recycle" style="color: white;"></i>
                    </a>
                
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656108
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656108')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:46:46
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,04875</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">390</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8860</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656059
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656059')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:46:30
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3140625</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1005</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643656005
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643656005')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:46:12
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/info_zmvm/status/1834721324649844816" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/info_zmvm/status/1834721324649844816</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3.168207</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">146</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">502890</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643655478
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643655478')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:44:00
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,056875</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">455</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8860</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643655172
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643655172')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:42:46
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,209375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">670</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643655120
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643655120')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:42:27
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.24721</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">55484</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">356700</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654514
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654514')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:40:00
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,114</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">181</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7920</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máximo 50&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 10&nbsp;000&nbsp;USD/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654465
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654465')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:39:37
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,05</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">178</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8861</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Recarga: 30D] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                                                <a href="/orders/643654465/refill" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" aria-label="Rellenar" data-bs-original-title="Refill">
                        <i class="fas fa-recycle" style="color: white;"></i>
                    </a>
                
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654417
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654417')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:39:26
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,125</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 1735</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Máx.: 350&nbsp;000] [Recarga: 30&nbsp;D] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654370
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654370')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:39:15
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,04375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8107</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 5K] [Recarga: No] [Hora de inicio: 0 - 1 hora] [Velocidad: 5K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654295
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654295')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:39:03
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,03125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8247</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643654246
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643654246')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:38:50
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8860</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retuits de Twitter [Recarga: No] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643653890
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643653890')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:37:20
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,059375</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">317</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">190</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643653851
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643653851')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:37:09
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,073125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">234</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643653716
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643653716')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:36:32
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3.15441</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">286138</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500700</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651371
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651371')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:25:48
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,05</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">132</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8859</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: 30D] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                                                <a href="/orders/643651371/refill" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" aria-label="Rellenar" data-bs-original-title="Refill">
                        <i class="fas fa-recycle" style="color: white;"></i>
                    </a>
                
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651316
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651316')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:25:24
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,125</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2152</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: 30D] [Máx.: 350K] [Hora de inicio: 0 - 1 hora] [Velocidad: 50K/día] 💧♻️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651273
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651273')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:25:13
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,03125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7423</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Máx.: 400&nbsp;000] [Recarga: No] [Tiempo de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 400&nbsp;000/D] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="-115">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651198
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651198')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:25:01
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0275</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">541</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9013</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [REAL] [Recarga: 7D] [Máx.: 2,5 K] [Hora de inicio: 0-2 horas] [Velocidad: 2,5 K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">215</font></font></td>
							<td>
																<div class="progress-container">
									<span class="badge badge-inprogress">
										<div class="progress-bar"></div>
										<span class="progress-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En proceso - </font></font><span class="progress-percentage"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-115%</font></font></span></span>
									</span>
								</div>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651164
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651164')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:24:49
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0125</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8858</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: No] [Máx.: 15&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: 15&nbsp;000&nbsp;k/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643651126
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643651126')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:24:37
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3675</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">980</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7156</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: No] [Máx.: 350&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643649244
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643649244')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:16:12
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Ciudad_Plural_/status/1834746994998624475" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Ciudad_Plural_/status/1834746994998624475</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,35028</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">55600</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643648646
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643648646')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:14:08
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,22428</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">912</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35600</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643648537
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643648537')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:13:51
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.58067</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">912</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">250900</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643648047
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643648047')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:12:07
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/noticias_trece/status/1834723708788736376" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/noticias_trece/status/1834723708788736376</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,6174</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">98000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643647996
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643647996')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 03:11:58
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/noticias_trece/status/1834723708788736376" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/noticias_trece/status/1834723708788736376</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,7875</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">125000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643642819
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643642819')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:52:24
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,47</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25304</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8413</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 50 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 1 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643642744
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643642744')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:52:10
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,138</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">303</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8412</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 50 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643642660
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643642660')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:51:56
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0945</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">303</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2098</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter [Recarga: Sin caída] [Máx.: 100 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 5 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="50">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643642554
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643642554')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:51:23
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,00025</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2204</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Vistas de tweets de Twitter + Impresiones + Clics en el perfil [Recarga: No] [Máx.: 50 M] [Hora de inicio: 0 - 1 hora] [Velocidad: 10 M/día]</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2500</font></font></td>
							<td>
																<span class="badge badge-partial"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Parcial
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643641719
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643641719')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:48:36
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,170625</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">455</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8204</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 350&nbsp;000] [Recarga: No] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643641522
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643641522')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:48:04
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/noticias_trece/status/1834723708788736376" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/noticias_trece/status/1834723708788736376</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,089625</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">239</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8204</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 350&nbsp;000] [Recarga: No] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643641144
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643641144')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:46:45
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,129</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">344</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8204</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Retweets de Twitter [Máx.: 350&nbsp;000] [Recarga: No] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643641013
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643641013')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:46:13
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/Mexico_Escucha/status/1834708972613333231" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/Mexico_Escucha/status/1834708972613333231</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,421125</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1123</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7156</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: No] [Máx.: 350&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643640467
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643640467')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:44:00
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/noticias_trece/status/1834723708788736376" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/noticias_trece/status/1834723708788736376</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,33375</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">890</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7156</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: No] [Máx.: 350&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643640313
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643640313')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de septiembre de 2024 02:43:15
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://x.com/grupo_sexenio/status/1834700199366967427" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://x.com/grupo_sexenio/status/1834700199366967427</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,39375</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1050</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 7156</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de Twitter [Recarga: No] [Máx.: 350&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;hora] [Velocidad: 50&nbsp;000&nbsp;USD/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643524597
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643524597')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:25:28
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,020025</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">267</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8105</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Shares [Máx.: 2M] [Hora de inicio: 0 - 1 hora] [Velocidad: 500K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643524443
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643524443')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:25:09
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,044775</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">597</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8105</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Shares [Máx.: 2M] [Hora de inicio: 0 - 1 hora] [Velocidad: 500K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643524293
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643524293')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:24:48
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0093</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">900</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">124</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8105</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Shares [Máx.: 2M] [Hora de inicio: 0 - 1 hora] [Velocidad: 500K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643524206
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643524206')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:24:32
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,075</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1440</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8105</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Shares [Máx.: 2M] [Hora de inicio: 0 - 1 hora] [Velocidad: 500K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643524145
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643524145')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:24:18
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@larisaviral0/video/7413859225065164038" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@larisaviral0/video/7413859225065164038</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,04515</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1420</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">602</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 8105</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Shares [Máx.: 2M] [Hora de inicio: 0 - 1 hora] [Velocidad: 500K/día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643523593
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643523593')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:22:38
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,4305</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">984</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 6209</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Guarda [Máx.: 2M] [Recarga: 30D] [Hora de inicio: 0 - 1 Hr] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643523505
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643523505')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:22:19
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,438375</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1002</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 6209</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Guarda [Máx.: 2M] [Recarga: 30D] [Hora de inicio: 0 - 1 Hr] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643523362
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643523362')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:21:59
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,3451875</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">789</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 6209</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Guarda [Máx.: 2M] [Recarga: 30D] [Hora de inicio: 0 - 1 Hr] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643523286
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643523286')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:21:42
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,889875</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2034</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 6209</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Guarda [Máx.: 2M] [Recarga: 30D] [Hora de inicio: 0 - 1 Hr] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643523167
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643523167')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:21:22
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@larisaviral0/video/7413859225065164038" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@larisaviral0/video/7413859225065164038</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,452375</font></font></td>
							<td class="short"></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1034</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 6209</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - TikTok Guarda [Máx.: 2M] [Recarga: 30D] [Hora de inicio: 0 - 1 Hr] [Velocidad: 500K/Día] 💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643522894
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643522894')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:20:33
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,1099142</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1034</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643522663
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643522663')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/09/2024 20:20:00
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,198781</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1870</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643522550
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643522550')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:19:34
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,092481</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1883</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">870</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643522382
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643522382')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:19:10
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,26575</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7119</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2500</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643522283
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643522283')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:18:53
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@larisaviral0/video/7413859225065164038" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@larisaviral0/video/7413859225065164038</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,05315</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7946</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643521911
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643521911')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:17:51
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,02415</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">414263</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34500</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643521787
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643521787')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/09/2024 20:17:30
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@mexico_escucha/video/7413872565858389253" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@mexico_escucha/video/7413872565858389253</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,32046</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">950632</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">457800</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643521660
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643521660')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:17:05
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@larisaviral0/video/7413859225065164038" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@larisaviral0/video/7413859225065164038</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,1169</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">803624</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">167000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643521170
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643521170')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:15:35
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,035</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">106546</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643520364
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643520364')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 20:13:41
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605?_r=1&amp;_t=8pg7Ryrniz7&amp;link_tag=2" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@gabrielcovagiloficial/video/7413980713403321605?_r=1&amp;_t=8pg7Ryrniz7&amp;link_tag=2</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,0735</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">105000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643519103
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643519103')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/09/2024 20:10:10
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@memo.rodriguez.fi/video/7413954019988753670?_r=1&amp;_t=8pfzJZIe7wT</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,133</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">365</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">190000</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 2260</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Visualizaciones de TikTok [Máx.: 30 M] [Hora de inicio: 0-2 Hrs] [Velocidad: 10 M/D]💧</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
											<tr data-progress="100">
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                643293752
                </font></font><!-- Copy Button with Font Awesome Icon -->
                <button onclick="copyToClipboard('643293752')" class="btn btn-primary btn-custom">
                    <i class="fa fa-copy fa-custom"></i>
                </button>
            </td>
							<td style="width: 150px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de septiembre de 2024 10:22:41
                </font></font></td>
                          
							<td>
								<a href="https://justanotherpanel.com/anon.ws?r=https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214" target="_blank">
									<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">https://www.tiktok.com/@adrixcastillo88c/video/7413922205664382214</font></font></strong>
								</a>
							</td>
							<td class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,1453121</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">513</font></font></td>
							<td class="short"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1367</font></font></td>
							<td><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID 9179</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Me gusta de TikTok [Recarga: No] [Máx.: 500&nbsp;000] [Hora de inicio: 0&nbsp;-&nbsp;1&nbsp;h] [Velocidad: hasta 50&nbsp;000&nbsp;d.] 💧⛔️</font></font></td>
							<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td>
							<td>
																<span class="badge badge-completed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									Terminado
								</font></font></span>
															</td>
							    <td>
        <div class="order-actions">
                            
                
                                    </div>
    </td>
						</tr>
										</tbody>
				</table>
			</div>
  </main>
  <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->


    <?php include 'footer.php'; ?>

  <!--start cart-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
      <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body p-0">
      <div class="order-list">
        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/01.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">White Men Shoes</h5>
            <p class="mb-0 order-price">$289</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Red Airpods</h5>
            <p class="mb-0 order-price">$149</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
            <p class="mb-0 order-price">$139</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
            <p class="mb-0 order-price">$485</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Fancy Shirts</h5>
            <p class="mb-0 order-price">$758</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Home Sofa Set </h5>
            <p class="mb-0 order-price">$546</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Black iPhone</h5>
            <p class="mb-0 order-price">$1049</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Goldan Watch</h5>
            <p class="mb-0 order-price">$689</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
      <div class="d-grid">
        <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
      </div>
    </div>
  </div>
  <!--end cart-->

  

  <!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
  </button>
  
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
      <div class="">
        <h5 class="mb-0">Theme Customizer</h5>
        <p class="mb-0">Customize your theme</p>
      </div>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
              <span class="material-icons-outlined">contactless</span>
              <span>Blue</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

  <!--bootstrap js-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <!--plugins-->
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="assets/js/main.js"></script>


</body>

</html>
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
 
  <div class="card">
		<div class="card-header">
			<div class="d-md-flex align-items-center">
				<div class="new-order-tab w-50 h-auto py-0">
					<ul class="nav nav-tabs links d-md-flex align-items-center mb-0" id="myTab" role="tablist">
					
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="HISTORY-tab" data-bs-toggle="tab" data-bs-target="#HISTORY" type="button" role="tab" aria-controls="CHECK HISTORY" aria-selected="true">CHECK HISTORY</button>
						</li>
					</ul>
				</div>
				<div class="card-select">
					<select id="method2" class="form-select">
													<option value="15882">Payeer, Paypal, Skrill, Cryptocurrency - BNB - and more (3% bonus)</option>
													<option value="128312">USDt (TRC20) - BTC - LTC - ETH - USDc [+MANY COINS] (5% Bonus)</option>
													<option value="128430">Credit / Debit Cards (No Bonus) [Min: 10$]</option>
													<option value="392">Perfect Money (5% Bonus)</option>
													<option value="41361">Paytm (No Bonus - Only Phonepe)</option>
											</select>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="tab-content">
				<div class="tab-pane fade" id="ADD" role="tabpanel" aria-labelledby="ADD-tab" tabindex="0">
					<form action="#" method="post" class="add-fund-form">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="mb-3 form-group">
									<select class="form-select" name="AddFoundsForm[type]" id="method">
																			<option value="15882">Payeer, Paypal, Skrill, Cryptocurrency - BNB - and more (3% bonus)</option>
																			<option value="128312">USDt (TRC20) - BTC - LTC - ETH - USDc [+MANY COINS] (5% Bonus)</option>
																			<option value="128430">Credit / Debit Cards (No Bonus) [Min: 10$]</option>
																			<option value="392">Perfect Money (5% Bonus)</option>
																			<option value="41361">Paytm (No Bonus - Only Phonepe)</option>
																		</select>
								</div>
								<div class="mb-3 form-group">
									<input type="number" class="form-control" name="AddFoundsForm[amount]" id="amount" placeholder="Amount">
								</div>
								
								<input type="hidden" name="_csrf" value="K59s_XgoPt2akp50enz22jR_nyqhQicqJiH4nt4Sc2YeyzmrCWp07vPKpz8NMrf3AUj5QPl1QhxPEpPRi1A2Jw==">
								<button type="submit" class="btn btn-primary w-100">Pay</button>
							</div>
							<div class="col-md-5 color-dark">
								<p id="method-detail"><p>Payeer - Paypal - Credit Card - Skrill - Cryptocurrency - Bank Transfer - and more</p><p><br></p><p><span style="font-weight: 700;">5$ Minimum Payment!</span></p><p><span style="font-weight: 700;">3% Bonus on Payeer payments!</span></p></p><h1 style="font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51); text-align: center;"></h1><style type="text/css">
p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px 'Helvetica Neue'; color: #454545}
p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px 'Helvetica Neue'; color: #454545; min-height: 14.0px}
</style><style type="text/css">
p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px 'Helvetica Neue'; color: #454545}
</style><style type="text/css">
p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px 'Helvetica Neue'; color: #454545}
</style>
																	<p></p>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane fade content-table active show" id="HISTORY" role="tabpanel" aria-labelledby="HISTORY-tab" tabindex="0">
					<div class="tab-content table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>DATE</th>
									<th>METHOD</th>
									<th>AMOUNT</th>
								</tr>
							</thead>
							<tbody>
															<tr>
                  <td class="number text-nowrap">4623800</td>
                  <td class="text-nowrap">2024-03-03 00:08:34</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$5.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">4623784</td>
                  <td class="text-nowrap">2024-03-03 00:08:30</td>
                  <td>USDt (TRC20) - BTC - LTC - ETH - USDc [+MANY COINS] (5% Bonus)</td>
                  <td class="number text-nowrap">$100.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">4488865</td>
                  <td class="text-nowrap">2024-01-22 00:51:04</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$2.50</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">4488850</td>
                  <td class="text-nowrap">2024-01-22 00:51:00</td>
                  <td>USDt (TRC20) - BTC - LTC - ETH - USDc [+MANY COINS] (5% Bonus)</td>
                  <td class="number text-nowrap">$50.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">4485990</td>
                  <td class="text-nowrap">2024-01-21 03:20:30</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$2.50</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">4485948</td>
                  <td class="text-nowrap">2024-01-21 03:20:26</td>
                  <td>USDt (TRC20) - BTC - LTC - ETH - USDc [+MANY COINS] (5% Bonus)</td>
                  <td class="number text-nowrap">$50.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">3841003</td>
                  <td class="text-nowrap">2023-07-24 20:40:13</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$0.60</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">3840949</td>
                  <td class="text-nowrap">2023-07-24 20:40:09</td>
                  <td>BTC - LTC - ETH - USDt - USDc  [ERC20 ONLY] (5% Bonus)</td>
                  <td class="number text-nowrap">$12.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">3102199</td>
                  <td class="text-nowrap">2022-12-06 00:15:47</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$0.50</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">3102165</td>
                  <td class="text-nowrap">2022-12-06 00:15:43</td>
                  <td>BTC - LTC - ETH - USDt - USDc  [ERC20 ONLY] (5% Bonus)</td>
                  <td class="number text-nowrap">$10.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">2452943</td>
                  <td class="text-nowrap">2022-04-02 06:16:02</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$2.50</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">2452938</td>
                  <td class="text-nowrap">2022-04-02 06:16:00</td>
                  <td>BTC - LTC - ETH - USDt - USDc  [ERC20 ONLY] (5% Bonus)</td>
                  <td class="number text-nowrap">$50.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">2193011</td>
                  <td class="text-nowrap">2021-12-18 19:45:32</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$0.50</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">2192997</td>
                  <td class="text-nowrap">2021-12-18 19:45:30</td>
                  <td>BTC - LTC - ETH - USDt - USDc  [ERC20 ONLY] (5% Bonus)</td>
                  <td class="number text-nowrap">$10.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">1747789</td>
                  <td class="text-nowrap">2021-06-07 04:32:32</td>
                  <td>Bonus</td>
                  <td class="number text-nowrap">$5.00</td>
                </tr>
															<tr>
                  <td class="number text-nowrap">1747785</td>
                  <td class="text-nowrap">2021-06-07 04:32:30</td>
                  <td>BTC - LTC - ETH - USDt - USDc  [ERC20 ONLY] (5% Bonus)</td>
                  <td class="number text-nowrap">$100.00</td>
                </tr>
														</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
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
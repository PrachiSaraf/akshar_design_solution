<!-- by dips -->
<section id="main">
	<!-- START Bootstrap Navbar -->
	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<!-- Breadcrumb -->
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a><span class="divider"></span>
				</li>
				<li class="active">
					Test Result
				</li>
			</ul>
			<!--/ Breadcrumb -->
		</div>
	</div>
	<!--/ END Bootstrap Navbar -->

	<!-- START Content -->
	<div class="container-fluid">
		<!-- START Row -->
		<div class="row-fluid">
			<!-- START Page/Section header -->
			<div class="span12">
				<div class="page-header line1">
					<h4>Test Result <small>Show your test result details over here.</small></h4>
				</div>
			</div>
			<!--/ END Page/Section header -->
		</div>
		<!--/ END Row -->
		<!--Page Content Here  -->
		<div id="Test_Result">
			<!-- START Row -->
			<div class="row-fluid">
				<!-- Start Tabs -->
				<div class="tabbable" style="margin-bottom: 25px;">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab"><span class="icon icone-eraser"></span>Result</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="body-inner">
								<div class="portlet-body">
									<table class="table table-striped table-bordered table-hover" id="tbl_test_result">
										<thead>
											<tr>
												<th class="hidden-480">Course</th>
												<th class="hidden-480">Date</th>
												<th class="hidden-480">Marks/Total</th>
												<th class="hidden-480">Highest</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="hidden-480">Course</th> <td class="hidden-480">11/01/2013</th> <td class="hidden-480">
												<input class="knobify" style="height:15px" data-fgcolor="#4b8df8" data-skin="tron" value="+89" data-max="100" data-min="0" />
												<label style="margin-top: 50px;">84/100</label> </th> <td class="hidden-480">95</th>
											</tr>
											<tr>
												<td class="hidden-480">Course</th> <td class="hidden-480">11/01/2013</th> <td class="hidden-480">
												<input class="knobify" data-fgcolor="#852b99" data-skin="tron" value="20" data-max="100" data-min="0" />
												<label style="margin-top: 50px;">20/100</label> </th> <td class="hidden-480">95</th>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Tabs -->
			</div>
			<!--/ END Row -->
		</div>
		<!--Page Content End  -->
	</div>
	<!--/ END Content -->
</section>
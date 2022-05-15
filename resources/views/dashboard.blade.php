<?php $page="freelancer-dashboard";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="freelancer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Bienvenu</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->name }}</a></h3>
										<p class="mb-0">{{ Auth::user()->lastname }}</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="freelancer-dashboard" class="nav-link active">
												<i class="material-icons">verified_user</i> Tableau de bord
											</a>
										</li>
										<li class="nav-item">
											<a href="manage-projects" class="nav-link">
												<i class="material-icons">business_center</i> Projets en attente de validation
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Projets validés
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Tous mes projets
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-portfolio" class="nav-link">
												<i class="material-icons">pie_chart</i> tous les projets
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-chats" class="nav-link">
												<i class="material-icons">chat</i> techno & Skils
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-profile-settings" class="nav-link">
												<i class="material-icons">settings</i>  Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="index" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-xl-9 col-md-8">
							<div class="dashboard-sec">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projets en attente de validation</div>
												<div class="dash-widget-count">{{$projectsCountByStatus['pending']}}</div>
											</div>
											<div class="dash-widget-more">
												<a href="freelancer-completed-projects" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projets validés</div>
												<div class="dash-widget-count">{{$projectsCountByStatus['accepted']}}</div>
											</div>
											<div class="dash-widget-more">
												<a href="freelancer-completed-projects" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Tous mes projets</div>
												<div class="dash-widget-count">{{$projectsCountByStatus['all']}}</div>
											</div>
											<div class="dash-widget-more">
												<a href="freelancer-review" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
								</div>

								<!-- Chart Content -->
								<div class="row">
									<div class="col-xl-8 d-flex">
										<div class="card flex-fill">
											<div class="pro-head">
												<h5 class="card-title mb-0">Projets Postés</h5>
												<div class="month-detail">
													<select class="form-control">
														<option value="0">Last 6 months</option>
														<option value="1" >Last 2 months</option>
													</select>
												</div>
											</div>
											<div class="pro-body">
												<div id="chartprofile"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 d-flex">
										<div class="flex-fill card">
											<div class="pro-head b-0">
												<h5 class="card-title mb-0">Technologie & Tags</h5>
											</div>
											<div class="pro-body">
												<div id="chartradial"></div>
												<ul class="static-list">
													<li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /Chart Content -->





							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection

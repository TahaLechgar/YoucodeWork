<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">

						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="freelancer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Bienvenu</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->name }}</a></h3>
{{--										<p class="mb-0">{{ Auth::user()->lastname }}</p>--}}
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
											<a href="pending-projects" class="nav-link">
												<i class="material-icons">business_center</i> Projets en attente de validation
											</a>
										</li>
										<li class="nav-item">
											<a href="accepted-projects" class="nav-link">
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
						<!-- /sidebar -->

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<div class="row">
									<div class="col-md-6">
										<h3>{{$title}}</h3>
									</div>
									<div class="col-md-6 text-end">
										<a href="post-project" class="btn btn-primary back-btn mb-4">Post a Project</a>
									</div>
								</div>
							</div>


							<!-- project list -->

                            @foreach($projects as $project)
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
{{--														<span>Dreamguystech</span>--}}
														<h2>{{$project->name}}</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Technologies</p>
																		<h5>{{$project->technologies}}</h5>
																	</div>
																</li>

																<li>
																	<div class="slot">
																		<p>Tags</p>
																		<h5>{{$project->tags}}</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>$500.00</h3>
															<h5>in 12 Days</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">View Details </a>
															<a href="view-project-detail" class="projects-btn" style="background-color: red !important;">Edit project </a>
{{--															<a href="#" class="hired-detail">Hired on 19 JUN 2021</a>--}}
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
                        @endforeach
							<!-- /project list -->
{{--						<!-- project list -->--}}
{{--						<div class="my-projects-list">--}}
{{--								<div class="row">--}}
{{--									<div class="col-lg-10 flex-wrap">--}}
{{--										<div class="projects-card flex-fill">--}}
{{--											<div class="card-body">--}}
{{--												<div class="projects-details align-items-center">--}}
{{--													<div class="project-info">--}}
{{--														<span>Dreamguystech</span>--}}
{{--														<h2>Website Designer Required For Directory Theme</h2>--}}
{{--														<div class="customer-info">--}}
{{--															<ul class="list-details">--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Price type</p>--}}
{{--																		<h5>Fixed</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Location</p>--}}
{{--																		<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Expiry</p>--}}
{{--																		<h5>4 Days Left</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--															</ul>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--													<div class="project-hire-info">--}}
{{--														<div class="content-divider"></div>--}}
{{--														<div class="projects-amount">--}}
{{--															<h3>$500.00</h3>--}}
{{--															<h5>in 12 Days</h5>--}}
{{--														</div>--}}
{{--														<div class="content-divider"></div>--}}
{{--														<div class="projects-action text-center">--}}
{{--															<a href="view-project-detail" class="projects-btn">View Details </a>--}}
{{--															<a href="#" class="hired-detail">Hired on 19 JUN 2021</a>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}

{{--								</div>--}}
{{--							</div>--}}
{{--							<!-- /project list -->--}}
{{--							<!-- project list -->--}}
{{--							<div class="my-projects-list">--}}
{{--								<div class="row">--}}
{{--									<div class="col-lg-10 flex-wrap">--}}
{{--										<div class="projects-card flex-fill">--}}
{{--											<div class="card-body">--}}
{{--												<div class="projects-details align-items-center">--}}
{{--													<div class="project-info">--}}
{{--														<span>Dreamguystech</span>--}}
{{--														<h2>Website Designer Required For Directory Theme</h2>--}}
{{--														<div class="customer-info">--}}
{{--															<ul class="list-details">--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Price type</p>--}}
{{--																		<h5>Fixed</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Location</p>--}}
{{--																		<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--																<li>--}}
{{--																	<div class="slot">--}}
{{--																		<p>Expiry</p>--}}
{{--																		<h5>4 Days Left</h5>--}}
{{--																	</div>--}}
{{--																</li>--}}
{{--															</ul>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--													<div class="project-hire-info">--}}
{{--														<div class="content-divider"></div>--}}
{{--														<div class="projects-amount">--}}
{{--															<h3>$500.00</h3>--}}
{{--															<h5>in 12 Days</h5>--}}
{{--														</div>--}}
{{--														<div class="content-divider"></div>--}}
{{--														<div class="projects-action text-center">--}}
{{--															<a href="view-project-detail" class="projects-btn">View Details </a>--}}
{{--															<a href="#" class="hired-detail">Hired on 19 JUN 2021</a>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--												</div>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}

{{--								</div>--}}
{{--							</div>--}}
{{--							<!-- /project list -->--}}




							<!-- /project list -->

							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li><a href="#"><i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->

						</div>
					</div>
				</div>
			</div>

			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection

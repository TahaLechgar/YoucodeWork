<?php $page="post-project";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">AJOUTER UN PROJET</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">  Post a Project</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="select-project mb-4">
							<form action="{{ route('store-project') }}" id="new-project" method="POST">
                                @method('POST')
								@csrf
								<div class="title-box widget-box">

									<!-- Project Title -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Nom du projet </h3>
											<div class="form-group mb-0">
												<input type="text" name="name" class="form-control" placeholder="Enter Project title">
											</div>
										</div>
									</div>
									<!-- /Project Title -->
									<!-- Category Content -->
									<div id="technologies" class="title-content">
										<div class="title-detail">
											<h3>Technologies utilisées</h3>
											<div class="form-group mb-0">
												<input type="text" data-role="tagsinput" name="technologies" class="input-tags form-control" value="Node.js" id="services" placeholder="PHP, React, sass, JAVA, Angular">
												<p class="text-muted mb-0">saisir les Technologies utilisées pour votre projet</p>
											</div>
										</div>
									</div>

									<!-- Add Links -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Lien du projet hébérgé </h3>
											<div class="links-info">
												<div class="row form-row links-cont">
													<div class="col-12 col-md-12">
														<div class="form-group mb-0">
															<input type="text" class="form-control" name="repoLink">
															<p class="mb-0">Ajouter le lien vers votre projet hébérgé</p>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
									<!-- /Add Links -->

                                    <!-- Add Contributors -->

                                    <div id="technologies" class="title-content">
                                        <div class="title-detail">
                                            <h3>Les contributeurs</h3>
                                            <div class="form-group mb-0">
                                                <input type="text" data-role="tagsinput" name="contributors" class="input-tags form-control" id="contributors" placeholder="test@example.com">
                                                <p class="text-muted mb-0">ajouter les emails des apprenants qui ont contribués dans ce projet</p>
                                            </div>
                                        </div>
                                    </div>

									<!-- Add lienImage1 -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Lien de l'image de couverture</h3>
											<div class="links-info">
												<div class="row form-row links-cont">
													<div class="col-12 col-md-12">
														<div class="form-group mb-0">
															<input type="text" class="form-control" name="lienImage1">
															<p class="mb-0">Ajouter le lien vers votre image de couverture</p>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
									<!-- /Add Links -->


										<!-- /Add Image -->
										<div class="title-content">
										<div class="title-detail">
											<h3>Image(s) de couverture</h3>
											<div class="custom-file">
												<input type="file" class="custom-file-input">
												<label class="custom-file-label"></label>
											</div>
											<p class="mb-0">Ajouter image(s) de couvertur</p>
										</div>
									</div>
									<!-- /Add Document -->

									<!-- Add Links -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Lien GitHub </h3>
											<div class="links-info">
												<div class="row form-row links-cont">
													<div class="col-12 col-md-12">
														<div class="form-group mb-0">
															<input type="text" class="form-control" name="repoLink">
															<p class="mb-0">Ajouter le lien GitHub de votre projet</p>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
									<!-- /Add Links -->
									<div class="title-content pb-0">
										<div class="title-detail">
											<h3>Description du projet </h3>
											<div class="form-group mb-0">
												<textarea class="form-control summernote" rows="5" name="description"></textarea>
											</div>
										</div>
									</div>
									<!-- /Project Title -->

									<!-- Skills Content -->
									<div id="tags" class="title-content">
										<div class="title-detail">
											<h3>Tags </h3>
											<div class="form-group mb-0">
												<input type="text" data-role="tagsinput" name="tags" class="input-tags form-control" name="services" value="Web Design" id="services" placeholder="UX, UI, GIT, Trello, Wireframing">
												<p class="text-muted mb-0">saisir les compètences utilisées pour votre projet</p>
											</div>
										</div>
									</div>
									<!-- /Skills Content -->

									<div class="row">
										<div class="col-md-12 text-end">
											<div class="btn-item">
												<button type="submit" class="btn next-btn">Submit</button>
											</div>
										</div>
									</div>

								</div>
								<!-- Project Title -->

							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->


<script src="/js/newProjectSubmit.js"></script>
@endsection

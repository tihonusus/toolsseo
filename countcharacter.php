			<div class="ng-scope">
				<nav class="navbar navbar-expand-lg navbar-light ng-scope bg-light">
					<a class="navbar-brand" href="/">SEO Tools</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-chevron-down text-white"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/googleserp">Goole SERP Tools</a>
									<a class="dropdown-item" href="/countcharacter">Count Character</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row ng-scope mt-20">
                <div class="col">
					<div class="input-group mb-3">
						<textarea name="detailDescription" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" rows="10" ng-model="countmodel" required=""></textarea>
					</div>
                    <button type="button" class="btn btn-primary">
                        Tổng <span class="badge badge-light">{{countmodel.length}}</span>
                    </button>
                </div>                
			</div>

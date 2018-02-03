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
			<div class="clearfix mt-10"></div>
			<div class="row ng-scope mt-20">
				<div class="col-md-5">
                    <div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon2">URL </span>
						</div>
						<input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="gURL" required="" id="gURL" aria-describedby="basic-addon2">
						<a ng-hide="gURL" class="btn btn-light pull-right form-invalid"><i class="fa fa-download"></i>Get Data</a>
						<a ng-if="gURL.indexOf('http')==-1" class="btn btn-light pull-right form-invalid"><i class="fa fa-download"></i>Get Data</a>
						<a ng-if="gURL.indexOf('http')==0" class="btn btn-light pull-right animated bounceIn" onclick="getdata()"><i class="fa fa-download"></i>Get Data</a>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Tiêu đề </span>
						</div>
						<input maxlength="70" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"  ng-model="gTitle" required="" id="gTitle" aria-describedby="basic-addon1">
                        <div class="input-group-prepend">
							<button type="button" class="btn btn-light"><span class="badge badge-primary">{{70 - gTitle.length}}</span></button>
						</div>
                    </div>
					<div class="input-group mb-3">
                        <div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon4">Mô tả </span>
						</div>
						<textarea max-lenght="300" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" rows="2" ng-model="gDesc" required="" id="gDesc" aria-describedby="basic-addon4"></textarea>
                        <div class="input-group-prepend">
							<button type="button" class="btn btn-light"><span class="badge badge-success">{{300 - gDesc.length}}</span></button>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-9">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3">Từ Khóa </span>
								</div>
								<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="gQuery" aria-describedby="basic-addon3">
							</div>
						</div>
					</div>
					<div class="gSnippet">
						<div class="gTitle">
							<span ng-hide="gTitle">Tiêu đề bài viết</span>
							<span>{{ gTitle }}</span>
							<br>
						</div>
						<div class="gURL">
							<span ng-hide="gURL">www.domain.com › Foo › Bar</span>
							<span ng-show="!gQuery">{{ gURL }}</span><span ng-hide="!gURL||!gQuery" ng-bind-html="gURL"></span><span ng-show="gURL" ng-bind-html="''|addSlash:gURL"></span>
							&nbsp;</span><span class="caret"></span>
						</div>			
						<div class="gDesc">
							<span ng-hide="gDesc">Nội dung mô tả</span>
							<span ng-show="!gQuery">{{ gDesc }}</span>
							<span ng-hide="!gDesc||!gQuery" ng-bind-html="gDesc | boldquery:gQuery"></span>
						</div>
					</div>		
				</div>
			</div>
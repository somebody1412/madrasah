<div class="sidebar-fixed position-fixed">

	<a class="logo-wrapper waves-effect">
		<img src="/img/logo/logo2.jpg" class="img-fluid" alt="">
	</a>

	<div class="list-group list-group-flush">
		<a href="/dashboard" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.home')?'active':'list-group-item-action'}}">
			<i class="fa fa-pie-chart mr-3"></i>
			Dashboard
		</a>
		<!-- <a href="/dashboard/questions" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.questions.index')?'active':'list-group-item-action'}}">
			<i class="fa fa-question-circle mr-3"></i>
			Questions
		</a> -->
		<!-- <a href="/dashboard/exam" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.setting')?'active':'list-group-item-action'}}">
			<i class="fa fa-pencil-square mr-3"></i>
			Exam Settings
		</a> -->
		<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.setting' || \Route::current()->getName() == 'dashboard.exam.notice' || \Route::current()->getName() == 'dashboard.questions.index' || \Route::current()->getName() == 'dashboard.questions.create' || \Route::current()->getName() == 'dashboard.questions.view' || \Route::current()->getName() == 'dashboard.questions.edit' || \Route::current()->getName() == 'dashboard.answer.edit' || \Route::current()->getName() == 'dashboard.exam.notice.edit')?'active':'list-group-item-action'}}">
			<i class="fa fa-files-o mr-3"></i>
			Exam Management
		</a>
		<div class="collapse list-group list-group-flush {{(\Route::current()->getName() == 'dashboard.exam.setting' || \Route::current()->getName() == 'dashboard.exam.notice' || \Route::current()->getName() == 'dashboard.questions.index' || \Route::current()->getName() == 'dashboard.questions.create' || \Route::current()->getName() == 'dashboard.questions.view' || \Route::current()->getName() == 'dashboard.questions.edit' || \Route::current()->getName() == 'dashboard.answer.edit' || \Route::current()->getName() == 'dashboard.exam.notice.edit' || \Route::current()->getName() == 'dashboard.user.index' || \Route::current()->getName() == 'dashboard.user.review')?'show':''}}" id="collapseExample">
			<a href="/dashboard/exam" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.setting')?'':'list-group-item-action'}}">
				<i class="fa fa-pencil-square mr-3"></i>
				Exam Settings
			</a>
			<a href="/dashboard/exam/noticeview" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.notice' || \Route::current()->getName() == 'dashboard.exam.notice.edit')?'':'list-group-item-action'}}">
				<i class="fa fa-exclamation-circle mr-3"></i>
				Exam Notice
			</a>
			<a href="/dashboard/questions" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.questions.index' || \Route::current()->getName() == 'dashboard.questions.create' || \Route::current()->getName() == 'dashboard.questions.view' || \Route::current()->getName() == 'dashboard.questions.edit' || \Route::current()->getName() == 'dashboard.answer.edit')?'':'list-group-item-action'}}">
				<i class="fa fa-question-circle mr-3"></i>
				Exam Questions
			</a>
			<a href="/dashboard/user" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.user.index' || \Route::current()->getName() == 'dashboard.user.review')?'':'list-group-item-action'}}">
				<i class="fa fa-list mr-3"></i>
				Exam Records
			</a>
		</div>
		<!-- <a href="/dashboard/exam/examOverview" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.notice')?'active':'list-group-item-action'}}">
			<i class="fa fa-list mr-3"></i>
			Exam Notice
		</a> -->
		<a href="/user/exam/" class="list-group-item waves-effect {{(\Route::current()->getName() == 'user.exam.index' || \Route::current()->getName() == 'user.exam.question' || \Route::current()->getName() == 'user.exam.finalize')?'active':'list-group-item-action'}}">
			<i class="fa fa-pencil-square-o mr-3"></i>
			Take Test
		</a>
		<a href="/user/logout" class="list-group-item waves-effect {{(\Route::current()->getName() == 'logout')?'active':'list-group-item-action'}}">
			<i class="fa fa-sign-out mr-3"></i>
			Logout
		</a>
	</div>

</div>

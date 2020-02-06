<div class="sidebar-fixed position-fixed">

	<a class="logo-wrapper waves-effect">
		<!-- <img src="/img/logo/tasnim.png" class="img-fluid" alt=""> -->
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
		@if($user->role_id == 3)
		<a href="/user/pelajar" class="list-group-item waves-effect ">
			<i class="fa fa-book mr-3"></i>
			Pelajar
		</a>
		@endif
		@if($user->role_id == 1 || $user->role_id == 2)
		<a href="/staff/pelajar" class="list-group-item waves-effect ">
			<i class="fa fa-book mr-3"></i>
			Pelajar
		</a>
		@endif

		@if($user->role_id == 3)
		<a href="/user/penjaga" class="list-group-item waves-effect ">
			<i class="fa fa-book mr-3"></i>
			Penjaga
		</a>
		@endif

		@if($user->role_id == 1 || $user->role_id == 2)
		<a href="/dashboard" class="list-group-item waves-effect ">
			<i class="fa fa-book mr-3"></i>
			Penjaga
		</a>
		@endif

		<a href="/logout" class="list-group-item waves-effect ">
			<i class="fa fa-sign-out mr-3"></i>
			Logout
		</a>
	</div>

</div>

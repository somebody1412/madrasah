<!-- Brand -->
<a class="navbar-brand waves-effect" href="/dashboard" target="_blank">
	<strong class="main-text">Madrasah</strong>
</a>

<!-- Collapse -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<!-- Links -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">

	<!-- Left -->
	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/dashboard" >
				Dashboard
			</a>
		</li>
		@if($user->role_id == 1 || $user->role_id == 2)
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/staff/exam" >
				Exam
			</a>
		</li>
		@endif
		@if($user->role_id == 3)
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/user/pelajar" >
				Pelajar
			</a>
		</li>
		@endif
		@if($user->role_id == 1 || $user->role_id == 2)
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/staff/pelajar" >
				Pelajar
			</a>
		</li>
		@endif
		@if($user->role_id == 3)
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/user/penjaga" >
				Penjaga
			</a>
		</li>
		@endif
		@if($user->role_id == 1 || $user->role_id == 2)
		<li class="nav-item">
			<a class="nav-link waves-effect" href="/dashboard" >
				Penjaga
			</a>
		</li>
		@endif

		<li class="nav-item">
			<a class="nav-link waves-effect" href="/logout" >
				Logout
			</a>
		</li>
		
	</ul>

	<!-- Right -->
	<!-- <ul class="navbar-nav nav-flex-icons">
		<li class="nav-item">
			<a href="#" class="nav-link border border-light rounded waves-effect" target="_blank">
				<i class="fa fa-user mr-2">{{$user->name}}</i>
			</a>
		</li>
	</ul> -->

</div>

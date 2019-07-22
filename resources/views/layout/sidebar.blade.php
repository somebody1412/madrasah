<div class="sidebar-fixed position-fixed">

	<a class="logo-wrapper waves-effect">
		<img src="/img/logo/tasnim.png" class="img-fluid" alt="">
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
		<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.income.invoice.index' || \Route::current()->getName() == 'dashboard.income.invoice.add' || \Route::current()->getName() == 'dashboard.income.revenue.index' || \Route::current()->getName() == 'dashboard.income.revenue.add' || \Route::current()->getName() == 'dashboard.income.customer.index' || \Route::current()->getName() == 'dashboard.income.customer.add')?'active':'list-group-item-action'}}">
			<i class="fa fa-bar-chart mr-3"></i>
			Income
		</a>
		<div class="collapse list-group list-group-flush {{(\Route::current()->getName() == 'dashboard.income.invoice.index' || \Route::current()->getName() == 'dashboard.income.invoice.add' || \Route::current()->getName() == 'dashboard.income.revenue.index' || \Route::current()->getName() == 'dashboard.income.revenue.add' || \Route::current()->getName() == 'dashboard.income.customer.index' || \Route::current()->getName() == 'dashboard.income.customer.add')?'show':''}}" id="collapseExample">
			<a href="/dashboard/income/invoice" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.income.invoice.index' || \Route::current()->getName() == 'dashboard.income.invoice.add')?'':'list-group-item-action'}}">
				<i class="fa fa-pencil-square mr-3"></i>
				Invoices
			</a>
			<a href="/dashboard/income/revenue" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.income.revenue.index' || \Route::current()->getName() == 'dashboard.income.revenue.add')?'':'list-group-item-action'}}">
				<i class="fa fa-line-chart mr-3"></i>
				Revenues
			</a>
			<a href="/dashboard/income/customer" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.income.customer.index' || \Route::current()->getName() == 'dashboard.income.customer.add')?'':'list-group-item-action'}}">
				<i class="fa fa-users mr-3"></i>
				Customers
			</a>
		</div>



		<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.expenses.bill.index' || \Route::current()->getName() == 'dashboard.expenses.bill.add' || \Route::current()->getName() == 'dashboard.expenses.payment.index' || \Route::current()->getName() == 'dashboard.expenses.payment.add' || \Route::current()->getName() == 'dashboard.expenses.vendor.index' || \Route::current()->getName() == 'dashboard.expenses.vendor.add')?'active':'list-group-item-action'}}">
			<i class="fa fa-files-o mr-3"></i>
			Expenses
		</a>
		<div class="collapse list-group list-group-flush {{(\Route::current()->getName() == 'dashboard.expenses.bill.index' || \Route::current()->getName() == 'dashboard.expenses.bill.add' || \Route::current()->getName() == 'dashboard.expenses.payment.index' || \Route::current()->getName() == 'dashboard.expenses.payment.add' || \Route::current()->getName() == 'dashboard.expenses.vendor.index' || \Route::current()->getName() == 'dashboard.expenses.vendor.add')?'show':''}}" id="collapseExample">
			<a href="/dashboard/expenses/bill" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.expenses.bill.index' || \Route::current()->getName() == 'dashboard.expenses.bill.add')?'':'list-group-item-action'}}">
				<i class="fa fa-pencil-square mr-3"></i>
				Bills
			</a>
			<a href="/dashboard/expenses/payment" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.expenses.payment.index' || \Route::current()->getName() == 'dashboard.expenses.payment.add')?'':'list-group-item-action'}}">
				<i class="fa fa-line-chart mr-3"></i>
				Payments
			</a>
			<a href="/dashboard/expenses/vendor" class="pl-5 list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.expenses.vendor.index' || \Route::current()->getName() == 'dashboard.expenses.vendor.add')?'':'list-group-item-action'}}">
				<i class="fa fa-users mr-3"></i>
				Vendors
			</a>
		</div>
		<!-- <a href="/dashboard/exam/examOverview" class="list-group-item waves-effect {{(\Route::current()->getName() == 'dashboard.exam.notice')?'active':'list-group-item-action'}}">
			<i class="fa fa-list mr-3"></i>
			Exam Notice
		</a> -->
		<a href="/user/logout" class="list-group-item waves-effect {{(\Route::current()->getName() == 'logout')?'active':'list-group-item-action'}}">
			<i class="fa fa-sign-out mr-3"></i>
			Logout
		</a>
	</div>

</div>

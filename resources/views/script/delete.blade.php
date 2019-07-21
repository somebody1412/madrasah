<script type="text/javascript">
//on click delete kyc button
$(document).on('click','.btn-delete',function(){
	var form = $(this).parents('form');
	swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this data!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			form.submit();
		} else {
			swal({title: "Your data is not deleted!"});
		}
	});
})
</script>

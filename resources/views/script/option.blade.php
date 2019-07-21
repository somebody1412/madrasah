<script type="text/javascript">
    $(document).ready(function(){
        //Onclick more detail button
        $(document).on('click','.btn-edit',function(){


            var id = $(this).data('id');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: '/dashboard/getoption/'+id,

                success: function (data) {
                    console.log(data);
                    $('.option-id').val(data.id);
                    $('.option-input').val(data.option);
                    $('.checked').attr('checked',((data.correct == 1) ? true : false));
                }
            });

        });
    })

</script>

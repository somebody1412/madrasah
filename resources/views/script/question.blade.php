<script type="text/javascript">
    $(document).ready(function(){
        //Onclick more detail button
        $(document).on('click','.btn-edit',function(){


            var id = $(this).data('id');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: '/dashboard/getquestion/'+id,
                success: function (data) {
                    $('.question-id').val(data.id);
                    $('.question-input').val(data.question);
                }
            });

        });
    })

</script>

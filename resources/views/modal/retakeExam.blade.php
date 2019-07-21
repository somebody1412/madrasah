<!-- Modal -->
<div class="modal fade" id="retakeExam" tabindex="-1" role="dialog" aria-labelledby="retakeExam" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Retake Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['method' => 'POST', 'route' => ['dashboard.user.retake']]) !!}
            <input type="hidden" class="option-id" name="id" value="">
            <div class="modal-body">
                <p>Are you sure want to allow this candidate to retake the exam?</p>
                <input class="" type="hidden" id="user_id" name="id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Retake', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".retake").click(function () {
            $('#user_id').val($(this).data('user_id'));
            $('#retakeExam').modal('show');
        });
    });
</script>
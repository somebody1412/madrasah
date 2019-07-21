<!-- Modal -->
<div class="modal fade" id="settingExam" tabindex="-1" role="dialog" aria-labelledby="settingExam" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Setting Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['method' => 'POST', 'route' => ['dashboard.exam.setting.update']]) !!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Total Question For Exam</label>
                    <input class="form-control" type="number" name="exam" value="{{$exam->total_question}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Pass Score (Question) Max : {{$question}}</label>
                    <input class="form-control" type="number" name="question" value="{{$exam->pass_question}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Save changes', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

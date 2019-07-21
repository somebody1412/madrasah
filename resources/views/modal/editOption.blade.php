<!-- Modal -->
<div class="modal fade" id="editOption" tabindex="-1" role="dialog" aria-labelledby="editOption" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Option</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['method' => 'POST', 'route' => ['dashboard.answer.update']]) !!}
            <input type="hidden" class="option-id" name="id" value="">
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Option</label>
                    <input class="form-control option-input" type="text" name="option">
                </div>
                <div class="form-inline">
                    <label class="control-label">Correct Answer?</label>&nbsp;&nbsp;&nbsp;
                    <input class="form-control checked" type="checkbox" name="answer" checked>
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
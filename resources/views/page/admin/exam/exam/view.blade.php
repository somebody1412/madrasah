@extends("layout.layout")
@section('head')
<style type="text/css">
ul {
    list-style-type: none;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <h1 class="mt-5">Exam Question</h1>
    <?php $counter = 1?>
    @foreach($questions as $question)
    <p>{{$counter++}}. {{$question->question}}</p>
    <ul>
        @foreach($question->question_answer as $value)
        <li><input type="radio" >&nbsp;&nbsp;{{$value->option}}</li>
        @endforeach
    </ul>
    @endforeach
</div>
<script type="text/javascript">
    $(document).ready( function () {
        $('#question').DataTable({
            "columns": [
            null,
            { "width": "20%" }
            ]
        });
    } );
</script>
@stop
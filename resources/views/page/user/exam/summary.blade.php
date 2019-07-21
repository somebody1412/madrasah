@extends("layout.layout")
@section('head')
@endsection

@section('content')

<div class="container-fluid">
    <h1 class="mt-5">Exam SUmmary</h1>
    <center>
        <div class="card" >
            <div class="card-header d-flex">
                Overview
            </div>
            <div class="card-body">
                <h3>Answered Question:</h3>
                @foreach($records as $record)
                    <a href="/user/exam/test/{{$counter}}"><p> Question {{$counter++}}. {!!(($record->answer_id)?'<span style="color: green">Answered</span>':'<span style="color: red">Not Answer Yet</span>')!!} </p></a>
                @endforeach

                <a href="/user/exam/finalize" class="btn btn-primary"> Finalize</a>
            </div>
        </div>
    </center>
</div>
@stop
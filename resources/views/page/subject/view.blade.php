@extends("layout.layout")
@section('head')
<link rel="stylesheet" type="text/css" href="/css/page/question.css">
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0">
            <span>Staff</span>
            <span>/</span>
            <span>View Exam</span>
            
        </h4>

        <form class="d-flex justify-content-center">
            {{ Form::open(array('method' =>'GET')) }}
            <!-- Default input -->
            <!-- <input type="search" name="query" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>
            </button> -->
            {!! Form::close() !!}
        </form>

    </div>

</div>
<!-- Heading -->

<!--Grid row-->
<div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

            <!--Card content-->
            <div class="card-body">

                <div class="d-sm-flex justify-content-between mb-3">

                    <h4 class="mb-2 mb-sm-0">
                        <span>Pengurusan Peperiksaan </span>
                    </h4>

                    @if($user->role_id == 1 || $user->role_id == 2)
                    <div class="d-flex justify-content-center">
                        <!-- Default input -->
                        <a href="/staff/exam/subject/add?exam={{$exam_id}}" class="btn btn-primary mr-0">Add</a>

                    </div>
                    @endif

                </div>

                <!-- Table  -->
                <table class="table table-hover">

                    <!-- Table head -->
                    <thead class="blue-grey lighten-4">
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->name}}</td>
                            <td class="text-center">
                            <form action="">
                                <!-- <a href="#" class="btn btn-table btn-edit">Edit</a> -->
                                <!-- <a href="#" class="btn btn-table btn-delete">Delete</a> -->
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!-- Table body -->

                </table>
                <!-- Table  -->

            </div>

        </div>
        <!--/.Card-->

    </div>
    <!--Grid column-->
</div>
<!--Grid row-->
@stop

@extends('hf_pages.headerfooter')
@section('content')

    <div class="container">
        <h2>{{$data->title}}</h2>
        <img src="/images/a2.png">
        <p>{!!$data->body!!}</p>
        <div class="right-align">
            <small>Post ID : <b>{{$data->id}}</b> &nbsp; &nbsp; Created Time : <b>{{$data->created_at}}</b></small>
        </div>
        <br>
        {!!Form::open(['action' => ['PostController@destroy',$data->id],'method'=>'POST'])!!}
        {{Form::submit("Delete",['class'=>'waves-effect waves-light btn red lighten-1 white-text set_btn_del right'])}}
        {{Form::hidden('_method','DELETE')}}
        {!!Form::close()!!}
{{--        <a class="waves-effect waves-light btn right red lighten-1 set_btn_del" href="/posts/">Delete</a>--}}
        <a class="waves-effect waves-light btn right green lighten-1" href="/posts/{{$data->id}}/edit">Edit</a>
    </div>
    <br>


@endsection

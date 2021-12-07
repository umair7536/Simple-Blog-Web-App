@extends('hf_pages.headerfooter')
@section('content')

    @include('messagespage.message')
    <div class="container  grey lighten-2 form_setup">
        <h2>Edit Blog</h2>
        <div class="row">
            {!! Form::open(['action' => ['PostController@update',$data->id],'method'=>'POST']) !!}
            {{Form::label('title',"Blog Title")}}
            {{Form::text('title',$data->title,['class'=>'input-field','placeholder'=>'Blog Title'])}}
            <br><br>
            {{Form::label('body',"Blog Content")}}
            {{Form::textarea('body',$data->body,['id'=>'editor','placeholder'=>'Blog Content','style'=>"height:100px"])}}
            <br>
            {{Form::submit('Update',['class'=>'btn green lighten-1 create_btn'])}}
            {{Form::hidden('_method','PUT')}}
            {!! Form::close() !!}
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

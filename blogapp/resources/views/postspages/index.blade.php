@extends('hf_pages.headerfooter')
@section('content')


@include('messagespage.message')
    <div class="row">
        <h2 style="padding: 0px 60px"  class="col s12 l 12 m12">Read Blogs</h2>
    @if (count($data)>0)
            @foreach($data as $d)

        <div style="padding: 0px 60px" class="col s12 m12 l12">

            <div class="card horizontal">
                <div class="card-image">
                    <img src="/images/a2.png">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h5>{!!$d->title!!}</h5>
                        <div class="cla1">{!!$d->body!!}</div>
                        <a href="/posts/{{$d->id}}" >Read Blog</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

        @else
            <br><br>
        <div class="container center-align"><h3 class="blue-grey-text lighten-1">No Blog Found!!!</h3></div>
            <br><br><br>
        @endif
    </div>

@endsection

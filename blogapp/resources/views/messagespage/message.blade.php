@if (count($errors))
    @foreach($errors->all() as $error)
        <div class="row">
            <div class="alert red lighten-1">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{$error}}
            </div>

        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="row">
        <div class="alert green lighten-1">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{session('success')}}
        </div>
    </div>
@endif

@if (session('error'))
    <div class="row">
        <div class="alert red lighten-1">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            {{session('error')}}
        </div>
    </div>
@endif

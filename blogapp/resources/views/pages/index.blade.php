@extends('hf_pages.headerfooter')
@section('content')
<div class="container grey lighten-2 intro">
        <div class="row center-align">
            <h1>
                Welcome to Simple Blog!
            </h1>
            <p>Join us to transform the society and show the world your creativity!!!</p>
        </div>


</div>

@endsection











<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName myapp
    DocumentRoot "/home/devopify/myapp1"
    ServerName myapp.dev
    <Directory "/home/devopify/myapp1">
    Require all granted
    </Directory>
</VirtualHost>

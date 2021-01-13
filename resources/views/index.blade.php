@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 style="text-align: center;">Welcome to Website SD N Notog</h1>
            <ul class="list-unstyled">
                <li class="media">
                    <img src="{{('img/satu.jpg')}}" class="mr-3" alt="berita Satu" style="width: 300px;">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Berita Terbaru</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
                <li class="media my-4">
                    <img src="{{('img/dua.jpg')}}" class="mr-3" alt="Berita Dua" style="width: 300px;">
                    <div class=" media-body">
                        <h5 class="mt-0 mb-1">Berita Terbaru</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
                <li class="media">
                    <img src="{{('img/tiga.jpg')}}" class="mr-3" alt="Berita Tiga" style="width: 300px;">
                    <div class=" media-body">
                        <h5 class="mt-0 mb-1">Berita Terbaru</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
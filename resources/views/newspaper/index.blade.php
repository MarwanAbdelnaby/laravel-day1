@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Latest News</h1>
    <p>read the exelusive sports news here.</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
               <h2>news1</h2>
                    <h2 class="card-title">Marka</h2>
                    <p class="card-text">most popular spanish sports news paper.</p>
                    <a href="https://www.marca.com/en/" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-6">
            <div class="card mb-4">
                <h2>news2</h2>
                    <h2 class="card-title">El Mundo Deportivo</h2>
                    <p class="card-text">barcelona news .</p>
                    <a href="https://en.kiosko.net/es/np/mundodeportivo.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('page-title', 'movie->title')

@section('main-content')
<h1>
    {{ $movie->title }}
</h1>

<div class="row">
    
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                   <ul>
                        <li>
                            Titolo: {{ $movie->original_title }}
                        </li>
                        <li>
                            Nazionalità: {{ $movie->nationality }}
                        </li>
                        <li>
                            Anno di uscita: {{ $movie->date }}
                        </li>
                        <li>
                            Voto: {{ $movie->vote }}
                        </li>
                   </ul>
                </div>
            </div>
        </div>
    
</div>

@endsection
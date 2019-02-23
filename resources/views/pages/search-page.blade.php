@extends('layouts.app')

@section('content')

    <section>
    <main class="container">
        
        @if($food_at_diseases->count())
            @foreach($food_at_diseases as $item)
                <div>
                    {{$item->title}}
                    {{$item->content}}
                </div>
            @endforeach
            @else
        <h2>Совпадений не найдено</h2>
        @endif 
        
    </main>
    </section>

@endsection
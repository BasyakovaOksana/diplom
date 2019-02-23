
@extends('layouts.app')

@section('content')

    <section>
        <content>
            {{-- <p>{{ $food_at_diseases->title }}</p>
            <p>{{ $food_at_diseases->content }}</p>
            <img src="{{ asset('img') . '/' . $food_at_diseases->image }}" alt="{{ $food_at_diseases->title }}" width="150" height="150"> --}}
        </content>
        страница 2
        {{-- {{dd( $food_at_diseases) }} --}}
        <div>
        
        @foreach($food_at_diseases as $item) 

            @if ($item) 

                {{$item->title}} <br>

            @endif
                    
        @endforeach

        </div>
    </section>

@endsection
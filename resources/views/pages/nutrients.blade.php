
@extends('layouts.app')

@section('content')

    <section>
        <content>
            <p>{{ $nutrients->title}}</p>
            <p>{{ $nutrients->content}}</p>
        </content>
    </section>

@endsection


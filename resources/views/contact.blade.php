@extends('layouts.app')

@section('header')
@endsection()
@section('content')

    <div class="container md -10">
        <span>Contact page</span>
        <span>List of contacts:</span>
    </div>
    <div>
        <list>
            @if(count($contacts))
                <ul>
                    @foreach($contacts as $contact)
                        <li>{{$contact}}</li>
                    @endforeach
                </ul>
            @endif
        </list>
    </div>

@endsection
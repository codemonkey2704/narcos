@extends('layouts.basic')

@section('page')
<h3 class="page-title"><span aria-hidden="true" class="li_user"></span> {{ __('Online players') }}</h3>
<p>
    There are {{ count($onlineCharacters) }} character(s) online right now.
</p>
@foreach ($onlineCharacters as $character)
    <a href="/profile/{{ $character }}">{{ $character }}</a> | 
@endforeach
@endsection
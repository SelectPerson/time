@extends('layouts.app')
@section('content')
    @if (session('status'))
        {{ session('status') }}
    @endif
    @include('main.bookmark')
@endsection

@section('SelectMark')
    <script src="{{ asset('js/ajax/markbook.js') }}"></script>
@endsection


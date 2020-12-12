@extends('dashboard2::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('dashboard2.name') !!}
    </p>
@endsection

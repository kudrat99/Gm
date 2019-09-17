@extends('layouts.app')

@section('content')
<a class="btn btn-primary" href="{{ route('show') }}">Show</a>
<a class="btn btn-dark" href="{{ route('create') }}">Create</a>
@endsection
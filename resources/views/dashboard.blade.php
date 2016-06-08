@extends('layouts.master')

@section('carousel')
    @include('includes.carousel')
@endsection

@section('content')

    @include('includes.actualite')

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
    </script>
@endsection
@extends('layouts.main')

@section('page_title')
    Comics
@endsection

@section('jumbo')
    <section class="jumbotron">
        <img src="{!! Vite::asset('resources/images/jumbotron.jpg') !!}" alt="DC Comics">
    </section>
@endsection

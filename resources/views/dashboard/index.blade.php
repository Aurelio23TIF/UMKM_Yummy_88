@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">Selamat datang di Dashboard, Admin</h1>
<div class="d-flex justify-content-center flex-wrap gap-3">
    <a href="{{ route('slides.create') }}" class="btn btn-custom">
        Tambah Slide
    </a>
    <a href="{{ route('menu.create') }}" class="btn btn-custom">
        Tambah Menu
    </a>
    <a href="{{ route('news.create') }}" class="btn btn-custom">
        Tambah Berita
    </a>
    <a href="{{ route('contacts.create') }}" class="btn btn-custom">
        Tambah Informasi
    </a>
</div>
@endsection

@push('styles')
<style>
    /* Style for the custom buttons */
    .btn-custom {
        background-color: red; /* Button background color */
        color: white; /* Button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        transition: transform 0.2s ease; /* Only scale on hover */
    }

    /* Hover effect without color change */
    .btn-custom:hover {
        transform: scale(1.05); /* Slight scaling effect */
    }

    /* Flexbox container styling */
    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .gap-3 {
        gap: 1rem; /* Spacing between buttons */
    }
</style>
@endpush

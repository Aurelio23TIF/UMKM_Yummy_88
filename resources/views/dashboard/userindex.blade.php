@extends('layouts.appuser')

@section('contents')
<h1 class="text-center">Selamat datang di Dashboard, User</h1>
<div class="d-flex justify-content-center flex-wrap gap-3 custom-container">
    <a href="{{ route('komentar.create') }}" class="btn btn-custom">Tambah Komentar</a>
    <!-- Tambahkan tombol lain di sini jika perlu -->
</div>
@endsection

@push('styless')
<style>
         .text-center {
        display: flex;
        justify-content: center; /* Center horizontally */
        height: 20vh;          /* Full viewport height */
        margin: 0;              /* Reset margin for the body *//
        font-size: 2rem;        /* Adjust font size */
        margin: 0;
         }
    /* Style for the custom buttons */
    .btn-custom {
        background-color: red; /* Button background color */
        color: white; /* Button text color */
        padding: 20px 10px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        text-align: center;
        width: 200px; /* Tetapkan lebar tombol agar konsisten */
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

    /* Custom container styling */
    .custom-container {
        max-width: 300px; /* Tetapkan lebar maksimum kontainer */
        margin: 0 auto; /* Pusatkan kontainer */
    }
</style>
@endpush

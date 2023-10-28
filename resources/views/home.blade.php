@extends('layouts.template')

@section('main')
<div class="container">
    <div class="justify-content-center">
        <h1>Hai, {{ Auth::user()->name }}</h1>
        <p>Role kamu adalah {{ Auth::user()->name }}, untuk dapat menggunakan halaman dashboard, minta admin untuk
            mengubah role kamu.</p>
        <p>Hubungi admin : {{ $admin->email }}</p>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<style>
    /* Container styles */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 79vh;
        background-color: #F5F5DC;
        background-size: cover;
        background-position: center;
        padding: 0 15px;
        background-image: url('images/cat.jpg'); /* Ganti link_gambar.jpg dengan URL gambar yang diinginkan */
    }

    /* Card styles */
    .card {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 700px; /* Ubah nilai max-width untuk membuat kartu lebih lebar */
    width: 100%;
}

    /* Styling for title */
    .title {
        color: #8B4513;
        font-family: 'copperplate';
        font-size: 3.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
    }

    /* Styling for subtitle */
    .subtitle {
        color: #8B4513;
        font-family: 'copperplate';
        font-size: 2rem;
        font-weight: 400;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        margin-bottom: 40px;
    }
</style>

<div>
    <div class="card">
        <h1 class="title">HELLO PET LOVERS</h1>
        <h2 class="subtitle">🐾 GIVE THEM MORE LOVE 🐾</h2>
    </div>
</div>
@endsection
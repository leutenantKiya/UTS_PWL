@extends('main.layout')

@section('title', 'Login')

@section('content')
    <form action="/login" method="post">
        @csrf
        <label for="nim">NIM</label>
        <input type="text" name="nim" maxlength="8" required><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" maxlength="30" required>
        <button type="submit">Submit</button>
    </form>
@endsection
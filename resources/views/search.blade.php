@extends('layout')

@section('title', 'Creare Programare')

@section('content')

<div class="container">
    @if(isset($details))
        <p> Tabel cautare <b> {{ $query }} </b> sunt :</p>
    <h2>Tabel cautare</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nune</th>
                <th>Prenume</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $cars)
            <tr>
                <td>{{$cars->nume}}</td>
                <td>{{$cars->prenume}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection

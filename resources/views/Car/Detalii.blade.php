@extends('layout')

@section('title', 'ASD')

@section('content')

                
                    <div align="right">
                        <br />
                        <br />
                    </div>
                    <table class="table table-bordered table-striped">
                        </thead>
                            <tr>
                                <th>Nume</th>
                                <th>Prenume</th>
                                <th>Telefon</th>
                                <th>Email</th>
                                <th>Nr Masina</th>
                                <th>Seria</th>
                                <th>Marca</th>
                                <th>Model</th>
                                <th>An</th>
                                <th>Combustibil</th>
                                <th>Km</th>
                                <th>Motor</th>
                                <th>Defect</th>
                                <th>Detalii Reparatii</th>
                                <th>Data Programare</th>
                                <th>Editare</th>
                                <th>Stergere</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($cars as $car) 
                            <tr>
                                <td> {{ $car["nume"] }}</td>
                                <td> {{ $car["prenume"] }}</td>
                                <td> {{ $car["telefon"] }}</td>
                                <td> {{ $car["email"] }}</td>
                                <td> {{ $car["nr_masina"] }}</td>
                                <td> {{ $car["seria"] }}</td>
                                <td> {{ $car["marca"] }}</td>
                                <td> {{ $car["model"] }}</td>
                                <td> {{ $car["an"] }}</td>
                                <td> {{ $car["combustibil"] }}</td>
                                <td> {{ $car["km"] }}</td>
                                <td> {{ $car["motor"] }}</td>
                                <td> {{ $car["defect"] }}</td>
                                <td> {{ $car["detalii_reparatii"] }}</td>
                                <td> {{ $car["data_programare"] }}</td>
                                
                                <td><a href="{{action('CarController@edit', $car['id'])}}" class="btn btn-primary">Editare</a></td>
                                <td><form method="post" class="delete_form" action="{{action('CarController@destroy', $car['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Stergere</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

@endsection



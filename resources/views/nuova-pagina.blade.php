@extends('layout.main')

@section('content')

<h1>Nuova Pagina</h1>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Logo</th>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Codice</th>
            <th scope="col">N° Carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
              <td>{{ $train->company }}</td>
              <td><img src="{{ $train->company_image }}" alt="" style="max-width: 50px"></td>
              <td>{{ $train->departure_station }}</td>
              <td>{{ $train->arrival_station }}</td>
              <td>{{ $train->departure_time }}</td>
              <td>{{ $train->arrival_time }}</td>
              <td>{{ $train->train_code }}</td>
              <td>{{ $train->carriages_count }}</td>
              <td>{{ $train->on_time }}</td>
              <td>{{ $train->cancelled }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

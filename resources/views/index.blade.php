<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-migration-seeder</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
          <h1 class="text-center">TRAINS</h1>
          <table class="table">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Date</th>
                    <th>Arrival Date</th>
                    <th>Train Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_date }}</td>
                        <td>{{ $train->arrival_date }}</td>
                        <td>{{ $train->train_code }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            
        </div>
    </body>
</html>





{{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
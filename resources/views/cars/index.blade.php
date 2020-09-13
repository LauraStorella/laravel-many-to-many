<h1>Lista Auto</h1>

<div>
<a href="{{ route('cars.create') }}">Add new car</a>
</div>

<div>
  <ul>
    @foreach ($cars as $car)
      <li>{{ $car->manufacturer }} - {{ $car->engine }}
      <a href="{{ route('cars.show', $car) }}">Show details</a>
      </li>
    @endforeach
  </ul>
</div>
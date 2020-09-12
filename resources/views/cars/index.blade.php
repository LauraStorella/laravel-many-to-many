<h1>Lista Auto</h1>

<div>
  <ul>
    @foreach ($cars as $car)
      <li>{{ $car->manufacturer }} {{ $car->engine }}
      <a href="{{ route('cars.show', $car) }}">Show details</a>
      </li>
    @endforeach
  </ul>
</div>
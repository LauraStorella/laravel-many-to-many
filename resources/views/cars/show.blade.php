{{-- Info Auto --}}
<h1>Dettagli Auto</h1>

<div>
  <h3>{{ $car->manufacturer }}</h3>

  <div>
    <strong>Caratteristiche:</strong>
    @foreach ($car->tags as $tag)
        {{ $tag->name }}
    @endforeach
  </div>
  
  <ul>
    <li><strong>Anno:</strong> {{ $car->year }}</li>
    <li><strong>Cilindrata:</strong> {{ $car->engine }}</li>
    <li><strong>Targa:</strong> {{ $car->plate }}</li>
  </ul>
</div>


{{-- Info Proprietario --}}
<h2>Proprietario - Info & Contatti</h2>
<div>
  <ul>
    <li><strong>Nome:</strong> {{ $car->user->name }}</li>
    <li><strong>Email:</strong> {{ $car->user->email }}</li>
    <li><strong>Password:</strong> {{ $car->user->password }}</li>
  </ul>
</div>

<a href="{{ route('cars.index') }}">Torna indietro</a>
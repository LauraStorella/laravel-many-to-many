{{-- Creo nuova risorsa con Create --}}
{{-- Passo info a Store --}}

<h1>Crea nuova Auto</h1>

{{-- Form Validation --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


{{-- Form - Add new Car --}}
<div>
  <form action="{{ route('cars.store') }}" method="POST">
    @csrf
    @method('POST')
  
    <label><strong>Manufacturer:</strong></label>
    <input type="text" name="manufacturer" value="{{old('manufacturer')}}" placeholder="manufacturer">
    <br>
    <br>
    <label><strong>Year:</strong></label>
    <input type="number" name="year" value="{{old('year')}}" placeholder="year">
    <br>
    <br>
    <label><strong>Engine:</strong></label>
    <input type="text" name="engine" value="{{old('engine')}}" placeholder="engine">
    <br>
    <br>
    <label><strong>Plate:</strong></label>
    <input type="text" name="plate" value="{{old('plate')}}" placeholder="plate">
    <br>
    <br>
    <div>
      <span><strong>Caratteristiche:</strong></span>
      @foreach ($tags as $tag)
        <div>
          <label>{{ $tag->name }}</label>
          <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> 
        </div>        
      @endforeach
    </div>
    <br>
    <br>
    <div>
      <select name="user_id">
        @foreach ($users as $user)
          <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
      </select>
    </div>
    <br>
    <br>
    <input type="submit" name="" value="Save">
  </form>

  <a href="{{ route('cars.index') }}">Homepage</a>
</div>
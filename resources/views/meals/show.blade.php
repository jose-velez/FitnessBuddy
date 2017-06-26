@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3>{{$meal->name}}</h3>
          <div class="meal-info">
              <span>  Calories: </span><br>
              <span>  Carbohydrates: </span><br>
              <span>  Protein: </span><br>
              <span>  Fat: </span><br>
          </div>
      </div>


    </div>
    <div class="row">
      <div class="col-md-12">
        @if(!$meal->foods->isEmpty())
          <ul class="list-group">
            @foreach ($meal->foods as $food)
              <li class="list-group-item">
                <h3 class="left-aligned">{{$food->name}}</h3>
                  <h5 class="right-aligned">Protein: {{$food->protein}}, Carbohydrates: {{$food->carbohydrates}}, Fat: {{$food->fat}}</h5>
              </li>
            @endforeach
          </ul>
          @else
          <h3>No food Associated with this meal. You can add some below.</h3>
        @endif
      </div>

    </div>
    <div class="row">
        <div class="col-md-12">
          <form action="/meals/{{ $meal->id }}/foods" method="POST">
  {{ csrf_field() }}

 <div class="form-group row">
    <label for="name" class="col-sm-2 form-control-label">Food Name</label>
    <div class="col-sm-10">
      <input class="form-control"
             type="text"
             name="name"
             placeholder="Food Name"
             required>
    </div>
  </div>

 <div class="form-group row">
    <label for="protein" class="col-sm-2 form-control-label">Protein</label>
    <div class="col-sm-10">
      <input class="form-control"
             type="number"
             name="protein"
             placeholder="Protein/g"
             required>
    </div>
  </div>

 <div class="form-group row">
    <label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
    <div class="col-sm-10">
      <input class="form-control"
             type="number"
             name="carbohydrates"
             placeholder="Carbohydrates/g"
             required>
    </div>
  </div>

 <div class="form-group row">
    <label for="fat" class="col-sm-2 form-control-label">Fat</label>
    <div class="col-sm-10">
      <input class="form-control"
             type="number"
             name="fat"
             placeholder="Fat/g"
             required>
    </div>
  </div>

 <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-primary" value="submit" type="submit">Submit</button>
    </div>
  </div>

</form>
        </div>
    </div>

  </div>
@stop

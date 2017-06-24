@extends('layouts.app')

@section('content')
<div class="containter">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Add a Meal</div>

          <div class="panel-body">
            <form class="meal" action="/users/{{$user->id}}/meals" method="POST">
              <fieldset class="form-group">
              <label for="meal">Meal</label>
              <input type="text"
                     name="meal"
                     class="form-control"
                     placeholder="Meal Name">
            </fieldset>
              <button class="btn btn-primary"type="button" name="button">Submit</button>
            </form>

          </div>
    </div>

  </div>

</div>
@stop

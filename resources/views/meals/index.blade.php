@extends ('layouts.app')

@section('content')
<h4>All Meals</h4>

@if(!$meals->isEmpty())
<ul class="list-group">
    @foreach ($meals as $meal)
      <li class="list-group-item">
        <a href="/meals/{{$meal->id}}">{{$meal->name}}</a>
      </li>
    @endforeach
</ul>
@else

  <h5>You have no meals <a href="/meals/create">Create One Now </a></h5>
@endif
@stop

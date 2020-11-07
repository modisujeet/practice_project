<!-- calling view from routes directly -->
<!-- <h1>Hello {{$name ?? 'sujeet'}}</h1> -->

<!-- calling it from controlller -->
<h1>Hello from User from controller</h1>

@foreach($users as $user)
  <h3>{{$user}}</h3>
@endforeach

<!-- adding another page in parents page -->
@include ('inner')
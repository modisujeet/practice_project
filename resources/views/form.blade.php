<h1>User Login</h1>

<!-- This is for showing error if any of the field 
user forgot to input and try to submit it will throw 
an error msg above the form.

@if($errors -> any())
    @foreach ($errors -> all() as $err)
    <h5>{{$err}}</h5>
    @endforeach
 @endif  -->

<form action="form" method="POST">
  @csrf
  <input type="text" name="username" 
    placeholder="Enter User Id"> <br> 
    <span style = "color: red">
      @error('username') 
         {{$message}}
      @enderror 
    </span>
    <br>
  
  <input type="password" name="userpassword" 
    placeholder="enter user password"> <br>
    <span style = "color: red">
        @error('userpassword') 
          {{$message}}
        @enderror 
      </span>
    <br>
  
  <button type="submit"> Login </button>
</form>
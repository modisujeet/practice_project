<h1>User Login</h1>
<form action="form" method="POST">
  @csrf
  <input type="text" name="username" placeholder="Enter User Id"> <br> <br>
  <input type="password" name="userpassword" placeholder="enter user password"> <br><br>
  <button type="submit"> Login </button>
</form>
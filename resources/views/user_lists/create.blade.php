{{-- @extends ('layout') --}}
{{-- @section ('header') --}}
<form method="POST" action="/signupuser" >
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="name" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Last Name</label>
      <input type="name" class="form-control" id="lastname" aria-describedby="emailHelp" name="lastname" placeholder="Enter name">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">Gender</label>
	<input type="radio" id="male" name="gender" value="male">
	<label for="exampleInputEmail1">Male</label>
	<input type="radio" id="male" name="gender" value="male">
	<label for="exampleInputEmail1">Female</label>
  </div>
  <div class="form-group">
	<label for="birthday">DOB:</label>
<input type="date" id="dob" name="dob">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    @if ($errors->has('password'))
       <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="check_me" id="checkbox">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

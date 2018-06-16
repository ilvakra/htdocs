@extends('layout/default')

@section('content')
	<form>

  <?php 
    $fields = [
      'name' => 'text',
      'email' => 'email',
      'password'  => 'password',
      'password_confirmation' => 'password'
    ];
  ?>

  @foreach($fields as $field => $type)
    <div class="form-group">
      <label for="{{ $field }}">Enter your {{ $field }}</label>
      <input type="{{ $type }}" class="form-control" name="{{ $field }}" required>
    </div>
  @endforeach


  -----

  <div class="form-group">
    <label for="name">Enter your name</label>
    <input type="text" class="form-control" name="name" required>
  </div>

  <div class="form-group">
    <label for="email">Enter your email</label>
    <input type="email" class="form-control" name="email" required>
  </div>

  <div class="form-group">
    <label for="password">Enter your password</label>
    <input type="password" class="form-control" name="password" required>
  </div>

  <div class="form-group">
    <label for="password_confirmation">Confirm your password</label>
    <input type="password" class="form-control" name="password_confirmation"  required>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
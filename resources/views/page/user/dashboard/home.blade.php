<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
  Welcome to Life Engineering Agent Portal
  <br/>
  <br/>
  <br/>

  @if (isset($profile))
    <p>{{$profile->name}}</p>
    <p>{{$profile->dob}}</p>
    <p>{{$profile->contactNumber}}</p>
  @endif

  <br/>
  <br/>
  <br/>

  <a type="button" href="/user/logout">Log out</button>

</body>
</html>

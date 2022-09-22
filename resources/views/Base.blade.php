<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
  <header>
      <ul>
          <li><a href="{{url('/home')}}">Home </a></li>
          <li><a href="{{url('/add')}}">Add User</a></li>
          <li><a href="{{url('/update')}}">Update User</a></li>
      </ul>
  </header>
   <!-- Content-->
  @yield('content')

<footer>
    Copyright 2022
</footer>

</body>
</html>

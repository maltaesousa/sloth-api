<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
    html,
    body {
      background-color: #fff;
      color: #3f51b5;
      font-family: 'Raleway', sans-serif;
    }

    svg {
      fill: #3f51b5;
      display: block;
      margin: auto;
      padding-top: 10%;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
      height: 100vh;

    }

    .title {
      font-size: 84px;
      font-weight: 200;
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
      <a href="{{ url('/home') }}">Home</a> @else
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a> @endif
    </div>
    @endif
    <div class="content">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        height="145.39999"
        width="180">
        <path
          style="stroke-width:2"
          id="path3680"
          d="m 90.2,72.2 v 0 c 0,0 -0.2,0 -0.2,0 0,0 -0.2,0 -0.2,0 v 0 c -8,0.2 -14.4,3.8 -14.4,8 0,1.8 1,3.4 2.8,4.6 0,0 0,0 0,0 0.2,-1 1.8,-1.2 3.4,-0.6 1.6,0.8 2.6,2.2 2.4,3.2 0,0 0,0 0,0 1.8,0.4 3.8,0.8 5.8,0.8 v 0 c 0,0 0.2,0 0.2,0 0,0 0.2,0 0.2,0 v 0 c 2.2,0 4,-0.4 5.8,-0.8 0,0 0,0 0,0 -0.2,-1 0.8,-2.4 2.4,-3.2 1.6,-0.8 3.2,-0.4 3.4,0.6 0,0 0,0 0,0 1.8,-1.4 2.8,-3 2.8,-4.6 0,-4.2 -6.4,-7.8 -14.4,-8 z" />
        <path
          style="stroke-width:2"
          id="path3682"
          d="M 90.2,0 V 0 C 90.2,0 90,0 90,0 90,0 89.8,0 89.8,0 V 0 C 40.4,0.2 0,33.6 0,76.6 c 0,29.4 4,34.8 8.4,38 3.6,2.4 75.6,28.6 81.4,30.6 v 0.2 c 0,0 0,0 0.2,0 0.2,0 0.2,0 0.2,0 v -0.2 c 5.6,-2 77.8,-28.2 81.4,-30.6 4.4,-3 8.4,-8.6 8.4,-38 C 180,33.6 139.6,0.2 90.2,0 Z M 6.4,88.4 c 0,-6.2 11.4,-24.8 27.8,-32.8 14.4,-7 25.8,0 29.4,6.8 C 69.8,74 53.8,81 41.8,81 29.8,81 6.4,88.4 6.4,88.4 Z m 83.8,34.2 v 0 c 0,0 -0.2,0 -0.2,0 0,0 -0.2,0 -0.2,0 v 0 C 75.6,122.2 52.4,106.6 52.4,94.8 52.4,83 69,66.6 89.8,66.2 v 0 c 0,0 0.2,0 0.2,0 0,0 0.2,0 0.2,0 v 0 c 20.8,0.2 37.4,16.8 37.4,28.6 0,11.6 -23.2,27.4 -37.4,27.8 z M 138.4,81 c -12,0 -28.2,-6.8 -21.8,-18.6 3.6,-6.8 15,-13.8 29.4,-6.8 16.4,8 27.8,26.6 27.8,32.8 -0.2,0 -23.2,-7.4 -35.4,-7.4 z" />
        <path
          style="stroke-width:2"
          id="path3684"
          d="m 131.8,58 c -5,0 -11.6,3 -11.6,10.2 0,5 6.8,7.4 11.6,7.4 5,0 8.8,-4 8.8,-8.8 0,-4.8 -3.8,-8.8 -8.8,-8.8 z m -1.4,14.8 c -3.2,0 -5.8,-2.6 -5.8,-5.8 0,-3.2 2.6,-5.8 5.8,-5.8 3.2,0 5.8,2.6 5.8,5.8 0,3.2 -2.6,5.8 -5.8,5.8 z" />
        <circle
          style="stroke-width:2"
          id="circle3686"
          r="3.5999999"
          cy="66.999992"
          cx="130.39999" />
        <path
          style="stroke-width:2"
          id="path3688"
          d="m 122.6,91.4 c -9.2,7.6 -21,6.8 -32.2,6.4 0,0 -0.2,0 -0.4,0 0,0 -0.2,0 -0.2,0 0,0 -0.2,0 -0.2,0 -0.2,0 -0.2,0 -0.4,0 C 78,98.2 66.2,99 57,91.4 c -1.2,-1 -3,0.8 -1.8,1.8 9.8,8.2 22.4,7.6 34.4,7.2 12,0.4 24.6,1.2 34.4,-7.2 1.6,-1 -0.2,-2.8 -1.4,-1.8 z" />
        <path
          style="stroke-width:2"
          id="path3690"
          d="m 48.2,58 c -5,0 -8.8,4 -8.8,8.8 0,5 4,8.8 8.8,8.8 5,0 11.6,-2.6 11.6,-7.4 C 59.8,61 53.2,58 48.2,58 Z m 1.4,14.8 c -3.2,0 -5.8,-2.6 -5.8,-5.8 0,-3.2 2.6,-5.8 5.8,-5.8 3.2,0 5.8,2.6 5.8,5.8 0,3.2 -2.6,5.8 -5.8,5.8 z" />
        <circle
          style="stroke-width:2"
          id="circle3692"
          r="3.5999999"
          cy="66.999992"
          cx="49.600006" />
      </svg>
      <h1 class="title">
        Sloth
      </h1>
    </div>
  </div>
</body>

</html>
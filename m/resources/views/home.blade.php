@extends('layouts.app')

@section('content')

<!-- <!DOCTYPE html>
<html>
<body>
	<div class="main">
		<div id="message">Pick up bottles</div>
		<div class="bottles">
			<div>Hi welcome newbie</div>
			<div>Hello nice to meet you !</div>
			<div>In this world full of mystery only faith brought us together</div>
			<div>Have faith</div>
			<div>your amazing no matter what </div>
			<div>Have faith</div>
			<div>your amazing no matter what </div>
		</div>

	</div>

</body>
</html> -->



<link href="https://fonts.googleapis.com/css?family=Freckle+Face|Gloria+Hallelujah|Carter+One" rel="stylesheet">
<body>
	<div class="main">
		<h1>Welcome, {{ Auth::user()->name }} <span class="caret"></span></h1>
		<p>What do you want to do next?</p>

		<div class="function">
            <a href="/compose"><button>compose</button></a>
            <a href="/pickups"><button>pickups</button></a>
            <a href="/chat"><button>chat</button></a>
 		</div>
                          
	

	</div>


</body>


@endsection

@extends('layouts.app')

@section('content')
<header>
	<div class="parallax" style="background: url('assets/img/cooking-dumplings-in-the-kitchen-on-the-wooden-table-198-small.jpg');">

		<div class="container">

			<h1>Behind the recipe</h1>

			<div class="row">

				<div class="col-md-6">
					<h3 class="pt-3">"I always found it hard to find good recipes for healthy food"</h3>
					<p>"So I created this, a place for people to find healthy recipes that just work."</p>
				</div>

				<div class="col-md-6">
				</div>

			</div>

		</div>

	</div>

</header>

<section class="text-center mt-5 mb-5">

	<div class="container">

		<div class="row">

			<div class="col-md-4">
				<h4>Breakfasts are hard</h4>
				<p>So we make them easy, our expansive database of user contributed breakfast recipes will give you the best start to the day.</p>
			</div>

			<div class="col-md-4">
				<h4>Lunch with the whanau? We got you covered</h4>
				<p>If you need to whip up something quick for yourself, or are preparing a extensive meal for your whanau we have recipes to suit everyones needs, by sorting healthy recipes only you can make sure that everyone is getting what they need.</p>
			</div>

			<div class="col-md-4">
				<h4>Whether it's dinner with friends or just for one, look no further!</h4>
				<p>With recipes ranging in difficulty and size, you can find something thats delicious and healthy for anyone!</p>
			</div>

		</div>

		<div class="row">

			<div class="col-4">
				<img class="img-fluid img-thumbnail" src="assets/img/Breakfast!.jpg" alt="Breakfast" >
			</div>

			<div class="col-4">
				<img class="img-fluid img-thumbnail" src="assets/img/A_late_lunch.jpg" alt="Lunch" >
			</div>

			<div class="col-4">
				<img class="img-fluid img-thumbnail" src="assets/img/food-homemade-dinner-party.jpg" alt="Dinner">
			</div>

		</div>

	</div>

</section>
@endsection

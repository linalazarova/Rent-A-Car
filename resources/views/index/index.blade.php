@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <h2>{{$title}}</h2>
            </header>
            <div class="row">
					<section>
						<a href="#" class="image"><img src="images/tesla.jpg" alt="" style="width:500px;height:300px;"></a>
						<header>
							<h2>Tesla Model S</h2>
						</header>
						<ol>
                        <ul>
                            <li><b>Brand</b>: Tesla </li>
                            <li><b>Model</b>: Model S </li>
                            <li><b>Body type</b>: Liftback sedan </li>
                            <li><b>Seats</b>: 5</li>
                            <li><b>Doors</b>: 4</li>
                            <li><b>Fuel consumption</b>: Electric</li>
                        </ul>
                        </ol>
					</section>

					<section>
						<a href="#" class="image"><img src="images/renault.jpg" alt="" style="width:400px;height:300px;"></a>
						<header>
							<h2>Renault Megane</h2>
						</header>
						<ul>
                            <li><b>Brand</b>: Renault </li>
                            <li><b>Model</b>: Megane </li>
                            <li><b>Body type</b>: Cabriolet, Coupe </li>
                            <li><b>Seats</b>: 5</li>
                            <li><b>Doors</b>: 4</li>
                            <li><b>Fuel consumption</b>: 5 l/100 km</li>
                        </ul>
					</section>	

                    <section>
						<a href="#" class="image"><img src="images/mercedes.png" alt="" style="width:400px;height:300px;"></a>
						<header>
							<h2>Mercedes GL-Class (X166)</h2>
						</header>
						<ul>
                            <li><b>Brand</b>: Mercedes </li>
                            <li><b>Model</b>: GL-Class(X166) </li>
                            <li><b>Body type</b>: SUV </li>
                            <li><b>Seats</b>: 5</li>
                            <li><b>Doors</b>: 4</li>
                            <li><b>Fuel consumption</b>: 12.4 l/100 km</li>
                        </ul>
					</section>		

				</div>
        </div>
    </div>
@endsection
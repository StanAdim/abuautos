@extends("layouts.mainLayout")
@section("page-title","Welcome|AbuAutos")
@section("content")

    <div class="container-body">

        <div class="row-cars mgt50px">
            <div class="column">
                <div class="imgBox">
                    <img src="https://images.pexels.com/photos/358208/pexels-photo-358208.jpeg?cs=srgb&dl=auto-automobile-automotive-black-358208.jpg&fm=jpg">
                </div>
                <div class="details">
                    <h3>TOYOTA <span>Royal Crown</span></h3>
                    <ul>
                        <li>COLOR: <span>Black </span></li>
                        <li>ENGINE: <span>11111cc</span></li>
                        <li>PLATE: <span>11111cc</span></li>
                        <li>PRICE: <span>11111 </span>Tsh</li>
                        <ul id="list-link">
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><span class="lead">More</span></a></li>
                        </ul>
                    </ul>
                </div>
            </div>

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/627677/pexels-photo-627677.jpeg?cs=srgb&dl=action-asphalt-auto-automobile-627677.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/193994/pexels-photo-193994.jpeg?cs=srgb&dl=grey-mercedes-benz-convertible-193994.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg?cs=srgb&dl=photography-of-gray-sports-car-919073.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/905554/pexels-photo-905554.jpeg?cs=srgb&dl=photo-of-white-nissan-car-905554.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>Nissan <span> Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/166054/pexels-photo-166054.jpeg?cs=srgb&dl=blue-sedan-during-daytime-166054.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/2030561/pexels-photo-2030561.jpeg?cs=srgb&dl=black-dodge-charger-2030561.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="column">--}}
                {{--<div class="imgBox">--}}
                    {{--<img src="https://images.pexels.com/photos/977003/pexels-photo-977003.jpeg?cs=srgb&dl=black-convertible-coupe-977003.jpg&fm=jpg">--}}
                {{--</div>--}}
                {{--<div class="details">--}}
                    {{--<h3>TOYOTA <span>Royal Crown</span></h3>--}}
                    {{--<ul>--}}
                        {{--<li>COLOR: <span>Black </span></li>--}}
                        {{--<li>ENGINE: <span>11111cc</span></li>--}}
                        {{--<li>PLATE: <span>11111cc</span></li>--}}
                        {{--<li>PRICE: <span>11111 </span>Tsh</li>--}}
                        {{--<ul id="list-link">--}}
                            {{--<li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                            {{--<li><a href="#"><span class="lead">More</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div style="clear:both;"></div>
        </div>
    </div>


    @endsection
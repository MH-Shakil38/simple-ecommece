<section>
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="home_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#home_slider" data-slide-to="0"  class="active" ></li>
                            <li data-target="#home_slider" data-slide-to="1" ></li>
                            <li data-target="#home_slider" data-slide-to="2" ></li>
                        </ol>
                        <div class="carousel-inner">

                            @forelse($slider as $info)
                            <div class="carousel-item {{$loop->iteration ==1 ?'active' : ''}}">
                                <img src="{{$info->image}}" class="d-block w-100"
                                     alt="">
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

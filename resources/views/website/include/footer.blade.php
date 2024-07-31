<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-menu">
                        <ul>
                            <li>
                                <a href="{{route('website.about')}}">আমাদের সম্পর্কে</a>
                            </li>
                            <li>
                                <a href="{{route('website.delivery.policy')}}">ডেলিভারি পলিসি</a>
                            </li>
                            <li>
                                <a href="{{route('website.return.policy')}}">রিটার্ন পলিসি</a>
                            </li>
                        </ul>
                    </div>

                    <div class="social_links">
                        <ul>
                            <li>
                                <a class="facebook" target="_blank" href="{{$site->fb ?? "#"}}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="facebook" target="_blank" href="{{$site->wp ?? "#"}}"><i class="fa fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a class="twitter" target="_blank" href="{{$site->twitter ?? "#"}}"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="instagram" target="_blank" href="{{$site->instagram ?? "#"}}"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="youtube" target="_blank" href="{{$site->youtube ?? "#"}}"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="copyright_text">
                        <p><i class="fa fa-copyright"></i> 2024 <a href="{{url('/')}}" target="_blank">{{$site->name ?? ''}}</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

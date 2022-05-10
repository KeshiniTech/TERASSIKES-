@extends('user.master')
@section('body')
    <div class="row tab-manu">
        <div class="col active">Esittely</div>
        <div class="col">Menu & Tilaa</div>
        <div class="col">Varaa pöytä</div>
        <div class="col">Arvostelut</div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Tietoa terassista</h5>
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet mi massa.
                    Pellentesque quis arcu egestas, lobortis lectus placerat, accumsan turpis. Suspendisse auctor sem a quam
                    tincidunt, at lobortis urna gravida. Pellentesque sapien purus, accumsan ut magna luctus, commodo
                    ultrices lectus. Quisque ut dolor nisi. Morbi rutrum eleifend turpis. Donec sodales volutpat ligula a
                    faucibus. Aenean sem elit, tempus imperdiet condimentum ac, pharetra a leo. Maecenas scelerisque tellus
                    id convallis</p>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786"
                    width="600" height="450" frameborder="0" style="border:0"></iframe>

            </div>
            <h5 class="card-footer">Ominaisuudet</h5>

        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button col-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question-title
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-start">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed col-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question-title
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-start">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed col-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Question-title
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-start">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="row mt-4">
        <div class="card">

            <div class="card-body">
                <img src="{{ asset('img/img1.png') }}" class="img-fluid">
            </div>


        </div>
    </div>
    <div class="row mt-4">
        <div class="card">

            <div class="card-body">
                <img src="{{ asset('img/img1.png') }}" class="img-fluid">
            </div>


        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img2.png') }}" class="img-fluid">

                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img3.png') }}" class="img-fluid">

                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img4.png') }}" class="img-fluid">

                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img2.png') }}" class="img-fluid">

                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img3.png') }}" class="img-fluid">

                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/img4.png') }}" class="img-fluid">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

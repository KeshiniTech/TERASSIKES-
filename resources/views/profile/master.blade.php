<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('profile.layouts.head')
@stack('css')


<body>

    @include('user.layouts.nav')
    <main id="main">

        @include('user.layouts.top_bar')
        <section id="cta" class="cta">
            <div class="row text-center justify-content-center align-items-center">

                <div class="col-sm-10">

                    @yield('body')


                </div>

            </div>
        </section><!-- End Cta Section -->


    </main><!-- End #main -->

    @include('user.layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    @include('profile.layouts.script')
    @stack('js')
</body>

</html>

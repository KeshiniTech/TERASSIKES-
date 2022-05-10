@php
$url = url()->current();

if(str_contains($url,'create-account') == '' && str_contains($url,'confirm-information') == '' && str_contains($url,'payment-information') == '' && str_contains($url,'summary') == ''){
die;
}

@endphp
<div attr="Valitse_paketti row">
    <form id="valitse_form" class="col-xl-7" method="post">

        @if (str_contains($url,'create-account') != '')

        <h1>kayttajatiedot</h1>
        <h5>luo oma kauppiastunnuksesi helposti ja nopeasti!</h5>
        <div class="col__3 input_border">
            <label class="text__color" for="">Osoite</label>
            <input type="text" name="" id="" value="AAAAAAAAAAAA">
        </div>
        <div class="col__3 input_border">
            <label class="text__color" for="">Postinumero</label>
            <input type="number" name="" id="" value="00000000">
        </div>

        <div class="col__3 input_border">
            <label class="text__color" for="">Postitoimipaokka</label>
            <input type="text" name="" id="" value="AAAAAAAaaa">
        </div>
        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Etu-ja sukunimi</label>
            <input class="col__12 input_border" type="text" name="" id="" value="AAAAAAAAAAaa">
        </div>

        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Puhelinnumero</label>
            <input class="col__12" type="tel" name="" id="" value="+9340325059">
        </div>
        <h5>luo kauppiastunnus</h5>

        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Sahkopostiosoite</label>
            <input class="col__12" type="email" name="" id="" value="test@gmail.com">
        </div>
        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Salasana</label>
            <input class="col__12 m_5" type="password" name="" id="" value="123456789">
            <label class="text__color mb-4" for="">Vahintaan kuusi(6)merkkia.</label>
        </div>

        <span>
            <div class="f_check_box"><i class="fa-solid fa-check"></i></div><span class="text__color">
                <h5>Hyuaksyn tietosuojaselossteen & toimitus-ja sopimusehdot</h5>
            </span>
        </span>
        <a href="{{url('/subscription/confirm-information') }}"><input type="button" class="su_button col-12 col-md-4" value="Vahvista tiedot"></a>


        @elseif (str_contains($url,'confirm-information') != '')

        <h1>Terassin tiedot</h1>
        <h5 class="information">Anna terassistasi alustavat tiedot alla olevan kyselyn avulla.</h5>
        <div class="col__3 input_border">
            <label class="text__color" for="">Osoite</label>
            <input type="text" name="" id="" value="AAAAAAAAAAAA">
        </div>
        <div class="col__3 input_border">
            <label class="text__color" for="">Postinumero</label>
            <input type="number" name="" id="" value="00000000">
        </div>

        <div class="col__3 input_border">
            <label class="text__color" for="">Postitoimipaokka</label>
            <input type="text" name="" id="" value="AAAAAAAaaa">
        </div>
        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Maakunta</label>
            <input class="col__12 input_border" type="text" name="" id="" value="AAAAAAAAAaa">
        </div>

        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Terassin nimi</label>
            <input class="col__12" type="text" name="" id="" value="AAAAAAAAAAAaaa">
        </div>
        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Terassin Puhelinnumero</label>
            <input class="col__12" type="tel" name="" id="" value="+9340325059">
        </div>

        <div class="col__12 input_border">
            <label class="col__12 text__color" for="">Terassin Sahkopostiosoite</label>
            <input class="col__12" type="email" name="" id="" value="test@gmail.com">
        </div>
        <span>
            <div class="f_check_box"><i class="fa-solid fa-check"></i></div><span class="text__color">
                <h5>Hyuaksyn tietosuojaselossteen & toimitus-ja sopimusehdot.</h5>
            </span>
        </span>
        <a href="{{url('/subscription/create-account') }}"><input type="button" class="su_button col-4" value="Luo tunnus"></a>

        @elseif (str_contains($url,'payment-information') != '')

        <h1>lisaa maksutiedot</h1>
        <h5 class="information">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
        <div class="pay_method pay_method_cl" attr="payment_card_Section"><span><b>lisaa uusi kortti</b></span><i class="fa-solid fa-angle-right"></i></div>
        <div class="pay_method pay_method_cl mb_100" attr="e-invoicing_section"><span><b>lisaa verkkolaskutusosoite</b></span><i class="fa-solid fa-angle-right"></i></div>

        @elseif (str_contains($url,'summary') != '')

        <h1>kayttajatiedot</h1>
        <div class="summary_cl" attr="payment_card_Section">
            <b>Nimi: (username)</b><br>
            <b>Sahkopostiosoite: (email)</b><br>
            <b>Puhelinnumero: (tel)</b><br>
        </div>

        <h1>Terassin tiedot</h1>
        <div class="summary_cl" attr="e-invoicing_section">
            <b>Terassin nimi: (terrace name)</b><br>
            <b>Osoite: (address)</b><br>
            <b>Sahkopostiosoite: (terrace email)</b><br>
            <b>Puhelinnumero: (terrace tel)</b><br>
        </div>

        <h1>Maksutiedot</h1>
        <div class="summary_cl mb_100" attr="e-invoicing_section">
            <b>maksutapa: (payment method)</b>
        </div>
        @endif
    </form>
</div>
<div class="right_site_content col-xl-5">

    @if (str_contains($url,'create-account') != '' || str_contains($url,'confirm-information') != '')


    <div class="row">
        <div class="col-3">
            <img class="col-12" src="{{ asset('img/side_img1.png') }}" alt="">
        </div> 
        <div class="col-8 p-0">
            <span class="p-0">
                <h4>Tilausjarjestelma</h4>
                <p class="text__color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </span>
        </div>

    </div>
    <div class="row">
        <div class="col-3">
            <img class="col-12" src="{{ asset('img/side_img2.png') }}" alt="">
        </div>
        <div class="col-8 p-0">
            <span class="p-0">
                <h4>tyoajanseurantajarjestelma</h4>
                <p class="text__color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img class="col-12" src="{{ asset('img/side_img3.png') }}" alt="">
        </div>
        <div class="col-8 p-0">
            <span class="p-0">
                <h4>Terassikesa-yhteison tuki</h4>
                <p class="text__color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img class="col-12" src="{{ asset('img/side_img4.png') }}" alt="">
        </div>
        <div class="col-8 p-0">
            <span class="p-0">
                <h4>Menu & tuotteet</h4>
                <p class="text__color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </span>
        </div>
    </div>


    @elseif (str_contains($url,'payment-information') != '')

    <div id="card_template">
        <div class="row payment_card_Section">
            <h5><b>Kortintiedot</b></h5>
            <input type="text" name="" id="card_number" class="col-10 p-2" placeholder="0000 0000 0000 0000"><label class="card_img col-2"><i class="fa-brands fa-cc-mastercard"></i></label>
            <input type="text" name="" id="" class="col_6 full_border m_5_p">
            <input type="text" name="" id="" class="col_6 full_border">
            <h5><b>Nimi kortissa</b></h5>
            <input type="text" name="" id="" class="full_border col-12">

            <button class="su_button p-4"><b>Lisaa ja Vahvista maksutapa</b></button>

        </div>
        <div class="row e-invoicing_section">
            <h5><b>Valittaja</b></h5>
            <input type="text" name="" id="" class="full_border col-12" placeholder="*">
            <h5><b>verkkolaskutusosoite</b></h5>
            <input type="text" name="" id="" class="full_border col-12" placeholder="*">

            <button class="su_button p-4"><b>Vahvistan tietojen oikeellisuuden</b></button>
        </div>
    </div>


    @elseif (str_contains($url,'summary') != '')

    <div class="card_template mt_100 row pop_up_con">
        <h2 class="col-12">Yhteenveto tilauksesta</h2>
        <h3 class="col-9 text__color">Terassikesa-paketti 2022</h2>
            <h3 class="col-3">420€</h3>
            <h3 class="col-12 text__color mb_50">-terassikausi</h3>
            <h3 class="col-12"><span>veroton: </span><span class="text__color">420€</span></h3>
            <h3 class="col-12"><span>Avl 24%: </span><span class="text__color">124,99€</span></h3>
            <h3 class="col-12"><span>yhteensa: </span> <span class="text__color">520,8€</span></h3>
            <button class="su_button col-4"><b>Tilaa nyt</b></button>
    </div>
    <div class="th-pop_up row">
        <i class="fa-solid fa-xmark close"></i>
        <div class="pop_logo col-6 m-auto">
            <img class="" id="popup_logo" src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <h1 class="pop_up_header col-12 m-auto">Kiitos tilauksesta!</h1>
        <h3 class="pop_up_desc col-12">Lahetimme sahkopostiisi vahvistusviestin</h3>
        <button class="su_button"><b>Kirjaudu</b></button>

    </div>
    @endif
</div>
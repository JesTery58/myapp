@extends('admin/layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">  <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body" style=" background: rgb(247, 175, 62);border-radius:5px">

                        <div class="stats-icon" >
                            <center><i class="pe-7s-ticket" style="text-aling:center;font-size:50px;color:#404652;"></i></center>
                            <div class="stats-title">

                                <div class="btn-group">
                                    <button data-toggle="dropdown" style="background: none;border: none;color: #404652;"class="btn btn-success dropdown-toggle">Genel Ayarlar<span class="caret"></span></button>
                                    <ul id="ayarlar" class="dropdown-menu">
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/webAyarlar">
                                                Web Sitesi Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/kullanicilar">
                                                Kullanıcı Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/mailAyarlari">
                                                Mail Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/sosyalMedya">
                                                Sosyal Medya Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/haritaAyarlari">
                                                Harita Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/dilAyarlari">
                                                Dil Ayarları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/siteYonetimi/iletisimAyarlari">
                                                İletişim Ayarları                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body" style=" background: rgb(247, 175, 62);border-radius:5px">

                        <div class="stats-icon" >
                            <center><i class="pe-7s-ticket" style="text-aling:center;font-size:50px;color:#404652;"></i></center>
                            <div class="stats-title">

                                <div class="btn-group">
                                    <button data-toggle="dropdown" style="background: none;border: none;color: #404652;"class="btn btn-success dropdown-toggle">İçerik Yönetimi<span class="caret"></span></button>
                                    <ul id="icerik" class="dropdown-menu">
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/slider">
                                                Slider                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/sayfalar">
                                                Sayfalar                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/blog">
                                                Blog Yazıları                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/egitim">
                                                Eğitim Durumu                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/kurs">
                                                Kurs & Sertifika                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/isler">
                                                İşler Projeler                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body" style=" background: rgb(247, 175, 62);border-radius:5px">

                        <div class="stats-icon" >
                            <center><i class="pe-7s-ticket" style="text-aling:center;font-size:50px;color:#404652;"></i></center>
                            <div class="stats-title">

                                <div class="btn-group">
                                    <button data-toggle="dropdown" style="background: none;border: none;color: #404652;"class="btn btn-success dropdown-toggle">Ürün Yönetimi<span class="caret"></span></button>
                                    <ul id="urunler" class="dropdown-menu">
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/urunYonetimi/urunler">
                                                Ürünler                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/urunYonetimi/kategoriler">
                                                Ürün Kategorileri                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body" style=" background: rgb(247, 175, 62);border-radius:5px">

                        <div class="stats-icon" >
                            <center><i class="pe-7s-ticket" style="text-aling:center;font-size:50px;color:#404652;"></i></center>
                            <div class="stats-title">

                                <div class="btn-group">
                                    <button data-toggle="dropdown" style="background: none;border: none;color: #404652;"class="btn btn-success dropdown-toggle">Dosya Yönetimi<span class="caret"></span></button>
                                    <ul id="dosyayonetimi" class="dropdown-menu">
                                        <li class="">
                                            <a href="http://kadirelmas.com/admin/icerikYonetimi/">
                                                Sunucuya Gözat                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

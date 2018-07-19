@extends('layouts.header')
@section('content')




<div class="properties-details-page content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">                                         
                <div class="row">
                    
                        <div class="col-md-8">
                            <h3>Sítio em Juquiá</h3>
                            <p><i class="fa fa-map-marker"></i> Rua Adriano numero 123</p>
                        </div>
                        <div class="col-md-2">
                            <h3><span class="text-right text-primary">R$700.000,00</span></h3>
                            <h5>VENDA</h5>
                        </div>
                    
                </div>
                
                <div class="row row-padding">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="{{url('img/foto1.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{url('img/foto2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{url('img/foto3.jpg')}}" alt="Third slide">
                                </div>                                    
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>  
                    </div>    
                </div>                   
            
                <div class="row row-padding">                            
                    <div class="col-md-12">
                        <h4 class="heading-2">
                                Descrição
                        </h4>
                        <p>
                                24 alqueres com mata nativa, represa , área construída com 2 piscinas ,sobrado com 4 dormitórios sendo 2 suites , curral.
                        </p>
                    </div>
                </div>                        
                
                <div class="row row-padding">                            
                    <div class="col-md-12">
                            <h3 class="heading-2">
                                    Localização
                            </h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.9921026322068!2d-46.278870865117476!3d-23.96071940455697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce01838b1e7645%3A0x128346b71ebd7bb!2sAv.+Adriano+Dias+dos+Santos+-+Jardim+Boa+Esperanca+(Vicente+de+Carvalho)%2C+Guaruj%C3%A1+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486052507715" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div> 

                <div class="col-md-12">   
                        <h3 class="heading-2">
                            Outros Anúncios
                        </h3>                       
                    <div class="row">                                         
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{url('img/foto1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Casa a Venda</p>
                                </div>
                            </div>                    
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{url('img/foto2.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Casa a Venda</p>
                                </div>
                            </div>                    
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{url('img/foto3.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Casa a Venda</p>
                                </div>
                            </div>                    
                        </div>
                    </div> 
                </div>       
            </div>
          
            

            <div class="col-lg-4 col-md-12">
                    <div class="sidebar-left">    
                            <!-- Team 5 start -->
                            <div class="team-5 widget">
                                <h3 class="sidebar-title">Contatos</h3>                                
                                    <a href="agent-detail.html">                                        
                                    </a>
                                    <div class="media-body align-self-center">
                                        <h4 class="heading-2">
                                            
                                        </h4>                                        
                                        <i class="fa fa-phone" aria-hidden="true"></i> <span class="ver-numero text-primary  mouse-pointer">...ver número                                            
                                        </span><br>                                       
                                        <i class="fa fa-envelope" aria-hidden="true"></i> smeraimoveis@hotmail.com
                                        <br>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Avenida Augusto Antunes, 231
                                    <span class="numero-oculto">(11) 33848105 <br> (11) 992294051</span>
                                    </div>
                                                            
                            </div>
                            <!-- TEAM 5 END -->

                        <!-- Search contents sidebar start -->
                        <div class="widget plugin-facebook d-none d-xl-block d-lg-block">                            
                            <h3 class="sidebar-title">Facebook</h3>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsmeraimoveis%2F&tabs=timeline&width=325&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="325" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
        </div>
    </div>
</div>
<style>
        .sidebar-left {
            margin: 0 0 30px 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            background: #f8f9fa;
        }
        .heading-2, .sidebar-title{
            margin: 0 0 10px;
            font-size: 20px;
            font-weight: 600;
        }
        .content-area-6 {
            padding: 80px 0 30px;
        }
        .widget {
            margin-bottom: 5px;
            padding: 10px;
        }
        .plugin-facebook {
            display: none;
            width: 100%;
            bottom: 80px;
            text-align: left;
            z-index: 999;
        }
        .row-padding {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .numero-oculto{
            display:none;
        }
        .mouse-pointer{
            cursor: pointer;
        }
        .card-img-top {
        
            height: 150px;
        }
</style>
@endsection


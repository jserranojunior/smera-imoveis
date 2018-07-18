@extends('layouts.header')
@section('content')
<h3 class="text-center">Adriano Dias dos Santos</h3>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-6 col-xs-12">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="/img/foto1.jpg" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="/img/foto2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="/img/foto3.jpg" alt="Third slide">
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
      <div class="col-md-6 col-xs-12 mapa">
         <div>
            <ul class="nav nav-tabs">
                 
                <li role="presentation" class="nav-item">
                    <a href="#home"class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                        Descrição
                    </a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="#profile"class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                        Mapa
                    </a>
                </li>
                           
            </ul> 
            
            <!-- Tab panes -->
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="home">
                  <span class="title-casa">Casas à venda</span> - Projeto, Arq. <strong> Flavia L. L. Santos.</strong><br><br>
                  Av. Adriano Dias dos Santos, 313
                  Jardim Boa Esperanca, <br> CEP: 11470-220,
                  Vicente de Carvalho - Sp
                  <h4>Casa 3 - <span class="text-primary">R$235.000.00</span></h4>
                  Características do imóvel:
                  Sobrado germinado sobreposto superior, 2 quartos e sacada gourmet - 61.295m²<br>
                   </div>
               <div role="tabpanel" class="tab-pane" id="profile">
                  <div class="maps">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.9921026322068!2d-46.278870865117476!3d-23.96071940455697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce01838b1e7645%3A0x128346b71ebd7bb!2sAv.+Adriano+Dias+dos+Santos+-+Jardim+Boa+Esperanca+(Vicente+de+Carvalho)%2C+Guaruj%C3%A1+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486052507715" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
              
      </div>
   </div>
</div>
@endsection
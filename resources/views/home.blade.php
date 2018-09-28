@extends('layouts.apppaciente')
@section('content')

    <!-- start banner Area -->
            <section class="banner-area relative" id="home">
                <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row fullscreen d-flex justify-content-center align-items-center">
                            <div class="banner-content col-lg-9 col-md-12 justify-content-center">
                        
                                <h1>
                                   <div style="color: #67bc00">
                                        Clinica Buenaventura
                                    <span class="fa fa-heart-o"></span>
                                    </div>            
                                </h1>
                                
                                <p><h6 class="text-uppercase">Hola {{ Auth::user()->name }}, bienvenido a clinica buenaventura.</h6></p>
                                <a href="#" class="primary-btn header-btn text-uppercase mt-10">Sacar cita </a>
                                <a href="#" class="primary-btn header-btn text-uppercase mt-10">Ver historia clinica </a>
                            </div>                                     
                        </div>
                    </div>
            </section>
    <!-- End banner Area -->

    <!-- Start open-hour Area -->
            <section class="open-hour-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 open-hour-wrap">
                                <h1>Horario de atencion</h1>
                                <p>
                                    Get ready to cast your vote and select the right one
                                </p>
                                <a class="open-btn" href="#"> <span class="circle"></span>Estamos atendiendo</a>
                                <div class="date-list d-flex flex-row justify-content-center">
                                    <ul class="colm-1">
                                        <li>Lunea - Viernes</li>
                                        <li>Sabado</li>
                                        <li>Domingos - Festivos</li>
                                    </ul>
                                    <ul class="colm-2">
                                        <li><span>:</span>   09:00am a 05:00pm</li>
                                        <li><span>:</span>   9:00am a 02:00pm</li>
                                        <li><span>:</span>   Cerrado</li>
                                    </ul>                               
                                </div>
                            </div>
                        </div>
                    </div>  
            </section>
    <!-- End open-hour Area -->

    <!-- Start testomial Area -->
                <section class="testomial-area section-gap">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="menu-content pb-60 col-lg-8">
                                <div class="title text-center">
                                    <h1 class="mb-10">Feedback from our real clients</h1>
                                    <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game.</p>
                                </div>
                            </div>
                        </div>                      
                        <div class="row">
                            <div class="active-testimonial-carusel">
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t1.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t2.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t3.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>  
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t1.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t2.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t3.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>                                                          
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t1.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t2.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>
                                <div class="single-testimonial item">
                                    <img class="mx-auto" src="/paciente/img/t3.png" alt="">
                                    <p class="desc">
                                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                                    </p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <p>
                                        CEO at Google
                                    </p>
                                </div>                                                      
                            </div>
                        </div>
                    </div>  
                </section>
    <!-- End testomial Area --> 

@endsection
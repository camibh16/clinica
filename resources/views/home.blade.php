@extends('layouts.apppaciente')
@section('content')
{{-- @foreach ($doctors as $doctor) --}}
<!-- start banner Area -->
            <section class="banner-area relative" id="home">
                <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row fullscreen d-flex justify-content-center align-items-center">
                            <div class="banner-content col-lg-9 col-md-12 justify-content-center">
                                <h1>
                                   <div style="color: #67bc00">
                                        Clinica Buenaventuras
                                    <span class="fa fa-heart-o"></span>
                                    </div>            
                                </h1>
                                <p><h6 class="text-uppercase">Hola {{ Auth::user()->name }}, bienvenido a clinica buenaventura.</h6></p>
                                <div class="container">
                                  <!-- Trigger the modal with a button -->
                                  <button type="button" class="primary-btn header-btn text-uppercase mt-10" data-toggle="modal" data-target="#myModal">Sacar cita</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content ">
                                        <div class="modal-header " style="background: #67bc00">
                                          <h4 class="modal-title" style="color: #fff">Crear cita</h4>
                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff">&times;</button>
                                        </div>
                                            <div class="modal-body">
                                                <div class="row  justify-content-center">
                                                    <label for="document_id" class="col-md-4 col-form-label text-md-right">Doctor:</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control{{ $errors->has('document_id') ? ' is-invalid' : '' }}" id="document_id" value="{{ old('document_id') }}" name="document_id" required autofocus>
                                                                
                                                                {{-- @foreach ($doctor->schedules as $schedules) --}}
                                                                    {{-- expr --}}
                                                                    {{-- <option value="">{{$schedules->day_id->day}} --}}
                                                                    {{-- </option>   --}}

                                                                
                                                                {{-- @endforeach --}}

                                                            </select>

                                                            @if ($errors->has('document_id'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('document_id') }}</strong>
                                                                </span>
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer" style="background: #e9ebee">
                                            <button type="button" class="btn" style="background: #67bc00;color: #fff" data-dismiss="modal">Crear</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                {{-- <a href="#" class="primary-btn header-btn text-uppercase mt-10">Sacar cita </a> --}}
                                <a href="#" class="primary-btn header-btn text-uppercase mt-10">Ver historia clinica </a>
                            </div>                                     
                        </div>
                    </div>
            </section>
<!-- End banner Area -->
{{-- @endforeach --}}

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
<!-- Welcome Section -->
<div class="welcome-section other-services container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Bienvenidos a FREIMO
                <br>Centro de Fisioterapia y Rehabilitación
            </h3>
        </div>
        <!-- Section Header /- -->
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 our-clinic">
                <div class="row welcome-left">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="other-services-block">
                            <div class="services-block-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="other-services-content">
                                <h5>Médicos Cualificados</h5>
                                <p>
                                    Nuestros médicos altamente capacitados aseguran la mejor atención.
                                    Personalizamos su tratamiento para satisfacer sus necesidades.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="other-services-block">
                            <div class="services-block-icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="other-services-content">
                                <h5>Alta tecnología</h5>
                                <p>
                                    Utilizamos equipos de última tecnología para obtener resultados óptimos.
                                    Ofrecemos una amplia gama de servicios de fisioterapia y rehabilitación.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="other-services-block">
                            <div class="services-block-icon">
                                <i class="fa fa-phone-square"></i>
                            </div>
                            <div class="other-services-content">
                                <h5>Cómodas y modernas instalaciones</h5>
                                <p>
                                    Disfrute de nuestras cómodas instalaciones en su proceso.
                                    Nos enorgullece nuestra atención amable y paciente centrada.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="other-services-block">
                            <div class="services-block-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="other-services-content">
                                <h5>Enfoque en resultados garantizados</h5>
                                <p>
                                    Resultados comprobados, nuestra prioridad es su bienestar.
                                    Nuestro objetivo es ayudarlo a alcanzar una recuperación completa y sostenible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 clinic-form">
                <form class="appoinment-form">
                    <h5>
                        <i class="fa fa-calendar-check-o"></i>Agenda una Cita
                    </h5>
                    <p>Recibiremos su solicitud y nos contactermos con usted para coordinar el proceso hacia su completa recuperación.</p>
                    <div class="form-group col-md-12 no-padding">
                        <input type="text" class="form-control" placeholder="Nombre completo" id="patient_name" name="patient-name" />
                    </div>
                    <div class="form-group col-md-12 no-padding">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" id="patient_email" name="patient-email" />
                    </div>
                    <div class="form-group col-md-12 no-padding">
                        <input type="text" class="form-control" placeholder="Teléfono o whatsapp" id="patient_phone" name="patient-phone" />
                    </div>
                    <div class="form-group input-group col-md-12 no-padding">
                        <div class="col-md-7 col-sm-8 col-xs-8 no-padding">
                            <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                                <div class="date" id="datetimepicker1">
                                    <input type="text" class="form-control" id="patient_date" name="patient-date" placeholder="Day" />
                                    <span class="fa fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                                <select class="selectpicker" id="patient_time" name="patient-time">
                                    <option>Hora</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-4 col-xs-4 no-padding">
                            <select class="selectpicker" id="patient_department" name="patient-department">
                                <option>Area</option>
                                <option>Consulta</option>
                                <option>Rehabilitación</option>
                                <option>Administración</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                        <textarea rows="4" class="form-control" placeholder="Su mensaje..." id="patient_message" name="patient-message"></textarea>
                    </div>
                    <button type="submit" id="appointment_submit" class="btn-submit pull-right">
                        <i class="fa fa-heart-o"></i>Enviar
                    </button>
                    <div id="appointment-alert-msg" class="alert-msg"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container /- -->
</div>
<!-- Welcome Section /- -->
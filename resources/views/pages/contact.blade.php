@extends('master.master')

@section('css')

<link rel="stylesheet" type="text/css" href="styles/contact.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="styles/contact_responsive.css"
    />
@endsection
    @section('body')
      <!-- Home -->

      <div class="home">
        <div class="breadcrumbs_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="breadcrumbs">
                  <ul>
                    <li><a href="index">Home</a></li>
                    <li>Contact</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact -->

      <div class="contact">
        <!-- Contact Map -->

        <div class="contact_map">
          <!-- Google Map -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17033.412111110338!2d-100.42869031519243!3d20.835586812565214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d4a626e79f1fc9%3A0xdda7c4672995c724!2sPolit%C3%A9cnica%20de%20Santa%20Rosa!5e1!3m2!1ses!2smx!4v1731358115825!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Contact Info -->

        <div class="contact_info_container">
          <div class="container">
            <div class="row">
              <!-- Contact Form -->
              <div class="col-lg-6">
                <div class="contact_form">
                  <div class="contact_info_title">Contact Form</div>
                  <form action="#" class="comment_form">
                    <div>
                      <div class="form_title">Name</div>
                      <input
                        type="text"
                        class="comment_input"
                        required="required"
                      />
                    </div>
                    <div>
                      <div class="form_title">Email</div>
                      <input
                        type="text"
                        class="comment_input"
                        required="required"
                      />
                    </div>
                    <div>
                      <div class="form_title">Message</div>
                      <textarea
                        class="comment_input comment_textarea"
                        required="required"
                      ></textarea>
                    </div>
                    <div>
                      <button type="submit" class="comment_button trans_200">
                        submit now
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Contact Info -->
              <div class="col-lg-6">
                <div class="contact_info">
                  <div class="contact_info_title">Contact Info</div>
                  <div class="contact_info_text">
                    <p>
                    Get in touch with the Universidad Politécnica de Santa Rosa Jáuregui to learn more about our academic programs, innovative BIS Model, and commitment to sustainability and inclusivity. We're here to answer your questions and assist you. Connect with us today to discover everything UPSRJ has to offer!
                    </p>
                  </div>
                  <div class="contact_info_location">
                    <div class="contact_info_location_title">
                      Queretaro
                    </div>
                    <ul class="location_list">
                      <li>Carretera Federal 57, km 31+150, S/N Santa Rosa Jáuregui, 76220 Santiago de Querétaro, Qro.</li>
                      <li>+52 442-123-1234</li>
                      <li>upsrj@upsrj.edu.mx</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection


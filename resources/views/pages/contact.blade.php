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

          <div class="map">
            <div id="google_map" class="google_map">
              <div class="map_container">
                <div id="map"></div>
              </div>
            </div>
          </div>
        </div>

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
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking
                      at its layout. The point of using Lorem Ipsum is that it
                      has a distribution of letters.
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

      @section('js')
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="plugins/marker_with_label/marker_with_label.js"></script>
    <script src="js/contact.js"></script>
      @endsection
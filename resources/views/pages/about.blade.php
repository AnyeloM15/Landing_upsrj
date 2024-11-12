

@extends('master.master')

@section('css')
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
@endsection

@section('body')
      <div class="home">
        <div class="breadcrumbs_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="breadcrumbs">
                  <ul>
                    <li><a href="index">Home</a></li>
                    <li>About</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- About -->

      <div class="about">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <h2 class="section_title">Welcome To UPSRJ</h2>
                <div class="section_subtitle">
                  <p>
                    The first bilingual university in Querétaro, Mexico.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row about_row">
            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_left">
              <div class="about_item">
                <div class="about_item_image">
                  <img src="images/about_1.jpg" alt="" />
                </div>
                <div class="about_item_title"><a href="#">We are bilingual</a></div>
                <div class="about_item_text">
                  <p>
                  Our bilingual curriculum immerses students in a second language from the start, with courses mainly taught in English or Spanish. An intensive language program in the first semester and ongoing reinforcement ensure graduates are fluent.
                  </p>
                </div>
              </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_middle">
              <div class="about_item">
                <div class="about_item_image">
                  <img src="images/about_2.jpg" alt="" />
                </div>
                <div class="about_item_title"><a href="#">We are international</a></div>
                <div class="about_item_text">
                  <p>
                  Internationalization is integral to our campus life. Students can undertake internships abroad, benefit from visiting lecturers, and participate in joint research with global institutions, all aimed at fostering a world-ready education.
                  </p>
                </div>
              </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_right">
              <div class="about_item">
                <div class="about_item_image">
                  <img src="images/about_3.jpg" alt="" />
                </div>
                <div class="about_item_title"><a href="#">We are sustainable</a></div>
                <div class="about_item_text">
                  <p>
                  Sustainability guides every part of our mission. Our Sustainable University model promotes education that raises awareness, encourages eco-friendly practices, and prepares students to make informed, positive environmental impacts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature -->

      <div class="feature">
        <div
          class="feature_background"
          style="background-image: url(images/courses_background.jpg)"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <h2 class="section_title">Why Choose Us</h2>
                <div class="section_subtitle">
                  <p>
                    Thanks to its Bilingual, International and Sustainable model, studying with us is to widen your opportunities and to be part of a global community. Enhance your habilities, expand your knowledge and get ready to take your place in the future and fulfill all of your professional goals.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row feature_row">
            <!-- Feature Content -->
            <div class="col-lg-6 feature_col">
              <div class="feature_content">
                <!-- Accordions -->
                <div class="accordions">
                  <div class="elements_accordions">
                    <div class="accordion_container">
                      <div class="accordion d-flex flex-row align-items-center">
                        <div style="font-size: 11pt">Avant-garde and Competent University</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          -
                        </p>
                      </div>
                    </div>

                    <div class="accordion_container">
                      <div
                        class="accordion d-flex flex-row align-items-center active"
                      >
                        <div style="font-size: 11pt">Bilingual Learners Today, World Citizens Tomorrow</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          -
                        </p>
                      </div>
                    </div>

                    <div class="accordion_container">
                      <div class="accordion d-flex flex-row align-items-center">
                        <div style="font-size: 11pt">Inclusive model supporting all kinds of students</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          -
                        </p>
                      </div>
                    </div>

                    <div class="accordion_container">
                      <div class="accordion d-flex flex-row align-items-center">
                        <div style="font-size: 11pt">International scholarships to study and learn abroad</div>
                      </div>
                      <div class="accordion_panel">
                        <p>
                          -
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Accordions End -->
              </div>
            </div>

            <!-- Feature Video -->
            <div class="col-lg-6 feature_col">
              <div
                class="feature_video d-flex flex-column align-items-center justify-content-center"
              >
                <div
                  class="feature_video_background"
                  style="background-image: url(images/video1.jpg)"
                ></div>
                <a
                  class="vimeo feature_video_button"
                  href="https://youtu.be/MDGzhbQ349s?si=fJ-q1OTQteUicQJe"
                  title="OH, PORTUGAL - IN 4K - Basti Hansen - Stock Footage"
                >
                  <img src="images/play.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Counter -->

      <div class="counter">
        <div
          class="counter_background"
          style="background-image: url(images/counter_background.jpg)"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="counter_content">
                <h2 class="counter_title">Register Now</h2>
                <div class="counter_text">
                  <p>
                  Join a community dedicated to innovation, global awareness, and sustainability. At [University Name], you’ll gain the skills, knowledge, and experiences needed to excel in today’s fast-paced world. Whether you're interested in technology, science, the arts, or sustainable practices, we offer a supportive environment with international opportunities and a bilingual education designed to make you stand out.
                  </p>
                </div>

                <!-- Milestones -->

                <div
                  class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between"
                >
                  <!-- Milestone -->
                  <div class="milestone">
                    <div class="milestone_counter" data-end-value="15">0</div>
                    <div class="milestone_text">years</div>
                  </div>

                  <!-- Milestone -->
                  <div class="milestone">
                    <div
                      class="milestone_counter"
                      data-end-value="120"
                      data-sign-after="k"
                    >
                      0
                    </div>
                    <div class="milestone_text">students</div>
                  </div>

                  <!-- Milestone -->
                  <div class="milestone">
                    <div
                      class="milestone_counter"
                      data-end-value="670"
                      data-sign-after="+"
                    >
                      0
                    </div>
                    <div class="milestone_text">teachers</div>
                  </div>

                  <!-- Milestone -->
                  <div class="milestone">
                    <div class="milestone_counter" data-end-value="6">0</div>
                    <div class="milestone_text">courses</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="counter_form">
            <div class="row fill_height">
              <div class="col fill_height">
                <form
                  class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                  action="#"
                >
                  <div class="counter_form_title">contact now</div>
                  <input
                    type="text"
                    class="counter_input"
                    placeholder="Your Name:"
                    required="required"
                  />
                  <input
                    type="tel"
                    class="counter_input"
                    placeholder="Phone:"
                    required="required"
                  />
                  <select
                    name="counter_select"
                    id="counter_select"
                    class="counter_input counter_options"
                  >
                    <option>Choose Subject</option>
                    <option>Admission</option>
                    <option>Information</option>  
                  </select>
                  <textarea
                    class="counter_input counter_text_input"
                    placeholder="Message:"
                    required="required"
                  ></textarea>
                  <button type="submit" class="counter_form_button">
                    submit now
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Partners -->

      <div class="partners">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="partners_slider_container">
                <div class="owl-carousel owl-theme partners_slider">
                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_1.png" alt="" />
                  </div>

                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_2.png" alt="" />
                  </div>

                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_3.png" alt="" />
                  </div>

                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_4.png" alt="" />
                  </div>

                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_5.png" alt="" />
                  </div>

                  <!-- Partner Item -->
                  <div class="owl-item partner_item">
                    <img src="images/partner_6.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@extends('master.master')

@section('css')

<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
<link rel="stylesheet" type="text/css" href="styles/responsive.css" />

@endsection
@section('body')
<!-- Home -->
<div class="home">
  <div class="home_slider_container">
    <div
      class="home_slider_background"
      style="background-image: url(images/home_slider.jpg)"
    ></div>
    <div class="home_slider_content">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="home_slider_title" style="color: white;">
              UPSRJ
            </div>
            <div class="home_slider_subtitle" style="color: white;">
              BIS university
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
    <!-- Features -->

    <div class="features">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="section_title">Welcome To UPSRJ</h2>
              <div class="section_subtitle">
                <p>
                  Discover a university that combines expert faculty, world-class resources, and a supportive learning environment to help you reach your goals.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row features_row">
          <!-- Features Item -->
          <div class="col-lg-3 feature_col">
            <div class="feature text-center trans_400">
              <div class="feature_icon">
                <img src="images/icon_1.png" alt="" />
              </div>
              <h3 class="feature_title">The Experts</h3>
              <div class="feature_text">
                <p>Learn from experienced professionals and researchers who are leaders in their fields and dedicated to your success.
                </p>
              </div>
            </div>
          </div>

          <!-- Features Item -->
          <div class="col-lg-3 feature_col">
            <div class="feature text-center trans_400">
              <div class="feature_icon">
                <img src="images/icon_2.png" alt="" />
              </div>
              <h3 class="feature_title">Book & Library</h3>
              <div class="feature_text">
                <p>Access an extensive library with both physical and digital resources to support your studies and fuel your curiosity.
                </p>
              </div>
            </div>
          </div>

          <!-- Features Item -->
          <div class="col-lg-3 feature_col">
            <div class="feature text-center trans_400">
              <div class="feature_icon">
                <img src="images/icon_3.png" alt="" />
              </div>
              <h3 class="feature_title">Best Courses</h3>
              <div class="feature_text">
                <p>Choose from a range of programs that combine practical skills with academic excellence to prepare you for a successful career.
                </p>
              </div>
            </div>
          </div>

          <!-- Features Item -->
          <div class="col-lg-3 feature_col">
            <div class="feature text-center trans_400">
              <div class="feature_icon">
                <img src="images/icon_4.png" alt="" />
              </div>
              <h3 class="feature_title">Award & Reward</h3>
              <div class="feature_text">
                <p>Earn recognition for your achievements through various scholarships, awards, and honors that celebrate excellence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Popular Courses -->

    <div class="courses">
      <div
        class="section_background parallax-window"
        data-parallax="scroll"
        data-image-src="images/courses_background.jpg"
        data-speed="0.8"
      ></div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="section_title">Our careers</h2>
              <div class="section_subtitle">
                <p>
                  These are the careers that we offer. Choose the one that best suits your interests and start your journey to success.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row courses_row">
          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/isw_logo.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="course.html">Software Training</a>
                </h3>
                <div class="course_teacher"></div>
                <div class="course_text">
                  <p>
                    Our Software Training program is designed to provide students with the skills and knowledge to become a successful software developer.
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div
                  class="course_footer_content d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="course_info">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>20 Student</span>
                  </div>
                  <div class="course_info">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5 Ratings</span>
                  </div>
                  <div class="course_price ml-auto">$130</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/iaev.png" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="course.html">Animation and visual effects</a>
                </h3>
                <div class="course_teacher">Ms. Lucius</div>
                <div class="course_text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipi elitsed do
                    eiusmod tempor
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div
                  class="course_footer_content d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="course_info">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>20 Student</span>
                  </div>
                  <div class="course_info">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5 Ratings</span>
                  </div>
                  <div class="course_price ml-auto">Free</div>
                </div>
              </div>
            </div>
          </div>
        

          <!-- Course -->
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="images/irc.png " alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="course.html">Starting a Startup</a>
                </h3>
                <div class="course_teacher">Mr. Charles</div>
                <div class="course_text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipi elitsed do
                    eiusmod tempor
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div
                  class="course_footer_content d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="course_info">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>20 Student</span>
                  </div>
                  <div class="course_info">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5 Ratings</span>
                  </div>
                  <div class="course_price ml-auto">
                    <span>$320</span>$220
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="courses_button trans_200">
              <a href="courses">view all courses</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Events -->

    <div class="events">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="section_title">Upcoming events</h2>
              <div class="section_subtitle">
                <p>
                  Take part on the events that we have prepared for you. We are expecting a lot of people so invite all your friends and relatives so that they get to know what we do and have a good time!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row events_row">
          <!-- Event -->
          <div class="col-lg-4 event_col">
            <div class="event event_left">
              <div class="event_image">
                <img src="images/evento1.jpg" alt="" />
              </div>
              <div
                class="event_body d-flex flex-row align-items-start justify-content-start"
              >
                <div class="event_date">
                  <div
                    class="d-flex flex-column align-items-center justify-content-center trans_200"
                  >
                    <div class="event_day trans_200">20</div>
                    <div class="event_month trans_200">Sep</div>
                  </div>
                </div>
                <div class="event_content">
                  <div class="event_title">
                    <a href="#">All Terrain 8th Ed.</a>
                  </div>
                  <div class="event_info_container">
                    <div class="event_info">
                      <i class="fa fa-clock-o" aria-hidden="true"></i
                      ><span>11.00 - 16.30</span>
                    </div>
                    <div class="event_info">
                      <i class="fa fa-map-marker" aria-hidden="true"></i
                      ><span>UPSRJ</span>
                    </div>
                    <div class="event_text">
                      <p>
                        Excinting racing event where several universities get to participate to conquer all the terrains...
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Event -->
          <div class="col-lg-4 event_col">
            <div class="event event_mid">
              <div class="event_image">
                <img src="images/event_2.jpg" alt="" />
              </div>
              <div
                class="event_body d-flex flex-row align-items-start justify-content-start"
              >
                <div class="event_date">
                  <div
                    class="d-flex flex-column align-items-center justify-content-center trans_200"
                  >
                    <div class="event_day trans_200">01</div>
                    <div class="event_month trans_200">Nov</div>
                  </div>
                </div>
                <div class="event_content">
                  <div class="event_title">
                    <a href="#"
                      >Fall Fest 2024</a
                    >
                  </div>
                  <div class="event_info_container">
                    <div class="event_info">
                      <i class="fa fa-clock-o" aria-hidden="true"></i
                      ><span>09.00 - 18.00</span>
                    </div>
                    <div class="event_info">
                      <i class="fa fa-map-marker" aria-hidden="true"></i
                      ><span>UPSRJ</span>
                    </div>
                    <div class="event_text">
                      <p>
                        Amusing event where we gather to celebrate the fall season. There will be food, music, costume contest & more...
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Event -->
          <div class="col-lg-4 event_col">
            <div class="event event_right">
              <div class="event_image">
                <img src="images/evento3.jpg" alt="" />
              </div>
              <div
                class="event_body d-flex flex-row align-items-start justify-content-start"
              >
                <div class="event_date">
                  <div
                    class="d-flex flex-column align-items-center justify-content-center trans_200"
                  >
                    <div class="event_day trans_200">20</div>
                    <div class="event_month trans_200">Nov</div>
                  </div>
                </div>
                <div class="event_content">
                  <div class="event_title">
                    <a href="#">Techonolgy / Health / Humanities Colloquium</a>
                  </div>
                  <div class="event_info_container">
                    <div class="event_info">
                      <i class="fa fa-clock-o" aria-hidden="true"></i
                      ><span>14.00 - 18.00</span>
                    </div>
                    <div class="event_info">
                      <i class="fa fa-map-marker" aria-hidden="true"></i
                      ><span>Bloque Qro</span>
                    </div>
                    <div class="event_text">
                      <p>
                        A series of conferences where we will discuss the latest advances in technology, health and humanities.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Latest News -->

    <div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Latest news</h2>
                    <div class="section_subtitle">
                        <p>
                            Stay up to date to what is relevant to our community. Read our newsletter and share it with your friends so that none of you misses out on the latest news.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row news_row">
    <!-- Post Destacado -->
    @if($news->isNotEmpty())
            <div class="col-lg-7 news_col">
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image">
                            <img src="{{ asset($news[0]->image) }}" alt="{{ $news[0]->title }}" />
                        </div>
                        <div class="news_post_large_title">
                            <a href="{{ route('news.show', $news[0]->id) }}">{{ $news[0]->title }}</a>
                        </div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">{{ $news[0]->author ?? 'Admin' }}</a></li>
                                <li><a href="#">{{ $news[0]->created_at->format('F d, Y') }}</a></li>
                            </ul>
                        </div>
                        <div class="news_post_text">
                            <p>{{ Str::limit($news[0]->content, 150) }}</p>
                        </div>
                        <div class="news_post_link">
                            <a href="{{ route('news.show', $news[0]->id) }}">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Posts Pequeños -->
        <div class="col-lg-5 news_col">
                <div class="news_posts_small">
                    @foreach($news->slice(1, 4) as $post)
                        <div class="news_post_small">
                            <div class="news_post_small_title">
                                <a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a>
                            </div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">{{ $post->author ?? 'Admin' }}</a></li>
                                    <li><a href="#">{{ $post->created_at->format('F d, Y') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center">No hay noticias disponibles.</p>
        @endif
    </div>
</div>

@endsection
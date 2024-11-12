@extends('master.master')

@section('css')
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
								<li><a href="index.html">Home</a></li>
								<li>Courses</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Search Courses" required="required">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>All Categories</option>
								<option>Category</option>
								<option>Category</option>
								<option>Category</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">search now</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_4.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="">Software Engineering </a></h3>
										<div class="course_teacher">PhD Juan Antonio Cruz Mandujano
										</div>
										<div class="course_text">
											<p>Software engineering is a field that involves the application of engineering principles to the design, development, maintenance, testing, and evaluation of software and systems.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="https://upsrj.edu.mx/wp-content/uploads/2023/02/pexels-pavel-danilyuk-8294594-1.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Computational Robotics Engineering</a></h3>
									
										<div class="course_text">
											<p>Computational Robotics Engineering focuses on the design, construction, operation, and application of robots, integrating computer science and engineering principles.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="https://upsrj.edu.mx/wp-content/uploads/2019/10/Animacion-y-Efectos-Visuales_02.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Animation and Visual Effects Engineering</a></h3>
									
										<div class="course_text">
											<p>Animation and Visual Effects Engineering involves creating visual content for various media using computer-generated imagery and other techniques.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>1 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="https://upsrj.edu.mx/wp-content/uploads/2019/10/Automitrices.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Automotive Engineering</a></h3>
										
										<div class="course_text">
											<p>Automotive Engineering is dedicated to the design, development, and manufacturing of vehicles, including cars, trucks, and motorcycles.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="https://upsrj.edu.mx/wp-content/uploads/2019/10/Metrologia_Header.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Metrology Engineering</a></h3>
									
										<div class="course_text">
											<p>Metrology Engineering focuses on the science of measurement, ensuring accuracy and precision in various fields such as manufacturing and research.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="https://upsrj.edu.mx/wp-content/uploads/2019/10/Terapia_Fisica_Header.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Phisyotherapy Bachelor</a></h3>
										
										<div class="course_text">
											<p>Physiotherapy Bachelor focuses on the treatment of physical impairments and disabilities through therapeutic exercises and interventions.</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Categories</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="#">Art & Design (IAEV)</a></li>
									<li><a href="#">Physio teraphy (LTF)</a></li>
									<li><a href="#">Software Engineering (ISW)</a></li>
									<li><a href="#">Robotic (IRC)</a></li>
									<li><a href="#">Automotive (ISA)</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Courses</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
										<div class="latest_price">$</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">HTML and CSS for Beginners Masterclass</a></div>
										<div class="latest_price">$</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Robotics 101</a></div>
										<div class="latest_price">$</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Gallery -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Instagram</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_1_large.jpg">
											<img src="https://i0.wp.com/www.periodicodebatepolitico.com.mx/wp-content/uploads/2024/09/Abre-UPSRJ-convocatoria-de-admision-el-10-de-septiembre.jpeg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_2_large.jpg">
											<img src="https://super9.com.mx/wp-content/uploads/2024/01/71_273_43344_798185303__01_UPSRJ_Convocatoria-1080x675.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_3_large.jpg">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMHy1NXVYY8dNYyA4iq4U4qby7OEK29iDYzw&s" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_4_large.jpg">
											<img src="https://okeyqueretaro.mx/wp-content/uploads/2023/07/la-UPSRJ.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_5_large.jpg">
											<img src="https://sonperfiles.com/_next/image?url=https%3A%2F%2Fadmin.sonperfiles.com%2Fwp-content%2Fuploads%2F2023%2F01%2FUPSRJ.jpg&w=1080&q=75" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/gallery_6_large.jpg">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb-EZJn68vXovBBd3oQlAIqAqj4jFUO31DNg&s" alt="">
										</a>
									</li>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
@endsection
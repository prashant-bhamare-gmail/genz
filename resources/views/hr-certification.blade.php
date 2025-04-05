@extends('master')
@section('content')

<div role="main" class="main">

				<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold text-9 text-color-secondary appear-animation" 
								data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">HR Certification</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<li><a href="{{ url('/')}}">Home</a></li>
									<li class="active">HR Certification</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<div class="container py-2">
				<div class="row pb-4">

						<div class="col mb-4 mb-lg-0">

							<h4>Top 20 – HR Courses available </h4>
							<div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion200">
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false" aria-controls="collapse200One">
												1.	Human Resource Management Certification (IIM Calcutta)
											</a>
										</h4>
									</div>
									<div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
											<p class="mb-0">
											<strong>Description:</strong> This certification, offered by the prestigious Indian Institute of Management, 
												focuses on HR management, talent acquisition, and performance management.
											</p>
											<a href="https://www.iimcal.ac.in/" target="_blank">Link: IIM Calcutta HR Management</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Two" aria-expanded="false" aria-controls="collapse200Two">
												2 Post Graduate Diploma in HR Management (XLRI Jamshedpur)
											</a>
										</h4>
									</div>
									<div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
											<p class="mb-0">
											<strong>Description:</strong> This is one of India's most recognized HR certifications, focusing on leadership and 
											HR strategy.	
											</p>
											<a href="https://www.xlri.ac.in/" target="_blank">XLRI Jamshedpur HR Certification</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Three" aria-expanded="false" aria-controls="collapse200Three">
												3 - HR Analytics Certification (Coursera)
											</a>
										</h4>
									</div>
									<div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> Coursera offers courses in HR analytics, which helps HR professionals make data-driven decisions.	
											</p>
											<a href="https://www.coursera.org/" target="_blank">Coursera HR Analytics</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFour">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Four" aria-expanded="false" aria-controls="collapse200Four">
												4 - Certified Compensation Professional (CCP)
											</a>
										</h4>
									</div>
									<div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> Offered by WorldatWork, this certification specializes in compensation and benefits management.
											</p>
											<a href="https://worldatwork.org/" target="_blank">WorldatWork CCP</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Five" aria-expanded="false" aria-controls="collapse200Five">
												5 - Talent Management Certification (TMI Academy)
											</a>
										</h4>
									</div>
									<div id="collapse200Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> The Talent Management Institute offers this certification for professionals seeking to enhance their talent management skills.
											</p>
											<a href="https://www.tmi.org.in/" target="_blank">TMI Talent Management</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200six" aria-expanded="false" aria-controls="collapse200six">
												6 - Employee Relations Certification (HR Certification Institute)
											</a>
										</h4>
									</div>
									<div id="collapse200six" class="collapse" aria-labelledby="collapse1Headingsix" data-bs-parent="#accordion200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> A specialized certification focusing on managing employee relations and organizational culture.
											</p>
											<a href="https://www.hrci.org/" target="_blank">HRCI Employee Relations</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200seven" aria-expanded="false" aria-controls="collapse200seven">
												7 - Certified HR Business Partner (HRBP)
											</a>
										</h4>
									</div>
									<div id="collapse200seven" class="collapse" aria-labelledby="collapse1Headingseven" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This certification is aimed at professionals who want to work as strategic HR business partners.
											</p>
											<a href="https://www.shrm.org/home" target="_blank">SHRM HRBP Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200eight" aria-expanded="false" aria-controls="collapse200eight">
												8 - Diploma in Human Resource Management (NIIT)
											</a>
										</h4>
									</div>
									<div id="collapse200eight" class="collapse" aria-labelledby="collapse1Headingeight" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> NIIT offers diploma courses that are ideal for aspiring HR managers, covering all major HR domains.
											</p>
											<a href="https://www.niit.com/india/" target="_blank">NIIT HR Management</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200nine" aria-expanded="false" aria-controls="collapse200nine">
												9 - International Certified Professional in Talent Development (CPTD)
											</a>
										</h4>
									</div>
									<div id="collapse200nine" class="collapse" aria-labelledby="collapse1Headingnine" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> A globally recognized certification that focuses on improving HR practices and employee development.
											</p>
											<a href="https://www.td.org/" target="_blank">CPTD Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200ten" aria-expanded="false" aria-controls="collapse200ten">
												10 - Certified Employee Benefit Specialist (CEBS)
											</a>
										</h4>
									</div>
									<div id="collapse200ten" class="collapse" aria-labelledby="collapse1Headingten" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> A certification that focuses on designing and managing employee benefits plans.
											</p>
											<a href="https://www.ifebp.org/cebs/home" target="_blank">CEBS Certification</a>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200eleven" aria-expanded="false" aria-controls="collapse200eleven">
												11 - HR Generalist Certification (UpGrad)
											</a>
										</h4>
									</div>
									<div id="collapse200eleven" class="collapse" aria-labelledby="collapse1Headingeleven" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This certification from UpGrad provides a strong foundation in HR processes and practices, from recruitment to employee engagement.
											</p>
											<a href="https://www.upgrad.com/" target="_blank">UpGrad HR Generalist</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200twelve" aria-expanded="false" aria-controls="collapse200twelve">
												12 - Certified Recruitment Specialist (CRS)
											</a>
										</h4>
									</div>
									<div id="collapse200twelve" class="collapse" aria-labelledby="collapse1Headingtwelve" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This course focuses on recruitment strategies, skills, and the psychology of hiring.
											</p>
											<a href="https://www.hrci.org/" target="_blank">HR Certification Institute CRS</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200thirteen" aria-expanded="false" aria-controls="collapse200thirteen">
												13 - Advanced Certification in HR Analytics (Talentedge)
											</a>
										</h4>
									</div>
									<div id="collapse200thirteen" class="collapse" aria-labelledby="collapse1Headingthirteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This certification focuses on how HR professionals can leverage data to make more informed HR decisions.
											</p>
											<a href="https://talentedge.in/" target="_blank">Talentedge HR Analytics</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200fourteen" aria-expanded="false" aria-controls="collapse200fourteen">
												14 - Digital HR Certification (Institute of Digital HR)
											</a>
										</h4>
									</div>
									<div id="collapse200fourteen" class="collapse" aria-labelledby="collapse1Headingfourteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This program covers the transformation of HR in the digital age, focusing on digital tools and strategies.
											</p>
											<a href="https://www.digitalhr.in/" target="_blank"> Digital HR Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200fifteen" aria-expanded="false" aria-controls="collapse200fifteen">
												15 - Certified Learning and Development Professional (CLDP)
											</a>
										</h4>
									</div>
									<div id="collapse200fifteen" class="collapse" aria-labelledby="collapse1Headingfifteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This program focuses on improving skills in learning and development, talent management, and succession planning.
											</p>
											<a href="https://www.nada.org/atd" target="_blank"> CLDP Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200fifteen" aria-expanded="false" aria-controls="collapse200fifteen">
												16 - Workplace Diversity and Inclusion Certification (Cornell University)
											</a>
										</h4>
									</div>
									<div id="collapse200fifteen" class="collapse" aria-labelledby="collapse1Headingfifteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This course focuses on building diverse and inclusive workplaces.
											</p>
											<a href="https://ecornell.cornell.edu/" target="_blank"> Cornell Workplace Diversity</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200seventeen" aria-expanded="false" aria-controls="collapse200seventeen">
												17 - Employee Experience Certification (EX Certification)
											</a>
										</h4>
									</div>
									<div id="collapse200seventeen" class="collapse" aria-labelledby="collapse1Headingseventeen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> This certification focuses on creating meaningful employee experiences and improving retention.
											</p>
											<a href="https://ex.co/" target="_blank"> EX Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200eightteen" aria-expanded="false" aria-controls="collapse200eightteen">
												18 - Strategic HR Leadership Certification (Harvard Extension School)
											</a>
										</h4>
									</div>
									<div id="collapse200eightteen" class="collapse" aria-labelledby="collapse1Headingeightteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> A certification for senior HR professionals focused on strategic HR leadership.
											</p>
											<a href="https://extension.harvard.edu/" target="_blank"> Harvard Extension HR</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200nintteen" aria-expanded="false" aria-controls="collapse200nintteen">
												19 - Global Professional in HR (GPHR)
											</a>
										</h4>
									</div>
									<div id="collapse200nintteen" class="collapse" aria-labelledby="collapse1Headingnintteen" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> Offered by HRCI, this certification is ideal for HR professionals working in global HR roles.
											</p>
											<a href="https://www.hrci.org/" target="_blank"> GPHR Certification</a>
										</div>
									</div>
								</div>

								<div class="card card-default">
									<div class="card-header" id="collapse200HeadingFive">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" 
											data-bs-target="#collapse200twenty" aria-expanded="false" aria-controls="collapse200twenty">
												20 - Workforce Planning and Employment Certification (HRCI)
											</a>
										</h4>
									</div>
									<div id="collapse200twenty" class="collapse" aria-labelledby="collapse1Headingtwenty" data-bs-parent="#collapse200">
										<div class="card-body pt-0">
										<p class="mb-0">
											<strong>Description:</strong> A specialized certification focused on workforce planning, including recruiting, talent acquisition, and retention strategies.
											</p>
											<a href="https://www.hrci.org/" target="_blank"> HRCI Workforce Planning</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>			

			</div>

@endsection
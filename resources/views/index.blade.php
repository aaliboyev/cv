@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="container gutter-top gutter-bottom">
            <div class="row sticky-parent">
                <!-- Sidebar -->
                @include('layouts.sidebar')

                <!-- Content -->
                <div class="col-12 col-md-12 col-xl-9">
                    <div class="box-outer">
                        <!-- Menu -->
                        <div class="nav-container">
                            <ul class="nav">
                                <li class="nav__item"><a class="active" href="/">About</a></li>
                                <li class="nav__item"><a href="/projects">Projects</a></li>
                                <li class="nav__item"><a href="/technologies">Technologies</a></li>
{{--                                <li class="nav__item"><a href="/contact">Contact</a></li>--}}
                            </ul>
                        </div>

                        <!-- About -->
                        <div class="pb-0 pb-sm-2">
                            <h1 class="title title--h1 title__separate">About Me</h1>
                            <p style="text-align: justify; text-indent: 20px">Looking for a web developer who is proactive, full-stack, and knows how to bring the humor? Look no further! With over 5 years of experience developing web applications and SPA's, I specialize in back-end development and I'm always ready for a challenge. I'm well-versed in numerous programming languages, including PHP, JavaScript, Python, and MySQL, and I'm not afraid to dive into cloud computing infrastructures like AWS and GCP.</p>

                            <p style="text-align: justify; text-indent: 20px">I'm your go-to guy for all stages of the development cycle, whether it's designing and coding an app from scratch or troubleshooting and fixing bugs. I have a strong background in popular frameworks like Laravel, Flask, React, and Vue JS. But don't let all that technical talk fool you, I also have experience in finance and insurance, so I know how to make the numbers work.</p>

                            <p style="text-align: justify; text-indent: 20px">When I'm not coding up a storm, I'm a data science and artificial intelligence enthusiast. I'm always looking for new ways to optimize expenses for businesses and to make life easier. So, if you're looking for a developer who can bring the laughs and the expertise, look no further!</p>
                        </div>

                        <!-- What -->
                        <h2 class="title title--h2 mt-3">What I Do</h2>
                        <div class="row">
                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-design.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">Backend Development</h3>
                                        <p class="case-item__caption">Craft meticulously documented open APIs, establish robust database structures and relations, and produce codebases that are of the highest quality, readability, and stability.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-dev.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">Frontend Development</h3>
                                        <p class="case-item__caption">Create rapid and optimized web applications that harness the power of various cutting-edge technologies and frameworks, such as Single-Page Applications (SPA), Server-Side Rendering (SSR), and Static Site Generation (SSG).</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-devops.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">DevOps</h3>
                                        <p class="case-item__caption">Design, configure and deploy scalable environments for a wide range of applications. With proficiency in cloud service providers such as AWS and GCP, Build highly optimized cloud infrastructure for improved performance and cost-effectiveness.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-db.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">Design Databases</h3>
                                        <p class="case-item__caption">Deep experience MySQL, PostgreSQL, Elasticsearch, MongoDB, Redis, and some vector databases. With my expertise, I design and implement high-performance, reliable database systems that have positively impacted multiple projects.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About -->
                        <h2 class="title title--h2 mt-3">Education & Experience</h2>

                        <!-- Experience -->
                        <h2 class="title title--h2"><span class="box icon-box"><i class="font-icon feathericon-book-open"></i></span>Education</h2>
                        <div class="timeline">
                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Professional Data Science Course of Skillfactory Online School</h5>
                                <span class="timeline__period">2020 - 2022</span>
                                <p class="timeline__description">The Data Science professional course I completed at
                                    SkillFactory provided me with a comprehensive understanding of data science tools
                                    and machine learning algorithms. During the course, I acquired practical skills in
                                    data engineering, data collection, data cleaning, and large-scale dataset management,
                                    along with deploying models to production. With this expertise, I am confident in my
                                    ability to solve complex data challenges and deliver insights that drive business value.</p>
                            </article>
                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Tashkent State University of Economics</h5>
                                <span class="timeline__period">2019 - 2023</span>
                                <p class="timeline__description">I am currently a 4th-grade student at the Corporate
                                    Governance Faculty of TSUE, pursuing a specialization in Corporate Governance.
                                    My academic interests include asset and risk management, as well as the dynamic
                                    relationships between shareholders and board members. I am committed to continuous
                                    learning and professional growth, and I am excited to apply my knowledge to real-world
                                    challenges in the field of corporate governance.</p>
                            </article>
                        </div>

                        <h2 class="title title--h2"><span class="box icon-box"><i class="font-icon feathericon-briefcase"></i></span>Experience</h2>
                        <div class="timeline">
                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Software Engineering Lead at YoFi.ai</h5>
                                <span class="timeline__period">2021 — Present</span>
                                <p class="timeline__description">I was part of a professional ML Engineers team at Yofi.ai, where I had the opportunity to work on the development of Machine Learning algorithms trained on over 100,000 unique orders to identify customers. My contributions also extended to building serverless applications and APIs infrastructure in AWS, where I ensured the high availability and reliability of our services. Drawing on my experience with Airflow and PySpark task coding, I helped optimize our workloads and codebase, which led to significant improvements in efficiency and performance.
                                </p>


                                <p class="timeline__description">
                                    In addition to my technical contributions, I actively provided ideas and suggestions to the team on how to further optimize our API and infrastructure. I believe that my contributions in this area were an important part of our team's success in delivering innovative solutions to complex problems in the field of Machine Learning and Cloud Computing. Being a part of this team was an enriching experience that allowed me to further develop my skills and knowledge in these areas.
                                </p>
                            </article>

                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Senior Software Engineer</h5>
                                <span class="timeline__period">2019 — 2022</span>
                                <p class="timeline__description">At i-edu.uz, I had the opportunity to work on innovative solutions for online learning systems and platforms for learning management systems. I was involved in the development and maintenance of a platform called "scienceweb.uz," which aims to collect published scientific research papers, books, and monographs and optimize them for the global community. In this role, I served as the creator, senior architect, and maintainer of the platform.</p>
                            </article>

                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Assistant of Manager at GROSS Insurance LLC</h5>
                                <span class="timeline__period">2010 — 2020</span>
                                <p class="timeline__description">At Gross Insurance JSC, I verified insurance coverage for physician-ordered items and managed authorizations, referrals, and pre-certs. In this role, I used my coding skills to develop several software solutions that simplified our daily routine work and improved our team's productivity. These solutions allowed us to streamline our workflows, saving time and resources.</p>

                                <p class="timeline__description">Through this experience, I developed expertise in navigating complex insurance systems and regulations, while also honing my software development skills. By combining these two skill sets, I was able to create effective and efficient solutions that helped our team operate more effectively.</p>
                            </article>
                        </div>
                        <div class="testimonials">
                            <h2 class="title title--h2 mt-3">Testimonials</h2>

                            <div class="swiper-container js-carousel-review">
                                <div class="swiper-wrapper">
                                    <!-- Item review -->
                                    <div class="swiper-slide review-item box box-inner js-open-review" data-mfp-src="#review-1" data-effect="mfp-zoom-out">
                                        <figure class="box box-avatar">
                                            <img src="{{ asset('images/avatar-1.png') }}" alt="Jordan Shamir">
                                        </figure>
                                        <h4 class="title title--h3">Jordan Shamir</h4>
                                        <p style="font-size: 12px">Co-Founder of yofi.ai <br>
                                            Ex Senior Product Manager at IBM
                                        </p>
                                        <p class="review-item__caption">Abror is a talented and driven individual! He has an incredible ability to take complicated problems and solve them quickly. He loves jumping into challenges and learning new technologies; for example, he has worked on lambdas, elasticsearch, and microservices for us. I always feel confident when Abror is assigned a task, as I know it will be meticulously accomplished. Abror is a talented engineer with a sharp mind for business. We are lucky to work with him because he makes a significant impact on our organization every day!</p>
                                    </div>

                                    <!-- Item review -->
                                    <div class="swiper-slide review-item box box-inner js-open-review" data-mfp-src="#review-2" data-effect="mfp-zoom-out">
                                        <figure class="box box-avatar">
                                            <img src="{{ asset('images/avatar-2.png') }}" alt="Alex Shamir">
                                        </figure>
                                        <h4 class="title title--h3">Alex Shamir</h4>
                                        <p style="font-size: 12px">Co-Founder of yofi.ai <br>
                                            Ex Technical Product Manager at Apple <br>
                                            Ex Senior Product Manager at Nike
                                        </p>

                                        <p class="review-item__caption">Abror is top-tier! Not only does he put his heart and soul into every project, but he also shows up motivated and ready to perform the most challenging task. He can see the whole picture and specific small backend features to help future stability and reduce tech debt. He works so well with design and product -- he can iterate through design ideas to future product roadmaps. He is an influential engineer, collaborator, and talented individual. We are fortunate to work with him! </p>
                                    </div>

                                    <!-- Item review -->
                                    <div class="swiper-slide review-item box box-inner js-open-review" data-mfp-src="#review-3" data-effect="mfp-zoom-out">
                                        <figure class="box box-avatar">
                                            <img src="{{ asset('images/avatar-1.png') }}" alt="Jordan Shamir">
                                        </figure>
                                        <h4 class="title title--h3">Matt Su</h4>
                                        <p style="font-size: 12px">Software Engineering Lead at yofi.ai <br>
                                            Ex Software Engineer at Shopee <br>
                                            Ex Software Engineer at Tencent <br>
                                        </p>
                                        <p class="review-item__caption">
                                            Abror has got talent for software engineering, and he has a very good sense of clean architecture and code.
                                            We work in team for backend services, and Abror always has good thoughts to improve the whole pipeline, while he also has the expertise of each microservice and data storage.
                                            He can always suggest a good solution when we meet problem and finish with confidence, that’s why I’m so proud that I work with him on the same software project!
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <!-- Skills -->
                        <h2 class="title title--h2 mt-3">My confidence at some soft skills </h2>
                        <div class="box box-inner mb-0">
                            <!-- Web Design -->
                            <div class="progress">
                                <div class="progress-text"><span>Spoken English 🇺🇸</span> 60%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <!-- Web Design -->
                            <div class="progress">
                                <div class="progress-text"><span>Problem Solving ✅</span> 75%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <!-- Web Design -->
                            <div class="progress">
                                <div class="progress-text"><span>Fast Learning new things 📖</span> 90%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <!-- Web Design -->
                            <div class="progress">
                                <div class="progress-text"><span>Responsibility ‼️</span> 95%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <div class="progress">
                                <div class="progress-text"><span>Communication and Joking 😁</span> 55%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <div class="progress">
                                <div class="progress-text"><span>Critical thinking ⁉️</span> 75%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <div class="progress">
                                <div class="progress-text"><span>Adaptability 🏢️</span> 47%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>

                            <div class="progress">
                                <div class="progress-text"><span>Time management ⏰️</span> 52%</div>
                                <div class="progress-bar"><span role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></span></div>
                            </div>
                        </div>
                    </div><!-- box-outer -->
                </div><!-- Content -->
            </div><!-- sticky-parent -->
        </div><!-- container -->
    </main>
@stop

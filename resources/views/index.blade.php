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
                            <p style="text-align: justify; text-indent: 20px">Proactive, full stack web developer with over 5 years of experience in development of
                                web applications, SPA's. Specializing in Back end development. Experienced with all
                                stages of the development cycle for dynamic web projects. Well-versed in numerous
                                programming languages including PHP, JavaScript, Python, MySQL. Also cloud computing
                                infrastructures such as AWS (SAM, SNS, SQS, DynamoDB, Neptune, CloudFront, EC2, S3,
                                etc…) and GCP (App Engine, VM, etc…), Strong background in popular frameworks such
                                as Laravel, Flask, React, Vue JS etc. Have an experience in finance and insurance. Also,
                                Data Science and artificial intelligence enthusiast. Interested in implementing AI
                                technologies in real life and business applications to optimize expenses of businesses and
                                reach better performance making life easier</p>
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
                                        <p class="case-item__caption">Build well documented open APIs, Database structure and relations, High quality, readable and stable codebase</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-dev.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">Frontend Development</h3>
                                        <p class="case-item__caption">Build fast and optimized web applications using different frameworks and technologies like SPA, SSR, SSG etc.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-devops.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">DevOps</h3>
                                        <p class="case-item__caption">Architect, configure and deploy scalable environments for any application using cloud service providers like AWS and GCP</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Case Item -->
                            <div class="col-12 col-lg-6">
                                <div class="case-item box box-inner">
                                    <img class="case-item__icon" src="{{ asset('icons/icon-db.svg') }}" alt="" />
                                    <div>
                                        <h3 class="title title--h3">Design Databases</h3>
                                        <p class="case-item__caption">Configure database structures for needs of application using MySQL PostgreSQL, Elasticsearch, MongoDB etc.</p>
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
                                <p class="timeline__description">Learned Data science tools and machine learning algorithms, data engineering, collecting and cleaning useful data managing large datasets and deploying to production.</p>
                            </article>
                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Tashkent State University of Economics</h5>
                                <span class="timeline__period">2019 - 2023</span>
                                <p class="timeline__description">4th grade Student of Corporate Governance Faculty at TSUE. Interested in Economic Theory, Asset and Risk management, Shareholder and Board of directors relations</p>
                            </article>
                        </div>

                        <h2 class="title title--h2"><span class="box icon-box"><i class="font-icon feathericon-briefcase"></i></span>Experience</h2>
                        <div class="timeline">
                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Software Engineering Lead at YoFi.ai</h5>
                                <span class="timeline__period">2021 — Present</span>
                                <p class="timeline__description">Worked in team of professional ML Engineers team which identifies customers using Machine Learning algorithms trained on 100 000+ of unique orders
                                </p>
                                <p class="timeline__description">Participated in building Serverless Applications and APIs infrastructure in AWS to serve API requests to our Services, handling failures, configuring SNS, SQS, DynamoDB, Neptune, developing SAM and many more other services.
                                </p>
                            </article>

                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Software Engineering Lead</h5>
                                <span class="timeline__period">2019 — 2022</span>
                                <p class="timeline__description">Collaborated with the senior web developers and system administrators team to clean up processes, boost performance, and reduce downtime on high load servers of our company. Delegate tasks to a 7- member design team and provide counsel on all aspects of the project</p>
                            </article>

                            <!-- Item -->
                            <article class="timeline__item">
                                <h5 class="title title--h4 timeline__title">Assistant of Manager at GROSS Insurance LLC</h5>
                                <span class="timeline__period">2010 — 2020</span>
                                <p class="timeline__description">Verified insurance coverage on physician-ordered items and obtained authorizations, referrals, and pre-certs as required. Managed up to 5 projects or tasks at a given time and ensured our team met its weekly deadlines</p>
                            </article>
                        </div>

                        <!-- Skills -->
                        <h2 class="title title--h2 mt-3">My confidence at some soft skills</h2>
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

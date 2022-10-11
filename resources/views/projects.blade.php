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
                                <li class="nav__item"><a href="/">About</a></li>
                                <li class="nav__item"><a class="active" href="/projects">Projects</a></li>
                                <li class="nav__item"><a href="/technologies">Technologies</a></li>
{{--                                <li class="nav__item"><a href="/contact">Contact</a></li>--}}
                            </ul>
                        </div>
                        <div class="pb-0 pb-sm-2">
                            <h1 class="title title--h1 title__separate">Projects</h1>
                        </div>

                        <!-- Gallery -->
                        <div class="gallery-grid js-masonry js-filter-container">
                            <div class="gutter-sizer"></div>
                            <!-- Item 1 -->
                            <div class="gallery-grid__item category-design">
                                <a href="https://investor-bot.com">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/investor-bot.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">Investor-Bot (mine)</h3>
                                        <span class="gallery-grid__category">Technologies: Python, Fastapi, SqlAlchemy, PostgreSQL, Celery, RabbitMQ
                                            Vue.js</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 2 -->
                            <div class="gallery-grid__item category-applications">
                                <a href="https://apps.shopify.com/botnot-public-staging?locale=da">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/yofi-app.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">YoFi Shopify App</h3>
                                        <span class="gallery-grid__category">Technologies: Svelte, Swagger, Api Gateway, Mongodb etc.</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 3 -->
                            <div class="gallery-grid__item category-web-development">
                                <a href="https://scienceweb.uz">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/scienceweb.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">Scienceweb</h3>
                                        <span class="gallery-grid__category">Technologies: PHP, Laravel, MySQL, Vue.js, Nuxt 3, Tailwind CSS, Elasticsearch, Python, Flask</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 4 -->
                            <div class="gallery-grid__item category-applications">
                                <a href="https://yofi.ai">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/yofi.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">YoFi.ai Internal Projects</h3>
                                        <span class="gallery-grid__category">Technologies: AWS Lambda, Dynamodb, Api Gateway, Batch, Amplify, Sagemaker,
                                            RDS, SNS, SQS, Opensearch, CloudWatch, etc. Services, GCP services</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 5 -->
                            <div class="gallery-grid__item category-web-development">
                                <a href="https://e-univer.adti.uz">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/e-univer.adti.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">LMS Platform of ASMI</h3>
                                        <span class="gallery-grid__category">Technologies: PHP, Vue.js, Moodle, Laravel, MySQL</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 6 -->
                            <div class="gallery-grid__item category-design">
                                <a href="https://adti.uz">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/adti.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">Andijan State Medical Institute</h3>
                                        <span class="gallery-grid__category">Technologies: PHP, WordPress, MySQL, NGINX</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Item 7 -->
                            <div class="gallery-grid__item category-web-development">
                                <a href="https://tsue.scienceweb.uz">
                                    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="{{ asset('images/projects/tsue.scienceweb.png') }}" alt="" />
                                    </div>
                                    <div class="gallery-grid__caption">
                                        <h3 class="title gallery-grid__title">Scienceweb Open Journal Systems</h3>
                                        <span class="gallery-grid__category">Technologies: PHP, Vue.js, MySQL, NGINX</span>
                                    </div>
                                </a>
                            </div>
                        </div><!-- /Gallery -->
                    </div><!-- box-outer -->
                </div><!-- Content -->
            </div><!-- sticky-parent -->
        </div><!-- container -->
    </main>
@stop

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
                                <li class="nav__item"><a href="/projects">Projects</a></li>
                                <li class="nav__item"><a class="active" href="/technologies">Technologies</a></li>
{{--                                <li class="nav__item"><a href="/contact">Contact</a></li>--}}
                            </ul>
                        </div>
                        <div class="pb-0 pb-sm-2">
                            <h1 class="title title--h1 title__separate">Technologies</h1>
                        </div>


                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Frontend</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="vue"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/vue.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="react"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/react.webp') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="svelte"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/svelte.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="tailwind-css"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/tailwind-css.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="bootstrap"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/bootstrap.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="nuxt"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/nuxt.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="next"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/next.png') }}" alt="Logo" /></a>
                                </figure>
                            </div>
                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->

                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Backend</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="laravel"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/laravel.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="laravel"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/laravel.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="fastapi"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/fastapi.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="django"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/django.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="aiohttp"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/aiohttp.webp') }}" alt="Logo" /></a>
                                </figure>
                            </div>

                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->

                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Database</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="postgresql"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/postgresql.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="mongodb"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/mongodb.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="elasticsearch"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/elasticsearch.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="mysql"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/mysql.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="redis"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/redis.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="firebase"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/firebase.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="dynamodb"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/dynamodb.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="neptune"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/neptune.png') }}" alt="Logo" /></a>
                                </figure>
                            </div>

                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->

                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Cloud & Deployment</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="aws"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/aws.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="gcp"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/gcp.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="docker"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/docker.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="k8"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/k8.png') }}" alt="Logo" /></a>
                                </figure>
                            </div>

                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->

                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Data Science</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="numpy"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/numpy.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="pandas"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/pandas.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="sklearn"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/sklearn.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="sagemaker"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/sagemaker.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="bigquery"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/bigquery.png') }}" alt="Logo" /></a>
                                </figure>
                            </div>

                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->


                        <!-- Clients -->
                        <h2 class="title title--h2 mt-4">Tools</h2>
                        <div class="swiper-container js-carousel-clients">
                            <div class="swiper-wrapper">
                                <figure class="swiper-slide">
                                    <a href="#" title="postman"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/postman.webp') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="clickup"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/clickup.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="github"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/github.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="phpstorm"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/phpstorm.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="pycharm"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/pycharm.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="webstorm"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/webstorm.png') }}" alt="Logo" /></a>
                                </figure>
                                <figure class="swiper-slide">
                                    <a href="#" title="vscode"><img width="100" height="100" class="logo-client" src="{{ asset('images/technologies/vscode.png') }}" alt="Logo" /></a>
                                </figure>
                            </div>

                            <div class="mt-4 swiper-pagination"></div>
                        </div><!-- /swiper-container -->

                    </div><!-- box-outer -->
                </div><!-- Content -->
            </div><!-- sticky-parent -->
        </div><!-- container -->
    </main>
@stop

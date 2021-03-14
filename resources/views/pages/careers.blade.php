@extends('layouts.main')

@section('wrapper')

        <div class="default-dt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_default  justify-content-center">
                                    <a class="nav-item nav-link" href="/about">{{ __('global.About') }}</a>
                                    <a class="nav-item nav-link active" href="/careers">{{ __('global.Careers') }}</a>
                                    <a class="nav-item nav-link" href="/contact">{{ __('global.Contact') }}</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>{{ __('global.Largest Online Grocery') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="life-gambo white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="default-title">
                            <h2>مزایای کار در رستون</h2>
                            <p>ما می خواهیم وقتی در رستون مشغول به کار هستید ، مانند خانه احساس کنید و برای این مجموعه مزایای خوبی را برای شما جمع آوری کرده ایم.</p>
                            <img src="/images/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="dd-content mt-50">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <a href="#" class="benefit-link">عملکرد و جوایز</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <a href="#" class="benefit-link">فرصت رشد</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <a href="#" class="benefit-link">کارمند خوب بودن</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-medkit"></i>
                                </div>
                                <a href="#" class="benefit-link">پوشش بیمه</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-suitcase-rolling"></i>
                                </div>
                                <a href="#" class="benefit-link">سفر و جابجایی داخلی</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-donate"></i>
                                </div>
                                <a href="#" class="benefit-link">پاداش و مزایا</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-book-reader"></i>
                                </div>
                                <a href="#" class="benefit-link">یادگیری و توسعه</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <a href="#" class="benefit-link">گزینه های سهام</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="benefits-step">
                                <div class="benefit-icon">
                                    <i class="fas fa-umbrella-beach"></i>
                                </div>
                                <a href="#" class="benefit-link">زمان استراحن</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="know-more-link">
                                <a href="#" class="kmore-btn hover-btn">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
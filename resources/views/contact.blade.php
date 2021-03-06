@extends('layouts.main')

@section('wrapper')
    <div class="blog-dt-vw banner-contact banner.visible parallax">
            <div class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>تماس با فروشگاه آنلاین رستون</h1>
                            <div class="extra-info">
                                <span class="entry-date">
                                    @php
                                        $v = verta();
                                        echo $v->format('%r %B %d، %Y');
                                    @endphp
                                </span>
                                <div class="single-post-cat">
                                    <a href="/">سفارش آنلاین مواد غذایی از بهترین فروشگاه های اطراف شما</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="all-product-grid">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-title mb-5">
                            <h2>ارسال درخواست به واحد خدمات به مشتریان</h2>
                            <p>اگر در مورد خدمات ما سوالی دارید یا مشکلی برای گزارش دارید ، لطفاً درخواستی را ارسال کنید و ما در اسرع وقت به شما پاسخ خواهیم داد.</p>
                        </div>
                        @if(session('flush'))
                            <x-ui.alert :status="'success'" :message="session('flush')"></x-ui.alert>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="contact-form">
                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Full Name') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="name" id="sendername" required="" placeholder="{{ __('global.Your Full') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Email Address') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="email" name="email" id="emailaddress" required="" placeholder="{{ __('global.Your Email Address') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Subject') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="subject" id="sendersubject" required="" placeholder="{{ __('global.Subject') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <div class="field">
                                        <label class="control-label">{{ __('global.Message') }}*</label>
                                        <textarea rows="2" class="form-control" id="sendermessage" name="description" required="" placeholder="{{ __('global.Write Message') }}"></textarea>
                                    </div>
                                </div>
                                <button class="next-btn16 hover-btn mt-3" type="submit" data-btntext-sending="Sending...">{{ __('global.Submit Request') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop

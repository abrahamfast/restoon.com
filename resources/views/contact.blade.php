@extends('layouts.main')

@section('wrapper')
    <div class="blog-dt-vw banner-blog banner.visible parallax">
            <div class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>تماس با فروشگاه آنلاین رستون</h1>
                            <div class="extra-info">
                                <span class="entry-date">Tuesday, May 19, 2020</span>
                                <div class="single-post-cat">
                                    <a href="#">Food &amp; Lifestyle</a>
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
                        <div class="contact-title">
                            <h2>ارسال درخواست به واحد خدمات به مشتریان</h2>
                            <p>اگر در مورد خدمات ما سوالی دارید یا مشکلی برای گزارش دارید ، لطفاً درخواستی را ارسال کنید و ما در اسرع وقت به شما پاسخ خواهیم داد.</p>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Full Name') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendername" id="sendername" required="" placeholder="{{ __('global.Your Full') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Email Address') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="email" name="emailaddress" id="emailaddress" required="" placeholder="{{ __('global.Your Email Address') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">{{ __('global.Subject') }}*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendersubject" id="sendersubject" required="" placeholder="{{ __('global.Subject') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <div class="field">
                                        <label class="control-label">{{ __('global.Message') }}*</label>
                                        <textarea rows="2" class="form-control" id="sendermessage" name="sendermessage" required="" placeholder="{{ __('global.Write Message') }}"></textarea>
                                    </div>
                                </div>
                                <button class="next-btn16 hover-btn mt-3" type="submit" data-btntext-sending="Sending...">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop
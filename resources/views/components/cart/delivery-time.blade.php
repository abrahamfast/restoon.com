                            <div class="checkout-step">
                                <div class="checkout-card" id="headingThree">
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ __('global.Delivery Time & Date') }} </button>
                                    </h4>
                                    <span class="checkout-step-number">۳</span>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">{{ __('global.Select Date and Time') }}*</label>
                                                    <div class="date-slider-group">
                                                        <div class="owl-carousel date-slider owl-theme">
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd2" name="date-delivery">
                                                                    <label for="dd2">{{ __('global.Tomorrow') }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd1" name="date-delivery" checked="">
                                                                    <label for="dd1">{{ __('global.Today') }}</label>
                                                                </div>
                                                            </div>
                                                            @foreach($date_ranges as $date)
                                                                <div class="item">
                                                                    <div class="date-now">
                                                                        <input type="radio" id="dd{{$date->formatDate()}}" name="date-delivery">
                                                                        <label for="dd{{$date->formatDate()}}">{{$date->format('%B %d، %Y')}}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="time-radio">
                                                        <div class="ui form">
                                                            <div class="grouped fields">
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.8_00AM_10_00AM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.10_00AM_12_00AM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.12_00AM_14_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.14_00AM_16_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                        <label>{{ __('global.16_00AM_18_00PM')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse" href="#collapseFour"> {{ __('global.Proccess to payment') }} </a>
                                    </div>
                                </div>
                            </div>

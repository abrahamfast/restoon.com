<div class="checkout-step" style="display: none;">
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
                                        <input type="radio" id="dd1" name="date-delivery" checked="">
                                        <label for="dd1">{{ __('global.Today') }}</label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="date-now">
                                        <input type="radio" id="dd2" name="date-delivery">
                                        <label for="dd2">{{ __('global.Tomorrow') }}</label>
                                    </div>
                                </div>
                                @foreach($date_ranges as $key => $date)
                                    <div class="item">
                                        <div class="date-now">
                                            <input type="radio" id="dd{{$date->toDateString()}}" name="delivery_date" value="{{$date->toDateString()}}">
                                            <label for="dd{{$date->toDateString()}}">{{$date_ranges_fa[$key]->format('%B %d، %Y')}}</label>
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
                                            <input type="radio" name="delivery_time" value="8_00AM_10_00AM" checked="" tabindex="0" class="hidden">
                                            <label>{{ __('global.8_00AM_10_00AM')}}</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox chck-rdio">
                                            <input type="radio" name="delivery_time" value="10_00AM_12_00AM" tabindex="0" class="hidden">
                                            <label>{{ __('global.10_00AM_12_00AM')}}</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox chck-rdio">
                                            <input type="radio" name="delivery_time" value="12_00AM_14_00PM" tabindex="0" class="hidden">
                                            <label>{{ __('global.12_00AM_14_00PM')}}</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox chck-rdio">
                                            <input type="radio" name="delivery_time" value="14_00AM_16_00PM" tabindex="0" class="hidden">
                                            <label>{{ __('global.14_00AM_16_00PM')}}</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox chck-rdio">
                                            <input type="radio" name="delivery_time" value="16_00AM_18_00PM" tabindex="0" class="hidden">
                                            <label>{{ __('global.16_00AM_18_00PM')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <div class="address-btns">
                        <button id="update-delivery"  class="save-btn14 hover-btn">{{ __('global.Save') }}</button>
                        <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#collapseFour" href="#collapseFour"> {{ __('global.Next') }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function() {
            $('#update-delivery').on('click', function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value')
                    }
                });
                //$(".message_pri:checked").val();
                var formData = {
                    delivery_date: $('input[name=delivery_date]:checked').val(),
                    delivery_time: $('input[name=delivery_time]:checked').val(),
                };

                $.ajax({
                    type: 'POST',
                    url: '/app/delivery/{{ Auth::user()->id}}',
                    data: formData,
                    success: function(data){
                        $('.alert-danger').hide(0);
                        $('.alert-success').show(0);
                        setTimeout(function(){
                            $('.collapsed').eq(4).click()
                        }, 500);
                        
                    },
                    error: function(data){
                        $('.alert-danger').show(0);
                        $('.alert-success').hide(0);
                    }
                })
            });
        });
</script>

@endpush

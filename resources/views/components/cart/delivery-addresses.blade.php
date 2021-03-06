<div class="checkout-step">
    <div class="checkout-card" id="headingTwo">
        <h4 class="checkout-step-title">
            <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> {{ __('global.Delivery Address') }}</button>
        </h4>
        <span class="checkout-step-number">۲</span>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
        <div class="checkout-step-body">
            <div class="checout-address-step">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/app/addresses/{{ Auth::user()->account->id}}" method="POST">
                            @csrf
                            <div class="address-fieldset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('global.Name') }}*</label>
                                            <input id="name" name="name" value="{{ Auth::user()->name }}" type="text" placeholder="{{ __('global.placeholderName') }}" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('global.Email Address') }}*</label>
                                            <input id="email1" name="email" value="{{ Auth::user()->email }}" type="text" placeholder="{{ __('global.Email Address') }}" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('global.StreetSocietyOfficeName') }}*</label>
                                            <input id="street" name="shipping_address_street" value="{{ Auth::user()->account->shipping_address_street }}" type="text" placeholder="{{ __('global.StreetAddress') }}" class="form-control input-md">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('global.Pincode') }}*</label>
                                            <input id="pincode" name="shipping_address_postal_code" value="{{ Auth::user()->account->shipping_address_postal_code }}" type="text" placeholder="{{ __('global.Pincode') }}" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('global.Locality') }}*</label>
                                            <input id="Locality" name="shipping_address_city" value="{{ Auth::user()->account->shipping_address_city }}" type="text" placeholder="{{ __('global.Enter City') }}" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="address-btns">
                                                <button id="update-account"  class="save-btn14 hover-btn">{{ __('global.Save') }}</button>
                                                <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseThree"> {{ __('global.Next') }} </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function() {
            $('#update-account').on('click', function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('value')
                    }
                });
                var formData = {
                    shipping_address_street: $('input[name=shipping_address_street]').val(),
                    shipping_address_postal_code: $('input[name=shipping_address_postal_code]').val(),
                    shipping_address_city: $('input[name=shipping_address_city]').val(),
                };

                $.ajax({
                    type: 'POST',
                    url: '/app/addresses/{{ Auth::user()->account->id}}',
                    data: formData,
                    success: function(data){
                        $('.alert-danger').hide(0);
                        $('.alert-success').show(0);
                        setTimeout(function(){
                            $('.collapsed').eq(1).click()
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
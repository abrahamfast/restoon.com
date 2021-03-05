<div class="checkout-step">
    <div class="checkout-card" id="headingOne">
        <h4 class="checkout-step-title">
            <button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> {{ __('global.Phone Number Verification') }}</button>
        </h4>
        <span class="checkout-step-number">۱</span>
    </div>
    <div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
        <div class="checkout-step-body">
            <p>{{ __('global.We need your phone number so we can inform you about any delay or problem') }}</p>

            @if(Auth::user())
                <p class="phn145">{{ __('global.4 digits code send your phone')}} <span>{{ Auth::user()->phone }}</span>
                	<a class="edit-no-btn hover-btn" data-toggle="collapse" id="otp-verifaction" href="/app/profile/{{ Auth::user()->id }}/edit">{{ __('global.Edit') }}</a>
                </p>
            @endif

            @guest()
            <div class="" id="edit-number">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-login">
                            <form id="form-verification" method="POST" action="/verification/otp">
                                @csrf
                            	<a class="chck-btn hover-btn" role="button" id="otp-verifaction"  href="#otp-verifaction">{{ __('global.Send Code') }}</a>
                                <div class="login-phone">
                                    <input type="text" name="phone" class="form-control" placeholder="{{ __('global.Phone Number') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endguest

            @if($verify)
                <div class="alert alert-success" role="alert">
                    {{ __('global.Success Your Phone') }}
                </div>
            @else
                <div class="otp-verifaction">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                            	<form id="check-verification" method="POST" action="/verification/check">
                            	@csrf
                                <label class="control-label">{{ __('global.Enter Code') }}</label>
                                <ul class="code-alrt-inputs">
                                    <li>
                                        <input id="code[1]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                    </li>
                                    <li>
                                        <input id="code[2]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                    </li>
                                    <li>
                                        <input id="code[3]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                    </li>
                                    <li>
                                        <input id="code[4]" maxlength="1" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                    </li>
                                    <li>
                                        <a class="collapsed chck-btn hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseTwo">{{ __('global.Next') }}</a>
                                    </li>
                                </ul>
                            </form>
                                <a href="#" id="send-verification" class="resend-link">{{ __('global.Resend Code') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            $('#otp-verifaction').on('click', function(e){
                e.preventDefault();
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                // var formData = {
                //     product_id: $('#like-icon').val()
                // };

                // $.ajax({
                //     type: 'post',
                //     url: '/user/cart',
                //     data: formData,
                //     success: function(data){
                //         console.log(data);
                //     },
                //     error: function(data){
                //         console.log(data);
                //     }
                // })
            });
        });

        $('#otp-verifaction').on('click', function(e){
            e.preventDefault()
            $('#form-verification').submit()
        });
        $('#send-verifaction').on('click', function(e){
            e.preventDefault()
            $('#check-verification').submit()
        });
    </script>
@endpush

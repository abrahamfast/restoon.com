<div class="row">
    <div class="col-md-12">
        <div class="main-title-tab">
            <h4>{{ __('global.My Address') }} <i class="uil uil-location-point"></i></h4>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="pdpt-bg">
            <div class="pdpt-title">
                <h4>{{ __('global.My Address') }}</h4>
            </div>
            <div class="address-body">
                @if($user->account()->first()->isNotHaveAddress())
                    <a href="#" class="add-address hover-btn" data-toggle="modal" data-target="#address_model">
                        {{ __('global.new Address') }}
                    </a>
                @endif
                @if(!$user->account()->first()->isNotHaveAddress())
                    <div class="address-item">
                        <div class="address-icon1">
                            <i class="uil uil-home-alt"></i>
                        </div>
                        <div class="address-dt-all">
                            <h4>{{ __('global.Home') }}</h4>
                            <p>{{ $user->account()->first()->getFullAddress() }}</p>
                            <ul class="action-btns">
                                <li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
{{--                                <li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@section('modal')
    <x-ui.modal :id="'address_model'" :header="__('global.create address')">
        <div class="add-address-form">
            <div class="checout-address-step">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="/">
                            @csrf
                            <input type="hidden" name="account_id" value="{{ $user->account->id }}">
                            <div class="form-group">
                                <div class="product-radio">
                                    <ul class="product-now">
                                        <li>
                                            <x-ui.form.radio
                                                :id="'office'"
                                                :name="'main'"
                                                :label="__('office')"
                                            />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="address-fieldset">
                                <div class="row">
                                    <x-ui.form.input
                                        :label="__('global.Address label')"
                                        :placeholder="__('global.Address Enter')"
                                        :class="'input-md'"
                                        :name="'shippingAddressStreet'"
                                        :id="'shippingAddressStreet'"
                                        :required="'required'"
                                    />
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-0">
                                            <div class="address-btns">
                                                <button class="save-btn14 hover-btn">{{ __('global.Save') }}</button>
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
    </x-ui.modal>
@endsection

<div class="track-order">
    <h4>
        {{ __('global.Track Order') }}
    </h4>
    <div class="bs-wizard" style="border-bottom:0;">
        <div class="bs-wizard-step disabled">
            <div class="text-center bs-wizard-stepnum">
                {{ __('global.Delivered') }}
            </div>
            <div class="progress">
                <div class="progress-bar">
                </div>
            </div>
            <a class="bs-wizard-dot" href="#">
            </a>
        </div>
        <div class="bs-wizard-step @if($quote->team()->isTransportation()) complete @else  active @endif">
            <div class="text-center bs-wizard-stepnum">
                {{ __('global.On the way') }}
            </div>
            <div class="progress">
                <div class="progress-bar">
                </div>
            </div>
            <a class="bs-wizard-dot" href="#">
            </a>
        </div>
        <div class="bs-wizard-step @if($quote->team()->isStock()) complete @else  active @endif">
            <div class="text-center bs-wizard-stepnum">
                {{ __('global.Packed') }}
            </div>
            <div class="progress">
                <div class="progress-bar">
                </div>
            </div>
            <a class="bs-wizard-dot" href="#">
            </a>
        </div>
        <div class="bs-wizard-step @if($quote->team()->isSales()) complete @else active  @endif">
            <div class="text-center bs-wizard-stepnum">
                {{ __('global.Placed') }}
            </div>
            <div class="progress">
                <div class="progress-bar">
                </div>
            </div>
            <a class="bs-wizard-dot" href="#">
            </a>
        </div>
    </div>
</div>
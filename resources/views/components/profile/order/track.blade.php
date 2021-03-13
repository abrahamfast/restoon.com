<div class="track-order">
    <h4>
        {{ __('global.Track Order') }}
    </h4>
    <div class="bs-wizard" style="border-bottom:0;">
        <div class="bs-wizard-step @if($quote->isDelivered()) complete @else disabled @endif">
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
        <div class="bs-wizard-step @if($quote->isTransportation() || $quote->isDelivered() || $quote->isDelivered()) complete @elseif($quote->isTransportation()) active @else disabled @endif">

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
        <div class="bs-wizard-step @if($quote->isStock() || $quote->isTransportation() || $quote->isDelivered()) complete @elseif($quote->isStock())  active @else disabled @endif">
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
        <div class="bs-wizard-step @if($quote->isSales() || $quote->isStock() || $quote->isTransportation()  ||$quote->isDelivered()) complete @elseif($quote->isSales()) active @else  active @endif">
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

<div class="dashboard-group">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-dt">
                    <div class="user-img">
                        <img src="/images/avatar/img-5.jpg" alt="">
                        <div class="img-add">
                            <input type="file" id="file">
                            <label for="file"><i class="uil uil-camera-plus"></i></label>
                        </div>
                    </div>
                    <h4>{{ $user->name }}</h4>
                    <p>{{ $user->phone }}<a href="#"><i class="uil uil-edit"></i></a></p>
                    <div class="earn-points"><img src="/images/Dollar.svg" alt="">{{ __('global.Points') }} : <span>20</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

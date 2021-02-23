<div class="gambo-Breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">{{ __('global.Home')}}</a></li>
                        @if($lable)
                            <li class="breadcrumb-item active" aria-current="page">{{ $slug }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="/category/{{$link}}">{{ $slug }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $lable }}</li>
                        @endif
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div id="{{ $id }}" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
    <div class="modal-dialog category-area" role="document">
        <div class="category-area-inner">
            <div class="modal-header">
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <i class="uil uil-multiply"></i>
                </button>
            </div>
            <div class="category-model-content modal-content">
                <div class="cate-header">
                    <h4>{{ $header }}</h4>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

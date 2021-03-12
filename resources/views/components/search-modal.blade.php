    <div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        <div class="modal-dialog search-ground-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
<i class="uil uil-multiply"></i>
</button>
                </div>
                <div class="category-model-content modal-content">
                    <div class="search-header">
                        <form action="/search" method="get">
                            <input type="search" name="what" placeholder="{{ __('global.Search for products') }}">
                            <button type="submit"><i class="uil uil-search"></i></button>
                        </form>
                    </div>
                    <div class="search-by-cat">
                        @if($categories)
                            @foreach($categories as $category)
                                <a href="/category/{{$category->slug}}" class="single-cat">
                                    <div class="icon">
                                        <img src="/dataloader/{{ $category->cover_id }}" alt="">
                                    </div>
                                    <div class="text">
                                        {{ $category->translate }}
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
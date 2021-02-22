<div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
    <div class="modal-dialog category-area" role="document">
        <div class="category-area-inner">
            <div class="modal-header">
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
<i class="uil uil-multiply"></i>
</button>
            </div>
            <div class="category-model-content modal-content">
                <div class="cate-header">
                    <h4>{{ __('global.Select Category') }}</h4>
                </div>
                <ul class="category-by-cat">
                    @if($categories)
                        @foreach($categories as $category)
                            <li>
                                <a href="#" class="single-cat-item">
                                    <div class="icon">
                                        <img src="/dataloader/{{ $category->cover_id }}" alt="">
                                    </div>
                                    <div class="text"> {{ $category->translate }} </div>
                                </a>
                            </li>
                        @endforeach
                    @else
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-1.svg" alt="">
                            </div>
                            <div class="text"> Fruits and Vegetables </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-2.svg" alt="">
                            </div>
                            <div class="text"> Grocery & Staples </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-3.svg" alt="">
                            </div>
                            <div class="text"> Dairy & Eggs </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-4.svg" alt="">
                            </div>
                            <div class="text"> Beverages </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-5.svg" alt="">
                            </div>
                            <div class="text"> Snacks </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-6.svg" alt="">
                            </div>
                            <div class="text"> Home Care </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-7.svg" alt="">
                            </div>
                            <div class="text"> Noodles & Sauces </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-8.svg" alt="">
                            </div>
                            <div class="text"> Personal Care </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="single-cat-item">
                            <div class="icon">
                                <img src="images/category/icon-9.svg" alt="">
                            </div>
                            <div class="text"> Pet Care </div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
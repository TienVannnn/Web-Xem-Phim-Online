<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="product__sidebar">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Phim mới ra mắt</h5>
            </div>
            <div class="filter__gallery">
                @foreach ($moiRaMat['items'] as $item)
                    <div class="product__sidebar__view__item set-bg mix day years"
                    data-setbg="{{ $item['poster_url'] }}">
                    <div class="ep">{{ $item['year'] }}</div>
                    <div class="view"><i class="fa fa-eye"></i> {{ $item['origin_name'] }}</div>
                    <h5><a href="{{ route('detail.film', $item['slug']) }}">{{ $item['name'] }}</a></h5>
                </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="product__sidebar__comment">
            <div class="section-title">
                <h5>New Comment</h5>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="/assets/front/img/sidebar/comment-1.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="/assets/front/img/sidebar/comment-2.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                    </ul>
                    <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="/assets/front/img/sidebar/comment-3.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                    </ul>
                    <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
            </div>
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="/assets/front/img/sidebar/comment-4.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                    </ul>
                    <h5><a href="#">Monogatari Series: Second Season</a></h5>
                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
            </div>
        </div> --}}
    </div>
</div>

  @props(['car'])  
    
    <article class="card" data-make="BMW" data-model="X5" data-state="New York" data-city="Newark" data-type="SUV" data-fuel="Hybrid" data-year="2021" data-price="38000">
        <div class="card-media">
            <a href="{{ route('carDetail.show', $car->id) }}">
                <img
                    src="{{ $car->carImage->image_path}}"
                    alt="BMW X5"
                    loading="lazy"
                />
            </a>
            <div class="card-top">
                <span class="tag tag-location">{{ $car->city->name }}</span>
                <button class="icon-btn fav-btn" type="button" aria-label="Add to favorites" aria-pressed="false" title="Favorite">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 21s-7.2-4.35-9.6-8.55C.6 9.2 2.3 5.9 5.8 5.2c1.9-.4 3.6.3 4.7 1.6 1.1-1.3 2.8-2 4.7-1.6 3.5.7 5.2 4 3.4 7.25C19.2 16.65 12 21 12 21z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-title">{{ $car->model->name }}</div>
            <div class="card-price">${{ number_format($car->price) }}</div>
            <div class="card-tags">
                <span class="pill">{{ $car->type->name }}</span>
                <span class="pill">{{ $car->fuel->name }}</span>
            </div>
        </div>
    </article>
@props(['car','isInWatchlist'=>false])

<div class="car-item card">
  <a href="{{ route('car.show', ['car' => $car->id]) }}">
    <img src="/img/carro.png" alt="Car Image" class="car-item-img rounded-t" />
    {{-- <img src="{{ $car->primaryImage->image_patch }}" alt="Car Image" class="car-item-img rounded-t" /> --}}
  </a>
  
  <div class="p-medium">
    <div class="flex items-center justify-between">
      <small class="m-0 text-muted">{{ $car->city->name }}</small>
      
      <button class="btn-heart">
        <svg xmlns="http://www.w3.org/2000/svg" 
             @class(['hidden' => $isInWatchlist]) 
             fill="none" 
             viewBox="0 0 24 24" 
             stroke-width="1.5" 
             stroke="currentColor" 
             style="width: 20px">
          <path stroke-linecap="round" stroke-linejoin="round" 
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>
        
        <svg xmlns="http://www.w3.org/2000/svg" 
             fill="none" 
             @class(['hidden' => !$isInWatchlist]) 
             viewBox="0 0 24 24" 
             stroke-width="1.5" 
             stroke="currentColor" 
             style="width: 24px">
          <!-- Aqui você pode adicionar o caminho do segundo SVG -->
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
        </svg>
      </button>
      
    </div>
    
    <h2 class="car-item-title">
      {{ $car->year }} - {{ $car->maker->name }}
    </h2>
    
    <p class="car-item-price">
      {{ $car->price }}
    </p>
    
    <hr />
    
    <p class="m-0">
      <span class="car-item-badge">{{ $car->carType->name }}</span>
      <span class="car-item-badge">{{ $car->fuelType->name }}</span>
    </p>
  </div>
</div>

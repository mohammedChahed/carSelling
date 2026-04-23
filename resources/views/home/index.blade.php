<x-app-layout title="Home Page">
  <main>
   

    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-copy">
          <h1 class="hero-title">
            Buy <span class="accent">The Best Cars</span> in your region
          </h1>
          <p class="hero-subtitle">
            A powerful search tool built to help you find the right car faster. Filter by make, model, region, price, year,
            type, and fuel — then compare the latest listings in seconds.
          </p>
        </div>

        <div class="hero-media" aria-label="Featured vehicle">
          <img
            class="hero-image"
            src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=1600&q=80"
            alt="Orange Range Rover parked in front of a modern building"
            loading="eager"
          />
        </div>
      </div>
    </section>

    <x-search-form action="/search" methode="GET" />

    <section class="latest" aria-label="Latest added cars">
      <div class="container">
        <div class="section-head">
          <h2 class="section-title">Latest Added Cars</h2>
        </div>

        <div id="carGrid" class="grid">  
            @foreach($cars as $car)             
              <x-card-item :$car/>
            @endforeach
        </div>
      </div>
    </section>

     <x-slot:footerLink>
       <a href="#">link 3</a>
       <a href="#">link 4</a>
     </x-slot:footerLiknk>
    
  </main>
</x-app-layout>
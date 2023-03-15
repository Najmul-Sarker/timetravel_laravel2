<x-frontend.layouts.master>

    <x-frontend.layouts.partials.banner/>
    
    <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Special Watch Collection of Our Shop</h2>
            </div>

            <div class = "special-list row g-0">
              @foreach ($products as $product )
              <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    {{-- <img src="{{ asset('storage/products/'.$product->image) }}" width="60" alt=""> --}}
                    <img src = "{{ asset('storage/products/'.$product->image) }}"height="300px" width="260px" class = "w-100">
                    <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                        <i class = "fas fa-heart"></i>
                    </span>
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">{{ $product->title }}</p>
                    <span class = "fw-bold d-block">{{ $product->price }} Tk</span>
                    <a href = "{{ route('frontend.shop',$product->id) }}" class = "btn btn-primary mt-3">Add to Cart</a>
                </div>
            </div>
              @endforeach
                

            </div>
        </div>
    </section>
  
  </x-frontend.layouts.master>
  
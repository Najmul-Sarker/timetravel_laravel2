<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <!-- fontawesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- bootstrap css -->
        <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "{{ asset('ui/frontend/css/main.css') }}">
        
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href=""> -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
              <!-- Google Fonts -->
          <link
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
           rel="stylesheet"
    />
       <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
        rel="stylesheet"
       />
    </head>
    <body>
        <section>
            <div>
                <h3>
                    Your Total Product
                </h3>
            </div>
        </section>
        <section>
        
        <!-- navbar -->
        <x-frontend.layouts.partials.topbar/>
       </section>
    
    
      <section>
        <div>
            <h2>
                something
            </h2>
        </div>
      </section>
      <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
      
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="h5">Selected Item</th>
                      <th scope="col">Produt Name</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('ui/frontend/imagess/w4.webp')}}" height="300px" width="240px" class="img-fluid rounded-3"
                            style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">{{ $product->title }}</p>
                            <p class="mb-0">Blue Belt</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">{{ $product->price }} Tk</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0">
                        <div class="d-flex align-items-center">
                          <img src="{{ asset('ui/frontend/imagess/i5.jpg')}}"height="300px" width="240px" class="img-fluid rounded-3"
                            style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">{{ $product->title }}</p>
                            <p class="mb-0">Pink Belt</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">{{ $product->price }} Tk</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
      
              <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                <div class="card-body p-4">
      
                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                      <form>
                        <div class="d-flex flex-row pb-3">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                              value="" aria-label="..." checked />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                              Card
                            </p>
                          </div>
                        </div>
                        <div class="d-flex flex-row pb-3">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                              value="" aria-label="..." />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                            </p>
                          </div>
                        </div>
                        <div class="d-flex flex-row">
                          <div class="d-flex align-items-center pe-2">
                            <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                              value="" aria-label="..." />
                          </div>
                          <div class="rounded border w-100 p-3">
                            <p class="d-flex align-items-center mb-0">
                              <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>Bkash
                            </p>
                          </div>
                          
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-6">
                      <div class="row">
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                              placeholder="John Smith" />
                            <label class="form-label" for="typeName">Name on card</label>
                          </div>
      
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                              size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-12 col-xl-6">
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                              placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Card Number</label>
                          </div>
      
                          <div class="form-outline mb-4 mb-xl-5">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">9700 Tk</p>
                      </div>
      
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-0">Shipping</p>
                        <p class="mb-0">240 Tk</p>
                      </div>
      
                      <hr class="my-4">
      
                      <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                        <p class="mb-2">Total (tax included)</p>
                        <p class="mb-2">10400 Tk</p>
                      </div>
      
                      <button type="button" class="btn btn-primary btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>Checkout</span>
                          <span>10400 Tk</span>
                        </div>
                      </button>
      
                    </div>
                  </div>
      
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>

      <x-frontend.layouts.partials.footer/>
      
    <!-- end of footer -->
      
        <!-- jquery -->
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src = "{{ asset('ui/frontend/js/jquery-3.6.0.js') }}"></script>
        <!-- isotope js -->
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <!-- bootstrap js -->
        <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
        ></script>
        <!-- custom js -->
        <script src = "{{ asset('ui/frontend/js/script.js') }}"></script>
    </body>
    </html>



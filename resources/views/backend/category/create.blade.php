<x-backend.layouts.master>
    <x-slot:title>
               Category Page
            </x-slot>
            <a href="{{ route('category.index') }}">list</a>
            <div class="container mt-5">
                <div class="row justifay-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><h3>Create a Category</h3></div>
                            <div class="card-body">
                                <!-- <form action="./index.php" method="" > -->
                                <form  action="{{ route('category.store') }}"  method="POST"  >

                                    @csrf
                                    <div class="mb-3">
                                        <label for="title">Category Title:</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                            </div>
                                    
                                    <div class="mb-3">
                                        <label for="description">Description:</label>
                                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo">
                                    </div> -->
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
  </x-backend.layouts.master>
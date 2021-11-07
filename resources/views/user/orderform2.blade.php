<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Place Order | ANTT Robotics Ltd.</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="{{ asset('/assets/css/profile.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="mt-5" style="max-width: 90%;" src="{{ $image }}">
                    <span class="font-weight-bold">{{ $name }}</span>
                    <span>Category: {{ $category }}</span>
                    <span>Price: {{ $price }}</span>
                    <span class="mt-4">Verified by</span>
                    <img style="max-width: 90%;" src="{{ asset('/assets/images/sslcommerz2.png') }}">
                </div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Order Information</h4>
                    </div>
                    <form action="" method="POST">
                    @csrf
                        <input type="hidden" name="name" value="{{ $name }}">
                        <input type="hidden" name="category" value="{{ $category }}">
                        <input type="hidden" name="price" value="{{ $price }}">
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Full Name <label class="text-danger h6">*</label></label>
                                <input type="text" name="studentname" class="form-control" value="">
                            </div>
                        </div>
                        @error('studentname')
                            <span class="text-danger" role="alert">
                                <strong style="font-size: 12px;">{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number <label class="text-danger h6">*</label></label>
                                <input type="text" name="phone" class="form-control" value="">
                            </div>
                            @error('phone')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">School Name <label class="text-danger h6">*</label></label>
                                <input type="text" name="school" class="form-control" value="">
                            </div>
                            @error('school')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">Class <label class="text-danger h6">*</label></label>
                                <input type="text" name="class" class="form-control" value="">
                            </div>
                            @error('class')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">Address <label class="text-danger h6">*</label></label>
                                <input type="text" name="address" class="form-control" value="">
                            </div>
                            @error('address')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md-12">
                                <label class="labels">City <label class="text-danger h6">*</label></label>
                                <input type="text" class="form-control" name="city" value="">
                            </div>
                            @error('city')
                                <span class="text-danger" role="alert">
                                    <strong class="ml-3" style="font-size: 12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country <label class="text-danger h6">*</label></label>
                                <input type="text" name="country" class="form-control" value="">
                            
                                @error('country')
                                    <span class="text-danger" role="alert">
                                        <strong style="font-size: 12px;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Post Code<label>.</label></label>
                                <input type="text" class="form-control" name="postcode" value="">

                                @error('postcode')
                                    <span class="text-danger" role="alert">
                                        <strong style="font-size: 12px;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="mt-5 text-center">
                            <a class="btn btn-outline-danger text-dark mr-2" href="{{route('home')}}" >Cencel</a>
                            <input class="btn btn-outline-success text-dark ml-2" type="submit" id="submit" value="Order">
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>

</html>
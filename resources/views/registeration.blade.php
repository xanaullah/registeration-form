<!DOCTYPE html>
<head>
    <title>Registeration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row mt-70">
                                    <div class="col-12">
                                        <!-- Section Heading -->
                                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                                            <h6>Register</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="name"
                                                       class=" col-form-label text-md-center">Name</label>
                                                <input type="text" name="name"
                                                       class="form-control mb-30 @error('name') is-invalid @enderror"
                                                       placeholder="Enter Your Name" autocomplete="off" value="{{ old('Name') }}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-8  wow fadeInUp" data-wow-delay="100ms">
                                                <label for="name"
                                                       class=" col-form-label text-md-center">{{ __('Email') }}</label>
                                                <input type="email" name="email"
                                                       class="form-control mb-30 @error('email') is-invalid @enderror"
                                                       placeholder="Your Email" autocomplete="off">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="mobile"
                                                       class=" col-form-label text-md-center">{{ __('Mobile No') }}</label>
                                                <input type="text" name="mobile"
                                                       class="form-control mb-30 @error('mobile') is-invalid @enderror"
                                                       maxlength="12" placeholder="Enter Mobile No" autocomplete="off">
                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="phone"
                                                       class=" col-form-label text-md-center">{{ __('Phone') }}</label>
                                                <input type="text" name="phone"
                                                       class="form-control mb-30  @error('phone') is-invalid @enderror"
                                                       maxlength="12" placeholder="Enter Phone No">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="address"
                                                       class=" col-form-label text-md-center">{{ __('Address') }}</label>
                                                <input type="text" name="address"
                                                       class="form-control mb-30 @error('address') is-invalid @enderror"
                                                       placeholder="Your Address">
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="date_of_birth"
                                                       class=" col-form-label text-md-center">{{ __('Date of Birth') }}</label>
                                                <input type="date" name="date_of_birth"
                                                       class="form-control mb-30 @error('date_of_birth') is-invalid @enderror"
                                                       placeholder="Enter Your Date of Birth">
                                                @error('date_of_birth')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="cnic_no"
                                                       class=" col-form-label text-md-center">{{ __('CNIC No') }}</label>
                                                <input type="text" name="cnic_no" class="form-control mb-30"
                                                       placeholder="Enter Your CNIC No">
                                                @error('cnic_no')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="image"
                                                       class=" col-form-label text-md-center">{{ __('Image') }}</label>
                                                <input type="file" name="image" class="form-control mb-30"
                                                       placeholder="Image">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="cnic"
                                                       class=" col-form-label text-md-center">{{ __('Upload Cnic ') }}</label>
                                                <input type="file" name="cnic_image" class="form-control mb-30"
                                                       placeholder="cnic pic">
                                            </div>
                                            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="utility_bill"
                                                       class=" col-form-label text-md-center">{{ __('Upload Utility Bill ') }}</label>
                                                <input type="file" name="utility_image" class="form-control mb-30"
                                                       placeholder="utility_bill">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="name"
                                                       class=" col-form-label text-md-center">{{ __('Password') }}</label>
                                                <input type="password" name="password" class="form-control mb-30"
                                                       placeholder="password" autocomplete="off">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                                <label for="name"
                                                       class=" col-form-label text-md-center">{{ __('Conform Password') }}</label>
                                                <input type="password" name="password_confirmation"
                                                       class="form-control mb-30"
                                                       placeholder="Conform Password" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms"
                                             style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                            <button type="submit" class="btn btn-primary mt-15">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="tr">
                        @foreach($data as $user)
                        {{$user['name']}}
                        {{$user['email']}}
                        <a href='{{url("/delete/".$user->id)}}'>delete</a>
                        <a href='{{url("/edit/".$user->id)}}'>Edit</a>


                        @endforeach
                        <tr>
                            
                        </tr>
                    </div>
                </div>
            </div>

</body>
</html>
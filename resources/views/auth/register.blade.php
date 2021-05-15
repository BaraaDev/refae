@extends('layouts.main')

@section('content')
 
 
 
                        <div class="page-title-area ptb-100">
                            <div class="container">
                                <div class="page-title-content">
                                    <h1>Register</h1>
                                    <ul>
                                        <li class="item"><a href="">Home</a></li>
                                        <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Register</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/register.jpg') }}" alt="Demo Image">
                            </div>
                        </div>
                    
                    
                        <div class="authentication-section">
                            <div class="container">
                                <div class="main-form ptb-100">
                                    <?php if ($errors->any()){

                                        foreach ($errors->all() as $error){ ?>
                    
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Alert!</strong> <?php echo $error ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                    
                                           <?php   } } ?>
                                    <form id="#authForm"  method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="content">
                                            <h3>Create Account</h3>
                                            <p>Register please if you dont have an account</p>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-icon"><i class='bx bx-user'></i></div>
                                            <input type="text" class="form-control" name="name" placeholder="Username" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="input-icon"><i class='bx bx-at'></i></div>
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="input-icon"><i class='bx bx-show'></i></div>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="input-icon"><i class='bx bx-show'></i></div>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password" required>

                                        </div>
 
                                        <button type="submit" class="btn-primary">  Register  </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    
@endsection

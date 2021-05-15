@extends('layouts.main')

@section('content')
 
                       <div class="page-title-area ptb-100">
                        <div class="container">
                            <div class="page-title-content">
                                <h1>Login</h1>
                                <ul>
                                    <li class="item"><a href="">Home</a></li>
                                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Login</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-image">
                            <img src="{{ asset('images/login.jpg') }}" alt="Demo Image">
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
                                       
                                <form id="#authForm" method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="content">
                                        <h3>Welcome Back</h3>
                                        <p>Login please if you already have an account</p>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-icon"> <i class='bx bx-user'></i></div>
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon"> <i class='bx bx-user'></i></div>
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="row align-items-center mb-30">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <div class="link">
                                                <a href="">Forget password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-primary">  Login </button>
                                </form>
                            </div>
                        </div>
                    </div>
                

@endsection

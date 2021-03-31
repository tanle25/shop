<div class="login-popup">
    <div class="form-box">
        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#signin">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#register">Register</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="signin">
                    {{-- action="{{ route('login') }}" method="POST" --}}
                    {{-- <form action="" id="login-form"> --}}
                        @csrf
                        <div class="form-group">
                            <label for="singin-email">Username or email address:</label>
                            <input type="text" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="singin-password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                required />
                        </div>
                        <div class="align-middle">
                        <p class="text-danger" id="error" style="text-align: center"></p>
                        </div>
                        <div class="form-footer">
                            <div class="form-checkbox">
                                <input type="checkbox" class="custom-checkbox" id="signin-remember"
                                    name="signin-remember" />
                                <label class="form-control-label font-secondary" for="signin-remember">Remember
                                    me</label>
                            </div>
                            <a href="#" class="lost-link font-secondary">Lost your password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" id="btn-login">Sign in</button>
                    {{-- </form> --}}
                    <div class="form-choice text-center">
                        <label class="font-secondary">Sign in with social account</label>
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-google fab fa-google"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="register" >
                    <form action="{{ route('register') }}" method="POST" id="register-form" name="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="singin-email">Your Name:</label>
                            <input class="form-control" id="name" name="name"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="singin-email" id="lb-email">Your email address:</label>
                            <input class="form-control" id="reg-email" type="email" name="email"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="singin-password">Password:</label>
                            <input type="password" class="form-control" id="reg-password" name="password"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="singin-password" id="lb-password">Confirm  Password:</label>
                            <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation"
                                required />
                        </div>
                        <button type="button" class="btn btn-primary btn-block" id="btn-register" >Sign up</button>
                    </form>
                    <div class="form-choice text-center">
                        <label class="font-secondary">Sign in with social account</label>
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-google fab fa-google"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

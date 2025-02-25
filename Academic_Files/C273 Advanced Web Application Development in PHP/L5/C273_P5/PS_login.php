<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

        <style>
            .divider-text {
                position: relative;
                text-align: center;
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .divider-text span {
                padding: 7px;
                font-size: 12px;
                position: relative;   
                z-index: 2;
            }
            .divider-text:after {
                content: "";
                position: absolute;
                width: 100%;
                border-bottom: 1px solid #ddd;
                top: 55%;
                left: 0;
                z-index: 1;
            }

            .btn-facebook {
                background-color: #405D9D;
                color: #fff;
            }
            .btn-twitter {
                background-color: #42AEEC;
                color: #fff;
            }
            #log_in{
                font-weight: bold;    
            }

        </style>
    </head>
    <body>

        <!--LOGIN SECTION-->

        <section id="login" class="login">

            <div class="container">

                <div class="section-title">
                    <h2>Register</h2>
                    <p class="text-center"> Get started with your free registered account and received exclusive limited PRO BONO services from us!</p>
                </div>

                <div class="card bg-light">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <h4 class="card-title mt-3 text-center">Create Account</h4>

                        <p>
                            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                        </p>
                        <p class="divider-text">
                            <span class="bg-light">OR</span>
                        </p>
                        <form>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input name="" class="form-control" placeholder="Full name" type="text">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input name="" class="form-control" placeholder="Email address" type="email">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                </div>
                                <select class="custom-select" style="max-width: 120px;">
                                    <option selected="">+65</option>
                                    <option value="1">+86</option>
                                    <option value="2">+1</option>
                                    <option value="3">+98</option>
                                </select>
                                <input name="" class="form-control" placeholder="Phone number" type="text">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                </div>
                                <select class="form-control">
                                    <option selected=""> Select job type</option>
                                    <option>Software Developer</option>
                                    <option>Graphic Designer</option>
                                    <option>Business Manager</option>
                                    <option>Software Developer</option>
                                </select>

                            </div> <!-- form-group end.// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Create password" type="password">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Repeat password" type="password">

                            </div> <!-- form-group// -->                                      
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block"> Create Account  </button>

                            </div> <!-- form-group// -->      
                            <p class="text-center">Have an account? <a href="" id= "log_in" style="color:#59B170;">Log In</a> </p>                                                                 
                        </form>
                    </article>
                </div> <!-- card.// -->

            </div> 
            <!--container end.//-->

            <br><br>
        </section>
        <!--END OF LOGIN PAGE-->
    </body>
</html>

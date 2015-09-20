

        <?php include("includes/header.php") ?>


        <?php
        $alert_message = $this->session->userdata('message');
        if ($alert_message !== NULL) {
            ?>

            <div class="container alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong><?php
                    echo $alert_message;
                    $this->session->unset_userdata('message');
                    ?>
            </div>
        <?php } ?>

        <div id="background">
            <div id="signUp">
                <div id="signUpInner">
                    <h3><b>Sign Up</b></h3>
                    <h4>It's free and always will be</h4>
                    <div id="signUpForm">
                        <form action="<?php echo base_url() . "user_sign_up/register"; ?>" method="POST" role="form">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email_address" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control input-lg" id="pwd">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control input-lg" id="pwd1" placeholder="Confirm Password">
                            </div>



                    </div>
                    <div id="copyright"><a href="https://www.facebook.com/roundCubeInc?fref=ts">&#169; roundCube 2015</a></div>
                </div>
                <div id="signUpButton">
                    <button type="submit" class="btn btn-default btn-block btn-lg regButton"><b>REGISTER</b></button>
                    </form>
                </div>

            </div>

            <div id="login">
                <div id="loginInner">
                    <h3><b>Login form</b></h3>
                    <h4>Welcome you back to our site</h4>
                    <div id="loginForm">
                        <form action="<?php echo base_url() . "user_login/check_user_login"; ?>" method="POST" role="form">
                            </br>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control input-lg" id="pwd">
                            </div>
                    </div>
                </div>
                <div id="loginButton">
                    <button type="submit" class="btn btn-default btn-block btn-lg logButton"><b>LOGIN</b></button>
                    </form>
                </div>
            </div>
            <div id="reset">
                <div id="resetInner">
                    <h3><b>Reset Password</b></h3>
                    <h4>Enter your new password</h4>
                    <div id="resetForm">
                        <form action="<?php echo base_url() . "user_login/check_login"; ?>" role="form">
                            </br>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="New Password" class="form-control input-lg" id="pwd">
                            </div>
                    </div>
                </div>
                <div id="resetButton">
                    <button type="submit" class="btn btn-default btn-block btn-lg resetButton"><b>RESET PASSWORD</b></button>
                    </form>
                </div>
            </div>
        </div>



    </body>
    <style>
        #background{
            position: absolute;
            left:0px;
            height:100%;
            width:100%;
            background-color:rgb(38, 38, 38);
            clear: both;
        }
        #signUp{
            position: absolute;
            top:15%;
            left:35%;
            width:30%;
            height:400px;
            border-radius: 10px;
            text-align: center;
            z-index: 10;
            clear: both;
        }
        #signUpForm{
            position: absolute;
            top:30%;
            left:10%;
            width:80%;
            height:60%;
            clear: both;
        }

        #signUpInner{
            position: absolute;
            top:0%;
            left:0%;
            width:100%;
            height:80%;
            background-color: white; 
            border-radius: 10px;
            box-shadow:0px 0px 20px 20px rgba(0,0,0,0.1);
            clear: both;
        }

        #signUpButton{
            position: absolute;
            bottom:0%;
            left:7%;
            width:86%;
            height:17%; 
            clear: both;
        }

        .regButton{
            background-color: rgb(139, 199, 25);
            border-color: rgb(139, 199, 25);
            color: white;
        }
        .regButton:hover{
            background-color: rgb(106, 144, 34);
            border-color: rgb(106, 144, 34);
            color: white;
        }       

        input{
            text-align: center;
        }

        #login{
            position: absolute;
            left:12%;
            width:25%;
            top:17%;
            height:300px;
            border-radius: 10px;
            z-index: 1;
            opacity: 0.7;
            clear: both;
        }

        #loginInner{
            position: absolute;
            top:0%;
            left:0%;
            width:100%;
            height:80%;
            background-color: white; 
            border-radius: 10px;
            text-align: center;
            clear: both;
        }

        #loginButton{
            position: absolute;
            bottom:0%;
            left:7%;
            width:86%;
            height:17%; 
            clear: both;
        }

        #loginForm{
            position: absolute;
            top:30%;
            left:10%;
            width:80%;
            height:60%;
            clear: both;
        }

        .logButton{
            background-color: rgb(25, 108, 240);
            border-color: rgb(25, 108, 240);
            color: white;
        }
        .logButton:hover{
            background-color: rgb(23, 86, 185);
            border-color: rgb(23, 86, 185);
            color: white;
        }  

        #reset{
            position: absolute;
            right:12%;
            width:25%;
            top:17%;
            height:300px;
            border-radius: 10px;
            z-index: 1;
            opacity: 0.7;
            clear: both;
        }

        #resetInner{
            position: absolute;
            top:0%;
            left:0%;
            width:100%;
            height:80%;
            background-color: white; 
            border-radius: 10px;
            text-align: center;
            clear: both;
        }

        #resetButton{
            position: absolute;
            bottom:0%;
            left:7%;
            width:86%;
            height:17%; 
            clear: both;
        }

        #resetForm{
            position: absolute;
            top:30%;
            left:10%;
            width:80%;
            height:60%;
            clear: both;
        }

        .resetButton{
            background-color: rgb(229, 34, 42);
            border-color: rgb(229, 34, 42);
            color: white;
        }
        .resetButton:hover{
            background-color: rgb(222, 20, 28);
            border-color: rgb(222, 20, 28);
            color: white;
        }

        #copyright{
            position: absolute;
            bottom:0px;
            left:0px;
            height:7%;
            width: 100%;
            opacity: 0.5;
            clear: both;
        }

        #copyright a{
            text-decoration: none;
            color:black;
        }

        @media only screen and (max-width:888px)
        {
            #signUp{
                left:32.5%;
                width:35%;
            }
            #login{
                left:8%;
                width:30%;
            }
            #reset{
                right:8%;
                width:30%;  
            }
        }
    </style>
</html>

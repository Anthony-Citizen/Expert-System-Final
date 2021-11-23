<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expert Auto Care - Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user_template')}}/assets/img/favicon.ico" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('user_template')}}/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('user_template')}}/assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <a href="index.html"><img src="{{asset('user_template')}}/assets/img/logo/logo.png" alt=""></a>
                <br>
                <img src="{{asset('user_template')}}/assets/img/hero-car.png" alt="">
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form">
                    <h2>Car Data Input</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">First Name :</label>
                            <input type="text" name="name" id="name" required />
                        </div>
                        <div class="form-group">
                            <label for="father_name">Surname :</label>
                            <input type="text" name="father_name" id="father_name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="text" name="address" id="address" required />
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" checked>
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female">
                            <label for="female">Female</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">State :</label>
                            <div class="form-select">
                                <select name="state" id="state">
                                    <option value=""></option>
                                    <option value="id">Indonesia</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <div class="form-select">
                                <select name="city" id="city">
                                    <option value=""></option>
                                    <option value="losangeles">Jakarta</option>
                                    <option value="washington">Bogor</option>
                                    <option value="washington">Depok</option>
                                    <option value="washington">Tangerang</option>
                                    <option value="washington">Bekasi</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birth Date :</label>
                        <input type="text" name="birth_date" id="birth_date">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Chassis Number :</label>
                        <input type="text" name="pincode" id="pincode">
                    </div>
                    <div class="form-group">
                        <label for="course">Car Model :</label>
                        <div class="form-select">
                            <select name="course" id="course">
                                <option value=""></option>
                                <option value="computer">Avanza</option>
                                <option value="desiger">Agya</option>
                                <option value="washington">Raize</option>
                                <option value="washington">Rush</option>
                                <option value="washington">Hilux</option>
                                <option value="washington">Yaris</option>
                                <option value="washington">Vios</option>
                                <option value="washington">Innova</option>
                                <option value="washington">Voxy</option>
                                <option value="washington">Corolla</option>
                                <option value="washington">HiAce</option>
                                <option value="washington">Sienta</option>
                                <option value="washington">Fortuner</option>
                                <option value="washington">Camry</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Production Year :</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="form-submit">
                        <a href="index.html" id="reset" name="cancel" class="btn" style="border-radius: 50px;">Cancel</a>
                        <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/form.js"></script>
</body>

</html>

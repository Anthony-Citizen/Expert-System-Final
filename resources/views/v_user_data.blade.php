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
                <form action="/user/insert" method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                    @csrf
                    <h2>Car Data Input</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">First Name :</label>
                            <input type="text" name="name" id="name" required />
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname :</label>
                            <input type="text" name="surname" id="surname" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="text" name="address" id="address" required />
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" value="Male" checked>
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female" value="Female">
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
                                    <option value="Indonesia">Indonesia</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <div class="form-select">
                                <select name="city" id="city">
                                    <option value=""></option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bogor">Bogor</option>
                                    <option value="Depok">Depok</option>
                                    <option value="Tangerang">Tangerang</option>
                                    <option value="Bekasi">Bekasi</option>
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
                        <label for="c_number">Chassis Number :</label>
                        <input type="text" name="c_number" id="c_number">
                    </div>
                    <div class="form-group">
                        <label for="car_type">Car Model :</label>
                        <div class="form-select">
                            <select name="car_type" id="car_type">
                                <option value=""></option>
                                <option value="Avanza">Avanza</option>
                                <option value="Agya">Agya</option>
                                <option value="Raize">Raize</option>
                                <option value="Rush">Rush</option>
                                <option value="Hilux">Hilux</option>
                                <option value="Yaris">Yaris</option>
                                <option value="Vios">Vios</option>
                                <option value="Innova">Innova</option>
                                <option value="Voxy">Voxy</option>
                                <option value="Corolla">Corolla</option>
                                <option value="HiAce">HiAce</option>
                                <option value="Sienta">Sienta</option>
                                <option value="Fortuner">Fortuner</option>
                                <option value="Camry">Camry</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="year">Production Year :</label>
                        <input type="text" name="year" id="year" />
                    </div>
                    <div class="form-submit">
                        <a href="index.html" id="reset" name="cancel" class="btn" style="border-radius: 50px;">Cancel</a>
                        <!--<input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />-->
                        <button class="btn btn-primary btn-sm">Submit</button>
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

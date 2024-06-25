<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Index</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" id="colors">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
</head>



<style>
    body {
        font-family: Arial, sans-serif;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 999;
        height: 60%;
        width: 80%
    }

    .overlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }
</style>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .popup1 {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 999;
        height: 80%;
        width: 100%
    }

    .overlay1 {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
    }
</style>

<style>
    @media (max-width: 991px) {
        .mt {
            margin-top: 34% !important;
        }

        .mt1 {
            margin-top: 3% !important;
        }
    }

    .slider,
    .slider>div {
        /* Images default to Center Center. Maybe try 'center top'? */
        background-position: center center;
        display: block;
        width: 100%;
        height: 500px;
        /* height: 100vh; */
        /* If you want fullscreen */
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #000;
        overflow: hidden;
        -moz-transition: transform .4s;
        -o-transition: transform .4s;
        -webkit-transition: transform .4s;
        transition: transform .4s;
    }

    .slider>div {
        position: absolute;
    }

    .slider>i {
        color: #5bbd72;
        position: absolute;
        font-size: 60px;
        margin: 20px;
        top: 40%;
        text-shadow: 0 10px 2px #223422;
        transition: .3s;
        width: 30px;
        padding: 10px 13px;
        background: #fff;
        background: rgba(255, 255, 255, .3);
        cursor: pointer;
        line-height: 0;
        box-sizing: content-box;
        border-radius: 0px;
        z-index: 4;
    }

    .slider>i svg {
        margin-top: 3px;
    }

    .slider>.left {
        left: -100px;
    }

    .slider>.right {
        right: -100px;
    }

    .slider:hover>.left {
        left: 0;
    }

    .slider:hover>.right {
        right: 0;
    }

    .slider>i:hover {
        background: #fff;
        background: rgba(255, 255, 255, .8);
        transform: translateX(-2px);
    }

    .slider>i.right:hover {
        transform: translateX(2px);
    }

    .slider>i.right:active,
    .slider>i.left:active {
        transform: translateY(1px);
    }

    .slider:hover>div {
        transform: scale(1.01);
    }

    .hoverZoomOff:hover>div {
        transform: scale(1);
    }

    /* The Dots */
    .slider>ul {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 4;
        padding: 0;
        margin: 0;
        transform: translateX(-50%);
    }

    .slider>ul>li {
        padding: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        list-style: none;
        float: left;
        margin: 10px 10px 0;
        cursor: pointer;
        border: 1px solid #fff;
        -moz-transition: .3s;
        -o-transition: .3s;
        -webkit-transition: .3s;
        transition: .3s;
    }

    .slider>ul>.showli {
        background-color: #fc0202;
        -moz-animation: boing .5s forwards;
        -o-animation: boing .5s forwards;
        -webkit-animation: boing .5s forwards;
        animation: boing .5s forwards;
    }

    .slider>ul>li:hover {
        background-color: #fc0202;
    }

    .slider>.show {
        z-index: 1;
    }

    .hideDots>ul {
        display: none;
    }

    .showArrows>.left {
        left: 0;
    }

    .showArrows>.right {
        right: 0;
    }

    .titleBar {
        z-index: 2;
        display: inline-block;
        background: rgba(0, 0, 0, .5);
        position: absolute;
        width: 100%;
        bottom: 0;
        transform: translateY(100%);
        padding: 20px 30px;
        transition: .3s;
        color: #fff;
    }

    .titleBar * {
        transform: translate(-20px, 30px);
        transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
        opacity: 0;
    }

    .titleBarTop .titleBar * {
        transform: translate(-20px, -30px);
    }

    .slider:hover .titleBar,
    .slider:hover .titleBar * {
        transform: translate(0);
        opacity: 1;
    }

    .titleBarTop .titleBar {
        top: 0;
        bottom: initial;
        transform: translateY(-100%);
    }

    .slider>div span {
        display: block;
        background: rgba(0, 0, 0, .5);
        position: absolute;
        bottom: 0;
        color: #fff;
        text-align: center;
        padding: 0;
        width: 100%;
    }

    .swal2-popup.swal2-toast .swal2-title {
        font-size: 1.3em !important;
    }

    @keyframes boing {
        0% {
            transform: scale(1.2);
        }

        40% {
            transform: scale(.6);
        }

        60% {
            transform: scale(1.2);
        }

        80% {
            transform: scale(.8);
        }

        100% {
            transform: scale(1);
        }
    }

    /* -------------------------------------- */

    #slider2 {
        max-width: 30%;
        margin-right: 20px;
    }

    .row2Wrap {
        display: flex;
    }

    .content {
        padding: 50px;
        margin-bottom: 100px;
    }

    html {
        height: 100%;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    h1,
    h2,
    h3 {
        font-family: 'Crimson Text', sans-serif;
        font-weight: 100;
    }


    .content {
        padding: 10px 15vw;
    }
</style>
<style>
    .otp-input {
        width: 1em;
        text-align: center;
        margin: 0 15px;
        padding: 5px;
        font-size: 16px;

        /*	     width: 40px;
    border: none;
    border-bottom: 3px solid rgba(0, 0, 0, 0.5);
    margin: 0 10px;
    text-align: center;
    font-size: 36px;
    cursor: not-allowed;
    pointer-events: none;*/
    }

    /* Optional: Style for better visibility */
    .otp-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 7vh;
    }


    .badge {
        display: block;
        position: absolute;
        top: -14px;
        right: -30px;
        line-height: 16px;
        height: 16px;
        padding: 0 8px;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        background-color: red;
        font-family: Arial, sans-serif;
        border: 1px solid;
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.08);
    }


    .topnav {
        overflow: hidden;
    }

    .topnav a {
        padding: 14px 16px;
        border-bottom: 1.5px solid transparent;
    }

    .topnav a:hover {
        border-bottom: 1.5px solid red;
    }

    .topnav a.active {
        border-bottom: 1.5px solid red;
    }


    /* Active date hover color */
    .calendar-table .available:hover,
    .calendar-table .available.active {
        background-color: #5cb85c;
        /* Green color */
        color: #fff;
        /* Text color */
        cursor: pointer;
    }

    /* Disabled date hover color */
    .calendar-table .disabled:hover {
        background-color: #beb1b1;
        /* Gray color */
        color: #555;
        /* Text color */
        cursor: not-allowed;
    }

    .daterangepicker td.disabled,
    .daterangepicker option.disabled {
        background-color: #cec9c9 !important;
    }

    .bar {
        display: flex;
        border-radius: 10px;
        color: #000;

        input {
            opacity: 0;
            position: absolute;
        }

        input:checked+label {
            font-weight: bold;
            border-color: #398EFF;
            border-bottom: 1.5px solid;
            border-radius: 1px;
            transition: .25s ease;
        }

        label {
            padding: 5px;
            cursor: pointer;
            transition: .25s ease;
        }
    }
</style>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 24px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 8px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .show {
        display: block;
    }

    /* Modal Container */
    .modal {
        display: none;
        position: fixed;
        z-index: 1050;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    /* Modal Content */
    .modal-dialog {
        position: relative;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        background-color: white;
        border-radius: 5px;
        animation-name: animatetop;
        animation-duration: 0.4s;
    }

    /* Keyframes for Modal Animation */
    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    /* Modal Header */
    .modal-header {
        padding: 10px 20px;
        background-color: #ff2222;
        color: white;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 12px;
    }

    .modal-title {
        margin: 0;
        font-size: 1.5em;
        line-height: 1.5;
    }

    .close {
        color: white;
        font-size: 1.5em;
        font-weight: bold;
        border: none;
        background: none;
        cursor: pointer;
    }

    /* Modal Body */
    .modal-body {
        padding: 20px;
    }

    /* Modal Footer */
    .modal-footer {
        padding: 10px 20px;
        text-align: right;
        border-top: 1px solid #e9ecef;
    }

    .modal-footer button {
        padding: 10px 20px;
        margin-left: 10px;
        border: none;
        background-color: #ff2222;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .modal-footer button:hover {
        background-color: #ff2222;
    }

    /* Form Inputs */
    #editReviewForm input[type="text"],
    #editReviewForm textarea {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    /* Rating Stars */
    .utf_leave_rating1 input[type="radio"] {
        display: none;
    }

    .utf_leave_rating1 input[type="radio"]:checked~label {
        color: #ffc107;
    }

    .utf_leave_rating1 input[type="radio"]:checked+label~label {
        color: #ffc107;
    }

    .utf_leave_rating1 label:hover,
    .utf_leave_rating1 label:hover~label {
        color: #ffc107;
    }

    .utf_leave_rating1 label.checked {
        color: #ffc107;
        /* or your preferred color */
    }

    .utf_leave_rating1 {
        display: flex;
        flex-direction: row-reverse;
        /* To arrange the stars in reverse order */
        justify-content: flex-end;
        /* Aligns the stars to the right end */
    }

    .utf_leave_rating1 input {
        display: none;
        /* Hide the radio buttons */
    }

    .utf_leave_rating1 label {
        cursor: pointer;
        font-size: 30px;
        /* Adjust the size as needed */
        color: grey;
        /* Default star color */
        padding: 0 5px;
        /* Space between stars */
    }
    .close11-button{
     color: #ff2222;
    background-color: #fff;
    border-radius: 50px;
    top: 20px;
    right: 20px;
    width: 34px;
    height: 34px;
    }
</style>

<body class="header-one">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper -->
    <div id="main_wrapper">

        <header id="header_part" class="fullwidth">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo">
                            <a href="{{ route('website_index') }}"><img
                                    src="{{ asset('public/images/weeding-logo.png') }}"></a>
                        </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
                                <span class="utf_inner_button_box">
                                    <span class="utf_inner_section"></span>
                                </span>
                            </button>
                        </div>
                        <nav id="navigation" class=" topnav">
                            <ul id="responsive">
                                <li><a href="{{ route('website_index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('how-it-work') }}">How It Works</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="https://bookmyweddinghall.com/#hall1">Vendors</a></li>
                                @if (Auth::check())
                                    <li><a href="#">History</a></li>
                                @endif
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side">
                        <div class="header_widget">
                            @if (!Auth::check())
                                <a href="{{ route('business_listing_login') }}" class="button border with-icon"
                                    style="background-color:#fff; border-color:red; color:red;">Free Business
                                    Listing</a>
                            @endif

                            @if (Auth::check())
                                @if (Auth::user()->gender == 'Female')
                                    <a href="{{ route('user_profile') }}" style=" color:red;"> <img
                                            src="{{ asset('public/images/female.png') }}"
                                            style="width:30px; height:30px;"> &nbsp;{{ Auth::user()->name }}</a>
                                @else
                                    <a href="{{ route('user_profile') }}" style=" color:red;"> <img
                                            src="{{ asset('public/images/male.png') }}"
                                            style="width:30px; height:30px;"> &nbsp;{{ Auth::user()->name }}</a>
                                @endif
                            @endif



                            @if (Auth::check())
                                <a href="{{ route('logout') }}"><i class="fa fa-power-off" aria-hidden="true"
                                        style="color:red; padding-left:20px;"></i>
                                </a>
                            @else
                                <span id="sign_in">
                                    <a href="#dialog_signin_part" onclick="opensignin();"
                                        class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i>
                                        Sign In</a>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                        <div class="small_dialog_header" style="padding-top:5px; padding-bottom:5px;">
                            <p style="color:#fff;">Welcome</p>
                            <div align="center">
                                <img src="{{ asset('public/images/weeding-logo1.png') }}"
                                    style="width:60%; height:60%;" align="center">
                                <!--<h3 id="header_change">Sign In</h3>-->
                            </div>
                        </div>
                        <div class="utf_signin_form style_one">
                            <span class="pop_up_div">
                                <!--<ul class="utf_tabs_nav">
                                <li id="login_id"><a href="#tab1">Log In</a></li>
                                <li id="reg_id"><a href="#tab2">Register</a></li>
                            </ul>-->
                            </span>
                            <div class="tab_container alt">
                                <span class="pop_up_div" id="login_page">
                                    <div class="tab_content" id="tab1" style="display:none;">
                                        <form method="post" class="login" action="{{ route('login') }}">
                                            @csrf
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="username">
                                                    <input type="text" class="input-text" name="email"
                                                        id="username" value="" placeholder="Username" />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block"
                                                style="margin-bottom:0px; padding-bottom:0px;">
                                                <label for="password">
                                                    <input class="input-text" type="password" name="password"
                                                        id="password" placeholder="Password" />
                                                </label>
                                            </p>
                                            <div class="utf_row_form utf_form_wide_block form_forgot_part"
                                                style="margin-bottom:5px;"> <span class="lost_password fl_left">
                                                    <a href="javascript:void(0);" onclick="openSmallPopup()"
                                                        style="font-size:12px;">Forgot
                                                        Password?</a> </span>
                                                <div class="checkboxes fl_right">
                                                    <input id="remember-me" type="checkbox" name="check">
                                                </div>
                                            </div>
                                            <div class="utf_row_form">
                                                <input type="submit" class="button border margin-top-0"
                                                    style="background-color:#fff; border-color:red; color:red; border:1px solid;" />
                                            </div>

                                            <div class="utf_row_form" style="margin-top:15px;" align="center">
                                                <!-- <input type="submit" class="button border margin-top-5" style="background-color:#fff; color:red; border:1px solid; border-color:red;" />-->
                                                <a href="javascript:void(0);" onclick="openSmallPopup()"
                                                    style="font-size:15px;">Don't have an Account?</a>
                                                <a href="javascript:void(0);" onclick="openSmallPopupreg()"><span
                                                        style="color:red;"> &nbsp;<b>Free sign up</b></span></a>
                                            </div>

                                        </form>
                                    </div>
                                </span>
                                <span id="tab2" class="pop_up_div" style="display:none;">
                                    <div class="small-popup">

                                        <form id="reg_form" class="utf_add_comment"
                                            action="{{ route('storeRegistration') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-4">
                                                    <input class="check-a1" type="radio" name="user_type" checked
                                                        value="user">
                                                    <label>User</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="check-a1" type="radio" name="user_type"
                                                        value="business">
                                                    <label>Business</label>
                                                </div>
                                            </div>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="name">
                                                    <input type="text" class="input-text" name="name"
                                                        id="name" value="" placeholder="Name" required>
                                                </label>
                                            </p>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="email">
                                                    <input type="text" class="input-text" name="email"
                                                        id="email" value="" placeholder="Email" required>
                                                </label>
                                            </p>

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="email">
                                                    <select title="Select Gender" name="gender"
                                                        style="padding-left: 15px;padding-bottom:9px;">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </label>
                                            </p>


                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="contact-no">
                                                    <input class="input-text" type="text" name="contact_no"
                                                        id="contact_no" placeholder="Contact No" maxlength="10"
                                                        required />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="password1">
                                                    <input class="input-text" type="password" name="password"
                                                        id="password1" placeholder="Password" required />
                                                </label>
                                            </p>
                                            <button type="button" class="button border fw margin-top-10"
                                                onclick="validateAndSendOTP()"
                                                style="background-color:#fff; border-color:red; color:red; border:1px solid;">Verify
                                                OTP</button>
                                            {{-- <button type="button" onclick="togglePopup()"
                                        class="button border fw margin-top-10" name="register"
                                        value="Register"> OTP</button> --}}
                                        </form>



                                    </div>
                                </span>
                                <div class="overlay" id="mainOverlay"></div>

                                <span id="mobile_no" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup1">
                                        <span class="close-mark" onclick="closeSmallPopup1()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <form method="post" class="register" id="otpForm"
                                            action="{{ route('send_otp') }}">
                                            @csrf
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="contact">
                                                    <input type="text" class="input-text" name="contact"
                                                        id="contact" value=""
                                                        placeholder="Enter Phone Number" />
                                                </label>
                                            </p>


                                            <input type="button" class="button border fw" onclick="sendOtp()"
                                                name="register" value="Next"
                                                style="background-color:#fff; border-color:red; color:red; border:1px solid;" />


                                        </form>

                                    </div>
                                </span>

                                <span id="reset_otp" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup2">
                                        <span class="close-mark" onclick="closeSmallPopup2()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <div class="otp-container" style="margin-top:15%;">
                                            <input id="otpInput1" class="otp-input" type="text" maxlength="1" />
                                            <input id="otpInput2" class="otp-input" type="text" maxlength="1" />
                                            <input id="otpInput3" class="otp-input" type="text" maxlength="1" />
                                            <input id="otpInput4" class="otp-input" type="text" maxlength="1" />
                                        </div>
                                        <p style="text-align: center;">Resend OTP</p>
                                        {{-- <input type="button" class="button border fw margin-top-10" onclick="openSmallPopup3()"
								name="register" value="Next" /> --}}
                                        <input type="button" class="button border fw margin-top-10"
                                            onclick="verifyOtpforforgotpass()" name="register" value="Next"
                                            style="background-color:#fff; border-color:red; color:red; border:1px solid;" />

                                    </div>
                                </span>
                                <!-- Small Popup container 3 -->

                                <span id="update_password" class="pop_up_div" style="display:none;">
                                    <div class="small-popup" id="smallPopup3">
                                        <span class="close-mark" onclick="closeSmallPopup3()"><img
                                                src="{{ asset('public/images/cross.png') }}" style="height:25px;"
                                                alt=""></span>
                                        <form method="post" action="{{ route('update_password') }}"
                                            class="register" onsubmit="submitNewPasswordForm(); return false;">
                                            @csrf

                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="newPassword" style="margin-top:10%;">
                                                    <input type="text" class="input-text" name="newPassword"
                                                        id="newPassword" value="" placeholder="New Password"
                                                        required />
                                                </label>
                                            </p>
                                            <p class="utf_row_form utf_form_wide_block">
                                                <label for="confirmPassword">
                                                    <input type="password" class="input-text" name="confirmPassword"
                                                        id="confirmPassword" value=""
                                                        placeholder="Confirm Password" required />
                                                </label>
                                            </p>

                                            <div style="text-align: center;">
                                                <input type="submit" class="button border fw margin-top-10 button-1"
                                                    name="register" style="" value="Submit" />
                                            </div>
                                        </form>
                                        <!-- Add any content or buttons for the third small popup -->
                                    </div>
                                </span>
                                <div class="overlay" id="overlay"></div>
                                <div class="popup" id="popup">
                                    {{-- <button style="width: 20px;" onclick="togglePopup1()"
                                  style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
                                      style="color: #000; "></i></button> --}}
                                      <button class="close11-button" style="text-align: center;" onclick="closePopup()" align="right">
                                        <i class="fa fa-times" aria-hidden="true" style="color: #ff0202;"></i>
                                    </button>
                                    <div class="verification-code">
                                        <label class="control-label" style="color:red; font-size: 24px;">Verification
                                            Code</label>
                                        <div class="verification-code--inputs">
                                            <input type="text" id="otp1" maxlength="1" />
                                            <input type="text" id="otp2" maxlength="1" />
                                            <input type="text" id="otp3" maxlength="1" />
                                            <input type="text" id="otp4" maxlength="1" />

                                        </div>
                                        <button type="submit" class="button border fw margin-top-10" name="register"
                                            onclick="verifyOTP()" value="Register">Verify </button>
                                        <input type="hidden" id="verificationCode" />
                                    </div>
                                </div>

                                <div class="overlay1" id="overlay"></div>

                                <div class="popup1" id="popup1">
                                    <button style="width: 20px;" onclick="togglePopup1()"
                                        style="text-align:right;"><i class="fa fa-times" aria-hidden="true"
                                            style="color: #000; "></i></button>
                                    <form method="post" class="register">
                                        <label class="control-label" style="color:red; font-size: 24px;"
                                            align="center">Forget Password</label>

                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="username2">
                                                <input type="text" class="input-text" name="username"
                                                    id="username2" value="" placeholder="New Password" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="email2">
                                                <input type="text" class="input-text" name="email"
                                                    id="email2" value="" placeholder="Confirm Password" />
                                            </label>
                                        </p>

                                        <input type="submit" class="button border fw margin-top-10" name="register"
                                            value="Submit" />
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </header>
        {{-- <div class="clearfix"></div> --}}
        <div class="slider" id="slider1">
            <!-- Slides -->
            @isset($listing_page->banner_image)
                @foreach ($listing_page->banner_image as $image)
                    <div style="background-image: url('{{ asset('public/panel/images/banner_images/' . $image) }}')">
                    </div>
                @endforeach
            @endisset
            {{-- <div style="background-image:url(images/hall2.jpg)"></div>
      <div style="background-image:url(images/hall1.jpg)"></div> --}}
            <!-- <div style="background-image:url(images/house2.jpg)"></div> -->
            <!-- The Arrows -->
            <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                </svg></i>
            <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                        transform="translate(100, 100) rotate(180) ">
                    </path>
                </svg></i>

        </div>

        <div class="container">
            <div class="row utf_sticky_main_wrapper">
                <div class="col-lg-8 col-md-8">
                    <div id="titlebar" class="utf_listing_titlebar">
                        <div class="utf_listing_titlebar_title">
                            <h2>{{ $listing_page->name }}</h2>
                            <span> <a href="#utf_listing_location" class="listing-address"> <i
                                        class="sl sl-icon-location"></i>{{ $listing_page->address }} </a> </span>
                            <!-- <span class="call_now"><i class="sl sl-icon-phone"></i> (415) 796-3633</span> -->
                            <div class="utf_star_rating_section"
                                data-rating="{{ $listing_page->ListingReview->average_rating }}">
                                <div class="utf_counter_star_rating">
                                    ({{ number_format($listing_page->ListingReview->average_rating, 1) }}) /
                                    ({{ $listing_page->ListingReview->number_of_reviews }} Reviews)</div>

                            </div>
                            {{-- <ul class="listing_item_social">
                            <li><a href="#"><i class="fa fa-star"></i>Review</a></li>
                            <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                        </ul> --}}
                            <div id="utf_listing_tags"
                                class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                                <a href="tel:{{ $listing_page->contact_no }}"><i class="sl sl-icon-phone"
                                        aria-hidden="true"></i>
                                    {{ $listing_page->contact_no }}</a>
                                <a href="mailto:{{ $listing_page->email }}"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i>
                                    {{ $listing_page->email }}</a>
                                <a href="{{ $listing_page->website_link }}"><i class="sl sl-icon-globe"
                                        aria-hidden="true"></i>
                                    {{ $listing_page->website_link }}</a>
                            </div>

                        </div>
                    </div>
                    <div id="utf_listing_overview" class="utf_listing_section">
                        <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Hall Description</h3>
                        <p> {{ $listing_page->description }}
                        </p>
                        <div class="social-contact">
                            @if ($listing_page->facebook_link)
                                <a href="{{ URL::to($listing_page->facebook_link) }}" class="facebook-link" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            @endif
                        
                            @if ($listing_page->instagram_link)
                                <a href="{{ $listing_page->instagram_link }}" class="instagram-link" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            @endif
                        
                            @if ($listing_page->linkedin_link)
                                <a href="{{ $listing_page->linkedin_link }}" class="linkedin-link" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            @endif
                        
                            @if ($listing_page->youtube_link)
                                <a href="{{ $listing_page->youtube_link }}" class="youtube-link" target="_blank">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            @endif
                        
                            @if ($listing_page->twitter_link)
                                <a href="{{ $listing_page->twitter_link }}" class="twitter-link">
                                    <img src="{{ asset('public/images/twiter.png') }}" style="height:15px;width:15px">
                                </a>
                            @endif
                        
                            @if ($listing_page->threads_link)
                                <a href="{{ $listing_page->threads_link }}" style="background-color:#000 !important;">
                                    <img src="{{ asset('public/images/thread.png') }}" style="height:15px;width:15px;">
                                </a>
                            @endif
                        </div>
                        
                    </div>
                    {{-- @if ($listing_page->show_price == 'yes')
                <div id="utf_listing_overview" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Hall Price</h3>
                    <p> {{ $listing_page->price }}
                    </p> 
                </div>
                @endif --}}


                    <div class="utf_listing_section">
                        <div class="show-more">
                            <div class="utf_pricing_list_section">
                                <h4>Our Vendors</h4>
                                <ul>
                                    @if (isset($listing_page->vendor_name))


                                        {{-- @json($listing_page) --}}
                                        @php
                                            $vendor_names = json_decode($listing_page->vendor_name);
                                            $vendor_descriptions = json_decode($listing_page->vendor_description);
                                            $vendor_prices = json_decode($listing_page->vendor_price);
                                            $vendor_images = json_decode($listing_page->vendor_image);
                                            $vendor_offers = json_decode($listing_page->vendor_offer);
                                            $vendor_discounts = json_decode($listing_page->vendor_discount);

                                            // Rearrange the arrays to bring "Zhep cab" to the front, if it exists
                                            $vendor_data = [];
                                            $zhep_cab_data = null;
                                            foreach ($vendor_names as $index => $vendor_name) {
                                                if (strcasecmp($vendor_name, 'Zhep cab') === 0) {
                                                    $zhep_cab_data = [
                                                        'name' => $vendor_name,
                                                        'description' => $vendor_descriptions[$index],
                                                        'price' => $vendor_prices[$index],
                                                        'image' => $vendor_images[$index],
                                                        'offer' => $vendor_offers[$index],
                                                        'discount' => $vendor_discounts[$index],
                                                    ];
                                                    unset($vendor_names[$index]);
                                                    unset($vendor_descriptions[$index]);
                                                    unset($vendor_prices[$index]);
                                                    unset($vendor_images[$index]);
                                                    unset($vendor_offers[$index]);
                                                    unset($vendor_discounts[$index]);
                                                    break; // Stop after finding the first occurrence of "Zhep cab"
                                                }
                                            }

                                            // Push remaining vendors to the array
                                            foreach ($vendor_names as $index => $vendor_name) {
                                                $vendor_data[] = [
                                                    'name' => $vendor_name,
                                                    'description' => $vendor_descriptions[$index],
                                                    'price' => $vendor_prices[$index],
                                                    'image' => $vendor_images[$index],
                                                    'offer' => $vendor_offers[$index],
                                                    'discount' => $vendor_discounts[$index],
                                                ];
                                            }

                                            // If "Zhep cab" data was found, prepend it to the vendor data array
                                            if ($zhep_cab_data !== null) {
                                                array_unshift($vendor_data, $zhep_cab_data);
                                            }
                                        @endphp

                                        @if (!empty($vendor_data))
                                            @foreach ($vendor_data as $vendor)
                                                <li>
                                                    <h5>{{ $vendor['name'] }}
                                                        @if ($vendor['offer'] == 'percent')
                                                            <sub class="ppl-offer label-light-success">{{ $vendor['discount'] }}%
                                                                off
                                                            </sub>
                                                        @elseif($vendor['offer'] == 'null')
                                                            <sub class="ppl-offer"> </sub>
                                                        @else
                                                            <sub class="ppl-offer label-light-success">{{ $vendor['discount'] }}₹
                                                                off
                                                            </sub>
                                                        @endif
                                                    </h5>
                                                    @php
                                                        $discountedPrice = $vendor['price']; // Default discounted price is the original price

                                                        if (isset($vendor['offer']) && $vendor['offer'] > 0) {
                                                            if ($vendor['offer'] === 'percent') {
                                                                // Calculate the discounted price for percentage offer
                                                                $discountedPrice =
                                                                    $vendor['price'] -
                                                                    ($vendor['price'] * $vendor['discount']) / 100;
                                                            } elseif ($vendor['offer'] === 'rupees') {
                                                                // Calculate the discounted price for fixed rupees offer
                                                                $discountedPrice =
                                                                    $vendor['price'] - $vendor['discount'];
                                                            }
                                                        }
                                                        // echo $discountedPrice;
                                                    @endphp
                                                    <p>{{ $vendor['description'] }}</p>

                                                    @if ($discountedPrice < $vendor['price'])
                                                        {{-- Display original price with discount --}}
                                                        <span style="background-color:white !important;color:#575555;">
                                                            <label
                                                                style="text-decoration: line-through;display:inline; margin-right:5px;">
                                                                ₹{{ $vendor['price'] }} </label>
                                                            ₹{{ $discountedPrice }}</span>
                                                    @else
                                                        {{-- Display original price without discount --}}
                                                        <span
                                                            style="background-color:white !important;color:#575555">₹{{ $vendor['price'] }}</span>
                                                    @endif

                                                    {{-- <img src="{{ asset('public/panel/images/vendor_image/' . $vendor['image']) }}" alt="Vendor Image"> --}}
                                                </li>
                                            @endforeach
                                        @endif
                                    @endif
                                </ul>
                                <a href="#" class="show-more-button" data-more-title="Show More"
                                    data-less-title="Show Less"><i class="fa fa-angle-double-down"></i></a>
                            </div>

                        </div>

                        @php
                            $vendor_image = json_decode($listing_page->vendor_image);
                        @endphp

                        @if (is_array($vendor_image))
                            @foreach ($vendor_image as $index => $image)
                                <div id="slider">
                                    <div class="slides">
                                        <img src="{{ asset('public/panel/images/vendor_image/' . $image) }}"
                                            style="width:650px; height:400px;" />
                                    </div>

                                </div>
                            @endforeach
                            <div id="dot"><span class="dot"></span><span class="dot"></span><span
                                    class="dot"></span><span class="dot"></span><span class="dot"></span>
                            </div>
                        @endif
                        {{-- <div class="slides">  
                <img src="https://placehold.co/600x300" width="100%" />
              </div>
                
                <div class="slides">  
                <img src="https://placehold.co/600x300" width="100%">     </div> 
                
                 <div class="slides">  
                <img src="https://placehold.co/600x300" width="100%" />
              </div> 
                
              <div class="slides">  
                <img src="https://placehold.co/600x300" width="100%" />
              </div>   --}}
                        {{-- @endforeach
                <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
               </div>
        
        
                 <div id="utf_listing_amenities" class="utf_listing_section">
        <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Amenities</h3>
    
        @php
        $amenitiess = $listing_page->amenities; 
        $amenities = App\Models\admin\Aminities::whereIn('id', $amenitiess)->pluck('aminities')->toArray();

    @endphp
      
        <ul class="utf_listing_features checkboxes margin-top-0">
          @foreach ($amenities as $amenities)
          <li>{{$amenities}}</li>
          @endforeach
          {{-- <li>Swimming Pool</li>
          <li>Room Service</li>
          <li>Luxury Bedding</li>
          <li>Free Wifi</li>
          <li>Bath Towel</li>
          <li>Wireless Internet</li>
          <li>Free Parking on premises</li>
          <li>Free Parking on Street</li>
          <li>Live Music</li>
          <li>Indoor Pool</li> --}}
                        </ul>
                    </div>

                </div>



                <!-- Sidebar -->
                <form action="{{ route('booking') }}" method="post">
                    @csrf
                    <input type="hidden" id="listing_id" name="listing_id" value="{{ $listing_page->id }}">
                    <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">

                        <div class="utf_box_widget booking_widget_box">

                            <h3><i class="fa fa-calendar"></i> Booking

                            </h3>
                            {{-- @json($listing_page->listing_id) --}}
                            @foreach ($listing_anemity as $index)
                                <!-- <div style="display: inline-block; margin-right: 10px;">
                            <input type="radio" class="amenity" name="amenities_for_booking" value="{{ $index->id }}">
                            {{ ucfirst($index->amenity) }}
                        </div>-->

                                <div class="bar" style="display: inline-block;">

                                    <input type="radio" id="{{ $index->id }}" class="amenity"
                                        name="amenities_for_booking" value="{{ $index->id }}" />
                                    <label for="{{ $index->id }}">{{ ucfirst($index->category) }}</label>
                                    <div class="line" id="{{ $index->id }}"></div>
                                </div>
                            @endforeach

                            <span><b
                                    style="height: 45px; line-height: 40px; padding: 0 8px; outline: none; font-size: 15px; color: #808080; display: block; background-color: #fff; border: 1px solid #dbdbdb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.03); font-weight: 400; opacity: 1; border-radius: 4px; margin-top:10px;">
                                    ₹ <span id="price-value"></span></b></span>
                            <ul class="listing_item_social">
                                <!-- <li style="color:#000; padding-left:3px; padding-right:3px; border-radius: 5px;"><i class="fa fa-square-o" aria-hidden="true" style="color:green"></i>Available</li>  -->
                                <li style=" color:#000; padding-left:3px; padding-right:3px; border-radius: 5px;"><i
                                        class="fa fa-square" aria-hidden="true" style="color:green"></i>Available
                                </li>
                                <li style=" color:#000; padding-left:3px; padding-right:3px; border-radius: 5px;"><i
                                        class="fa fa-square" aria-hidden="true"
                                        style="color:rgb(182, 177, 177)"></i>Booked</li>

                            </ul>
                            <div class="row with-forms margin-top-0">

                                <div class="col-lg-12 col-md-12 select_date_box">
                                    {{-- <input type="text" id="datepicker" placeholder="Select Date" readonly="readonly"
                                name="date" onclick="togglePopup()"> --}}
                                    <!-- <i class="fa fa-calendar"></i> -->
                                    {{-- <i class="fa fa-calendar" id="calendar-icon"></i> --}}
                                    <input type="text" id="date-picker-custom" placeholder="Select Date"
                                        name="date">
                                </div>
                                <div class="col-lg-12">
                                    <input name="name" type="text" placeholder="Name" required />

                                </div>

                                <div class="col-lg-12">
                                    <input name="contact_no" type="text" placeholder="Contact No" maxlength="10" required />

                                </div>
                                {{-- @json(is_array($listing_page->from_time_slot)) --}}
                                {{-- @php
                        $time_slots = json_decode($listing_page->time_slot);
                    @endphp --}}
                                {{-- @if (is_array($listing_page->from_time_slot))
                                    <div class="col-lg-12">
                                        <div class="intro-search-field utf-chosen-cat-single">
                                            <select class="selectpicker default" data-selected-text-format="count"
                                                data-size="7" title="Select Time" name="time_slot">
                                              
                                                @foreach ($listing_page->from_time_slot as $time_slot)
                                                    <option>{{ $time_slot }} -
                                                        {{ $listing_page->to_time_slot[$loop->index] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @endif --}}


                                <div class="col-lg-12">
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count"
                                            data-size="7" title="Select Time" name="time_slot">
                                            <!-- Options will be appended here by JavaScript -->
                                        </select>
                                    </div>
                                </div>



                                {{-- <div class="col-lg-12">
                            <div class="intro-search-field utf-chosen-cat-single">
                                <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select Time" name="time_slot">
                                 
                                    @foreach ($listing_page->to_time_slot as $time_slots)
                                        <option>{{ $time_slots}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                                {{-- <div class="col-lg-12">
                            <div class="intro-search-field utf-chosen-cat-single">
                                <select class="selectpicker default" data-selected-text-format="count"
                                    data-size="7" title="Select Time" name="time_slot"> --}}
                                {{-- @foreach ($time_slots as $index => $time_slot) --}}
                                {{-- <option>{{ '["10 am : 10 pm"]' }}</option> --}}
                                {{-- @endforeach					 --}}
                                {{-- </select>
                            </div>1

                        </div> --}}

                                <!-- Time Slot Section -->




                                <!-- Amenities Section -->
                                {{-- <div class="col-lg-12">
                            <div class="panel-dropdown amenities-dropdown">
                                <a href="#">Amenities For Booking</a>
                                <div class="panel-dropdown-content padding-reset">
                                    <div class="panel-dropdown-scrollable">
                                  
                                        @foreach ($listing_page->amenities_for_booking as $index => $amenity)
                                            <div class="amenity">
                                              
                                                <input type="radio" name="amenities_for_booking"
                                                    id="amenity-{{ $index + 1 }}"
                                                    value="{{ $amenity }}">
                                                <label for="amenity-{{ $index + 1 }}">
                                                    <strong><span>{{ $index + 1 }}</span>
                                                        {{ $amenity }}</strong>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                                <div class="col-lg-6">
                                    <input id="guest-input" name="guest" type="text" placeholder="Guest"
                                        required />
                                </div>
                                <div class="col-lg-6">
                                    <div
                                        style="height: 45px;
line-height: 40px; padding: 0 8px; outline: none; font-size: 15px; color: #808080; display: block; background-color: #fff; border: 1px solid #dbdbdb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.03); font-weight: 400; opacity: 1; border-radius: 4px;">
                                        Capacity: <span id="capacity-value"></span>
                                    </div>
                                </div>
                                {{-- <script>
                            function showCapacity(capacity) {
                                document.getElementById('guest-input').removeAttribute('disabled'); // Enable guest input
                                document.getElementById('capacity-value').innerText = capacity; // Update capacity value
                                document.getElementById('capacity-info').style.display = 'inline'; // Show capacity info
                            }
                        </script> --}}

                            </div>
                            <button type="submit"
                                class="utf_progress_button button fullwidth_block margin-top-5">Request
                                Booking</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>


                <div class="col-lg-8" margin-top-20>
                    <h3 class="headline_part centered">Our Reviews <span class="margin-top-15"></span> </h3>

                    {{-- <div id="utf_listing_reviews" class="utf_listing_section">
                        <h3 class="utf_listing_headline_part margin-top-75 margin-bottom-20">Reviews <span>({{ $listing_page->ListingReview->number_of_reviews }})</span>
                        </h3>
                        <div class="clearfix"></div>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>{{number_format($listing_page->ListingReview->average_rating,1)}}</strong>
                                        <em>Superb Reviews</em>
                                        <small>out of {{ $listing_page->ListingReview->number_of_reviews }} Reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-2 review_progres_title"><small><strong>5</strong></small>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%"
                                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 review_progres_title"><small><strong>4</strong></small>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 review_progres_title"><small><strong>3</strong></small>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 review_progres_title"><small><strong>2</strong></small>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 40%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 review_progres_title"><small><strong>1</strong></small>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <div id="utf_listing_reviews" class="utf_listing_section">
                        <h3 class="utf_listing_headline_part margin-top-75 margin-bottom-20">
                            Reviews <span>({{ $listing_page->ListingReview->number_of_reviews ?? '' }})</span>
                        </h3>
                        <div class="clearfix"></div>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>{{ number_format($listing_page->ListingReview->average_rating, 1) ?? '' }}</strong>
                                        <em>Superb Reviews</em>
                                        <small>Out of {{ $listing_page->ListingReview->number_of_reviews }}
                                            Reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    @for ($rating = 5; $rating >= 1; $rating--)
                                        @php
                                            $count = $reviewCounts[$rating] ?? 0;
                                            $percentage = $totalReviews ? ($count / $totalReviews) * 100 : 0;
                                        @endphp
                                        <div class="row">
                                            <div class="col-lg-2 review_progres_title">
                                                <small><strong>{{ $rating }}</strong></small></div>
                                            <div class="col-lg-10">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ $percentage }}%"
                                                        aria-valuenow="{{ $percentage }}" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                    </div>


                    {{-- <div id="utf_listing_location" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-60 margin-bottom-40">Location</h3>
                    <div id="utf_single_listing_map_block">
                        <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931"
                            data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="utf_street_view_btn">Street View</a>
                    </div>
                </div> --}}
                    {{-- <div class="comments-container" style="max-height: 350px; overflow-x: auto; overflow-y: auto;">
                        @foreach ($review as $reviews)
                            <div class="comments utf_listing_reviews">
                                <ul>
                                    <li>
                                    
                                        <div class="utf_comment_content" style="padding: 0% !important">
                                            <div class="utf_arrow_comment"></div>
                                            <div class="utf_star_rating_section"
                                                data-rating="{{ $reviews->rating }}"></div>
                                            <div class="utf_by_comment">{{ $reviews->user_name->name ?? '' }}<span
                                                    class="date"><i class="fa fa-clock-o"></i>
                                                    {{ \Carbon\Carbon::parse($reviews->created_at)->format('M d, Y') }}</span>
                                            </div>
                                            <p>{{ $reviews->review }} </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div> --}}

                    <div class="comments-container" style="max-height: 350px; overflow-x: auto; overflow-y: auto;">
                        @foreach ($review as $reviews)
                            <div class="comments utf_listing_reviews">
                                <ul>
                                    <li>
                                        {{-- <div class="avatar"><img
                                                src="{{ asset('public/images/client-avatar1.jpg') }}"
                                                alt="" /></div> --}}
                                        <div class="utf_comment_content"
                                            style="padding: 0% !important; position: relative;">
                                            <div class="utf_arrow_comment"></div>
                                            <div class="utf_star_rating_section"
                                                data-rating="{{ $reviews->rating }}"></div>
                                            {{-- <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a> --}}
                                            <div class="utf_by_comment">
                                                {{ $reviews->user_name->name ?? '' }}
                                                <span class="date">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ \Carbon\Carbon::parse($reviews->updated_at)->format('M d, Y') }}
                                                </span>
                                            </div>
                                            <p>{{ $reviews->review }} </p>
                                            <!-- Three dots menu -->
                                            @if (auth()->user() && $reviews->user_id == auth()->user()->id)
                                                <div class="dropdown" style="position: absolute; top: 0; right: 0;">
                                                    <button class="dropbtn">⋮</button>
                                                    <div class="dropdown-content">
                                                        <a href="#" class="edit-review"
                                                            data-review-id="{{ $reviews->id }}"
                                                            data-review-text="{{ $reviews->review }}"
                                                            data-review-star="{{ $reviews->rating }}">Edit</a>
                                                        <a href="{{ route('deleteReview', $reviews->id) }}"
                                                            onclick="return confirm('Are you sure you want to delete this review?')">Delete</a>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>

                    <!-- Modal -->
                    <div class="modal" id="editModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="editModalLabel" style="color: #fff;">Edit Review</h5>
                                    <button type="button" class="close" id="modalCloseBtn">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form id="editReviewForm" action="{{ route('updateReview') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" id="review_id">

                                        <div class="utf_leave_rating1 margin-bottom-30 ">
                                            {{-- <input type="radio" name="rating" id="rating--1" value="1" />
                                        <label for="rating--1" class="fa fa-star utf_leave_rating1"></label>
                                        <input type="radio" name="rating" id="rating--2" value="2" />
                                        <label for="rating--2" class="fa fa-star utf_leave_rating1"></label>
                                        <input type="radio" name="rating" id="rating--3" value="3" />
                                        <label for="rating--3" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating--4" value="4" />
                                        <label for="rating--4" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating--5" value="5" />
                                        <label for="rating--5" class="fa fa-star"></label> --}}
                                            {{-- <div class="utf_leave_rating1"> --}}

                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label for="star5" title="5 stars">&#9733;</label>

                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star4" title="4 stars">&#9733;</label>

                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="3 stars">&#9733;</label>

                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="2 stars">&#9733;</label>

                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="1 star">&#9733;</label>
                                            {{-- </div> --}}
                                            {{-- <input type="radio" name="rating1" id="rating--5" value="5" />
                                        <label for="rating--5" class="fa fa-star"></label>
                                        <input type="radio" name="rating1" id="rating--4" value="4" />
                                        <label for="rating--4" class="fa fa-star"></label>
                                        <input type="radio" name="rating1" id="rating--3" value="3" />
                                        <label for="rating--3" class="fa fa-star"></label>
                                        <input type="radio" name="rating1" id="rating--2" value="2" />
                                        <label for="rating--2" class="fa fa-star"></label>
                                        <input type="radio" name="rating1" id="rating--1" value="1" />
                                        <label for="rating--1" class="fa fa-star"></label> --}}

                                        </div>

                                        <div>
                                            <label for="review_text"
                                                class="utf_listing_headline_part margin-bottom-20">Review:</label>
                                            <textarea cols="40" placeholder="Your Message..." rows="3" id="review_text" name="review" required></textarea>
                                        </div>

                                        <button type="submit" class="button">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form id="utf_add_comment" class="utf_add_comment" action="{{ route('review') }}"
                        method="post">
                        @csrf
                        <input type="hidden" name="listing_id" value="{{ $listing_page->id }}">
                        <div id="utf_add_review" class="utf_add_review-box">
                            <h3 class="utf_listing_headline_part margin-bottom-20">Add Your Review</h3>
                            {{-- <span class="utf_leave_rating_title">Your email address will not be published.</span> --}}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="clearfix"></div>
                                    <div class="utf_leave_rating margin-bottom-30 ">
                                        <input type="radio" name="rating" id="rating-5" value="5" />
                                        <label for="rating-5" class="fa fa-star reviewLabel"></label>
                                        <input type="radio" name="rating" id="rating-4" value="4" />
                                        <label for="rating-4" class="fa fa-star reviewLabel"></label>
                                        <input type="radio" name="rating" id="rating-3" value="3" />
                                        <label for="rating-3" class="fa fa-star reviewLabel"></label>
                                        <input type="radio" name="rating" id="rating-2" value="2" />
                                        <label for="rating-2" class="fa fa-star reviewLabel"></label>
                                        <input type="radio" name="rating" id="rating-1" value="1" />
                                        <label for="rating-1" class="fa fa-star reviewLabel"></label>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <fieldset>
                                {{-- <div class="row">
                                <div class="col-md-4">
                                    <label>Name:</label>
                                    <input type="text" placeholder="Name" value="" />
                                </div>
                                <div class="col-md-4">
                                    <label>Email:</label>
                                    <input type="text" placeholder="Email" value="" />
                                </div>
                                <div class="col-md-4">
                                    <label>Subject:</label>
                                    <input type="text" placeholder="Subject" value="" />
                                </div>
                            </div> --}}
                                <div>
                                    <label class="utf_listing_headline_part margin-bottom-20"
                                        id="reviewLabel">Review:</label>
                                    <textarea id="reviewTextarea" cols="40" placeholder="Your Message..." rows="3" name="review" required
                                        style="display: none;"></textarea>
                                </div>
                            </fieldset>
                            <button type="submit" class="button">Submit Review</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                </div>


            </div>
        </div>
        <!-- Footer -->
        <div id="footer" class="footer_sticky_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- <h4>About Us</h4> -->
                        <div class="utf_sidebar_textbox">
                            <img src="{{ asset('public/images/weeding-logo1.png') }}" width="200" height="80">

                        </div>
                        <p>
                        <ul class="utf_social_icon rounded ">

                            <li><a class="linkedin"
                                    href="https://www.linkedin.com/in/bookmy-weddinghall-7bab57307?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank" style="margin-right: 0px"><i class="icon-linkedin"></i></a></li>
                            <li><a class="instagram"
                                    href="https://www.instagram.com/bookmyweddinghall?utm_source=qr&igsh=eGdkejVuYmlxaHF4"
                                    target="_blank" style="margin-right: 0px"><i class="icon-youtube"></i></a></li>
                            <li><a class="youtube" href="https://youtube.com/@bookmyweddinghall?si=TvzTGa0oBUmOC1Za"
                                    target="_blank" style="margin-right: 3px"><i class="icon-youtube"></i></a></li>
                            <li><a href="https://www.threads.net/@bookmyweddinghall" target="_blank"><img
                                        src="{{ asset('public/images/thread.png') }}"
                                        style="height:22px;width:22px;margin-top:10px;margin-right:0px;"></a></li>
                            <li><a href="https://x.com/BookMyWedHall?t=z4Aa4hOLlcTyYKEa7xUBKw&s=08"
                                    target="_blank"><img src="{{ asset('public/images/twiter.png') }}"
                                        style="height:20px;width:20px; margin-top:10px; margin-right:0px;"></a></li>

                        </ul>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4>Business Services</h4>
                        <ul class="social_footer_link">
                            <li><a href="https://bookmyweddinghall.com/#hall1">Book Wedding Hall</a></li>
                            <li><a href="{{ route('business_listing_login') }}">Free Wedding Hall Listing</a></li>
                            <li><a href="#">Vendor Registration</a></li>

                        </ul>
                    </div>

                    <div class="col-md-2">
                        <h4>Know More</h4>
                        <ul class="social_footer_link">
                            <li><a href="{{ route('how-it-work') }}">How It Works</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>

                        </ul>
                    </div>

                    <!-- <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Pages</h4>
                <ul class="social_footer_link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Listing</a></li>
                    <li><a href="#">Listing Details</a></li>
                    {{-- <li><a href="#">Add Listing</a></li> --}}
                </ul>
            </div>-->
                    <div class="col-md-4">
                        <h4>Get In Touch</h4>
                        <ul>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"
                                    style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;<a
                                    href="mailto:bookmyweddinghall@gmail.com"> bookmyweddinghall@gmail.com</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"
                                    style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;<a href="tel:+919766658802">
                                    +919766658802</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true" style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;
                                <a href="tel:+919730158802">+919730158802</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="footer_copyright_part"
                            style="text-align:left; padding-top:5px;  padding-bottom:5px; margin-top:0px;"> <img
                                src="{{ asset('public/images/zhep-logo.png') }}" style="width:15%; height:15%;">
                            <span style="font-size:13px;"> &nbsp;© 2024 BookMyWeddingHall.</span>
                            <!-- <div class="row">
                         <div class="col-md-3" align="right">
                             <img src="{{ asset('public/images/zhep.png') }}" >
                         </div>
                         <div class="col-md-9" align="left">
                               <p style="font-size:13px; padding-right:20px;"> © 2024 BookMyWeddingHall.</p>
                         </div>
                    </div>-->

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="footer_copyright_part"
                            style="text-align:center !important; padding-top:5px;  padding-bottom:5px; margin-top:0px;">
                            <p style="font-size:13px;"><a href="{{ route('terms') }}">Terms & Condition</a> | <a
                                    href="{{ route('cancellation') }}">Refund & Cancellation</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="bottom_backto_top"><a href="#"></a></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/scripts/jquery-3.4.1.min.js') }}"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js
        "></script>
    <script src="{{ asset('public/scripts/chosen.min.js') }}"></script>
    <script src="{{ asset('public/scripts/slick.min.js') }}"></script>
    <script src="{{ asset('public/scripts/rangeslider.min.js') }}"></script>
    <script src="{{ asset('public/scripts/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/scripts/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/scripts/mmenu.js') }}"></script>
    <script src="{{ asset('public/scripts/tooltips.min.js') }}"></script>
    <script src="{{ asset('public/scripts/color_switcher.js') }}"></script>
    <script src="{{ asset('public/scripts/jquery_custom.js') }}"></script>
    <script src="{{ asset('public/scripts/bootstrap-select.min.js') }}"></script>



    <!-- Maps -->
    {{-- <script src="{{ asset('public/http://maps.google.com/maps/api/js?sensor=false&amp;language=en') }}"></script> --}}
    {{-- <script src="{{ asset('public/scripts/infobox.min.js') }}"></script> --}}
    <script src="{{ asset('public/scripts/markerclusterer.js') }}"></script>
    {{-- <script src="{{ asset('public/scripts/maps.js') }}"></script> --}}
    {{-- <script src="{{ asset('public/scripts/quantityButtons.js') }}"></script> --}}
    <script src="{{ asset('public/scripts/moment.min.js') }}"></script>
    <script src="{{ asset('public/scripts/daterangepicker.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @include('sweetalert')


    <script>
        $(document).ready(function() {
            // Function to set the stars based on a value
            function setStars(value) {
                // Remove 'checked' class from all labels
                $('.utf_leave_rating1 label').removeClass('checked');
                console.log(1);
                // Add 'checked' class to labels up to and including the given value
                $('.utf_leave_rating1 input').each(function() {
                    if ($(this).val() <= value) {
                        $(this).next('label').addClass('checked');
                    }
                });
            }

            // Initial setting of stars
            var initialValue = $('.utf_leave_rating1 input:checked').val() || 0;
            setStars(initialValue);

            // Event handler for clicking a label
            $('.utf_leave_rating1 label').on('click', function() {
                var $this = $(this);
                var value = $this.prev('input').val();

                // Set the stars based on the clicked value
                setStars(value);
                console.log(2);
                // Set the corresponding radio input to checked
                $this.prev('input').prop('checked', true);
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('editModal');
            var modalCloseBtn = document.getElementById('modalCloseBtn');
            var editLinks = document.querySelectorAll('.edit-review');

            editLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var reviewId = this.getAttribute('data-review-id');
                    var reviewText = this.getAttribute('data-review-text');
                    var reviewStar = this.getAttribute('data-review-star');

                    document.getElementById('review_id').value = reviewId;
                    document.getElementById('review_text').value = reviewText;

                    // Clear existing rating selection
                    var ratingInputs = document.querySelectorAll('input[name="rating1"]');
                    ratingInputs.forEach(function(input) {
                        input.checked = false;
                        input.nextElementSibling.classList.remove('checked');
                    });

                    // Set the correct rating
                    document.getElementById('star' + reviewStar).checked = true;
                    document.getElementById('star' + reviewStar).nextElementSibling.classList.add(
                        'checked');

                    modal.style.display = 'block';
                });
            });

            modalCloseBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.dropbtn').forEach(button => {
                button.addEventListener('click', function() {
                    this.nextElementSibling.classList.toggle('show');
                });
            });

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                        if (dropdown.classList.contains('show')) {
                            dropdown.classList.remove('show');
                        }
                    });
                }
            }

        });
    </script>



    <script>
        $(document).ready(function() {
            // $('.amenity:first').prop('checked', true);
            // $('.amenity:first').prop('checked', true).trigger('change');
            // Function to change placeholder based on selection
            $('.check-a1').on('change', function() {
                // console.log(1);
                var selectedValue = $(this).val();
                if (selectedValue === 'business') {
                    $('#name').attr('placeholder', 'Business Name').val('');
                    $('#email').val('');
                    $('#contact_no').val('');
                    $('#password1').val('');
                } else {
                    $('#name').attr('placeholder', 'Name');
                }
            });
            $("#reg_id").on('click', function() {
                $("#tab1").hide();
                $("#tab2").show();
            });

            $("#login_id").on('click', function() {
                $("#tab2").hide();
                $("#tab1").show();
            });
        });
    </script>
   


    <script>
        $(document).ready(function() {
            // Form validation
            $('#reg_form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    contact_no: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    password: {
                        required: true,
                        minlength: 4
                    }
                },
                messages: {
                    name: {
                        required: "<span class='error-msg'>Please enter your name</span>"
                    },
                    email: {
                        required: "<span class='error-msg'>Please enter your email</span>",
                        email: "<span class='error-msg'>Please enter a valid email address</span>"
                    },
                    contact_no: {
                        required: "<span class='error-msg'>Please enter your contact number</span>",
                        digits: "<span class='error-msg'>Please enter a valid contact number</span>",
                        minlength: "<span class='error-msg'>Contact number must be 10 digits long</span>",
                        maxlength: "<span class='error-msg'>Contact number must be 10 digits long</span>"
                    },
                    password: {
                        required: "<span class='error-msg'>Please enter a password</span>",
                        minlength: "<span class='error-msg'>Password must be at least 4 characters long</span>"
                    }
                }
            });
        });

        function validateAndSendOTP() {
            if ($('#reg_form').valid()) {
                var email = $('#email').val();
                var contact_no = $('#contact_no').val();

                $.ajax({
                    url: '{{ route('check.unique') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        email: email,
                        contact_no: contact_no
                    },
                    success: function(response) {
                        if (response.exists) {
                            if (response.email_exists) {
                                alert('Email already exists');

                            }
                            if (response.contact_no_exists) {
                                alert('Contact number already exists');
                            }
                        } else {
                            togglePopup();
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr);
                        alert('An error occurred while checking the data.');
                    }
                });
            } else {
                console.log('Form validation failed');
            }
        }

        let otp;

        function togglePopup() {
            // Get the contact number from the input field
            var contactNumber = $('#contact_no').val();
            console.log(contactNumber);
            // AJAX request to send OTP
            $.ajax({
                url: '{{ route('send_mobile_verify_otp') }}',
                type: 'get',
                data: {
                    contact_no: contactNumber
                },
                success: function(response) {
                    // Handle success
                    console.log(response);
                    otp = response.otp;
                    // Show the popup/modal
                    $('#popup').show();
                    $('#overlay').show();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
        }
    </script>


    <script>
        function verifyOTP() {
            // Get the entered OTP
            var otp1 = $('#otp1').val();
            var otp2 = $('#otp2').val();
            var otp3 = $('#otp3').val();
            var otp4 = $('#otp4').val();
            console.log(otp);

            var enteredOTP = otp1 + otp2 + otp3 + otp4;
            if (enteredOTP == otp) {
                $('#reg_form').submit();
            } else {
                console.log('Invalid OTP');
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 6000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: 'Invalid OTP.'
                });
                alert('Invalid OTP');

            }

        }
    </script>




    {{-- <script>
    function togglePopup() {
        var popup = document.getElementById('popup');
        var overlay = document.getElementById('overlay');
        if (popup.style.display === 'block') {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        } else {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }
    }
</script> --}}

    <script>
        function togglePopup1() {
            var popup1 = document.getElementById('popup1');
            var overlay1 = document.getElementById('overlay1');
            if (popup1.style.display === 'block') {
                popup1.style.display = 'none';
                overlay1.style.display = 'none';
            } else {
                popup1.style.display = 'block';
                overlay1.style.display = 'block';
            }
        }
    </script>

    <script>
        //Code Verification
        var verificationCode = [];
        $(".verification-code input[type=text]").keyup(function(e) {

            // Get Input for Hidden Field
            $(".verification-code input[type=text]").each(function(i) {
                verificationCode[i] = $(".verification-code input[type=text]")[i].value;
                $('#verificationCode').val(Number(verificationCode.join('')));
                //console.log( $('#verificationCode').val() );
            });

            //console.log(event.key, event.which);

            if ($(this).val() > 0) {
                if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event
                    .key == 6 || event.key == 7 || event.key == 8 || event.key == 9 || event.key == 0) {
                    $(this).next().focus();
                }
            } else {
                if (event.key == 'Backspace') {
                    $(this).prev().focus();
                }
            }

        }); // keyup

        $('.verification-code input').on("paste", function(event, pastedValue) {
            console.log(event)
            $('#txt').val($content)
            console.log($content)
            //console.log(values)
        });

        // $editor.on('paste, keydown', function() {
        //     http: //jsfiddle.net/5bNx4/#run
        //         var $self = $(this);
        //     setTimeout(function() {
        //         var $content = $self.html();
        //         $clipboard.val($content);
        //     }, 100);
        // });
    </script>


   
    <script>
        // Function to open the main popup
        function openMainPopup() {
            document.getElementById('mainPopup').style.display = 'block';
            document.getElementById('mainOverlay').style.display = 'block';
        }

        // Function to close the main popup
        function closeMainPopup() {
            document.getElementById('mainPopup').style.display = 'none';
            document.getElementById('mainOverlay').style.display = 'none';
        }

        // Function to open the first small popup
        function openSmallPopup() {
            $(".pop_up_div").hide();
            $("#mobile_no").show();
            $("#header_change").text('Forget Password');

        }

        function opensignin() {
            // console.log(1);
            $("#tab2").hide();
            $("#mobile_no").hide();
            $("#reset_otp").hide();
            $("#login_page").show();
            // $("#header_change").text('Forget Password');

        }

        function openSmallPopupreg() {
            $(".pop_up_div").hide();
            $("#tab2").show();
            // $("#header_change").text('Forget Password');

        }


        // Function to close the first small popup
        function closeSmallPopup1() {
            document.getElementById('smallPopup1').style.display = 'none';
        }

        var typingTimer; // Timer identifier
        var doneTypingInterval = 1000; // Time in milliseconds (1 second)

        // On keyup, start the countdown
        $('#contact').on('keyup', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        // On keydown, clear the countdown
        $('#contact').on('keydown', function() {
            clearTimeout(typingTimer);
        });

        // Function to execute when typing is finished
        function doneTyping() {
            var mobile = $('#contact').val(); // Capture the mobile number
            console.log(mobile);
            $.ajax({
                url: "{{ route('check_mobile_exist') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mobile: mobile
                },
                success: function(response) {
                    if (response.exists) {
                        alert(response.data.error);
                        $('#mobileStatus').html('<span style="color:red;">Mobile number already exists</span>');
                    } else {
                        $('#mobileStatus').html('<span style="color:red;">Please Enter Number</span>');
                        // $("#tab2").show();
                        // $("#mobile_no").hide();
                        // $('#contact').val('');

                    }
                }
            });
        }

        //to send otp

        function sendOtp() {

            var contact = document.getElementById("contact").value;

            // Retrieve CSRF token from meta tags
            var token = document.querySelector('meta[name="csrf-token"]').content;

            // Make an AJAX request to check if the mobile number exists
            axios.post("{{ route('check_mobile_existence') }}", {
                    contact: contact,
                    _token: token
                })
                .then(function(response) {
                    if (response.data.exists) {
                        // Mobile number exists, proceed with OTP sending
                        sendOtpRequest(contact, token);
                        $(".pop_up_div").hide();
                        $("#reset_otp").show();
                    } else {
                        // Mobile number does not exist, show an error
                        alert(response.data.error);

                        $("#mobile_no").show();
                        $("#reset_otp").hide();
                        $('#contact').val('');

                    }
                })
                .catch(function(error) {
                    // Handle AJAX error
                    console.error(error);
                });
        }

        // Function to send the actual OTP request
        function sendOtpRequest(contact, token) {
            // Make an AJAX request to send the OTP
            axios.post("{{ route('send_otp') }}", {
                    contact: contact,
                    _token: token
                })
                .then(function(response) {
                    // Handle the response if needed
                    console.log(response);

                    // Open smallPopup2 after OTP is sent
                    openSmallPopup2();
                })
                .catch(function(error) {
                    // Handle AJAX error
                    console.error(error);
                });
        }
        // Function to open the second small popup
        function openSmallPopup2() {
            document.getElementById('smallPopup1').style.display = 'none';
            document.getElementById('smallPopup2').style.display = 'block';
        }

        // Function to close the second small popup
        function closeSmallPopup2() {
            document.getElementById('smallPopup2').style.display = 'none';
        }




        // to varify otp
        function verifyOtpforforgotpass() {
            $(".pop_up_div").hide();
            $("#update_password").show();
            // Get the entered OTP
            var enteredOtp = document.getElementById("otpInput1").value +
                document.getElementById("otpInput2").value +
                document.getElementById("otpInput3").value +
                document.getElementById("otpInput4").value;

            var token = document.querySelector('meta[name="csrf-token"]').content;


            // Make an AJAX request to verify the OTP
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "verify_otp_for_forgot_pass", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.setRequestHeader("X-CSRF-TOKEN", token); // Include CSRF token


            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);

                    // Check if the entered OTP is valid
                    if (response.valid) {
                        alert("OTP verification successful!");
                        // Move to the next popup
                        openSmallPopup3();
                    } else {
                        // Display an error message or handle it accordingly
                        alert("Invalid OTP. Please try again.");
                    }
                }
            };
            // ---------------------------------------------------------
            // the below line doesnt work in online so i used another approach for this
            // ----------------------------------------------------------
            // Send the entered OTP to the server for verification
            xhr.send(JSON.stringify({
                enteredOtp: enteredOtp
            }));
        }

        // Function to open the third small popup
        function openSmallPopup3() {
            document.getElementById('smallPopup2').style.display = 'none';
            document.getElementById('smallPopup3').style.display = 'block';
        }

        // Function to close the third small popup
        function closeSmallPopup3() {
            document.getElementById('smallPopup3').style.display = 'none';
        }


        function submitNewPasswordForm() {
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            var token = document.querySelector('meta[name="csrf-token"]').content;
            var userId = document.querySelector('meta[name="user-id"]').content; // Retrieve the user ID from the meta tag

            // Check if the passwords match
            if (newPassword === confirmPassword) {
                // Make an AJAX request to update the password
                axios.post("{{ route('update_password') }}", {
                        newPassword: newPassword,
                        userId: userId,
                        _token: token
                    })
                    .then(function(response) {
                        if (response.data.success) {
                            alert("Password updated successfully!");
                            // Close the third small popup or perform any other actions
                            closeSmallPopup3();
                        } else {
                            alert("Failed to update password. Please try again.");
                        }
                    })
                    .catch(function(error) {
                        // Handle AJAX error
                        console.error(error);
                    });
            } else {
                // Display the error message in the same popup
                document.getElementById("passwordMismatchError").innerText = "Passwords do not match. Please try again.";

                // alert("Passwords do not match. Please try again.");
            }
        }
    </script>
 {{-- <script>
    var typed = new Typed('.typed-words', {
        strings: ["Wedding Hall"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script> --}}

    <script>
        $(document).ready(function() {
            $('.reviewLabel').click(function() {
                $('#reviewTextarea').toggle();
            });
        });
    </script>
    <script>
        let otp;

        function togglePopupOTP() {
            // Get the contact number from the input field
            var contactNumber = $('#contact_no').val();
            console.log(contactNumber);
            // AJAX request to send OTP
            $.ajax({
                url: '{{ route('send_mobile_verify_otp') }}',
                type: 'get',
                data: {
                    contact_no: contactNumber
                },
                success: function(response) {
                    // Handle success
                    console.log(response);
                    otp = response.otp;
                    // Show the popup/modal
                    $('#popup').show();
                    $('#overlay').show();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
        }
    </script>
 <script>
    var margins = {
        home: 35,
        library: 137,
        history: 238,
        manage: 346,
        settings: 457
    };

    var bar = document.querySelector(".bar");
    var line = document.querySelector(".line");

    let updateTimeout;

    line.style.width = "60px";
    updateTimeout = setTimeout(function() {
        line.style.width = "25px";
        line.style.marginLeft = "35px";
    }, 250);

    bar.children[0].focus();

    Array.from(bar.children).forEach((button) => {
        button.addEventListener("click", (e) => {

            if (updateTimeout) clearTimeout(updateTimeout);

            const lastMargin = parseInt(line.style.marginLeft.replace("px", ""));

            const newMargin = margins[button.id];

            if (newMargin > lastMargin) {

                line.style.width = newMargin - lastMargin + 25 + "px";

                updateTimeout = setTimeout(function() {

                    line.style.width = "25px";
                    line.style.marginLeft = margins[button.id] + "px";

                }, 250);

            } else {

                line.style.width = lastMargin - newMargin + 25 + "px";

                line.style.marginLeft = margins[button.id] + "px";

                updateTimeout = setTimeout(function() {

                    line.style.width = "25px";

                }, 250);

            }

        });
    });
</script>

<script>
    function closePopup() {
        var popup = document.getElementById('popup'); // Assuming the ID of your popup/modal is 'popup'
        popup.style.display = 'none';
        var overlay = document.getElementById('overlay'); // Assuming the ID of your overlay is 'overlay'
        overlay.style.display = 'none';
    }
</script>
    <script>
        $(function() {
            // event.preventDefault();
            // Initialize date range picker
            $('#date-picker-custom').daterangepicker({
                "opens": "left",
                singleDatePicker: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }

                // isInvalidDate: function(date) {
                //     var disabled_start = moment('09/02/2024', 'MM/DD/YYYY');
                //     var disabled_end = moment('09/06/2024', 'MM/DD/YYYY');
                //     return date.isAfter(disabled_start) && date.isBefore(disabled_end);
                // }
            });

            // Show calendar animation
            $('#date-picker-custom').on('showCalendar.daterangepicker', function(ev, picker) {
                $('.daterangepicker').addClass('calendar-animated');
            });
            $('#date-picker-custom').on('show.daterangepicker', function(ev, picker) {
                $('.daterangepicker').addClass('calendar-visible');
                $('.daterangepicker').removeClass('calendar-hidden');
            });
            $('#date-picker-custom').on('hide.daterangepicker', function(ev, picker) {
                $('.daterangepicker').removeClass('calendar-visible');
                $('.daterangepicker').addClass('calendar-hidden');
            });

            // Function to close panel dropdown
            function close_panel_dropdown() {
                $('.panel-dropdown').removeClass("active");
                $('.fs-inner-container.content').removeClass("faded-out");
            }

            // Panel dropdown click event
            $('.panel-dropdown a').on('click', function(e) {
                if ($(this).parent().is(".active")) {
                    close_panel_dropdown();
                } else {
                    close_panel_dropdown();
                    $(this).parent().addClass('active');
                    $('.fs-inner-container.content').addClass("faded-out");
                }
                e.preventDefault();
            });

            // Panel buttons click event
            $('.panel-buttons button').on('click', function(e) {
                $('.panel-dropdown').removeClass('active');
                $('.fs-inner-container.content').removeClass("faded-out");
            });

            // Handle mouse events for panel dropdown
            var mouse_is_inside = false;
            $('.panel-dropdown').hover(function() {
                mouse_is_inside = true;
            }, function() {
                mouse_is_inside = false;
            });
            $("body").mouseup(function() {
                if (!mouse_is_inside) close_panel_dropdown();
            });
            
            setTimeout(() => {
			$('.amenity:first').trigger('click');
		}, 1500);

            $('.amenity').on('change', function() {
                // console.log(1);
                $('#date-picker-custom').val('');

                var amenity = $(this).val();
                var id = $('#listing_id').val();
                console.log(amenity);
                console.log(id);

                $.ajax({
                    url: '{{ route('check_booking') }}',
                    type: 'get',
                    data: {
                        listing_amenity_id: amenity,
                        id: id
                    },
                    success: function(response) {
                        var bookingData = response.booking_data;
                        var capacity = response.listing_amenity.capacity;
                        // var from_time_slot = response.time_slot.from_time_slot;
                        // var to_time_slot = response.time_slot.to_time_slot;

                        $('#capacity-value').text(capacity);
                        // $('#price-value').text(response.listing_amenity.price);

                        $('#price-value').text(formatPrice(response.listing_amenity.price));
                        // $('#time_slot').text(from_time_slot);

                        // Clear existing options
                        $('select[name="time_slot"]').empty();

                        // Append new options
                        response.time_slot.forEach(function(slot) {
                            var optionText = slot.from_time_slot + ' - ' + slot
                                .to_time_slot;
                            console.log(optionText)
                            $('select[name="time_slot"]').append($('<option></option>')
                                .text(optionText));
                        });

                        // Refresh the selectpicker to apply changes
                        $('.selectpicker').selectpicker('refresh');
                        disableDates(bookingData);

                    }
                });
            });

            //this is for the comma seperate the value like 1,20,000
            function formatPrice(price) {
                // Convert price to a string
                price = price.toString();
                
                // Split the price into integer and decimal parts (if any)
                let parts = price.split(".");
                let integerPart = parts[0];
                let decimalPart = parts.length > 1 ? "." + parts[1] : "";
                
                // Format the integer part with commas for the Indian numbering system
                let lastThreeDigits = integerPart.slice(-3);
                let otherDigits = integerPart.slice(0, -3);
                if (otherDigits != '') {
                    lastThreeDigits = ',' + lastThreeDigits;
                }
                let formattedIntegerPart = otherDigits.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThreeDigits;
                
                // Combine the formatted integer part with the decimal part
                return formattedIntegerPart + decimalPart;
            }

            //end function
            // Function to disable dates in date range picker
            function disableDates(bookingData) {
                $('#date-picker-custom').data('daterangepicker').isInvalidDate = function(date) {
                    var dateString = date.format('YYYY-MM-DD');
                    return $.inArray(dateString, bookingData) !== -1;
                };
                $('#date-picker-custom').data('daterangepicker').updateCalendars();
            }
        });
    </script>




    <script>
        var index = 0;
        var slides = document.querySelectorAll(".slides");
        var dot = document.querySelectorAll(".dot");

        function changeSlide() {

            if (index < 0) {
                index = slides.length - 1;
            }

            if (index > slides.length - 1) {
                index = 0;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dot[i].classList.remove("active");
            }

            slides[index].style.display = "block";
            dot[index].classList.add("active");

            index++;

            setTimeout(changeSlide, 2000);

        }

        changeSlide();
    </script>
    <script>
        (function($) {
            "use strict";
            $.fn.sliderResponsive = function(settings) {

                var set = $.extend({
                        slidePause: 5000,
                        fadeSpeed: 800,
                        autoPlay: "on",
                        showArrows: "off",
                        hideDots: "off",
                        hoverZoom: "on",
                        titleBarTop: "off"
                    },
                    settings
                );

                var $slider = $(this);
                var size = $slider.find("> div").length; //number of slides
                var position = 0; // current position of carousal
                var sliderIntervalID; // used to clear autoplay

                // Add a Dot for each slide
                $slider.append("<ul></ul>");
                $slider.find("> div").each(function() {
                    $slider.find("> ul").append('<li></li>');
                });

                // Put .show on the first Slide
                $slider.find("div:first-of-type").addClass("show");

                // Put .showLi on the first dot
                $slider.find("li:first-of-type").addClass("showli")

                //fadeout all items except .show
                $slider.find("> div").not(".show").fadeOut();

                // If Autoplay is set to 'on' than start it
                if (set.autoPlay === "on") {
                    startSlider();
                }

                // If showarrows is set to 'on' then don't hide them
                if (set.showArrows === "on") {
                    $slider.addClass('showArrows');
                }

                // If hideDots is set to 'on' then hide them
                if (set.hideDots === "on") {
                    $slider.addClass('hideDots');
                }

                // If hoverZoom is set to 'off' then stop it
                if (set.hoverZoom === "off") {
                    $slider.addClass('hoverZoomOff');
                }

                // If titleBarTop is set to 'on' then move it up
                if (set.titleBarTop === "on") {
                    $slider.addClass('titleBarTop');
                }

                // function to start auto play
                function startSlider() {
                    sliderIntervalID = setInterval(function() {
                        nextSlide();
                    }, set.slidePause);
                }

                // on mouseover stop the autoplay and clear interval
                $slider.mouseover(function() {
                    clearInterval(sliderIntervalID);
                });

                // on mouseout starts the autoplay by calling startSlider
                $slider.mouseout(function() {
                    startSlider();
                });

                //on right arrow click
                $slider.find("> .right").click(nextSlide)

                //on left arrow click
                $slider.find("> .left").click(prevSlide);

                // Go to next slide
                function nextSlide() {
                    position = $slider.find(".show").index() + 1;
                    if (position > size - 1) position = 0;
                    changeCarousel(position);
                }

                // Go to previous slide
                function prevSlide() {
                    position = $slider.find(".show").index() - 1;
                    if (position < 0) position = size - 1;
                    changeCarousel(position);
                }

                //when user clicks slider button
                $slider.find(" > ul > li").click(function() {
                    position = $(this).index();
                    changeCarousel($(this).index());
                });

                //this changes the image and button selection
                function changeCarousel() {
                    $slider.find(".show").removeClass("show").fadeOut();
                    $slider
                        .find("> div")
                        .eq(position)
                        .fadeIn(set.fadeSpeed)
                        .addClass("show");
                    // The Dots
                    $slider.find("> ul").find(".showli").removeClass("showli");
                    $slider.find("> ul > li").eq(position).addClass("showli");
                }

                return $slider;
            };
        })(jQuery);



        //////////////////////////////////////////////
        // Activate each slider - change options
        //////////////////////////////////////////////
        $(document).ready(function() {

            $("#slider1").sliderResponsive({
                // Using default everything
                // slidePause: 5000,
                // fadeSpeed: 800,
                // autoPlay: "on",
                // showArrows: "off", 
                // hideDots: "off", 
                // hoverZoom: "on", 
                // titleBarTop: "off"
            });

            $("#slider2").sliderResponsive({
                fadeSpeed: 300,
                autoPlay: "off",
                showArrows: "on",
                hideDots: "on"
            });

            $("#slider3").sliderResponsive({
                hoverZoom: "off",
                hideDots: "on"
            });

        });
    </script>


</body>

</html>

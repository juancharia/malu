<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<style type="text/css">
    /*! CSS Used from: http://localhost/carrito/css/bootstrap.min.css */
*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;}
h3{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#7971ea;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#3a2ee0;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
label{display:inline-block;margin-bottom:0.5rem;}
input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
input{overflow:visible;}
[type=submit]{-webkit-appearance:button;}
[type=submit]::-moz-focus-inner{padding:0;border-style:none;}
h3{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h3{font-size:1.75rem;}
.list-unstyled{padding-left:0;list-style:none;}
.img-fluid{max-width:100%;height:auto;}
.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;width: 1000; right: 100px;}
.col-lg-3,.col-lg-4,.col-lg-6,.col-md-6,.col-md-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:992px){
.col-lg-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-lg-4{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%;}
.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.form-control{display:block;width:100%;height:calc(2.25rem + 2px);padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:0.25rem;-webkit-transition:border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;-o-transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;}
@media screen and (prefers-reduced-motion:reduce){
.form-control{-webkit-transition:none;-o-transition:none;transition:none;}
}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#e2e0fa;outline:0;-webkit-box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.25);box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;-webkit-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;-o-transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;}
@media screen and (prefers-reduced-motion:reduce){
.btn{-webkit-transition:none;-o-transition:none;transition:none;}
}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;-webkit-box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.25);box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.25);}
.btn:disabled{opacity:0.65;}
.btn-primary{color:#fff;background-color:#7971ea;border-color:#7971ea;}
.btn-primary:hover{color:#fff;background-color:#5a50e5;border-color:#4f45e3;}
.btn-primary:focus{-webkit-box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.5);box-shadow:0 0 0 0.2rem rgba(121, 113, 234, 0.5);}
.btn-primary:disabled{color:#fff;background-color:#7971ea;border-color:#7971ea;}
.btn-sm{padding:0.25rem 0.5rem;font-size:0.875rem;line-height:1.5;border-radius:0.2rem;}
.rounded{border-radius:0.25rem!important;}
.mb-0{margin-bottom:0!important;}
.mb-4{margin-bottom:1.5rem!important;}
.mb-5{margin-bottom:3rem!important;}
.py-4{padding-top:1.5rem!important;}
.py-4{padding-bottom:1.5rem!important;}
@media (min-width:992px){
.mb-lg-0{margin-bottom:0!important;}
}
.font-weight-light{font-weight:300!important;}
@media print{
*,:after,:before{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
h3,p{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
/*! CSS Used from: http://localhost/carrito/css/style.css */
::-moz-selection{background:#000;color:#fff;}
::selection{background:#000;color:#fff;}
a{-webkit-transition:.3s all ease;-o-transition:.3s all ease;transition:.3s all ease;}
a:hover{text-decoration:none;}
.btn{text-transform:uppercase;position:relative;-webkit-transition:0.2s all ease-in-out!important;-o-transition:0.2s all ease-in-out!important;transition:0.2s all ease-in-out!important;top:0;letter-spacing:.05em;}
.btn:hover,.btn:active,.btn:focus{outline:none;-webkit-box-shadow:none!important;box-shadow:none!important;}
.btn.btn-sm{font-size:14px!important;padding:10px 20px!important;}
.btn.btn-primary{font-size:17px;font-weight:300;letter-spacing:.2em;}
.btn:hover{-webkit-box-shadow:0 5px 20px -7px rgba(0, 0, 0, 0.9)!important;box-shadow:0 5px 20px -7px rgba(0, 0, 0, 0.9)!important;top:-2px;}
.form-control{height:43px;}
.form-control:active,.form-control:focus{border-color:#7971ea;}
.form-control:hover,.form-control:active,.form-control:focus{-webkit-box-shadow:none!important;box-shadow:none!important;}
.site-footer ul li{margin-bottom:10px;}
.site-footer ul li a{color:#5c626e;}
.site-footer ul li a:hover{color:#7971ea;}
.site-footer .footer-heading{font-size:20px;color:#25262a;}
.block-5 ul,.block-5 ul li{list-style:none;padding:0;margin:0;line-height:1.5;}
.block-5 ul li{padding-left:30px;position:relative;margin-bottom:15px;color:#25262a;}
.block-5 ul li:before{top:0;font-family:"icomoon";content:"";position:absolute;left:0;font-size:20px;line-height:1;color:#7971ea;}
.block-5 ul li.address:before{content:"\e8b4";}
.block-5 ul li.email:before{content:"\f0e0";}
.block-5 ul li.phone:before{content:"\f095";}
.block-6{display:block;}
.block-6 img{display:block;}
.block-6 h3{font-size:18px;}
.block-6 p{color:#737b8a;}
.block-7 .form-group{position:relative;}
.block-7 .form-control{padding-right:96px;}
.block-7 .btn{position:absolute;width:80px;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);right:3px;}
/*! CSS Used fontfaces */
@font-face{font-family:'icomoon';src:url('http://localhost/carrito/fonts/icomoon/fonts/icomoon.eot?10si43');src:url('http://localhost/carrito/fonts/icomoon/fonts/icomoon.eot?10si43#iefix') format('embedded-opentype'),     url('http://localhost/carrito/fonts/icomoon/fonts/icomoon.ttf?10si43') format('truetype'),     url('http://localhost/carrito/fonts/icomoon/fonts/icomoon.woff?10si43') format('woff'),     url('http://localhost/carrito/fonts/icomoon/fonts/icomoon.svg?10si43#icomoon') format('svg');font-weight:normal;font-style:normal;}
</style>

<div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
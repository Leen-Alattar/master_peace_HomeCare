<footer>
    <!-- footer-top-area-start -->
    <div class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/img/logo/logo2.png" alt="" /></a>
                        </div>
                        <div class="footer-text">
                            <p>But I must explain to you how at mistakidea of denouncing pleasure and praisi pain was born and I will give you</p>
                        </div>
                        <div class="footer-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <h4 class="footer-title">Information</h4>
                        <ul class="footer-menu">
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Feature</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Cleaning Tips</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <h4 class="footer-title">Services</h4>
                        <ul class="footer-menu">
                            <li><a href="#">Dry Clean Your Winter Coat</a></li>
                            <li><a href="#">Dry Clean</a></li>
                            <li><a href="#">Ironing Services</a></li>
                            <li><a href="#">Laundry</a></li>
                            <li><a href="#">Wash & Fold</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wrapper mb-30">
                        <h4 class="footer-title">Our Projects</h4>
                        <ul class="footer-img">
                            <li><a href="#"><img alt="" src="assets/img/footer/1.jpg"></a></li>
                            <li><a href="#"><img alt="" src="assets/img/footer/2.jpg"></a></li>
                            <li><a href="#"><img alt="" src="assets/img/footer/3.jpg"></a></li>
                            <li><a href="#"><img alt="" src="assets/img/footer/4.jpg"></a></li>
                            <li><a href="#"><img alt="" src="assets/img/footer/5.jpg"></a></li>
                            <li><a href="#"><img alt="" src="assets/img/footer/6.jpg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area-start -->
    <div class="footer-bottom-area ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p>Powered by <a href="#">HasTech.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area-end -->
    <!-- footer-top-area-end -->
</footer>






<!-- all js here -->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/headline.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
<script>
function validate(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");
v5 = document.getElementById("job");
v6 = document.getElementById("ans");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;
flag5 = true;
flag6 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}
if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}
if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}
if(val>=5 || val==0) {
if(v5.value == "") {
v5.style.borderColor = "red";
flag5 = false;
}
else {
v5.style.borderColor = "green";
flag5 = true;
}
}
if(val>=6 || val==0) {
if(v6.value == "") {
v6.style.borderColor = "red";
flag6 = false;
}
else {
v6.style.borderColor = "green";
flag6 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

return flag;
}</script>
</body>
</html>

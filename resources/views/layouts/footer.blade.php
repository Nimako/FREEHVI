	<!-- Footer -->
    <footer class="page-footer variant4 fullboxed">
      
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>INFORMATION</h4>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="collapsed-content">
                                <ul class="marker-list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">Ways to Earn</a></li>
                                    <li><a href="faq.html">How to Earn</a></li>
                                    <li><a href="faq.html">Payment Plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>MY ACCOUNT</h4>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="collapsed-content">
                                <ul class="marker-list">
                                    <li><a href="account-create.html">Join Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>HELP</h4>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="collapsed-content">
                                <ul class="marker-list">
                                    <li><a href="">Terms & Condition</a></li>
                                    <li><a href="">Privacy</a></li>
                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-block collapsed-mobile">
                            <div class="title">
                                <h4>CONTACT US</h4>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="collapsed-content">
                                <ul class="simple-list">
                                    <li><i class="icon icon-phone"></i>+233 242371394 / +233 544929123</li>
                                    <li><i class="icon icon-close-envelope"></i>Email: <a href="mailto:">info@freedomhint.com</a></li>
                                </ul>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- /Footer -->
    <a class="back-to-top back-to-top-mobile" href="#">
        <i class="icon icon-angle-up"></i> To Top
    </a>
</div>
<!-- /Page -->
</div>



<!-- Modal Quick View -->
<div class="modal quick-view_ zoom" id="quickView">
<div class="modal-dialog modal-lg">
    <div class="modalLoader-wrapper">
        <div class="modalLoader bg-striped"></div>
    </div>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&#10006;</button>
    </div>
    <div class="modal-content" style="">

       <p id="modal-package-title"></p>
       <p id="modal-package-price" class="h1" style="font-size:1.8em;font-weight:bold"></p>


       <a target="_blank" class="btn btn-danger btn-lg btn-block" id="packageURL">Buy</a>

    </div>
</div>
</div>
<!-- /Modal Quick View -->

<!-- jQuery Scripts  -->
<script src="{{ asset('asset/js/vendor/jquery/jquery.js')}}"></script>
<script src="{{ asset('asset/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/swiper/swiper.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/slick/slick.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/parallax/parallax.js')}}"></script>
<script src="{{ asset('asset/js/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/magnificpopup/dist/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('asset/js/vendor/countdown/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/ez-plus/jquery.ez-plus.js')}}"></script>
<script src="{{ asset('asset/js/vendor/tocca/tocca.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js')}}"></script>
<script src="{{ asset('asset/js/vendor/scrollLock/jquery-scrollLock.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/darktooltip/dist/jquery.darktooltip.js')}}"></script>
<script src="{{ asset('asset/js/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/instafeed/instafeed.min.js')}}"></script>
<script src="{{ asset('asset/js/megamenu.min.js')}}"></script>
<script src="{{ asset('asset/js/tools.min.js')}}"></script>
<script src="{{ asset('asset/js/app.js')}}"></script>


<script>
    function showPackage(title,url,price){
        
        $("#modal-package-title").text(title);

        $("#modal-package-price").text(price);

        $('#packageURL').attr('href',url);
        $('#quickView').modal('show');
    }
</script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60a165f4185beb22b30dbc7c/1f5r7chds';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>


</html>
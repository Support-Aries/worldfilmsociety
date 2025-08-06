<!-- FOOTER -->
<footer>
    <div class="container max-width text-white">
        <div class="row no-gutters">
            <!-- particles.js container -->
            <div id="particles-js1"></div>
            <div class="col-xl-5 col-lg-4 col-md-6 col-sm-12 col-xs-12 footer_left ">
                <h5>FIND US ON</h5>
                <div class="social_icons d-flex">
                    <a href="https://www.facebook.com/worldfilmsociety" target="_blank"><span class="d-flex"><i
                                class="fab fa-facebook-f m-auto"></i></span></a>
                    <a href="https://twitter.com/worldfilmwfs" target="_blank"> <span class="d-flex"><i
                                class="fab fa-twitter m-auto"></i></span></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-xs-12 footer_left ">
                <div class="company_detailes">
                    <img src="assets/icons/marcador-de-posicion.png" class="d-inline-block" alt="">
                    <p class="d-inline-block">BCG Tower, 1st Floor, Opp.CSEZ,<br> Seaport Airport Road, Kakkanad, <br>
                        Kochi - 682037</p>
                </div>
                <div class="company_detailes">
                    <img src="assets/icons/telefono-inteligente.png" class="d-inline-block icon_footer" alt="">
                    <p class="d-inline-block mt-auto">+91 953 900 0826 (Harikumar) </p>
                </div>
                <!--    <div  class="company_detailes">
                        <img src="assets/icons/email.png" alt=""  class="d-inline-block icon_footer" >
                        <p class="d-inline-block mt-auto">info@worldfilmsociety.org</p>
                    </div> -->

                <div class="company_detailes">
                    <img src="assets/icons/email.png" alt="" class="d-inline-block icon_footer">
                    <p class="d-inline-block mt-auto">
                        <a href="mailto:hari.kumar@indywood.co.in" target="_blank">hari.kumar@indywood.co.in</a>
                    </p>
                </div>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 footer_text text-center mt-4">
                © 2018 WORLD FILM SOCIETY. ALL RIGHTS RESERVED | DESIGN BY <a href="http://ariesesolutions.com/"
                    target="_blank">ARIES E SOLUTIONS</a>
            </div>
        </div>
    </div>
</footer>
<!--bootstrap-->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- GALLERY -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/charming.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/gallery.js"></script>

<!-- owl-carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<script defer src="assets/js/fontawesome-all.js"></script>
<script defer src="assets/js/jquery.particles.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src='assets/js/anime.min.js'></script>
<script src='assets/js/particles.js'></script>
<script src='assets/js/demo.js'></script>
<script src="assets/js/anim.min.js"></script>
<script src="assets/js/scroll1Monitor.js"></script>
<script src="assets/js/block.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/88/three.min.js'></script>

<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script src='https://threejs.org/examples/js/libs/stats.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<!-- Innner gallery -->
<script src="assets/js/classie.js"></script>
<script src="assets/js/modernizrinnergallery.min.js"></script>
<script src="assets/js/photostack.js"></script>

<script src="assets/js/style.js"></script>


<script>
    // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

    new Photostack(document.getElementById('photostack-1'), {
        callback: function (item) {
            //console.log(item)
        }
    });
    new Photostack(document.getElementById('photostack-2'), {
        callback: function (item) {
            //console.log(item)
        }
    });
    new Photostack(document.getElementById('photostack-3'), {
        callback: function (item) {
            //console.log(item)
        }
    });
</script>


<!-- MOUSE HOVER HEADER -->
<script>
    $(document)
        .mousemove(function (e) {
            $('.cursor')
                .eq(0)
                .css({
                    left: e.clientX,
                    top: e.clientY
                });
            setTimeout(function () {
                $('.cursor')
                    .eq(1)
                    .css({
                        left: e.clientX,
                        top: e.clientY
                    });
            }, 100);
        })
</script>

</body>

</html>
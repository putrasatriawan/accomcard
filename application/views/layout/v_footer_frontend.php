<!-- /.control-sidebar -->
<!-- /.content-wrapper -->
<div class="footer-great">
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <br>
                                <a href="#"> <img src="<?= base_url() ?>template/dist/img/AdminLTELogo.png" alt="Logo"></a>
                            </div>
                            <p class="justify">Starsmedia berasal dari Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus voluptatibus culpa asperiores quam aspernatur atque ullam doloribus delectus illo quod saepe nemo, reiciendis et dignissimos, maxime ipsum laudantium ipsa iste!</p>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/lunchat.citchat"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCkN35Jsv2BXD4cp7TC2ISeg"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/lunchat22"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/lunchat-online-2b484b1b9/"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <br>
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="<?= base_url('home') ?>"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="<?= base_url('about') ?>"><i class="fa fa-angle-right"></i>About us</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <br>
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Jl. Sekolah Internasional No.1-2, Antapani, Kota Bandung, Jawa Barat 40282</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+628xxxxxxxxxx</p>
                                        <p>+628xxxxxxxxxx</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="cont">
                                        <p>starsmedia@gmail.com</p>
                                        <p>starsmedia@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
</div>
<style type="text/css">
    .footer-great {
        background-color: #1f3b5d;
        color: #fbd400;
        font-family: Montserrat;
    }

    .main-footer {
        background-color: #1f3b5d;
        color: #fbd400;
        font-family: Montserrat;
    }
</style>
</div>

<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Profesional & Terbaik
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="#">Stars Media</a>.</strong> All rights reserved. <p>Build With Love By Owner <strong><a href="https://instagram.com/putra.satriawan_">Tri Putra Satriawan</a></strong></p>
</footer>

<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= base_url() ?>js/jquery.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Produk Berhasil Ditambahkan ke keranjang'
            })
        });
    });
</script>

<!-- REQUIRED SCRIPTS -->
</body>

</html>
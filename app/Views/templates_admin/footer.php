<!-- Footer -->
<footer class="sticky-footer bg-black">
    <div class="container">
        <div class="row row-cols-md-4">
            <div class="footer-col">
                <h4>Head Office</h4>
                <ul class="nav flex-column">
                    <li>
                        Komplek Masjid Agung Al Azhar<br>
                        Jl. Sisingamangaraja, Kebayoran Baru<br>
                        Jakarta Selatan 12110<br>
                        Telp: (021) 727 92753<br>
                        Fax: (021) 724 4767<br>
                        E-Mail: info@uai.ac.id
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <ul class="nav flex-column">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Service</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Help</h4>
                <ul class="nav flex-column">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="Sosial Link">
                    <ul class="nav flex-column">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </ul>
                </div>
            </div>
            <!-- Footer CSS Style -->
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

                body {
                    line-height: 1.5;
                    font-family: 'Poppins', sans-serif;
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                .container {
                    max-width: 1000px;
                    margin: auto;
                }

                .row {
                    display: flex;
                    flex-wrap: wrap;
                }

                ul {
                    list-style: none;
                }

                .footer {
                    padding: 70px 0;
                }

                .footer-col {
                    width: 35%;
                    padding: 0 15px;
                }

                .footer-col h4 {
                    font-size: 18px;
                    color: #ffffff;
                    text-transform: capitalize;
                    margin-bottom: 25px;
                    font-weight: 500;
                    position: relative;
                }

                .footer-col h4::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: -10px;
                    background-color: #e91e63;
                    height: 2px;
                    box-sizing: border-box;
                    width: 50px;
                }

                .footer-col ul li:not(:last-child) {
                    margin-bottom: 10px;
                }

                .footer-col ul li a {
                    font-size: 16px;
                    text-transform: capitalize;
                    color: #ffffff;
                    text-decoration: none;
                    font-weight: 300;
                    color: #bbbbbb;
                    display: block;
                    transition: all 0.3s ease;
                }

                .footer-col ul li a:hover {
                    color: #ffffff;
                    padding-left: 8px;
                }

                .footer-col .social-links a {
                    display: inline-block;
                    height: 40px;
                    width: 40px;
                    background-color: rgba(255, 255, 255, 0.2);
                    margin: 0 10px 10px 0;
                    text-align: center;
                    line-height: 40px;
                    border-radius: 50%;
                    color: #ffffff;
                    transition: all 0.5s ease;
                }

                .footer-col .social-links a:hover {
                    color: #24262b;
                    background-color: #ffffff;
                }

                /*responsive*/
                @media(max-width: 767px) {
                    .footer-col {
                        width: 50%;
                        margin-bottom: 30px;
                    }
                }

                @media(max-width: 574px) {
                    .footer-col {
                        width: 100%;
                    }
                }
            </style>
            <!-- Footer CSS Style -->
        </div>
    </div>
    <p class="text-center text-muted">&copy; 2022 UAI Found It!, Inc</p>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
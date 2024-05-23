<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <h5>About Me</h5>
                        <p>Designed and developed a personal portfolio website to showcase my skills and experience</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>Who am I</h5>
                        <ul>
                            <li><a href="{{ route('contact') }}">Contact me</a></li>
                            <li><a href="{{ route('services') }}">My Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>My work</h5>
                        <ul>
                            <li><a href="{{ route('portfolio') }}">Projects</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__option__item">
                        <h5>Email me</h5>
                        <a href="mailto:youremail@example.com">youremail@example.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="footer__copyright__text">&copy; 2024 Me</p>
                </div>
            </div>
        </div>
    </div>
</footer>
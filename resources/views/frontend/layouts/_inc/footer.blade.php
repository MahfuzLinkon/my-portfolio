<footer class="footer">
    <div class="container custom-container">
        <div class="row justify-content-between">
            <div class="col-lg-4" style="margin-top:100px ">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact me</h5>
                        <p class="">{{ $frontendFooter->phone }}</p>
                        <p class="">{{ $frontendFooter->phone }}</p>

                    </div>
                    <div class="footer__widget__text">
                        
                    </div>
                    <div class="footer__widget__social">
                        <p>Follow me</p>
                        <ul class="footer__social__list">
                            <li><a href="{{ $frontendFooter->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $frontendFooter->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
                            <li><a href="{{ $frontendFooter->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $frontendFooter->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $frontendFooter->github }}"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8 mb-5">
                <div class="bg-white p-4">
                    <div class="homeContact__form ">
                        <form action="#">
                            <input type="text" name="name" placeholder="Enter name*">
                            <input type="email" name="email" placeholder="Enter mail*">
                            <input type="text" name="phone" placeholder="Enter number*">
                            <input type="text" name="subject" placeholder="Enter subject*">
                            <textarea name="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit" onclick="sentMessage()">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>Copyright @ Theme_Pure 2021 All right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
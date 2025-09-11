<footer class="footer cmt-bgcolor-darkgrey widget-footer clearfix">
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget_contact">
                        <h3 class="widget-title">Get In Touch</h3>
                        <ul class="widget_contact_wrapper">
                            <li><i class="fa fa-map-marker"></i>{{ env('APP_ADDRESS_1') }}</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:{{ env('APP_EMAIL') }}">Email: {{ env('APP_EMAIL') }}</a></li>
                            <li><i class="fa fa-phone"></i>{{ env('APP_PHONE_1') }}</li>
                            <li><i class="fa fa-phone"></i>{{ env('APP_PHONE_2') }}</li>
                            <li><i class="fa fa-fax"></i>Land line: {{ env('APP_PHONE_3') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget_quick_links">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul id="menu-footer-services">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about.index') }}">About Us</a></li>
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            <li><a href="{{ route('projects.index') }}">Projects</a></li>
                            <li><a href="{{ route('products.index') }}">Products</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                    <div class="widget widget_text">
                        <h3 class="widget-title">Get Free Estimate</h3>
                        <h3 class="cmt-textcolor-skincolor">{{ env('APP_PHONE_1') }}</h3>
                        <p>Our online scheduling and payment system is safe.</p>
                        <a class="cmt-btn cmt-btn-size-sm cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-white" href="{{ route('contact.index') }}">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <span>&copy; {{ date('Y') }} <a class="cmt-textcolor-skincolor" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>. All Rights Reserved. Designed By <a class="cmt-textcolor-skincolor" href="https://phyxle.com" target="_blank">Phyxle</a>.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

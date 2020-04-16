<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ route('home') }}" class="standard-logo" data-dark-logo="{{ asset('singgah/logos/logo-1.png') }}"><img src="{{ asset('singgah/logos/logo-1.png') }}" alt="Singgah Logo"></a>
                <a href="{{ route('home') }}" class="retina-logo" data-dark-logo="{{ asset('singgah/logos/logo-1.png') }}"><img src="{{ asset('singgah/logos/logo-1.png') }}" alt="Singgah Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{ route('home') }}"><div>Home</div></a></li>
                    <li><a href="{{ route('product') }}"><div>Product</div></a></li>
                    <li><a href="{{ route('aboutUs') }}"><div>About Us</div></a></li>
                    <li><a href="{{ route('faq') }}"><div>FAQ</div></a></li>
                    
                    <li><a href="{{ route('login') }}"><div>Login</div></a></li>
                    {{-- <li class="mega-menu"><a href="#"><div>Pages</div></a>
                        <div class="mega-menu-content style-2 clearfix">
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
                                    <ul>
                                        <li><a href="about.html"><div>About Us</div></a></li>
                                        <li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
                                        <li><a href="about-me.html"><div>About Me</div></a></li>
                                        <li><a href="team.html"><div>Team Members</div></a></li>
                                        <li><a href="jobs.html"><div>Careers</div></a></li>
                                        <li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
                                        <li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
                                        <li><a href="sitemap.html"><div>Sitemap</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Utility</div></a>
                                    <ul>
                                        <li><a href="services.html"><div>Services - Layout 1</div></a></li>
                                        <li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
                                        <li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
                                        <li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
                                        <li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
                                        <li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
                                        <li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
                                        <li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
                                    <ul>
                                        <li><a href="full-width.html"><div>Full Width</div></a></li>
                                        <li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
                                        <li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
                                        <li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
                                        <li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
                                        <li><a href="blank-page.html"><div>Blank Page</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
                                    <ul>
                                        <li><a href="login-register.html"><div>Login/Register</div></a></li>
                                        <li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>
                                        <li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>
                                        <li><a href="login-1.html"><div>Login - Style 1</div></a></li>
                                        <li><a href="login-2.html"><div>Login - Style 2</div></a></li>
                                        <li><a href="404.html"><div>404 - Simple Layout</div></a></li>
                                        <li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>
                                        <li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mega-menu"><a href="#"><div>Portfolio</div></a>
                        <div class="mega-menu-content style-2 clearfix">
                            <ul class="mega-menu-column col-5">
                                <li class="mega-menu-title"><a href="#"><div>Grids</div></a>
                                    <ul>
                                        <li><a href="portfolio-1.html"><div>1 Column</div></a></li>
                                        <li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
                                        <li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
                                        <li><a href="portfolio.html"><div>4 Columns</div></a></li>
                                        <li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
                                        <li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
                                    <ul>
                                        <li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
                                        <li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
                                        <li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
                                        <li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
                                        <li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
                                        <li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
                                    <ul>
                                        <li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
                                        <li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
                                        <li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
                                        <li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
                                        <li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
                                        <li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
                                    <ul>
                                        <li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
                                        <li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
                                        <li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
                                        <li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
                                        <li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
                                        <li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
                                    <ul>
                                        <li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
                                        <li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                        <li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
                                        <li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mega-menu"><a href="#"><div>Blog</div></a>
                        <div class="mega-menu-content style-2 clearfix">
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Default</div></a>
                                    <ul>
                                        <li><a href="blog.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                        <li><a href="blog-full-width.html"><div>Full Width</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
                                    <ul>
                                        <li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="blog-timeline.html"><div>Full Width</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
                                    <ul>
                                        <li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
                                        <li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
                                        <li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
                                        <li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-title"><a href="#"><div>Grid</div></a>
                                    <ul>
                                        <li><a href="blog-grid.html"><div>4 Columns</div></a></li>
                                        <li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
                                        <li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
                                    <ul>
                                        <li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                        <li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
                                        <li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
                                    <ul>
                                        <li><a href="blog-grid.html"><div>Pagination</div></a></li>
                                        <li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mega-menu-column col-lg-3">
                                <li class="mega-menu-title"><a href="#"><div>Single</div></a>
                                    <ul>
                                        <li><a href="blog-single.html"><div>Default Layout</div></a></li>
                                        <li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="blog-single-full.html"><div>Full Width</div></a></li>
                                        <li><a href="blog-single-small.html"><div>Small Image</div></a></li>
                                        <li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
                                    <ul>
                                        <li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
                                        <li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="shop.html"><div>Shop</div></a>
                        <ul>
                            <li><a href="shop.html"><div>4 Columns</div></a></li>
                            <li><a href="shop-3.html"><div>3 Columns</div></a>
                                <ul>
                                    <li><a href="shop-3.html"><div>Full Width</div></a></li>
                                    <li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                    <li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                </ul>
                            </li>
                            <li><a href="shop-2.html"><div>2 Columns</div></a>
                                <ul>
                                    <li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                    <li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                    <li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                </ul>
                            </li>
                            <li><a href="shop-1.html"><div>1 Columns</div></a>
                                <ul>
                                    <li><a href="shop-1.html"><div>Full Width</div></a></li>
                                    <li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                    <li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                    <li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                </ul>
                            </li>
                            <li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
                            <li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
                            <li><a href="shop-single.html"><div>Single Product</div></a>
                                <ul>
                                    <li><a href="shop-single.html"><div>Full Width</div></a></li>
                                    <li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                    <li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                    <li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                </ul>
                            </li>
                            <li><a href="cart.html"><div>Cart</div></a></li>
                            <li><a href="checkout.html"><div>Checkout</div></a></li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
                        <div class="mega-menu-content clearfix">
                            <ul class="mega-menu-column col-5">
                                <li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
                                <li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
                                <li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
                                <li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
                                <li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
                                <li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
                                <li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
                                <li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
                                <li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
                                <li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
                                <li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
                                <li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
                                <li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
                                <li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
                                <li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
                                <li><a href="form-elements.html"><div><i class="icon-edit"></i>Form Elements</div></a></li>
                                <li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li><a href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a></li>
                                <li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
                                <li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
                                <li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
                                <li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
                                <li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
                                <li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
                                <li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
                                <li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
                                <li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
                                <li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
                                <li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
                                <li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
                                <li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
                                <li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
                                <li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
                                <li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
                            </ul>
                            <ul class="mega-menu-column col-5">
                                <li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
                                <li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
                                <li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
                                <li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
                                <li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
                                <li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
                                <li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
                                <li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
                                <li><a href="flip-cards.html"><div><i class="icon-refresh"></i>Flip Cards</div></a></li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>

                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        {{-- <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Blue Round-Neck Tshirt</a>
                                    <span class="top-cart-item-price">$19.99</span>
                                    <span class="top-cart-item-quantity">x 2</span>
                                </div>
                            </div>
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Light Blue Denim Dress</a>
                                    <span class="top-cart-item-price">$24.99</span>
                                    <span class="top-cart-item-quantity">x 3</span>
                                </div>
                            </div>
                        </div>
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">$114.95</span>
                            <button class="button button-3d button-small nomargin fright">View Cart</button>
                        </div> --}}
                    </div>
                </div><!-- #top-cart end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->

<!DOCTYPE html>
<html lang="en-us" ng-app="app" ng-controller="RootController as rootVm">

@include('frontend.layout.head')

<body class=" user-unauthed" data-page-template="Content Homepage" data-scheduled-page-id="216766" onload="window.document.body.classList.add('loaded')">
    <a href="#main-content" class="skip-to-main-link">Skip to Main Content</a>

    <div class="site-strip">
        <div class="site-strip__content"></div>
    </div>
    @include('frontend.layout.header')
    <div class="main-content" data-js="App.MainContent">
        <div class="site-strip">
            <div class="site-strip__content"></div>
        </div>
        <main role="main" id="main-content">
            {{-- <noscript>
                <div class="no-script">
                    <div class="no-script__content">
                        <div class="no-script__heading">JavaScript Disabled</div>
                        To get the full RevZilla experience, enable JavaScript in your browser settings and refresh this page.
                    </div>
                </div>
            </noscript> --}}
            <!-- <div class="value-props">
                        <div class="value-props__links js-GlobalScroll-container js-GlobalScroll-container--mobile-only">
                           <a class="value-props__link js-GlobalScroll-item" data-open-href data-open-href-reuse-modal href="/value-prop/marketing-value-prop-items/1"><span class="value-props__icon value-props__icon--shipping"></span><span class="value-props__text">Free Shipping over $49.99</span><span class="value-props__learn-more">Learn More</span></a>
                           <a class="value-props__link js-GlobalScroll-item" data-open-href data-open-href-reuse-modal href="/value-prop/marketing-value-prop-items/2"><span class="value-props__icon value-props__icon--price-match"></span><span class="value-props__text"> ZillaCash: $5 for every $100</span><span class="value-props__learn-more">Learn More</span></a>
                           <a class="value-props__link js-GlobalScroll-item" data-open-href data-open-href-reuse-modal href="/value-prop/marketing-value-prop-items/3"><span class="value-props__icon value-props__icon--service"></span><span class="value-props__text">Customer Service From Riders</span><span class="value-props__learn-more">Learn More</span></a>
                        </div>
                        </div> -->
            @yield('content')
    <!-- whatsapp section start -->
    <a href="https://wa.me/YOURPHONENUMBER?call" class="whatsapp-call-float" target="_blank" rel="noopener noreferrer">
        <!-- Official WhatsApp SVG Icon -->
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!-- whatsapp setion end -->
    <div class="component__wrapper component__wrapper--background-black">
        <section class="component component--seo-block seo-block" data-analytics-component-id="167895" data-analytics-component-type="SeoBlock" data-asset-id="83256" data-component-type="SEO Block" data-js-component="SeoBlock" data-js-scheduled-component-id="167895">
            <div class="component__content">
                <h1 class="seo-block__heading stn-shd stn-shd--small" data-heading="RevZilla: The #1 Online Store for Motorcycle Gear & Parts">Bongshal: The #1 Online Store
               for Motorcycle Gear & Parts</h1>
                <div class="seo-block__top-content ui-copy-container ui-copy-container--small" data-subheading="&lt;p&gt;RevZilla is the largest online retailer of motorcycle gear, parts, and accessories in the U.S. Founded by riders in 2007, our team of motorcycle enthusiasts and product experts is dedicated to helping you find the best gear for your ride. Unlike some competitors, our customer service is available every day—because we know riders need support when they need it, not just on weekdays.&lt;br&gt;Why Choose RevZilla? Fast &amp;amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive &lt;a href=&quot;https://www.revzilla.com/rpm&quot;&gt;RPM loyalty rewards&lt;/a&gt;!&lt;br&gt;With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.&lt;br&gt;Whether you need a &lt;a href=&quot;/motorcycle-helmets&quot;&gt;motorcycle helmet&lt;/a&gt;, &lt;a href=&quot;/motorcycle-jackets-vests&quot;&gt;jacket&lt;/a&gt;, &lt;a href=&quot;/motorcycle-gloves&quot;&gt;gloves&lt;/a&gt;, &lt;a href=&quot;/motorcycle-boots&quot;&gt;boots&lt;/a&gt;, or &lt;a href=&quot;/motorcycle-parts&quot;&gt;performance parts,&lt;/a&gt; we make it easy to shop with confidence.&lt;/p&gt;">
                    <p>Bongshal is the largest online retailer of motorcycle gear, parts, and accessories in the U.S. Founded by riders in 2007, our team of motorcycle enthusiasts and product experts is dedicated to helping you find the best gear for your
                        ride. Unlike some competitors, our customer service is available every day—because we know riders need support when they need it, not just on weekdays.
                        <br>Why Choose Bongshal? Fast &amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive <a href="https://www.revzilla.com/rpm">RPM loyalty rewards</a>!
                        <br>With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.
                        <br>Whether you need a <a href="/motorcycle-helmets">motorcycle
                     helmet</a>, <a href="/motorcycle-jackets-vests">jacket</a>, <a href="/motorcycle-gloves">gloves</a>, <a href="/motorcycle-boots">boots</a>, or <a href="/motorcycle-parts">performance parts,</a> we make it easy to shop with confidence.</p>
                    <br>
                </div>
            </div>
        </section>
    </div>
    <script type="136ba6a1ac3be6cd75fee6c3-text/javascript">
        (function (w) {
             w.__rq.push(function (req) {
                require(
                   "web/static/js/redline/components/components_engine/scheduled_page"
                ).then(({
                   ScheduledPage
                }) => {
                   window.scheduledPage = new ScheduledPage(["PageData", "PageTitle", "Megaboard",
                      "VisualCategoryLinks", "Dynaboard", "TopBrands", "TabbedProductTray",
                      "CategoryPreview", "Bannerboard", "Trioboard", "ConfigurableCertonaTray",
                      "Duoboard", "TabbedShopYourRide", "SeoBlock"
                   ], "revzilla");
                });

             })
          })(this)
    </script>
    </main>
    </div>
    <input autocomplete="off" class="js-Panel-scrollLockToggle js-CmtoNavigation-classToggle cmto-mask__toggle js-Panel-input cmto-nav-panel__toggle" id="rpm-sales-pitch-panel" type="checkbox">
    <div class="cmto-nav-panel cmto-nav-panel--from-right js-CmtoNavigation-panel cmto-mask__content" data-panel-id="rpm-sales-pitch-panel">
        <div class="cmto-nav-panel__header">
            <label class="cmto-nav-panel__header-back" for="rpm-sales-pitch-panel"><span>Continue Shopping</span></label>
            <label class="cmto-nav-panel__header-close" for="rpm-sales-pitch-panel"></label>
        </div>
        <div class="cmto-nav-panel__content js-Panel-content">
            <div class="rpm-sales-pitch">
                <div class="rpm-sales-pitch__content">
                    <div class="rpm-sales-pitch__fancy-value-prop-container" style="display:none">
                        <div class="rpm-sales-pitch__header">
                            <div class="rpm-sales-pitch__heading">Riders Preferred Membership</div>
                            <img class="rpm-sales-pitch__img js-ClpInfoPanel-img">
                        </div>
                        <p>
                            <strong>Member</strong> perks for this product!
                        </p>
                        <ul class="rpm-sales-pitch__product-value-props">
                            <li class="rpm-sales-pitch__product-value-props-discount">
                                RPM Product Savings <strong class="js-ClpInfoPanel-discountSavingsAmount"></strong>
                            </li>
                            <li class="rpm-sales-pitch__product-value-props-cashback">
                                RPM Cash Back Earned <strong class="js-ClpInfoPanel-cashback"></strong>
                            </li>
                            <li class="rpm-sales-pitch__product-value-props-welcome-cash">
                                RPM Welcome Cash <strong class="js-ClpInfoPanel-welcomeCash"></strong>
                            </li>
                            <hr>
                            <li class="rpm-sales-pitch__product-value-props-total">
                                <strong>Total Value</strong><strong class="js-ClpInfoPanel-totalSavings"></strong>
                            </li>
                        </ul>
                        <div class="rpm-sales-pitch__add-to-cart-container">
                            <a class="rpm-sales-pitch__add-to-cart-button ui-button ui-button--large" href="/cart/rpm-join-or-renew">ADD RPM TO CART</a>
                        </div>
                    </div>
                    <div class="rpm-sales-pitch__header js-ClpInfoPanel-header" style="display:none">
                        <div class="rpm-sales-pitch__heading">Riders Preferred Membership</div>
                        <img class="rpm-sales-pitch__img js-ClpInfoPanel-img"> Join RPM and <span class="rpm-sales-pitch__savings">save <span
                        class="js-ClpInfoPanel-discountSavingsAmount"></span></span>
                        on this product!
                        <div>
                            <a class="rpm-sales-pitch__header-add-to-cart-button ui-button ui-button--large" href="/cart/rpm-join-or-renew">ADD RPM TO CART</a>
                        </div>
                    </div>
                    <div class="rpm-sales-pitch__logo-price">
                        <img class="rpm-sales-pitch__logo" src="https://www.revzilla.com/images/sites/shared/pages/cart/rpm-primary-on-light.svg" />
                        <span class="rpm-sales-pitch__price">
                     $39.99<span class="rpm-sales-pitch__price-per">/yr.</span>
                        </span>
                    </div>
                    <div class="rpm-sales-pitch__card">
                        <div class="rpm-sales-pitch__tagline">Spend Less. Ride More.</div>
                        <ul>
                            <li>5% RPM Cash Back*</li>
                            <li>10% Off Over 70 Brands</li>
                            <li>$15 in RPM Cash When You Join</li>
                            <li>Free 2-Day Shipping & Free Returns*</li>
                            <li>And more!</li>
                        </ul>
                        <a class="rpm-sales-pitch__bam ui-link ui-link--stacked" href="/cart/rpm-join-or-renew">Become a
                     member today!</a>
                        <a class="rpm-sales-pitch__jor ui-button ui-button--outline" href="/rpm">Learn More</a>
                    </div>
                </div>
                <div class="rpm-sales-pitch__content rpm-sales-pitch__content--legal">
                    By purchasing and enrolling in Riders Preferred Membership, you agree to the
                    <a class="ui-link ui-link--color-match ui-link--inline" href="/rpm-terms-of-use">Program Terms and
                  Conditions</a>. *Some exclusions apply: 10% RPM discount applies on full price and sale price Exclusive Brands. 10% RPM discount applies on additional select brands at full price.
                    <a class="ui-link ui-link--color-match ui-link--inline" href="/promo-exclusions">Exclusions apply</a>. RPM free 2-day shipping applies on qualifying items, contiguous U.S. only. Not available for AK, HI, or U.S. Territories.
                    <a class="ui-link ui-link--color-match ui-link--inline" href="/shipping-policies">View shipping
                  policies</a>. RPM free returns apply on qualifying items and are processed on standard return timeline, contiguous U.S. only.
                    <a class="ui-link ui-link--color-match ui-link--inline" href="/returns">View return policy</a>.
                </div>
            </div>
        </div>
    </div>
    <label class="cmto-mask__mask" for="rpm-sales-pitch-panel"></label>
    <div class="js-CmtoNavigation-accountPanel">
        <input autocomplete="off" class="js-Panel-input cmto-nav-panel__toggle" id="account" type="checkbox">
        <div class="js-CmtoNavigation-ajaxMenu cmto-nav-panel cmto-nav-panel--child cmto-nav-panel cmto-nav-panel--from-right js-CmtoNavigation-panel cmto-mask__content" data-for="account" data-panel-id="account">
            <div class="cmto-nav-panel__header">
                <label class="cmto-nav-panel__header-back" for="account"><span>Welcome!</span></label>
                <label class="cmto-nav-panel__header-close" for="account"></label>
            </div>
            <div class="cmto-nav-panel__content js-Panel-content"></div>
        </div>
    </div>
    @include('frontend.layout.footer')
    @include('frontend.layout.scripts')
    @include('frontend.layout.popup')
    </div>
</body>

</html>

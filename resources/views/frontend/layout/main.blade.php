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
         @yield('content')
      </main>
   </div>
   <!-- whatsapp section start -->
    <a href="https://wa.me/YOURPHONENUMBER?call" class="whatsapp-call-float" target="_blank" rel="noopener noreferrer">
    <!-- Official WhatsApp SVG Icon -->
    <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!-- whatsapp setion end -->
   <input autocomplete="off"
      class="js-Panel-scrollLockToggle js-CmtoNavigation-classToggle cmto-mask__toggle js-Panel-input cmto-nav-panel__toggle"
      id="rpm-sales-pitch-panel" type="checkbox">
   <div class="cmto-nav-panel cmto-nav-panel--from-right js-CmtoNavigation-panel cmto-mask__content"
      data-panel-id="rpm-sales-pitch-panel">
      <div class="cmto-nav-panel__header"><label class="cmto-nav-panel__header-back"
            for="rpm-sales-pitch-panel"><span>Continue Shopping</span></label><label
            class="cmto-nav-panel__header-close" for="rpm-sales-pitch-panel"></label></div>
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
                     <a class="rpm-sales-pitch__add-to-cart-button ui-button ui-button--large"
                        href="/cart/rpm-join-or-renew">ADD RPM TO CART</a>
                  </div>
               </div>
               <div class="rpm-sales-pitch__header js-ClpInfoPanel-header" style="display:none">
                  <div class="rpm-sales-pitch__heading">Riders Preferred Membership</div>
                  <img class="rpm-sales-pitch__img js-ClpInfoPanel-img">
                  Join RPM and <span class="rpm-sales-pitch__savings">save <span
                        class="js-ClpInfoPanel-discountSavingsAmount"></span></span>
                  on this product!
                  <div>
                     <a class="rpm-sales-pitch__header-add-to-cart-button ui-button ui-button--large"
                        href="/cart/rpm-join-or-renew">ADD RPM TO CART</a>
                  </div>
               </div>
               <div class="rpm-sales-pitch__logo-price">
                  <img class="rpm-sales-pitch__logo"
                     src="https://www.revzilla.com/images/sites/shared/pages/cart/rpm-primary-on-light.svg" />
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
                  Conditions</a>.
               *Some exclusions apply: 10% RPM discount applies on full price and sale price Exclusive Brands.
               10% RPM discount applies on additional select brands at full price.
               <a class="ui-link ui-link--color-match ui-link--inline" href="/promo-exclusions">Exclusions apply</a>.
               RPM free 2-day shipping applies on qualifying items, contiguous U.S. only.
               Not available for AK, HI, or U.S. Territories.
               <a class="ui-link ui-link--color-match ui-link--inline" href="/shipping-policies">View shipping
                  policies</a>.
               RPM free returns apply on qualifying items and are processed on standard return timeline, contiguous U.S.
               only.
               <a class="ui-link ui-link--color-match ui-link--inline" href="/returns">View return policy</a>.
            </div>
         </div>
      </div>
   </div>
   <label class="cmto-mask__mask" for="rpm-sales-pitch-panel"></label>
   <div class="js-CmtoNavigation-accountPanel">
      <input autocomplete="off" class="js-Panel-input cmto-nav-panel__toggle" id="account" type="checkbox">
      <div
         class="js-CmtoNavigation-ajaxMenu cmto-nav-panel cmto-nav-panel--child cmto-nav-panel cmto-nav-panel--from-right js-CmtoNavigation-panel cmto-mask__content"
         data-for="account" data-panel-id="account">
         <div class="cmto-nav-panel__header"><label class="cmto-nav-panel__header-back"
               for="account"><span>Welcome!</span></label><label class="cmto-nav-panel__header-close"
               for="account"></label></div>
         <div class="cmto-nav-panel__content js-Panel-content"></div>
      </div>
   </div>
   @include('frontend.layout.popup')
   @include('frontend.layout.footer')
   @include('frontend.layout.scripts')
    </div>
</body>

</html>

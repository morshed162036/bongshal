    <footer class="footer footer--shop" data-js="App.footer" role="contentinfo">
      <div class="footer__reviews-wrapper">
         <div class="footer__title">
            Moto Dreams, Delivered
         </div>
         <div class="footer__subtitle">
            Riders Serving Riders Since 2007
         </div>
         <div class="footer__reviews-socials">
            <div class="footer__reviews-social-list">
               <div class="footer__reviews-social-list-item">
                  <div class="footer__reviews-social-list-item--icon">
                     <a href="https://www.google.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-google"></i>
                     </a>
                  </div>
                  <div class="footer__reviews_social-list-item--content">
                     <div class="footer__reviews-social-list-item--title">
                        Google Trusted
                     </div>
                     <div class="footer__reviews-social-list-item--body">
                        Google 4.6 Star Rating
                     </div>
                  </div>
               </div>
               <div class="footer__reviews-social-list-item">
                  <div class="footer__reviews-social-list-item--icon">
                     <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                  </div>
                  <div class="footer__reviews_social-list-item--content">
                     <div class="footer__reviews-social-list-item--title">
                        Facebook
                     </div>
                     <div class="footer__reviews-social-list-item--body">
                        The Riders Follow our Facrbook page
                        <a class="footer__reviews-social-list-item--body__link" href="https://www.facebook.com">
                           Join Facebook
                        </a>
                     </div>
                  </div>
               </div>
               <div class="footer__reviews-social-list-item">
                  <div class="footer__reviews-social-list-item--icon">
                     <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                     </a>
                  </div>
                  <div class="footer__reviews_social-list-item--content">
                     <div class="footer__reviews-social-list-item--title">
                        1.4M Subscribers
                     </div>
                     <div class="footer__reviews-social-list-item--body">
                        Get Your Fix Of All Things Two-Wheeled
                        <a class="footer__reviews-social-list-item--body__link" target="_blank"
                           href="https://www.youtube.com/@RevZilla" rel="noopener">
                           Subscribe Today
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer__sitejabber-wrapper">
            <div class="footer__sitejabber-content footer__sitejabber-content--desktop">
               <div class="footer__sitejabber-content--badge">
                  <div class="footer__sitejabber-content--title">Don&#39;t just take our word for it</div>
                  <div class="footer__sitejabber-content--text">Here&#39;s what our happy customers have to say:</div>
                  <div class="stjr-badge" data-version="large"></div>
               </div>
               <div class="stjr-review-carousel"></div>
            </div>
            <div class="footer__sitejabber-content--mobile">
               <div class="footer__sitejabber-content--badge">
                  <div class="footer__sitejabber-content--title">Don&#39;t just take our word for it</div>
               </div>
               <div class="stjr-review-showcase"></div>
            </div>
         </div>
      </div>
      <div class="footer__divider-wrapper">
         <div class="footer__divider-content">
            <div class="footer__content  footer__content--overflow-show">
               <div class="footer__logo-content">
                  <div class="footer__rz-divider">
                     <img alt="RevZilla" class="footer__rz-logo" src="{{ asset('frontend') }}/image/BONGSHAL .jpg" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__menus-wrapper">
         <div class="footer__content">
            <div class="footer__contact-phone">
               <span class="footer__contact-header footer__contact-header--phone">Need help?</span>
               <p class="footer__phone-number footer__highlight">
                  <a class="footer__phone-number" href="tel:+1 (215) 334-5500">+1 (215) 334-5500</a>
               </p>
            </div>
            <div class="footer__contact">
               <div class="footer__promo-signup">
                  <div class="footer__promo-signup-content">
                     <div class="footer__promo-signup-heading">
                        Connect with us to save
                     </div>
                     <div class="footer__promo-signup-subheading">
                        Sign up for Email &amp; SMS To
                        <span class="footer__highlight">
                           Get 10% Off*
                        </span>
                     </div>
                     <div class="footer__promo-signup-forms">
                        <input type="radio" name="signup-promo-toggle" id="email-signup-promo-toggle"
                           class="footer__promo-signup-toggle-input">
                        <label
                           class="footer__promo-signup-toggle-label footer__promo-signup-toggle-label--email ui-button"
                           for="email-signup-promo-toggle">Sign up for Emails</label>
                        <form action="/email-signup" class="footer__promo-signup-form"
                           data-form-name="Footer &gt; Email Sign Up" method="post">
                           <input name="_csrf_token" type="hidden" hidden
                              value="Wwx_ThknTlgIPUEmYGdTJTZ4CGErPi5SmU78lQymDHro1V5rQ0o5QKYb">
                           <input id="email_signup_list" name="email_signup[list]" type="hidden" value="promotions">
                           <input id="email_signup_source" name="email_signup[source]" type="hidden" value="footer">
                           <div class="footer__promo-signup-input">
                              <input aria-label="Email Address for Mailing List Subscription"
                                 class="ui-text-input ui-text-input--color-match, no-underline"
                                 data-field-name="Email Address" id="email_signup_email" name="email_signup[email]"
                                 placeholder="Enter email address" required type="email">
                              <button class="ui-button" type="submit">Sign Up</button>
                           </div>
                        </form>
                        <input type="radio" name="signup-promo-toggle" id="sms-signup-promo-toggle"
                           class="footer__promo-signup-toggle-input">
                        <label
                           class="footer__promo-signup-toggle-label footer__promo-signup-toggle-label--sms ui-button"
                           for="sms-signup-promo-toggle">Sign up for Texts Alerts</label>
                        <form action="/sms-signup" class="footer__promo-signup-form"
                           data-form-name="Footer &gt; SMS Sign Up" method="post">
                           <input name="_csrf_token" type="hidden" hidden
                              value="Wwx_ThknTlgIPUEmYGdTJTZ4CGErPi5SmU78lQymDHro1V5rQ0o5QKYb">
                           <div class="footer__promo-signup-input">
                              <input aria-label="Phone Number for SMS Subscription"
                                 class="ui-text-input ui-text-input--color-match, no-underline"
                                 data-field-name="Phone Number" id="sms_signup_phone_number"
                                 name="sms_signup[phone_number]" placeholder="Enter phone number" required type="tel">
                              <button class="ui-button" type="submit">Sign Up</button>
                           </div>
                        </form>
                        <div class="footer__promo-signup-exclusions">
                           <div>
                              *Offer valid for new customers only.
                              <a class="ui-link ui-link--inline ui-link--color-match ui-link--underlined"
                                 target="_blank" href="https://www.revzilla.com/first-purchase-eligible" rel="noopener">
                                 View Qualified Products
                              </a>
                           </div>
                           *By submitting this form, you agree to receive recurring automated promotional and
                           personalized marketing text
                           messages (e.g. cart reminders) from RevZilla at the cell number used when signing up. Consent
                           is not a condition
                           of any purchase. Reply HELP for help and STOP to cancel. Msg frequency varies. Msg and data
                           rates may apply.
                           View <a class="ui-link ui-link--inline ui-link--color-match ui-link--underlined"
                              href="http://attn.tv/revzilla/terms.html" target="_blank">Terms</a> & <a
                              class="ui-link ui-link--inline ui-link--color-match ui-link--underlined"
                              href="https://attnl.tv/p/FfY" target="_blank">Privacy</a>.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__contact-cta footer__contact-cta--feedback footer__contact-cta--dark">
                  <div class="footer__contact-text">
                     <span class="footer__contact-header footer__improve-copy">We&#39;re Always Looking To
                        Improve</span>
                     <p class="footer__cta-copy">
                        Tell us what you love or what we need to fix.
                     </p>
                  </div>
                  <a class="footer__cta-button ui-button ui-button--outline ui-button--white ui-button--auto-width"
                     data-open-href data-open-class="feedback__lightbox  feedback__lightbox--revzilla"
                     data-open-disable-overlay-close href="/feedback?source=Footer+Banner">Leave Feedback</a>
               </div>
            </div>
            <div class="footer__utility-links">
               <!-- NAV HELPER ~ FOOTER ~ 2025-07-18 19:27:13.155240Z -->
               <ul class="footer__list footer__list--level-0">
                  <li class="footer__item footer__item--level-1 footer-accordion accordion--mobile-only"
                     data-js="Accordion" data-nav-level="2" data-nav-section="About RevZilla">
                     <div class="footer-accordion__item js-Footer-accordionItem" data-js="Accordion.item.closed">
                        <div class="footer-accordion__label js-Footer-accordionLink">
                           <div class="footer__link footer__link--level-1"><a data-nid="10463"
                                 href="/about-revzilla">About Bongshal</a><span>About Bongshal</span></div>
                        </div>
                        <div class="footer-accordion__content">
                           <ul class="footer__list footer__list--level-1">
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Riders Preferred Membership"><a
                                    class="footer__link footer__link--level-2" data-nid="23724" href="/rpm">Bongshal
                                    Preferred Membership</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Why Shop RevZilla?"><a class="footer__link footer__link--level-2"
                                    data-nid="20102" href="/why-revzilla">Why Shop Bongshal?</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="About Us"><a class="footer__link footer__link--level-2"
                                    data-nid="14550" href="/about-revzilla">About Us</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Affiliate Program"><a class="footer__link footer__link--level-2"
                                    data-nid="26274" href="/affiliate-program">Affiliate Program</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Careers"><a class="footer__link footer__link--level-2"
                                    data-nid="10465" href="/careers">Careers</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Charitable Donations"><a class="footer__link footer__link--level-2"
                                    data-nid="17532" href="/charitable-donations">Charitable Donations</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="ZillaCash Rewards"><a class="footer__link footer__link--level-2"
                                    data-nid="10466" href="/zillacash-rewards-program">ZillaCash Rewards</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Discount Codes"><a class="footer__link footer__link--level-2"
                                    data-nid="15254" href="/revzilla-discount-code-and-coupon-deals">Discount Codes</a>
                              </li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="RevZilla Stores"><a class="footer__link footer__link--level-2"
                                    data-nid="19117" href="/revzilla-stores">Bongshal Stores</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Events"><a class="footer__link footer__link--level-2"
                                    data-nid="17545" href="/events">Events</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Common Tread Blog"><a class="footer__link footer__link--level-2"
                                    data-nid="14895" href="/common-tread">Common Tread Blog</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="All Brands"><a class="footer__link footer__link--level-2"
                                    data-nid="17213" href="/all-brands">All Brands</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="footer__item footer__item--level-1 footer-accordion accordion--mobile-only"
                     data-js="Accordion" data-nav-level="2" data-nav-section="Customer Service">
                     <div class="footer-accordion__item js-Footer-accordionItem" data-js="Accordion.item.closed">
                        <div class="footer-accordion__label js-Footer-accordionLink">
                           <div class="footer__link footer__link--level-1"><a data-nid="10469"
                                 href="/customer-service">Customer Service</a><span>Customer Service</span></div>
                        </div>
                        <div class="footer-accordion__content">
                           <ul class="footer__list footer__list--level-1">
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Contact Us"><a class="footer__link footer__link--level-2"
                                    data-nid="10470" href="/contact-us">Contact Us</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Return Policy"><a class="footer__link footer__link--level-2"
                                    data-nid="10471" href="/returns">Return Policy</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Shipping Policies"><a class="footer__link footer__link--level-2"
                                    data-nid="10472" href="/shipping-policies">Shipping Policies</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Price Match Policy"><a class="footer__link footer__link--level-2"
                                    data-nid="10473" href="/price-match">Price Match Policy</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Gift Certificate Policy"><a
                                    class="footer__link footer__link--level-2" data-nid="10474"
                                    href="/gift-certificate-policy">Gift Certificate Policy</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Police / Military / Fire / EMS Discount"><a
                                    class="footer__link footer__link--level-2" data-nid="16847"
                                    href="/police-fire-military-discount">Police / Military / Fire / EMS Discount</a>
                              </li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Recalls / Product Notices"><a
                                    class="footer__link footer__link--level-2" data-nid="20090"
                                    href="/recalls-product-notices">Recalls / Product Notices</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Order Status"><a class="footer__link footer__link--level-2"
                                    data-nid="15585" href="/order-status">Order Status</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Bulk Orders"><a class="footer__link footer__link--level-2"
                                    data-nid="16848" href="/bulk-orders">Bulk Orders</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3" data-nav-section="FAQ">
                                 <a class="footer__link footer__link--level-2" data-nid="10475" href="/faq">FAQ</a></li>
                              <li class="footer__item footer__item--level-2" data-nav-level="3"
                                 data-nav-section="Discount Exclusions"><a class="footer__link footer__link--level-2"
                                    data-nid="17513" href="/promo-exclusions">Discount Exclusions</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="footer__logos">
         <div class="footer__content">
            <div class="footer__progressive">
               <img
                  src="https://www.revzilla.com/images/redline/support/footer/footer_progressive_cycles-284bf9523d5bcc3852e2d2e460eb0a0c.png?vsn=d"
                  alt="Progressive" class="footer__progressive-badge" height="12" width="100" />
            </div>
            <div class="footer__comoto">
               <img
                  src="https://www.revzilla.com/images/redline/support/footer/comoto_family_logo-62e7d2ce9a9cb4273e64e246d5ebb5ab.svg?vsn=d"
                  alt="Comoto" />
            </div>
            <ul class="footer__social-links">
               <li class="footer__social-list-item">
                  <a class="footer__social-link" itemprop="sameAs" href="#" target="_blank" title="Facebook"
                     rel="noopener">
                     <img
                        src="https://www.revzilla.com/images/redline/support/footer/footer_facebook-61807894ff707f11820a4c0ebd9b908a.svg?vsn=d"
                        alt="Facebook" />
                  </a>
               </li>
               <li class="footer__social-list-item">
                  <a class="footer__social-link" itemprop="sameAs" href="#" target="_blank" title="Instagram"
                     rel="noopener">
                     <img
                        src="https://www.revzilla.com/images/redline/support/footer/footer_instagram-73b73c5f5e19684b37d9a0ed95052536.svg?vsn=d"
                        alt="Instagram" />
                  </a>
               </li>
               <li class="footer__social-list-item">
                  <a class="footer__social-link" itemprop="sameAs" href="#" target="_blank"
                     title="RevZillaTV on YouTube" rel="noopener">
                     <img
                        src="https://www.revzilla.com/images/redline/support/footer/footer_youtube-c09b1f3198a69426e9d5e94aa4c8447a.svg?vsn=d"
                        alt="YouTube" />
                  </a>
               </li>
               <li class="footer__social-list-item">
                  <a class="footer__social-link" itemprop="sameAs" href="#" target="_blank" title="RevZilla on TikTok"
                     rel="noopener">
                     <img
                        src="https://www.revzilla.com/images/redline/support/footer/footer_tiktok-4ece1badd47c4801c21b8972ff9b1197.svg?vsn=d"
                        alt="TikTok" />
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="footer__static">
         <div class="footer__content  footer__static-content">
            <div class="footer__copyright">
               <span class="footer__copyright-text">© 2025 Bongshal.com All Rights Reserved</span>
               <a class="footer__policy-link footer__policy-link--shop" href="#">Secure Shopping</a>
               <span class="footer__ccpa-img">
                  <img
                     src="https://www.revzilla.com/images/sites/shared/CCPA-64b87e5e5e81316248675a5fe6eb808c.svg?vsn=d"
                     width="30" height="30" />
                  <a class="footer__policy-link footer__policy-link--ccpa ot-sdk-show-settings">Your Privacy Choices</a>
               </span>
               <a class="footer__policy-link footer__policy-link--privacy" href="#">Privacy Policy</a>
               <a class="footer__policy-link footer__policy-link--terms" href="#">Terms &amp; Conditions</a>
               <a class="footer__policy-link footer__policy-link--accessibility-statement" href="#">Accessibility
                  Statement</a>
            </div>
         </div>
      </div>
    </footer>

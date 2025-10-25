<div class="reveal-overlay"  id="shop-your-ride-modal">
      {{-- <h1>hi</h1> --}}
      <div class="reveal-href reveal authentication-form-modal" data-open-href-modal="/auth/identity" role="dialog"
         aria-hidden="false" data-fe="xjsvn3-fe" style="display: block; top: 101px;" tabindex="-1">
         <div class="reveal-header"><a class="reveal-header__close"></a></div>
         <div class="reveal-href__body">
            <div class="vehicle-selector bike-selector" data-js-component="BikeSelector"
               data-js-scheduled-component-id="lightbox-2025-08-02 07:43:41.837156Z">
               <div class="shop-by-bike shop-by-bike--select" data-js="ShopByBike.selectInterface"
                  data-qa="shop-by-bike-select">
                  <div class="shop-by-bike__mobile-select-toggle ui-action-button ui-action-button--fast"
                     data-click-toggle=""
                     data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle"
                     data-qa="shop-by-bike-link">My Garage</div>
                  <div class="shop-by-bike__select">

                     <div class="shop-by shop-by-bike__content shop-by-bike__content--select">
                        <div class="shop-by-bike__header">
                           <span class="shop-by__heading">
                              <span class="shop-by__heading-text">My Garage</span>
                           </span>
                           <span class="shop-by-bike__action-label shop-by-bike__action-label--recent"
                              data-js="ShopByBike.recentBike" style="display: none">Recent Vehicle</span>
                           <a class="shop-by-bike__action-link shop-by-bike__action-link--recent ui-link"
                              data-js="ShopByBike.recentBike ShopByBike.recentBike.link ShopByBike.vehicleLink" href=""
                              style="display: none"></a>

                        </div>

                        <div class="shop-by-bike__form">
                            <form action="{{ route('shop.products') }}" method="GET" id="bikeForm" class="shop-by-bike__select-dimensions">
                                @csrf
                                <select name="company_id" id="companySelect" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select">
                                    <option value="">Make</option>
                                    @php
                                    $companies = App\Models\Company::all();
                                    @endphp
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>

                                <select name="bike_id" id="modelSelect" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--model ui-select" disabled>
                                    <option value="">Select Model</option>
                                </select>

                                <select name="color_id" id="colorSelect" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--model ui-select" disabled>
                                    <option value="">Select Color</option>
                                </select>

                                <button type="submit" id="goBtn" class="shop-by-bike__select-selection-link ui-button" disabled>Go!</button>
                            </form>


                        </div>
                        {{-- <div class="shop-by-bike__garage-copy">
    <a id="login-modal-button" class="ui-link ui-link--small open-login-modal-btn">Log in</a> to manage your garage
    &amp; search history
</div> --}}
                        {{-- <div class="shop-by-bike__garage shop-by-bike__garage--unauthed">
                           <div class="shop-by-bike__garage-section shop-by-bike__garage-section--saved">
                              <div class="shop-by-bike__garage-heading">My Garage</div>
                              <div class="shop-by-bike__garage-list"><span
                                    class="shop-by-bike__garage-list-item shop-by-bike__garage-list-item--disabled">
                                    <div class="shop-by-bike__garage-list-item-name">N/A</div>
                                 </span></div>
                           </div>
                           <div class="shop-by-bike__garage-section shop-by-bike__garage-section--history">
                              <div class="shop-by-bike__garage-heading">Search History</div>
                              <div class="shop-by-bike__garage-list"><span
                                    class="shop-by-bike__garage-list-item shop-by-bike__garage-list-item--disabled">
                                    <div class="shop-by-bike__garage-list-item-name">N/A</div>
                                 </span></div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>

               <div class="shop-by-bike__garage-flyout garage-flyout garage-flyout--shop-by-bike"
                  data-js="ShopByBike.garageFlyout">
                  <div class="garage-flyout__heading">Select a Vehicle</div>
                  <div data-js="ShopByBike.garageFlyout.emptyGarage">
                     <div class="garage-flyout__subheading">No saved vehicles?</div>
                     <div class="garage-flyout__copy">Use the Shop Your Ride tool to search for parts that fit your
                        vehicle.</div>
                  </div>
                  <div data-js="ShopByBike.garageFlyout.garage" style="display: none;">
                     <div class="garage-flyout__subheading">Saved Vehicles</div>
                     <div data-js="ShopByBike.garageFlyout.bikes">
                        <a class="garage-flyout__link ui-link"
                           data-js="ShopByBike.garageFlyout.bikeTemplate ShopByBike.vehicleLink" href=""
                           style="display: none"></a>
                        <a class="garage-flyout__link garage-flyout__link--primary ui-link"
                           data-js="ShopByBike.garageFlyout.primaryBikeTemplate ShopByBike.vehicleLink" href=""
                           style="display: none"></a>
                     </div>
                     <a class="garage-flyout__subheading garage-flyout__subheading--manage ui-link"
                        href="/account/garage">Manage Garage</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="reveal-overlay" id="login-modal">
      <div id="login-modal-content" class="reveal-href reveal authentication-form-modal" data-open-href-modal="/auth/identity" role="dialog"
         aria-hidden="false" data-fe="9bg9ol-fe" style="display: block; top: 74px;" tabindex="-1">
         <div class="reveal-header"><a class="reveal-header__close" data-reveal-close=""></a></div>
         <div class="reveal-href__body">
            <input checked="" class="authentication-form-modal__toggle" id="authorize"
               name="authentication-modal-toggle" type="radio">
            <div class="authentication-form-modal__form" data-qa="auth-form-modal">
               <div class="authentication-form authentication-form--authorize" data-js="Accordion.item.closed">
                  <h1 class="authentication-form__heading ui-h1" data-qa="auth-form-log-in">Log In</h1>
                  <form action="/auth/identity/callback?mode=authorize" class="authentication-form__content"
                     data-form-name="Login" method="post"><input name="_csrf_token" type="hidden" hidden=""
                        value="YwQmDTkdEhg3A2cdGx8SAghbRhY2TwUg0S_nMndnhU3ZI-pDRhtFsxJg">
                     <input type="hidden" name="state"
                        value="2f3f7372736c7469643d41666d424f6f6f444a54764c326d6937554c395577646f61565746727478795749437a54502d67644a436c57676d52445a6c6c57646e754b">
                     <label class="js-Fields-field field field--required authentication-form__field">
                        <div class="field__input-wrapper"><input
                              class="field__input js-Fields-input js-auth-email-input ui-text-input"
                              data-field-name="Email Address"
                              data-field-error-blank-message="Please enter your email address."
                              id="authorization_email_address_modal" name="registration[email_address]" type="text">
                        </div><span class="field__label">Email Address</span>
                     </label>
                     <label class="js-Fields-field field field--required authentication-form__field">
                        <div class="field__input-wrapper">
                           <div class="ui-password-input__wrapper"><input autocomplete="off"
                                 class="field__input js-Fields-input ui-password-input js-Fields-input"
                                 data-field-error-blank-message="Please enter your password." data-field-name="Password"
                                 id="authorization_password_modal" name="registration[password]" type="password"><a
                                 class="ui-password-input__button ui-password-input__button--show js-PasswordField-toggle">Show</a><a
                                 class="ui-password-input__button ui-password-input__button--hide js-PasswordField-toggle">Hide</a>
                           </div>
                        </div><span class="field__label">Password</span>
                     </label>
                     <a class="ui-link ui-link--black ui-link--underlined" data-link-name="Forgot your password?"
                        href="/auth/forgot-password">Forgot your password?</a>
                     <label class="js-Fields-field field authentication-form__checkbox">
                        <div class="field__input-wrapper"><input name="remember_me" type="hidden" value="false"><input
                              aria-label="Toggle selection" checked="" class="field__input js-Fields-input ui-checkbox"
                              data-field-name="Remember Me" id="remember_me_modal" name="remember_me" type="checkbox"
                              value="true"><label for="remember_me_modal">Keep me logged in on this computer</label><br>
                        </div><span class="field__label"></span>
                     </label>
                     <button class="ui-button ui-button--full-width ui-button--uppercase ui-button--black"
                        type="submit">Log In</button>
                     <a class="authentication-form__log-in-with-code js-login-with-code-link ui-button ui-button--outline ui-button--full-width ui-button--uppercase"
                        data-link-name="Log in with code" href="/auth/one_time_code">Log In With Code</a>
                     <div class="authentication-form__button-separator">or</div>
                     <a class="authentication-form__social-log-in ui-button ui-button--icon ui-button--apple ui-button--full-width ui-button--secondary ui-button--uppercase"
                        data-link-name="Apple Login"
                        href="/auth/apple?state=2f3f7372736c7469643d41666d424f6f6f444a54764c326d6937554c395577646f61565746727478795749437a54502d67644a436c57676d52445a6c6c57646e754b"
                        target="">Log In with Apple</a>
                     <a class="authentication-form__social-log-in ui-button ui-button--icon ui-button--google ui-button--full-width ui-button--secondary ui-button--uppercase"
                        data-link-name="Google Login"
                        href="/auth/google?state=2f3f7372736c7469643d41666d424f6f6f444a54764c326d6937554c395577646f61565746727478795749437a54502d67644a436c57676d52445a6c6c57646e754b"
                        target="">Log In with Google</a>
                  </form>
               </div>
               <div class="authentication-form-modal__toggle-section">
                  Don't have an account?
                  <label for="register"><span class="ui-link" data-qa="create-account-link">Create
                        Account</span></label>
               </div>
            </div>
            <input class="authentication-form-modal__toggle" id="register" name="authentication-modal-toggle"
               type="radio">
            <div class="authentication-form-modal__form">
               <div class="authentication-form authentication-form--new-account" data-js="Accordion.item.closed">
                  <h1 class="authentication-form__heading ui-h1">Create Account</h1>
                  <form action="/auth/identity/callback?mode=register" class="authentication-form__content"
                     data-form-name="Create Account" data-qa="registration-form" method="post"><input name="_csrf_token"
                        type="hidden" hidden="" value="YwQmDTkdEhg3A2cdGx8SAghbRhY2TwUg0S_nMndnhU3ZI-pDRhtFsxJg">
                     <input type="hidden" name="state"
                        value="2f3f7372736c7469643d41666d424f6f6f444a54764c326d6937554c395577646f61565746727478795749437a54502d67644a436c57676d52445a6c6c57646e754b">
                     <input type="hidden" name="workflow" value="register">
                     <div class="authentication-form__copy">Join TeamZilla to access order details, save vehicles to
                        your garage, and earn ZillaCash with every order.</div>
                     <label class="js-Fields-field field field--required authentication-form__field">
                        <div class="field__input-wrapper"><input class="field__input js-Fields-input ui-text-input"
                              data-field-name="Email Address"
                              data-field-error-blank-message="Please enter your email address."
                              data-field-error-match-regex="^[a-zA-Z0-9.!#$%&amp;’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                              data-field-error-match-regex-message="Please enter a valid email address."
                              id="registration_email_address" name="registration[email_address]" type="email"></div>
                        <span class="field__label">Email Address</span>
                     </label>
                     <label class="js-Fields-field field field--required authentication-form__field">
                        <div class="field__input-wrapper">
                           <div class="ui-password-input__wrapper"><input autocomplete="off"
                                 class="field__input js-Fields-input ui-password-input js-Fields-input"
                                 data-field-error-blank-message="Please enter a password."
                                 data-field-error-match-regex=".{8,}"
                                 data-field-error-match-regex-message="Password must be at least 8 characters long."
                                 data-field-name="Password" id="registration_password" name="registration[password]"
                                 type="password"><a
                                 class="ui-password-input__button ui-password-input__button--show js-PasswordField-toggle">Show</a><a
                                 class="ui-password-input__button ui-password-input__button--hide js-PasswordField-toggle">Hide</a>
                           </div>
                        </div><span class="field__label">Password</span>
                     </label>
                     <label class="js-Fields-field field field--required authentication-form__field">
                        <div class="field__input-wrapper">
                           <div class="ui-password-input__wrapper"><input autocomplete="off"
                                 class="field__input js-Fields-input ui-password-input js-Fields-input"
                                 data-field-error-blank-message="Please enter a matching password."
                                 data-field-error-match-input-id="registration_password"
                                 data-field-error-match-input-message="Passwords must match."
                                 data-field-name="Confirm Password" id="registration_password_confirmation"
                                 name="registration[password_confirmation]" type="password"><a
                                 class="ui-password-input__button ui-password-input__button--show js-PasswordField-toggle">Show</a><a
                                 class="ui-password-input__button ui-password-input__button--hide js-PasswordField-toggle">Hide</a>
                           </div>
                        </div><span class="field__label">Confirm Password</span>
                     </label>
                     <label class="js-Fields-field field authentication-form__checkbox">
                        <div class="field__input-wrapper"><input name="registration[email_signup]" type="hidden"
                              value="false"><input aria-label="Toggle selection"
                              class="field__input js-Fields-input ui-checkbox" data-field-name="Email Signup"
                              id="email_signup_modal" name="registration[email_signup]" type="checkbox"
                              value="true"><label for="email_signup_modal">Sign up for news, promos and
                              offers</label><br></div><span class="field__label"></span>
                     </label>
                     <button class="ui-button ui-button--full-width ui-button--uppercase ui-button--black"
                        type="submit">Create Account</button>
                     <div class="authentication-form__disclaimer">
                        By creating an account you're agreeing to our
                        <a class="ui-link ui-link--inline ui-link--black"
                           href="/customer-service-terms-and-conditions">Terms and Conditions</a>
                        and
                        <a class="ui-link ui-link--inline ui-link--black" href="/privacy-policy">Privacy Policy</a>.
                     </div>
                  </form>
               </div>

               <div class="authentication-form-modal__toggle-section">
                  Already have an account?
                  <label for="authorize"><span class="ui-link">Log In</span></label>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
    document.addEventListener("DOMContentLoaded", function() {
    let companySelect = document.getElementById('companySelect');
    let modelSelect = document.getElementById('modelSelect');
    let colorSelect = document.getElementById('colorSelect');
    let goBtn = document.getElementById('goBtn');

    // When company selected -> load models
    companySelect.addEventListener('change', function() {
        let companyId = this.value;
        modelSelect.innerHTML = '<option value="">Select Model</option>';
        colorSelect.innerHTML = '<option value="">Select Color</option>';
        modelSelect.disabled = true;
        colorSelect.disabled = true;
        goBtn.disabled = true;

        if (companyId) {
            fetch("{{ url('/get-models') }}/" + companyId)
                .then(res => res.json())
                .then(data => {
                    if (data.length > 0) {
                        modelSelect.disabled = false;
                        data.forEach(model => {
                            modelSelect.innerHTML += `<option value="${model.id}">${model.model}</option>`;
                        });
                    }
                });
        }
    });

    // When model selected -> load colors
    modelSelect.addEventListener('change', function() {
        let bikeId = this.value;
        colorSelect.innerHTML = '<option value="">Select Color</option>';
        colorSelect.disabled = true;
        goBtn.disabled = true;

        if (bikeId) {
            fetch("{{ url('/get-colors') }}/" + bikeId)
                .then(res => res.json())
                .then(data => {
                    if (data.length > 0) {
                        colorSelect.disabled = false;
                        data.forEach(color => {
                            colorSelect.innerHTML += `<option value="${color.id}">${color.color_name}</option>`;
                        });
                    } else {
                        goBtn.disabled = false; // enable if no colors
                    }
                });
        }
    });

    // When color selected -> enable Go
    colorSelect.addEventListener('change', function() {
        if (this.value) {
            goBtn.disabled = false;
        }
    });
});

   </script>

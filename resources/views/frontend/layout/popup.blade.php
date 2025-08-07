    <div class="reveal-overlay" id="reveal-overlays">
        <div class="reveal-href reveal authentication-form-modal" data-open-href-modal="/auth/identity" role="dialog" aria-hidden="false" data-fe="xjsvn3-fe" style="display: block; top: 101px;" tabindex="-1">
            <div class="reveal-header">
                <a class="reveal-header__close"></a>
            </div>
            <div class="reveal-href__body">


                <div class="vehicle-selector bike-selector" data-js-component="BikeSelector" data-js-scheduled-component-id="lightbox-2025-08-02 07:43:41.837156Z">

                    <div class="shop-by-bike shop-by-bike--select" data-js="ShopByBike.selectInterface" data-qa="shop-by-bike-select">
                        <div class="shop-by-bike__mobile-select-toggle ui-action-button ui-action-button--fast" data-click-toggle="" data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle" data-qa="shop-by-bike-link">Shop Your Ride</div>
                        <div class="shop-by-bike__select">

                            <div class="shop-by shop-by-bike__content shop-by-bike__content--select">
                                <div class="shop-by-bike__header">
                                    <span class="shop-by__heading">
                                        <span class="shop-by__heading-text">Shop Your Ride</span>
                                    </span>


                                    <span class="shop-by-bike__action-label shop-by-bike__action-label--recent" data-js="ShopByBike.recentBike" style="display: none">Recent Vehicle</span>
                                    <a class="shop-by-bike__action-link shop-by-bike__action-link--recent ui-link" data-js="ShopByBike.recentBike ShopByBike.recentBike.link ShopByBike.vehicleLink" href="" style="display: none"></a>

                                </div>

                                <div class="shop-by-bike__form">


                                    <form class="shop-by-bike__select-dimensions" data-js="VehicleSelector.form">
                                        <input name="is_oem" type="hidden" value="false">
                                        <select aria-label="Select vehicle type" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select" data-field-name="Bike Type" data-js="VehicleSelector.select" data-vehicle-selector-model="vehicle-type"
                                        name="type">
                                            <option data-js="VehicleSelector.defaultOption" value="">Type</option>
                                            <option value="1">Street Bike</option>
                                            <option value="4">Dirt Bike</option>
                                            <option value="16">UTV/ATV</option>
                                        </select>
                                        <select aria-label="Select vehicle year" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--year ui-select" data-field-name="Year" data-js="VehicleSelector.select" data-vehicle-selector-model="vehicle-years"
                                        disabled="" name="year">
                                            <option data-js="VehicleSelector.defaultOption" value="">Year</option>
                                        </select>
                                        <select aria-label="Select vehicle make" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--make ui-select" data-field-name="Make" data-js="VehicleSelector.select" data-vehicle-selector-model="vehicle-makes"
                                        disabled="" name="make">
                                            <option data-js="VehicleSelector.defaultOption" value="">Make</option>
                                        </select>
                                        <select aria-label="Select vehicle model" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--model ui-select" data-field-name="Model" data-js="VehicleSelector.select" data-vehicle-selector-model="vehicle-models"
                                        disabled="" name="model">
                                            <option data-js="VehicleSelector.defaultOption" value="">Model</option>
                                        </select><a class="shop-by-bike__select-selection-link ui-button" data-csrf="WDs8Il04WlA1BncUe1g5DxxwQT1mXAYH7ZNLhO3cyJDEV2cEO11D34cs" data-js="VehicleSelector.selection" disabled="" href="">Go!</a></form>


                                    <div class="shop-by-bike__select-close" data-reveal-close=""></div>



                                </div>
                                <div class="shop-by-bike__garage-copy"><a class="ui-link ui-link--small" data-open-href="" data-open-class="authentication-form-modal" data-open-href-reuse-modal="" href="/auth/identity?state=2f">Log in</a> to manage your garage &amp; search history</div>
                                <div
                                class="shop-by-bike__garage shop-by-bike__garage--unauthed">
                                    <div class="shop-by-bike__garage-section shop-by-bike__garage-section--saved">
                                        <div class="shop-by-bike__garage-heading">My Garage</div>
                                        <div class="shop-by-bike__garage-list"><span class="shop-by-bike__garage-list-item shop-by-bike__garage-list-item--disabled"><div class="shop-by-bike__garage-list-item-name">N/A</div></span></div>
                                    </div>
                                    <div class="shop-by-bike__garage-section shop-by-bike__garage-section--history">
                                        <div class="shop-by-bike__garage-heading">Search History</div>
                                        <div class="shop-by-bike__garage-list"><span class="shop-by-bike__garage-list-item shop-by-bike__garage-list-item--disabled"><div class="shop-by-bike__garage-list-item-name">N/A</div></span></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-by-bike__garage-flyout garage-flyout garage-flyout--shop-by-bike" data-js="ShopByBike.garageFlyout">
                    <div class="garage-flyout__heading">Select a Vehicle</div>
                    <div data-js="ShopByBike.garageFlyout.emptyGarage">
                        <div class="garage-flyout__subheading">No saved vehicles?</div>
                        <div class="garage-flyout__copy">Use the Shop Your Ride tool to search for parts that fit your vehicle.</div>
                    </div>
                    <div data-js="ShopByBike.garageFlyout.garage" style="display: none;">
                        <div class="garage-flyout__subheading">Saved Vehicles</div>
                        <div data-js="ShopByBike.garageFlyout.bikes">
                            <a class="garage-flyout__link ui-link" data-js="ShopByBike.garageFlyout.bikeTemplate ShopByBike.vehicleLink" href="" style="display: none"></a>
                            <a class="garage-flyout__link garage-flyout__link--primary ui-link" data-js="ShopByBike.garageFlyout.primaryBikeTemplate ShopByBike.vehicleLink" href="" style="display: none"></a>
                        </div>
                        <a class="garage-flyout__subheading garage-flyout__subheading--manage ui-link" href="/account/garage">Manage Garage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@extends('frontend.layout.main')
@section('title', 'Shop Page')
@section('content')
<div class="component-top-content"></div>
<div class="product-index-main" data-js="ProductCatalog.interfaceTop" data-element-name="Product Browse">
   <div class="product-index-main__content">
      <div class="product-index-main__header browse-header">
         <div class="browse-header__breadcrumbs">
            <nav class="breadcrumbs" data-section-type="Navigation" data-section-name="Breadcrumbs" data-horizontal-scroll class="horizontal-scroll">
               <ol class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList" data-js="Breadcrumbs.list">
                  <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a class="breadcrumbs__link" href="/" itemprop="item">Home</a>
                     <meta content="Home" itemprop="name" />
                     <meta content="1" itemprop="position" />
                  </li>
                  <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a class="breadcrumbs__link" href="/motorcycle-helmets" itemprop="item">Helmets</a>
                     <meta content="Helmets" itemprop="name" />
                     <meta content="2" itemprop="position" />
                  </li>
                  <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a class="breadcrumbs__link" href="/full-face-motorcycle-helmets" itemprop="item">Full Face</a>
                     <meta content="Full Face" itemprop="name" />
                     <meta content="3" itemprop="position" />
                  </li>
               </ol>
            </nav>
         </div>
         <div class="browse-header__heading js-ProductCatalog-heading" data-qa="browse-heading">
            <div class="browse-header__title" data-qa="header-title">
               <span data-js="ProductCatalog.queryWrapper" style="display: none">
               Results for
               <strong data-js="ProductCatalog.searchQuery"></strong>
               in
               </span>
               <h1>Full Face Motorcycle Helmets</h1>
            </div>
            <span class="browse-header__product-count product-faceted-browse-index__product-count"><span
               data-js="ProductCatalog.productCount" data-product-count="681">681</span><span class="product-faceted-browse-index__product-count-label product-faceted-browse-index__product-count-label--plural">Products</span>
            <span
               class="product-faceted-browse-index__product-count-label product-faceted-browse-index__product-count-label--singluar">Product</span>
            </span>
         </div>
      </div>
      <div class="product-index-main__filters product-index-filters" data-js="ProductCatalog.filterContainer" data-element-name="Product Browse Filters">
         <div class="product-index-filters__facet-filters">
            <h3 class="product-index-navigation__heading product-index-navigation__filter-heading">
               Filters
            </h3>
            <div data-wrapper-for="[data-js='ProductCatalog.facetFilters']" data-wrapper-at="large xlarge xxlarge">
               <ul class="product-index-filters product-index-filters__filter-list" data-js="ProductCatalog.facetFilters">
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--loyalty_discount product-index-filters__facet-type--loyalty_discount-1-of-1" data-filter-category="Riders Preferred Membership" data-js="Accordion.item.open ProductCatalog.facetType noAutoCloseOnMobile">
                     <a class="product-index-filters__facet-type-name">
                        Riders Preferred Membership
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets">
                        <li class="product-index-filters__facet loyalty-discount-filter js-ProductCatalog-filter js-ProductCatalog-loyaltyDiscountFilter" data-analytics-filter-name="has_loyalty_discount" data-analytics-filter-type-name="RPM">
                           <input name="has_loyalty_discount" type="hidden" value="false" />
                           <input aria-label="RPM Discount Eligible Toggle selection" class="product-index-filters__loyalty-discount-checkbox ui-checkbox" data-js="ProductCatalog.loyaltyDiscountFilter" id="_" name="has_loyalty_discount"
                              type="checkbox" value="true" />
                           <label for="_"><span class="loyalty-discount-filter__text"><span
                              class="product-index-filters__facet-name-label">RPM Discount Eligible<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">20</span>)</span>
                           </span>
                           </span>
                           </label>
                           <br />
                        </li>
                     </ul>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--shop_by product-index-filters__facet-type--shop_by-1-of-1" data-filter-category="Shop By" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Shop By
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="595" data-facet-name="New" data-facet-type-name="Shop By" data-filter-name="New">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="595" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">New<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">92</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5444" data-facet-name="Sale" data-facet-type-name="Shop By" data-filter-name="Sale">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5444" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Sale<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">48</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="414" data-facet-name="Closeout" data-facet-type-name="Shop By" data-filter-name="Closeout">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="414" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Closeout<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">189</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2316" data-facet-name="Open Box" data-facet-type-name="Shop By" data-filter-name="Open Box">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2316" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Open Box<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">74</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8052" data-facet-name="Has Video" data-facet-type-name="Shop By" data-filter-name="Has Video">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8052" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Has Video<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">550</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12706" data-facet-name="Exclusives" data-facet-type-name="Shop By" data-filter-name="Exclusives">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12706" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Exclusives<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">22</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--brand product-index-filters__facet-type--brand-1-of-1" data-filter-category="Brand" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Brand
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <div class="ui-search-input__wrapper">
                           <input aria-label="Search by Brand" class="product-index-filters__filter-search js-ProductCatalog-filterSearchInput ui-search-input" name="[]" placeholder="Search by Brand" type="text" />
                           <button aria-label="Search" class="ui-search-input__button" data-qa="search-button" tabindex="-1"></button>
                        </div>
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5111" data-facet-name="509" data-facet-type-name="Brand" data-filter-name="509">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5111" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">509<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2052" data-facet-name="6D Helmets" data-facet-type-name="Brand" data-filter-name="6D Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2052" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">6D Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="544" data-facet-name="AGV Helmets" data-facet-type-name="Brand" data-filter-name="AGV Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="544" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">57</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7" data-facet-name="Alpinestars" data-facet-type-name="Brand" data-filter-name="Alpinestars">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Alpinestars<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12" data-facet-name="Arai Helmets" data-facet-type-name="Brand" data-filter-name="Arai Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">86</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4967" data-facet-name="BILT" data-facet-type-name="Brand" data-filter-name="BILT">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4967" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">BILT<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="604" data-facet-name="Bell Helmets" data-facet-type-name="Brand" data-filter-name="Bell Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="604" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">60</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2072" data-facet-name="Biltwell Apparel" data-facet-type-name="Brand" data-filter-name="Biltwell Apparel">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2072" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Biltwell Apparel<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">16</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="765" data-facet-name="Fly Racing Street" data-facet-type-name="Brand" data-filter-name="Fly Racing Street">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="765" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Fly Racing Street<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="76" data-facet-name="GMAX Helmets" data-facet-type-name="Brand" data-filter-name="GMAX Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="76" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">GMAX Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="85" data-facet-name="HJC Helmets" data-facet-type-name="Brand" data-filter-name="HJC Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="85" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">79</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15645" data-facet-name="Hedon Helmets" data-facet-type-name="Brand" data-filter-name="Hedon Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15645" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Hedon Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="90" data-facet-name="Icon" data-facet-type-name="Brand" data-filter-name="Icon">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="90" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">65</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="589" data-facet-name="Klim" data-facet-type-name="Brand" data-filter-name="Klim">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="589" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Klim<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4858" data-facet-name="LS2 Helmets" data-facet-type-name="Brand" data-filter-name="LS2 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4858" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">29</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="519" data-facet-name="Nexx Helmets" data-facet-type-name="Brand" data-filter-name="Nexx Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="519" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">41</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="129" data-facet-name="Nolan Helmets" data-facet-type-name="Brand" data-filter-name="Nolan Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="129" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nolan Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">11</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12986" data-facet-name="PCI Race Radios" data-facet-type-name="Brand" data-filter-name="PCI Race Radios">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12986" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">PCI Race Radios<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="737" data-facet-name="Schuberth Helmets" data-facet-type-name="Brand" data-filter-name="Schuberth Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="737" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Schuberth Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="480" data-facet-name="Scorpion EXO" data-facet-type-name="Brand" data-filter-name="Scorpion EXO">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="480" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">47</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4966" data-facet-name="Sedici" data-facet-type-name="Brand" data-filter-name="Sedici">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4966" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Sedici<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">17</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="640" data-facet-name="Sena" data-facet-type-name="Brand" data-filter-name="Sena">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="640" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Sena<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="171" data-facet-name="Shark Helmets" data-facet-type-name="Brand" data-filter-name="Shark Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="171" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">50</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="174" data-facet-name="Shoei Helmets" data-facet-type-name="Brand" data-filter-name="Shoei Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="174" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">56</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="3799" data-facet-name="Simpson Helmets" data-facet-type-name="Brand" data-filter-name="Simpson Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="3799" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Simpson Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">11</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="185" data-facet-name="Speed and Strength" data-facet-type-name="Brand" data-filter-name="Speed and Strength">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="185" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Speed and Strength<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="3581" data-facet-name="X-Lite Helmets" data-facet-type-name="Brand" data-filter-name="X-Lite Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="3581" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">X-Lite Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--helmet_family product-index-filters__facet-type--helmet_family-1-of-1" data-filter-category="Helmet Family" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Helmet Family
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <div class="ui-search-input__wrapper">
                           <input aria-label="Search by Helmet Family" class="product-index-filters__filter-search js-ProductCatalog-filterSearchInput ui-search-input" name="[]" placeholder="Search by Helmet Family" type="text" />
                           <button aria-label="Search" class="ui-search-input__button" data-qa="search-button" tabindex="-1"></button>
                        </div>
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9485" data-facet-name="6D ATS-1R Helmets" data-facet-type-name="Helmet Family" data-filter-name="6D ATS-1R Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9485" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">6D ATS-1R Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13680" data-facet-name="AGV K1 S Helmets" data-facet-type-name="Helmet Family" data-filter-name="AGV K1 S Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13680" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV K1 S Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">12</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13522" data-facet-name="AGV K3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="AGV K3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13522" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV K3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">14</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13521" data-facet-name="AGV K6 S Helmets" data-facet-type-name="Helmet Family" data-filter-name="AGV K6 S Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13521" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV K6 S Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">10</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15194" data-facet-name="AGV Pista GP RR Helmet" data-facet-type-name="Helmet Family" data-filter-name="AGV Pista GP RR Helmet">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15194" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV Pista GP RR Helmet<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">17</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9587" data-facet-name="AGV X101 Helmets" data-facet-type-name="Helmet Family" data-filter-name="AGV X101 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9587" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">AGV X101 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15262" data-facet-name="Alpinestars Supertech R10 Carbon Helmet" data-facet-type-name="Helmet Family" data-filter-name="Alpinestars Supertech R10 Carbon Helmet">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15262" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Alpinestars Supertech R10 Carbon
                              Helmet<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13243" data-facet-name="Arai Contour-X Helmets" data-facet-type-name="Helmet Family" data-filter-name="Arai Contour-X Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13243" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Contour-X Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">12</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4398" data-facet-name="Arai Corsair-X Helmets" data-facet-type-name="Helmet Family" data-filter-name="Arai Corsair-X Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4398" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Corsair-X Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">40</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5318" data-facet-name="Arai Quantum-X Helmets" data-facet-type-name="Helmet Family" data-filter-name="Arai Quantum-X Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5318" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Quantum-X Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">11</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8135" data-facet-name="Arai Regent-X Helmets" data-facet-type-name="Helmet Family" data-filter-name="Arai Regent-X Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8135" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Regent-X Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">11</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5317" data-facet-name="Arai Signet-X Helmets" data-facet-type-name="Helmet Family" data-filter-name="Arai Signet-X Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5317" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Arai Signet-X Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">12</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15744" data-facet-name="BILT Apex Helmets" data-facet-type-name="Helmet Family" data-filter-name="BILT Apex Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15744" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">BILT Apex Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13811" data-facet-name="BILT Charger Helmets" data-facet-type-name="Helmet Family" data-filter-name="BILT Charger Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13811" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">BILT Charger Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13820" data-facet-name="BILT Techno 3.0 Full Face Helmets" data-facet-type-name="Helmet Family" data-filter-name="BILT Techno 3.0 Full Face Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13820" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">BILT Techno 3.0 Full Face Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8332" data-facet-name="Bell Broozer Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Broozer Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8332" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Broozer Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15823" data-facet-name="Bell Bullitt GT Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Bullitt GT Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15823" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Bullitt GT Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2282" data-facet-name="Bell Bullitt Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Bullitt Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2282" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Bullitt Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">16</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7373" data-facet-name="Bell Eliminator Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Eliminator Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7373" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Eliminator Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15704" data-facet-name="Bell Lithium Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Lithium Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15704" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Lithium Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5332" data-facet-name="Bell Moto-3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Moto-3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5332" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Moto-3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="3529" data-facet-name="Bell Qualifier DLX Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Qualifier DLX Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="3529" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Qualifier DLX Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2283" data-facet-name="Bell Qualifier Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Qualifier Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2283" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Qualifier Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8546" data-facet-name="Bell Race Star Flex DLX Helmets" data-facet-type-name="Helmet Family" data-filter-name="Bell Race Star Flex DLX Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8546" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Bell Race Star Flex DLX Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">10</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2482" data-facet-name="Biltwell Gringo Helmets" data-facet-type-name="Helmet Family" data-filter-name="Biltwell Gringo Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2482" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Biltwell Gringo Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12659" data-facet-name="Biltwell Gringo S Helmets" data-facet-type-name="Helmet Family" data-filter-name="Biltwell Gringo S Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12659" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Biltwell Gringo S Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13832" data-facet-name="Biltwell Gringo SV Helmets" data-facet-type-name="Helmet Family" data-filter-name="Biltwell Gringo SV Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13832" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Biltwell Gringo SV Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5234" data-facet-name="Biltwell Lane Splitter Helmets" data-facet-type-name="Helmet Family" data-filter-name="Biltwell Lane Splitter Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5234" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Biltwell Lane Splitter Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13153" data-facet-name="HJC C10 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC C10 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13153" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC C10 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7775" data-facet-name="HJC C70 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC C70 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7775" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC C70 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8154" data-facet-name="HJC F70 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC F70 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8154" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC F70 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13936" data-facet-name="HJC F71 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC F71 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13936" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC F71 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5267" data-facet-name="HJC RPHA 11 Pro Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 11 Pro Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5267" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 11 Pro Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13935" data-facet-name="HJC RPHA 12 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 12 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13935" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 12 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">10</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15810" data-facet-name="HJC RPHA 12N Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 12N Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15810" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 12N Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12029" data-facet-name="HJC RPHA 1N Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 1N Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12029" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 1N Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7801" data-facet-name="HJC RPHA 70 ST Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 70 ST Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7801" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 70 ST Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13148" data-facet-name="HJC RPHA 71 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA 71 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13148" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA 71 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="1837" data-facet-name="HJC RPHA Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC RPHA Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="1837" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC RPHA Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13154" data-facet-name="HJC V10 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC V10 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13154" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC V10 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12522" data-facet-name="HJC V60 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC V60 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12522" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC V60 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8156" data-facet-name="HJC i10 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC i10 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8156" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC i10 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13147" data-facet-name="HJC i71 Helmets" data-facet-type-name="Helmet Family" data-filter-name="HJC i71 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13147" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">HJC i71 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15796" data-facet-name="Hedon Hedonist Helmets" data-facet-type-name="Helmet Family" data-filter-name="Hedon Hedonist Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15796" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Hedon Hedonist Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15795" data-facet-name="Hedon Heroine Racer Helmet" data-facet-type-name="Helmet Family" data-filter-name="Hedon Heroine Racer Helmet">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15795" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Hedon Heroine Racer Helmet<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6395" data-facet-name="Icon Airflite Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Airflite Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6395" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Airflite Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">21</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7733" data-facet-name="Icon Airform Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Airform Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7733" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Airform Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">22</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="436" data-facet-name="Icon Airframe Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Airframe Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="436" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Airframe Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4490" data-facet-name="Icon Airframe Pro Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Airframe Pro Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4490" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Airframe Pro Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="437" data-facet-name="Icon Domain Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Domain Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="437" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Domain Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15396" data-facet-name="Icon Elsinore Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Elsinore Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15396" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Elsinore Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15789" data-facet-name="Icon Ultraflite Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Ultraflite Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15789" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Ultraflite Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="688" data-facet-name="Icon Variant Helmets" data-facet-type-name="Helmet Family" data-filter-name="Icon Variant Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="688" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Icon Variant Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5359" data-facet-name="Klim F3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Klim F3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5359" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Klim F3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15095" data-facet-name="LS2 Arrow Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Arrow Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15095" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Arrow Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13797" data-facet-name="LS2 Assault Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Assault Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13797" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Assault Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="16001" data-facet-name="LS2 Centric Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Centric Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="16001" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Centric Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="11373" data-facet-name="LS2 Challenger GT Carbon Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Challenger GT Carbon Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="11373" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Challenger GT Carbon Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13710" data-facet-name="LS2 Citation II Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Citation II Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13710" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Citation II Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13798" data-facet-name="LS2 Rapid Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Rapid Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13798" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Rapid Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15424" data-facet-name="LS2 Rapid II Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Rapid II Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15424" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Rapid II Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15096" data-facet-name="LS2 Stream II Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Stream II Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15096" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Stream II Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="11370" data-facet-name="LS2 Thunder Carbon Helmets" data-facet-type-name="Helmet Family" data-filter-name="LS2 Thunder Carbon Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="11370" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LS2 Thunder Carbon Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6144" data-facet-name="Nexx SX100 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx SX100 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6144" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx SX100 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="10280" data-facet-name="Nexx SX100R Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx SX100R Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="10280" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx SX100R Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6142" data-facet-name="Nexx X.WST2 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx X.WST2 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6142" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx X.WST2 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15391" data-facet-name="Nexx X.WST3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx X.WST3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15391" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx X.WST3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15525" data-facet-name="Nexx XG100 Purist Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx XG100 Purist Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15525" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx XG100 Purist Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4758" data-facet-name="Nexx XG100 Racer Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx XG100 Racer Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4758" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx XG100 Racer Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">11</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6143" data-facet-name="Nexx XG200 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx XG200 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6143" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx XG200 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12885" data-facet-name="Nexx XR3R Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx XR3R Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12885" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx XR3R Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">10</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15407" data-facet-name="Nexx Y.100 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx Y.100 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15407" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx Y.100 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15393" data-facet-name="Nexx Y.100R Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nexx Y.100R Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15393" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nexx Y.100R Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15928" data-facet-name="Nolan N60-6 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Nolan N60-6 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15928" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Nolan N60-6 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2718" data-facet-name="SS2400 Helmets" data-facet-type-name="Helmet Family" data-filter-name="SS2400 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2718" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">SS2400 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5346" data-facet-name="Schuberth R2 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Schuberth R2 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5346" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Schuberth R2 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15007" data-facet-name="Schuberth S3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Schuberth S3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15007" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Schuberth S3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13323" data-facet-name="Scorpion EXO Covert FX Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO Covert FX Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13323" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO Covert FX Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15653" data-facet-name="Scorpion EXO Eclipse Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO Eclipse Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15653" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO Eclipse Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15336" data-facet-name="Scorpion EXO Ryzer Helmet" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO Ryzer Helmet">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15336" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO Ryzer Helmet<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8280" data-facet-name="Scorpion EXO-R1 Air Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-R1 Air Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8280" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-R1 Air Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6438" data-facet-name="Scorpion EXO-R320 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-R320 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6438" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-R320 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15651" data-facet-name="Scorpion EXO-R330 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-R330 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15651" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-R330 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">4</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="6163" data-facet-name="Scorpion EXO-R420 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-R420 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="6163" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-R420 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15652" data-facet-name="Scorpion EXO-R430 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-R430 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15652" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-R430 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7645" data-facet-name="Scorpion EXO-ST1400 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-ST1400 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7645" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-ST1400 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="11389" data-facet-name="Scorpion EXO-T520 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-T520 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="11389" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-T520 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">6</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13333" data-facet-name="Scorpion EXO-XT9000 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Scorpion EXO-XT9000 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13333" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Scorpion EXO-XT9000 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15213" data-facet-name="Sedici Strada 3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Sedici Strada 3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15213" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Sedici Strada 3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">17</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15505" data-facet-name="Sena Stryker Helmets" data-facet-type-name="Helmet Family" data-filter-name="Sena Stryker Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15505" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Sena Stryker Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15518" data-facet-name="Shark D-Skwal 3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark D-Skwal 3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15518" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark D-Skwal 3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12306" data-facet-name="Shark EVO GT Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark EVO GT Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12306" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark EVO GT Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15516" data-facet-name="Shark Race-R Pro Helmet NEW" data-facet-type-name="Helmet Family" data-filter-name="Shark Race-R Pro Helmet NEW">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15516" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Race-R Pro Helmet NEW<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="972" data-facet-name="Shark Race-R Pro Helmets 2013" data-facet-type-name="Helmet Family" data-filter-name="Shark Race-R Pro Helmets 2013">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="972" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Race-R Pro Helmets 2013<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15428" data-facet-name="Shark Ridill 2 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Ridill 2 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15428" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Ridill 2 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7993" data-facet-name="Shark Ridill Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Ridill Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7993" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Ridill Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7779" data-facet-name="Shark Skwal 2 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Skwal 2 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7779" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Skwal 2 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15427" data-facet-name="Shark Skwal i3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Skwal i3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15427" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Skwal i3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15517" data-facet-name="Shark Spartan GT Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Spartan GT Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15517" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Spartan GT Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">12</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5896" data-facet-name="Shark Spartan Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Spartan Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5896" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Spartan Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">15</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15425" data-facet-name="Shark Spartan RS Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shark Spartan RS Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15425" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shark Spartan RS Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15633" data-facet-name="Shoei GT Air 3 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shoei GT Air 3 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15633" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei GT Air 3 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">9</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7636" data-facet-name="Shoei GT Air II Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shoei GT Air II Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7636" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei GT Air II Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="5335" data-facet-name="Shoei RF-SR Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shoei RF-SR Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="5335" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei RF-SR Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9990" data-facet-name="Shoei RF1400 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shoei RF1400 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9990" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei RF1400 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">23</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="13626" data-facet-name="Shoei X-15 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Shoei X-15 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="13626" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shoei X-15 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">14</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15500" data-facet-name="Simpson Ghost Bandit Helmets" data-facet-type-name="Helmet Family" data-filter-name="Simpson Ghost Bandit Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15500" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Simpson Ghost Bandit Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15979" data-facet-name="Simpson Outlaw Bandit 3.0 Helmets" data-facet-type-name="Helmet Family" data-filter-name="Simpson Outlaw Bandit 3.0 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15979" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Simpson Outlaw Bandit 3.0 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15975" data-facet-name="Simpson Outlaw Bandit Helmets" data-facet-type-name="Helmet Family" data-filter-name="Simpson Outlaw Bandit Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15975" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Simpson Outlaw Bandit Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15502" data-facet-name="Simpson Speed Bandit Helmets" data-facet-type-name="Helmet Family" data-filter-name="Simpson Speed Bandit Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15502" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Simpson Speed Bandit Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="7550" data-facet-name="X-Lite X-903 Helmets" data-facet-type-name="Helmet Family" data-filter-name="X-Lite X-903 Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="7550" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">X-Lite X-903 Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--color product-index-filters__facet-type--color-1-of-1" data-filter-category="Color" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Color
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <div class="ui-search-input__wrapper">
                           <input aria-label="Search by Color" class="product-index-filters__filter-search js-ProductCatalog-filterSearchInput ui-search-input" name="[]" placeholder="Search by Color" type="text" />
                           <button aria-label="Search" class="ui-search-input__button" data-qa="search-button" tabindex="-1"></button>
                        </div>
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="337" data-facet-name="Black" data-facet-type-name="Color" data-filter-name="Black">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="337" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Black<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">488</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="347" data-facet-name="Blue" data-facet-type-name="Color" data-filter-name="Blue">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="347" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Blue<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">183</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="339" data-facet-name="Brown" data-facet-type-name="Color" data-filter-name="Brown">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="339" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Brown<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="351" data-facet-name="Gold" data-facet-type-name="Color" data-filter-name="Gold">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="351" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Gold<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">44</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="341" data-facet-name="Green" data-facet-type-name="Color" data-filter-name="Green">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="341" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Green<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">49</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="348" data-facet-name="Grey" data-facet-type-name="Color" data-filter-name="Grey">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="348" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Grey<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">157</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="344" data-facet-name="Khaki" data-facet-type-name="Color" data-filter-name="Khaki">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="344" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Khaki<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">7</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="345" data-facet-name="Navy" data-facet-type-name="Color" data-filter-name="Navy">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="345" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Navy<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">14</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="350" data-facet-name="Orange" data-facet-type-name="Color" data-filter-name="Orange">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="350" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Orange<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">34</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="343" data-facet-name="Pink" data-facet-type-name="Color" data-filter-name="Pink">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="343" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Pink<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">25</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="346" data-facet-name="Purple" data-facet-type-name="Color" data-filter-name="Purple">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="346" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Purple<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">18</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="340" data-facet-name="Red" data-facet-type-name="Color" data-filter-name="Red">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="340" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Red<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">249</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="349" data-facet-name="Silver" data-facet-type-name="Color" data-filter-name="Silver">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="349" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Silver<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">84</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="342" data-facet-name="White" data-facet-type-name="Color" data-filter-name="White">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="342" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">White<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">293</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="338" data-facet-name="Yellow" data-facet-type-name="Color" data-filter-name="Yellow">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="338" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Yellow<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">105</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--helmet_shape product-index-filters__facet-type--helmet_shape-1-of-1" data-filter-category="Helmet Shape" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Helmet Shape
                        <div class="product-index-filters__tooltip-container">
                           <span class="redline-tooltip" data-active="false" data-js="Tooltip.Container"
                              data-preferred-direction="right"><span class="redline-tooltip__icon"
                              data-js="Tooltip.Icon"><span class="redline-tooltip__popout-window"
                              data-js="Tooltip.PopoutWindow"><span class="redline-tooltip__tooltip-arrow"
                              data-js="Tooltip.Arrow"></span><span class="redline-tooltip__text-content"
                              data-js="Tooltip.Content"><img class="redline-tooltip__inline-image"
                              src="/images/sites/revzilla/support/helmet_shape/intermediate_oval-f65a32d625476c65555002a7ee7de824.gif?vsn=d" />
                           Intermediate Oval <br />
                           <img class="redline-tooltip__inline-image"
                              src="/images/sites/revzilla/support/helmet_shape/long_oval-9bc6c4265d3705087a7092e592650c3f.gif?vsn=d" />
                           Long Oval <br />
                           <img class="redline-tooltip__inline-image"
                              src="/images/sites/revzilla/support/helmet_shape/round_oval-bf5ac5687792be1b4e6ce7060e462af2.gif?vsn=d" />
                           Round Oval <br /></span></span></span></span>
                        </div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4813" data-facet-name="Intermediate Oval" data-facet-type-name="Helmet Shape" data-filter-name="Intermediate Oval">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4813" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Intermediate Oval<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">549</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4814" data-facet-name="Long Oval" data-facet-type-name="Helmet Shape" data-filter-name="Long Oval">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4814" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Long Oval<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">48</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="4812" data-facet-name="Round Oval" data-facet-type-name="Helmet Shape" data-filter-name="Round Oval">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="4812" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Round Oval<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">31</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--helmet_safety product-index-filters__facet-type--helmet_safety-1-of-1" data-filter-category="Helmet Safety" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Helmet Safety
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15902" data-facet-name="ECE Certified" data-facet-type-name="Helmet Safety" data-filter-name="ECE Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15902" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">ECE Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">340</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="10027" data-facet-name="ECE 22.06 Certified" data-facet-type-name="Helmet Safety" data-filter-name="ECE 22.06 Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="10027" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">ECE 22.06 Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">264</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="563" data-facet-name="ECE 22.05 Certified" data-facet-type-name="Helmet Safety" data-filter-name="ECE 22.05 Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="563" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">ECE 22.05 Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">86</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="11869" data-facet-name="FIM Certified" data-facet-type-name="Helmet Safety" data-filter-name="FIM Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="11869" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">FIM Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">32</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15901" data-facet-name="Snell Certified" data-facet-type-name="Helmet Safety" data-filter-name="Snell Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15901" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Snell Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">154</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15489" data-facet-name="Snell M2025 Certified" data-facet-type-name="Helmet Safety" data-filter-name="Snell M2025 Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15489" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Snell M2025 Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">52</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="8136" data-facet-name="Snell M2020 Certified" data-facet-type-name="Helmet Safety" data-filter-name="Snell M2020 Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="8136" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Snell M2020 Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">96</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="3808" data-facet-name="Snell M2015 Certified" data-facet-type-name="Helmet Safety" data-filter-name="Snell M2015 Certified">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="3808" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Snell M2015 Certified<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">10</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="12468" data-facet-name="Mips Technology" data-facet-type-name="Helmet Safety" data-filter-name="Mips Technology">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="12468" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Mips Technology<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">34</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15803" data-facet-name="Rotational Impact Protection" data-facet-type-name="Helmet Safety" data-filter-name="Rotational Impact Protection">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15803" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Rotational Impact Protection<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">63</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15751" data-facet-name="High Visibility Helmet" data-facet-type-name="Helmet Safety" data-filter-name="High Visibility Helmet">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15751" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">High Visibility Helmet<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">65</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--faceshield product-index-filters__facet-type--faceshield-1-of-1" data-filter-category="Faceshield" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Faceshield
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="1784" data-facet-name="Internal Sun Visor" data-facet-type-name="Faceshield" data-filter-name="Internal Sun Visor">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="1784" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Internal Sun Visor<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">243</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9502" data-facet-name="Tinted Shield Included" data-facet-type-name="Faceshield" data-filter-name="Tinted Shield Included">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9502" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Tinted Shield Included<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">101</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="16011" data-facet-name="Mirrored Shield Included" data-facet-type-name="Faceshield" data-filter-name="Mirrored Shield Included">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="16011" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Mirrored Shield Included<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">30</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9514" data-facet-name="Electric Shield" data-facet-type-name="Faceshield" data-filter-name="Electric Shield">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9514" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Electric Shield<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="9509" data-facet-name="Photochromic Shield Included" data-facet-type-name="Faceshield" data-filter-name="Photochromic Shield Included">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="9509" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Photochromic Shield Included<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">18</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="16010" data-facet-name="Clear Shield Included" data-facet-type-name="Faceshield" data-filter-name="Clear Shield Included">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="16010" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Clear Shield Included<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">591</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--category product-index-filters__facet-type--category-1-of-1" data-filter-category="Category" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Category
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <div class="ui-search-input__wrapper">
                           <input aria-label="Search by Category" class="product-index-filters__filter-search js-ProductCatalog-filterSearchInput ui-search-input" name="[]" placeholder="Search by Category" type="text" />
                           <button aria-label="Search" class="ui-search-input__button" data-qa="search-button" tabindex="-1"></button>
                        </div>
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15927" data-facet-name="Shell Sizes - 1 Shell" data-facet-type-name="Category" data-filter-name="Shell Sizes - 1 Shell">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15927" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 1 Shell<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15932" data-facet-name="Shell Sizes - 2 Shells" data-facet-type-name="Category" data-filter-name="Shell Sizes - 2 Shells">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15932" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 2 Shells<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">161</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15933" data-facet-name="Shell Sizes - 3 Shells" data-facet-type-name="Category" data-filter-name="Shell Sizes - 3 Shells">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15933" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 3 Shells<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">232</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15934" data-facet-name="Shell Sizes - 4 Shells" data-facet-type-name="Category" data-filter-name="Shell Sizes - 4 Shells">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15934" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 4 Shells<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">112</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15935" data-facet-name="Shell Sizes - 5 Shells" data-facet-type-name="Category" data-filter-name="Shell Sizes - 5 Shells">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15935" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 5 Shells<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">122</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15936" data-facet-name="Shell Sizes - 6 Shells" data-facet-type-name="Category" data-filter-name="Shell Sizes - 6 Shells">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15936" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Shell Sizes - 6 Shells<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">5</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="723" data-facet-name="Adventure Gear" data-facet-type-name="Category" data-filter-name="Adventure Gear">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="723" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Adventure Gear<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="618" data-facet-name="Carbon Fiber" data-facet-type-name="Category" data-filter-name="Carbon Fiber">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="618" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Carbon Fiber<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">133</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15011" data-facet-name="Composite" data-facet-type-name="Category" data-filter-name="Composite">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15011" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Composite<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">338</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="360" data-facet-name="Graphic Helmets" data-facet-type-name="Category" data-filter-name="Graphic Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="360" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Graphic Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">491</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15659" data-facet-name="Graphic Helmets - Pop Culture" data-facet-type-name="Category" data-filter-name="Graphic Helmets - Pop Culture">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15659" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Graphic Helmets - Pop Culture<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">15</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15658" data-facet-name="Graphic Helmets - Race Replica" data-facet-type-name="Category" data-filter-name="Graphic Helmets - Race Replica">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15658" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Graphic Helmets - Race Replica<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">72</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15656" data-facet-name="Graphic Helmets - Simplistic" data-facet-type-name="Category" data-filter-name="Graphic Helmets - Simplistic">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15656" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Graphic Helmets - Simplistic<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">270</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15657" data-facet-name="Graphic Helmets - Wild" data-facet-type-name="Category" data-filter-name="Graphic Helmets - Wild">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15657" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Graphic Helmets - Wild<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">115</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="15010" data-facet-name="Polycarbonate" data-facet-type-name="Category" data-filter-name="Polycarbonate">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="15010" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Polycarbonate<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">233</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="361" data-facet-name="Solid Color Helmets" data-facet-type-name="Category" data-filter-name="Solid Color Helmets">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="361" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Solid Color Helmets<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">196</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="336" data-facet-name="Track Gear" data-facet-type-name="Category" data-filter-name="Track Gear">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="336" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Track Gear<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">130</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--apparel_size product-index-filters__facet-type--apparel_size-1-of-1" data-filter-category="Apparel Size" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Apparel Size
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <div class="js-ProductCatalog-filterListContainer">
                        <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersWrapper">
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2767" data-facet-name="XS" data-facet-type-name="Apparel Size" data-filter-name="XS">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2767" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">XS<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">251</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2768" data-facet-name="SM" data-facet-type-name="Apparel Size" data-filter-name="SM">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2768" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">SM<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">403</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2769" data-facet-name="MD" data-facet-type-name="Apparel Size" data-filter-name="MD">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2769" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">MD<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">418</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2770" data-facet-name="LG" data-facet-type-name="Apparel Size" data-filter-name="LG">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2770" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">LG<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">424</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2765" data-facet-name="XL" data-facet-type-name="Apparel Size" data-filter-name="XL">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2765" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">XL<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">439</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2771" data-facet-name="2XL" data-facet-type-name="Apparel Size" data-filter-name="2XL">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2771" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">2XL<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">388</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2772" data-facet-name="3XL" data-facet-type-name="Apparel Size" data-filter-name="3XL">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2772" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">3XL<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">96</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2881" data-facet-name="4XL" data-facet-type-name="Apparel Size" data-filter-name="4XL">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2881" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">4XL<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">3</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2903" data-facet-name="5XL" data-facet-type-name="Apparel Size" data-filter-name="5XL">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2903" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">5XL<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">2</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2773" data-facet-name="Youth SM" data-facet-type-name="Apparel Size" data-filter-name="Youth SM">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2773" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Youth SM<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2774" data-facet-name="Youth MD" data-facet-type-name="Apparel Size" data-filter-name="Youth MD">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2774" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Youth MD<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                           <li class="product-index-filters__facet product-index-filters__facet--facet js-ProductCatalog-filter" data-facet-key="2775" data-facet-name="Youth LG" data-facet-type-name="Apparel Size" data-filter-name="Youth LG">
                              <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-facet-id="2775" data-js="ProductCatalog.filterLink" href="#"><span
                                 class="product-index-filters__facet-name-label">Youth LG<span
                                 class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                                 class="js-ProductCatalog-filterCount">1</span>)</span></span></a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--price_range product-index-filters__facet-type--price_range-1-of-1 accordion__item accordion__item--open" data-filter-category="Price Range" data-js=" ProductCatalog.facetType">
                     <a class="product-index-filters__facet-link product-index-filters__facet-link--price accordion__label" data-facet-id="" data-js="ProductCatalog.priceLink"><span class="product-index-filters__facet-name-label" data-js="ProductCatalog.priceLabel"></span></a><a class="product-index-filters__facet-type-name accordion__content" data-js="ProductCatalog.priceRange">Price Range</a>
                     <div class="product-index-price-slider accordion__content">
                        <div class="product-index-price-slider__slider  slider" data-me="3z2yis-me"><span aria-controls="price_min" aria-label="Minimum Price" class="product-index-price-slider__slider-handle  slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-valuemax="2429" aria-valuemin="6" aria-valuenow="6" aria-orientation="horizontal" style="left: 0%;"></span><span class="product-index-price-slider__slider-fill  slider-fill" data-slider-fill="" style="width: 0px; min-width: 99%; left: 0%;"></span><span aria-controls="price_max" aria-label="Maximum Price" class="product-index-price-slider__slider-handle  slider-handle" data-slider-handle="" role="slider" tabindex="0" aria-valuemax="2429" aria-valuemin="6" aria-valuenow="2429" aria-orientation="horizontal" style="left: 92%;"></span></div>
                        <label class="product-index-price-slider__label  product-index-price-slider__label--min"><input class="product-index-price-slider__input ui-text-input" id="price_min" name="[]" type="number" max="2429" min="6" step="1">Min</label><label class="product-index-price-slider__label  product-index-price-slider__label--max"><input class="product-index-price-slider__input ui-text-input" id="price_max" name="[]" type="number" max="2429" min="6" step="1">Max</label>
                     </div>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--discount_range product-index-filters__facet-type--discount_range-1-of-1" data-filter-category="Discount Range" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Discount Range
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets">
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="60" data-filter-name="60% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="60" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">60% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">8</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="50" data-filter-name="50% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="50" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">50% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">71</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="40" data-filter-name="40% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="40" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">40% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">81</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="30" data-filter-name="30% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="30" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">30% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">113</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="20" data-filter-name="20% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="20" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">20% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">161</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="10" data-filter-name="10% Off &amp; More" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="10" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">10% Off &amp; More<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">219</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--discount_range js-ProductCatalog-filter" data-filter-key="1" data-filter-name="All Discounts" data-filter-type-name="Discount Range">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--facet" data-discount-level="1" data-js="ProductCatalog.discountLink ProductCatalog.filterLink" href="#"><span class="product-index-filters__facet-name-label">All Discounts<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">219</span>)</span></span></a>
                        </li>
                     </ul>
                  </li>
                  <li class="product-index-filters__facet-type product-index-filters__facet-type--ratings product-index-filters__facet-type--ratings-1-of-1" data-filter-category="Customer Rating" data-js="Accordion.item.open ProductCatalog.facetType">
                     <a class="product-index-filters__facet-type-name">
                        Customer Rating
                        <div class="product-index-filters__tooltip-container"></div>
                     </a>
                     <ul class="js-ProductCatalog-filterList is-active product-index-filters__facets js-ProductCatalog-filtersLarge">
                        <li class="product-index-filters__facet product-index-filters__facet--ratings js-ProductCatalog-filter" data-facet-type-name="Rating" data-filter-name="4">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--ratings" data-js="ProductCatalog.ratingLink ProductCatalog.filterLink" data-rating-level="4" href="#"><span class="product-index-filters__facet-name-label"><span
                              class="product-index-filters__rating-stars product-rating__stars"
                              data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-index-filters__rating-descriptor product-rating__descriptor">&amp;
                           Up</span><span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">575</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--ratings js-ProductCatalog-filter" data-facet-type-name="Rating" data-filter-name="3">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--ratings" data-js="ProductCatalog.ratingLink ProductCatalog.filterLink" data-rating-level="3" href="#"><span class="product-index-filters__facet-name-label"><span
                              class="product-index-filters__rating-stars product-rating__stars"
                              data-js="ReviewInterface.ratingStars" data-rating="3"></span>
                           <span class="product-index-filters__rating-descriptor product-rating__descriptor">&amp;
                           Up</span><span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">645</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--ratings js-ProductCatalog-filter" data-facet-type-name="Rating" data-filter-name="2">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--ratings" data-js="ProductCatalog.ratingLink ProductCatalog.filterLink" data-rating-level="2" href="#"><span class="product-index-filters__facet-name-label"><span
                              class="product-index-filters__rating-stars product-rating__stars"
                              data-js="ReviewInterface.ratingStars" data-rating="2"></span>
                           <span class="product-index-filters__rating-descriptor product-rating__descriptor">&amp;
                           Up</span><span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">660</span>)</span></span></a>
                        </li>
                        <li class="product-index-filters__facet product-index-filters__facet--ratings js-ProductCatalog-filter" data-facet-type-name="Rating" data-filter-name="1">
                           <a class="product-index-filters__facet-link product-index-filters__facet-link--ratings" data-js="ProductCatalog.ratingLink ProductCatalog.filterLink" data-rating-level="1" href="#"><span class="product-index-filters__facet-name-label">All Reviewed<span
                              class="product-index-filters__facet-count-label js-ProductCatalog-filterCountLabel">(<span
                              class="js-ProductCatalog-filterCount">661</span>)</span></span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <div id="filters" class="product-index-filters__modal product-index-filters-modal reveal" data-js="ProductCatalog.facetFiltersModal" data-reveal data-wrapper-for="[data-js='ProductCatalog.facetFilters']" data-wrapper-at="small medium">
            <div data-js="ProductCatalog.modalHeader">
               <div class="product-index-filters-modal__header reveal-header">
                  <div class="product-index-filters-modal__header-labels">
                     <div class="product-index-filters-modal__header-label">
                        Filter<span class="product-faceted-browse-index__filter-count" data-js="ProductCatalog.filterCount" data-filter-count="0">0</span>
                     </div>
                     <span class="product-index-filters-modal__header-product-count product-faceted-browse-index__product-count"><span
                        data-js="ProductCatalog.productCount" data-product-count="681">681</span><span class="product-faceted-browse-index__product-count-label product-faceted-browse-index__product-count-label--plural">Products</span>
                     <span
                        class="product-faceted-browse-index__product-count-label product-faceted-browse-index__product-count-label--singluar">Product</span>
                     </span>
                  </div>
                  <a class="product-index-filters-modal__header-close reveal-header__close" data-reveal-close="" data-qa="close-filters">
                  </a>
               </div>
               <div data-wrapper-for="[data-js='ProductCatalog.activeFilters']" data-wrapper-at="small medium"></div>
               <div class="product-index-filters-modal__subheader">
                  <span class="product-index-filters-modal__action-button ui-button ui-button--blue ui-button--light-blue ui-button--secondary ui-button--half-width ui-button--outline" data-js="ProductCatalog.mobileClearFilters">Clear All</span>
                  <span class="product-index-filters-modal__action-button ui-button ui-button--blue ui-button--secondary ui-button--half-width" data-reveal-close>Apply</span>
               </div>
            </div>
         </div>
      </div>
      <div class="product-index-main__navigation browse-navigation">
         <div class="browse-navigation--mobile">
            <span class="browse-navigation__button browse-navigation__button--filter ui-button ui-button--blue ui-button--secondary ui-button--half-width" data-open="filters" data-open-class="product-index-filter-modal" data-qa="filter">Filter<span
               class="product-faceted-browse-index__filter-count" data-js="ProductCatalog.filterCount"
               data-filter-count="0">0</span></span>
            <span class="browse-navigation__button browse-navigation__button--sort ui-button ui-button--blue ui-button--secondary ui-button--half-width">
               <select class="browse-navigation__mobile-sort-select"
                  data-js="ProductCatalog.sortSelect ProductCatalog.sortSelectMobile" data-field-name="Sort By"
                  aria-label="Sort by">
                  <option value="rating">Rating</option>
                  <option value="brand">Brand</option>
                  <option value="best_seller" selected>Best Sellers</option>
                  <option value="newest">Newest Arrivals</option>
                  <option value="price_asc">Price: Low to High</option>
                  <option value="price_desc">Price: High to Low</option>
               </select>
               Sort By
            </span>
         </div>
         <div class="browse-navigation--desktop">
            <div class="browse-navigation__sort_filter_options">
               <div class="browse-navigation__sort">
                  <select aria-label="Sort by" class="browse-navigation__sort-select ui-select" data-field-name="Sort by" data-js="ProductCatalog.sortSelect ProductCatalog.sortSelectDesktop" name="[]">
                     <option value="rating">Sort by Rating</option>
                     <option value="brand">Sort by Brand</option>
                     <option selected value="best_seller">
                        Sort by Best Sellers
                     </option>
                     <option value="newest">Sort by Newest Arrivals</option>
                     <option value="price_asc">
                        Sort by Price: Low to High
                     </option>
                     <option value="price_desc">
                        Sort by Price: High to Low
                     </option>
                  </select>
               </div>
            </div>
            <div class="browse-navigation__pagination browse-navigation__pagination--top" data-js="ProductCatalog.paginationTop">
               <div class="pagination" data-js="Pagination">
                  <a href="" class="pagination__incrementer pagination__incrementer--prev" aria-label="Previous page">
                  </a>
                  <span class="pagination__links-wrapper">
                  <a class="pagination__page-link" href="?page=1">1</a>
                  <a class="pagination__page-link" href="?page=2">2</a>
                  <a class="pagination__page-link" href="?page=3">3</a>
                  <a class="pagination__page-link" href="?page=4">4</a>
                  <a class="pagination__page-link" href="?page=5">5</a>
                  <a class="pagination__page-link" href="?page=6">6</a>
                  <a class="pagination__page-link" href="?page=7">7</a>
                  <a class="pagination__page-link" href="?page=8">8</a>
                  </span>
                  <span class="pagination__select-wrapper">
                     <select class="pagination__select product-index-pagination__select ui-select" name="[]">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                     </select>
                     <span class="pagination__select-page-count"> of 8 </span>
                  </span>
                  <a href="?page=2" class="pagination__incrementer pagination__incrementer--next" aria-label="Next page">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="product-index-main__results product-index-results">
         <div data-wrapper-for="[data-js='ProductCatalog.activeFilters']" data-wrapper-at="large xlarge xxlarge">
            <div class="product-index-results__active-filters" data-js="ProductCatalog.activeFilters" style="display: none">
               <span class="product-index-active-filter__clear-all ui-link" data-js="ProductCatalog.clearFilters">Clear
               All</span>
            </div>
         </div>
         <div class="product-index-results__product-tiles" data-js="ProductCatalog.results">
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="0" data-js="ProductTile.link" data-product-id="1100726" data-skus="10413823,10413824,10413825,10413826,10413827,10413828,10413847,10413848,10413849,10413850,10413851,10413852,10413841,10413842,10413843,10413844,10413845,10413846,10413829,10413830,10413831,10413832,10413833,10413834,10413865,10413866,10413867,10413868,10413869,10413870,10413859,10413860,10413861,10413862,10413863,10413864,10413853,10413854,10413855,10413856,10413857,10413858,10413835,10413836,10413837,10413838,10413839,10413840"
                  href="/motorcycle/arai-regent-x-helmet" itemprop="url" title="Arai Regent-X Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Regent-X Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1100726" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Regent-X Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100726" src="https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="38580" style="background-color: #808080" title="Modern Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span><span class="product-tile__swatch-more-count">+4</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="40894" style="background-color: #ff0000" title="Code Red"></span><span class="product-tile__swatch-more-count">+3</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="40895" style="background-color: #ffff00" title="Code Yellow"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="37016" style="background-color: #808080" title="Frost Gunmetal"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100726" data-js-option-id="42230" style="background-color: #f0e68c" title="Modern Ivory"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1100726,
                                        [{
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 6147,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374594
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374628
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3440,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 23374696
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 6147,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374594
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 37016,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal_480x480.jpg",
                                          "filename": "",
                                          "id": 23374764
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 38580,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374662
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 40894,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374730
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 40895,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23374747
                                        }, {
                                          "alt_text": "Arai Regent-X Helmet",
                                          "dimensions": null,
                                          "option_id": 42230,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory_480x480.jpg",
                                          "filename": "",
                                          "id": 23374781
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Regent-X Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="579.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>579<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="182" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">182</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="1" data-js="ProductTile.link" data-product-id="1064485" data-skus="10338936,10338937,10338938,10338939,10338940,10338941,10338942,10338943,10338944,10338945,10338946,10338947" href="/motorcycle/alpinestars-supertech-r10-carbon-helmet"
                  itemprop="url" title="Alpinestars Supertech R10 Carbon Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Alpinestars Supertech R10 Carbon Helmet" itemprop="name" />
                  <meta content="Alpinestars" itemprop="brand" />
                  <meta content="1064485" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2225/7292/alpinestars_supertech_r10_carbon_helmet_white_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Alpinestars Supertech R10 Carbon Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1064485" src="https://www.revzilla.com/product_images/2225/7292/alpinestars_supertech_r10_carbon_helmet_white_480x480.jpg"
                           width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064485" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064485" data-js-option-id="7757" style="background-color: black" title="Black Carbon"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1064485,
                                        [{
                                          "alt_text": "Alpinestars Supertech R10 Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2225/7292/alpinestars_supertech_r10_carbon_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22257292
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2225/7292/alpinestars_supertech_r10_carbon_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22257292
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 7757,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2209/1032/alpinestars_supertech_r10_carbon_helmet_black_carbon_480x480.jpg",
                                          "filename": "",
                                          "id": 22091032
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Alpinestars Supertech R10 Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1149.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,149<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="86" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">86</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="2" data-js="ProductTile.link" data-product-id="1067319" data-skus="10343151,10343152,10343153,10343154,10343155,10343156,10343157,10343137,10343138,10343139,10343140,10343141,10343142,10343143,10343158,10343159,10343160,10343161,10343162,10343163,10343164,10343144,10343145,10343146,10343147,10343148,10343149,10343150,10343130,10343131,10343132,10343133,10343134,10343135,10343136"
                  href="/motorcycle/sedici-strada-3-helmet" itemprop="url" title="Sedici Strada 3 Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Sedici Strada 3 Helmet" itemprop="name" />
                  <meta content="Sedici" itemprop="brand" />
                  <meta content="1067319" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2224/7993/sedici_strada3_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Sedici Strada 3 Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1067319" src="https://www.revzilla.com/product_images/2224/7993/sedici_strada3_helmet_matte_black_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067319" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067319" data-js-option-id="17181" style="background-color: black" title="Black Gloss"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067319" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067319" data-js-option-id="55" style="background-color: grey" title="Grey"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067319" data-js-option-id="4966" style="background-color: blue" title="Matte Blue"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1067319,
                                        [{
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/7993/sedici_strada3_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22247993
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/8095/sedici_strada3_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22248095
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 55,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/8112/sedici_strada3_helmet_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 22248112
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/7993/sedici_strada3_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22247993
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 4966,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/8129/sedici_strada3_helmet_matte_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 22248129
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 17181,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2224/8078/sedici_strada3_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22248078
                                        }, {
                                          "alt_text": "Sedici Strada 3 Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2242/7686/sedici_strada3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22427686
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Sedici Strada 3 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="299.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <label class="product-tile__clp-savings product-tile__clp-savings--non-member js-ClpInfoPanel-plpToggle" data-savings="$30.00" for="rpm-sales-pitch-panel">
                                 <div class="product-tile__clp-savings-tac"></div>
                                 <div class="product-tile__clp-savings-txt">
                                    <span class="product-tile__clp-savings-mem">Members</span>
                                    <span class="product-tile__clp-savings-sav">save</span>
                                    <span class="product-tile__clp-savings-per">10%</span>
                                 </div>
                              </label>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="158" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">158</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper product-tile-promotion">
               <a href="https://www.revzilla.com/photochromic-helmets">
                  <div class="product-tile-promotion__content" style="
                     opacity: 1;
                     background-image: url('https://assets.comoto.io/6f707e79-993d-44d0-a1c8-be7ff0bcb7e2.jpg');
                     " data-lazy-src="https://assets.comoto.io/6f707e79-993d-44d0-a1c8-be7ff0bcb7e2.jpg"></div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="3" data-js="ProductTile.link" data-product-id="1113925" data-skus="10446682,10446683,10446684,10446685,10446686,10446687,10446688" href="/motorcycle/scorpion-exo-r1-air-carbon-onyx-helmet"
                  itemprop="url" title="Scorpion EXO-R1 Air Carbon Onyx Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Scorpion EXO-R1 Air Carbon Onyx Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113925" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2475/0821/scorpion_exor1_air_carbon_onyx_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-R1 Air Carbon Onyx Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1113925" src="https://www.revzilla.com/product_images/2475/0821/scorpion_exor1_air_carbon_onyx_helmet_black_480x480.jpg" width="480"
                           />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-R1 Air Carbon Onyx Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="589.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>589<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>649<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="55" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">55</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="4" data-js="ProductTile.link" data-product-id="1020663" data-skus="10258410,10258411,10258412,10258413,10258414,10258415,10258398,10258399,10258400,10258401,10258402,10258403,10258404,10258405,10258406,10258407,10258408,10258409"
                  href="/motorcycle/agv-k1-s-helmet" itemprop="url" title="AGV K1 S Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="AGV K1 S Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020663" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K1 S Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1020663" src="https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1020663,
                                        [{
                                          "alt_text": "AGV K1 S Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21039636
                                        }, {
                                          "alt_text": "AGV K1 S Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2103/9568/agvk1_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21039568
                                        }, {
                                          "alt_text": "AGV K1 S Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2103/9704/agvk1_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21039704
                                        }, {
                                          "alt_text": "AGV K1 S Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21039636
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K1 S Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="229.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>229<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>239<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="103" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">103</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="5" data-js="ProductTile.link" data-product-id="1132116" data-skus="10481098,10481099,10481100,10481101,10481102,10481103" href="/motorcycle/arai-corsair-x-nakasuga-4-helmet" itemprop="url"
                  title="Arai Corsair-X Nakasuga 4 Helmet">
                  <meta content="Arai Corsair-X Nakasuga 4 Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1132116" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2382/7129/arai_corsair_x_nakasuga4_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Corsair-X Nakasuga 4 Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1132116" src="https://www.revzilla.com/product_images/2382/7129/arai_corsair_x_nakasuga4_helmet_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Corsair-X Nakasuga 4 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="999.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>999<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating=""></span>
                           <img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d" height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="6" data-js="ProductTile.link" data-product-id="1020653" data-skus="10258338,10258339,10258340,10258341,10258342,10258343,10258326,10258327,10258328,10258329,10258330,10258331,10258332,10258333,10258334,10258335,10258336,10258337,10258320,10258321,10258322,10258323,10258324,10258325"
                  href="/motorcycle/agv-k6-s-helmet" itemprop="url" title="AGV K6 S Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="AGV K6 S Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020653" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2073/6287/agvk6_s_helmet_nardo_grey_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K6 S Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1020653" src="https://www.revzilla.com/product_images/2073/6287/agvk6_s_helmet_nardo_grey_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020653" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020653" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020653" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020653" data-js-option-id="40871" style="background-color: #808080" title="Nardo Grey"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1020653,
                                        [{
                                          "alt_text": "AGV K6 S Helmet",
                                          "dimensions": null,
                                          "option_id": 40871,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2073/6287/agvk6_s_helmet_nardo_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 20736287
                                        }, {
                                          "alt_text": "AGV K6 S Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2073/6525/agvk6_s_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20736525
                                        }, {
                                          "alt_text": "AGV K6 S Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2073/6576/agvk6_s_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 20736576
                                        }, {
                                          "alt_text": "AGV K6 S Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2073/6406/agvk6_s_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20736406
                                        }, {
                                          "alt_text": "AGV K6 S Helmet",
                                          "dimensions": null,
                                          "option_id": 40871,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2073/6287/agvk6_s_helmet_nardo_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 20736287
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K6 S Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="599.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>599<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="90" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">90</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="7" data-js="ProductTile.link" data-product-id="1147768" data-skus="10506922,10506923,10506924,10506925,10506926,10506927" href="/motorcycle/simpson-helmets-outlaw-bandit-unknown-industries"
                  itemprop="url" title="Simpson Helmets Outlaw Bandit 3.0 Carbon Unknown Industries LE Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Simpson Helmets Outlaw Bandit 3.0 Carbon Unknown Industries LE Helmet" itemprop="name" />
                  <meta content="Simpson Helmets" itemprop="brand" />
                  <meta content="1147768" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2468/3375/simpson_helmets_outlaw_bandit3_carbon_unknown_industries_le_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Simpson Helmets Outlaw Bandit 3.0 Carbon Unknown Industries LE Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1147768" src="https://www.revzilla.com/product_images/2468/3375/simpson_helmets_outlaw_bandit3_carbon_unknown_industries_le_helmet_black_480x480.jpg"
                           width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Simpson Helmets Outlaw Bandit 3.0 Carbon Unknown Industries LE Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating=""></span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="8" data-js="ProductTile.link" data-product-id="1064670" data-skus="10339766,10339767,10339768,10339769,10339770,10339771,10339772,10339773,10339774,10339775,10339776,10339777,10339778,10339779,10339780,10339781,10339782,10339783,10339784,10339785,10339786,10339787,10339788,10339789,10339790,10339791,10339792,10339793,10339794,10339795,10339796,10339797,10339798,10339799,10339800,10339801,10494675,10494676,10494677,10494678,10494679,10494680,10339808,10339809,10339810,10339811,10339812,10339813,10339802,10339803,10339804,10339805,10339806,10339807,10494669,10494670,10494671,10494672,10494673,10494674"
                  href="/motorcycle/biltwell-gringo-sv-helmet" itemprop="url" title="Biltwell Gringo SV Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Biltwell Gringo SV Helmet" itemprop="name" />
                  <meta content="Biltwell Apparel" itemprop="brand" />
                  <meta content="1064670" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2124/9490/biltwell_gringo_sv_helmet_gloss_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Biltwell Gringo SV Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1064670" src="https://www.revzilla.com/product_images/2124/9490/biltwell_gringo_sv_helmet_gloss_black_480x480.jpg" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="3581" style="background-color: black" title="Gloss Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="4891" style="background-color: white" title="Gloss White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="63612" style="background-color: #808080" title="Gloss Storm Grey"></span><span class="product-tile__swatch-more-count">+6</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="63613" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/63613/square/63613.png);
                                    " title="Metallic Seafoam"></span><span class="product-tile__swatch-more-count">+5</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="63744" style="background-color: #008000" title="Metallic Sierra Green"></span><span class="product-tile__swatch-more-count">+4</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="499" style="background-color: #c7c7c8" title="Light Grey"></span><span class="product-tile__swatch-more-count">+3</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="46956" style="background-color: #ff0000" title="Metallic Cherry Red"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="46954" style="background-color: #800080" title="Metallic Grape"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064670" data-js-option-id="25874" style="background-color: #008000" title="Mint"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1064670,
                                        [{
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 3581,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2124/9490/biltwell_gringo_sv_helmet_gloss_black_480x480.jpg",
                                          "filename": "",
                                          "id": 21249490
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 499,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2409/7112/biltwell_gringo_ece_r2206_metallic_champagne_tracker_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 24097112
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2124/9711/biltwell_gringo_sv_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 21249711
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 3581,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2124/9490/biltwell_gringo_sv_helmet_gloss_black_480x480.jpg",
                                          "filename": "",
                                          "id": 21249490
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 4891,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2124/9983/biltwell_gringo_sv_helmet_gloss_white_480x480.jpg",
                                          "filename": "",
                                          "id": 21249983
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 25874,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2409/7350/biltwell_gringo_ece_r2206_metallic_champagne_tracker_mint_480x480.jpg",
                                          "filename": "",
                                          "id": 24097350
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 46954,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2125/0255/biltwell_gringo_sv_helmet_metallic_grape_480x480.jpg",
                                          "filename": "",
                                          "id": 21250255
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 46956,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2125/0119/biltwell_gringo_sv_helmet_metallic_cherry_red_480x480.jpg",
                                          "filename": "",
                                          "id": 21250119
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 63612,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2408/4470/biltwell_gringo_sv_helmet_gloss_storm_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 24084470
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 63613,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2408/4606/biltwell_gringo_sv_helmet_metallic_seafoam_480x480.jpg",
                                          "filename": "",
                                          "id": 24084606
                                        }, {
                                          "alt_text": "Biltwell Gringo SV Helmet",
                                          "dimensions": null,
                                          "option_id": 63744,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2125/0527/biltwell_gringo_sv_helmet_metallic_sierra_green_480x480.jpg",
                                          "filename": "",
                                          "id": 21250527
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Biltwell Gringo SV Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="299.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.7" itemprop="ratingValue" />
                           <meta content="20" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="3.5"></span>
                           <span class="product-tile__rating-count product-rating__count">20</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="9" data-js="ProductTile.link" data-product-id="1067340" data-skus="10343370,10343371,10343372,10343373,10343374,10343375,10343376,10343363,10343364,10343365,10343366,10343367,10343368,10343369,10343377,10343378,10343379,10343380,10343381,10343382,10343383"
                  href="/motorcycle/sedici-strada-3-parlare-helmet" itemprop="url" title="Sedici Strada 3 Parlare Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Sedici Strada 3 Parlare Helmet" itemprop="name" />
                  <meta content="Sedici" itemprop="brand" />
                  <meta content="1067340" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2266/2649/sedici_strada3_parlare_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Sedici Strada 3 Parlare Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2266/2649/sedici_strada3_parlare_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2266/2649/sedici_strada3_parlare_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1067340" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067340" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067340" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067340" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1067340,
                                        [{
                                          "alt_text": "Sedici Strada 3 Parlare Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2266/2649/sedici_strada3_parlare_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22662649
                                        }, {
                                          "alt_text": "Sedici Strada 3 Parlare Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2266/2649/sedici_strada3_parlare_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22662649
                                        }, {
                                          "alt_text": "Sedici Strada 3 Parlare Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2266/2581/sedici_strada3_parlare_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22662581
                                        }, {
                                          "alt_text": "Sedici Strada 3 Parlare Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2266/2513/sedici_strada3_parlare_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22662513
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Sedici Strada 3 Parlare Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="419.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>419<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <label class="product-tile__clp-savings product-tile__clp-savings--non-member js-ClpInfoPanel-plpToggle" data-savings="$42.00" for="rpm-sales-pitch-panel">
                                 <div class="product-tile__clp-savings-tac"></div>
                                 <div class="product-tile__clp-savings-txt">
                                    <span class="product-tile__clp-savings-mem">Members</span>
                                    <span class="product-tile__clp-savings-sav">save</span>
                                    <span class="product-tile__clp-savings-per">10%</span>
                                 </div>
                              </label>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="158" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">158</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="10" data-js="ProductTile.link" data-product-id="1116866" data-skus="10452616,10452617,10452618,10452619,10452620,10452621,10452622,10452623,10452624,10452625,10452626,10452627,10452628,10452629,10452609,10452610,10452611,10452612,10452613,10452614,10452615"
                  href="/motorcycle/schuberth-s3-apex-helmet" itemprop="url" title="Schuberth S3 Apex Helmet">
                  <meta content="Schuberth S3 Apex Helmet" itemprop="name" />
                  <meta content="Schuberth Helmets" itemprop="brand" />
                  <meta content="1116866" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2382/5732/schuberth_s3_apex_helmet_anthracite_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Schuberth S3 Apex Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2382/5732/schuberth_s3_apex_helmet_anthracite_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2382/5732/schuberth_s3_apex_helmet_anthracite_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1116866" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1116866" data-js-option-id="55" style="background-color: grey" title="Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1116866" data-js-option-id="140" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/140/square/140.gif);
                                    " title="White/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1116866" data-js-option-id="7880" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7880/square/7880.gif);
                                    " title="Anthracite/Red"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1116866,
                                        [{
                                          "alt_text": "Schuberth S3 Apex Helmet",
                                          "dimensions": null,
                                          "option_id": 7880,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2382/5732/schuberth_s3_apex_helmet_anthracite_480x480.jpg",
                                          "filename": "",
                                          "id": 23825732
                                        }, {
                                          "alt_text": "Schuberth S3 Apex Helmet",
                                          "dimensions": null,
                                          "option_id": 55,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2382/5868/schuberth_s3_apex_helmet_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 23825868
                                        }, {
                                          "alt_text": "Schuberth S3 Apex Helmet",
                                          "dimensions": null,
                                          "option_id": 140,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2382/5800/schuberth_s3_apex_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 23825800
                                        }, {
                                          "alt_text": "Schuberth S3 Apex Helmet",
                                          "dimensions": null,
                                          "option_id": 7880,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2382/5732/schuberth_s3_apex_helmet_anthracite_480x480.jpg",
                                          "filename": "",
                                          "id": 23825732
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Schuberth S3 Apex Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.9" itemprop="ratingValue" />
                           <meta content="15" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">15</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="11" data-js="ProductTile.link" data-product-id="1106746" data-skus="10432076,10432077,10432078,10432079,10432080" href="/motorcycle/agv-pista-gp-rr-electrum-limited-edition-helmet"
                  itemprop="url" title="AGV Pista GP RR Electrum Limited Edition Helmet">
                  <meta content="AGV Pista GP RR Electrum Limited Edition Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1106746" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2368/5892/agv_pista_gprr_electrum_limited_edition_helmet_matte_carbon_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV Pista GP RR Electrum Limited Edition Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2368/5892/agv_pista_gprr_electrum_limited_edition_helmet_matte_carbon_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2368/5892/agv_pista_gprr_electrum_limited_edition_helmet_matte_carbon_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106746" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV Pista GP RR Electrum Limited Edition Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1999.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,999<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="67" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">67</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="12" data-js="ProductTile.link" data-product-id="1128726" data-skus="10473944,10473945,10473946,10473947,10473948,10473949" href="/motorcycle/arai-corsair-x-iom-tt-2025-helmet" itemprop="url"
                  title="Arai Corsair-X IOM TT 2025 Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Arai Corsair-X IOM TT 2025 Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1128726" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2462/7948/arai_corsair_xiomtt2025_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Corsair-X IOM TT 2025 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2462/7948/arai_corsair_xiomtt2025_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2462/7948/arai_corsair_xiomtt2025_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1128726" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Corsair-X IOM TT 2025 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1099.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,099<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.8" itemprop="ratingValue" />
                           <meta content="328" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="5"></span>
                           <span class="product-tile__rating-count product-rating__count">328</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="13" data-js="ProductTile.link" data-product-id="1064484" data-skus="10338924,10338925,10338926,10338927,10338928,10338929,10338930,10338931,10338932,10338933,10338934,10338935" href="/motorcycle/alpinestars-supertech-r10-carbon-team-helmet"
                  itemprop="url" title="Alpinestars Supertech R10 Carbon Team Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Alpinestars Supertech R10 Carbon Team Helmet" itemprop="name" />
                  <meta content="Alpinestars" itemprop="brand" />
                  <meta content="1064484" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2208/7462/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_fluo_matte_blue_white_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Alpinestars Supertech R10 Carbon Team Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2208/7462/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_fluo_matte_blue_white_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2208/7462/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_fluo_matte_blue_white_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1064484" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064484" data-js-option-id="66675" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/66675/square/66675.png);
                                    " title="Matte Black Carbon/Fluo Red/Blue/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064484" data-js-option-id="66586" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/66586/square/66586.png);
                                    " title="Gloss Black Carbon/Red/White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1064484,
                                        [{
                                          "alt_text": "Alpinestars Supertech R10 Carbon Team Helmet",
                                          "dimensions": null,
                                          "option_id": 66675,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2208/7462/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_fluo_matte_blue_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22087462
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Team Helmet",
                                          "dimensions": null,
                                          "option_id": 66586,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2226/0199/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22260199
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Team Helmet",
                                          "dimensions": null,
                                          "option_id": 66675,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2208/7462/alpinestars_supertech_r10_carbon_team_helmet_black_carbon_red_fluo_matte_blue_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22087462
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Alpinestars Supertech R10 Carbon Team Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1379.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,379<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="86" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">86</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="14" data-js="ProductTile.link" data-product-id="361661" data-skus="1183406,1183407,1183408,1183409,1183410,1248990" href="/motorcycle/bell-qualifier-dlx-blackout-helmet" itemprop="url"
                  title="Bell Qualifier DLX Blackout Helmet">
                  <meta content="Bell Qualifier DLX Blackout Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="361661" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1658/8206/bell_qualifier_dlx_blackout_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Qualifier DLX Blackout Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1658/8206/bell_qualifier_dlx_blackout_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1658/8206/bell_qualifier_dlx_blackout_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-361661" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Qualifier DLX Blackout Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="159.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>159<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="477" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">477</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="15" data-js="ProductTile.link" data-product-id="1064483" data-skus="10338912,10338913,10338914,10338915,10338916,10338917,10338918,10338919,10338920,10338921,10338922,10338923" href="/motorcycle/alpinestars-supertech-r10-carbon-element-helmet"
                  itemprop="url" title="Alpinestars Supertech R10 Carbon Element Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Alpinestars Supertech R10 Carbon Element Helmet" itemprop="name" />
                  <meta content="Alpinestars" itemprop="brand" />
                  <meta content="1064483" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2209/0947/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_silver_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Alpinestars Supertech R10 Carbon Element Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2209/0947/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_silver_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2209/0947/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_silver_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1064483" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064483" data-js-option-id="66582" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/66582/square/66582.png);
                                    " title="Gloss Black Carbon/Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1064483" data-js-option-id="66583" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/66583/square/66583.png);
                                    " title="Gloss Black Carbon/Bright Red/White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1064483,
                                        [{
                                          "alt_text": "Alpinestars Supertech R10 Carbon Element Helmet",
                                          "dimensions": null,
                                          "option_id": 66582,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2209/0947/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 22090947
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Element Helmet",
                                          "dimensions": null,
                                          "option_id": 66582,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2209/0947/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 22090947
                                        }, {
                                          "alt_text": "Alpinestars Supertech R10 Carbon Element Helmet",
                                          "dimensions": null,
                                          "option_id": 66583,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2226/0352/alpinestars_supertech_r10_carbon_element_helmet_gloss_black_carbon_bright_red_white_480x480.jpg",
                                          "filename": "",
                                          "id": 22260352
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Alpinestars Supertech R10 Carbon Element Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1379.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,379<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="86" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">86</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="16" data-js="ProductTile.link" data-product-id="1113932" data-skus="10446797,10446798,10446799,10446800,10446801,10446802,10446803,10446784,10446785,10446786,10446787,10446788,10446789,10446790,10446791,10446792,10446793,10446794,10446795,10446796"
                  href="/motorcycle/scorpion-exo-eclipse-helmet" itemprop="url" title="Scorpion EXO Eclipse Helmet">
                  <meta content="Scorpion EXO Eclipse Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113932" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2475/5343/scorpion_exo_eclipse_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO Eclipse Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2475/5343/scorpion_exo_eclipse_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2475/5343/scorpion_exo_eclipse_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1113932" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113932" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113932" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113932" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1113932,
                                        [{
                                          "alt_text": "Scorpion EXO Eclipse Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/5343/scorpion_exo_eclipse_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24755343
                                        }, {
                                          "alt_text": "Scorpion EXO Eclipse Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/5343/scorpion_exo_eclipse_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24755343
                                        }, {
                                          "alt_text": "Scorpion EXO Eclipse Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/5241/scorpion_exo_eclipse_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24755241
                                        }, {
                                          "alt_text": "Scorpion EXO Eclipse Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2332/2095/scorpion_exo_eclipse_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23322095
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO Eclipse Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="584.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>584<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>589<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="2.5" itemprop="ratingValue" />
                           <meta content="4" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="2.5"></span>
                           <span class="product-tile__rating-count product-rating__count">4</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="17" data-js="ProductTile.link" data-product-id="858123" data-skus="1829032,1829033,1829034,1829035,1829036,1829037,1829044,1829045,1829046,1829047,1829048,1829049,10253052,1829038,1829039,1829040,1829041,1829042,1829043,1829050,1829051,1829052,1829053,1829054,1829055,1829057,1829058,1829059,1829060,1829061,1829063,1829064,1829065,1829066,1829067"
                  href="/motorcycle/shoei-rf-1400-helmet" itemprop="url" title="Shoei RF-1400 Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Shoei RF-1400 Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="858123" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1498/8747/shoei_rf1400_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1498/8747/shoei_rf1400_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1498/8747/shoei_rf1400_helmet_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-858123" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="31077" style="background-color: #cccccc" title="Basalt Grey"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="82" style="background-color: Yellow" title="Yellow"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-858123" data-js-option-id="4966" style="background-color: blue" title="Matte Blue"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        858123,
                                        [{
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8747/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988747
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8747/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988747
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8832/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988832
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 82,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8849/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988849
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8815/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988815
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 4966,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8798/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988798
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": 31077,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/8730/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14988730
                                        }, {
                                          "alt_text": "Shoei RF-1400 Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1498/9512/shoei_rf1400_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14989512
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="649.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>649<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>729<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="18" data-js="ProductTile.link" data-product-id="1067325" data-skus="10343249,10343250,10343251,10343252,10343254" href="/motorcycle/sedici-strada-3-rivale-carbon-helmet" itemprop="url"
                  title="Sedici Strada 3 Rivale Carbon Helmet">
                  <meta content="Sedici Strada 3 Rivale Carbon Helmet" itemprop="name" />
                  <meta content="Sedici" itemprop="brand" />
                  <meta content="1067325" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2221/0556/sedici_strada3_rivale_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Sedici Strada 3 Rivale Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2221/0556/sedici_strada3_rivale_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2221/0556/sedici_strada3_rivale_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1067325" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Sedici Strada 3 Rivale Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="469.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>469<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <label class="product-tile__clp-savings product-tile__clp-savings--non-member js-ClpInfoPanel-plpToggle" data-savings="$47.00" for="rpm-sales-pitch-panel">
                                 <div class="product-tile__clp-savings-tac"></div>
                                 <div class="product-tile__clp-savings-txt">
                                    <span class="product-tile__clp-savings-mem">Members</span>
                                    <span class="product-tile__clp-savings-sav">save</span>
                                    <span class="product-tile__clp-savings-per">10%</span>
                                 </div>
                              </label>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.8" itemprop="ratingValue" />
                           <meta content="24" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">24</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="19" data-js="ProductTile.link" data-product-id="1020679" data-skus="10258542,10258543,10258544,10258545,10258546,10258547,10432147,10432148,10432149,10432150,10432151,10432152,10258518,10258519,10258520,10258521,10258522,10258523,10258536,10258537,10258538,10258539,10258540,10258541,10432141,10432142,10432143,10432144,10432145,10432146"
                  href="/motorcycle/agv-k3-helmet" itemprop="url" title="AGV K3 Helmet">
                  <meta content="AGV K3 Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020679" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2074/9756/agvk3_helmet_matte_rhodio_grey_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K3 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2074/9756/agvk3_helmet_matte_rhodio_grey_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2074/9756/agvk3_helmet_matte_rhodio_grey_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1020679" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020679" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020679" data-js-option-id="71419" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/71419/square/71419.png);
                                    " title="Mono Matte Luna Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020679" data-js-option-id="28" style="background-color: Red" title="Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020679" data-js-option-id="62023" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/62023/square/62023.png);
                                    " title="Matte Rhodio Grey"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020679" data-js-option-id="44670" style="background-color: #ffffff" title="Mono White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1020679,
                                        [{
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 62023,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/9756/agvk3_helmet_matte_rhodio_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 20749756
                                        }, {
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 28,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/9603/agvk3_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 20749603
                                        }, {
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/9518/agvk3_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20749518
                                        }, {
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 44670,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2413/7259/agvk3_helmet_mono_white_480x480.jpg",
                                          "filename": "",
                                          "id": 24137259
                                        }, {
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 62023,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/9756/agvk3_helmet_matte_rhodio_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 20749756
                                        }, {
                                          "alt_text": "AGV K3 Helmet",
                                          "dimensions": null,
                                          "option_id": 71419,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2413/7293/agvk3_helmet_mono_matte_luna_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 24137293
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K3 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="299.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="78" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">78</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="20" data-js="ProductTile.link" data-product-id="671327" data-skus="1589013,1589014,1589041,1589042,1589043,1589044,1589045,1589023,1589024,1589025,1589026,1589027" href="/motorcycle/shoei-gt-air-ii-helmet"
                  itemprop="url" title="Shoei GT-Air II Helmet ">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Shoei GT-Air II Helmet " itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="671327" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/0833/9128/shoei_gt_air_ii_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei GT-Air II Helmet " class="product-tile__image" src="https://www.revzilla.com/product_images/0833/9128/shoei_gt_air_ii_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/0833/9128/shoei_gt_air_ii_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-671327" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-671327" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-671327" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-671327" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        671327,
                                        [{
                                          "alt_text": "Shoei GT-Air II Helmet ",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0833/9128/shoei_gt_air_ii_480x480.jpg",
                                          "filename": "",
                                          "id": 8339128
                                        }, {
                                          "alt_text": "Shoei GT-Air II Helmet ",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0833/9349/shoei_gt_air_ii_480x480.jpg",
                                          "filename": "",
                                          "id": 8339349
                                        }, {
                                          "alt_text": "Shoei GT-Air II Helmet ",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0833/9298/shoei_gt_air_ii_480x480.jpg",
                                          "filename": "",
                                          "id": 8339298
                                        }, {
                                          "alt_text": "Shoei GT-Air II Helmet ",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0833/9128/shoei_gt_air_ii_480x480.jpg",
                                          "filename": "",
                                          "id": 8339128
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei GT-Air II Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="499.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>499<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>699.99<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 29%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="390" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">390</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="21" data-js="ProductTile.link" data-product-id="1112320" data-skus="10443968,10443969,10443970,10443971,10443972,10443973,10443974,10443975,10443976,10443977,10443978,10443979,10443962,10443963,10443964,10443965,10443966,10443967,10443986,10443987,10443988,10443989,10443990,10443991,10443992,10443993,10443994,10443995,10443996,10443997,10443980,10443981,10443982,10443983,10443984,10443985"
                  href="/motorcycle/shoei-gt-air-3-helmet" itemprop="url" title="Shoei GT-Air 3 Helmet">
                  <meta content="Shoei GT-Air 3 Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1112320" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2322/8162/shoei_gt_air3_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei GT-Air 3 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2322/8162/shoei_gt_air3_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2322/8162/shoei_gt_air3_helmet_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-1112320" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="5798" style="background-color: grey" title="Matte Deep Grey"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="10696" style="background-color: yellow" title="Brilliant Yellow"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112320" data-js-option-id="4966" style="background-color: blue" title="Matte Blue"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1112320,
                                        [{
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 5798,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8162/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228162
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8077/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228077
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8145/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228145
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 3435,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8332/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228332
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 4966,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8128/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228128
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 5798,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8162/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228162
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": 10696,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8111/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228111
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2325/3467/shoei_gt_air3_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23253467
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei GT-Air 3 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="34" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">34</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="22" data-js="ProductTile.link" data-product-id="1055324" data-skus="10321838,10321839,10321840,10321841,10321842,10321843,10321826,10321827,10321828,10321829,10321830,10321831,10321832,10321833,10321834,10321835,10321836,10321837"
                  href="/motorcycle/shoei-x-15-helmet" itemprop="url" title="Shoei X-15 Helmet">
                  <meta content="Shoei X-15 Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1055324" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2090/2790/shoei_x15_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei X-15 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2090/2790/shoei_x15_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2090/2790/shoei_x15_helmet_black_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-1055324" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055324" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055324" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055324" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1055324,
                                        [{
                                          "alt_text": "Shoei X-15 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/2790/shoei_x15_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20902790
                                        }, {
                                          "alt_text": "Shoei X-15 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/2790/shoei_x15_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20902790
                                        }, {
                                          "alt_text": "Shoei X-15 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/2858/shoei_x15_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 20902858
                                        }, {
                                          "alt_text": "Shoei X-15 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/2807/shoei_x15_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20902807
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei X-15 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="929.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>929<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>949<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="71" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">71</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="23" data-js="ProductTile.link" data-product-id="352724" data-skus="1165809,1165810,1165811,1165812,1165813,1165814,1165833,1165834,1165835,1165836,1165837,1165838,1165815,1165816,1165817,1165818,1165819,1165820,1165845,1165846,1165847,1165848,1165849,1165850,1165839,1165840,1165841,1165842,1165843,1165844,1165827,1165828,1165829,1165830,1165831,1165832"
                  href="/motorcycle/shoei-rf-sr-helmet-solid" itemprop="url" title="Shoei RF-SR Helmet - Solid">
                  <div class="product-tile__sash product-tile__sash--sale">
                     <div class="product-tile__sash-message product-tile__sash-message--sale">
                        Sale
                     </div>
                  </div>
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2018">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Shoei RF-SR Helmet - Solid" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="352724" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/0229/5482/shoei_rfsr_helmet_solid_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-SR Helmet - Solid" class="product-tile__image" src="https://www.revzilla.com/product_images/0229/5482/shoei_rfsr_helmet_solid_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/0229/5482/shoei_rfsr_helmet_solid_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-352724" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="31077" style="background-color: #cccccc" title="Basalt Grey"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="5798" style="background-color: grey" title="Matte Deep Grey"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-352724" data-js-option-id="4966" style="background-color: blue" title="Matte Blue"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        352724,
                                        [{
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5482/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295482
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5465/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295465
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5482/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295482
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5550/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295550
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 4966,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5584/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295584
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 5798,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5618/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295618
                                        }, {
                                          "alt_text": "Shoei RF-SR Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 31077,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0229/5601/shoei_rfsr_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 2295601
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-SR Helmet - Solid
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="449.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>449<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>499.99<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 10%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="309" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">309</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="24" data-js="ProductTile.link" data-product-id="1073223" data-skus="10355473,10355474,10355475,10355476,10355477,10355478,10355479" href="/motorcycle/icon-airflite-dark-rubatone-helmet"
                  itemprop="url" title="Icon Airflite Dark Rubatone Helmet">
                  <meta content="Icon Airflite Dark Rubatone Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1073223" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2154/3698/icon_airflite_dark_rubatone_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airflite Dark Rubatone Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2154/3698/icon_airflite_dark_rubatone_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2154/3698/icon_airflite_dark_rubatone_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1073223" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airflite Dark Rubatone Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="250.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>250<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="1429" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">1429</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="25" data-js="ProductTile.link" data-product-id="866517" data-skus="10352142,10352143,10352144,10352145,10352146,10352147,1844349,10352148,10352149,10352150,10352151,10352152,10352136,10352137,10352138,10352139,10352140,10352141,10352130,10352131,10352132,10352133,10352134,10352135,10352124,10352125,10352126,10352127,10352128,10352129"
                  href="/motorcycle/shoei-rf-1400-capriccio-helmet" itemprop="url" title="Shoei RF-1400 Capriccio Helmet">
                  <meta content="Shoei RF-1400 Capriccio Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="866517" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2181/2851/shoei_rf1400_capriccio_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Capriccio Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2181/2851/shoei_rf1400_capriccio_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2181/2851/shoei_rf1400_capriccio_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-866517" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-866517" data-js-option-id="6197" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/6197/square/6197.gif);
                                    " title="Black/Green/Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-866517" data-js-option-id="3757" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/3757/square/3757.gif);
                                    " title="Black/Red/Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-866517" data-js-option-id="64184" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/64184/square/64184.png);
                                    " title="Grey/Purple/Green"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-866517" data-js-option-id="3737" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/3737/square/3737.gif);
                                    " title="Red/White/Blue"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-866517" data-js-option-id="7625" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7625/square/7625.gif);
                                    " title="Red/White/Green"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        866517,
                                        [{
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 6197,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2181/2851/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21812851
                                        }, {
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 3737,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2181/2817/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21812817
                                        }, {
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 3757,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2181/2868/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21812868
                                        }, {
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 6197,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2181/2851/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21812851
                                        }, {
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 7625,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2148/5504/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21485504
                                        }, {
                                          "alt_text": "Shoei RF-1400 Capriccio Helmet",
                                          "dimensions": null,
                                          "option_id": 64184,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2181/2834/shoei_rf1400_capriccio_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 21812834
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Capriccio Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="26" data-js="ProductTile.link" data-product-id="1040520" data-skus="10293369,10293370,10293371,10293372,10293373,10293374,10293375,10293348,10293349,10293350,10293351,10293352,10293353,10293354,10293362,10293363,10293364,10293365,10293366,10293367,10293368,10293376,10293377,10293378,10293379,10293380,10293381,10293382,10293355,10293356,10293357,10293358,10293359,10293360,10293361"
                  href="/motorcycle/scorpion-exo-covert-fx-helmet" itemprop="url" title="Scorpion EXO Covert FX Helmet">
                  <meta content="Scorpion EXO Covert FX Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1040520" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2067/5540/scorpion_exo_covert_fx_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO Covert FX Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2067/5540/scorpion_exo_covert_fx_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2067/5540/scorpion_exo_covert_fx_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1040520" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040520" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040520" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040520" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040520" data-js-option-id="66944" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/66944/square/66944.png);
                                    " title="Cement"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040520" data-js-option-id="808" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/808/square/808.gif);
                                    " title="Graphite"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1040520,
                                        [{
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2067/5540/scorpion_exo_covert_fx_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20675540
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1943/2963/scorpion_exo_covert_fx_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19432963
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1943/2912/scorpion_exo_covert_fx_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19432912
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 808,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1943/2997/scorpion_exo_covert_fx_helmet_matte_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 19432997
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2067/5540/scorpion_exo_covert_fx_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 20675540
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Helmet",
                                          "dimensions": null,
                                          "option_id": 66944,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1943/2980/scorpion_exo_covert_fx_helmet_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 19432980
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO Covert FX Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="274.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>274<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>284<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="83" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">83</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="27" data-js="ProductTile.link" data-product-id="971402" data-skus="10173203,10173204,10173207,10173198,10173199,10173208" href="/motorcycle/scorpion-exo-t520-nama-sushi-helmet" itemprop="url"
                  title="Scorpion EXO-T520 Nama-Sushi Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Scorpion EXO-T520 Nama-Sushi Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="971402" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1783/6793/scorpion_exo_t520_helmet_nama_sushi_black_chameleon_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-T520 Nama-Sushi Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1783/6793/scorpion_exo_t520_helmet_nama_sushi_black_chameleon_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1783/6793/scorpion_exo_t520_helmet_nama_sushi_black_chameleon_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-971402" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-971402" data-js-option-id="179" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/179/square/179.gif);
                                    " title="Black/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-971402" data-js-option-id="78" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/78/square/78.gif);
                                    " title="Black/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-971402" data-js-option-id="4708" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4708/square/4708.gif);
                                    " title="White/Purple"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        971402,
                                        [{
                                          "alt_text": "Scorpion EXO-T520 Nama-Sushi Helmet",
                                          "dimensions": null,
                                          "option_id": 179,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1783/6793/scorpion_exo_t520_helmet_nama_sushi_black_chameleon_480x480.jpg",
                                          "filename": "",
                                          "id": 17836793
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Nama-Sushi Helmet",
                                          "dimensions": null,
                                          "option_id": 78,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9593/scorpion_exot520_nama_sushi_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759593
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Nama-Sushi Helmet",
                                          "dimensions": null,
                                          "option_id": 179,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1783/6793/scorpion_exo_t520_helmet_nama_sushi_black_chameleon_480x480.jpg",
                                          "filename": "",
                                          "id": 17836793
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Nama-Sushi Helmet",
                                          "dimensions": null,
                                          "option_id": 4708,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9644/scorpion_exot520_nama_sushi_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759644
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-T520 Nama-Sushi Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="244.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>244<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="118" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">118</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="28" data-js="ProductTile.link" data-product-id="821658" data-skus="1771671,1771672,1771673,1771674,1771675,1771676,1771677,1771678,1771679,1771680,1771681,1771682,1771683,1771684,1771685,1771686,1771687"
                  href="/motorcycle/scorpion-exo-r1-air-helmet-solid" itemprop="url" title="Scorpion EXO-R1 Air Helmet - Solid">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Scorpion EXO-R1 Air Helmet - Solid" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="821658" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1344/5449/scorpion_exor1_air_helmet_white_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-R1 Air Helmet - Solid" class="product-tile__image" src="https://www.revzilla.com/product_images/1344/5449/scorpion_exor1_air_helmet_white_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1344/5449/scorpion_exor1_air_helmet_white_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-821658" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-821658" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-821658" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-821658" data-js-option-id="37602" style="background-color: #ffffff" title="Matte Pearl White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        821658,
                                        [{
                                          "alt_text": "Scorpion EXO-R1 Air Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 37602,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1344/5449/scorpion_exor1_air_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 13445449
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1344/5483/scorpion_exor1_air_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13445483
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1344/5398/scorpion_exor1_air_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13445398
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Helmet - Solid",
                                          "dimensions": null,
                                          "option_id": 37602,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1344/5449/scorpion_exor1_air_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 13445449
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-R1 Air Helmet - Solid
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="439.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>439<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>449<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="181" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">181</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="29" data-js="ProductTile.link" data-product-id="813909" data-skus="1758349,1760123,1760124,1760125,1760126,1760127,1760128,10034488,10034489,1758358,1760135,1760136,1760137,1760138,1760139,1760140,10034490,10034491,1758350,1760129,1760130,1760131,1760132,1760133,1760134,10034486,10034487,1758351,1758352,1758353,1758354,1758355,1758356,1758357,10117547,10117548,1758359,1758360,1758361,1758362,1758363,1758364,1758365,10117551,10117552"
                  href="/motorcycle/hjc-i10-helmet" itemprop="url" title="HJC i10 Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="HJC i10 Helmet" itemprop="name" />
                  <meta content="HJC Helmets" itemprop="brand" />
                  <meta content="813909" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1648/6418/hj_ci10_plus_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="HJC i10 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1648/6418/hj_ci10_plus_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1648/6418/hj_ci10_plus_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-813909" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-813909" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-813909" data-js-option-id="34596" style="background-color: #000000" title="Semi-Flat Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-813909" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-813909" data-js-option-id="3810" style="background-color: blue" title="Metallic Blue"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-813909" data-js-option-id="36667" style="background-color: #808080" title="Semi-Flat Anthracite"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        813909,
                                        [{
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1648/6418/hj_ci10_plus_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 16486418
                                        }, {
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1648/6418/hj_ci10_plus_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 16486418
                                        }, {
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1648/6401/hj_ci10_plus_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 16486401
                                        }, {
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 3810,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1315/7587/hj_ci10_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 13157587
                                        }, {
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 34596,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1315/7502/hj_ci10_helmet_semi_flat_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13157502
                                        }, {
                                          "alt_text": "HJC i10 Helmet",
                                          "dimensions": null,
                                          "option_id": 36667,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1648/6469/hj_ci10_plus_helmet_semi_flat_anthracite_480x480.jpg",
                                          "filename": "",
                                          "id": 16486469
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           HJC i10 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="159.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>159<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>174<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="418" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">418</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="30" data-js="ProductTile.link" data-product-id="259701" data-skus="935338,935339,935340,935341,935342" href="/motorcycle/bell-bullitt-helmet" itemprop="url" title="Bell Bullitt Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="259701" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1215/0274/bell_bullitt_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1215/0274/bell_bullitt_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1215/0274/bell_bullitt_helmet_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-259701" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="263.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>263<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>439.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 40%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="443" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">443</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="31" data-js="ProductTile.link" data-product-id="888667" data-skus="10024824,10024825,10024826,10024827,10024828,10024829,10024830,10024831,10024832,10024833,10024834,10024835,10024836,10024837,10364349,10364350,10364351,10364352,10364353,10364354,10364355"
                  href="/motorcycle/scorpion-exo-r1-air-carbon-helmet" itemprop="url" title="Scorpion EXO-R1 Air Carbon Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Scorpion EXO-R1 Air Carbon Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="888667" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1507/9220/scorpion_exor1_air_carbon_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-R1 Air Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1507/9220/scorpion_exor1_air_carbon_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1507/9220/scorpion_exor1_air_carbon_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-888667" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-888667" data-js-option-id="3581" style="background-color: black" title="Gloss Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-888667" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-888667" data-js-option-id="57" style="background-color: Blue" title="Blue"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        888667,
                                        [{
                                          "alt_text": "Scorpion EXO-R1 Air Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1507/9220/scorpion_exor1_air_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 15079220
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 57,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2166/0760/scorpion_exo_exo_r1_air_full_face_helmet_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 21660760
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1507/9220/scorpion_exor1_air_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 15079220
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 3581,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1507/9276/scorpion_exor1_air_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 15079276
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-R1 Air Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="604.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>604<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="55" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">55</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="32" data-js="ProductTile.link" data-product-id="344989" data-skus="1296721,1296723,1296724,1296725,1144969,1144970,1144971,1144972,1144973,1155309,1559294,10393028,10393029,10393030,10393031,10393032"
                  href="/motorcycle/bell-qualifier-dlx-mips-helmet" itemprop="url" title="Bell Qualifier DLX Mips Helmet">
                  <meta content="Bell Qualifier DLX Mips Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="344989" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1438/8877/bell_qualifier_dlxmips_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Qualifier DLX Mips Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1438/8877/bell_qualifier_dlxmips_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1438/8877/bell_qualifier_dlxmips_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-344989" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-344989" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-344989" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-344989" data-js-option-id="6036" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/6036/square/6036.gif);
                                    " title="Navy/Red"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        344989,
                                        [{
                                          "alt_text": "Bell Qualifier DLX Mips Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1438/8877/bell_qualifier_dlxmips_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 14388877
                                        }, {
                                          "alt_text": "Bell Qualifier DLX Mips Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1438/8962/bell_qualifier_dlxmips_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 14388962
                                        }, {
                                          "alt_text": "Bell Qualifier DLX Mips Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1438/8877/bell_qualifier_dlxmips_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 14388877
                                        }, {
                                          "alt_text": "Bell Qualifier DLX Mips Helmet",
                                          "dimensions": null,
                                          "option_id": 6036,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/5715/bell_qualifier_dlx_mips_classic_helmet_navy_red_480x480.jpg",
                                          "filename": "",
                                          "id": 22285715
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Qualifier DLX Mips Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="299.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>329<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="410" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">410</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="33" data-js="ProductTile.link" data-product-id="1112509" data-skus="10444306,10444307,10444308,10444309" href="/motorcycle/agv-pista-gp-rr-pantera-limited-edition-helmet" itemprop="url"
                  title="AGV Pista GP RR Pantera Limited Edition Helmet">
                  <meta content="AGV Pista GP RR Pantera Limited Edition Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1112509" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2389/6163/agv_pista_gprr_pantera_limited_edition_helmet_matte_carbon_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV Pista GP RR Pantera Limited Edition Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2389/6163/agv_pista_gprr_pantera_limited_edition_helmet_matte_carbon_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2389/6163/agv_pista_gprr_pantera_limited_edition_helmet_matte_carbon_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1112509" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV Pista GP RR Pantera Limited Edition Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1999.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,999<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="2" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">2</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="34" data-js="ProductTile.link" data-product-id="1113935" data-skus="10446828,10446829,10446830,10446831,10446832,10446833,10446834,10446821,10446822,10446823,10446824,10446825,10446826,10446827"
                  href="/motorcycle/scorpion-exo-covert-fx-carbon-helmet" itemprop="url" title="Scorpion EXO Covert FX Carbon Helmet">
                  <meta content="Scorpion EXO Covert FX Carbon Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113935" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2332/2010/scorpion_exo_covert_fx_carbon_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO Covert FX Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2332/2010/scorpion_exo_covert_fx_carbon_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2332/2010/scorpion_exo_covert_fx_carbon_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1113935" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113935" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113935" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1113935,
                                        [{
                                          "alt_text": "Scorpion EXO Covert FX Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2332/2010/scorpion_exo_covert_fx_carbon_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23322010
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2332/2010/scorpion_exo_covert_fx_carbon_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23322010
                                        }, {
                                          "alt_text": "Scorpion EXO Covert FX Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/8284/scorpion_exo_covert_fx_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24758284
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO Covert FX Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="439.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>439<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="5.0" itemprop="ratingValue" />
                           <meta content="5" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="5"></span>
                           <span class="product-tile__rating-count product-rating__count">5</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="35" data-js="ProductTile.link" data-product-id="1055323" data-skus="10321802,10321803,10321804,10321805,10321806,10321807,10321820,10321821,10321822,10321823,10321824,10321825,10321814,10321815,10321816,10321817,10321818,10321819,10321796,10321797,10321798,10321799,10321800,10321801,10321808,10321809,10321810,10321811,10321812,10321813"
                  href="/motorcycle/shoei-x-15-escalate-helmet" itemprop="url" title="Shoei X-15 Escalate Helmet">
                  <meta content="Shoei X-15 Escalate Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1055323" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2090/4116/shoei_x15_escalate_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei X-15 Escalate Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2090/4116/shoei_x15_escalate_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2090/4116/shoei_x15_escalate_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1055323" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055323" data-js-option-id="18974" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/18974/square/18974.gif);
                                    " title="Anthracite/Black/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055323" data-js-option-id="4571" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4571/square/4571.gif);
                                    " title="Red/Black/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055323" data-js-option-id="34156" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/34156/square/34156.png);
                                    " title="Blue/White/Hi-Viz"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055323" data-js-option-id="3737" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/3737/square/3737.gif);
                                    " title="Red/White/Blue"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055323" data-js-option-id="7625" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7625/square/7625.gif);
                                    " title="Red/White/Green"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1055323,
                                        [{
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 34156,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4116/shoei_x15_escalate_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 20904116
                                        }, {
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 3737,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4099/shoei_x15_escalate_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 20904099
                                        }, {
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 4571,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4167/shoei_x15_escalate_helmet_red_black_white_480x480.jpg",
                                          "filename": "",
                                          "id": 20904167
                                        }, {
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 7625,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4133/shoei_x15_escalate_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 20904133
                                        }, {
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 18974,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4150/shoei_x15_escalate_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 20904150
                                        }, {
                                          "alt_text": "Shoei X-15 Escalate Helmet",
                                          "dimensions": null,
                                          "option_id": 34156,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2090/4116/shoei_x15_escalate_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 20904116
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei X-15 Escalate Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1049.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,049<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="71" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">71</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="36" data-js="ProductTile.link" data-product-id="1100695" data-skus="10413501,10413502,10413503,10413504,10413505,10413506,10413477,10413478,10413479,10413480,10413481,10413482,10413507,10413508,10413509,10413510,10413511,10413512,10413483,10413484,10413485,10413486,10413487,10413488,10413489,10413490,10413491,10413492,10413493,10413494,10413495,10413496,10413497,10413498,10413499,10413500"
                  href="/motorcycle/arai-signet-x-black-frost-snell-2025" itemprop="url" title="Arai Signet-X Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Signet-X Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1100695" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Signet-X Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1100695" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1100695,
                                        [{
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 6147,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23384335
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4369/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23384369
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3435,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4318/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23384318
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3440,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4420/arai_signet_x_helmet_aluminum_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 23384420
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 6147,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23384335
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8566,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2402/4730/arai_signet_x_helmet_diamond_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24024730
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4471/arai_signet_x_helmet_diamond_white_480x480.jpg",
                                          "filename": "",
                                          "id": 23384471
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/4505/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23384505
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Signet-X Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="291" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">291</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="37" data-js="ProductTile.link" data-product-id="1020690" data-skus="10258614,10258615,10258616,10258617,10258618" href="/motorcycle/agv-pista-gp-rr-carbon-iridium-helmet-2206" itemprop="url"
                  title="AGV Pista GP RR Carbon Iridium Helmet">
                  <meta content="AGV Pista GP RR Carbon Iridium Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020690" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2194/3332/agv_pista_gprr_carbon_iridium_helmet_iridium_carbon_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV Pista GP RR Carbon Iridium Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2194/3332/agv_pista_gprr_carbon_iridium_helmet_iridium_carbon_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2194/3332/agv_pista_gprr_carbon_iridium_helmet_iridium_carbon_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1020690" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV Pista GP RR Carbon Iridium Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1729.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,729<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="67" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">67</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="38" data-js="ProductTile.link" data-product-id="908767" data-skus="10069165,10069166,10069167,10069168,10069169,10069170,10069171,10069158,10069159,10069160,10069161,10069162,10069163,10069164,10069172,10069173,10069174,10069175,10069176,10069177,10069178"
                  href="/motorcycle/scorpion-exo-t520-helmet" itemprop="url" title="Scorpion EXO-T520 Helmet">
                  <meta content="Scorpion EXO-T520 Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="908767" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1559/7451/scorpion_exot520_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-T520 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1559/7451/scorpion_exot520_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1559/7451/scorpion_exot520_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-908767" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-908767" data-js-option-id="3581" style="background-color: black" title="Gloss Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-908767" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-908767" data-js-option-id="4891" style="background-color: white" title="Gloss White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        908767,
                                        [{
                                          "alt_text": "Scorpion EXO-T520 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1559/7451/scorpion_exot520_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 15597451
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1559/7451/scorpion_exot520_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 15597451
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Helmet",
                                          "dimensions": null,
                                          "option_id": 3581,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1559/7417/scorpion_exot520_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 15597417
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Helmet",
                                          "dimensions": null,
                                          "option_id": 4891,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1559/7434/scorpion_exot520_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 15597434
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-T520 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="219.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>219<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>229<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="118" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">118</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="39" data-js="ProductTile.link" data-product-id="1087068" data-skus="10385338,10385339,10385340,10385341,10385342,10385343,10385344,10385331,10385332,10385333,10385334,10385335,10385336,10385337,10385310,10385311,10385312,10385313,10385314,10385315,10385316,10385317,10385318,10385319,10385320,10385321,10385322,10385323,10385324,10385325,10385326,10385327,10385328,10385329,10385330"
                  href="/motorcycle/icon-airform-mips-manikrr-helmet" itemprop="url" title="Icon Airform Mips Manik&#39;RR Helmet">
                  <meta content="Icon Airform Mips Manik&#39;RR Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1087068" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2205/1065/icon_airform_mips_manik_rr_helmet_light_blue_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airform Mips Manik&#39;RR Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2205/1065/icon_airform_mips_manik_rr_helmet_light_blue_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2205/1065/icon_airform_mips_manik_rr_helmet_light_blue_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1087068" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087068" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087068" data-js-option-id="28" style="background-color: Red" title="Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087068" data-js-option-id="31" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/31/square/31.gif);
                                    " title="Pink"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087068" data-js-option-id="989" style="background-color: blue" title="Light Blue"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087068" data-js-option-id="85" style="background-color: purple" title="Purple"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1087068,
                                        [{
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 989,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/1065/icon_airform_mips_manik_rr_helmet_light_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 22051065
                                        }, {
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/1116/icon_airform_mips_manik_rr_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22051116
                                        }, {
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 28,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/1014/icon_airform_mips_manik_rr_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 22051014
                                        }, {
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 31,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/0912/icon_airform_mips_manik_rr_helmet_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 22050912
                                        }, {
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 85,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/0963/icon_airform_mips_manik_rr_helmet_purple_480x480.jpg",
                                          "filename": "",
                                          "id": 22050963
                                        }, {
                                          "alt_text": "Icon Airform Mips Manik'RR Helmet",
                                          "dimensions": null,
                                          "option_id": 989,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2205/1065/icon_airform_mips_manik_rr_helmet_light_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 22051065
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airform Mips Manik&#39;RR Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="250.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>250<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="34" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">34</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="40" data-js="ProductTile.link" data-product-id="1100720" data-skus="10413733,10413734,10413735,10413736,10413737,10413738,10413745,10413746,10413747,10413748,10413749,10413750,10413751,10413752,10413753,10413754,10413755,10413756,10413769,10413770,10413771,10413772,10413773,10413774,10413739,10413740,10413741,10413742,10413743,10413744"
                  href="/motorcycle/arai-contour-x-helmet" itemprop="url" title="Arai Contour-X Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Contour-X Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1100720" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2338/5389/arai_contour_x_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Contour-X Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2338/5389/arai_contour_x_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2338/5389/arai_contour_x_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1100720" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="39402" style="background-color: #0000ff" title="Blue Frost"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="499" style="background-color: #c7c7c8" title="Light Grey"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1100720,
                                        [{
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5389/arai_contour_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23385389
                                        }, {
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 499,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5457/arai_contour_x_helmet_light_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 23385457
                                        }, {
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5389/arai_contour_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23385389
                                        }, {
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8566,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5406/arai_contour_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23385406
                                        }, {
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5423/arai_contour_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23385423
                                        }, {
                                          "alt_text": "Arai Contour-X Helmet",
                                          "dimensions": null,
                                          "option_id": 39402,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/5440/arai_contour_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23385440
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Contour-X Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="77" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">77</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="41" data-js="ProductTile.link" data-product-id="1135880" data-skus="10486734,10486735,10486736,10486737,10486738,10486739,10486740,10486727,10486728,10486729,10486730,10486731,10486732,10486733"
                  href="/motorcycle/icon-ultraflite-rizz-rizz-helmet" itemprop="url" title="Icon Ultraflite Rizz Rizz Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Icon Ultraflite Rizz Rizz Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1135880" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2396/3025/icon_ultraflite_rizz_rizz_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Ultraflite Rizz Rizz Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2396/3025/icon_ultraflite_rizz_rizz_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2396/3025/icon_ultraflite_rizz_rizz_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1135880" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1135880" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1135880" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1135880,
                                        [{
                                          "alt_text": "Icon Ultraflite Rizz Rizz Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2396/3025/icon_ultraflite_rizz_rizz_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23963025
                                        }, {
                                          "alt_text": "Icon Ultraflite Rizz Rizz Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2396/3025/icon_ultraflite_rizz_rizz_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23963025
                                        }, {
                                          "alt_text": "Icon Ultraflite Rizz Rizz Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2396/2906/icon_ultraflite_rizz_rizz_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 23962906
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Ultraflite Rizz Rizz Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="350.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>350<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="3" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">3</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="42" data-js="ProductTile.link" data-product-id="862611" data-skus="1836773,1836774,1836775,1836776,1836777,1836778,1836779,1836780,1836781,1836782,1836783,1836784,1836767,1836768,1836769,1836770,1836771,1836772,10522678,10522679,10522680,10522681,10522682,10522683"
                  href="/motorcycle/simpson-speed-bandit-helmet" itemprop="url" title="Simpson Speed Bandit Helmet">
                  <meta content="Simpson Speed Bandit Helmet" itemprop="name" />
                  <meta content="Simpson Helmets" itemprop="brand" />
                  <meta content="862611" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1445/1995/simpson_speed_bandit_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Simpson Speed Bandit Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1445/1995/simpson_speed_bandit_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1445/1995/simpson_speed_bandit_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-862611" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-862611" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-862611" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-862611" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-862611" data-js-option-id="55" style="background-color: grey" title="Grey"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        862611,
                                        [{
                                          "alt_text": "Simpson Speed Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1445/1995/simpson_speed_bandit_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14451995
                                        }, {
                                          "alt_text": "Simpson Speed Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1445/1995/simpson_speed_bandit_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14451995
                                        }, {
                                          "alt_text": "Simpson Speed Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1445/1944/simpson_speed_bandit_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 14451944
                                        }, {
                                          "alt_text": "Simpson Speed Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 55,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2472/1030/simpson_speed_bandit_armor_helmet_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 24721030
                                        }, {
                                          "alt_text": "Simpson Speed Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1445/2029/simpson_speed_bandit_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 14452029
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Simpson Speed Bandit Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="288.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>288<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="93" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">93</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="43" data-js="ProductTile.link" data-product-id="1020694" data-skus="10258638,10258639,10258640,10258641,10258642,10258643,10258644,10258645,10258646,10258647,10258648,10258649" href="/motorcycle/agv-pista-gp-rr-carbon-helmet-2206"
                  itemprop="url" title="AGV Pista GP RR Carbon Helmet">
                  <meta content="AGV Pista GP RR Carbon Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020694" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2194/7361/agv_pista_gprr_carbon_helmet_matte_carbon_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV Pista GP RR Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2194/7361/agv_pista_gprr_carbon_helmet_matte_carbon_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2194/7361/agv_pista_gprr_carbon_helmet_matte_carbon_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1020694" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020694" data-js-option-id="3874" style="background-color: black" title="Carbon"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020694" data-js-option-id="13772" style="background-color: black" title="Matte Carbon"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1020694,
                                        [{
                                          "alt_text": "AGV Pista GP RR Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 13772,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2194/7361/agv_pista_gprr_carbon_helmet_matte_carbon_480x480.jpg",
                                          "filename": "",
                                          "id": 21947361
                                        }, {
                                          "alt_text": "AGV Pista GP RR Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 3874,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2194/7242/agv_pista_gprr_carbon_helmet_carbon_480x480.jpg",
                                          "filename": "",
                                          "id": 21947242
                                        }, {
                                          "alt_text": "AGV Pista GP RR Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 13772,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2194/7361/agv_pista_gprr_carbon_helmet_matte_carbon_480x480.jpg",
                                          "filename": "",
                                          "id": 21947361
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV Pista GP RR Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1679.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,679<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="67" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">67</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="44" data-js="ProductTile.link" data-product-id="721440" data-skus="1644498,1644499,1644500,1644501,1644502,1644503" href="/motorcycle/bell-race-star-flex-dlx-helmet" itemprop="url"
                  title="Bell Race Star Flex DLX Helmet">
                  <meta content="Bell Race Star Flex DLX Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="721440" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1015/1033/bell_race_star_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Race Star Flex DLX Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1015/1033/bell_race_star_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1015/1033/bell_race_star_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-721440" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Race Star Flex DLX Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="949.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>949<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="183" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">183</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="45" data-js="ProductTile.link" data-product-id="1092828" data-skus="10394611,10394612,10394613,10394614,10394615,10394616,10394600,10394601,10394602,10394603,10394604,10394605,10394606,10394607,10394608,10394609,10394610"
                  href="/motorcycle/scorpion-exo-ryzer-helmet" itemprop="url" title="Scorpion EXO Ryzer Helmet">
                  <meta content="Scorpion EXO Ryzer Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1092828" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2228/2757/scorpion_exo_ryzer_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO Ryzer Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2228/2757/scorpion_exo_ryzer_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2228/2757/scorpion_exo_ryzer_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1092828" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092828" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092828" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092828" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1092828,
                                        [{
                                          "alt_text": "Scorpion EXO Ryzer Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2757/scorpion_exo_ryzer_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282757
                                        }, {
                                          "alt_text": "Scorpion EXO Ryzer Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2706/scorpion_exo_ryzer_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282706
                                        }, {
                                          "alt_text": "Scorpion EXO Ryzer Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2757/scorpion_exo_ryzer_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282757
                                        }, {
                                          "alt_text": "Scorpion EXO Ryzer Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2740/scorpion_exo_ryzer_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282740
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO Ryzer Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="164.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>164<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>175<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.0" itemprop="ratingValue" />
                           <meta content="20" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">20</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="46" data-js="ProductTile.link" data-product-id="1100701" data-skus="10413579,10413580,10413581,10413582,10413583,10413584,10413585,10413586,10413587,10413588,10413589,10413590,10413561,10413562,10413563,10413564,10413565,10413566,10413555,10413556,10413557,10413558,10413559,10413560,10413567,10413568,10413569,10413570,10413571,10413572,10413573,10413574,10413575,10413576,10413577,10413578"
                  href="/motorcycle/arai-quantum-x-helmet-2025" itemprop="url" title="Arai Quantum-X Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Quantum-X Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1100701" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Quantum-X Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1100701" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1100701,
                                        [{
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375767
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5699/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375699
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3435,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5682/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375682
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3440,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5733/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375733
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375767
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8566,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2464/2148/arai_quantum_x_helmet_diamond_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24642148
                                        }, {
                                          "alt_text": "Arai Quantum-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2337/5818/arai_quantum_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23375818
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Quantum-X Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="139" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">139</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="47" data-js="ProductTile.link" data-product-id="1106472" data-skus="10431479,10431480,10431481,10431482,10431483,10431484,10431622,10431623,10431624,10431625,10431626,10431627,10431553,10431554,10431555,10431556,10431557,10431558,10431547,10431548,10431549,10431550,10431551,10431552"
                  href="/motorcycle/bell-bullitt-gt-helmet" itemprop="url" title="Bell Bullitt GT Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Bell Bullitt GT Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="1106472" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2405/7961/bell_bullitt_gt_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt GT Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2405/7961/bell_bullitt_gt_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2405/7961/bell_bullitt_gt_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106472" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106472" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106472" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106472" data-js-option-id="29709" style="background-color: #000080" title="Vintage Blue"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106472" data-js-option-id="70687" style="background-color: #008000" title="Vintage Olive"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1106472,
                                        [{
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2405/7961/bell_bullitt_gt_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24057961
                                        }, {
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2419/0193/bell_bullitt_gt_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24190193
                                        }, {
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2405/7961/bell_bullitt_gt_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24057961
                                        }, {
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": 29709,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2405/8012/bell_bullitt_gtvbl_helmet_vintage_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 24058012
                                        }, {
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": 70687,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2405/8080/bell_bullitt_gt_volve_helmet_vintage_olive_480x480.jpg",
                                          "filename": "",
                                          "id": 24058080
                                        }, {
                                          "alt_text": "Bell Bullitt GT Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2409/7877/bell_bullitt_gt_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24097877
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt GT Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="499.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>499<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.8" itemprop="ratingValue" />
                           <meta content="5" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">5</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="48" data-js="ProductTile.link" data-product-id="1100716" data-skus="10413697,10413698,10413699,10413700,10413701,10413702,10413703,10413704,10413705,10413706,10413707,10413708,10413679,10413680,10413681,10413682,10413683,10413684,10413673,10413674,10413675,10413676,10413677,10413678,10413686,10413687,10413688,10413693,10413694"
                  href="/motorcycle/arai-corsair-x-black-frost-snell-2025" itemprop="url" title="Arai Corsair-X Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Corsair-X Helmet" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="1100716" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Corsair-X Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1100716" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1100716,
                                        [{
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg",
                                          "filename": "",
                                          "id": 23387980
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7956/arai_corsair_x_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23387956
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7964/arai_corsair_x_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 23387964
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3440,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7972/arai_corsair_x_helmet_aluminum_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 23387972
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 3607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg",
                                          "filename": "",
                                          "id": 23387980
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8566,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2476/9436/arai_corsair_x_helmet_diamond_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24769436
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": 8567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2476/9419/arai_corsair_x_helmet_diamond_white_480x480.jpg",
                                          "filename": "",
                                          "id": 24769419
                                        }, {
                                          "alt_text": "Arai Corsair-X Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2338/7988/arai_corsair_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23387988
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Corsair-X Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="869.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>869<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>879<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.8" itemprop="ratingValue" />
                           <meta content="328" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="5"></span>
                           <span class="product-tile__rating-count product-rating__count">328</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="49" data-js="ProductTile.link" data-product-id="1129231" data-skus="10474595,10474596,10474597,10474598,10474599,10502579,10502580,10502581,10502582,10502583,10474600,10474601,10474602,10474603,10474604"
                  href="/motorcycle/sena-phantom-smart-mesh-bluetooth-helmet" itemprop="url" title="Sena Phantom Smart Mesh Bluetooth Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Sena Phantom Smart Mesh Bluetooth Helmet" itemprop="name" />
                  <meta content="Sena" itemprop="brand" />
                  <meta content="1129231" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2384/7154/sena_phantom_smart_bluetooth_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Sena Phantom Smart Mesh Bluetooth Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2384/7154/sena_phantom_smart_bluetooth_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2384/7154/sena_phantom_smart_bluetooth_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1129231" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1129231" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1129231" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1129231" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1129231,
                                        [{
                                          "alt_text": "Sena Phantom Smart Mesh Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2384/7154/sena_phantom_smart_bluetooth_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23847154
                                        }, {
                                          "alt_text": "Sena Phantom Smart Mesh Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2384/7154/sena_phantom_smart_bluetooth_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23847154
                                        }, {
                                          "alt_text": "Sena Phantom Smart Mesh Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2384/7103/sena_phantom_smart_bluetooth_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23847103
                                        }, {
                                          "alt_text": "Sena Phantom Smart Mesh Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2443/6226/sena_phantom_smart_mesh_bluetooth_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24436226
                                        }, {
                                          "alt_text": "Sena Phantom Smart Mesh Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2384/7018/sena_phantom_smart_bluetooth_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23847018
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Sena Phantom Smart Mesh Bluetooth Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="549.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>549<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.5" itemprop="ratingValue" />
                           <meta content="10" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="3.5"></span>
                           <span class="product-tile__rating-count product-rating__count">10</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="50" data-js="ProductTile.link" data-product-id="323503" data-skus="1082784,1082785,1082786,1082787,1082788,1082789,1082790,1082791,1082792,1082793,1082794,1082795,1082778,1082779,1082780,1082781,1082782,1082783"
                  href="/motorcycle/simpson-ghost-bandit-helmet" itemprop="url" title="Simpson Ghost Bandit Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="Simpson Ghost Bandit Helmet" itemprop="name" />
                  <meta content="Simpson Helmets" itemprop="brand" />
                  <meta content="323503" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/0167/1665/simpson_ghost_bandit_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Simpson Ghost Bandit Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/0167/1665/simpson_ghost_bandit_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/0167/1665/simpson_ghost_bandit_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-323503" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-323503" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-323503" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-323503" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        323503,
                                        [{
                                          "alt_text": "Simpson Ghost Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0167/1665/simpson_ghost_bandit_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 1671665
                                        }, {
                                          "alt_text": "Simpson Ghost Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0346/0636/simpson_ghost_bandit_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 3460636
                                        }, {
                                          "alt_text": "Simpson Ghost Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0346/0602/simpson_ghost_bandit_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 3460602
                                        }, {
                                          "alt_text": "Simpson Ghost Bandit Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0167/1665/simpson_ghost_bandit_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 1671665
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Simpson Ghost Bandit Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="524.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>524<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="232" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">232</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="51" data-js="ProductTile.link" data-product-id="881481" data-skus="10014148,10014150,10014151,10014152,10014153,10407458,10407452,10407453,10014146,10014147,10426768" href="/motorcycle/shark-spartan-gt-helmet-solid"
                  itemprop="url" title="Shark Spartan GT Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Shark Spartan GT Helmet" itemprop="name" />
                  <meta content="Shark Helmets" itemprop="brand" />
                  <meta content="881481" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1496/0735/shark_spartan_gt_helmet_solid_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shark Spartan GT Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1496/0735/shark_spartan_gt_helmet_solid_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1496/0735/shark_spartan_gt_helmet_solid_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-881481" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-881481" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-881481" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-881481" data-js-option-id="28" style="background-color: Red" title="Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-881481" data-js-option-id="7567" style="background-color: grey" title="Matte Anthracite"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        881481,
                                        [{
                                          "alt_text": "Shark Spartan GT Helmet",
                                          "dimensions": null,
                                          "option_id": 7567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1496/0735/shark_spartan_gt_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 14960735
                                        }, {
                                          "alt_text": "Shark Spartan GT Helmet",
                                          "dimensions": null,
                                          "option_id": 28,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2256/2783/shark_spartan_gt_carbon_full_face_hemet_blank_480x480.jpg",
                                          "filename": "",
                                          "id": 22562783
                                        }, {
                                          "alt_text": "Shark Spartan GT Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1496/0786/shark_spartan_gt_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 14960786
                                        }, {
                                          "alt_text": "Shark Spartan GT Helmet",
                                          "dimensions": null,
                                          "option_id": 7567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1496/0735/shark_spartan_gt_helmet_solid_480x480.jpg",
                                          "filename": "",
                                          "id": 14960735
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shark Spartan GT Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="254.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>254<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>599.99<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 58%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="16" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">16</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="52" data-js="ProductTile.link" data-product-id="1107901" data-skus="10435487,10435488,10435489,10435490,10435491,10435482,10435483,10435484,10435485,10435486" href="/motorcycle/scorpion-exo-st1400-evo-helmet"
                  itemprop="url" title="Scorpion EXO ST1400 Evo Helmet">
                  <meta content="Scorpion EXO ST1400 Evo Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1107901" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2300/4482/scorpion_exost1400_evo_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO ST1400 Evo Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2300/4482/scorpion_exost1400_evo_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2300/4482/scorpion_exost1400_evo_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1107901" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1107901" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1107901" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1107901,
                                        [{
                                          "alt_text": "Scorpion EXO ST1400 Evo Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2300/4482/scorpion_exost1400_evo_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23004482
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2300/4482/scorpion_exost1400_evo_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23004482
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2300/4431/scorpion_exost1400_evo_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 23004431
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO ST1400 Evo Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="479.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>479<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="17" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">17</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="53" data-js="ProductTile.link" data-product-id="858116" data-skus="1828948,1828949,1828950,1828951,1828952,1828953" href="/motorcycle/shoei-rf-1400-dedicated-2-helmet" itemprop="url"
                  title="Shoei RF-1400 Dedicated 2 Helmet">
                  <meta content="Shoei RF-1400 Dedicated 2 Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="858116" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1499/2572/shoei_rf1400_dedicated2_helmet_black_white_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Dedicated 2 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1499/2572/shoei_rf1400_dedicated2_helmet_black_white_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1499/2572/shoei_rf1400_dedicated2_helmet_black_white_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-858116" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Dedicated 2 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="54" data-js="ProductTile.link" data-product-id="1106760" data-skus="10432165,10432166,10432167,10432168,10432169,10432170,10432171,10432172,10432173,10432174,10432175,10432176,10432177,10432178,10432179,10432180,10432181,10432182"
                  href="/motorcycle/agv-k1-s-fastlap-helmet" itemprop="url" title="AGV K1 S Fastlap Helmet">
                  <meta content="AGV K1 S Fastlap Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1106760" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2370/6218/agvk1_s_fastlap_helmet_black_grey_red_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K1 S Fastlap Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2370/6218/agvk1_s_fastlap_helmet_black_grey_red_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2370/6218/agvk1_s_fastlap_helmet_black_grey_red_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106760" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106760" data-js-option-id="7204" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7204/square/7204.gif);
                                    " title="Black/Grey/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106760" data-js-option-id="20734" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/20734/square/20734.gif);
                                    " title="Black/Purple/Pink"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106760" data-js-option-id="6313" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/6313/square/6313.gif);
                                    " title="Black/Red/Blue"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1106760,
                                        [{
                                          "alt_text": "AGV K1 S Fastlap Helmet",
                                          "dimensions": null,
                                          "option_id": 7204,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/6218/agvk1_s_fastlap_helmet_black_grey_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23706218
                                        }, {
                                          "alt_text": "AGV K1 S Fastlap Helmet",
                                          "dimensions": null,
                                          "option_id": 6313,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2405/2083/agvk1_s_fastlap_helmet_black_red_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 24052083
                                        }, {
                                          "alt_text": "AGV K1 S Fastlap Helmet",
                                          "dimensions": null,
                                          "option_id": 7204,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/6218/agvk1_s_fastlap_helmet_black_grey_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23706218
                                        }, {
                                          "alt_text": "AGV K1 S Fastlap Helmet",
                                          "dimensions": null,
                                          "option_id": 20734,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/5963/agvk1_s_fastlap_helmet_black_purple_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 23705963
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K1 S Fastlap Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="274.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>274<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="103" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">103</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="55" data-js="ProductTile.link" data-product-id="930038" data-skus="10107718,10107719,10107720,10107721" href="/motorcycle/bell-bullitt-command-helmet" itemprop="url" title="Bell Bullitt Command Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Command Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="930038" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1851/6768/bell_bullitt_command_helmet_vintage_white_oxblood_blue_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Command Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1851/6768/bell_bullitt_command_helmet_vintage_white_oxblood_blue_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1851/6768/bell_bullitt_command_helmet_vintage_white_oxblood_blue_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-930038" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Command Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="263.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>263<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>439.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 40%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="443" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">443</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="56" data-js="ProductTile.link" data-product-id="1137798" data-skus="10490920,10490921,10490922,10490923,10490924,10490925,10490902,10490903,10490904,10490905,10490906,10490907,10490914,10490915,10490916,10490917,10490918,10490919,10490890,10490891,10490892,10490893,10490894,10490895,10490908,10490909,10490910,10490911,10490912,10490913,10490896,10490897,10490898,10490899,10490900,10490901"
                  href="/motorcycle/hjc-rpha-12n-helmet" itemprop="url" title="HJC RPHA 12N Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="HJC RPHA 12N Helmet" itemprop="name" />
                  <meta content="HJC Helmets" itemprop="brand" />
                  <meta content="1137798" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2403/8041/hjcrpha12_n_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="HJC RPHA 12N Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2403/8041/hjcrpha12_n_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2403/8041/hjcrpha12_n_helmet_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-1137798" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="40871" style="background-color: #808080" title="Nardo Grey"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="68466" style="background-color: #0000ff" title="Semi-Flat Metallic Blue"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1137798" data-js-option-id="34597" style="background-color: #808080" title="Semi-Flat Titanium"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1137798,
                                        [{
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/8041/hjcrpha12_n_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24038041
                                        }, {
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/8002/hjcrpha12_n_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24038002
                                        }, {
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/7769/hjcrpha12_n_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 24037769
                                        }, {
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/8041/hjcrpha12_n_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24038041
                                        }, {
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 34597,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/8058/hjcrpha12_n_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24038058
                                        }, {
                                          "alt_text": "HJC RPHA 12N Helmet",
                                          "dimensions": null,
                                          "option_id": 68466,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2403/8024/hjcrpha12_n_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24038024
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           HJC RPHA 12N Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="479.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>479<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>494<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.0" itemprop="ratingValue" />
                           <meta content="6" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">6</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="57" data-js="ProductTile.link" data-product-id="1112315" data-skus="10443924,10443925,10443926,10443927,10443928,10443929,10443912,10443913,10443914,10443915,10443916,10443917,10443918,10443919,10443920,10443921,10443922,10443923"
                  href="/motorcycle/shoei-rf-1400-beaut-helmet" itemprop="url" title="Shoei RF-1400 Beaut Helmet">
                  <meta content="Shoei RF-1400 Beaut Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1112315" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2322/7720/shoei_rf1400_beaut_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Beaut Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2322/7720/shoei_rf1400_beaut_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2322/7720/shoei_rf1400_beaut_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1112315" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112315" data-js-option-id="179" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/179/square/179.gif);
                                    " title="Black/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112315" data-js-option-id="4571" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4571/square/4571.gif);
                                    " title="Red/Black/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112315" data-js-option-id="12143" style="background-color: yellow" title="Hi-Viz Yellow/Black/White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1112315,
                                        [{
                                          "alt_text": "Shoei RF-1400 Beaut Helmet",
                                          "dimensions": null,
                                          "option_id": 179,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/7720/shoei_rf1400_beaut_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23227720
                                        }, {
                                          "alt_text": "Shoei RF-1400 Beaut Helmet",
                                          "dimensions": null,
                                          "option_id": 179,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/7720/shoei_rf1400_beaut_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23227720
                                        }, {
                                          "alt_text": "Shoei RF-1400 Beaut Helmet",
                                          "dimensions": null,
                                          "option_id": 4571,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/7635/shoei_rf1400_beaut_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23227635
                                        }, {
                                          "alt_text": "Shoei RF-1400 Beaut Helmet",
                                          "dimensions": null,
                                          "option_id": 12143,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/7703/shoei_rf1400_beaut_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23227703
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Beaut Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="58" data-js="ProductTile.link" data-product-id="1041051" data-skus="10293938,10293939,10293940,10293941,10293934,10293935,10293936,10293937,10293942,10293943,10293944,10293945" href="/motorcycle/bell-bullitt-vader-helmet"
                  itemprop="url" title="Bell Bullitt Vader Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Vader Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="1041051" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2130/2986/bell_bullitt_vader_helmet_gloss_grey_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Vader Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2130/2986/bell_bullitt_vader_helmet_gloss_grey_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2130/2986/bell_bullitt_vader_helmet_gloss_grey_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1041051" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1041051" data-js-option-id="59221" style="background-color: #808080" title="Gloss Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1041051" data-js-option-id="59978" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/59978/square/59978.png);
                                    " title="Gloss White/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1041051" data-js-option-id="59977" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/59977/square/59977.png);
                                    " title="Gloss Blue/Orange"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1041051,
                                        [{
                                          "alt_text": "Bell Bullitt Vader Helmet",
                                          "dimensions": null,
                                          "option_id": 59221,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2130/2986/bell_bullitt_vader_helmet_gloss_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 21302986
                                        }, {
                                          "alt_text": "Bell Bullitt Vader Helmet",
                                          "dimensions": null,
                                          "option_id": 59221,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2130/2986/bell_bullitt_vader_helmet_gloss_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 21302986
                                        }, {
                                          "alt_text": "Bell Bullitt Vader Helmet",
                                          "dimensions": null,
                                          "option_id": 59977,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2130/2867/bell_bullitt_vader_helmet_gloss_blue_orange_480x480.jpg",
                                          "filename": "",
                                          "id": 21302867
                                        }, {
                                          "alt_text": "Bell Bullitt Vader Helmet",
                                          "dimensions": null,
                                          "option_id": 59978,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2130/3241/bell_bullitt_vader_helmet_gloss_white_red_480x480.jpg",
                                          "filename": "",
                                          "id": 21303241
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Vader Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="219.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>219<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>439.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 50%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="443" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">443</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="59" data-js="ProductTile.link" data-product-id="1135881" data-skus="10486741,10486742,10486743,10486744,10486745,10486746,10486747" href="/motorcycle/icon-ultraflite-misanthrope-helmet"
                  itemprop="url" title="Icon Ultraflite Misanthrope Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Icon Ultraflite Misanthrope Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1135881" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2396/3161/icon_ultraflite_misanthrope_helmet_black_red_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Ultraflite Misanthrope Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2396/3161/icon_ultraflite_misanthrope_helmet_black_red_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2396/3161/icon_ultraflite_misanthrope_helmet_black_red_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1135881" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Ultraflite Misanthrope Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="375.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>375<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="3" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">3</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="60" data-js="ProductTile.link" data-product-id="1040488" data-skus="10293137,10293138,10293139,10293140,10293141,10293142,10293143,10293144,10293145,10293146,10293127,10293128,10293129,10293130,10293131,10293152,10293153,10293154,10293155,10293156,10293147,10293148,10293149,10293150,10293151,10394549,10394550,10394551,10394552,10394553"
                  href="/motorcycle/scorpion-exo-xt9000-trailhead-helmet" itemprop="url" title="Scorpion EXO-XT9000 Trailhead Helmet">
                  <meta content="Scorpion EXO-XT9000 Trailhead Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1040488" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2475/8947/scorpion_exoxt9000_trailhead_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-XT9000 Trailhead Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2475/8947/scorpion_exoxt9000_trailhead_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2475/8947/scorpion_exoxt9000_trailhead_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1040488" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="9804" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/9804/square/9804.gif);
                                    " title="Black/Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="1085" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/1085/square/1085.gif);
                                    " title="Black/Orange/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="7574" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7574/square/7574.gif);
                                    " title="Black/White/Blue"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="7575" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7575/square/7575.gif);
                                    " title="Black/Gold/White"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="60474" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/60474/square/60474.png);
                                    " title="Black/Hi-Viz Yellow/White"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040488" data-js-option-id="1144" style="background-color: red" title="Dark Red"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1040488,
                                        [{
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 7575,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/8947/scorpion_exoxt9000_trailhead_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24758947
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 1085,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1945/5862/scorpion_exoxt9000_trailhead_helmet_black_orange_white_480x480.jpg",
                                          "filename": "",
                                          "id": 19455862
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 1144,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9066/scorpion_exoxt9000_trailhead_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759066
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 7574,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1945/5743/scorpion_exoxt9000_trailhead_helmet_black_white_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 19455743
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 7575,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/8947/scorpion_exoxt9000_trailhead_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24758947
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 9804,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1945/5777/scorpion_exoxt9000_trailhead_helmet_black_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 19455777
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Trailhead Helmet",
                                          "dimensions": null,
                                          "option_id": 60474,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9015/scorpion_exoxt9000_trailhead_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759015
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-XT9000 Trailhead Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="589.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>589<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="38" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">38</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="61" data-js="ProductTile.link" data-product-id="259702" data-skus="935363,935364,935365,935366,935367,935368,1289704,935357,935358,935359,935360,935361,935362,1289703" href="/motorcycle/bell-qualifier-helmet"
                  itemprop="url" title="Bell Qualifier Helmet">
                  <meta content="Bell Qualifier Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="259702" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/0661/2401/bell_qualifier_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Qualifier Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/0661/2401/bell_qualifier_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/0661/2401/bell_qualifier_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-259702" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-259702" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-259702" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        259702,
                                        [{
                                          "alt_text": "Bell Qualifier Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0661/2401/bell_qualifier_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 6612401
                                        }, {
                                          "alt_text": "Bell Qualifier Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0661/2401/bell_qualifier_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 6612401
                                        }, {
                                          "alt_text": "Bell Qualifier Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/0661/2418/bell_qualifier_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 6612418
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Qualifier Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="119.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>119<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>149<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="580" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">580</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="62" data-js="ProductTile.link" data-product-id="828722" data-skus="1781459,1781460,1781461,1781462,1781463,1781464,1781489,1781490,1781491,1781492,1781493,1781494,1781453,1781454,1781455,1781456,1781457,1781458,1781477,1781478,1781479,1781480,1781481,1781482,1781471,1781472,1781473,1781474,1781475,1781476,1781465,1781466,1781467,1781468,1781469,1781470"
                  href="/motorcycle/arai-signet-x-helmet-2020" itemprop="url" title="Arai Signet-X Helmet - Snell 2020">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--top-rated">
                        Top Rated
                     </div>
                  </div>
                  <meta content="Arai Signet-X Helmet - Snell 2020" itemprop="name" />
                  <meta content="Arai Helmets" itemprop="brand" />
                  <meta content="828722" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Arai Signet-X Helmet - Snell 2020" class="product-tile__image" src="https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-828722" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span><span class="product-tile__swatch-more-count">+2</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        828722,
                                        [{
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 3435,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 13622188
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2239/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 13622239
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 3435,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 13622188
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 3440,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2273/arai_signet_x_helmet_aluminum_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 13622273
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 6147,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2205/arai_signet_x_helmet_frost_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13622205
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 8566,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2307/arai_signet_x_helmet_diamond_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13622307
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": 8567,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2324/arai_signet_x_helmet_diamond_white_480x480.jpg",
                                          "filename": "",
                                          "id": 13622324
                                        }, {
                                          "alt_text": "Arai Signet-X Helmet - Snell 2020",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1362/2358/arai_signet_x_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 13622358
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Arai Signet-X Helmet - Snell 2020
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="291" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">291</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="63" data-js="ProductTile.link" data-product-id="1031364" data-skus="10277154,10277155,10277156,10277157,10277158,10277159,10277160,10277161,10277146,10277147,10277148,10277149,10277150,10277151,10277152,10277153,10277162,10277163,10277164,10277165,10277166,10277167,10277168,10277169"
                  href="/motorcycle/hjc-c10-helmet" itemprop="url" title="HJC C10 Helmet">
                  <meta content="HJC C10 Helmet" itemprop="name" />
                  <meta content="HJC Helmets" itemprop="brand" />
                  <meta content="1031364" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1907/2595/hjcc10_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="HJC C10 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1907/2595/hjcc10_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1907/2595/hjcc10_helmet_black_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-1031364" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1031364" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1031364" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1031364" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1031364,
                                        [{
                                          "alt_text": "HJC C10 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1907/2595/hjcc10_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19072595
                                        }, {
                                          "alt_text": "HJC C10 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1907/2629/hjcc10_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19072629
                                        }, {
                                          "alt_text": "HJC C10 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1907/2612/hjcc10_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19072612
                                        }, {
                                          "alt_text": "HJC C10 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1907/2595/hjcc10_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19072595
                                        }, {
                                          "alt_text": "HJC C10 Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2481/8141/hjcc10_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24818141
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           HJC C10 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="109.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>109<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>124<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.9" itemprop="ratingValue" />
                           <meta content="33" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">33</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="64" data-js="ProductTile.link" data-product-id="991089" data-skus="10211087,10211088,10211089,10211090" href="/motorcycle/bell-bullitt-carbon-tt-helmet" itemprop="url" title="Bell Bullitt Carbon TT Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Carbon TT Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="991089" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1948/1382/bell_bullitt_carbon_tt_helmet_gloss_black_gold_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Carbon TT Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1948/1382/bell_bullitt_carbon_tt_helmet_gloss_black_gold_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1948/1382/bell_bullitt_carbon_tt_helmet_gloss_black_gold_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-991089" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Carbon TT Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="399.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>399<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>669.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 40%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="88" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">88</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="65" data-js="ProductTile.link" data-product-id="1113923" data-skus="10446642,10446643,10446644,10446645,10446646,10446647,10446648,10446649,10446650,10446651,10446637,10446638,10446639,10446640,10446641,10446657,10446658,10446659,10446660,10446661,10446652,10446653,10446654,10446655,10446656"
                  href="/motorcycle/scorpion-exo-t520-zuse-helmet" itemprop="url" title="Scorpion EXO-T520 Zuse Helmet">
                  <meta content="Scorpion EXO-T520 Zuse Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113923" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2330/7407/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-T520 Zuse Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2330/7407/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2330/7407/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1113923" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113923" data-js-option-id="26173" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/26173/square/26173.png);
                                    " title="White/Hi-Viz Yellow"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113923" data-js-option-id="226" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/226/square/226.gif);
                                    " title="Black/Grey/White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113923" data-js-option-id="181" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/181/square/181.gif);
                                    " title="Black/Orange"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113923" data-js-option-id="14332" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/14332/square/14332.gif);
                                    " title="Black/Hi-Viz Yellow"></span><span class="product-tile__swatch-more-count">+1</span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113923" data-js-option-id="217" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/217/square/217.gif);
                                    " title="White/Blue/Red"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1113923,
                                        [{
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 26173,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/7407/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg",
                                          "filename": "",
                                          "id": 23307407
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 181,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/7356/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg",
                                          "filename": "",
                                          "id": 23307356
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 217,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/0889/scorpion_exot520_zuse_helmet_white_blue_red_480x480.jpg",
                                          "filename": "",
                                          "id": 24750889
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 226,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/7390/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg",
                                          "filename": "",
                                          "id": 23307390
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 14332,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/7424/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg",
                                          "filename": "",
                                          "id": 23307424
                                        }, {
                                          "alt_text": "Scorpion EXO-T520 Zuse Helmet",
                                          "dimensions": null,
                                          "option_id": 26173,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/7407/scorpion_exot520_zuse_helmet_white_hi_viz_yellow_480x480.jpg",
                                          "filename": "",
                                          "id": 23307407
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-T520 Zuse Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="244.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>244<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="118" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">118</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="66" data-js="ProductTile.link" data-product-id="291465" data-skus="1001381,1001382,1001383,1001384,1001385,1072288" href="/motorcycle/bell-bullitt-carbon-helmet" itemprop="url" title="Bell Bullitt Carbon Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Carbon Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="291465" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2258/0148/bell_bullitt_carbon_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2258/0148/bell_bullitt_carbon_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2258/0148/bell_bullitt_carbon_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-291465" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="334.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>334<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>669.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 50%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="88" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">88</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="67" data-js="ProductTile.link" data-product-id="814969" data-skus="1760436,1760437,1760438,1760439,1760440,1760441,1760442,10488562,1760443,1760444,1760445,1760446,1760447,1760448,1760449,1760520,1760521,1760522,1760523,1760524,1760525,1760526"
                  href="/motorcycle/ls2-assault-helmet" itemprop="url" title="LS2 Assault Helmet">
                  <div class="product-tile__sash product-tile__sash--sale">
                     <div class="product-tile__sash-message product-tile__sash-message--sale">
                        Sale
                     </div>
                  </div>
                  <meta content="LS2 Assault Helmet" itemprop="name" />
                  <meta content="LS2 Helmets" itemprop="brand" />
                  <meta content="814969" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1320/5753/ls2_assault_helmet_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="LS2 Assault Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1320/5753/ls2_assault_helmet_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1320/5753/ls2_assault_helmet_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-814969" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-814969" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-814969" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-814969" data-js-option-id="39930" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/39930/square/39930.png);
                                    " title="Brushed Alloy"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        814969,
                                        [{
                                          "alt_text": "LS2 Assault Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1320/5753/ls2_assault_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13205753
                                        }, {
                                          "alt_text": "LS2 Assault Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1320/5620/ls2_assault_helmet_white_480x480.jpg",
                                          "filename": "",
                                          "id": 13205620
                                        }, {
                                          "alt_text": "LS2 Assault Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1320/5753/ls2_assault_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 13205753
                                        }, {
                                          "alt_text": "LS2 Assault Helmet",
                                          "dimensions": null,
                                          "option_id": 39930,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2431/6382/ls2_assault_helmet_brushed_alloy_480x480.jpg",
                                          "filename": "",
                                          "id": 24316382
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           LS2 Assault Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="143.98" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>143<sup class="mny__s">.</sup><sup>98</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>163<sup class="mny__s">.</sup><sup>98</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was mny__rng"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>179.98<span class="mny__c"></span></span><span data-js="Money.parsedMoney"><span
                                 class="mny__c">$</span>199.98<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 18%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="85" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">85</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="68" data-js="ProductTile.link" data-product-id="1067321" data-skus="10343186,10343187,10343188,10343189,10343190,10343191,10343192,10447167,10447168,10447169,10447170,10447171,10447172,10447173,10343179,10343180,10343181,10343182,10343183,10343184,10343185"
                  href="/motorcycle/sedici-strada-3-animale-helmet" itemprop="url" title="Sedici Strada 3 Animale Helmet">
                  <meta content="Sedici Strada 3 Animale Helmet" itemprop="name" />
                  <meta content="Sedici" itemprop="brand" />
                  <meta content="1067321" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2417/7178/sedici_strada3_animale_helmet_pink_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Sedici Strada 3 Animale Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2417/7178/sedici_strada3_animale_helmet_pink_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2417/7178/sedici_strada3_animale_helmet_pink_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1067321" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067321" data-js-option-id="55" style="background-color: grey" title="Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067321" data-js-option-id="31" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/31/square/31.gif);
                                    " title="Pink"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1067321" data-js-option-id="4966" style="background-color: blue" title="Matte Blue"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1067321,
                                        [{
                                          "alt_text": "Sedici Strada 3 Animale Helmet",
                                          "dimensions": null,
                                          "option_id": 31,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2417/7178/sedici_strada3_animale_helmet_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 24177178
                                        }, {
                                          "alt_text": "Sedici Strada 3 Animale Helmet",
                                          "dimensions": null,
                                          "option_id": 31,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2417/7178/sedici_strada3_animale_helmet_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 24177178
                                        }, {
                                          "alt_text": "Sedici Strada 3 Animale Helmet",
                                          "dimensions": null,
                                          "option_id": 55,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2216/8328/sedici_strada3_animale_helmet_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 22168328
                                        }, {
                                          "alt_text": "Sedici Strada 3 Animale Helmet",
                                          "dimensions": null,
                                          "option_id": 4966,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2216/8022/sedici_strada3_animale_helmet_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 22168022
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Sedici Strada 3 Animale Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="339.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>339<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <label class="product-tile__clp-savings product-tile__clp-savings--non-member js-ClpInfoPanel-plpToggle" data-savings="$34.00" for="rpm-sales-pitch-panel">
                                 <div class="product-tile__clp-savings-tac"></div>
                                 <div class="product-tile__clp-savings-txt">
                                    <span class="product-tile__clp-savings-mem">Members</span>
                                    <span class="product-tile__clp-savings-sav">save</span>
                                    <span class="product-tile__clp-savings-per">10%</span>
                                 </div>
                              </label>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="158" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">158</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="69" data-js="ProductTile.link" data-product-id="1098478" data-skus="10407752,10407753,10407754,10407755,10407756,10407757,10407758,10407745,10407746,10407747,10407748,10407749,10407750,10407751"
                  href="/motorcycle/ls2-rapid-ii-helmet" itemprop="url" title="LS2 Rapid II Helmet">
                  <div class="product-tile__sash product-tile__sash--sale">
                     <div class="product-tile__sash-message product-tile__sash-message--sale">
                        Sale
                     </div>
                  </div>
                  <meta content="LS2 Rapid II Helmet" itemprop="name" />
                  <meta content="LS2 Helmets" itemprop="brand" />
                  <meta content="1098478" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2254/5494/ls2_rapid_ii_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="LS2 Rapid II Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2254/5494/ls2_rapid_ii_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2254/5494/ls2_rapid_ii_helmet_480x480.jpg" height="480"
                           id="js-ProductImageCrossfader-image-1098478" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1098478" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1098478" data-js-option-id="4891" style="background-color: white" title="Gloss White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1098478,
                                        [{
                                          "alt_text": "LS2 Rapid II Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2254/5494/ls2_rapid_ii_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22545494
                                        }, {
                                          "alt_text": "LS2 Rapid II Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2254/5494/ls2_rapid_ii_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22545494
                                        }, {
                                          "alt_text": "LS2 Rapid II Helmet",
                                          "dimensions": null,
                                          "option_id": 4891,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2254/5477/ls2_rapid_ii_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22545477
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           LS2 Rapid II Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="87.98" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>87<sup class="mny__s">.</sup><sup>98</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>109.98<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 20%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="17" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">17</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="70" data-js="ProductTile.link" data-product-id="1113958" data-skus="10447075,10447076,10447077,10447078,10447079,10447060,10447061,10447062,10447063,10447064,10447065,10447066,10447067,10447068,10447069,10447070,10447071,10447072,10447073,10447074"
                  href="/motorcycle/scorpion-exo-st1400-evo-hex-helmet" itemprop="url" title="Scorpion EXO ST1400 Evo Hex Helmet">
                  <meta content="Scorpion EXO ST1400 Evo Hex Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113958" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2330/8512/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO ST1400 Evo Hex Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2330/8512/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2330/8512/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1113958" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113958" data-js-option-id="78" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/78/square/78.gif);
                                    " title="Black/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113958" data-js-option-id="27734" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/27734/square/27734.png);
                                    " title="Matte Grey/Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113958" data-js-option-id="30943" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/30943/square/30943.png);
                                    " title="Black/Blue/Hi-Viz Yellow"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113958" data-js-option-id="69461" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/69461/square/69461.png);
                                    " title="Black/Matte Blue/White"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1113958,
                                        [{
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": 30943,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/8512/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23308512
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": 78,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/8495/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23308495
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": 27734,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/8529/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23308529
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": 30943,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/8512/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23308512
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": 69461,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2330/8546/scorpion_exost1400_evo_hex_helmet_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23308546
                                        }, {
                                          "alt_text": "Scorpion EXO ST1400 Evo Hex Helmet",
                                          "dimensions": null,
                                          "option_id": null,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/0957/scorpion_exost1400_evo_hex_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24750957
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO ST1400 Evo Hex Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="499.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>499<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="17" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">17</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="71" data-js="ProductTile.link" data-product-id="930042" data-skus="10107753,10107754,10107755,10107756" href="/motorcycle/bell-bullitt-stripes-helmet" itemprop="url" title="Bell Bullitt Stripes Helmet ">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt Stripes Helmet " itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="930042" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1851/7210/bell_bullitt_stripes_helmet_pearl_white_oxblood_blue_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt Stripes Helmet " class="product-tile__image" src="https://www.revzilla.com/product_images/1851/7210/bell_bullitt_stripes_helmet_pearl_white_oxblood_blue_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1851/7210/bell_bullitt_stripes_helmet_pearl_white_oxblood_blue_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-930042" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt Stripes Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="219.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>219<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>439.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 50%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="443" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">443</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="72" data-js="ProductTile.link" data-product-id="1055322" data-skus="10321778,10321779,10321780,10321781,10321782,10321783,10321790,10321791,10321792,10321793,10321794,10321795,10321784,10321785,10321786,10321787,10321788,10321789"
                  href="/motorcycle/shoei-x-15-proxy-helmet" itemprop="url" title="Shoei X-15 Proxy Helmet">
                  <meta content="Shoei X-15 Proxy Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1055322" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2478/0979/shoei_x15_proxy_helmet_black_yellow_blue_pink_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei X-15 Proxy Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2478/0979/shoei_x15_proxy_helmet_black_yellow_blue_pink_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2478/0979/shoei_x15_proxy_helmet_black_yellow_blue_pink_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1055322" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055322" data-js-option-id="62588" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/62588/square/62588.png);
                                    " title="Black/Yellow/Blue/Pink"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055322" data-js-option-id="4517" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4517/square/4517.gif);
                                    " title="White/Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1055322" data-js-option-id="1105" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/1105/square/1105.gif);
                                    " title="White/Red/Blue"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1055322,
                                        [{
                                          "alt_text": "Shoei X-15 Proxy Helmet",
                                          "dimensions": null,
                                          "option_id": 62588,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2478/0979/shoei_x15_proxy_helmet_black_yellow_blue_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 24780979
                                        }, {
                                          "alt_text": "Shoei X-15 Proxy Helmet",
                                          "dimensions": null,
                                          "option_id": 62588,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2478/0979/shoei_x15_proxy_helmet_black_yellow_blue_pink_480x480.jpg",
                                          "filename": "",
                                          "id": 24780979
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei X-15 Proxy Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1049.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,049<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="71" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">71</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="73" data-js="ProductTile.link" data-product-id="1106880" data-skus="10432464,10432465,10432466,10432467,10432468,10432469" href="/motorcycle/agv-k1-s-us-flag-helmet" itemprop="url"
                  title="AGV K1 S US Flag Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="AGV K1 S US Flag Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1106880" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2442/9358/agvk1_sus_flag_helmet_matte_black_red_white_blue_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K1 S US Flag Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2442/9358/agvk1_sus_flag_helmet_matte_black_red_white_blue_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2442/9358/agvk1_sus_flag_helmet_matte_black_red_white_blue_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106880" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K1 S US Flag Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="319.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>319<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="103" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">103</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="74" data-js="ProductTile.link" data-product-id="949909" data-skus="10136284,10136289,10136290" href="/motorcycle/agv-pista-gp-rr-limited-edition-rossi-misano-2-2021-helmet" itemprop="url"
                  title="AGV Pista GP RR Limited Edition Rossi Misano 2 2021 Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="AGV Pista GP RR Limited Edition Rossi Misano 2 2021 Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="949909" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2095/0630/agv_pista_gprr_limited_edition_rossi_misano22021_helmet_yellow_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV Pista GP RR Limited Edition Rossi Misano 2 2021 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2095/0630/agv_pista_gprr_limited_edition_rossi_misano22021_helmet_yellow_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2095/0630/agv_pista_gprr_limited_edition_rossi_misano22021_helmet_yellow_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-949909" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV Pista GP RR Limited Edition Rossi Misano 2 2021 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="999.98" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>999<sup class="mny__s">.</sup><sup>98</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>1,749.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 43%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="67" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">67</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="75" data-js="ProductTile.link" data-product-id="1118619" data-skus="10455884,10455885,10455886,10455887,10455888,10455879,10455880,10455881,10455882,10455883,10455889,10455890,10455891,10455892,10455893,10455874,10455875,10455876,10455877,10455878"
                  href="/motorcycle/509-mach-v-commander-bluetooth-helmet" itemprop="url" title="509 Mach V Commander Bluetooth Helmet">
                  <meta content="509 Mach V Commander Bluetooth Helmet" itemprop="name" />
                  <meta content="509" itemprop="brand" />
                  <meta content="1118619" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2350/4373/509_mach_v_commander_helmet_redline_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="509 Mach V Commander Bluetooth Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2350/4373/509_mach_v_commander_helmet_redline_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2350/4373/509_mach_v_commander_helmet_redline_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1118619" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1118619" data-js-option-id="15088" style="background-color: red" title="Racing Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1118619" data-js-option-id="22462" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/22462/square/22462.png);
                                    " title="Redline"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1118619" data-js-option-id="3793" style="background-color: grey" title="Gunmetal Grey"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1118619" data-js-option-id="70134" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/70134/square/70134.png);
                                    " title="Renegade"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1118619,
                                        [{
                                          "alt_text": "509 Mach V Commander Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 22462,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2350/4373/509_mach_v_commander_helmet_redline_480x480.jpg",
                                          "filename": "",
                                          "id": 23504373
                                        }, {
                                          "alt_text": "509 Mach V Commander Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 3793,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2350/4135/509_mach_v_commander_helmet_gunmetal_grey_480x480.jpg",
                                          "filename": "",
                                          "id": 23504135
                                        }, {
                                          "alt_text": "509 Mach V Commander Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 15088,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2350/4050/509_mach_v_commander_helmet_racing_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23504050
                                        }, {
                                          "alt_text": "509 Mach V Commander Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 22462,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2350/4373/509_mach_v_commander_helmet_redline_480x480.jpg",
                                          "filename": "",
                                          "id": 23504373
                                        }, {
                                          "alt_text": "509 Mach V Commander Bluetooth Helmet",
                                          "dimensions": null,
                                          "option_id": 70134,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2350/4305/509_mach_v_commander_helmet_renegade_480x480.jpg",
                                          "filename": "",
                                          "id": 23504305
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           509 Mach V Commander Bluetooth Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.6" itemprop="ratingValue" />
                           <meta content="5" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="3.5"></span>
                           <span class="product-tile__rating-count product-rating__count">5</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="76" data-js="ProductTile.link" data-product-id="1119482" data-skus="10457328,10457329,10457330,10457331,10457332,10457333" href="/motorcycle/hjc-rpha-12-venom-helmet" itemprop="url"
                  title="HJC RPHA 12N Venom Helmet">
                  <meta content="HJC RPHA 12N Venom Helmet" itemprop="name" />
                  <meta content="HJC Helmets" itemprop="brand" />
                  <meta content="1119482" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2354/8817/hjcrpha12_venom_helmet_red_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="HJC RPHA 12N Venom Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2354/8817/hjcrpha12_venom_helmet_red_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2354/8817/hjcrpha12_venom_helmet_red_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1119482" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           HJC RPHA 12N Venom Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="649.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>649<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>654<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="39" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">39</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="77" data-js="ProductTile.link" data-product-id="1112326" data-skus="10444059,10444060,10444061,10444062,10444063,10444064,10444047,10444048,10444049,10444050,10444051,10444052,10444053,10444054,10444055,10444056,10444057,10444058"
                  href="/motorcycle/shoei-gt-air-3-realm-helmet" itemprop="url" title="Shoei GT-Air 3 Realm Helmet">
                  <meta content="Shoei GT-Air 3 Realm Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1112326" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2322/8723/shoei_gt_air3_realm_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei GT-Air 3 Realm Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2322/8723/shoei_gt_air3_realm_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2322/8723/shoei_gt_air3_realm_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1112326" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112326" data-js-option-id="4635" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4635/square/4635.gif);
                                    " title="Blue/White/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112326" data-js-option-id="4582" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4582/square/4582.gif);
                                    " title="Red/Black/Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1112326" data-js-option-id="69180" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/69180/square/69180.png);
                                    " title="Whtie/Black/Silver"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1112326,
                                        [{
                                          "alt_text": "Shoei GT-Air 3 Realm Helmet",
                                          "dimensions": null,
                                          "option_id": 4635,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8723/shoei_gt_air3_realm_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228723
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Realm Helmet",
                                          "dimensions": null,
                                          "option_id": 4582,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8774/shoei_gt_air3_realm_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228774
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Realm Helmet",
                                          "dimensions": null,
                                          "option_id": 4635,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8723/shoei_gt_air3_realm_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228723
                                        }, {
                                          "alt_text": "Shoei GT-Air 3 Realm Helmet",
                                          "dimensions": null,
                                          "option_id": 69180,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2322/8757/shoei_gt_air3_realm_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 23228757
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei GT-Air 3 Realm Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="849.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>849<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="34" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">34</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="78" data-js="ProductTile.link" data-product-id="1072166" data-skus="10353658,10353660,10353661" href="/motorcycle/hjc-rpha-12-spasso-helmet" itemprop="url" title="HJC RPHA 12 Spasso Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="HJC RPHA 12 Spasso Helmet" itemprop="name" />
                  <meta content="HJC Helmets" itemprop="brand" />
                  <meta content="1072166" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2152/0315/hjc_helmets_rpha_spasso_mc3_h_blue_red_yellow_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="HJC RPHA 12 Spasso Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2152/0315/hjc_helmets_rpha_spasso_mc3_h_blue_red_yellow_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2152/0315/hjc_helmets_rpha_spasso_mc3_h_blue_red_yellow_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1072166" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           HJC RPHA 12 Spasso Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="299.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>299<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was mny__rng"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>599.99<span class="mny__c"></span></span><span data-js="Money.parsedMoney"><span
                                 class="mny__c">$</span>604.99<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 50%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="39" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">39</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="79" data-js="ProductTile.link" data-product-id="1087622" data-skus="10386277,10386278,10386279,10386280,10386281,10386282,10386271,10386272,10386273,10386274,10386275,10386276" href="/motorcycle/shoei-rf-1400-sheen-helmet"
                  itemprop="url" title="Shoei RF-1400 Sheen Helmet">
                  <meta content="Shoei RF-1400 Sheen Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1087622" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2207/7024/shoei_rf1400_sheen_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Sheen Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2207/7024/shoei_rf1400_sheen_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2207/7024/shoei_rf1400_sheen_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1087622" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087622" data-js-option-id="120" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/120/square/120.gif);
                                    " title="Blue/Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1087622" data-js-option-id="132" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/132/square/132.gif);
                                    " title="Red/Black"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1087622,
                                        [{
                                          "alt_text": "Shoei RF-1400 Sheen Helmet",
                                          "dimensions": null,
                                          "option_id": 120,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2207/7024/shoei_rf1400_sheen_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22077024
                                        }, {
                                          "alt_text": "Shoei RF-1400 Sheen Helmet",
                                          "dimensions": null,
                                          "option_id": 120,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2207/7024/shoei_rf1400_sheen_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22077024
                                        }, {
                                          "alt_text": "Shoei RF-1400 Sheen Helmet",
                                          "dimensions": null,
                                          "option_id": 132,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2207/7007/shoei_rf1400_sheen_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 22077007
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Sheen Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="80" data-js="ProductTile.link" data-product-id="1113952" data-skus="10446984,10446985,10446986,10446987,10446988,10446989,10446990,10446969,10446970,10446971,10446972,10446973,10446974,10446975,10446976,10446977,10446978,10446979,10446980,10446981,10446982,10446983"
                  href="/motorcycle/scorpion-exo-r430-helmet" itemprop="url" title="Scorpion EXO-R430 Helmet">
                  <meta content="Scorpion EXO-R430 Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1113952" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2475/3626/scorpion_exor430_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-R430 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2475/3626/scorpion_exor430_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2475/3626/scorpion_exor430_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1113952" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113952" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113952" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1113952" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1113952,
                                        [{
                                          "alt_text": "Scorpion EXO-R430 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/3626/scorpion_exor430_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24753626
                                        }, {
                                          "alt_text": "Scorpion EXO-R430 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/3609/scorpion_exor430_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24753609
                                        }, {
                                          "alt_text": "Scorpion EXO-R430 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/3592/scorpion_exor430_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24753592
                                        }, {
                                          "alt_text": "Scorpion EXO-R430 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/3626/scorpion_exor430_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24753626
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-R430 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="174.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>174<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span><span data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>184<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.0" itemprop="ratingValue" />
                           <meta content="2" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">2</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="81" data-js="ProductTile.link" data-product-id="925501" data-skus="10099428,10099429,10099430,10099431,10099432,10099433,10099434" href="/motorcycle/icon-airflite-mips-demo-helmet"
                  itemprop="url" title="Icon Airflite Mips Demo Helmet">
                  <div class="product-tile__sash product-tile__sash--sale">
                     <div class="product-tile__sash-message product-tile__sash-message--sale">
                        Sale
                     </div>
                  </div>
                  <meta content="Icon Airflite Mips Demo Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="925501" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1605/8404/icon_airflite_mips_demo_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airflite Mips Demo Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1605/8404/icon_airflite_mips_demo_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1605/8404/icon_airflite_mips_demo_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-925501" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airflite Mips Demo Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="247.50" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>247<sup class="mny__s">.</sup><sup>50</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>330.00<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 25%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="251" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">251</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="82" data-js="ProductTile.link" data-product-id="1071659" data-skus="10352118,10352119,10352120,10352121,10352122,10352123" href="/motorcycle/shoei-rf-1400-gleam-helmet" itemprop="url"
                  title="Shoei RF-1400 Gleam Helmet">
                  <meta content="Shoei RF-1400 Gleam Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1071659" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2181/2953/shoei_rf1400_gleam_helmet_black_silver_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei RF-1400 Gleam Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2181/2953/shoei_rf1400_gleam_helmet_black_silver_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2181/2953/shoei_rf1400_gleam_helmet_black_silver_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1071659" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei RF-1400 Gleam Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="749.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.5" itemprop="ratingValue" />
                           <meta content="623" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">623</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="83" data-js="ProductTile.link" data-product-id="1020652" data-skus="10258302,10258303,10258304,10258305,10258306,10258307,10258308,10258309,10258310,10258311,10258312,10258313" href="/motorcycle/agv-k6-s-slashcut-helmet"
                  itemprop="url" title="AGV K6 S Slashcut Helmet">
                  <div class="badge badge--vertical">
                     <div class="badge__message badge__message--staff-picks-2019">
                        Staff Pick
                     </div>
                  </div>
                  <meta content="AGV K6 S Slashcut Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1020652" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2074/3704/agvk6_s_slashcut_helmet_black_grey_red_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K6 S Slashcut Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2074/3704/agvk6_s_slashcut_helmet_black_grey_red_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2074/3704/agvk6_s_slashcut_helmet_black_grey_red_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1020652" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020652" data-js-option-id="1110" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/1110/square/1110.gif);
                                    " title="Black/Blue/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020652" data-js-option-id="7204" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7204/square/7204.gif);
                                    " title="Black/Grey/Red"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1020652,
                                        [{
                                          "alt_text": "AGV K6 S Slashcut Helmet",
                                          "dimensions": null,
                                          "option_id": 7204,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/3704/agvk6_s_slashcut_helmet_black_grey_red_480x480.jpg",
                                          "filename": "",
                                          "id": 20743704
                                        }, {
                                          "alt_text": "AGV K6 S Slashcut Helmet",
                                          "dimensions": null,
                                          "option_id": 1110,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/3482/agvk6_s_slashcut_helmet_black_blue_red_480x480.jpg",
                                          "filename": "",
                                          "id": 20743482
                                        }, {
                                          "alt_text": "AGV K6 S Slashcut Helmet",
                                          "dimensions": null,
                                          "option_id": 7204,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2074/3704/agvk6_s_slashcut_helmet_black_grey_red_480x480.jpg",
                                          "filename": "",
                                          "id": 20743704
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K6 S Slashcut Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="90" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">90</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="84" data-js="ProductTile.link" data-product-id="1135036" data-skus="10484952,10484953,10484954,10484955,10484956,10484957,10484946,10484947,10484948,10484949,10484950,10484951" href="/motorcycle/shoei-x-15-daijiro-helmet"
                  itemprop="url" title="Shoei X-15 Daijiro Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Shoei X-15 Daijiro Helmet" itemprop="name" />
                  <meta content="Shoei Helmets" itemprop="brand" />
                  <meta content="1135036" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2404/4331/shoei_x15_daijiro_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Shoei X-15 Daijiro Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2404/4331/shoei_x15_daijiro_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2404/4331/shoei_x15_daijiro_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1135036" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1135036" data-js-option-id="19620" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/19620/square/19620.gif);
                                    " title="Blue/Yellow/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1135036" data-js-option-id="31607" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/31607/square/31607.png);
                                    " title="Blue/White/Yellow"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1135036,
                                        [{
                                          "alt_text": "Shoei X-15 Daijiro Helmet",
                                          "dimensions": null,
                                          "option_id": 31607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2404/4331/shoei_x15_daijiro_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24044331
                                        }, {
                                          "alt_text": "Shoei X-15 Daijiro Helmet",
                                          "dimensions": null,
                                          "option_id": 19620,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2404/4314/shoei_x15_daijiro_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24044314
                                        }, {
                                          "alt_text": "Shoei X-15 Daijiro Helmet",
                                          "dimensions": null,
                                          "option_id": 31607,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2404/4331/shoei_x15_daijiro_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24044331
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Shoei X-15 Daijiro Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="1099.99" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>1,099<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.7" itemprop="ratingValue" />
                           <meta content="71" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">71</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="85" data-js="ProductTile.link" data-product-id="1040489" data-skus="10293171,10293172,10293173,10293174,10293175,10293176,10293177,10293157,10293158,10293159,10293160,10293161,10293162,10293163,10293164,10293165,10293166,10293167,10293168,10293169,10293170"
                  href="/motorcycle/scorpion-exo-xt9000-helmet" itemprop="url" title="Scorpion EXO-XT9000 Helmet">
                  <meta content="Scorpion EXO-XT9000 Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1040489" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2475/9100/scorpion_exoxt9000_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-XT9000 Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2475/9100/scorpion_exoxt9000_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2475/9100/scorpion_exoxt9000_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1040489" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040489" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040489" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1040489" data-js-option-id="30" style="background-color: White" title="White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1040489,
                                        [{
                                          "alt_text": "Scorpion EXO-XT9000 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9100/scorpion_exoxt9000_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759100
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1945/5692/scorpion_exoxt9000_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19455692
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Helmet",
                                          "dimensions": null,
                                          "option_id": 30,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2475/9100/scorpion_exoxt9000_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24759100
                                        }, {
                                          "alt_text": "Scorpion EXO-XT9000 Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1945/5709/scorpion_exoxt9000_helmet_matte_black_480x480.jpg",
                                          "filename": "",
                                          "id": 19455709
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-XT9000 Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="554.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>554<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="38" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">38</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="86" data-js="ProductTile.link" data-product-id="1046002" data-skus="10300314,10300315,10300316,10300317,10300318,10300319,10300320" href="/motorcycle/icon-airform-dark-helmet" itemprop="url"
                  title="Icon Airform Dark Helmet">
                  <meta content="Icon Airform Dark Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1046002" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1946/6095/icon_hlmt_afrm_dark_matte_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airform Dark Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1946/6095/icon_hlmt_afrm_dark_matte_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1946/6095/icon_hlmt_afrm_dark_matte_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1046002" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airform Dark Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="150.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>150<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="459" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">459</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="87" data-js="ProductTile.link" data-product-id="1106762" data-skus="10432195,10432196,10432197,10432198,10432199,10432200,10432189,10432190,10432191,10432192,10432193,10432194" href="/motorcycle/agv-k6-s-karve-helmet"
                  itemprop="url" title="AGV K6 S Karve Helmet">
                  <meta content="AGV K6 S Karve Helmet" itemprop="name" />
                  <meta content="AGV Helmets" itemprop="brand" />
                  <meta content="1106762" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2370/5334/agvk6_s_karve_helmet_black_white_red_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="AGV K6 S Karve Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2370/5334/agvk6_s_karve_helmet_black_white_red_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2370/5334/agvk6_s_karve_helmet_black_white_red_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106762" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106762" data-js-option-id="4671" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/4671/square/4671.gif);
                                    " title="Black/White/Red"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106762" data-js-option-id="7204" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/7204/square/7204.gif);
                                    " title="Black/Grey/Red"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1106762,
                                        [{
                                          "alt_text": "AGV K6 S Karve Helmet",
                                          "dimensions": null,
                                          "option_id": 4671,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/5334/agvk6_s_karve_helmet_black_white_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23705334
                                        }, {
                                          "alt_text": "AGV K6 S Karve Helmet",
                                          "dimensions": null,
                                          "option_id": 4671,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/5334/agvk6_s_karve_helmet_black_white_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23705334
                                        }, {
                                          "alt_text": "AGV K6 S Karve Helmet",
                                          "dimensions": null,
                                          "option_id": 7204,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2370/5368/agvk6_s_karve_helmet_black_grey_red_480x480.jpg",
                                          "filename": "",
                                          "id": 23705368
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           AGV K6 S Karve Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="699.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.6" itemprop="ratingValue" />
                           <meta content="90" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">90</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="88" data-js="ProductTile.link" data-product-id="1070714" data-skus="10350043,10350044,10350045,10350046,10350047,10350048" href="/motorcycle/biltwell-gringo-s-ece-spectrum-helmet"
                  itemprop="url" title="Biltwell Gringo S ECE Spectrum Helmet">
                  <meta content="Biltwell Gringo S ECE Spectrum Helmet" itemprop="name" />
                  <meta content="Biltwell Apparel" itemprop="brand" />
                  <meta content="1070714" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2182/3784/biltwell_gringo_sece_helmet_gloss_spectrum_desert_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Biltwell Gringo S ECE Spectrum Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2182/3784/biltwell_gringo_sece_helmet_gloss_spectrum_desert_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2182/3784/biltwell_gringo_sece_helmet_gloss_spectrum_desert_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1070714" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Biltwell Gringo S ECE Spectrum Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="274.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>274<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="3.7" itemprop="ratingValue" />
                           <meta content="16" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="3.5"></span>
                           <span class="product-tile__rating-count product-rating__count">16</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="89" data-js="ProductTile.link" data-product-id="1092833" data-skus="10394643,10394644,10394645,10394646,10394648,10394649,10394652,10394640,10394641,10394633,10394634,10394635,10394636,10394637"
                  href="/motorcycle/scorpion-exo-r1-air-hive-helmet" itemprop="url" title="Scorpion EXO-R1 Air Hive Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Scorpion EXO-R1 Air Hive Helmet" itemprop="name" />
                  <meta content="Scorpion EXO" itemprop="brand" />
                  <meta content="1092833" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2227/1691/scorpion_exo_exo_r1_air_full_face_helmet_hive_red_white_blue_white_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Scorpion EXO-R1 Air Hive Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2227/1691/scorpion_exo_exo_r1_air_full_face_helmet_hive_red_white_blue_white_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2227/1691/scorpion_exo_exo_r1_air_full_face_helmet_hive_red_white_blue_white_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1092833" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092833" data-js-option-id="146" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/146/square/146.gif);
                                    " title="White/Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092833" data-js-option-id="190" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/190/square/190.gif);
                                    " title="Black/Gold"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092833" data-js-option-id="132" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/132/square/132.gif);
                                    " title="Red/Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1092833" data-js-option-id="3737" style="
                                    background-image: url(https://www.revzilla.com/option/swatch_image/3737/square/3737.gif);
                                    " title="Red/White/Blue"></span><span class="product-tile__swatch-more-count">+0</span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1092833,
                                        [{
                                          "alt_text": "Scorpion EXO-R1 Air Hive Helmet",
                                          "dimensions": null,
                                          "option_id": 146,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2227/1691/scorpion_exo_exo_r1_air_full_face_helmet_hive_red_white_blue_white_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22271691
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Hive Helmet",
                                          "dimensions": null,
                                          "option_id": 132,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2026/scorpion_exor1_air_hive_helmet_red_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282026
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Hive Helmet",
                                          "dimensions": null,
                                          "option_id": 146,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2227/1691/scorpion_exo_exo_r1_air_full_face_helmet_hive_red_white_blue_white_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22271691
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Hive Helmet",
                                          "dimensions": null,
                                          "option_id": 190,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2043/scorpion_exor1_air_hive_helmet_gold_black_480x480.jpg",
                                          "filename": "",
                                          "id": 22282043
                                        }, {
                                          "alt_text": "Scorpion EXO-R1 Air Hive Helmet",
                                          "dimensions": null,
                                          "option_id": 3737,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2228/2009/scorpion_exor1_air_hive_helmet_red_white_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 22282009
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Scorpion EXO-R1 Air Hive Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="474.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>474<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.4" itemprop="ratingValue" />
                           <meta content="181" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">181</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="90" data-js="ProductTile.link" data-product-id="1106470" data-skus="10431571,10431572,10431573,10431574,10431575,10431576,10431612,10431613,10431614,10431615,10431616,10431617" href="/motorcycle/bell-bullitt-gt-carbon-helmet"
                  itemprop="url" title="Bell Bullitt GT Carbon Helmet">
                  <div class="product-tile__sash product-tile__sash--new">
                     <div class="product-tile__sash-message product-tile__sash-message--new">
                        New
                     </div>
                  </div>
                  <meta content="Bell Bullitt GT Carbon Helmet" itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="1106470" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2419/2777/bell_bullitt_gt_carbon_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt GT Carbon Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2419/2777/bell_bullitt_gt_carbon_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2419/2777/bell_bullitt_gt_carbon_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1106470" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106470" data-js-option-id="3874" style="background-color: black" title="Carbon"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1106470" data-js-option-id="13772" style="background-color: black" title="Matte Carbon"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1106470,
                                        [{
                                          "alt_text": "Bell Bullitt GT Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2419/2777/bell_bullitt_gt_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24192777
                                        }, {
                                          "alt_text": "Bell Bullitt GT Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2419/2692/bell_bullitt_gt_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24192692
                                        }, {
                                          "alt_text": "Bell Bullitt GT Carbon Helmet",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2419/2777/bell_bullitt_gt_carbon_helmet_480x480.jpg",
                                          "filename": "",
                                          "id": 24192777
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt GT Carbon Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="669.95" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>669<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.9" itemprop="ratingValue" />
                           <meta content="7" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="5"></span>
                           <span class="product-tile__rating-count product-rating__count">7</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="91" data-js="ProductTile.link" data-product-id="1064854" data-skus="10340001,10340002,10340003,10340004,10340005,10340006,10340007" href="/motorcycle/icon-airform-old-glory-helmet"
                  itemprop="url" title="Icon Airform Old Glory Helmet">
                  <meta content="Icon Airform Old Glory Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1064854" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2119/0686/icon_airform_old_glory_helmet_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airform Old Glory Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2119/0686/icon_airform_old_glory_helmet_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2119/0686/icon_airform_old_glory_helmet_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1064854" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airform Old Glory Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="225.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>225<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="459" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">459</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="92" data-js="ProductTile.link" data-product-id="1104082" data-skus="10424455,10424456,10424457,10424458,10424459,10424460,10424461" href="/motorcycle/icon-airform-mips-nine-lives-helmet"
                  itemprop="url" title="Icon Airform Mips Nine Lives Helmet">
                  <meta content="Icon Airform Mips Nine Lives Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="1104082" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2285/5901/icon_helmet_afrm_nine_lives_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airform Mips Nine Lives Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/2285/5901/icon_helmet_afrm_nine_lives_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2285/5901/icon_helmet_afrm_nine_lives_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1104082" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airform Mips Nine Lives Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="250.00" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>250<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.3" itemprop="ratingValue" />
                           <meta content="34" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>
                           <span class="product-tile__rating-count product-rating__count">34</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="93" data-js="ProductTile.link" data-product-id="891495" data-skus="10031028,10031018,10031019,10031020,10031021,10031023,10158605,10158606,10158607" href="/motorcycle/icon-airflite-mips-jewel-helmet"
                  itemprop="url" title="Icon Airflite Mips Jewel Helmet">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Icon Airflite Mips Jewel Helmet" itemprop="name" />
                  <meta content="Icon" itemprop="brand" />
                  <meta content="891495" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1521/7254/icon_airflite_mips_jewel_helmet_gold_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Icon Airflite Mips Jewel Helmet" class="product-tile__image" src="https://www.revzilla.com/product_images/1521/7254/icon_airflite_mips_jewel_helmet_gold_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1521/7254/icon_airflite_mips_jewel_helmet_gold_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-891495" width="480" />
                        <div class="product-tile__mips-badge">
                           <img alt="MIPs Technology" class="product-tile__mips-icon" data-lazy-src="/images/sites/shared/mips_logo.svg" />
                        </div>
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-891495" data-js-option-id="144" style="background-color: Silver" title="Silver"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-891495" data-js-option-id="191" style="background-color: gold" title="Gold"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-891495" data-js-option-id="57" style="background-color: Blue" title="Blue"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        891495,
                                        [{
                                          "alt_text": "Icon Airflite Mips Jewel Helmet",
                                          "dimensions": null,
                                          "option_id": 191,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1521/7254/icon_airflite_mips_jewel_helmet_gold_480x480.jpg",
                                          "filename": "",
                                          "id": 15217254
                                        }, {
                                          "alt_text": "Icon Airflite Mips Jewel Helmet",
                                          "dimensions": null,
                                          "option_id": 57,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1725/4160/icon_airflite_mips_jewel_helmet_blue_480x480.jpg",
                                          "filename": "",
                                          "id": 17254160
                                        }, {
                                          "alt_text": "Icon Airflite Mips Jewel Helmet",
                                          "dimensions": null,
                                          "option_id": 144,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1521/7305/icon_airflite_mips_jewel_helmet_silver_480x480.jpg",
                                          "filename": "",
                                          "id": 15217305
                                        }, {
                                          "alt_text": "Icon Airflite Mips Jewel Helmet",
                                          "dimensions": null,
                                          "option_id": 191,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/1521/7254/icon_airflite_mips_jewel_helmet_gold_480x480.jpg",
                                          "filename": "",
                                          "id": 15217254
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Icon Airflite Mips Jewel Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="247.50" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>247<sup class="mny__s">.</sup><sup>50</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>330.00<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 25%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="251" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">251</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="94" data-js="ProductTile.link" data-product-id="930036" data-skus="10107713,10107714,10107715,10107716" href="/motorcycle/bell-bullitt-tt-helmet" itemprop="url" title="Bell Bullitt TT Helmet ">
                  <div class="product-tile__sash product-tile__sash--closeout">
                     <div class="product-tile__sash-message product-tile__sash-message--closeout">
                        Closeout
                     </div>
                  </div>
                  <meta content="Bell Bullitt TT Helmet " itemprop="name" />
                  <meta content="Bell Helmets" itemprop="brand" />
                  <meta content="930036" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/1893/7965/bell_bullitt_tt_helmet_vintage_white_oxblood_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="Bell Bullitt TT Helmet " class="product-tile__image" src="https://www.revzilla.com/product_images/1893/7965/bell_bullitt_tt_helmet_vintage_white_oxblood_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/1893/7965/bell_bullitt_tt_helmet_vintage_white_oxblood_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-930036" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__name" data-qa="product-tile-name">
                           Bell Bullitt TT Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="219.97" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>219<sup class="mny__s">.</sup><sup>97</sup><span class="mny__c"></span></span>
                              </span>
                              </span><span class="product-tile__price-was product-details__price-was"><span
                                 data-js="Money.parsedMoney"><span class="mny__c">$</span>439.95<span class="mny__c"></span></span>
                              </span>
                           </div>
                           <div class="product-tile__savings">
                              <div class="product-tile__sale-tag">Save 50%</div>
                           </div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.2" itemprop="ratingValue" />
                           <meta content="443" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">443</span><img alt="Video Available" class="product-tile__video-icon" data-lazy-src="/images/sites/revzilla/support/product_browse/youtube_icon-f757f3f104f09ead42c34d3873684f83.svg?vsn=d"
                              height="16" width="16" />
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
               <a class="product-index-results__product-tile product-tile" data-index="95" data-js="ProductTile.link" data-product-id="1077072" data-skus="10441547,10441548,10441549,10441550,10441551,10441552,10441553,10363649,10363650,10363651,10363652,10363653,10363654,10363655,10363642,10363643,10363644,10363645,10363646,10363647,10363648"
                  href="/motorcycle/ls2-helmets-stream-ii-solid-helmet-w-sunshield" itemprop="url" title="LS2 Stream II Solid Helmet ">
                  <meta content="LS2 Stream II Solid Helmet " itemprop="name" />
                  <meta content="LS2 Helmets" itemprop="brand" />
                  <meta content="1077072" itemprop="productId" />
                  <meta content="https://www.revzilla.com/product_images/2404/2019/ls2_stream_ii_helmet_black_480x480.jpg" itemprop="image" />
                  <div class="product-tile__content">
                     <div class="product-tile__image-container">
                        <img alt="LS2 Stream II Solid Helmet " class="product-tile__image" src="https://www.revzilla.com/product_images/2404/2019/ls2_stream_ii_helmet_black_480x480.jpg" data-lazy-src="https://www.revzilla.com/product_images/2404/2019/ls2_stream_ii_helmet_black_480x480.jpg"
                           height="480" id="js-ProductImageCrossfader-image-1077072" width="480" />
                     </div>
                     <div class="product-tile__summary">
                        <div class="product-tile__details product-tile__details--swatches">
                           <ul class="product-tile__swatches">
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1077072" data-js-option-id="24" style="background-color: Black" title="Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1077072" data-js-option-id="1043" style="background-color: #3a3a3a" title="Matte Black"></span>
                              </li>
                              <li class="product-tile__swatch-wrapper">
                                 <span class="product-tile__swatch js-ProductImageCrossfader-swatch-1077072" data-js-option-id="4891" style="background-color: white" title="Gloss White"></span>
                              </li>
                           </ul>
                           <script type="580fb9525f9398b69b5b4a70-text/javascript">
                              (function (w) {
                                  w.__rq.push(function (req) {
                                    req("web/static/js/redline/components/product_image_crossfader").then(({
                                      ProductImageCrossfader
                                    }) => {
                                      new ProductImageCrossfader(
                                        1077072,
                                        [{
                                          "alt_text": "LS2 Stream II Solid Helmet ",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2404/2019/ls2_stream_ii_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24042019
                                        }, {
                                          "alt_text": "LS2 Stream II Solid Helmet ",
                                          "dimensions": null,
                                          "option_id": 24,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2404/2019/ls2_stream_ii_helmet_black_480x480.jpg",
                                          "filename": "",
                                          "id": 24042019
                                        }, {
                                          "alt_text": "LS2 Stream II Solid Helmet ",
                                          "dimensions": null,
                                          "option_id": 1043,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2165/0460/ls2_helmets_stream_ii_solid_helmet_w_sunshield_480x480.jpg",
                                          "filename": "",
                                          "id": 21650460
                                        }, {
                                          "alt_text": "LS2 Stream II Solid Helmet ",
                                          "dimensions": null,
                                          "option_id": 4891,
                                          "display_order": null,
                                          "option": null,
                                          "uri": "https://www.revzilla.com/product_images/2165/0477/ls2_helmets_stream_ii_solid_helmet_w_sunshield_480x480.jpg",
                                          "filename": "",
                                          "id": 21650477
                                        }]
                                      );
                                    });
                                  })
                                })(this)
                           </script>
                        </div>
                        <div class="product-tile__name" data-qa="product-tile-name">
                           LS2 Stream II Solid Helmet
                        </div>
                        <div class="product-tile__pricing">
                           <meta content="149.98" itemprop="price" />
                           <meta content="USD" itemprop="priceCurrency" />
                           <meta content="https://schema.org/InStock" itemprop="availability" />
                           <meta content="https://schema.org/NewCondition" itemprop="itemCondition" />
                           <div class="product-tile__prices">
                              <span class="product-tile__price-retail product-details__price-retail"><span
                                 data-js="Money.stylizedMoney"><span class="mny"><span class="mny__c">$</span>149<sup class="mny__s">.</sup><sup>98</sup><span class="mny__c"></span></span>
                              </span>
                              </span>
                           </div>
                           <div class="product-tile__savings"></div>
                        </div>
                        <div class="product-tile__rating">
                           <meta content="1" itemprop="worstRating" />
                           <meta content="5" itemprop="bestRating" />
                           <meta content="4.1" itemprop="ratingValue" />
                           <meta content="25" itemprop="reviewCount" />
                           <span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4"></span>
                           <span class="product-tile__rating-count product-rating__count">25</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>
         <div class="product-index-results__pagination">
            <div class="pagination" data-js="Pagination">
               <a href="" class="pagination__incrementer pagination__incrementer--prev" aria-label="Previous page">
               </a>
               <span class="pagination__links-wrapper">
               <a class="pagination__page-link" href="?page=1">1</a>
               <a class="pagination__page-link" href="?page=2">2</a>
               <a class="pagination__page-link" href="?page=3">3</a>
               <a class="pagination__page-link" href="?page=4">4</a>
               <a class="pagination__page-link" href="?page=5">5</a>
               <a class="pagination__page-link" href="?page=6">6</a>
               <a class="pagination__page-link" href="?page=7">7</a>
               <a class="pagination__page-link" href="?page=8">8</a>
               </span>
               <span class="pagination__select-wrapper">
                  <select class="pagination__select product-index-pagination__select ui-select" name="[]">
                     <option selected value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                  </select>
                  <span class="pagination__select-page-count"> of 8 </span>
               </span>
               <a href="?page=2" class="pagination__incrementer pagination__incrementer--next" aria-label="Next page">
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="component__wrapper component__wrapper--background-black">
   <section class="component component--seo-block seo-block" data-analytics-component-id="167895" data-analytics-component-type="SeoBlock" data-asset-id="83256" data-component-type="SEO Block" data-js-component="SeoBlock" data-js-scheduled-component-id="167895">
      <div class="component__content">
         <h1 class="seo-block__heading stn-shd stn-shd--small" data-heading="RevZilla: The #1 Online Store for Motorcycle Gear & Parts">Bongshal: The #1 Online Store
            for Motorcycle Gear & Parts
         </h1>
         <div class="seo-block__top-content ui-copy-container ui-copy-container--small" data-subheading="&lt;p&gt;RevZilla is the largest online retailer of motorcycle gear, parts, and accessories in the U.S. Founded by riders in 2007, our team of motorcycle enthusiasts and product experts is dedicated to helping you find the best gear for your ride. Unlike some competitors, our customer service is available every day—because we know riders need support when they need it, not just on weekdays.&lt;br&gt;Why Choose RevZilla? Fast &amp;amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive &lt;a href=&quot;https://www.revzilla.com/rpm&quot;&gt;RPM loyalty rewards&lt;/a&gt;!&lt;br&gt;With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.&lt;br&gt;Whether you need a &lt;a href=&quot;/motorcycle-helmets&quot;&gt;motorcycle helmet&lt;/a&gt;, &lt;a href=&quot;/motorcycle-jackets-vests&quot;&gt;jacket&lt;/a&gt;, &lt;a href=&quot;/motorcycle-gloves&quot;&gt;gloves&lt;/a&gt;, &lt;a href=&quot;/motorcycle-boots&quot;&gt;boots&lt;/a&gt;, or &lt;a href=&quot;/motorcycle-parts&quot;&gt;performance parts,&lt;/a&gt; we make it easy to shop with confidence.&lt;/p&gt;">
            <p>Bongshal is the largest online retailer of motorcycle gear, parts, and accessories in the U.S. Founded by riders in 2007, our team of motorcycle enthusiasts and product experts is dedicated to helping you find the best gear
               for your ride. Unlike some competitors, our customer service is available every day—because we know riders need support when they need it, not just on weekdays.
               <br>Why Choose Bongshal? Fast &amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive <a href="https://www.revzilla.com/rpm">RPM loyalty rewards</a>!
               <br>With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.
               <br>Whether you need a <a href="/motorcycle-helmets">motorcycle
               helmet</a>, <a href="/motorcycle-jackets-vests">jacket</a>, <a href="/motorcycle-gloves">gloves</a>, <a href="/motorcycle-boots">boots</a>, or <a href="/motorcycle-parts">performance parts,</a> we make it easy to shop with confidence.
            </p>
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
@endsection

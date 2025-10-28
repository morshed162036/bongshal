@extends('frontend.layout.main')
@section('title', 'Shop Page')
@section('content')
<div class="component-top-content"></div>
<div class="product-index-main" data-element-name="Product Browse">
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
                     <a class="breadcrumbs__link" href="#" itemprop="item">Spare Parts</a>
                     <meta content="Parts" itemprop="name" />
                  </li>
                  {{-- <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a class="breadcrumbs__link" href="/full-face-motorcycle-helmets" itemprop="item">Full Face</a>
                     <meta content="Full Face" itemprop="name" />
                     <meta content="3" itemprop="position" />
                  </li> --}}
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
<<<<<<< HEAD
               Spare Parts
=======
               {{ $title ?? 'Spare Parts' }}
               {{-- @if ($catalogue)
               {{ $catalogue->name }}
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
               {{-- <h1>{{ $catalogue->name }}</h1> --}}
               {{-- <h1>{{ $category->name }}</h1> --}}
               {{-- <h1>{{ $catalogue->name }}</h1> --}}

            </div>
            <span class="browse-header__product-count product-faceted-browse-index__product-count"><span data-product-count="681">{{ count($products) }}</span><span class="product-faceted-browse-index__product-count-label product-faceted-browse-index__product-count-label--plural">Products</span>
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
      {{-- <div class="product-index-main__navigation browse-navigation">
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
      </div> --}}
<<<<<<< HEAD
      <div class="product-index-main__navigation browse-navigation">
        <div data-wrapper-for=".parts-type-toggle" data-wrapper-at="small medium"></div>
        <div class="shop-by-bike__wrapper" data-default-interface="select" data-js="ShopByBike.interface">
            <div class="shop-by-bike shop-by-bike--select">
            <div class="shop-by-bike__mobile-select-toggle ui-action-button ui-action-button--fast" data-click-toggle data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle" data-qa="shop-by-bike-link">My Garage</div>
            <div class="shop-by-bike__select">
                <div class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark" data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface" style="display: none">
                    Garage
                    <span class="shop-by-bike__action-button-label">Select a Saved Vehicle</span>
                </div>
                <a class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark" data-js="ShopByBike.unauthedInterface ShopByBike.logInLink" data-open-href data-open-class="authentication-form-modal" data-open-href-reuse-modal href="/auth/identity" style="display: none">
                Garage
                <span class="shop-by-bike__action-button-label">Log In to Access Saved Vehicles</span>
                </a>
                <div class="shop-by shop-by-bike__content shop-by-bike__content--select">
                    <div class="shop-by-bike__header">
                        <span class="shop-by__heading">
                        <span class="shop-by__heading-text">My Garage</span>
                        </span>
                        <span class="shop-by-bike__action shop-by-bike__action--garage" data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface" style="display: none">
                        <span class="shop-by-bike__action-label shop-by-bike__action-label--garage shop-by-bike__action-label--authed">Garage</span>
                        <span class="shop-by-bike__action-link ui-link">Select a Saved Vehicle</span>
                        </span>
                        <span class="shop-by-bike__action shop-by-bike__action--garage" data-js="ShopByBike.unauthedInterface" style="display: none">
                        <span class="shop-by-bike__action-label shop-by-bike__action-label--garage">Garage</span>
                        <a class="shop-by-bike__action-link ui-link" data-js="ShopByBike.logInLink" data-open-href data-open-class="authentication-form-modal" data-open-href-reuse-modal href="/auth/identity">Log In to Access Saved Vehicles</a>
                        </span>
                        <span class="shop-by-bike__action-label shop-by-bike__action-label--recent" data-js="ShopByBike.recentBike" style="display: none">Recent Vehicle</span>
                        <a class="shop-by-bike__action-link shop-by-bike__action-link--recent ui-link" data-js="ShopByBike.recentBike ShopByBike.recentBike.link ShopByBike.vehicleLink" href="" style="display: none"></a>
=======

    <div class="product-index-main__navigation browse-navigation">
        @if ($bike == null)
            <div class="shop-by-bike__wrapper" data-default-interface="select" data-js="ShopByBike.interface">
                <div class="shop-by-bike shop-by-bike--select">
                <div class="shop-by-bike__mobile-select-toggle ui-action-button ui-action-button--fast" data-click-toggle data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle" data-qa="shop-by-bike-link">My Garage</div>
                    <div class="shop-by-bike__select">
                        <div class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark" data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface" style="display: none">
                            Garage
                            <span class="shop-by-bike__action-button-label">Select a Saved Vehicle</span>
                        </div>
                        <a class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark" data-js="ShopByBike.unauthedInterface ShopByBike.logInLink" data-open-href data-open-class="authentication-form-modal" data-open-href-reuse-modal href="/auth/identity" style="display: none">
                        Garage
                        <span class="shop-by-bike__action-button-label">Log In to Access Saved Vehicles</span>
                        </a>
                        <div class="shop-by shop-by-bike__content shop-by-bike__content--select">
                            <div class="shop-by-bike__header">
                                <span class="shop-by__heading">
                                <span class="shop-by__heading-text">My Garage</span>
                                </span>
                                <span class="shop-by-bike__action shop-by-bike__action--garage" data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface" style="display: none">
                                <span class="shop-by-bike__action-label shop-by-bike__action-label--garage shop-by-bike__action-label--authed">Garage</span>
                                <span class="shop-by-bike__action-link ui-link">Select a Saved Vehicle</span>
                                </span>
                                <span class="shop-by-bike__action shop-by-bike__action--garage" data-js="ShopByBike.unauthedInterface" style="display: none">
                                <span class="shop-by-bike__action-label shop-by-bike__action-label--garage">Garage</span>
                                <a class="shop-by-bike__action-link ui-link" data-js="ShopByBike.logInLink" data-open-href data-open-class="authentication-form-modal" data-open-href-reuse-modal href="/auth/identity">Log In to Access Saved Vehicles</a>
                                </span>
                                <span class="shop-by-bike__action-label shop-by-bike__action-label--recent" data-js="ShopByBike.recentBike" style="display: none">Recent Vehicle</span>
                                <a class="shop-by-bike__action-link shop-by-bike__action-link--recent ui-link" data-js="ShopByBike.recentBike ShopByBike.recentBike.link ShopByBike.vehicleLink" href="" style="display: none"></a>
                            </div>
                            <div class="shop-by-bike__form">
                                <form class="shop-by-bike__select-dimensions" action="{{ route('shop.products') }}" method="GET" id="bikeFormm">
                                @csrf
                                <input type="hidden" name="catalogue_id" value="{{ $catalogue?$catalogue->id:'' }}">
                                <select name="company_id" id="companySelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select">
                                    <option value="">Make</option>
                                    @php
                                    $companies = App\Models\Company::all();
                                    @endphp
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>

                                <select name="bike_id" id="modelSelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select" disabled>
                                    <option value="">Select Model</option>
                                </select>

                                <select name="color_id" id="colorSelectt" class="form-control" disabled>
                                    <option value="">Select Color</option>
                                </select>

                                <button type="submit" id="goBtnn" class="shop-by-bike__select-selection-link ui-button" disabled>Go!</button>
                                </form>
                                <div class="shop-by-bike__select-close shop-by-bike__select-close--mobile" data-click-toggle data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle"></div>
                            </div>
                            <style>
                                /* Match height/width with your other dropdowns */
                                    .select2-container .select2-selection--single {
                                        height: 42px;              /* adjust to your form-control height */
                                        border: 1px solid #ccc;    /* same border as other selects */
                                        border-radius: 4px;
                                        padding: 5px 8px;
                                    }

                                    /* Align text */
                                    .select2-container .select2-selection__rendered {
                                        line-height: 28px;
                                        font-size: 14px;
                                    }

                                    /* Remove extra arrow styling */
                                    .select2-container--default .select2-selection--single .select2-selection__arrow {
                                        height: 36px;
                                        right: 5px;
                                    }
                            </style>
                        </div>
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
                    </div>
                    <div class="shop-by-bike__form">
                        <form class="shop-by-bike__select-dimensions" action="{{ route('shop.products') }}" method="GET" id="bikeFormm">
                         @csrf
                         <input type="hidden" name="catalogue_id" value="{{ $catalogue?$catalogue->id:'' }}">
                        <select name="company_id" id="companySelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select">
                            <option value="">Make</option>
                            @php
                            $companies = App\Models\Company::all();
                            @endphp
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>

                        <select name="bike_id" id="modelSelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select" disabled>
                            <option value="">Select Model</option>
                        </select>

                        <select name="color_id" id="colorSelectt" class="form-control" disabled>
                            <option value="">Select Color</option>
                        </select>

                        <button type="submit" id="goBtnn" class="shop-by-bike__select-selection-link ui-button" disabled>Go!</button>
                        </form>
                        <div class="shop-by-bike__select-close shop-by-bike__select-close--mobile" data-click-toggle data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle"></div>
                    </div>
                    <style>
                        /* Match height/width with your other dropdowns */
                            .select2-container .select2-selection--single {
                                height: 42px;              /* adjust to your form-control height */
                                border: 1px solid #ccc;    /* same border as other selects */
                                border-radius: 4px;
                                padding: 5px 8px;
                            }

                            /* Align text */
                            .select2-container .select2-selection__rendered {
                                line-height: 28px;
                                font-size: 14px;
                            }

                            /* Remove extra arrow styling */
                            .select2-container--default .select2-selection--single .select2-selection__arrow {
                                height: 36px;
                                right: 5px;
                            }
                    </style>
                </div>
<<<<<<< HEAD
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

        <div class="browse-navigation--mobile">
            <span class="browse-navigation__button browse-navigation__button--filter ui-button ui-button--blue ui-button--secondary ui-button--half-width" data-open="filters" data-open-class="product-index-filter-modal" data-qa="filter">Filter<span class="product-faceted-browse-index__filter-count" data-js="ProductCatalog.filterCount" data-filter-count="0">0</span></span>
            <span class="browse-navigation__button browse-navigation__button--sort ui-button ui-button--blue ui-button--secondary ui-button--half-width">
            <select class="browse-navigation__mobile-sort-select" data-js="ProductCatalog.sortSelect ProductCatalog.sortSelectMobile" data-field-name="Sort By" aria-label="Sort by">
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
                    <option selected value="best_seller">Sort by Best Sellers</option>
                    <option value="newest">Sort by Newest Arrivals</option>
                    <option value="price_asc">Sort by Price: Low to High</option>
                    <option value="price_desc">Sort by Price: High to Low</option>
                </select>
            </div>
            </div>
            {{-- <div class="browse-navigation__pagination browse-navigation__pagination--top" data-js="ProductCatalog.paginationTop">
            <div class="pagination" data-js="Pagination">
                <a href="" class="pagination__incrementer  pagination__incrementer--prev" aria-label="Previous page">
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
                <a class="pagination__page-link" href="?page=9">9</a>
                <a class="pagination__page-link" href="?page=10">10</a>
                <a class="pagination__page-link" href="?page=11">11</a>
                <a class="pagination__page-link" href="?page=12">12</a>
                <a class="pagination__page-link" href="?page=13">13</a>
                <a class="pagination__page-link" href="?page=14">14</a>
                <a class="pagination__page-link" href="?page=15">15</a>
                <a class="pagination__page-link" href="?page=16">16</a>
                <a class="pagination__page-link" href="?page=17">17</a>
                <a class="pagination__page-link" href="?page=18">18</a>
                <a class="pagination__page-link" href="?page=19">19</a>
                <a class="pagination__page-link" href="?page=20">20</a>
                <a class="pagination__page-link" href="?page=21">21</a>
                <a class="pagination__page-link" href="?page=22">22</a>
                <a class="pagination__page-link" href="?page=23">23</a>
                <a class="pagination__page-link" href="?page=24">24</a>
                <a class="pagination__page-link" href="?page=25">25</a>
                <a class="pagination__page-link" href="?page=26">26</a>
                <a class="pagination__page-link" href="?page=27">27</a>
                <a class="pagination__page-link" href="?page=28">28</a>
                <a class="pagination__page-link" href="?page=29">29</a>
                <a class="pagination__page-link" href="?page=30">30</a>
                <a class="pagination__page-link" href="?page=31">31</a>
                <a class="pagination__page-link" href="?page=32">32</a>
                <a class="pagination__page-link" href="?page=33">33</a>
                <a class="pagination__page-link" href="?page=34">34</a>
                <a class="pagination__page-link" href="?page=35">35</a>
                <a class="pagination__page-link" href="?page=36">36</a>
                <a class="pagination__page-link" href="?page=37">37</a>
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
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                    </select>
                    <span class="pagination__select-page-count">
                    of 37
                    </span>
                </span>
                <a href="?page=2" class="pagination__incrementer  pagination__incrementer--next" aria-label="Next page" >
                </a>
            </div>
            </div> --}}
        </div>
      </div>
      <div class="product-index-main__results product-index-results">
         <div data-wrapper-for="[data-js='ProductCatalog.activeFilters']" data-wrapper-at="large xlarge xxlarge">
            <div class="product-index-results__active-filters" data-js="ProductCatalog.activeFilters" style="display: none">
               <span class="product-index-active-filter__clear-all ui-link" data-js="ProductCatalog.clearFilters">Clear
               All</span>
            </div>
         </div>
         <div class="product-index-results__product-tiles">
            @foreach($products as $product)
                <div class="product-index-results__product-tile-wrapper">
                    <a class="product-index-results__product-tile product-tile"
                    href="{{ route('product.show', $product->slug) }}"
                    title="{{ $product->name }}">

                        <meta content="{{ $product->name }}" itemprop="name" />
                        <meta content="{{ $product->brand ?? 'Brand' }}" itemprop="brand" />
                        <meta content="{{ $product->id }}" itemprop="productId" />
                        <meta content="{{ $product->image_url }}" itemprop="image" />

                        <div class="product-tile__content">
                            {{-- Image --}}
                            <div class="product-tile__image-container">
                                <img alt="{{ $product->name }}"
                                    class="product-tile__image"
                                    src="{{ asset('images/products/image/'.$product->image )}}"
                                    width="480" height="480" />
                            </div>

                            {{-- Summary --}}
                            <div class="product-tile__summary">
                                {{-- Name --}}
                                <div class="product-tile__name">{{ $product->name }}</div>

                                {{-- Price --}}
                                <div class="product-tile__pricing">
                                    <meta content="{{ $product->price }}" itemprop="price" />
                                    <meta content="BDT" itemprop="priceCurrency" />

                                    <div class="product-tile__prices">
                                        <span class="product-tile__price-retail">
                                            {{ number_format($product->price, 2) }} Tk
                                        </span>
                                    </div>
                                </div>

                                {{-- Rating --}}
                                @if($product->reviews_count)
                                    <div class="product-tile__rating">
                                        <meta content="1" itemprop="worstRating" />
                                        <meta content="5" itemprop="bestRating" />
                                        <meta content="{{ $product->rating }}" itemprop="ratingValue" />
                                        <meta content="{{ $product->reviews_count }}" itemprop="reviewCount" />

                                        <span class="product-tile__rating-stars"
                                            data-rating="{{ $product->rating }}"></span>
                                        <span class="product-tile__rating-count">{{ $product->reviews_count }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- Example Product Tile --}}
            {{-- Remove this block when dynamic rendering is implemented --}}
            {{-- <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
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
            </div> --}}
            {{-- <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
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
            </div> --}}


            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>

         {{-- Pagination --}}
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
               <br>Why Choose Bongshal? Fast &amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive <a href="#">RPM loyalty rewards</a>!
               <br>With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.
               <br>Whether you need a <a href="#">motorcycle
               helmet</a>, <a href="#">jacket</a>, <a href="#">gloves</a>, <a href="#">boots</a>, or <a href="#">performance parts,</a> we make it easy to shop with confidence.
            </p>
            <br>
         </div>
      </div>
   </section>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    let companySelect = document.getElementById('companySelectt');
    let modelSelect = document.getElementById('modelSelectt');
    let colorSelect = document.getElementById('colorSelectt');
    let goBtn = document.getElementById('goBtnn');

    // When company selected -> load models
    companySelect.addEventListener('change', function() {
        let companyId = this.value;
        // alert(companyId);
        modelSelect.innerHTML = '<option value="">Select Model</option>';
        colorSelect.innerHTML = '<option value="">Select Color</option>';
        modelSelect.disabled = true;
        colorSelect.disabled = true;
        goBtn.disabled = true;

        if (companyId) {
            console.log("Fetching models for company ID:", companyId); // Debugging line

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
                            colorSelect.innerHTML += `<option value="${color.id}" data-image="${color.image}">${color.color_name} </option>`;
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
// $('#colorSelectt').select2({
//     templateResult: function (data) {
//         if (!data.id) return data.text;
//         let img = $(data.element).data('image');
//         return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" width="50" height="50" style="margin-right:5px;"> ${data.text}</span>`);
//     },
//     templateSelection: function (data) {
//         if (!data.id) return data.text;
//         let img = $(data.element).data('image');
//         return $(`<span>
//                 <img src="{{ asset('images/multiimage/bike') }}/${img}" width="50" height="50" style="margin-right:5px;">${data.text}</span>`);}
//         });


   </script>

    {{-- <script>
        $(function () {
            // elements (adjust IDs if yours differ)
            const $company = $('#companySelectt');   // <select name="company_id" id="companySelect">
            const $model   = $('#modelSelectt');     // <select name="bike_id" id="modelSelect">
            const $color   = $('#colorSelectt');     // <select name="color_id" id="colorSelect">
            // 'Go' may be a button or an anchor; try to find both
            const $goBtn   = $('#goBtnn').length ? $('#goBtnn') : $('.shop-by-bike__select-selection-link[data-js="VehicleSelector.selection"]');

            const getModelsUrl  = "{{ url('/get-models') }}";   // GET /get-models/{companyId}
            const getColorsUrl  = "{{ url('/get-colors') }}";   // GET /get-colors/{bikeId}
            const productsRoute = "{{ route('shop.products') }}"; // result page (GET)

            // helper: enable/disable the Go control and set href when it's an <a>
            function setGoEnabled(enabled) {
                $goBtn.each(function () {
                    const $el = $(this);
                    if ($el.is('a')) {
                        if (enabled) {
                            $el.removeAttr('aria-disabled').removeClass('disabled').attr('href', buildProductsUrl());
                        } else {
                            $el.attr('aria-disabled', 'true').addClass('disabled').attr('href', 'javascript:void(0)');
                        }
                    } else { // button/input
                        $el.prop('disabled', !enabled);
                    }
                });
            }

            // build target URL (for anchor or manual redirect)
            function buildProductsUrl() {
                const params = [];
                if ($company.val()) params.push('company_id=' + encodeURIComponent($company.val()));
                if ($model.val())   params.push('bike_id='    + encodeURIComponent($model.val()));
                if ($color.val())   params.push('color_id='   + encodeURIComponent($color.val()));
                return productsRoute + (params.length ? ('?' + params.join('&')) : '');
            }

            // reset helpers
            function resetModel() {
                // destroy select2 if initialized
                if ($.fn.select2 && $model.hasClass('select2-hidden-accessible')) {
                    $model.select2('destroy');
                }
                $model.empty().append('<option value="">Select Model</option>').prop('disabled', true);
            }
            function resetColor() {
                if ($.fn.select2 && $color.hasClass('select2-hidden-accessible')) {
                    $color.select2('destroy');
                }
                $color.empty().append('<option value="">Select Color</option>').prop('disabled', true);
            }

            // initial state
            resetModel();
            resetColor();
            setGoEnabled(false);

            // company -> load models
            $company.on('change', function () {
                const companyId = $(this).val();
                resetModel();
                resetColor();
                setGoEnabled(false);

                if (!companyId) return;

                $.getJSON(getModelsUrl + '/' + companyId)
                .done(function (models) {
                    if (Array.isArray(models) && models.length > 0) {
                        models.forEach(function (m) {
                            // adapt property names if different (model_name, name, etc.)
                            const label = m.model_name ?? m.name ?? m.model ?? ('Model ' + m.id);
                            $model.append(`<option value="${m.id}">${label}</option>`);
                        });
                        $model.prop('disabled', false);

                        // if you want model select to be Select2, init here (optional)
                        // if ($.fn.select2 && $model.hasClass('use-select2')) { $model.select2(); }
                    } else {
                        // no models found -> allow GO with company-only filter
                        setGoEnabled(true);
                    }
                })
                .fail(function (xhr) {
                    console.error('Failed loading models', xhr);
                });
            });

            // model -> load colors
            $model.on('change', function () {
                const bikeId = $(this).val();
                resetColor();
                setGoEnabled(false);

                if (!bikeId) {
                    // if company selected but model cleared, allow GO only if you want -> here we disable
                    return;
                }

                $.getJSON(getColorsUrl + '/' + bikeId)
                .done(function (colors) {
                    if (Array.isArray(colors) && colors.length > 0) {
                        colors.forEach(function (c) {
                            // store image url in data-image for Select2 template
                            const label = c.color_name ?? c.name ?? ('Color ' + c.id);
                            const img   = c.image_url ?? c.image ?? '';
                            $color.append(`<option value="${c.id}" data-image="${img}">${label}</option>`);
                        });

                        // Re-init Select2 for color if present
                        if ($.fn.select2) {
                            // destroy old then init fresh
                            if ($color.hasClass('select2-hidden-accessible')) {
                                $color.select2('destroy');
                            }
                            $color.prop('disabled', false);

                            $color.select2({
                                width: 'resolve',
                                templateResult: function (data) {
                                    if (!data.id) return data.text;
                                    const img = $(data.element).data('image');
                                    if (img) return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" style="width:50px;height:50px;margin-right:6px;object-fit:cover;"> ${data.text}</span>`);
                                    return data.text;
                                },
                                templateSelection: function (data) {
                                    if (!data.id) return data.text;
                                    const img = $(data.element).data('image');
                                    if (img) return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" style="width:50px;height:50px;margin-right:6px;object-fit:cover;"> ${data.text}</span>`);
                                    return data.text;
                                },
                                escapeMarkup: function (m) { return m; }
                            });
                        } else {
                            $color.prop('disabled', false);
                        }

                        // enable Go after model/colors are available
                        setGoEnabled(true);
                    } else {
                        // no colors -> still allow GO (filtered by model only)
                        setGoEnabled(true);
                    }
                })
                .fail(function (xhr) {
                    console.error('Failed loading colors', xhr);
                });
            });

            // when color changed -> update Go url (and enable)
            $color.on('change', function () {
                setGoEnabled(!!$company.val()); // enable if company present, adjust logic if you require model/color too
            });

            // If Go is an anchor and user clicks, it will navigate to the built URL.
            // If Go is a button inside the form (type=submit), the form will submit normally to route('shop.products').
            // For defensive handling of anchor click (in case JS built href failed), ensure click handler:
            $goBtn.on('click', function (e) {
                const $el = $(this);
                // if anchor disabled via aria-disabled, prevent
                if ($el.is('a') && $el.attr('aria-disabled') === 'true') {
                    e.preventDefault();
                    return false;
                }
                // if anchor and href is javascript:void(0), build url and go:
                if ($el.is('a') && ($el.attr('href') === 'javascript:void(0)' || !$el.attr('href'))) {
                    e.preventDefault();
                    const url = buildProductsUrl();
                    if (url) window.location.href = url;
                }
                // else for button -> normal submit will handle
            });

            // debug helper: show current URL in console (optional)
            // setInterval(() => console.log('GO URL ->', buildProductsUrl()), 3000);
        });
    </script> --}}
=======
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
        @else
            <div class="vehicle-specs">
            <input
                type="checkbox"
                checked
                id="vehicle-specs-toggle"
                class="vehicle-specs__toggle-input"
            />
            <label
                class="vehicle-specs__toggle-label"
                for="vehicle-specs-toggle"
                >Stock fitment for this vehicle</label
            >
            <div class="vehicle-specs__content">
                <ul class="vehicle-specs__list">
                    <li class="vehicle-specs__item">
                        <strong>Front Tire: </strong
                        ><a
                        class="ui-link"
                        href="#"
                        >{{ $bike->front_tire_width }}/{{ $bike->front_tire_aspectratio }}-{{ $bike->front_tire_rim }}</a
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong>Rear Tire: </strong
                        ><a
                        class="ui-link"
                        href="#"
                        >{{ $bike->rear_tire_width }}/{{ $bike->rear_tire_aspectratio }}-{{ $bike->rear_tire_rim }}</a
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong>Battery: </strong
                        ><a class="ui-link" href="#"
                        >{{ $bike->battery }}</a
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong>Recommended Engine Oil: </strong
                        ><a
                        class="ui-link"
                        href=""
                        >@if (count($bike->grade)>0)
                            @foreach ($bike->grade as $grade)
                                {{ $grade->grade }}: {{ $grade->volume }}
                                @if (!$loop->last)
                                    ,
                                @endif

                            @endforeach
                        @endif</a
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong><a
                        class="ui-link"
                        href="#"
                        >Shop Aftermarket parts for your bike</a
                        > </strong
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong><a class="ui-link" href="#"
                        >Shop Accessories for your bike</a
                        ></strong
                        >
                    </li>
                    {{-- <li class="vehicle-specs__item">
                        <strong>Battery: </strong
                        ><a
                        class="ui-link"
                        href="?facets%5B%5D=905&amp;fit=exact_fit"
                        >YTZ7S</a
                        >
                    </li>
                    <li class="vehicle-specs__item">
                        <strong>Spark Plug: </strong
                        ><a class="ui-link" href="?facets%5B%5D=2667"
                        >LMAR9EJ</a
                        >
                    </li> --}}
                </ul>
                <p class="vehicle-specs__disclaimer ui-copy">
                    For reference only, please consult your owner’s
                    manual to confirm your fitment.
                </p>
            </div>
            </div>
        @endif

            {{-- <div
            data-wrapper-for=".parts-type-toggle"
            data-wrapper-at="small medium"
            ></div> --}}

            <div
            class="shop-by-bike__wrapper shop-by-bike__wrapper--saveable"
            data-default-interface="search"
            data-js=""
            >
            <a
                class="shop-by-bike__action-button ui-action-button ui-action-button--plus"
                data-open-href
                data-open-class="authentication-form-modal"
                data-open-href-reuse-modal
                href="">Save Vehicle to Garage</a
            >

            {{-- <div
                class="shop-by-bike shop-by-bike--select"
                data-js="ShopByBike.selectInterface"
                data-qa="shop-by-bike-select"
            >
                <div
                    class="shop-by-bike__mobile-select-toggle ui-action-button ui-action-button--fast"
                    data-click-toggle
                    data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle"
                    data-qa="shop-by-bike-link"
                >
                    Shop Your Ride
                </div>
                <div class="shop-by-bike__select">
                    <div
                        class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark"
                        data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface"
                        style="display: block"
                    >
                        Garage
                        <span class="shop-by-bike__action-button-label"
                        >Select a Saved Vehicle</span
                        >
                    </div>
                    <a
                        class="shop-by-bike__action-button shop-by-bike__action-button--mobile ui-action-button ui-action-button--cog ui-action-button--bold ui-action-button--dark"
                        data-js="ShopByBike.unauthedInterface ShopByBike.logInLink"
                        data-open-href
                        data-open-class="authentication-form-modal"
                        data-open-href-reuse-modal
                        href="/auth/identity"
                        style="display: block"
                    >
                        Garage
                        <span class="shop-by-bike__action-button-label"
                        >Log In to Access Saved Vehicles</span
                        >
                    </a>

                    <div
                        class="shop-by shop-by-bike__content shop-by-bike__content--select"
                    >
                        <div class="shop-by-bike__header">
                        <span class="shop-by__heading">
                            <span class="shop-by__heading-text"
                                >Shop Your Ride</span
                            >
                        </span>

                        <span
                            class="shop-by-bike__action shop-by-bike__action--garage"
                            data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface"
                            style="display: block"
                        >
                            <span
                                class="shop-by-bike__action-label shop-by-bike__action-label--garage shop-by-bike__action-label--authed"
                                >Garage</span
                            >
                            <span
                                class="shop-by-bike__action-link ui-link"
                                >Select a Saved Vehicle</span
                            >
                        </span>

                        <span
                            class="shop-by-bike__action shop-by-bike__action--garage"
                            data-js="ShopByBike.unauthedInterface"
                            style="display: block"
                        >
                            <span
                                class="shop-by-bike__action-label shop-by-bike__action-label--garage"
                                >Garage</span
                            >
                            <a
                                class="shop-by-bike__action-link ui-link"
                                data-js="ShopByBike.logInLink"
                                data-open-href
                                data-open-class="authentication-form-modal"
                                data-open-href-reuse-modal
                                href="/auth/identity"
                                >Log In to Access Saved Vehicles</a
                            >
                        </span>

                        <span
                            class="shop-by-bike__action-label shop-by-bike__action-label--recent"
                            data-js="ShopByBike.recentBike"
                            style="display: block"
                            >Recent Vehicle</span
                        >
                        <a
                            class="shop-by-bike__action-link shop-by-bike__action-link--recent ui-link"
                            data-js="ShopByBike.recentBike ShopByBike.recentBike.link ShopByBike.vehicleLink"
                            href=""
                            style="display: block"
                        ></a>
                        <div class="shop-by-bike__form" style="margin-bottom:20px;">
                        <form class="shop-by-bike__select-dimensions" action="{{ route('shop.products') }}" method="GET" id="bikeFormm">
                            @csrf
                            <input type="hidden" name="catalogue_id" value="{{ $catalogue?$catalogue->id:'' }}">
                            <select name="company_id" id="companySelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select">
                                <option value="">Make</option>
                                @php
                                $companies = App\Models\Company::all();
                                @endphp
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>

                            <select name="bike_id" id="modelSelectt" class="shop-by-bike__select-dimension-select shop-by-bike__select-dimension-select--type ui-select" disabled>
                                <option value="">Select Model</option>
                            </select>

                            <select name="color_id" id="colorSelectt" class="form-control" disabled>
                                <option value="">Select Color</option>
                            </select>

                            <button type="submit" id="goBtnn" class="shop-by-bike__select-selection-link ui-button" disabled>Go!</button>
                        </form>
                        <div class="shop-by-bike__select-close shop-by-bike__select-close--mobile" data-click-toggle data-toggle-selector=".shop-by-bike__select, .shop-by-bike__mobile-select-toggle"></div>
                    </div>
                    </div>
                    </div>
                </div>
            </div> --}}

            <div
                class="shop-by-bike__garage-flyout garage-flyout garage-flyout--shop-by-bike"
                data-js="ShopByBike.garageFlyout"
            >
                <div class="garage-flyout__heading">
                    Select a Vehicle
                </div>
                <div data-js="ShopByBike.garageFlyout.emptyGarage">
                    <div class="garage-flyout__subheading">
                        No saved vehicles?
                    </div>
                    <div class="garage-flyout__copy">
                        Use the Shop Your Ride tool to search for parts
                        that fit your vehicle.
                    </div>
                </div>
                <div
                    data-js="ShopByBike.garageFlyout.garage"
                    style="display: none"
                >
                    <div class="garage-flyout__subheading">
                        Saved Vehicles
                    </div>
                    <div data-js="ShopByBike.garageFlyout.bikes">
                        <a
                        class="garage-flyout__link ui-link"
                        data-js="ShopByBike.garageFlyout.bikeTemplate ShopByBike.vehicleLink"
                        href=""
                        style="display: none"
                        ></a>
                        <a
                        class="garage-flyout__link garage-flyout__link--primary ui-link"
                        data-js="ShopByBike.garageFlyout.primaryBikeTemplate ShopByBike.vehicleLink"
                        href=""
                        style="display: none"
                        ></a>
                    </div>
                    <a
                        class="garage-flyout__subheading garage-flyout__subheading--manage ui-link"
                        href="/account/garage"
                        >Manage Garage</a
                    >
                </div>
            </div>

            <div
                class="shop-by-bike shop-by-bike--search"
                data-js="ShopByBike.searchInterface"
            >
                <div class="shop-by shop-by-bike__content">
                    <div class="shop-by-bike__header">
                        <span class="shop-by__heading">
                        <span class="shop-by__heading-text"
                            >Shop Your Ride</span
                        >
                        </span>
                        <span
                        class="shop-by-bike__action shop-by-bike__action--garage"
                        data-js="ShopByBike.garageFlyoutToggle ShopByBike.authedInterface"
                        style="display: block"
                        >
                        <span
                            class="shop-by-bike__action-label shop-by-bike__action-label--garage shop-by-bike__action-label--authed"
                            >Garage</span
                        >
                        <span
                            class="shop-by-bike__action-link ui-link"
                            >Select a Saved Vehicle</span
                        >
                        </span>

                        <span
                        class="shop-by-bike__action shop-by-bike__action--garage"
                        data-js="ShopByBike.unauthedInterface"
                        style="display: none"
                        >
                        <span
                            class="shop-by-bike__action-label shop-by-bike__action-label--garage"
                            >Garage</span
                        >
                        <a
                            class="shop-by-bike__action-link ui-link"
                            data-js="ShopByBike.logInLink"
                            data-open-href
                            data-open-class="authentication-form-modal"
                            data-open-href-reuse-modal
                            href="/auth/identity"
                            >Log In to Access Saved Vehicles</a
                        >
                        </span>
                    </div>
                    <div class="shop-by-bike__form">
                        <form action="{{ url('/search') }}" method="get"
      class="search-form product-index-vehicle-search__form js-product-index-vehicle-search__form"
      data-form-name="Vehicle Search">

    <div class="shop-by-bike__search-input-wrapper">
        <input aria-label="Search parts for this vehicle"
               class="shop-by-bike__search-input js-product-index-vehicle-search__input ui-text-input"
               name="query"
               id="searchInput"
               placeholder="Search parts for this vehicle"
               type="text"
               autocomplete="off"
        />
        <span class="shop-by-bike__search-input-clear"
              data-js="ShopByBike.clear"
              style="display:none"></span>
    </div>

    <button class="shop-by-bike__search-button ui-button" type="submit">
        <span class="shop-by-bike__search-button-text">Search</span>
    </button>

    <!-- Live Results -->
    <div id="searchResults"
         style="position:absolute; background:white; width:100%; z-index:999;
                border:1px solid #ddd; display:none;"></div>
</form>

<script>
const input = document.getElementById('searchInput');
const resultsBox = document.getElementById('searchResults');
let timer;

input.addEventListener('keyup', function() {
    clearTimeout(timer);
    const q = this.value.trim();
    if (!q) { resultsBox.style.display = 'none'; return; }

    timer = setTimeout(() => {
        fetch(`/search-ajax?q=${encodeURIComponent(q)}`)
        .then(res => res.json())
        .then(data => {
            if (!data.length) { resultsBox.innerHTML = '<div style="padding:10px;">No results</div>'; }
            else {
                resultsBox.innerHTML = data.map(item =>
                    `<div style="padding:8px;border-bottom:1px solid #eee;cursor:pointer"
                         onclick="window.location='/product/${item.id}'">
                        <strong>${item.name}</strong> - $${item.price}
                    </div>`
                ).join('');
            }
            resultsBox.style.display = 'block';
        });
    }, 300); // delay for smooth typing
});
</script>

                                 <span
                                    class="shop-by-bike__search-interface-toggle ui-link"
                                    data-js="ShopByBike.interfaceToggle"
                                    >Select Different Vehicle</span
                                 >
                            </div>

                </div>
            </div>
            </div>
            <script type="d9b7a4c0c5590b41998d726c-text/javascript">
            (function(w){w.__rq.push(function(req){
                req("web/static/js/sites/revzilla/components/shop_by_bike")
                .then(({ShopByBike}) => ShopByBike.init('search', 37259));
            })})(this)
            </script>
>>>>>>> 4c182987ded501b02deec36616d630990b82571f

            <div class="browse-navigation--mobile">
            <span
                class="browse-navigation__button browse-navigation__button--filter ui-button ui-button--blue ui-button--secondary ui-button--half-width"
                data-open="filters"
                data-open-class="product-index-filter-modal"
                data-qa="filter"
                >Filter<span
                    class="product-faceted-browse-index__filter-count"
                    data-js="ProductCatalog.filterCount"
                    data-filter-count="0"
                    >0</span
                ></span
            >
            <span
                class="browse-navigation__button browse-navigation__button--sort ui-button ui-button--blue ui-button--secondary ui-button--half-width"
            >
                <select
                    class="browse-navigation__mobile-sort-select"
                    data-js="ProductCatalog.sortSelect ProductCatalog.sortSelectMobile"
                    data-field-name="Sort By"
                    aria-label="Sort by"
                >
                    <option value="rating">Rating</option>

                    <option value="brand">Brand</option>

                    <option value="best_seller" selected>
                        Best Sellers
                    </option>

                    <option value="newest">Newest Arrivals</option>

                    <option value="price_asc">
                        Price: Low to High
                    </option>

                    <option value="price_desc">
                        Price: High to Low
                    </option>
                </select>
                Sort By
            </span>
            </div>

            <div class="browse-navigation--desktop">
            <div class="browse-navigation__sort_filter_options">
                <div class="browse-navigation__sort">
                    <select
                        aria-label="Sort by"
                        class="browse-navigation__sort-select ui-select"
                        data-field-name="Sort by"
                        data-js="ProductCatalog.sortSelect ProductCatalog.sortSelectDesktop"
                        name="[]"
                    >
                        <option value="rating">Sort by Rating</option>
                        <option value="brand">Sort by Brand</option>
                        <option selected value="best_seller">
                        Sort by Best Sellers
                        </option>
                        <option value="newest">
                        Sort by Newest Arrivals
                        </option>
                        <option value="price_asc">
                        Sort by Price: Low to High
                        </option>
                        <option value="price_desc">
                        Sort by Price: High to Low
                        </option>
                    </select>
                </div>

                <span
                    class="browse-navigation__view_all_for_vehicle ui-link"
                    data-js="ProductCatalog.viewAllForVehicle"
                    >View all products for this vehicle</span
                >
            </div>

            <div
                class="browse-navigation__pagination browse-navigation__pagination--top"
                data-js="ProductCatalog.paginationTop"
            >
                <div class="pagination" data-js="Pagination">
                    <a
                        href=""
                        class="pagination__incrementer pagination__incrementer--prev"
                        aria-label="Previous page"
                    >
                    </a>

                    <span class="pagination__links-wrapper">
                        <a class="pagination__page-link" href="?page=1"
                        >1</a
                        >

                        <a class="pagination__page-link" href="?page=2"
                        >2</a
                        >

                        <a class="pagination__page-link" href="?page=3"
                        >3</a
                        >

                        <a class="pagination__page-link" href="?page=4"
                        >4</a
                        >

                        <a class="pagination__page-link" href="?page=5"
                        >5</a
                        >

                        <a class="pagination__page-link" href="?page=6"
                        >6</a
                        >

                        <a class="pagination__page-link" href="?page=7"
                        >7</a
                        >

                        <a class="pagination__page-link" href="?page=8"
                        >8</a
                        >

                        <a class="pagination__page-link" href="?page=9"
                        >9</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=10"
                        >10</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=11"
                        >11</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=12"
                        >12</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=13"
                        >13</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=14"
                        >14</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=15"
                        >15</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=16"
                        >16</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=17"
                        >17</a
                        >

                        <a
                        class="pagination__page-link"
                        href="?page=18"
                        >18</a
                        >
                    </span>

                    <span class="pagination__select-wrapper">
                        <select
                        class="pagination__select product-index-pagination__select ui-select"
                        name="[]"
                        >
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        </select>
                        <span class="pagination__select-page-count">
                        of 18
                        </span>
                    </span>
                    <a
                        href="?page=2"
                        class="pagination__incrementer pagination__incrementer--next"
                        aria-label="Next page"
                    >
                    </a>
                </div>
            </div>
            </div>
    </div>

    <div class="product-index-main__results product-index-results">

         <div data-wrapper-for="" data-wrapper-at="large xlarge xxlarge">
            <div class="product-index-results__active-filters" data-js="ProductCatalog.activeFilters" style="display: none">
               <span class="product-index-active-filter__clear-all ui-link" data-js="ProductCatalog.clearFilters">Clear
               All</span>
            </div>
         </div>
         <div class="product-index-results__product-tiles">
            @foreach($products as $product)
                <div class="product-index-results__product-tile-wrapper">
                    <a class="product-index-results__product-tile product-tile"
                    href="{{ route('productpage', $product->slug) }}"
                    title="{{ $product->name }}">

                        <meta content="{{ $product->name }}" itemprop="name" />
                        <meta content="{{ $product->brand ?? 'Brand' }}" itemprop="brand" />
                        <meta content="{{ $product->id }}" itemprop="productId" />
                        <meta content="{{ $product->image }}" itemprop="image" />

                        <div class="product-tile__content">
                            {{-- Image --}}
                            <div class="product-tile__image-container">
                                <img alt="{{ $product->name }}"
                                    class="product-tile__image"
                                    src="{{ asset('images/products/image/'.$product->image )}}"
                                    width="480" height="480" />
                            </div>

                            {{-- Summary --}}

                            <div class="product-tile__summary">
                                @if ($bike)
                                <div class="product-tile__details product-tile__details--fit">
                                    <span
                                        class="product-tile__fit-message product-tile__fit-message--vehicle-specific-with-vehicle">Fits your {{ $bike->company->name }} {{ $bike->model }}
                                    </span>
                                </div>
                                @endif
                                {{-- Name --}}
                                <div class="product-tile__name">{{ $product->name }}</div>

                                {{-- Price --}}
                                <div class="product-tile__pricing">
                                    <meta content="{{ $product->price }}" itemprop="price" />
                                    <meta content="BDT" itemprop="priceCurrency" />

                                    <div class="product-tile__prices">
                                        <span class="product-tile__price-retail">
                                             ৳ {{ number_format($product->unit_price, 2) }}
                                        </span>
                                    </div>
                                </div>

                                {{-- Rating --}}
                                @if($product->reviews_count)
                                    <div class="product-tile__rating">
                                        <meta content="1" itemprop="worstRating" />
                                        <meta content="5" itemprop="bestRating" />
                                        <meta content="{{ $product->rating }}" itemprop="ratingValue" />
                                        <meta content="{{ $product->reviews_count }}" itemprop="reviewCount" />

                                        <span class="product-tile__rating-stars"
                                            data-rating="{{ $product->rating }}"></span>
                                        <span class="product-tile__rating-count">{{ $product->reviews_count }}</span>
                                    </div>
                                @endif
                                <!--<span class="product-tile__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span>-->
                                <span class="stars">
                                  ★★★★☆
                                </span>

                                <style>
                                .stars {
                                  color: gold;
                                  font-size: 18px;
                                }
                                </style>
                           <span class="product-tile__rating-count product-rating__count">182</span><img alt="Video Available" class="product-tile__video-icon" src="{{asset('Youtube_logo.png')}}"
                              height="16" width="20" />
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- Example Product Tile --}}
            {{-- Remove this block when dynamic rendering is implemented --}}
            {{-- <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
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
            </div> --}}
            {{-- <div class="product-index-results__product-tile-wrapper" data-js="ProductTile.wrapper" data-qa="product-tile">
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
            </div> --}}


            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>

         {{-- Pagination --}}
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
               <br>Why Choose Bongshal? Fast &amp; reliable shipping, no restock fees on returns, expert video product reviews, and exclusive <a href="#">RPM loyalty rewards</a>!
               <br>With our RPM loyalty program, you’ll get: cash-back rewards on purchases, discounts on 70+ top brands, free second-day shipping, free returns, and more.
               <br>Whether you need a <a href="#">motorcycle
               helmet</a>, <a href="#">jacket</a>, <a href="#">gloves</a>, <a href="#">boots</a>, or <a href="#">performance parts,</a> we make it easy to shop with confidence.
            </p>
            <br>
         </div>
      </div>
   </section>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    let companySelect = document.getElementById('companySelectt');
    let modelSelect = document.getElementById('modelSelectt');
    let colorSelect = document.getElementById('colorSelectt');
    let goBtn = document.getElementById('goBtnn');

    // When company selected -> load models
    companySelect.addEventListener('change', function() {
        let companyId = this.value;
        // alert(companyId);
        modelSelect.innerHTML = '<option value="">Select Model</option>';
        colorSelect.innerHTML = '<option value="">Select Color</option>';
        modelSelect.disabled = true;
        colorSelect.disabled = true;
        goBtn.disabled = true;

        if (companyId) {
            console.log("Fetching models for company ID:", companyId); // Debugging line

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
                            colorSelect.innerHTML += `<option value="${color.id}" data-image="${color.image}">${color.color_name} </option>`;
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
// $('#colorSelectt').select2({
//     templateResult: function (data) {
//         if (!data.id) return data.text;
//         let img = $(data.element).data('image');
//         return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" width="50" height="50" style="margin-right:5px;"> ${data.text}</span>`);
//     },
//     templateSelection: function (data) {
//         if (!data.id) return data.text;
//         let img = $(data.element).data('image');
//         return $(`<span>
//                 <img src="{{ asset('images/multiimage/bike') }}/${img}" width="50" height="50" style="margin-right:5px;">${data.text}</span>`);}
//         });


   </script>
    {{-- <script>
document.addEventListener("DOMContentLoaded", function () {
    const vehicleSpecs = document.querySelector(".vehicle-specs");
    const shopForm = document.querySelector("[data-js='ShopByBike.selectInterfacse']");
    const differentVehicleBtn = document.querySelector("[data-js='ShopByBike.interfaceToggle']");
    const goBtn = document.querySelector("#goBtnn");

    // Hide specs initially, show form
    vehicleSpecs.style.display = "none";
    shopForm.style.display = "block";

    // When "Go!" clicked → show specs, hide form
    if (goBtn) {
        goBtn.addEventListener("click", function (e) {
            e.preventDefault(); // stop form submit
            vehicleSpecs.style.display = "block";
            shopForm.style.display = "none";
        });
    }

    // When "Select Different Vehicle" clicked → show form, hide specs
    if (differentVehicleBtn) {
        differentVehicleBtn.addEventListener("click", function (e) {
            e.preventDefault();
            vehicleSpecs.style.display = "none";
            shopForm.style.display = "block";
        });
    }
});


    </script> --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
    const selectForm = document.querySelector(".shop-by-bike--select .shop-by-bike__form");
    const searchForm = document.querySelector(".shop-by-bike--search .shop-by-bike__form");
    const goBtn = document.querySelector("#goBtnn");
    const differentVehicleBtn = document.querySelector("[data-js='ShopByBike.interfaceToggle']");

    if (!selectForm || !searchForm) {
        console.error("❌ Could not find forms");
        return;
    }

    // Initial state → show select form, hide search form
    selectForm.style.display = "block";
    searchForm.style.display = "none";

    // When Go! clicked → hide select form, show search form
    if (goBtn) {
        goBtn.addEventListener("click", function (e) {
            e.preventDefault(); // prevent form submit for now
            selectForm.style.display = "none";
            searchForm.style.display = "block";
            console.log("👉 Go clicked: show search form, hide select form");
        });
    }

    // When "Select Different Vehicle" clicked → reverse
    if (differentVehicleBtn) {
        differentVehicleBtn.addEventListener("click", function (e) {
            e.preventDefault();
            selectForm.style.display = "block";
            searchForm.style.display = "none";
            console.log("👉 Different Vehicle clicked: show select form, hide search form");
        });
    }
});
</script> --}}

    {{-- <script>
        $(function () {
            // elements (adjust IDs if yours differ)
            const $company = $('#companySelectt');   // <select name="company_id" id="companySelect">
            const $model   = $('#modelSelectt');     // <select name="bike_id" id="modelSelect">
            const $color   = $('#colorSelectt');     // <select name="color_id" id="colorSelect">
            // 'Go' may be a button or an anchor; try to find both
            const $goBtn   = $('#goBtnn').length ? $('#goBtnn') : $('.shop-by-bike__select-selection-link[data-js="VehicleSelector.selection"]');

            const getModelsUrl  = "{{ url('/get-models') }}";   // GET /get-models/{companyId}
            const getColorsUrl  = "{{ url('/get-colors') }}";   // GET /get-colors/{bikeId}
            const productsRoute = "{{ route('shop.products') }}"; // result page (GET)

            // helper: enable/disable the Go control and set href when it's an <a>
            function setGoEnabled(enabled) {
                $goBtn.each(function () {
                    const $el = $(this);
                    if ($el.is('a')) {
                        if (enabled) {
                            $el.removeAttr('aria-disabled').removeClass('disabled').attr('href', buildProductsUrl());
                        } else {
                            $el.attr('aria-disabled', 'true').addClass('disabled').attr('href', 'javascript:void(0)');
                        }
                    } else { // button/input
                        $el.prop('disabled', !enabled);
                    }
                });
            }

            // build target URL (for anchor or manual redirect)
            function buildProductsUrl() {
                const params = [];
                if ($company.val()) params.push('company_id=' + encodeURIComponent($company.val()));
                if ($model.val())   params.push('bike_id='    + encodeURIComponent($model.val()));
                if ($color.val())   params.push('color_id='   + encodeURIComponent($color.val()));
                return productsRoute + (params.length ? ('?' + params.join('&')) : '');
            }

            // reset helpers
            function resetModel() {
                // destroy select2 if initialized
                if ($.fn.select2 && $model.hasClass('select2-hidden-accessible')) {
                    $model.select2('destroy');
                }
                $model.empty().append('<option value="">Select Model</option>').prop('disabled', true);
            }
            function resetColor() {
                if ($.fn.select2 && $color.hasClass('select2-hidden-accessible')) {
                    $color.select2('destroy');
                }
                $color.empty().append('<option value="">Select Color</option>').prop('disabled', true);
            }

            // initial state
            resetModel();
            resetColor();
            setGoEnabled(false);

            // company -> load models
            $company.on('change', function () {
                const companyId = $(this).val();
                resetModel();
                resetColor();
                setGoEnabled(false);

                if (!companyId) return;

                $.getJSON(getModelsUrl + '/' + companyId)
                .done(function (models) {
                    if (Array.isArray(models) && models.length > 0) {
                        models.forEach(function (m) {
                            // adapt property names if different (model_name, name, etc.)
                            const label = m.model_name ?? m.name ?? m.model ?? ('Model ' + m.id);
                            $model.append(`<option value="${m.id}">${label}</option>`);
                        });
                        $model.prop('disabled', false);

                        // if you want model select to be Select2, init here (optional)
                        // if ($.fn.select2 && $model.hasClass('use-select2')) { $model.select2(); }
                    } else {
                        // no models found -> allow GO with company-only filter
                        setGoEnabled(true);
                    }
                })
                .fail(function (xhr) {
                    console.error('Failed loading models', xhr);
                });
            });

            // model -> load colors
            $model.on('change', function () {
                const bikeId = $(this).val();
                resetColor();
                setGoEnabled(false);

                if (!bikeId) {
                    // if company selected but model cleared, allow GO only if you want -> here we disable
                    return;
                }

                $.getJSON(getColorsUrl + '/' + bikeId)
                .done(function (colors) {
                    if (Array.isArray(colors) && colors.length > 0) {
                        colors.forEach(function (c) {
                            // store image url in data-image for Select2 template
                            const label = c.color_name ?? c.name ?? ('Color ' + c.id);
                            const img   = c.image_url ?? c.image ?? '';
                            $color.append(`<option value="${c.id}" data-image="${img}">${label}</option>`);
                        });

                        // Re-init Select2 for color if present
                        if ($.fn.select2) {
                            // destroy old then init fresh
                            if ($color.hasClass('select2-hidden-accessible')) {
                                $color.select2('destroy');
                            }
                            $color.prop('disabled', false);

                            $color.select2({
                                width: 'resolve',
                                templateResult: function (data) {
                                    if (!data.id) return data.text;
                                    const img = $(data.element).data('image');
                                    if (img) return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" style="width:50px;height:50px;margin-right:6px;object-fit:cover;"> ${data.text}</span>`);
                                    return data.text;
                                },
                                templateSelection: function (data) {
                                    if (!data.id) return data.text;
                                    const img = $(data.element).data('image');
                                    if (img) return $(`<span><img src="{{ asset('images/multiimage/bike') }}/${img}" style="width:50px;height:50px;margin-right:6px;object-fit:cover;"> ${data.text}</span>`);
                                    return data.text;
                                },
                                escapeMarkup: function (m) { return m; }
                            });
                        } else {
                            $color.prop('disabled', false);
                        }

                        // enable Go after model/colors are available
                        setGoEnabled(true);
                    } else {
                        // no colors -> still allow GO (filtered by model only)
                        setGoEnabled(true);
                    }
                })
                .fail(function (xhr) {
                    console.error('Failed loading colors', xhr);
                });
            });

            // when color changed -> update Go url (and enable)
            $color.on('change', function () {
                setGoEnabled(!!$company.val()); // enable if company present, adjust logic if you require model/color too
            });

            // If Go is an anchor and user clicks, it will navigate to the built URL.
            // If Go is a button inside the form (type=submit), the form will submit normally to route('shop.products').
            // For defensive handling of anchor click (in case JS built href failed), ensure click handler:
            $goBtn.on('click', function (e) {
                const $el = $(this);
                // if anchor disabled via aria-disabled, prevent
                if ($el.is('a') && $el.attr('aria-disabled') === 'true') {
                    e.preventDefault();
                    return false;
                }
                // if anchor and href is javascript:void(0), build url and go:
                if ($el.is('a') && ($el.attr('href') === 'javascript:void(0)' || !$el.attr('href'))) {
                    e.preventDefault();
                    const url = buildProductsUrl();
                    if (url) window.location.href = url;
                }
                // else for button -> normal submit will handle
            });

            // debug helper: show current URL in console (optional)
            // setInterval(() => console.log('GO URL ->', buildProductsUrl()), 3000);
        });
    </script> --}}

@endsection

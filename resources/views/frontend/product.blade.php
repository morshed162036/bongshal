@extends('frontend.layout.main')
@section('title', 'Product Page')
@section('content')

<div class="component-top-content">
            </div>
            <div class="product-show-summary__alerts  product-show-alerts"></div>
            <div class="product-show-summary js-SkuSelector-1100726 product-show-summary--smaller-gallery" data-product="" data-product-id="1100726" data-js="GalleryVideo.videoOverlay">
                <div class="product-show-summary__content">
                    <div class="product-show-summary__breadcrumbs  product-show-breadcrumbs">
                        <nav class="breadcrumbs " data-section-type="Navigation" data-section-name="Breadcrumbs" data-horizontal-scroll="">
                            <ol class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList" data-js="Breadcrumbs.list">

                                <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a class="breadcrumbs__link" href="{{ route('homepage') }}" itemprop="item">Home</a>
                                    <meta content="Home" itemprop="name">
                                    <meta content="1" itemprop="position">
                                </li>

                                <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a class="breadcrumbs__link" href="{{ route('shop.catalogue',$product->category->catalogue->id) }}" itemprop="item">{{ $product->category->catalogue->name }}</a>
                                    <meta content="{{ $product->category->catalogue->name }}" itemprop="name">
                                    <meta content="2" itemprop="position">
                                </li>

                                <li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a class="breadcrumbs__link" href="{{ route('shop.category',$product->category->id) }}" itemprop="item">{{ $product->category->name }}</a>
                                    <meta content="{{ $product->category->name }}" itemprop="name">
                                    <meta content="3" itemprop="position">
                                </li>

                            </ol>
                        </nav>

                    </div>

                    <div class="product-show-summary__details product-show-details">
                        {{-- <section class="product-show-details-name__sashes-and-badges  ">
                            <div class="badge badge--horizontal product-show-details-name__badge">
                                <div class="badge__message badge__message--top-rated">Top Rated</div>
                            </div>
                        </section> --}}

                        <div class="product-show-details__name  product-show-details-name">

                            {{-- <a class="product-show-details-name__link ui-link" href="/arai-helmets">Arai Helmets</a> --}}

                            <h1 class="product-show-details-name__name" data-qa="product-name">
                                {{ $product->name }}
                            </h1>
                        </div>

                        <div class="product-show-details__ids  product-show-details-ids">
                            <div class="product-show-details-ids__ids">
                                <span class="product-show-details-ids__id" style="display: none;">
                                Item: P1100726
                                </span>

                                <span class="product-show-details-ids__id js-SkuSelector-skuInfo" >
                                    SKU: {{ $product->sku }}
                                    <span class="js-SkuSelector-skuInfoId"></span>
                                </span>
                            </div>
                        </div>

                        {{-- <div data-js="ReviewInterface.hoverReviewsContainer" class="product-show-details__ugc  product-show-details-ugc">
                            <div class="product-show-details-ugc__rating-stars-wrapper">
                                <div class="product-show-details-ugc__rating-stars  product-rating__stars" data-rating="4.5" data-js="ReviewInterface.ratingStars">
                                    <div class="product-show-details-ugc__turnto"></div>
                                </div>
                            </div>


                            <a class="product-show-details-ugc__ratings-link product-show-details-ugc__ratings-link--read product-show-details-ugc__ratings-link--read-count ui-link" data-js="JumpLink.link Accordion.link" data-accordion-link-bem-name="product-show-section-accordion"
                            data-review-count="182" href="#product-reviews-mobile">182</a>
                            <a class="product-show-details-ugc__ratings-link  product-show-details-ugc__ratings-link--read ui-link" data-js="JumpLink.link Tabs.link ReviewInterface.readLink" data-singular-language="Read 1 Review" data-plural-language="Read 2 Reviews" data-review-count="182"
                            data-js-tab-id="product-reviews" href="#product-reviews">Read 182
                            Reviews</a>

                            <span class="product-show-details-ugc__divider"></span>
                            <a class="product-show-details-ugc__ratings-link  product-show-details-ugc__ratings-link--qa ui-link" data-js="JumpLink.link Tabs.link" data-js-tab-id="product-qa" data-tab-id="product-qa" href="#product-reviews">24 Q&amp;As</a>


                            <span class="product-show-details-ugc__divider"></span>
                            <span class="reviews-write product-show-details-ugc__ratings-link  product-show-details-ugc__ratings-link--write ui-link" data-js="ReviewInterface.writeLink">Write a Review</span>

                        </div> --}}


                    </div>

                    <div class="product-show-summary__image product-show-image">

                        <div class="product-show-media-image product-show-media__image" data-js="GalleryVideoButton.mediaContainer">

                            <div class="product-show-media-image__wrapper">
                                <div class="product-show-media-image__video-wrapper" data-js="GalleryVideoButton.videoOverlay">
                                    <button class="product-show-media-image__video-close-button" data-js="GalleryVideoButton.videoCloseButton">Close</button>

                                    {{-- <div class="product-show-media__video  product-show-media-video" id="primary-video" data-primary-video="">
                                        <div class="product-show-media-video__iframe-wrapper">

                                            <div class="product-show-media-video__lazy-youtube lazy-youtube" itemscope="" itemtype="http://schema.org/VideoObject" data-lazy-src="https://img.youtube.com/vi/{{ $product->video }}/0.jpg">
                                                <meta content="https://img.youtube.com/vi/{{ $product->video }}/0.jpg" itemprop="thumbnailURL">
                                                <meta content="https://www.youtube.com/embed/{{ $product->video }}" itemprop="embedURL">

                                                <meta content="Arai unveils their entry-level helmet, and it’s the perfect introduction to Japan’s finest. Utilizing a PB-cLc shell, the Regent-X uses a multi density EPS derived from their top-shelf models. Free Flow System (FFS) ventilation keeps riders cool and comfortable. The Regent-X uses Arai’s VAS-V Max Vision shield system, and the shield itself is pinlock ready. (Pinlock insert not included.) Additional features include an anti-microbial liner, speaker pockets, a chin curtain, and DOT/Snell M2020 certification."
                                                itemprop="description">


                                                <meta content="2020-3-9" itemprop="uploadDate">


                                                <meta content="Arai Regent-x Helmet Review" itemprop="name">

                                                <div class="lazy-youtube__frame" data-js="LazyYoutube.fakeEmbed" data-js-youtube-id="{{ $product->video }}">
                                                    <div class="lazy-youtube__thumbnail">
                                                        <button aria-label="Play youtube" class="lazy-youtube__play-button">
                                                            <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                                                <path class="lazy-youtube__play-button-background" d="m .66,37.62 c 0,0 .66,4.70 2.70,6.77 2.58,2.71 5.98,2.63 7.49,2.91 5.43,.52 23.10,.68 23.12,.68 .00,-1.3e-5 14.29,-0.02 23.81,-0.71 1.32,-0.15 4.22,-0.17 6.81,-2.89 2.03,-2.07 2.70,-6.77 2.70,-6.77 0,0 .67,-5.52 .67,-11.04 l 0,-5.17 c 0,-5.52 -0.67,-11.04 -0.67,-11.04 0,0 -0.66,-4.70 -2.70,-6.77 C 62.03,.86 59.13,.84 57.80,.69 48.28,0 34.00,0 34.00,0 33.97,0 19.69,0 10.18,.69 8.85,.84 5.95,.86 3.36,3.58 1.32,5.65 .66,10.35 .66,10.35 c 0,0 -0.55,4.50 -0.66,9.45 l 0,8.36 c .10,4.94 .66,9.45 .66,9.45 z"
                                                                fill="#1f1f1e" fill-opacity="0.9"></path>
                                                                <path d="m 26.96,13.67 18.37,9.62 -18.37,9.55 -0.00,-19.17 z" fill="#fff"></path>
                                                                <path d="M 45.02,23.46 45.32,23.28 26.96,13.67 43.32,24.34 45.02,23.46 z" fill="#ccc"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="lazy-youtube__top-section">
                                                        <div class="lazy-youtube__title">
                                                            <div class="lazy-youtube__title-text">
                                                                <a class="lazy-youtube__title-link" target="_blank" href="https://www.youtube.com/watch?v=UuNpfXkA7DM">Arai Regent-x
                                                   Helmet Review</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}

                                </div>


                                <div class="hover-zoom hover-zoom--not-zooming hover-zoom--done-zooming-out" data-js="HoverZoom.interface">
                                    <div class="product-show-media-image__image-wrapper">
                                        <div class="hover-zoom__image-wrapper"><img alt="Frost Black" class="product-show-media-image__image" data-js="Gallery.activeImage" src="{{ asset('images/products/image/'.$product->image) }}" data-src="{{ asset('images/products/image/'.$product->image) }}"
                                            style="transform: translate3d(0px, 0px, 0px) scale(1); transition: transform 150ms ease-in;">
                                        </div>
                                    </div>
                                    <a class="hover-zoom__full-screen-launch" data-js="Gallery.zoomLaunch">
                                        <span class="hover-zoom__full-screen-launch-text">
                                 Fullscreen Zoom
                              </span>
                                    </a>
                                    <div class="hover-zoom__preview-window" style="display: block; top: 100.3px; left: 297.7px;">
                                    </div>
                                    <div class="hover-zoom__close"></div>
                                </div>

                            </div>
                            <div class="product-show-media-image__thumbnails product-show-media-image__thumbnails--has-videos">
                                <div class="product-show-media-image__video-button-wrapper">
                                    <div class="product-show-media-image__video-button" data-js="GalleryVideoButton.videoButton" data-js-youtube="actualizeFakeEmbeds"></div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="{{ asset('images/products/image/'.$product->image) }}" itemprop="contentUrl">
                                    <meta content="{{ $product->name }}" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="{{ asset('images/products/image/'.$product->image) }}" data-js="Gallery.thumbnailImage" title="{{ $product->name }}" style="background-image: url(&quot;{{ asset('images/products/image/'.$product->image) }}&quot;);">
                                    </div>
                                </div>
                                {{-- Loop for multiple images --}}

                                @if ($product->images)
                                    @foreach (($product->images) as $image)
                                        <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                            <meta content="{{ asset('images/products/multi/'.$image->image) }}" itemprop="contentUrl">
                                            <meta content="{{ $product->name }}" itemprop="caption">
                                            <div class="product-show-media-image__thumbnail-image" data-src="{{ asset('images/products/multi/'.$image->image) }}" data-js="Gallery.thumbnailImage" title="{{ $product->name }}" style="background-image: url(&quot;{{ asset('images/products/multi/'.$image->image) }}&quot;);">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                {{-- <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet.jpg" itemprop="contentUrl">
                                    <meta content="Frost Black Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+12" title="Frost Black" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4611/arai_regent_x_helmet_black_frost.jpg" itemprop="contentUrl">
                                    <meta content="Frost Black Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4611/arai_regent_x_helmet_black_frost.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+11" title="Frost Black" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4611/arai_regent_x_helmet_black_frost_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet.jpg" itemprop="contentUrl">
                                    <meta content="White Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+10" title="White" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4645/arai_regent_x_helmet_white.jpg" itemprop="contentUrl">
                                    <meta content="White Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4645/arai_regent_x_helmet_white.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+9" title="White" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4645/arai_regent_x_helmet_white_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet.jpg" itemprop="contentUrl">
                                    <meta content="Modern Grey Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+8" title="Modern Grey" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4679/arai_regent_x_helmet_modern_grey.jpg" itemprop="contentUrl">
                                    <meta content="Modern Grey Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4679/arai_regent_x_helmet_modern_grey.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+7" title="Modern Grey" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4679/arai_regent_x_helmet_modern_grey_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver.jpg" itemprop="contentUrl">
                                    <meta content="Aluminum Silver Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+6" title="Aluminum Silver" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4713/arai_regent_x_helmet_aluminum_silver.jpg" itemprop="contentUrl">
                                    <meta content="Aluminum Silver Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4713/arai_regent_x_helmet_aluminum_silver.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+5" title="Aluminum Silver" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4713/arai_regent_x_helmet_aluminum_silver_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet.jpg" itemprop="contentUrl">
                                    <meta content="Code Red Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+4" title="Code Red" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet.jpg" itemprop="contentUrl">
                                    <meta content="Code Yellow Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+3" title="Code Yellow" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal.jpg" itemprop="contentUrl">
                                    <meta content="Frost Gunmetal Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+2" title="Frost Gunmetal" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject" aria-selected="true">
                                    <meta content="https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory.jpg" itemprop="contentUrl">
                                    <meta content="Modern Ivory Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory.jpg" data-js="Gallery.thumbnailImage" data-more-images-count="+1" title="Modern Ivory" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory_75x75.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="product-show-media-image__thumbnail" data-js="Gallery.thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
                                    <meta content="https://www.revzilla.com/product_images/2337/4798/arai_regent_x_helmet_modern_ivory.jpg" itemprop="contentUrl">
                                    <meta content="Modern Ivory Arai Regent-X Helmet" itemprop="caption">
                                    <div class="product-show-media-image__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4798/arai_regent_x_helmet_modern_ivory.jpg" data-js="Gallery.thumbnailImage" title="Modern Ivory" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4798/arai_regent_x_helmet_modern_ivory_75x75.jpg&quot;);">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="product-show-summary__pricing product-show-pricing">


                        <div class="product-show-details-pricing">
                            <div class="product-show-details-pricing__pricing-container">
                                <div class="product-show-details-pricing__pricing-container-price-and-tooltips">
                                    <span class="product-show-details-pricing__price js-SkuSelector-priceRetail" data-qa="price">
                                        <span class="mny">
                                        <span class="mny__c">৳ </span>{{ $product->unit_price }}
                                    {{-- <sup class="mny__s">.</sup><sup>95</sup> --}}
                                        </span>
                                    </span>


                                </div>

                                <div class="product-show-details-pricing__price-additional-info">

                                </div>
                            </div>

                        </div>

                        {{-- <div class="rebate-callout" data-js="rebateCallout">
                            <div class="rebate-callout__text-wrapper">
                                <span class="rebate-callout__text">
                           Rebate Available!
                           <a class="rebate-callout__link" target="_blank" href="${this.ops.link}"
                              data-js="rebateCallout.link" rel="noopener">View Details</a>
                        </span>
                            </div>
                        </div> --}}

                    </div>

                    <div class="product-show-summary__sku  product-show-sku">



                        <div class="product-show-sku__affirm product-show-sku__affirm--desktop">
                            <div class="product-show-sku-actions__action-wrapper  product-show-sku-actions__action-wrapper--primary  product-show-sku-actions__action-wrapper--affirm">

                            </div>
                        </div>




                        {{-- <div class="product-show-sku__international-exclusions">
                            <div class="alert alert--warning" data-js="">
                                <div class="alert__icon  alert__icon--warning"></div>
                                <div class="alert__message  alert__message--warning">
                                    This item will not ship to Bangladesh due to manufacturer or carrier restrictions, however you can ship FREE to The United States.
                                </div>
                            </div>
                        </div> --}}






                        <div class="product-show-sku__options product-show-details-options">


                            {{-- <div class="product-show-sku-actions__action-wrapper  product-show-sku-actions__action-wrapper--full-width">
                                <div data-wrapper-for=".product-show-sku-actions__link--size-chart" data-wrapper-at="small medium"></div>

                                <label class="js-SkuSelector-container option-type option-type--swatchable option-type--multi-option">

                                    <span class="option-type__label  option-type__label--name">Color:</span>

                                    <span class="option-type__label  option-type__label--selected-option" data-js="OptionSwatcher.selectedOptionLabel  SkuSelector.selectedOptionLabel" data-qa="selected-option">Modern Ivory</span>
                                    <span class="option-type__label  option-type__label--highlighted-option" data-js="OptionSwatcher.highlightedOptionLabel" style="display: none;"></span>
                                    <span class="option-type__label  option-type__label--missing-selection-notification" data-js="SkuSelector.skuNotificationMessage" data-option-name="Color">
                                        Select a Color
                                    </span>



                                    <select aria-hidden="" aria-label="Color" class="option-type__select ui-select js-SkuSelector-optionType" data-option-type="2" data-option-type-name="Color" data-option-type-name-label="Color" required="">
                                        <option data-order="0">Select Color</option>
                                        <option data-label="Frost Black" data-order="1" selected="" value="6147">Frost Black
                                        </option>
                                        <option data-label="White" data-order="2" value="30">White</option>
                                        <option data-label="Modern Grey" data-order="3" value="38580">Modern Grey</option>
                                        <option data-label="Aluminum Silver" data-order="4" value="3440">Aluminum Silver</option>
                                        <option data-label="Code Red" data-order="5" value="40894">Code Red</option>
                                        <option data-label="Code Yellow" data-order="6" value="40895">Code Yellow</option>
                                        <option data-label="Frost Gunmetal" data-order="7" value="37016">Frost Gunmetal</option>
                                        <option data-label="Modern Ivory" data-order="8" value="42230">Modern Ivory</option>
                                    </select>

                                    <div class="option-type__swatches-scroll-wrapper">

                                        <div class="option-type__swatches">
                                            <input aria-label="Frost Black" checked="" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_6147" name="product_1100726_option_type_2" type="radio" value="6147">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="6147" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-label="Frost Black" data-qa="Frost Black" title="Frost Black" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="White" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_30" name="product_1100726_option_type_2" type="radio" value="30">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="30" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-label="White" data-qa="White" title="White" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Modern Grey" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_38580" name="product_1100726_option_type_2" type="radio" value="38580">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="38580" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-label="Modern Grey" data-qa="Modern Grey" title="Modern Grey" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Aluminum Silver" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_3440" name="product_1100726_option_type_2" type="radio" value="3440">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="3440" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver.jpg" data-js="Gallery.thumbnailImage" data-label="Aluminum Silver" data-qa="Aluminum Silver" title="Aluminum Silver"
                                                style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Code Red" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_40894" name="product_1100726_option_type_2" type="radio" value="40894">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="40894" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-label="Code Red" data-qa="Code Red" title="Code Red" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Code Yellow" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_40895" name="product_1100726_option_type_2" type="radio" value="40895">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="40895" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet.jpg" data-js="Gallery.thumbnailImage" data-label="Code Yellow" data-qa="Code Yellow" title="Code Yellow" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Frost Gunmetal" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_37016" name="product_1100726_option_type_2" type="radio" value="37016">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="37016" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal.jpg" data-js="Gallery.thumbnailImage" data-label="Frost Gunmetal" data-qa="Frost Gunmetal" title="Frost Gunmetal"
                                                style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                            <input aria-label="Modern Ivory" class="option-type__radio  undefined" data-option-type="2" id="product_1100726_option_type_2_option_42230" name="product_1100726_option_type_2" type="radio" value="42230">
                                            <div class="option-type__thumbnail js-SwatchSelector-thumbnail" data-option-id="42230" itemscope="" itemtype="http://schema.org/ImageObject" aria-selected="true">
                                                <div class="option-type__thumbnail-image" data-src="https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory.jpg" data-js="Gallery.thumbnailImage" data-label="Modern Ivory" data-qa="Modern Ivory" title="Modern Ivory" style="background-image: url(&quot;https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory_75x75.jpg&quot;);">
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </label>

                            </div> --}}



                            <div class="product-show-sku-actions__action-wrapper">
                                <div data-wrapper-for=".product-show-sku-actions__link--size-chart" data-wrapper-at="small medium"></div>

                                <label class="js-SkuSelector-container option-type option-type--chartable option-type--multi-option">

                                    <span class="option-type__label  option-type__label--name">Size:</span>

                                    <span class="option-type__label  option-type__label--selected-option" data-js="OptionSwatcher.selectedOptionLabel  SkuSelector.selectedOptionLabel" data-qa="selected-option"></span>
                                    <span class="option-type__label  option-type__label--highlighted-option" data-js="OptionSwatcher.highlightedOptionLabel"></span>
                                    <span class="option-type__label  option-type__label--missing-selection-notification" data-js="SkuSelector.skuNotificationMessage" data-option-name="Size">
                              Select a Size
                           </span>

                                    <select aria-hidden="" aria-label="Size" class="option-type__select ui-select js-SkuSelector-optionType" data-option-type="1" data-option-type-name="Size" data-option-type-name-label="Size" required="">
                                        <option data-order="0">Select Size</option>
                                        <option data-label="XS" data-order="1" value="117" class="out_of_stock">XS [Out of Stock]
                                        </option>
                                        <option data-label="SM" data-order="2" value="4" class="out_of_stock">SM [Out of Stock]
                                        </option>
                                        <option data-label="MD" data-order="3" value="5">MD</option>
                                        <option data-label="LG" data-order="4" value="6">LG</option>
                                        <option data-label="XL" data-order="5" value="7">XL</option>
                                        <option data-label="2XL" data-order="6" value="8" class="out_of_stock">2XL [Out of Stock]
                                        </option>
                                    </select>


                                    <div class="option-type__button-option-selector">

                                        <div class="option-type__size-option js-ButtonOptionSelector-option out_of_stock" data-option-id="117" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            XS
                                        </div>

                                        <div class="option-type__size-option js-ButtonOptionSelector-option out_of_stock" data-option-id="4" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            SM
                                        </div>

                                        <div class="option-type__size-option js-ButtonOptionSelector-option" data-option-id="5" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            MD
                                        </div>

                                        <div class="option-type__size-option js-ButtonOptionSelector-option" data-option-id="6" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            LG
                                        </div>

                                        <div class="option-type__size-option js-ButtonOptionSelector-option" data-option-id="7" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            XL
                                        </div>

                                        <div class="option-type__size-option js-ButtonOptionSelector-option out_of_stock" data-option-id="8" data-class="option-type__size-option js-ButtonOptionSelector-option">
                                            2XL
                                        </div>

                                    </div>

                                </label>

                            </div>

                            <div class="product-show-sku-actions__link-wrapper  product-show-sku-actions__link-wrapper--size-chart">
                                <div data-wrapper-for=".product-show-sku-actions__link--size-chart" data-wrapper-at="large xlarge xxlarge">
                                    <a class="product-show-sku-actions__link--size-chart ui-link" data-open-href="" href="#">View Size Chart</a>
                                </div>
                            </div>


                        </div>

                        <div class="product-show-sku__actions  product-show-actions">
                            <div class="product-show-sku-actions__action-wrapper" data-is-available="false">
                            </div>
                        </div>

                        {{-- <div class="loyalty-value-props">
                            <p class="loyalty-value-props__ways-to-earn">Ways to earn:</p>

                            <a class="" data-js="Pdp.valueProp" data-open-href="" data-open-href-reuse-modal="" href="/value-prop/zilla-cash">
                                <div class="loyalty-value-props__zillacash">
                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.34 16.2">
                                        <path d="M.44,12.92L6.3,3.36H2.05L2.5.21h8.33l-.44,3.15-5.86,9.56h4.78l-.44,3.15H0l.44-3.15Z">
                                        </path>
                                        <path d="M11.8,5.13h3.51l-1.61,10.94h-3.51l1.61-10.94ZM12.66.07h3.51l-.49,3.34h-3.51l.49-3.34Z">
                                        </path>
                                        <path d="M17.87,0h3.51l-2.26,16.07h-3.51L17.87,0Z"></path>
                                        <path d="M23.29,0h3.51l-2.26,16.07h-3.51L23.29,0Z"></path>
                                        <path d="M26.71,11.93l.47-3.34c.34-2.47.49-4.06,3.57-4.06,1.04,0,1.84.38,2.2,1.12l.13-.99h3.51l-1.48,10.53c-.06.51.02.7.08.89h-3.51c-.11-.21-.11-.61-.04-.89-.51.72-1.31,1.02-2.11,1.02-3.09,0-3.15-1.78-2.81-4.27ZM32.06,11.95l.44-3.17c.13-.89.19-1.44-.74-1.44s-.97.44-1.1,1.33l-.44,3.17c-.13.91-.23,1.52.7,1.52s1.01-.51,1.14-1.42Z">
                                        </path>
                                        <path d="M47.59,11.1c-.87,3.76-2.01,5.1-5.63,5.1s-5.08-1.92-4.57-5.63l.74-5.29c.53-3.72,2.05-5.2,5.67-5.2s4.86,1.63,4.57,5.5h-3.76c.08-1.5.28-2.26-1.04-2.26s-1.5.76-1.73,2.5l-.61,4.44c-.23,1.67-.36,2.69.99,2.69,1.21,0,1.29-.57,1.56-1.84h3.81Z">
                                        </path>
                                        <path d="M48.6,11.93l.47-3.34c.34-2.47.49-4.06,3.57-4.06,1.04,0,1.84.38,2.2,1.12l.13-.99h3.51l-1.48,10.53c-.06.51.02.7.08.89h-3.51c-.11-.21-.11-.61-.04-.89-.51.72-1.31,1.02-2.12,1.02-3.09,0-3.15-1.78-2.81-4.27ZM53.95,11.95l.44-3.17c.13-.89.19-1.44-.74-1.44s-.97.44-1.1,1.33l-.44,3.17c-.13.91-.23,1.52.7,1.52s1.02-.51,1.14-1.42Z">
                                        </path>
                                        <path d="M62.03,12.52c-.02.78.06,1.21.82,1.21.66,0,1.08-.02,1.08-.72,0-1.67-4.34-1.33-4.34-4.65,0-2.66,1.12-3.83,4.48-3.83s3.93,1.48,3.83,3.57h-3.34c.04-.72-.06-1.08-.7-1.08-.53,0-.87.13-.87.7,0,1.42,4.27,1.31,4.31,4.44.04,2.88-1.08,4.04-4.61,4.04s-4.06-1.23-3.93-3.68h3.26Z">
                                        </path>
                                        <path d="M70.52,0h3.51l-.76,5.52c.42-.7.99-.99,2.31-.99,2.77,0,2.94,1.48,2.69,3.34l-1.16,8.21h-3.51l1.08-7.61c.11-.7.13-1.04-.78-1.04-.72,0-.93.32-1.02.95l-1.08,7.7h-3.51l2.24-16.07Z">
                                        </path>
                                    </svg>

                                    <span class="loyalty-value-props__zillacash-message">
                              You'll earn

                              <span class="loyalty-value-props__zillacash-value">$25.00</span> in ZillaCash
                                    </span>
                                    <span class="loyalty-value-props__zillacash-icon"></span>
                                </div>
                            </a>


                            <div class="loyalty-value-props__divider"><span class="loyalty-value-props__divider-or">OR</span>
                            </div>


                            <label type="button" class="loyalty-value-props__rpm js-ClpInfoPanel-pdpToggle" for="rpm-sales-pitch-panel" aria-haspopup="dialog" aria-controls="Riders Preferred Membership information panel">
                                <img class="loyalty-value-props__rpm-logo" src="{{asset('frontend/image/small/rpmsmall.svg')}}" alt="Riders Preferred Membership logo">
                                <span class="loyalty-value-props__rpm-message">
                           Members get up to
                           <span class="loyalty-value-props__rpm-value js-SkuSelector-rpmTotalValue">$44</span> in total value.
                                <span class="loyalty-value-props__rpm-message-upgrade-now" for="rpm-sales-pitch-panel">Upgrade Now</span>
                                </span>
                                <span class="loyalty-value-props__rpm-icon"></span>
                            </label>
                            <div class="loyalty-value-props__rpm-info-for-modal" style="display:none;">
                                <span class="js-SkuSelector-rpmDiscountSavings" data-min-rpm-discount-savings-amount="0.00" style="display: none;"></span>
                                <span class="js-SkuSelector-rpmCashback" data-min-rpm-cashback-earnings-amount="28.9975"></span>
                                <span class="js-SkuSelector-rpmWelcomeCredit" data-welcome-credit-amount="15"></span>
                            </div>

                        </div> --}}


                        <form action="/cart/add-item" class="js-SkuSelector-form js-ProductForm-form" data-form-name="Add To Cart" data-remote-add-to-wish-list="" data-auth="" data-selfref="/motorcycle/arai-regent-x-helmet" method="post" data-gtm-form-interact-id="0">
                            <input name="_csrf_token" type="hidden" hidden="" value="EV8WYT5cEQgmHHgcGSNdOiA9Ai5bPTREhnQRa0CLTT4-REoOCgExjjY1">
                            <input class="js-SkuSelector-reservationSkuId" name="reservation_sku_id" type="hidden" value="">
                            <input class="js-SkuSelector-reservationStoreId" name="reservation_store_id" type="hidden" value="">
                            <input name="product_id" type="hidden" value="1100726">
                            <input class="js-SkuSelector-skuId" name="sku_id" type="hidden" value="">
                            <input class="js-SkuSelector-wishListSkuId" name="wish_list_sku_id" type="hidden">

                            <div class="product-show-sku__actions  product-show-actions">

                                <div class="css-tabs product-show-sku-actions__action-wrapper">
                                    {{-- <input type="radio" id="robis-container-atc" name="robis-container-tabs" class="css-tabs__input "  checked="" data-gtm-form-interact-field-id="1">
                                    <label for="robis-container-atc" class="css-tabs__label robis-container__tabs-label js-SkuSelector-atc-tab">
                                        <div class="robis-container__tabs-label-icon robis-container__tabs-label-icon--atc"></div>
                                        Get It Delivered
                                    </label> --}}

                                    <div class="css-tabs__panel">

                                        <div class="robis-container robis-container--atc">
                                            <div class="product-show-sku__sku-availability sku-availability js-SkuSelector-skuAvailability" style="display:none">
                                                <div class="sku-availability__info ">
                                                    <span class="sku-availability__status js-SkuSelector-skuAvailabilityStatus" data-qa="sku-selection-status"></span>
                                                    <span class="sku-availability__message js-SkuSelector-skuAvailabilityMessage"></span>
                                                </div>
                                            </div>

                                            <div class="sku-availability sku-availability__missing-options js-SkuSelector-missingOptions" data-js="ProductForm.missingOptionsInfo" style="display:none">
                                                <div class="sku-availability__info  sku-availability__info--error">
                                                    Please select a
                                                    <span class="js-SkuSelector-missingOptionsList"><strong>Size</strong></span> to view availability.
                                                </div>
                                            </div>

                                            <label for="quantity" data-js="SkuSelector.quantityWrapper">
                                                <div class="option-type__label option-type__label--name option-type__label--quantity">
                                                    Quantity:</div>
                                                <select aria-label="Quantity" class="ui-select ui-select--large product-show-details-quantity__select ui-select" data-js="OemProductShow.quantity" id="quantity" name="quantity">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </label>
                                            <button class="product-show-sku-actions__button js-SkuSelector-formSubmit js-SkuSelector-purchaseControl js-SkuSelector-stickySubmitButton ui-button ui-button--large" data-js="ProductForm.cartButton OemProductShow.button" name="commit" type="submit">Add to Cart</button>
                                            <button class="product-show-sku-actions__button product-show-sku-actions__button--notify js-SkuSelector-stickyNotifyButton ui-button ui-button--large" style="display:none">Notify Me</button>

                                        </div>

                                    </div>

                                    {{-- <input type="radio" id="robis-container-robis" name="robis-container-tabs" class="css-tabs__input" data-gtm-form-interact-field-id="0">
                                    <label for="robis-container-robis" class="css-tabs__label robis-container__tabs-label js-SkuSelector-robis-tab">
                                        <div class="robis-container__tabs-label-icon robis-container__tabs-label-icon--robis">
                                        </div>
                                        <div class="robis-container__tabs-label-default-copy">Pick Up In Store</div>
                                        <div class="robis-container__tabs-label-active-copy">Pickup Available</div>
                                    </label>
                                    <div class="css-tabs__panel">
                                        <div class="robis-container">
                                            <div class="robis-container__store">

                                                <span class="robis-container__selected-store">
                                       <span>RevZilla</span> <span>Philadelphia</span>
                                                </span>

                                                <a class="robis-container__change-store" data-href="/store-location-reservation/reservation" data-js="ProductForm.checkNearbyStoresButton" data-sku-selector-store-link="">Change Store</a>
                                            </div>

                                            <div class="product-show-sku__sku-availability sku-availability js-SkuSelector-storeAvailability" style="display: none;" data-availability="out_of_stock">
                                                <div class="sku-availability__info ">
                                                    <span class="sku-availability__status js-SkuSelector-storeAvailabilityStatus"></span>
                                                    <span class="sku-availability__message js-SkuSelector-storeAvailabilityMessage">Sorry.
                                          Not available at this store</span>
                                                </div>
                                            </div>

                                            <div class="robis-container__inventory-message js-SkuSelector-missingOptions js-SkuSelector-ROBIS-missingOptions" data-js="ProductForm.missingOptionsReservationInfo" style="">
                                                Please select a
                                                <span class="js-SkuSelector-missingOptionsList"><strong>Size</strong></span> to view availability.
                                            </div>

                                            <div class="robis-container__reserve-wrapper">
                                                <button class="robis-container__reserve js-SkuSelector-storeReservationButton ui-button" data-href="/store-location-reservation/reservation" data-js="ProductForm.checkAvailabilityButton">
                                                    <span class="js-SkuSelector-storeReservationButtonText">Reserve for Pickup</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="product-show-sku-actions__links">
                                    <div class="product-show-sku-actions__link-wrapper">


                                        {{-- <a class="product-show-sku-actions__link product-show-sku-actions__link--wishlist ui-link" data-open-href="" data-js="ProductForm.wishListButton" data-open-class="authentication-form-modal" data-open-href-reuse-modal="" href="/auth/identity?state=2f6163636f756e742f776973682d6c6973742f6164643f736b755f69643d267175616e746974793d312672656469726563745f746f3d74727565">Add
                                 To Wish List</a> --}}


                                    </div>
                                    {{-- <div class="product-show-sku-actions__link-wrapper product-show-sku-actions__link-wrapper--share">
                                        <span class="ui-link product-show-sku-actions__link product-show-sku-actions__link--share" id="extole_zone_product_page_atw">
                                 <div id="extole-7008977181758244555">
                                    <style>
                                       #extole-7008977181758244555 img.extole-cta-image {
                                          display: inline-block;
                                          width: 100%;
                                          max-width: 200px;
                                          height: auto;
                                          outline: none;
                                          cursor: pointer;
                                       }

                                       #extole-7008977181758244555 .extole-cta-button {
                                          -webkit-transition: all 0.5s ease;
                                          -moz-transition: all 0.5s ease;
                                          -ms-transition: all 0.5s ease;
                                          -o-transition: all 0.5s ease;
                                          transition: all 0.5s ease;
                                          display: -webkit-box;
                                          display: -webkit-flex;
                                          display: -ms-flexbox;
                                          display: flex;
                                          flex-flow: row nowrap;
                                          justify-content: center;
                                          align-items: center;
                                          align-content: stretch;
                                          -webkit-border-radius: 1px;
                                          -moz-border-radius: 1px;
                                          border-radius: 1px;
                                          background-color: #FA4C06;
                                          color: #FFFFFF;
                                          height: 55px;
                                          line-height: normal;
                                          border: none;
                                          outline: none;
                                          box-shadow: none;
                                          padding: 0 25px;
                                          margin: 0;
                                          cursor: pointer;
                                          font-family: 'Lato', Arial, sans-serif;
                                          font-weight: 400;
                                          font-size: 16px;
                                       }

                                       #extole-7008977181758244555 .extole-cta-button:hover {
                                          background-color: #19315D;
                                          color: #FFFFFF;
                                       }

                                       #extole-7008977181758244555 .extole-cta-button:focus {
                                          box-shadow: 0 0 2px 3px rgba(81, 203, 238, 1);
                                       }

                                       #extole-7008977181758244555 .extole-cta-button img {
                                          width: 100%;
                                          max-width: 20px;
                                          height: auto;
                                          line-height: normal;
                                          outline: none;
                                          border: none;
                                          margin: 0 10px 0 0;
                                          padding: 0;
                                       }
                                    </style>
                                    <a href="#" class="extole_atw_zone">SHARE</a>
                                 </div>
                              </span>
                                        <span class="ui-link product-show-sku-actions__link product-show-sku-actions__link--share" id="extole_zone_mobile_product_page_atw">Share</span>
                                    </div>--}}
                                </div>

                            </div>
                        </form>



                        <div class="product-show-sku__notifications product-show-sku-notifications">



                            <form action="/sku-notification" class="js-SkuSelector-skuNotificationForm" data-form-name="Notify When Back In Stock" method="post" style="display:none">
                                <input name="_csrf_token" type="hidden" hidden="" value="EV8WYT5cEQgmHHgcGSNdOiA9Ai5bPTREhnQRa0CLTT4-REoOCgExjjY1">
                                <input class="js-SkuSelector-skuId" name="sku_id" type="hidden" value="">
                                <div class="product-show-sku-notifications__notification">
                                    <div class="alert alert--info" data-js="">
                                        <div class="alert__icon  alert__icon--info"></div>
                                        <div class="alert__message  alert__message--info">
                                            <p class="pgh-shd pgh-shd--small">
                                                <strong>
                                       <span data-js="SkuSelector.optionNamesList">This item</span>
                                       is currently out of stock.
                                    </strong>
                                            </p>
                                            <p class="ui-copy ui-copy--small">Drop your email here to be notified when it is available.
                                            </p>
                                            <div class="alert__secondary-content">
                                                <input class="product-show-sku-notifications__notification-input ui-text-input" name="email_address" placeholder="Enter Email Address" required="" type="email" value="">
                                                <button class="ui-button ui-button--full-width" type="submit">Notify Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="/sku-notification" class="product-show-sku-notifications__notification js-SkuSelector-preorderNotification" method="post" style="display:none">
                                <input name="_csrf_token" type="hidden" hidden="" value="EV8WYT5cEQgmHHgcGSNdOiA9Ai5bPTREhnQRa0CLTT4-REoOCgExjjY1">
                                <div class="alert alert--info" data-js="">
                                    <div class="alert__icon  alert__icon--info"></div>
                                    <div class="alert__message  alert__message--info">
                                        <p class="pgh-shd pgh-shd--small">
                                            <strong>
                                    Sign-up to be notified when it's available.
                                 </strong>
                                        </p>
                                        <p class="ui-copy ui-copy--small">This is a new product that isn't available yet.
                                            <i>Pre-orders will be filled first.</i></p>
                                        <div class="alert__secondary-content">
                                            <input class="js-SkuSelector-skuId" name="sku_id" type="hidden" value="">
                                            <input class="product-show-sku-notifications__notification-input ui-text-input" name="email_address" placeholder="Enter Email Address" required="" type="email" value="">
                                            <button class="ui-button ui-button--full-width" type="submit">Notify Me</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>



                        <div class="product-show-sku__affirm product-show-sku__affirm--mobile">
                            <div class="product-show-sku-actions__action-wrapper  product-show-sku-actions__action-wrapper--primary  product-show-sku-actions__action-wrapper--affirm">

                            </div>
                        </div>




                        {{-- <div class="product-show-sku__value-prop product-show-sku-value-prop" data-js="Pdp.valueProps.wrapper">

                            <div class="product-show-sku-value-prop__data product-show-sku-value-prop__free-shipping-us">
                                <a class="product-show-sku-value-prop__text product-show-sku-value-prop__text--free-shipping-us" data-js="Pdp.valueProp" data-open-href="" data-open-href-reuse-modal="" href="/value-prop/shipping">
                                    <span class="product-show-sku-value-prop__link">
                              Ships <strong class="product-show-sku-value-prop__highlight">FREE </strong>to USA
                           </span>
                                </a>
                            </div>




                            <div class="product-show-sku-value-prop__data product-show-sku-value-prop__price-match">
                                <a class="product-show-sku-value-prop__text product-show-sku-value-prop__text--price-match" data-js="Pdp.valueProp" data-open-href="" data-open-href-reuse-modal="" href="/value-prop/price-match">
                                    <span class="product-show-sku-value-prop__link">
                              Guaranteed <strong class="product-show-sku-value-prop__highlight">Low Price</strong>
                           </span>
                                </a>
                            </div>



                            <div class="product-show-sku-value-prop__data product-show-sku-value-prop__military-discount">
                                <a class="product-show-sku-value-prop__text product-show-sku-value-prop__text--military-discount" data-js="Pdp.valueProp" data-open-href="" data-open-href-reuse-modal="" href="/value-prop/military_discount">
                                    <span class="product-show-sku-value-prop__link">
                              Military and First Responder <strong
                                 class="product-show-sku-value-prop__highlight">Discount</strong>
                           </span>
                                </a>
                            </div>

                        </div> --}}

                        <div class="product-show-sku__blemished-sku">

                            <div class="product-show-sku-blemished-sku product-show-sku-blemished-sku--single js-SkuSelector-blemishedSku" data-sku-id="10413827" style="display: none;">
                                <div class="product-show-sku-blemished-sku__details">
                                    <div class="product-show-sku-blemished-sku__count-pricing">
                                        <span class="product-show-sku-blemished-sku__count pgh-shd pgh-shd--medium">1 Blemished
                                 Available:</span>
                                        <span class="product-show-sku-blemished-sku__pricing pgh-shd pgh-shd--medium">

                                 $521.96
                              </span>
                                        <span class="redline-tooltip" data-active="false" data-js="Tooltip.Container"><span
                                    class="redline-tooltip__icon" data-js="Tooltip.Icon"><span
                                       class="redline-tooltip__popout-window" data-js="Tooltip.PopoutWindow"><span
                                          class="redline-tooltip__tooltip-arrow" data-js="Tooltip.Arrow"></span><span class="redline-tooltip__text-content" data-js="Tooltip.Content">This item is
                                          available as a Blem/Refurb. These are items that cannot be sold as "New"
                                          merchandise and are limited to stock on hand. See the product details for a
                                          description of the product's condition.</span></span>
                                        </span>
                                        </span>
                                    </div>
                                    <div class="product-show-sku-blemished-sku__link">

                                        <a class="ui-link ui-link--inline" href="/motorcycle/arai-regent-x-helmet-frost-black-sm-open-box-2">View Item</a>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    @if ($product->video)
                        <div class="product-show-summary__media product-show-media">

                            <div class="product-show-media__video  product-show-media-video" id="primary-video" data-primary-video="">
                                <div class="product-show-media-video__iframe-wrapper">

                                    <div class="product-show-media-video__lazy-youtube lazy-youtube" itemscope="" itemtype="http://schema.org/VideoObject" style="opacity: 1; background-image: url(&quot;https://img.youtube.com/vi/{{ $product->video }}/0.jpg&quot;);">
                                        <meta content="https://img.youtube.com/vi/{{ $product->video }}/0.jpg" itemprop="thumbnailURL">
                                        <meta content="https://www.youtube.com/embed/{{ $product->video }}" itemprop="embedURL">

                                        <meta content="Arai unveils their entry-level helmet, and it’s the perfect introduction to Japan’s finest. Utilizing a PB-cLc shell, the Regent-X uses a multi density EPS derived from their top-shelf models. Free Flow System (FFS) ventilation keeps riders cool and comfortable. The Regent-X uses Arai’s VAS-V Max Vision shield system, and the shield itself is pinlock ready. (Pinlock insert not included.) Additional features include an anti-microbial liner, speaker pockets, a chin curtain, and DOT/Snell M2020 certification."
                                        itemprop="description">


                                        <meta content="2020-3-9" itemprop="uploadDate">


                                        <meta content="Arai Regent-x Helmet Review" itemprop="name">

                                        {{-- <div class="lazy-youtube__frame" data-js="" data-js-youtube-id="{{ $product->video }}">
                                            <div class="lazy-youtube__thumbnail">
                                                <button aria-label="Play youtube" class="lazy-youtube__play-button">
                                                    <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                                        <path class="lazy-youtube__play-button-background" d="m .66,37.62 c 0,0 .66,4.70 2.70,6.77 2.58,2.71 5.98,2.63 7.49,2.91 5.43,.52 23.10,.68 23.12,.68 .00,-1.3e-5 14.29,-0.02 23.81,-0.71 1.32,-0.15 4.22,-0.17 6.81,-2.89 2.03,-2.07 2.70,-6.77 2.70,-6.77 0,0 .67,-5.52 .67,-11.04 l 0,-5.17 c 0,-5.52 -0.67,-11.04 -0.67,-11.04 0,0 -0.66,-4.70 -2.70,-6.77 C 62.03,.86 59.13,.84 57.80,.69 48.28,0 34.00,0 34.00,0 33.97,0 19.69,0 10.18,.69 8.85,.84 5.95,.86 3.36,3.58 1.32,5.65 .66,10.35 .66,10.35 c 0,0 -0.55,4.50 -0.66,9.45 l 0,8.36 c .10,4.94 .66,9.45 .66,9.45 z"
                                                        fill="#1f1f1e" fill-opacity="0.9"></path>
                                                        <path d="m 26.96,13.67 18.37,9.62 -18.37,9.55 -0.00,-19.17 z" fill="#fff"></path>
                                                        <path d="M 45.02,23.46 45.32,23.28 26.96,13.67 43.32,24.34 45.02,23.46 z" fill="#ccc"></path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="lazy-youtube__top-section">
                                                <div class="lazy-youtube__title">
                                                    <div class="lazy-youtube__title-text">
                                                        <a class="lazy-youtube__title-link" target="_blank" href="https://www.youtube.com/watch?v={{ $product->video }}">Arai Regent-x Helmet
                                            Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/{{ $product->video }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                </div>
                            </div>


                            <div class="product-show-media__help  product-show-media-help">

                                <div class="product-show-media-help__link-wrapper  product-show-media-help__link-wrapper--videos product-show-media-help__link-wrapper--hide-for-desktop-test">
                                    <a class="ui-link" data-js="" href="#videos">View More Videos</a>
                                </div>

                                {{-- <div class="product-show-media-help__link-wrapper  product-show-media-help__link-wrapper--contact">
                                    <div class="product-show-media-help__geek-photo">
                                        <img src="{{ asset('frontend/image/small/Geek13.jpg') }}" class="product-show-media-help__geek-photo--image" alt="Gear Geek">
                                    </div>
                                    <div class="product-show-media-help__contact-info">
                                        <div>
                                            Need Help?
                                        </div>
                                        <div class="product-show-media-help__subhead">
                                            Speak to one of our Gear Geeks:
                                        </div>
                                        <div>
                                            <span class="product-show-media-help__text product-show-media-help__text--mobile">
                                    <a class="product-show-media-help__text product-show-media-help__text--phone ui-link"
                                        href="tel:+1 (215) 334-5500">Tap to Call</a>
                                </span>
                                            <span class="product-show-media-help__text product-show-media-help__text--desktop">
                                    <a class="product-show-media-help__text product-show-media-help__text--phone ui-link"
                                        href="/customer-service" target="_blank">+1 (215) 334-5500</a>
                                </span>
                                            <span class="product-show-media-help__text product-show-media-help__text--desktop">
                                    <a class="product-show-media-help__text product-show-media-help__text--email ui-link"
                                        href="/contact-us" target="_blank">Email Us</a>
                                </span>
                                            <span class="product-show-media-help__text product-show-media-help__text--desktop product-show-media-help__live-help-now">
                                    <span
                                        class="product-show-media-help__text product-show-media-help__text--chat ui-link">Chat</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                    @endif

                    <div class="product-show-summary__recommendations">

                        <div class="certona-recommendations-placeholder-container" data-template="product_tray" data-product-id="1100726" data-hide-savings="" data-hide-shipping="" data-hide-rating="" data-fallback-heading="You May Also Like" data-certona-scheme="product2_rr"
                        data-bemname="related-products" data-component-type="tray" data-vertical-on-desktop="" data-reflektion-widget-id="rfkid_32">
                            <div class="product-show-component-summary__recommendations">
                                <div class="product-show-component-section  product-show-component-section--related-products">
                                    <h2 class="product-show-component-section__heading related-products__heading stn-shd stn-shd--small">
                              You May Also Like
                           </h2>


                                    <div class="related-products related-products--vertical-on-desktop related-products--abbreviated">
                                        <div class="related-products__content">

                                            <div data-js="RecommendationProducts.tray" data-section-name="You May Also Like" data-section-type="Product List" class="tray">
                                                <div class="related-products__controls related-products__controls--vertical related-products__controls--upper tray__controls--vertical tray__controls">
                                                    <button type="button" data-slider-arrow="Prev" class="related-products__arrow related-products__arrow--up tray__arrow--up tray__arrow" aria-label="Scroll previous" disabled="disabled">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--up tray__arrow-icon--up tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M2.582 13.891c-0.272 0.268-0.709 0.268-0.979 0s-0.271-0.701 0-0.969l7.908-7.83c0.27-0.268 0.707-0.268 0.979 0l7.908 7.83c0.27 0.268 0.27 0.701 0 0.969s-0.709 0.268-0.978 0l-7.42-7.141-7.418 7.141z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" data-slider-arrow="Next" class="related-products__arrow related-products__arrow--down tray__arrow--down tray__arrow" aria-label="Scroll next">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--down tray__arrow-icon--down tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M17.418 6.109c0.272-0.268 0.709-0.268 0.979 0s0.271 0.701 0 0.969l-7.908 7.83c-0.27 0.268-0.707 0.268-0.979 0l-7.908-7.83c-0.27-0.268-0.27-0.701 0-0.969s0.709-0.268 0.979 0l7.419 7.141 7.418-7.141z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="related-products__scroll-overflow-wrapper tray__scroll-overflow-wrapper">
                                                    <div class="related-products__scroll-wrapper tray__scroll-wrapper">

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="core_model:813281:0:1:2" data-recommendation-provider="core_model" data-index="0" data-product-id="813281"
                                                            data-skus="1756720,1756721,1756722,1756724,1756728,1756729,10081945,1756741,1756742,1756747,1756730,1756735,10081939" href="https://www.revzilla.com/motorcycle/arai-regent-x-helmet-snell-2020?rrec=true"
                                                            itemprop="url" title="Arai Regent-X Helmet - Snell 2020">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--staff-picks-2019">Staff Pick
                                                                    </div>
                                                                </div>
                                                                <meta content="Arai Regent-X Helmet - Snell 2020" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="813281" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1406/6118/arai_regent_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Regent-X Helmet - Snell 2020" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-813281" width="480" src="https://www.revzilla.com/product_images/1406/6118/arai_regent_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="38580" style="background-color: #808080" title="Modern Grey"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="40894" style="background-color: #ff0000" title="Code Red"></span><span class="product-tile__swatch-more-count">+3</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="40895" style="background-color: #ffff00" title="Code Yellow"></span><span class="product-tile__swatch-more-count">+2</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="37016" style="background-color: #808080" title="Frost Gunmetal"></span>
                                                                                    <span class="product-tile__swatch-more-count">+1</span>
                                                                                </li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-813281" data-js-option-id="42230" style="background-color: #f0e68c" title="Modern Ivory"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               813281,
                                                                                               [{
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 6147,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/6118/arai_regent_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14066118
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 3440,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1838/1661/arai_regent_x_helmet_aluminum_silver_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 18381661
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 6147,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/6118/arai_regent_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14066118
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 37016,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1672/6379/arai_regent_x_helmet_frost_gunmetal_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 16726379
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 38580,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/6101/arai_regent_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14066101
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 40894,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/6033/arai_regent_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14066033
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 40895,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/6050/arai_regent_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14066050
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 42230,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1838/1627/arai_regent_x_helmet_modern_ivory_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 18381627
                                                                                               }]
                                                                                            );
                                                                                         });
                                                                                   })
                                                                                })(this)
                                                                            </script>
                                                                        </div>
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Regent-X Helmet - Snell 2020</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="579.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>579<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100695:2:1:10" data-recommendation-provider="reflektion" data-index="1"
                                                            data-product-id="1100695" data-skus="10413501,10413502,10413503,10413504,10413505,10413506,10413477,10413478,10413479,10413480,10413481,10413482,10413507,10413508,10413509,10413510,10413511,10413512,10413483,10413484,10413485,10413486,10413487,10413488,10413489,10413490,10413491,10413492,10413493,10413494,10413495,10413496,10413497,10413498,10413499,10413500"
                                                            href="https://www.revzilla.com/motorcycle/arai-signet-x-black-frost-snell-2025?rrec=true" itemprop="url" title="Arai Signet-X Helmet">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Signet-X Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1100695" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Signet-X Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100695" width="480" src="https://www.revzilla.com/product_images/2338/4335/arai_signet_x_helmet_frost_black_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span>
                                                                                    <span class="product-tile__swatch-more-count">+2</span>
                                                                                </li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100695" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
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
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Signet-X Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="699.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100701:2:2:10" data-recommendation-provider="reflektion" data-index="2"
                                                            data-product-id="1100701" data-skus="10413579,10413580,10413581,10413582,10413583,10413584,10413585,10413586,10413587,10413588,10413589,10413590,10413561,10413562,10413563,10413564,10413565,10413566,10413555,10413556,10413557,10413558,10413559,10413560,10413567,10413568,10413569,10413570,10413571,10413572,10413573,10413574,10413575,10413576,10413577,10413578"
                                                            href="https://www.revzilla.com/motorcycle/arai-quantum-x-helmet-2025?rrec=true" itemprop="url" title="Arai Quantum-X Helmet">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Quantum-X Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1100701" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Quantum-X Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100701" width="480" src="https://www.revzilla.com/product_images/2337/5767/arai_quantum_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span><span class="product-tile__swatch-more-count">+2</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100701" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
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
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Quantum-X Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="699.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100716:2:3:10" data-recommendation-provider="reflektion" data-index="3"
                                                            data-product-id="1100716" data-skus="10413697,10413698,10413699,10413700,10413701,10413702,10413703,10413704,10413705,10413706,10413707,10413708,10413679,10413680,10413681,10413682,10413683,10413684,10413673,10413674,10413675,10413676,10413677,10413678,10413686,10413687,10413688,10413693,10413694"
                                                            href="https://www.revzilla.com/motorcycle/arai-corsair-x-black-frost-snell-2025?rrec=true" itemprop="url" title="Arai Corsair-X Helmet">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Corsair-X Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1100716" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Corsair-X Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100716" width="480" src="https://www.revzilla.com/product_images/2338/7980/arai_corsair_x_helmet_black_frost_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="24" style="background-color: Black" title="Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span><span class="product-tile__swatch-more-count">+2</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100716" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
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
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Corsair-X Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="869.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>869<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>879<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100720:2:4:10" data-recommendation-provider="reflektion" data-index="4"
                                                            data-product-id="1100720" data-skus="10413733,10413734,10413735,10413736,10413737,10413738,10413745,10413746,10413747,10413748,10413749,10413750,10413751,10413752,10413753,10413754,10413755,10413756,10413769,10413770,10413771,10413772,10413773,10413774,10413739,10413740,10413741,10413742,10413743,10413744"
                                                            href="https://www.revzilla.com/motorcycle/arai-contour-x-helmet?rrec=true" itemprop="url" title="Arai Contour-X Helmet">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Contour-X Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1100720" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/2338/5406/arai_contour_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Contour-X Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100720" width="480" src="https://www.revzilla.com/product_images/2338/5406/arai_contour_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="39402" style="background-color: #0000ff" title="Blue Frost"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100720" data-js-option-id="499" style="background-color: #C7C7C8" title="Light Grey"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               1100720,
                                                                                               [{
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
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Contour-X Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="749.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100722:2:5:10" data-recommendation-provider="reflektion" data-index="5"
                                                            data-product-id="1100722" data-skus="10413793,10413794,10413795,10413796,10413797,10413798,10413787,10413788,10413789,10413790,10413791,10413792" href="https://www.revzilla.com/motorcycle/arai-regent-x-starsstripes-snell-2025?rrec=true"
                                                            itemprop="url" title="Arai Regent-X Stars &amp; Stripes Helmet">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--staff-picks-2019">Staff Pick
                                                                    </div>
                                                                </div>
                                                                <meta content="Arai Regent-X Stars &amp; Stripes Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1100722" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/2337/5053/arai_regent_x_stars_stripes_helmet_yellow_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Regent-X Stars &amp; Stripes Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100722" width="480" src="https://www.revzilla.com/product_images/2337/5053/arai_regent_x_stars_stripes_helmet_yellow_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100722" data-js-option-id="68675" style="background-image: url(https://www.revzilla.com/option/swatch_image/68675/square/68675.png)"
                                                                                    title="Black/Red Frost"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100722" data-js-option-id="82" style="background-color: Yellow" title="Yellow"></span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               1100722,
                                                                                               [{
                                                                                                  "alt_text": "Arai Regent-X Stars & Stripes Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 82,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/2337/5053/arai_regent_x_stars_stripes_helmet_yellow_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 23375053
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Stars & Stripes Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 82,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/2337/5053/arai_regent_x_stars_stripes_helmet_yellow_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 23375053
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Stars & Stripes Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 68675,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/2337/5019/arai_regent_x_stars_stripes_helmet_black_red_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 23375019
                                                                                               }]
                                                                                            );
                                                                                         });
                                                                                   })
                                                                                })(this)
                                                                            </script>
                                                                        </div>
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Regent-X Stars &amp; Stripes Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="709.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>709<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1032719:2:6:10" data-recommendation-provider="reflektion" data-index="6"
                                                            data-product-id="1032719" data-skus="10280282,10280284,10280298,10280299,10280303,10280304,10280308,10280292,10280293,10280294,10280295,10280296,10280297,10280286,10280287,10280288,10280289,10280290,10280291"
                                                            href="https://www.revzilla.com/motorcycle/arai-contour-x-helmet-2020?rrec=true" itemprop="url" title="Arai Contour-X Helmet - Snell 2020">
                                                                <meta content="Arai Contour-X Helmet - Snell 2020" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="1032719" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1919/7107/arai_contour_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Contour-X Helmet - Snell 2020" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1032719" width="480" src="https://www.revzilla.com/product_images/1919/7107/arai_contour_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1032719" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1032719" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1032719" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1032719" data-js-option-id="39402" style="background-color: #0000ff" title="Blue Frost"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1032719" data-js-option-id="499" style="background-color: #C7C7C8" title="Light Grey"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               1032719,
                                                                                               [{
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 39402,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1919/7107/arai_contour_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 19197107
                                                                                               }, {
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 499,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/2056/2060/arai_contour_x_helmet_light_grey_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 20562060
                                                                                               }, {
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 3607,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1919/7073/arai_contour_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 19197073
                                                                                               }, {
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 8566,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1919/7056/arai_contour_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 19197056
                                                                                               }, {
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 8567,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1919/7039/arai_contour_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 19197039
                                                                                               }, {
                                                                                                  "alt_text": "Arai Contour-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 39402,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1919/7107/arai_contour_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 19197107
                                                                                               }]
                                                                                            );
                                                                                         });
                                                                                   })
                                                                                })(this)
                                                                            </script>
                                                                        </div>
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Contour-X Helmet - Snell 2020</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="749.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>749<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:846606:2:7:10" data-recommendation-provider="reflektion" data-index="7"
                                                            data-product-id="846606" data-skus="1807750,1807751,1807753,1807755,1807756,1807757,1807759,1807760,1807761" href="https://www.revzilla.com/motorcycle/arai-regent-x-patch-helmet?rrec=true" itemprop="url"
                                                            title="Arai Regent-X Patch Helmet">
                                                                <div class="product-tile__sash product-tile__sash--closeout">
                                                                    <div class="product-tile__sash-message product-tile__sash-message--closeout">
                                                                        Closeout</div>
                                                                </div>
                                                                <meta content="Arai Regent-X Patch Helmet" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="846606" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1406/9330/arai_regent_x_patch_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Regent-X Patch Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-846606" width="480" src="https://www.revzilla.com/product_images/1406/9330/arai_regent_x_patch_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-846606" data-js-option-id="28" style="background-color: Red" title="Red"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-846606" data-js-option-id="82" style="background-color: Yellow" title="Yellow"></span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               846606,
                                                                                               [{
                                                                                                  "alt_text": "Arai Regent-X Patch Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 28,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/9330/arai_regent_x_patch_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14069330
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Patch Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 28,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/9330/arai_regent_x_patch_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14069330
                                                                                               }, {
                                                                                                  "alt_text": "Arai Regent-X Patch Helmet",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 82,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1406/9347/arai_regent_x_patch_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 14069347
                                                                                               }]
                                                                                            );
                                                                                         });
                                                                                   })
                                                                                })(this)
                                                                            </script>
                                                                        </div>
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Regent-X Patch Helmet</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="709.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>709<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:842375:2:8:10" data-recommendation-provider="reflektion" data-index="8"
                                                            data-product-id="842375" data-skus="1801186,1801187,1801188,1801189,1801190,1801191,1801192,1801193" href="https://www.revzilla.com/motorcycle/merlin-hendrix-riding-shirt?rrec=true" itemprop="url"
                                                            title="Merlin Hendrix Riding Shirt">
                                                                <meta content="Merlin Hendrix Riding Shirt" itemprop="name">
                                                                <meta content="Merlin" itemprop="brand">
                                                                <meta content="842375" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1388/5716/merlin_hendrix_riding_shirt_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Merlin Hendrix Riding Shirt" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-842375" width="480" src="https://www.revzilla.com/product_images/1388/5716/merlin_hendrix_riding_shirt_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Merlin Hendrix Riding Shirt</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="279.00" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>279<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="core_model:334546:0:2:2" data-recommendation-provider="core_model" data-index="9" data-product-id="334546"
                                                            data-skus="1115358" href="https://www.revzilla.com/motorcycle/arai-vas-v-pro-shade-system?rrec=true" itemprop="url" title="Arai VAS-V Pro Shade System">
                                                                <meta content="Arai VAS-V Pro Shade System" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="334546" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/0221/4817/arai_vasv_pro_shade_system_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai VAS-V Pro Shade System" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-334546" width="480" src="https://www.revzilla.com/product_images/0221/4817/arai_vasv_pro_shade_system_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai VAS-V Pro Shade System</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="96.65" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>96<sup class="mny__s">.</sup><sup>65</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:828722:2:9:10" data-recommendation-provider="reflektion" data-index="10"
                                                            data-product-id="828722" data-skus="1781459,1781460,1781461,1781462,1781463,1781464,1781489,1781490,1781491,1781492,1781493,1781494,1781453,1781454,1781455,1781456,1781457,1781458,1781477,1781478,1781479,1781480,1781481,1781482,1781471,1781472,1781473,1781474,1781475,1781476,1781465,1781466,1781467,1781468,1781469,1781470"
                                                            href="https://www.revzilla.com/motorcycle/arai-signet-x-helmet-2020?rrec=true" itemprop="url" title="Arai Signet-X Helmet - Snell 2020">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Signet-X Helmet - Snell 2020" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="828722" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Signet-X Helmet - Snell 2020" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-828722" width="480" src="https://www.revzilla.com/product_images/1362/2188/arai_signet_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="6147" style="background-color: #383838" title="Frost Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span><span class="product-tile__swatch-more-count">+2</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828722" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
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
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Signet-X Helmet - Snell 2020</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="699.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                            <a class="related-products__product-tile product-tile product-tile--vertical-on-desktop product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:828714:2:10:10" data-recommendation-provider="reflektion" data-index="11"
                                                            data-product-id="828714" data-skus="1781326,1781327,1781329,1781331,1781320,1781321,1781323,1781324,1781343,1781344,1781345,1781346,1781347,1781348,1781358,1781359,1778843,1781339,1781341,1781342,1781333,1781335,1781336,1781337"
                                                            href="https://www.revzilla.com/motorcycle/arai-quantum-x-helmet-2020?rrec=true" itemprop="url" title="Arai Quantum-X Helmet - Snell 2020">
                                                                <div class="badge badge--vertical">
                                                                    <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                                </div>
                                                                <meta content="Arai Quantum-X Helmet - Snell 2020" itemprop="name">
                                                                <meta content="Arai Helmets" itemprop="brand">
                                                                <meta content="828714" itemprop="productId">
                                                                <meta content="https://www.revzilla.com/product_images/1362/1653/arai_quantum_x_helmet_480x480.jpg" itemprop="image">
                                                                <div class="product-tile__content">
                                                                    <div class="product-tile__image-container"><img alt="Arai Quantum-X Helmet - Snell 2020" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-828714" width="480" src="https://www.revzilla.com/product_images/1362/1653/arai_quantum_x_helmet_480x480.jpg">
                                                                    </div>
                                                                    <div class="product-tile__summary">
                                                                        <div class="product-tile__details product-tile__details--swatches">
                                                                            <ul class="product-tile__swatches">
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="3435" style="background-color: black" title="Pearl Black"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="3440" style="background-color: silver" title="Aluminum Silver"></span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="3607" style="background-color: Black" title="Black Frost"></span><span class="product-tile__swatch-more-count">+2</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="8566" style="background-color: black" title="Diamond Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                                <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-828714" data-js-option-id="8567" style="background-color: white" title="Diamond White"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                            </ul>
                                                                            <script>
                                                                                (function (w) {
                                                                                   w.__rq.push(function (req) {
                                                                                      req(
                                                                                            "web/static/js/redline/components/product_image_crossfader"
                                                                                         )
                                                                                         .then(({
                                                                                            ProductImageCrossfader
                                                                                         }) => {
                                                                                            new ProductImageCrossfader(
                                                                                               828714,
                                                                                               [{
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 30,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1653/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621653
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 30,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1653/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621653
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 3435,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1500/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621500
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 3440,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1568/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621568
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 3607,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1517/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621517
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 8566,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1602/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621602
                                                                                               }, {
                                                                                                  "alt_text": "Arai Quantum-X Helmet - Snell 2020",
                                                                                                  "dimensions": null,
                                                                                                  "option_id": 8567,
                                                                                                  "display_order": null,
                                                                                                  "option": null,
                                                                                                  "uri": "https://www.revzilla.com/product_images/1362/1619/arai_quantum_x_helmet_480x480.jpg",
                                                                                                  "filename": "",
                                                                                                  "id": 13621619
                                                                                               }]
                                                                                            );
                                                                                         });
                                                                                   })
                                                                                })(this)
                                                                            </script>
                                                                        </div>
                                                                        <div class="product-tile__name" data-qa="product-tile-name">Arai Quantum-X Helmet - Snell 2020</div>
                                                                        <div class="product-tile__pricing">
                                                                            <meta content="699.95" itemprop="price">
                                                                            <meta content="USD" itemprop="priceCurrency">
                                                                            <meta content="https://schema.org/InStock" itemprop="availability">
                                                                            <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                            <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                                  data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>699<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                        class="mny__c">$</span>719<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="related-products__controls related-products__controls--vertical related-products__controls--lower tray__controls--vertical tray__controls">
                                                    <button type="button" data-slider-arrow="Prev" class="related-products__arrow related-products__arrow--up tray__arrow--up tray__arrow" aria-label="Scroll previous" disabled="disabled">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--up tray__arrow-icon--up tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M2.582 13.891c-0.272 0.268-0.709 0.268-0.979 0s-0.271-0.701 0-0.969l7.908-7.83c0.27-0.268 0.707-0.268 0.979 0l7.908 7.83c0.27 0.268 0.27 0.701 0 0.969s-0.709 0.268-0.978 0l-7.42-7.141-7.418 7.141z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" data-slider-arrow="Next" class="related-products__arrow related-products__arrow--down tray__arrow--down tray__arrow" aria-label="Scroll next">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--down tray__arrow-icon--down tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M17.418 6.109c0.272-0.268 0.709-0.268 0.979 0s0.271 0.701 0 0.969l-7.908 7.83c-0.27 0.268-0.707 0.268-0.979 0l-7.908-7.83c-0.27-0.268-0.27-0.701 0-0.969s0.709-0.268 0.979 0l7.419 7.141 7.418-7.141z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="related-products__controls related-products__controls--horizontal tray__controls--horizontal tray__controls">
                                                    <button aria-label="scroll previous" type="button" data-slider-arrow="Prev" class="related-products__arrow related-products__arrow--left tray__arrow--left tray__arrow">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--left tray__arrow-icon--left tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M13.891 17.418c0.268 0.272 0.268 0.709 0 0.979s-0.701 0.271-0.969 0l-7.83-7.908c-0.268-0.27-0.268-0.707 0-0.979l7.83-7.908c0.268-0.27 0.701-0.27 0.969 0s0.268 0.709 0 0.979l-7.141 7.419 7.141 7.418z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button aria-label="scroll next" type="button" data-slider-arrow="Next" class="related-products__arrow related-products__arrow--right tray__arrow--right tray__arrow">
                                                        <svg class="related-products__arrow-icon related-products__arrow-icon--right tray__arrow-icon--right tray__arrow-icon" viewBox="0 0 20 20">
                                                            <path d="M13.25 10l-7.141-7.42c-0.268-0.27-0.268-0.707 0-0.979 0.268-0.27 0.701-0.27 0.969 0l7.83 7.908c0.268 0.271 0.268 0.709 0 0.979l-7.83 7.908c-0.268 0.271-0.701 0.27-0.969 0s-0.268-0.707 0-0.979l7.141-7.417z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <div class="related-products__scroll-bar tray__scroll-bar" style="">
                                                        <button type="button" data-slider-handle="" class="related-products__scroll-handle tray__scroll-handle" aria-label="scroll through tray" style="width: 239.395px; left: -10px;">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-details" class="product-show-section  product-show-section--product-details  product-details  product-show-section--light-on-mobile">
                <div class="product-show-section__content-wrapper">
                    <h2 class="product-show-section__heading stn-shd stn-shd--small">
                  Product Details
               </h2>

                    <div class="product-show-section__content product-show-section__content--tabs">
                        <div class="product-show-section__tabs" data-js="ProductShow.tabs.details" role="tablist">
                            <div role="tab" tabindex="0" class="product-show-section__tab-header tab-header tab-header--active" data-js="Tab.header" data-tab-id="product-description" data-qa="product-description-header" id="product-description-header">
                                Product Description
                            </div>

                            <div role="tab" tabindex="0" class="product-show-section__tab-header tab-header" data-js="Tab.header" data-tab-id="part-numbers" data-qa="part-numbers-header">
                                Part Numbers
                            </div>


                            <div role="tab" tabindex="0" class="product-show-section__tab-header tab-header" data-js="Tab.header" data-tab-id="fitment" data-qa="fitment-header">
                                Sizing &amp; Fit
                            </div>


                            <div class="product-show-section__tab-content tab-content tab-content--active" data-js="Tab.content" data-tab-id="product-description" data-qa="product-description">
                                <div data-wrapper-for=".product-details__details" data-wrapper-at="medium large xlarge xxlarge">
                                    <div class="product-details__details">



                                            {{-- <div data-wrapper-for=".helmet-dimensions" data-wrapper-at="small medium large xlarge xxlarge">
                                                <div class="product-description__helmet-dimensions helmet-dimensions">
                                                    <img alt="Helmet shape is Intermediate Oval" class="helmet-dimensions__image" data-src="/images/sites/revzilla/pages/product/show/helmet_shape_weight/intermediate_oval.png" src="{{asset('frontend/image/small/intermediate_oval_80x63.jpg')}}">

                                                    <p class="helmet-dimensions__dimension ui-copy">
                                                        <span class="helmet-dimensions__dimension-label helmet-dimensions__dimension-label--shape">Shape:</span>
                                                        <span class="helmet-dimensions__dimension-value">Intermediate Oval</span>
                                                    </p>


                                                    <hr class="helmet-dimensions__divider">


                                                    <p class="helmet-dimensions__dimension ui-copy">
                                                        <span class="helmet-dimensions__dimension-label. helmet-dimensions__dimension-label--weight">Weight:</span>
                                                        <span class="helmet-dimensions__dimension-value">3.41 lbs.</span>
                                                    </p>

                                                    <a class="helmet-dimensions__help-link ui-link" data-open-href="" href="/head-shape-and-helmet-weight-help">What's this?</a>
                                                </div>

                                            </div>

                                            <div class="product-details__details-long">

                                                <h3>
                                        Arai Regent-X Helmet</h3>
                                                <div class="enhanced-description">
                                                    <div class="two-up">
                                                        <div class="enhanced-description stack-col">
                                                            <h3>
                                                PB SCLC Shell:</h3>
                                                            <ul>
                                                                <li>
                                                                    Peripherally Belted - Super Complex Laminate Construction shell</li>
                                                                <li>
                                                                    Design combines multiple materials and techniques created internally by Arai that deliver both performance and affordability</li>
                                                                <li>
                                                                    Shell has superb tensile strength due to a variety of carefully-positioned materials and light weight resin</li>
                                                                <li>
                                                                    4 shell sizes</li>
                                                            </ul>
                                                            <h3>
                                                VAS Shield System:</h3>
                                                            <ul>
                                                                <li>
                                                                    VAS (Variable Axis System) shield and side pods are exclusive to the Arai Corsair X Helmet</li>
                                                                <li>
                                                                    Variable axis (moving pivot point) allows shield mount position to be lower than most helmets</li>
                                                                <li>
                                                                    Dual function lever releases both the side pod and the face shield for quick and simple face shield removal</li>
                                                            </ul>
                                                            <h3>
                                                VAS Shield Latch System:</h3>
                                                            <ul>
                                                                <li>
                                                                    Captures and holds the face shield securely closed</li>
                                                                <li>
                                                                    Provides a de-mist position to slightly crack the shield open</li>
                                                                <li>
                                                                    Larger latch design allows for intuitive and seamless operation</li>
                                                            </ul>
                                                            <h3>
                                                VAS V MV Shield:</h3>
                                                            <ul>
                                                                <li>
                                                                    VAS MAX Vision clear&nbsp;<a href="https://www.revzilla.com/arai-regent-x-accessories" target="_blank">face shield</a>&nbsp;included</li>
                                                                <li>
                                                                    Provides excellent visibility in all seasons</li>
                                                                <li>
                                                                    <span class="redline-tooltip redline-tooltip--help-keywords" data-js="Tooltip.Container">
                                                    <span class="redline-tooltip__help-keyword" data-js="Tooltip.Icon">
                                                        <strong>Pinlock</strong>
                                                        <span class="redline-tooltip__popout-window"
                                                            data-js="Tooltip.PopoutWindow">
                                                            <span class="redline-tooltip__description"><img
                                                                class="redline-tooltip__float-img"
                                                                src="/help_keyword/image/1243/dks434_3d_c_mx_d.png">A
                                                                Pinlock lens is made to enjoy a fog-free ride. It is based
                                                                on two key principles to ensure a fog-free vision. The
                                                                moisture absorbing surface of the lens effectively attracts
                                                                and stores water molecules, while the airtight seal creates
                                                                a thermal barrier together preventing condensation of the
                                                                visor. The system is kept in place by positioning the lens
                                                                between two adjustable pins, making Pinlock the number one
                                                                anti-fog solution for helmets.</span>
                                                                    <span class="redline-tooltip__arrow" data-js="Tooltip.Arrow"></span>
                                                                    </span>
                                                                    </span>
                                                                    </span> Ready (available&nbsp;separately)</li>
                                                            </ul>
                                                        </div>
                                                        <div class="enhanced-description stack-col">
                                                            <h3>
                                                Ventilation:</h3>
                                                            <ul>
                                                                <li>
                                                                    Free Flow System (FFS) ventilation creates airflow under the helmet to reduce wind noise and turbulence while increasing hot air exhaust</li>
                                                                <li>
                                                                    Dual intake front vents, side exhausts and one-piece rear exhaust</li>
                                                                <li>
                                                                    Three position chin vent</li>
                                                                <li>
                                                                    Neck vent exhaust</li>
                                                                <li>
                                                                    Vents are easy to operate with gloved hands</li>
                                                            </ul>
                                                            <h3>
                                                Interior:</h3>
                                                            <ul>
                                                                <li>
                                                                    Facial Contour System (FCS) offers a snug fit by using a foam spring support in the <a href="https://www.revzilla.com/arai-regent-x-accessories" target="_blank">cheek pad</a> that compresses
                                                                    and rebounds without excessive pressure</li>
                                                                <li>
                                                                    Fully removable and soft interior liner with 5mm peel-away layer for a perfect fit</li>
                                                                <li>
                                                                    Speaker pockets</li>
                                                                <li>
                                                                    Made from odor-resistant material which helps maintain neutral acidity levels close to human skin</li>
                                                                <li>
                                                                    Non-removable chin curtain</li>
                                                            </ul>
                                                            <h3>
                                                Safety:</h3>
                                                            <ul>
                                                                <li>
                                                                    <span class="redline-tooltip redline-tooltip--help-keywords" data-js="Tooltip.Container">
                                                    <span class="redline-tooltip__help-keyword" data-js="Tooltip.Icon">
                                                        <strong>Double D-ring</strong>
                                                        <span class="redline-tooltip__popout-window"
                                                            data-js="Tooltip.PopoutWindow">
                                                            <span class="redline-tooltip__description"><img
                                                                class="redline-tooltip__float-img"
                                                                src="/help_keyword/image/1258/images.jpg">The Double
                                                                D-ring closure is THE tried-and-true motorcycle helmet
                                                                retention system. Consisting of two "D" shaped rings, the
                                                                rider laces the opposing strap through the closure to secure
                                                                the helmet. It is strong, simple, reliable and infinitely
                                                                adjustable. Some helmets use alternative closure methods,
                                                                but the Double D-ring remains the gold standard for these
                                                                reasons.</span>
                                                                    <span class="redline-tooltip__arrow" data-js="Tooltip.Arrow"></span>
                                                                    </span>
                                                                    </span>
                                                                    </span> closure</li>
                                                                <li>
                                                                    Snell M2025&nbsp;and DOT certified</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <img class="full-width" data-lazy-="" src="https://www.revzilla.com/content_image/image/92680/039fec77-67db-Regent_Hero_Size_Hero.jpg">
                                                </p>
                                                <p>
                                                    <br>
                                                    <b>Regent (re·​gent): Noun: A person who rules. </b></p>
                                                <div class="enhanced-description">
                                                    <div class="two-up">
                                                        <div class="enhanced-description stack-col">
                                                            <h2>
                                                Heritage</h2>
                                                            <p>
                                                                The Arai Regent-X Helmet is a first-rate helmet that welcomes riders to Arai's exceptional build quality, materials and design.</p>
                                                            <p>
                                                                Using Super PB-cLc shell construction gives the Regent-X a structure that's extremely rigid and also lightweight - all while meeting rigorous Snell certification standard. With an intermediate oval head shape, the Regent-X fits those with heads that are
                                                                slightly longer front to back compared to side to side. The multi-density EPS is a single piece that allows Arai to provide protection where it is needed most while still providing a sleek, low
                                                                profile helmet.</p>
                                                        </div>
                                                        <img class="float-right" data-lazy-="" src="https://www.revzilla.com/content_image/image/92682/Arai-Regent-X-Review-motorcycle-helmet-16.jpg">
                                                    </div>
                                                    <div class="two-up">
                                                        <img class="float-left" data-lazy-="" src="https://www.revzilla.com/content_image/image/92681/Arai-Regent-X-Review-motorcycle-helmet-8.jpg">
                                                        <div class="enhanced-description stack-col">
                                                            <h2>
                                                Performance</h2>
                                                            <p>
                                                                The Variable Axis System (VAS) provides a pivot point for the face shield that moves so the face shield can be mounted lower on the helmet while still having enough clearance to open the face shield. The VAS Shield Latch System holds the face shield securely
                                                                closed or it can be opened slightly to allow venting. The top padding cannot be removed, but cheek pads can be removed for cleaning or replacement.</p>
                                                            <p>
                                                                The Arai Regent-X Helmet fine tunes Arai's features to embrace riders looking for a comfortable, protective and premium helmet.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                </p>

                                                <div data-wrapper-for=".helmet-dimensions" data-wrapper-at="small"></div> --}}
                                        {!! str_replace('/images/products/upload', asset('images/products/upload/'), $product->description) !!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-show-section__tab-content tab-content" data-js="Tab.content" data-tab-id="part-numbers" data-qa="part-numbers">
                                <div data-wrapper-for=".part-numbers__wrapper" data-wrapper-at="medium large xlarge xxlarge">
                                    <div class="part-numbers__wrapper">
                                        <table class="sku-data ">
                                            <thead class="sku-data__head-wrapper">
                                                <tr class="sku-data__head-row">
                                                    <th class="sku-data__head-item" scope="col">Product Style</th>
                                                    <th class="sku-data__head-item" scope="col">RevZilla Item #</th>

                                                    <th class="sku-data__head-item" scope="col">Store Sku</th>
                                                    <th class="sku-data__head-item" scope="col">MFR. Product #</th>
                                                    <th class="sku-data__head-item" scope="col">Availability</th>
                                                </tr>
                                            </thead>
                                            <tbody class="sku-data__body-wrapper">

                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413823
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463989
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194039
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships next business day
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413824
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463988
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194022
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 2 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413825
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463987
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194015
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413826
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463986
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194008
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413827
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463985
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193995
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Frost Black / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413828
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463984
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193988
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413847
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463983
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193674
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413848
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463982
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193667
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413849
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463981
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193650
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413850
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463980
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193643
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413851
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463979
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193636
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> White / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413852
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463978
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193629
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413841
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463995
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193858
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 1 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413842
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463994
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193841
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413843
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463993
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193834
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413844
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463992
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193827
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 3 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413845
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463991
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193810
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Modern Grey / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413846
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463990
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193803
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413829
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193971
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413830
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464127
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193964
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 1 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413831
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464126
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193957
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413832
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464125
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193940
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413833
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464124
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193933
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Aluminum Silver / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413834
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464123
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193926
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413865
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193735
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413866
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438985
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193728
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 1 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413867
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438984
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193711
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413868
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438983
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193704
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 2 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413869
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193698
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Red / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413870
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193681
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / 2XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413859
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193797
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / XL
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413860
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438991
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193780
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / LG
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413861
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438990
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193773
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / MD
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413862
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>438989
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193766
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / SM
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413863
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193759
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> Code Yellow / XS
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413864
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193742
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> 2XL / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413853
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194091
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> XL / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413854
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464000
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194084
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> LG / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413855
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463999
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194077
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 2 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> MD / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413856
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463998
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194060
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> SM / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413857
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>463997
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194053
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> XS / Frost Gunmetal
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413858
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311194046
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> 2XL / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413835
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464025
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193919
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> XL / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413836
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464024
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193902
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 3 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> LG / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413837
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464023
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193896
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>In Stock: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> MD / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413838
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464022
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193889
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Only 3 Left: Ships within 24 hours
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> SM / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413839
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464021
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193872
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                                <tr class="sku-data__body-row">
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Product Style</span> XS / Modern Ivory
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">RevZilla Item #</span>10413840
                                                    </td>

                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Store Sku</span>464020
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">MFR. Product #</span>685311193865
                                                    </td>
                                                    <td class="sku-data__body-item">
                                                        <span class="sku-data__sku-title">Availability</span>Out of Stock
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            <div class="product-show-section__tab-content tab-content" data-js="Tab.content" data-tab-id="fitment" data-qa="fitment">
                                <div data-wrapper-for=".product-details__fitment" data-wrapper-at="medium large xlarge xxlarge">
                                    <div class="product-details__fitment">

                                        <div class="size-chart">
                                            <h1 class="size-chart__header">
                                                Arai Helmet Sizing
                                            </h1>


                                            <div class="size-chart__table">
                                                <a class="size-chart__unit-conversion convert-to-cm">Convert to Centimeters</a>
                                                <table border="0" cellpadding="0" cellspacing="0" class="size_chart" data-type="responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="size_chart_size">
                                                                Size</th>
                                                            <th class="measurement head_circumference">
                                                                Head (in)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Double Extra Small">2XS</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 20.1-20.5</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Extra Small">XS</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 20.9-21.3</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Small">SM</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 21.7-22</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Medium">MD</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 22.4-22.8</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Large">LG</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 23.2-23.6</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Extra Large">XL</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 24-24.4</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Double Extra Large">2XL</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 24.8-25.2</span></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size_chart_size"><span data-type="responsive">
                                                   Size</span><span data-type="responsive-content">
                                                   <abbr title="Triple Extra Large">3XL</abbr></span></td>
                                                            <td><span data-type="responsive">
                                                   Head (in)</span><span data-type="responsive-content"><span
                                                      data-js="MeasurementTable.value"> 25.6-26</span></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>
                                                </p>

                                            </div>


                                            <p class="size-chart__table-disclaimer">
                                                Sizing information is provided by the manufacturer and does not guarantee a perfect fit.
                                            </p>

                                            <div class="size-chart__measurements">
                                                <hr>
                                                <h2 class="size-chart__measurements-header">
                                                How to Measure
                                                </h2>

                                                <div class="size-chart__measurements-wrapper">

                                                    <div class="size-chart__mannequins">

                                                        <div class="size-chart__mannequin  size-chart__mannequin--head">

                                                            <img src="/images/sites/revzilla/components/size_chart_table/head-0fdf6c15ab049499a7faf31f8370a9c5.png?vsn=d">

                                                            <img src="/images/sites/revzilla/components/size_chart_table/head/head_circumference-70db7bd55a6d4c2b8630ef02b2aaa4e5.png?vsn=d">

                                                        </div>

                                                    </div>

                                                    <div class="size-chart__instructions">
                                                        <ul class="size-chart__instructions-list">

                                                            <li class="size-chart__instruction">
                                                                <a class="size-chart__instruction-label">
                                                                    <span class="size-chart__instruction-label-abbreviation">
                                                      H
                                                   </span>
                                                                    <span class="size-chart__instruction-label-name">
                                                      Head
                                                   </span>
                                                                </a>
                                                                <div class="size-chart__instruction-content">
                                                                    Wrap a cloth measuring tape around your head just above your eyebrows and ears. Pull the tape comfortably snug, read the length, repeat for good measure and use the largest measurement.
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="product-show-fitment">



                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    {{-- <div data-js="ProductShow.accordion.details">
                        <div data-js="" class="product-show-section-accordion__item product-show-section-accordion__item--open">
                            <div class="product-show-section-accordion__label">Product Description</div>
                            <div class="accordion__content accordion__content--description product-show-section-accordion__content">
                                <div class="product-show-section__accordion-content" data-wrapper-for=".product-details__details" data-wrapper-at="small">
                                </div>
                            </div>
                        </div>

                        <div data-js="" class="product-show-section-accordion__item product-show-section-accordion__item--closed">
                            <div class="product-show-section-accordion__label">Part Numbers</div>
                            <div class="accordion__content accordion__content--part-numbers product-show-section-accordion__content" style="height: 0px;">
                                <div class="product-show-section__accordion-content" data-wrapper-for=".part-numbers__wrapper" data-wrapper-at="small">
                                </div>
                            </div>
                        </div>


                        <div data-js="" id="product-fitment" class="product-show-section-accordion__item product-show-section-accordion__item--closed">
                            <div class="product-show-section-accordion__label">Sizing &amp; Fit</div>
                            <div class="accordion__content accordion__content--fitment product-show-section-accordion__content" style="height: 0px;">
                                <div class="product-show-section__accordion-content" data-wrapper-for=".product-details__fitment" data-wrapper-at="small">
                                </div>
                            </div>
                        </div>


                        <div data-js="" id="product-reviews-mobile" class="product-show-section-accordion__reviews product-show-section-accordion__item product-show-section-accordion__item--closed">
                            <div data-js="ReviewInterface.accordionReviews" class="product-show-section-accordian__label product-show-section-accordion__label--reviews product-show-section-accordion__label">
                                <span data-js="reviews-count">182</span> Customer Reviews
                                <div class="product-show-reviews__star-wrapper ">
                                    <span class="product-show-reviews__rating-stars product-rating__stars" data-js="ReviewInterface.ratingStars" data-rating="4.5"></span> <span class="product-show-reviews__rating-count product-rating__count">182</span>

                                    <span class="product-show-reviews__star-count">4.5/5</span>

                                </div>
                            </div>

                            <div class="accordion__content product-show-section-accordion__content" data-wrapper-at="small" data-wrapper-for=".product-show-reviews__turn-to-content--reviews" style="height: 0px;"></div>
                        </div>

                        <div data-js="" class="product-show-section-accordion__item product-show-section-accordion__item--closed">
                            <div class="product-show-section-accordion__label">
                                <span data-js="questions-count">24</span> Questions &amp; <span data-js="answers-count">32</span> Answers
                            </div>
                            <div class="accordion__content product-show-section-accordion__content" data-wrapper-at="small" data-wrapper-for=".product-show-reviews__turn-to-content--qa" style="height: 0px;"></div>
                        </div>
                    </div> --}}
                </div>

                <div class="cross-sell-recommendations-section-container">
                    <div class="certona-recommendations-placeholder-container" data-template="product_tray" data-product-id="1100726" data-hide-savings="" data-hide-shipping="" data-hide-rating="" data-fallback-heading="Riders Also Bought" data-certona-scheme="product3_rr"
                    data-bemname="related-products" data-component-type="tray" data-reflektion-widget-id="rfkid_33">
                        <div class="product-show-component-summary__recommendations">
                            <div class="product-show-component-section  product-show-component-section--related-products">
                                <h2 class="product-show-component-section__heading related-products__heading stn-shd stn-shd--small">
                           Riders Also Bought
                        </h2>


                                <div class="related-products related-products--abbreviated">
                                    <div class="related-products__content">

                                        <div data-js="RecommendationProducts.tray" data-section-name="Riders Also Bought" data-section-type="Product List" class="tray">
                                            <div class="related-products__scroll-overflow-wrapper tray__scroll-overflow-wrapper">
                                                <div class="related-products__scroll-wrapper tray__scroll-wrapper">

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1020663:1:1:11" data-recommendation-provider="reflektion" data-index="0" data-product-id="1020663" data-skus="10258410,10258411,10258412,10258413,10258414,10258415,10258398,10258399,10258400,10258401,10258402,10258403,10258404,10258405,10258406,10258407,10258408,10258409"
                                                        href="https://www.revzilla.com/motorcycle/agv-k1-s-helmet?rrec=true" itemprop="url" title="AGV K1 S Helmet">
                                                            <div class="badge badge--vertical">
                                                                <div class="badge__message badge__message--staff-picks-2019">Staff Pick
                                                                </div>
                                                            </div>
                                                            <meta content="AGV K1 S Helmet" itemprop="name">
                                                            <meta content="AGV Helmets" itemprop="brand">
                                                            <meta content="1020663" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="AGV K1 S Helmet" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1020663" width="480" src="https://www.revzilla.com/product_images/2103/9636/agvk1_helmet_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__details product-tile__details--swatches">
                                                                        <ul class="product-tile__swatches">
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="24" style="background-color: Black" title="Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="1043" style="background-color: #3A3A3A" title="Matte Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1020663" data-js-option-id="30" style="background-color: White" title="White"></span></li>
                                                                        </ul>
                                                                        <script>
                                                                            (function (w) {
                                                                                w.__rq.push(function (req) {
                                                                                   req(
                                                                                         "web/static/js/redline/components/product_image_crossfader"
                                                                                      )
                                                                                      .then(({
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
                                                                    <div class="product-tile__name" data-qa="product-tile-name">AGV K1 S Helmet
                                                                    </div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="229.00" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail mny__rng"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>229<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                                                                            </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>239<sup class="mny__s">.</sup><sup>00</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:867544:1:2:11" data-recommendation-provider="reflektion" data-index="1" data-product-id="867544" data-skus="1845574,1845575,1845576,1845577,1845578,1845579,1845580,1845581"
                                                        href="https://www.revzilla.com/motorcycle/bilt-nomad-air-jacket?rrec=true" itemprop="url" title="BILT Nomad Air Jacket">
                                                            <meta content="BILT Nomad Air Jacket" itemprop="name">
                                                            <meta content="BILT" itemprop="brand">
                                                            <meta content="867544" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/1530/2687/bilt_nomad_jacket_black_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="BILT Nomad Air Jacket" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-867544" width="480" src="https://www.revzilla.com/product_images/1530/2687/bilt_nomad_jacket_black_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">BILT Nomad Air Jacket</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="229.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>229<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="core_model:310870:0:1:1" data-recommendation-provider="core_model" data-index="2" data-product-id="310870" data-skus="1053252,1053251,1053253"
                                                        href="https://www.revzilla.com/motorcycle/arai-vas-v-max-vision-face-shield?rrec=true" itemprop="url" title="Arai VAS-V MAX Vision Face Shield">
                                                            <meta content="Arai VAS-V MAX Vision Face Shield" itemprop="name">
                                                            <meta content="Arai Helmets" itemprop="brand">
                                                            <meta content="310870" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/0221/4766/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Arai VAS-V MAX Vision Face Shield" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-310870" width="480" src="https://www.revzilla.com/product_images/0221/4766/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__details product-tile__details--swatches">
                                                                        <ul class="product-tile__swatches">
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-310870" data-js-option-id="495" style="background-color: white" title="Clear"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-310870" data-js-option-id="3812" style="background-color: Grey" title="Light Smoke"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-310870" data-js-option-id="1055" style="background-color: #474747" title="Dark Smoke"></span></li>
                                                                        </ul>
                                                                        <script>
                                                                            (function (w) {
                                                                                w.__rq.push(function (req) {
                                                                                   req(
                                                                                         "web/static/js/redline/components/product_image_crossfader"
                                                                                      )
                                                                                      .then(({
                                                                                         ProductImageCrossfader
                                                                                      }) => {
                                                                                         new ProductImageCrossfader(
                                                                                            310870,
                                                                                            [{
                                                                                               "alt_text": "Arai VAS-V MAX Vision Face Shield",
                                                                                               "dimensions": null,
                                                                                               "option_id": 1055,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0221/4766/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 2214766
                                                                                            }, {
                                                                                               "alt_text": "Arai VAS-V MAX Vision Face Shield",
                                                                                               "dimensions": null,
                                                                                               "option_id": 495,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0221/4749/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 2214749
                                                                                            }, {
                                                                                               "alt_text": "Arai VAS-V MAX Vision Face Shield",
                                                                                               "dimensions": null,
                                                                                               "option_id": 1055,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0221/4766/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 2214766
                                                                                            }, {
                                                                                               "alt_text": "Arai VAS-V MAX Vision Face Shield",
                                                                                               "dimensions": null,
                                                                                               "option_id": 3812,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0221/4783/arai_corsair_xvasvmax_vision_face_shield_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 2214783
                                                                                            }]
                                                                                         );
                                                                                      });
                                                                                })
                                                                             })(this)
                                                                        </script>
                                                                    </div>
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Arai VAS-V MAX Vision Face Shield</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="57.45" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>57<sup class="mny__s">.</sup><sup>45</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1100295:1:3:11" data-recommendation-provider="reflektion" data-index="3" data-product-id="1100295" data-skus="10412128,10412129,10412130,10412131,10412132,10412133,10412122,10412123,10412124,10412125,10412126,10412127"
                                                        href="https://www.revzilla.com/motorcycle/rst-moto-tractech-evo-4-short-ce-gloves?rrec=true" itemprop="url" title="RST Moto Tractech Evo 4 Short CE Gloves">
                                                            <meta content="RST Moto Tractech Evo 4 Short CE Gloves" itemprop="name">
                                                            <meta content="RST Moto" itemprop="brand">
                                                            <meta content="1100295" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/2274/7384/rst_moto_tractech_evo4_short_ce_gloves_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="RST Moto Tractech Evo 4 Short CE Gloves" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1100295" width="480" src="https://www.revzilla.com/product_images/2274/7384/rst_moto_tractech_evo4_short_ce_gloves_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__details product-tile__details--swatches">
                                                                        <ul class="product-tile__swatches">
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100295" data-js-option-id="7259" style="background-color: black" title="Black/Black/Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-1100295" data-js-option-id="7352" style="background-image: url(https://www.revzilla.com/option/swatch_image/7352/square/7352.gif)"
                                                                                title="White/White/Black"></span></li>
                                                                        </ul>
                                                                        <script>
                                                                            (function (w) {
                                                                                w.__rq.push(function (req) {
                                                                                   req(
                                                                                         "web/static/js/redline/components/product_image_crossfader"
                                                                                      )
                                                                                      .then(({
                                                                                         ProductImageCrossfader
                                                                                      }) => {
                                                                                         new ProductImageCrossfader(
                                                                                            1100295,
                                                                                            [{
                                                                                               "alt_text": "RST Moto Tractech Evo 4 Short CE Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 7259,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/2274/7384/rst_moto_tractech_evo4_short_ce_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 22747384
                                                                                            }, {
                                                                                               "alt_text": "RST Moto Tractech Evo 4 Short CE Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 7259,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/2274/7384/rst_moto_tractech_evo4_short_ce_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 22747384
                                                                                            }, {
                                                                                               "alt_text": "RST Moto Tractech Evo 4 Short CE Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 7352,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/2274/7350/rst_moto_tractech_evo4_short_ce_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 22747350
                                                                                            }]
                                                                                         );
                                                                                      });
                                                                                })
                                                                             })(this)
                                                                        </script>
                                                                    </div>
                                                                    <div class="product-tile__name" data-qa="product-tile-name">RST Moto Tractech Evo 4 Short CE Gloves</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="109.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>109<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:340662:1:4:11" data-recommendation-provider="reflektion" data-index="4" data-product-id="340662" data-skus="1131451,1131452,1131453,1131454,1131455,1131456,1131475,1131476,1834156,1834157,1834158,1834159,1834160,1834161,1834162,1834163,1131457,1131458,1131459,1131460,1131461,1131462,1131477,1131478,1131463,1131464,1131465,1131466,1131467,1131468,1131479,1131480,1131469,1131470,1131471,1131472,1131473,1131474,1131481,1131482"
                                                        href="https://www.revzilla.com/motorcycle/bilt-sprint-gloves?rrec=true" itemprop="url" title="BILT Sprint Gloves">
                                                            <div class="product-tile__sash product-tile__sash--sale">
                                                                <div class="product-tile__sash-message product-tile__sash-message--sale">
                                                                    Sale</div>
                                                            </div>
                                                            <div class="badge badge--vertical">
                                                                <div class="badge__message badge__message--staff-picks-2019">Staff Pick
                                                                </div>
                                                            </div>
                                                            <meta content="BILT Sprint Gloves" itemprop="name">
                                                            <meta content="BILT" itemprop="brand">
                                                            <meta content="340662" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/1498/2467/bilt_sprint_glv_grey_black_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="BILT Sprint Gloves" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-340662" width="480" src="https://www.revzilla.com/product_images/1498/2467/bilt_sprint_glv_grey_black_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__details product-tile__details--swatches">
                                                                        <ul class="product-tile__swatches">
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-340662" data-js-option-id="24" style="background-color: Black" title="Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-340662" data-js-option-id="165" style="background-image: url(https://www.revzilla.com/option/swatch_image/165/square/165.gif)"
                                                                                title="Grey/Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-340662" data-js-option-id="146" style="background-image: url(https://www.revzilla.com/option/swatch_image/146/square/146.gif)"
                                                                                title="White/Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-340662" data-js-option-id="120" style="background-image: url(https://www.revzilla.com/option/swatch_image/120/square/120.gif)"
                                                                                title="Blue/Black"></span><span class="product-tile__swatch-more-count">+1</span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-340662" data-js-option-id="132" style="background-image: url(https://www.revzilla.com/option/swatch_image/132/square/132.gif)"
                                                                                title="Red/Black"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                        </ul>
                                                                        <script>
                                                                            (function (w) {
                                                                                w.__rq.push(function (req) {
                                                                                   req(
                                                                                         "web/static/js/redline/components/product_image_crossfader"
                                                                                      )
                                                                                      .then(({
                                                                                         ProductImageCrossfader
                                                                                      }) => {
                                                                                         new ProductImageCrossfader(
                                                                                            340662,
                                                                                            [{
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 165,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/1498/2467/bilt_sprint_glv_grey_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 14982467
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 24,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0188/0842/bilt_sprint_gloves_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 1880842
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 120,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0188/0866/bilt_sprint_gloves_blue_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 1880866
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 132,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0188/0858/bilt_sprint_gloves_red_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 1880858
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 146,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0188/0850/bilt_sprint_gloves_white_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 1880850
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 165,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/1498/2467/bilt_sprint_glv_grey_black_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 14982467
                                                                                            }, {
                                                                                               "alt_text": "BILT Sprint Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": null,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/2251/5336/bilt_sprint_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 22515336
                                                                                            }]
                                                                                         );
                                                                                      });
                                                                                })
                                                                             })(this)
                                                                        </script>
                                                                    </div>
                                                                    <div class="product-tile__name" data-qa="product-tile-name">BILT Sprint Gloves</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="34.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>34<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span><span class="product-tile__price-was product-details__price-was "><span
                                                               data-js="Money.parsedMoney"><span
                                                                  class="mny__c">$</span>49.99<span class="mny__c"></span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1061858:1:5:11" data-recommendation-provider="reflektion" data-index="5" data-product-id="1061858" data-skus="10332663,10332664,10332665,10332666,10332667,10332668"
                                                        href="https://www.revzilla.com/motorcycle/reax-logan-air-pants?rrec=true" itemprop="url" title="REAX Logan Air Pants">
                                                            <div class="badge badge--vertical">
                                                                <div class="badge__message badge__message--staff-picks-2019">Staff Pick
                                                                </div>
                                                            </div>
                                                            <meta content="REAX Logan Air Pants" itemprop="name">
                                                            <meta content="REAX" itemprop="brand">
                                                            <meta content="1061858" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/2244/1439/reax_logan_air_pants_black_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="REAX Logan Air Pants" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1061858" width="480" src="https://www.revzilla.com/product_images/2244/1439/reax_logan_air_pants_black_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">REAX Logan Air Pants</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="199.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>199<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:891652:1:6:11" data-recommendation-provider="reflektion" data-index="6" data-product-id="891652" data-skus="10031642,10031643"
                                                        href="https://www.revzilla.com/motorcycle/riders-preferred-membership?rrec=true" itemprop="url" title="Riders Preferred Membership - Annual Subscription">
                                                            <meta content="Riders Preferred Membership - Annual Subscription" itemprop="name">
                                                            <meta content="RevZilla" itemprop="brand">
                                                            <meta content="891652" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/2228/0479/riders_preferred_membership_annual_subscription_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Riders Preferred Membership - Annual Subscription" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-891652" width="480" src="https://www.revzilla.com/product_images/2228/0479/riders_preferred_membership_annual_subscription_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Riders Preferred Membership - Annual Subscription</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="39.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>39<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:940893:1:7:11" data-recommendation-provider="reflektion" data-index="7" data-product-id="940893" data-skus="10123663"
                                                        href="https://www.revzilla.com/motorcycle/quad-lock-vibration-dampener?rrec=true" itemprop="url" title="Quad Lock Vibration Dampener">
                                                            <meta content="Quad Lock Vibration Dampener" itemprop="name">
                                                            <meta content="Quad Lock" itemprop="brand">
                                                            <meta content="940893" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/1657/2702/quad_lock_vibration_dampener_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Quad Lock Vibration Dampener" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-940893" width="480" src="https://www.revzilla.com/product_images/1657/2702/quad_lock_vibration_dampener_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Quad Lock Vibration Dampener</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="24.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>24<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:955302:1:8:11" data-recommendation-provider="reflektion" data-index="8" data-product-id="955302" data-skus="10144070,10144071,10144072,10144073,10144074,10144075,10144076,10144077,10144078,10144079,10144080,10144081,10144082,10144083"
                                                        href="https://www.revzilla.com/motorcycle/michelin-road-6-tires?rrec=true" itemprop="url" title="Michelin Road 6 Tires">
                                                            <div class="badge badge--vertical">
                                                                <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                            </div>
                                                            <meta content="Michelin Road 6 Tires" itemprop="name">
                                                            <meta content="Michelin Tires" itemprop="brand">
                                                            <meta content="955302" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/2062/6830/michelin_road6_tires_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Michelin Road 6 Tires" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-955302" width="480" src="https://www.revzilla.com/product_images/2062/6830/michelin_road6_tires_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Michelin Road 6 Tires</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="202.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail mny__rng"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>202<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>309<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span><span class="product-tile__price-was product-details__price-was mny__rng"><span
                                                               data-js="Money.parsedMoney"><span
                                                                  class="mny__c">$</span>274.95<span class="mny__c"></span></span><span data-js="Money.parsedMoney"><span
                                                                  class="mny__c">$</span>423.95<span class="mny__c"></span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:416482:1:9:11" data-recommendation-provider="reflektion" data-index="9" data-product-id="416482" data-skus="1315091,1315092,1315093,1315094,1315095,1315096,1315103,1315104,1315105,1315106,1315107,1315108,1315097,1315098,1315099,1315100,1315101,1315102,1315109,1315110,1315111,1315112,1315113,1315114"
                                                        href="https://www.revzilla.com/motorcycle/alpinestars-smx-1-air-v2-gloves?rrec=true" itemprop="url" title="Alpinestars SMX-1 Air v2 Gloves">
                                                            <meta content="Alpinestars SMX-1 Air v2 Gloves" itemprop="name">
                                                            <meta content="Alpinestars" itemprop="brand">
                                                            <meta content="416482" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/0406/3066/alpinestars_smx_air_v2_gloves_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Alpinestars SMX-1 Air v2 Gloves" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-416482" width="480" src="https://www.revzilla.com/product_images/0406/3066/alpinestars_smx_air_v2_gloves_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__details product-tile__details--swatches">
                                                                        <ul class="product-tile__swatches">
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-416482" data-js-option-id="24" style="background-color: Black" title="Black"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-416482" data-js-option-id="179" style="background-image: url(https://www.revzilla.com/option/swatch_image/179/square/179.gif)"
                                                                                title="Black/White"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-416482" data-js-option-id="25196" style="background-image: url(https://www.revzilla.com/option/swatch_image/25196/square/25196.png)"
                                                                                title="Black/Fluo Red"></span></li>
                                                                            <li class="product-tile__swatch-wrapper"><span class="product-tile__swatch js-ProductImageCrossfader-swatch-416482" data-js-option-id="17241" style="background-image: url(https://www.revzilla.com/option/swatch_image/17241/square/17241.gif)"
                                                                                title="Black/Fluo Yellow"></span><span class="product-tile__swatch-more-count">+0</span></li>
                                                                        </ul>
                                                                        <script>
                                                                            (function (w) {
                                                                                w.__rq.push(function (req) {
                                                                                   req(
                                                                                         "web/static/js/redline/components/product_image_crossfader"
                                                                                      )
                                                                                      .then(({
                                                                                         ProductImageCrossfader
                                                                                      }) => {
                                                                                         new ProductImageCrossfader(
                                                                                            416482,
                                                                                            [{
                                                                                               "alt_text": "Alpinestars SMX-1 Air v2 Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 179,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0406/3066/alpinestars_smx_air_v2_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 4063066
                                                                                            }, {
                                                                                               "alt_text": "Alpinestars SMX-1 Air v2 Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 24,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0406/3049/alpinestars_smx_air_v2_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 4063049
                                                                                            }, {
                                                                                               "alt_text": "Alpinestars SMX-1 Air v2 Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 179,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0406/3066/alpinestars_smx_air_v2_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 4063066
                                                                                            }, {
                                                                                               "alt_text": "Alpinestars SMX-1 Air v2 Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 17241,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0406/3032/alpinestars_smx_air_v2_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 4063032
                                                                                            }, {
                                                                                               "alt_text": "Alpinestars SMX-1 Air v2 Gloves",
                                                                                               "dimensions": null,
                                                                                               "option_id": 25196,
                                                                                               "display_order": null,
                                                                                               "option": null,
                                                                                               "uri": "https://www.revzilla.com/product_images/0406/3015/alpinestars_smx_air_v2_gloves_480x480.jpg",
                                                                                               "filename": "",
                                                                                               "id": 4063015
                                                                                            }]
                                                                                         );
                                                                                      });
                                                                                })
                                                                             })(this)
                                                                        </script>
                                                                    </div>
                                                                    <div class="product-tile__name" data-qa="product-tile-name">
                                                                        Alpinestars SMX-1 Air v2 Gloves</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="79.95" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>79<sup class="mny__s">.</sup><sup>95</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:1026268:1:10:11" data-recommendation-provider="reflektion" data-index="10" data-product-id="1026268" data-skus="10269962,10269963,10269961,10269966,10269967,10269965,10269964,10272808,10272806,10272807,10272805,10346991,10346993,10346992,10346994,10433667,10433669,10433668,10433670,10269960,10482309"
                                                        href="https://www.revzilla.com/motorcycle/quad-lock-iphone-mag-case?rrec=true" itemprop="url" title="Quad Lock iPhone MAG Case">
                                                            <meta content="Quad Lock iPhone MAG Case" itemprop="name">
                                                            <meta content="Quad Lock" itemprop="brand">
                                                            <meta content="1026268" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/1881/7351/quad_locki_phone_mag_case_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Quad Lock iPhone MAG Case" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-1026268" width="480" src="https://www.revzilla.com/product_images/1881/7351/quad_locki_phone_mag_case_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Quad Lock iPhone MAG Case</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="44.99" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-details__price-retail"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>44<sup class="mny__s">.</sup><sup>99</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="related-products__product-tile-wrapper" data-js="ProductTile.wrapper">
                                                        <a class="related-products__product-tile product-tile product-tile--abbreviated" data-js="Reflektion.link" data-recommendation-label="reflektion:209986:1:11:11" data-recommendation-provider="reflektion" data-index="11" data-product-id="209986" data-skus="593865,594589,594590,594591,594592,594593,594594,594595,594596,594597,594598,817407,817408,817409,817410"
                                                        href="https://www.revzilla.com/motorcycle/shinko-sr-241-series-golden-boy-tires?rrec=true" itemprop="url" title="Shinko SR 241 Series Golden Boy Tires">
                                                            <div class="badge badge--vertical">
                                                                <div class="badge__message badge__message--top-rated">Top Rated</div>
                                                            </div>
                                                            <meta content="Shinko SR 241 Series Golden Boy Tires" itemprop="name">
                                                            <meta content="Shinko Tires" itemprop="brand">
                                                            <meta content="209986" itemprop="productId">
                                                            <meta content="https://www.revzilla.com/product_images/0101/0242/shinko_sr241_series_tires_480x480.jpg" itemprop="image">
                                                            <div class="product-tile__content">
                                                                <div class="product-tile__image-container"><img alt="Shinko SR 241 Series Golden Boy Tires" class="product-tile__image" height="480" id="js-ProductImageCrossfader-image-209986" width="480" src="https://www.revzilla.com/product_images/0101/0242/shinko_sr241_series_tires_480x480.jpg">
                                                                </div>
                                                                <div class="product-tile__summary">
                                                                    <div class="product-tile__name" data-qa="product-tile-name">Shinko SR 241 Series Golden Boy Tires</div>
                                                                    <div class="product-tile__pricing">
                                                                        <meta content="41.20" itemprop="price">
                                                                        <meta content="USD" itemprop="priceCurrency">
                                                                        <meta content="https://schema.org/InStock" itemprop="availability">
                                                                        <meta content="https://schema.org/NewCondition" itemprop="itemCondition">
                                                                        <div class="product-tile__prices"><span class="product-tile__price-retail product-tile__price-retail--sale product-details__price-retail mny__rng"><span
                                                               data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>41<sup class="mny__s">.</sup><sup>20</sup><span class="mny__c"></span></span>
                                                                            </span><span data-js="Money.stylizedMoney"><span class="mny"><span
                                                                     class="mny__c">$</span>83<sup class="mny__s">.</sup><sup>86</sup><span class="mny__c"></span></span>
                                                                            </span>
                                                                            </span><span class="product-tile__price-was product-details__price-was mny__rng"><span
                                                               data-js="Money.parsedMoney"><span
                                                                  class="mny__c">$</span>54.95<span class="mny__c"></span></span><span data-js="Money.parsedMoney"><span
                                                                  class="mny__c">$</span>116.95<span class="mny__c"></span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="related-products__controls related-products__controls--horizontal tray__controls--horizontal tray__controls">
                                                <button aria-label="scroll previous" type="button" data-slider-arrow="Prev" class="related-products__arrow related-products__arrow--left tray__arrow--left tray__arrow" disabled="disabled">
                                                    <svg class="related-products__arrow-icon related-products__arrow-icon--left tray__arrow-icon--left tray__arrow-icon" viewBox="0 0 20 20">
                                                        <path d="M13.891 17.418c0.268 0.272 0.268 0.709 0 0.979s-0.701 0.271-0.969 0l-7.83-7.908c-0.268-0.27-0.268-0.707 0-0.979l7.83-7.908c0.268-0.27 0.701-0.27 0.969 0s0.268 0.709 0 0.979l-7.141 7.419 7.141 7.418z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button aria-label="scroll next" type="button" data-slider-arrow="Next" class="related-products__arrow related-products__arrow--right tray__arrow--right tray__arrow">
                                                    <svg class="related-products__arrow-icon related-products__arrow-icon--right tray__arrow-icon--right tray__arrow-icon" viewBox="0 0 20 20">
                                                        <path d="M13.25 10l-7.141-7.42c-0.268-0.27-0.268-0.707 0-0.979 0.268-0.27 0.701-0.27 0.969 0l7.83 7.908c0.268 0.271 0.268 0.709 0 0.979l-7.83 7.908c-0.268 0.271-0.701 0.27-0.969 0s-0.268-0.707 0-0.979l7.141-7.417z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="related-products__scroll-bar tray__scroll-bar" style="">
                                                    <button type="button" data-slider-handle="" class="related-products__scroll-handle tray__scroll-handle" aria-label="scroll through tray" style="width: 126.788px; left: -10px;">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="product-show-section">
                <div class="product-show-section__content-wrapper">
                    <div class="product-show-section__content">
                        <div class="clp-banner clp-banner--no-membershipclp-banner--clp-banner--no-details">
                            <div class="clp-banner__logo">
                                <img class="clp-banner__logo-img" src="{{asset('frontend/image/small/rpm2.svg')}}">
                            </div>
                            <div class="clp-banner__copy">
                                <div class="clp-banner__copy-heading">Join now &amp; get rewarded!</div>
                                <p class="clp-banner__copy-copy">
                                    Get Free 2-Day Shipping and $15 + 5% RPM Cash on this order.
                                </p>
                                <a class="ui-link ui-link--underlined" href="/auth/identity">Already enrolled in RPM? Link your
                           existing membership here.</a>
                            </div>
                            <div class="clp-banner__actions">
                                <a class="ui-button" href="/cart/rpm-join-or-renew">Join Now</a>
                                <a class="ui-link ui-link--stacked ui-link--color-match ui-link--underlined" href="/rpm">Learn
                           More</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div> --}}
            {{-- <div class="product-show-section  product-show-section--videos  product-show-video-tray clearfix" id="videos">
                <h2 class="product-show-section__heading stn-shd stn-shd--small">
                Related Videos
                </h2>

                <div class="product-show-video-tray__body-wrapper">
                    <div class="product-show-video-tray__tray-wrapper">

                        <div class="product-show-video-tray__tile-wrapper">
                            <div class="product-show-video-tray__video-tile">
                                <div class="product-show-video-tray__video">

                                    <div class="product-show-media-video__lazy-youtube lazy-youtube" itemscope="" itemtype="http://schema.org/VideoObject" style="opacity: 1; background-image: url(&quot;https://img.youtube.com/vi/oaZBK_j7d4A/0.jpg&quot;);">
                                        <meta content="https://img.youtube.com/vi/oaZBK_j7d4A/0.jpg" itemprop="thumbnailURL">
                                        <meta content="https://www.youtube.com/embed/oaZBK_j7d4A" itemprop="embedURL">

                                        <meta content="The Best Motorcycle Helmets of 2025" itemprop="description">


                                        <meta content="2025-3-7" itemprop="uploadDate">


                                        <meta content="The Best Motorcycle Helmets of 2025" itemprop="name">

                                        <div class="lazy-youtube__frame" data-js="LazyYoutube.lazyEmbed" data-js-youtube-id="oaZBK_j7d4A">
                                            <div class="youtube-player-container">
                                                <iframe id="lazy_yt_oaZBK_j7d4A_0" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="The Best Motorcycle Helmets of 2025"
                                                width="640" height="360" src="https://www.youtube.com/embed/oaZBK_j7d4A?rel=0&amp;modestbranding=1&amp;playsinline=1&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.revzilla.com&amp;widgetid=1&amp;forigin=https%3A%2F%2Fwww.revzilla.com%2Fmotorcycle%2Farai-regent-x-helmet&amp;aoriginsup=0&amp;gporigin=https%3A%2F%2Fwww.revzilla.com%2Fmotorcycle-helmets%3Fview_all%3Dtrue&amp;vf=1"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="product-show-video-tray__video-title-wrapper">
                                    <p class="product-show-video-tray__video-title">
                                        The Best Motorcycle Helmets of 2025
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="product-show-video-tray__tile-wrapper">
                            <div class="product-show-video-tray__video-tile">
                                <div class="product-show-video-tray__video">

                                    <div class="product-show-media-video__lazy-youtube lazy-youtube" itemscope="" itemtype="http://schema.org/VideoObject" style="opacity: 1; background-image: url(&quot;https://img.youtube.com/vi/XOGuoHebGFs/0.jpg&quot;);">
                                        <meta content="https://img.youtube.com/vi/XOGuoHebGFs/0.jpg" itemprop="thumbnailURL">
                                        <meta content="https://www.youtube.com/embed/XOGuoHebGFs" itemprop="embedURL">

                                        <meta content="Motorcycle helmets come in a variety of styles, sizes, and internal shapes, each of which play a major role in the way you experience a ride while wearing them. What you put on your lid will be the most important piece of motorcycle gear that you wear, and will also likely be an investment, so having a thorough understanding of how to choose the best motorcycle helmet for your needs, and then size it accordingly, is one of the foundational elements to enjoying your ride. In this video Spurgeon walks you through the 5 basic styles of motorcycle helmets, as well as the best way to measure your head, select an internal helmet shape, and the common mistakes folks make when figuring out if they have the right fit."
                                        itemprop="description">


                                        <meta content="2019-5-23" itemprop="uploadDate">


                                        <meta content="How To Size and Buy a Motorcycle Helmet" itemprop="name">

                                        <div class="lazy-youtube__frame" data-js="LazyYoutube.lazyEmbed" data-js-youtube-id="XOGuoHebGFs">
                                            <div class="youtube-player-container">
                                                <iframe id="lazy_yt_XOGuoHebGFs_1" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="How To Size and Buy a Motorcycle Helmet"
                                                width="640" height="360" src="https://www.youtube.com/embed/XOGuoHebGFs?rel=0&amp;modestbranding=1&amp;playsinline=1&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.revzilla.com&amp;widgetid=2&amp;forigin=https%3A%2F%2Fwww.revzilla.com%2Fmotorcycle%2Farai-regent-x-helmet&amp;aoriginsup=0&amp;gporigin=https%3A%2F%2Fwww.revzilla.com%2Fmotorcycle-helmets%3Fview_all%3Dtrue&amp;vf=1"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="product-show-video-tray__video-title-wrapper">
                                    <p class="product-show-video-tray__video-title">
                                        How To Size and Buy a Motorcycle Helmet
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
            <input autocomplete="off" class="js-Panel-scrollLockToggle js-CmtoNavigation-classToggle cmto-mask__toggle js-Panel-input cmto-nav-panel__toggle" id="robis-panel" type="checkbox">
            <div class="js-AjaxPanel-panel cmto-nav-panel cmto-nav-panel--from-right js-CmtoNavigation-panel cmto-mask__content" data-panel-id="robis-panel">
                <div class="cmto-nav-panel__header">
                    <label class="cmto-nav-panel__header-back" for="robis-panel"><span>Continue Shopping</span></label>
                    <label class="cmto-nav-panel__header-close" for="robis-panel"></label>
                </div>
                <div class="cmto-nav-panel__content js-Panel-content">
                </div>
            </div>
            <label class="cmto-mask__mask" for="robis-panel"></label>
            <!-- sticky atc eligible -->
            <style>
               .product-show-media-image__image {
                    transition: transform 0.25s ease-out;
                    cursor: zoom-in;
                    will-change: transform;
                }
            </style>
            <script type="text/javascript">
                (function (w) {
                   w.__rq.push(function (req) {
                      req("web/static/js/sites/revzilla/templates/product/show/show").then(({
                         ProductShow
                      }) => ProductShow.init());

                      req("web/static/js/redline/templates/product/show/paypal_message").then(({
                         PaypalMessages
                      }) => {
                         new PaypalMessages({
                            "mode": "one-time-payment",
                            "environment": "production",
                            "currency": "USD",
                            "flow": "vault",
                            "site_symbol": "revzilla",
                            "merchant_account_id": "revzillamotorsports",
                            "site_official_name": "RevZilla.com",
                            "apple_pay_debug_mode": false,
                            "enable_paypal_credit": false,
                            "enable_venmo": false,
                            "google_pay_api_version": 2,
                            "google_pay_api_version_minor": 0,
                            "google_pay_button_color": "black",
                            "google_pay_button_type": "short",
                            "google_pay_checkout_option": "DEFAULT",
                            "google_pay_currency_code": "USD",
                            "google_pay_environment": "PRODUCTION",
                            "google_pay_merchant_id": "05163956053247700013",
                            "google_pay_total_price_status": "ESTIMATED",
                            "initialization_token": "production_pg7b65g7_msqks2nqrfmh7vr9",
                            "is_alternate_payment_flow": false,
                            "is_quick_checkout": false,
                            "paypal_action": "/checkout/paypal",
                            "paypal_button_color": "gold",
                            "shipping_address_editable": false,
                            "user_is_authenticated": false,
                            "venmo_profile_id": "2668487118686257252"
                         });
                      });

                      req("web/static/js/redline/components/gallery").then(({
                         Gallery
                      }) => {
                         window["ProductImageInterface_1100726"] =
                            new Gallery(
                               1100726,
                               [{
                                  "dimensions": {
                                     "height": 1264,
                                     "width": 1128
                                  },
                                  "option_name": "Frost Black",
                                  "option_id": 6147,
                                  "src": "https://www.revzilla.com/product_images/2337/4594/arai_regent_x_helmet.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1163,
                                     "width": 1116
                                  },
                                  "option_name": "Frost Black",
                                  "option_id": 6147,
                                  "src": "https://www.revzilla.com/product_images/2337/4611/arai_regent_x_helmet_black_frost.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1264,
                                     "width": 1136
                                  },
                                  "option_name": "White",
                                  "option_id": 30,
                                  "src": "https://www.revzilla.com/product_images/2337/4628/arai_regent_x_helmet.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1174,
                                     "width": 1132
                                  },
                                  "option_name": "White",
                                  "option_id": 30,
                                  "src": "https://www.revzilla.com/product_images/2337/4645/arai_regent_x_helmet_white.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1264,
                                     "width": 1128
                                  },
                                  "option_name": "Modern Grey",
                                  "option_id": 38580,
                                  "src": "https://www.revzilla.com/product_images/2337/4662/arai_regent_x_helmet.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1169,
                                     "width": 1120
                                  },
                                  "option_name": "Modern Grey",
                                  "option_id": 38580,
                                  "src": "https://www.revzilla.com/product_images/2337/4679/arai_regent_x_helmet_modern_grey.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 2088,
                                     "width": 1880
                                  },
                                  "option_name": "Aluminum Silver",
                                  "option_id": 3440,
                                  "src": "https://www.revzilla.com/product_images/2337/4696/arai_regent_x_helmet_aluminum_silver.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 2088,
                                     "width": 1984
                                  },
                                  "option_name": "Aluminum Silver",
                                  "option_id": 3440,
                                  "src": "https://www.revzilla.com/product_images/2337/4713/arai_regent_x_helmet_aluminum_silver.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1272,
                                     "width": 1137
                                  },
                                  "option_name": "Code Red",
                                  "option_id": 40894,
                                  "src": "https://www.revzilla.com/product_images/2337/4730/arai_regent_x_helmet.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 1272,
                                     "width": 1137
                                  },
                                  "option_name": "Code Yellow",
                                  "option_id": 40895,
                                  "src": "https://www.revzilla.com/product_images/2337/4747/arai_regent_x_helmet.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 2088,
                                     "width": 1856
                                  },
                                  "option_name": "Frost Gunmetal",
                                  "option_id": 37016,
                                  "src": "https://www.revzilla.com/product_images/2337/4764/arai_regent_x_helmet_frost_gunmetal.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 2088,
                                     "width": 1880
                                  },
                                  "option_name": "Modern Ivory",
                                  "option_id": 42230,
                                  "src": "https://www.revzilla.com/product_images/2337/4781/arai_regent_x_helmet_modern_ivory.jpg"
                               }, {
                                  "dimensions": {
                                     "height": 2088,
                                     "width": 1992
                                  },
                                  "option_name": "Modern Ivory",
                                  "option_id": 42230,
                                  "src": "https://www.revzilla.com/product_images/2337/4798/arai_regent_x_helmet_modern_ivory.jpg"
                               }],
                               null, {
                                  onPageMobileZoom: true,
                                  carouselTest: false,
                                  bemBlockClass: 'product-show-media-image'
                               }
                            );
                      });

                      req('web/static/js/redline/components/sku_selector.js').then(({
                         SkuSelector
                      }) => {
                         window.showProductSkuSelector = new SkuSelector({
                               "preorder": false,
                               "closeout": false,
                               "percent_off": 0,
                               "savings_amount": "$0.00",
                               "min_loyalty_earning": "25",
                               "max_loyalty_earning": "25",
                               "is_loyalty_eligible": true,
                               "current_rpm_earnings_percent": "0.05",
                               "loyalty_max": "$579.95",
                               "loyalty_min": "$579.95",
                               "msrp_max": "$579.95",
                               "msrp_min": "$579.95",
                               "option_type_ids": [2, 1],
                               "retail_max": "$579.95",
                               "retail_min": "$579.95"
                            }, {
                               "4": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "5": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "6": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "7": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "8": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "30": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "117": [8, 7, 6, 5, 4, 117, 6147, 30, 38580, 3440, 40894, 40895, 37016,
                                  42230
                               ],
                               "3440": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "6147": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "37016": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "38580": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "40894": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "40895": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ],
                               "42230": [6147, 30, 38580, 3440, 40894, 40895, 37016, 42230, 8, 7, 6, 5, 4,
                                  117
                               ]
                            }, {
                               "4": {
                                  "30": {
                                     "sku_id": 10413851
                                  },
                                  "3440": {
                                     "sku_id": 10413833
                                  },
                                  "6147": {
                                     "sku_id": 10413827
                                  },
                                  "37016": {
                                     "sku_id": 10413857
                                  },
                                  "38580": {
                                     "sku_id": 10413845
                                  },
                                  "40894": {
                                     "sku_id": 10413869
                                  },
                                  "40895": {
                                     "sku_id": 10413863
                                  },
                                  "42230": {
                                     "sku_id": 10413839
                                  }
                               },
                               "5": {
                                  "30": {
                                     "sku_id": 10413850
                                  },
                                  "3440": {
                                     "sku_id": 10413832
                                  },
                                  "6147": {
                                     "sku_id": 10413826
                                  },
                                  "37016": {
                                     "sku_id": 10413856
                                  },
                                  "38580": {
                                     "sku_id": 10413844
                                  },
                                  "40894": {
                                     "sku_id": 10413868
                                  },
                                  "40895": {
                                     "sku_id": 10413862
                                  },
                                  "42230": {
                                     "sku_id": 10413838
                                  }
                               },
                               "6": {
                                  "30": {
                                     "sku_id": 10413849
                                  },
                                  "3440": {
                                     "sku_id": 10413831
                                  },
                                  "6147": {
                                     "sku_id": 10413825
                                  },
                                  "37016": {
                                     "sku_id": 10413855
                                  },
                                  "38580": {
                                     "sku_id": 10413843
                                  },
                                  "40894": {
                                     "sku_id": 10413867
                                  },
                                  "40895": {
                                     "sku_id": 10413861
                                  },
                                  "42230": {
                                     "sku_id": 10413837
                                  }
                               },
                               "7": {
                                  "30": {
                                     "sku_id": 10413848
                                  },
                                  "3440": {
                                     "sku_id": 10413830
                                  },
                                  "6147": {
                                     "sku_id": 10413824
                                  },
                                  "37016": {
                                     "sku_id": 10413854
                                  },
                                  "38580": {
                                     "sku_id": 10413842
                                  },
                                  "40894": {
                                     "sku_id": 10413866
                                  },
                                  "40895": {
                                     "sku_id": 10413860
                                  },
                                  "42230": {
                                     "sku_id": 10413836
                                  }
                               },
                               "8": {
                                  "30": {
                                     "sku_id": 10413847
                                  },
                                  "3440": {
                                     "sku_id": 10413829
                                  },
                                  "6147": {
                                     "sku_id": 10413823
                                  },
                                  "37016": {
                                     "sku_id": 10413853
                                  },
                                  "38580": {
                                     "sku_id": 10413841
                                  },
                                  "40894": {
                                     "sku_id": 10413865
                                  },
                                  "40895": {
                                     "sku_id": 10413859
                                  },
                                  "42230": {
                                     "sku_id": 10413835
                                  }
                               },
                               "30": {
                                  "4": {
                                     "sku_id": 10413851
                                  },
                                  "5": {
                                     "sku_id": 10413850
                                  },
                                  "6": {
                                     "sku_id": 10413849
                                  },
                                  "7": {
                                     "sku_id": 10413848
                                  },
                                  "8": {
                                     "sku_id": 10413847
                                  },
                                  "117": {
                                     "sku_id": 10413852
                                  }
                               },
                               "117": {
                                  "30": {
                                     "sku_id": 10413852
                                  },
                                  "3440": {
                                     "sku_id": 10413834
                                  },
                                  "6147": {
                                     "sku_id": 10413828
                                  },
                                  "37016": {
                                     "sku_id": 10413858
                                  },
                                  "38580": {
                                     "sku_id": 10413846
                                  },
                                  "40894": {
                                     "sku_id": 10413870
                                  },
                                  "40895": {
                                     "sku_id": 10413864
                                  },
                                  "42230": {
                                     "sku_id": 10413840
                                  }
                               },
                               "3440": {
                                  "4": {
                                     "sku_id": 10413833
                                  },
                                  "5": {
                                     "sku_id": 10413832
                                  },
                                  "6": {
                                     "sku_id": 10413831
                                  },
                                  "7": {
                                     "sku_id": 10413830
                                  },
                                  "8": {
                                     "sku_id": 10413829
                                  },
                                  "117": {
                                     "sku_id": 10413834
                                  }
                               },
                               "6147": {
                                  "4": {
                                     "sku_id": 10413827
                                  },
                                  "5": {
                                     "sku_id": 10413826
                                  },
                                  "6": {
                                     "sku_id": 10413825
                                  },
                                  "7": {
                                     "sku_id": 10413824
                                  },
                                  "8": {
                                     "sku_id": 10413823
                                  },
                                  "117": {
                                     "sku_id": 10413828
                                  }
                               },
                               "37016": {
                                  "4": {
                                     "sku_id": 10413857
                                  },
                                  "5": {
                                     "sku_id": 10413856
                                  },
                                  "6": {
                                     "sku_id": 10413855
                                  },
                                  "7": {
                                     "sku_id": 10413854
                                  },
                                  "8": {
                                     "sku_id": 10413853
                                  },
                                  "117": {
                                     "sku_id": 10413858
                                  }
                               },
                               "38580": {
                                  "4": {
                                     "sku_id": 10413845
                                  },
                                  "5": {
                                     "sku_id": 10413844
                                  },
                                  "6": {
                                     "sku_id": 10413843
                                  },
                                  "7": {
                                     "sku_id": 10413842
                                  },
                                  "8": {
                                     "sku_id": 10413841
                                  },
                                  "117": {
                                     "sku_id": 10413846
                                  }
                               },
                               "40894": {
                                  "4": {
                                     "sku_id": 10413869
                                  },
                                  "5": {
                                     "sku_id": 10413868
                                  },
                                  "6": {
                                     "sku_id": 10413867
                                  },
                                  "7": {
                                     "sku_id": 10413866
                                  },
                                  "8": {
                                     "sku_id": 10413865
                                  },
                                  "117": {
                                     "sku_id": 10413870
                                  }
                               },
                               "40895": {
                                  "4": {
                                     "sku_id": 10413863
                                  },
                                  "5": {
                                     "sku_id": 10413862
                                  },
                                  "6": {
                                     "sku_id": 10413861
                                  },
                                  "7": {
                                     "sku_id": 10413860
                                  },
                                  "8": {
                                     "sku_id": 10413859
                                  },
                                  "117": {
                                     "sku_id": 10413864
                                  }
                               },
                               "42230": {
                                  "4": {
                                     "sku_id": 10413839
                                  },
                                  "5": {
                                     "sku_id": 10413838
                                  },
                                  "6": {
                                     "sku_id": 10413837
                                  },
                                  "7": {
                                     "sku_id": 10413836
                                  },
                                  "8": {
                                     "sku_id": 10413835
                                  },
                                  "117": {
                                     "sku_id": 10413840
                                  }
                               }
                            }, {
                               "10413832": {
                                  "id": 10413832,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413831": {
                                  "id": 10413831,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413854": {
                                  "id": 10413854,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 37016
                                  },
                                  "options_description": "XL / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413858": {
                                  "id": 10413858,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 37016
                                  },
                                  "options_description": "XS / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413866": {
                                  "id": 10413866,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 1 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413844": {
                                  "id": 10413844,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 3 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413837": {
                                  "id": 10413837,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 42230
                                  },
                                  "options_description": "LG / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413843": {
                                  "id": 10413843,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413859": {
                                  "id": 10413859,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413864": {
                                  "id": 10413864,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413846": {
                                  "id": 10413846,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413829": {
                                  "id": 10413829,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413863": {
                                  "id": 10413863,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413849": {
                                  "id": 10413849,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 30
                                  },
                                  "options_description": "White / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413839": {
                                  "id": 10413839,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 42230
                                  },
                                  "options_description": "SM / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413850": {
                                  "id": 10413850,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 30
                                  },
                                  "options_description": "White / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413865": {
                                  "id": 10413865,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413861": {
                                  "id": 10413861,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413826": {
                                  "id": 10413826,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413855": {
                                  "id": 10413855,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 2 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 37016
                                  },
                                  "options_description": "LG / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413830": {
                                  "id": 10413830,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 1 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413845": {
                                  "id": 10413845,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413848": {
                                  "id": 10413848,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 30
                                  },
                                  "options_description": "White / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413836": {
                                  "id": 10413836,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 3 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 42230
                                  },
                                  "options_description": "XL / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413825": {
                                  "id": 10413825,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413868": {
                                  "id": 10413868,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 2 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413851": {
                                  "id": 10413851,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 30
                                  },
                                  "options_description": "White / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413853": {
                                  "id": 10413853,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 37016
                                  },
                                  "options_description": "2XL / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413834": {
                                  "id": 10413834,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413856": {
                                  "id": 10413856,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 37016
                                  },
                                  "options_description": "MD / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413862": {
                                  "id": 10413862,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / MD",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413842": {
                                  "id": 10413842,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413824": {
                                  "id": 10413824,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 2 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413835": {
                                  "id": 10413835,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 42230
                                  },
                                  "options_description": "2XL / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413827": {
                                  "id": 10413827,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413870": {
                                  "id": 10413870,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413840": {
                                  "id": 10413840,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 42230
                                  },
                                  "options_description": "XS / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413867": {
                                  "id": 10413867,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 6,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / LG",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413833": {
                                  "id": 10413833,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 3440
                                  },
                                  "options_description": "Aluminum Silver / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413860": {
                                  "id": 10413860,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 7,
                                     "2": 40895
                                  },
                                  "options_description": "Code Yellow / XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413852": {
                                  "id": 10413852,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 30
                                  },
                                  "options_description": "White / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413828": {
                                  "id": 10413828,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 117,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / XS",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413838": {
                                  "id": 10413838,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 3 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 5,
                                     "2": 42230
                                  },
                                  "options_description": "MD / Modern Ivory",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413823": {
                                  "id": 10413823,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships next business day",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 6147
                                  },
                                  "options_description": "Frost Black / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413857": {
                                  "id": 10413857,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 37016
                                  },
                                  "options_description": "SM / Frost Gunmetal",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413841": {
                                  "id": 10413841,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Only 1 Left",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 38580
                                  },
                                  "options_description": "Modern Grey / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Check Nearby Stores",
                                     "availability_message": "Sorry. Not available at this store",
                                     "availability_label": null,
                                     "button_enabled": true,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               },
                               "10413847": {
                                  "id": 10413847,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": true,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "Ships within 24 hours",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "In Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 8,
                                     "2": 30
                                  },
                                  "options_description": "White / 2XL",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "Available for pickup within 2 hours",
                                     "availability_label": "In Stock",
                                     "button_enabled": true,
                                     "availability_symbol": "in_stock",
                                     "ready_for_reservation": true
                                  }
                               },
                               "10413869": {
                                  "id": 10413869,
                                  "is_guaranteed_holiday_shipping": false,
                                  "in_stock": false,
                                  "loyalty_price": "$579.95",
                                  "closeout": false,
                                  "availability_message": "",
                                  "retail": "$579.95",
                                  "percent_off": 0,
                                  "prp_data": {},
                                  "loyalty_savings": "$0.00",
                                  "is_premium_eligible": false,
                                  "availability_label": "Out of Stock",
                                  "loyalty_earnings": "25",
                                  "savings_amount": "$0.00",
                                  "discrete_skus": [],
                                  "option_ids": {
                                     "1": 4,
                                     "2": 40894
                                  },
                                  "options_description": "Code Red / SM",
                                  "compound": false,
                                  "msrp": "$579.95",
                                  "show_retail": false,
                                  "store_inventory_data": {
                                     "button_text": "Reserve for Pickup",
                                     "availability_message": "This item isn't sold in stores.",
                                     "availability_label": null,
                                     "button_enabled": false,
                                     "availability_symbol": "out_of_stock",
                                     "ready_for_reservation": false
                                  }
                               }
                            },
                            1100726, {


                               showViewAvailability: false,
                               storeId: 1179,
                               defaultStoreInventoryData: {
                                  "button_text": "Check Nearby Stores",
                                  "availability_message": "Sorry. Not available at this store",
                                  "availability_label": null,
                                  "button_enabled": true,
                                  "availability_symbol": "out_of_stock",
                                  "ready_for_reservation": false
                               },
                               deselectedStoreInventoryData: {
                                  "button_text": "Reserve for Pickup",
                                  "button_enabled": true,
                                  "ready_for_reservation": false
                               },

                               stickyATC: false,
                               disablePurchaseControl: false,
                               isActiveRpmMember: false,
                               isExpiredRpmMember: false
                            }
                         );
                      });

                      req("web/static/js/redline/components/product_form").then(({
                         ProductForm
                      }) => {
                         window.PRODUCT_FORM = new ProductForm(
                            $('.js-ProductForm-form'), {
                               toggleWishList: false
                            }
                         );
                      });

                      req("web/static/js/redline/util/help_keywords.js").then(({
                         HelpKeywords
                      }) => {
                         HelpKeywords.init('.product-details__details', [{
                            "image": null,
                            "description": "The intelligent protection armour is constructed from smart molecules: in case of an impact the armour will rapidly freeze and harden, absorbing the shock and distributing it over a large area to reduce the risk of fractures. The soft exterior of the armour offers a great deal of comfort and mobility.",
                            "name": "SAS-TEC",
                            "id": 1
                         }, {
                            "image": "91nPLBthlKL._AC_SL1500_.jpg",
                            "description": "Self-contouring foam that is not CE approved but still holds impact resistant properties, this product is used in areas where mobility is a must.",
                            "name": "Temperfoam",
                            "id": 4
                         }, {
                            "image": null,
                            "description": "SuperFabric® technology is an advanced process that transforms ordinary fabrics into unique, highly protective materials. Protective shields are applied close to each other but remain separate to allow maximum flexibility. Those micro guard plates provide an additional layer of protection without adding weight and will help resist abrasion to underlying fabrics. SuperFabric® is 5 times more abrasion resistant than leather with only half the weight. ",
                            "name": "SuperFabric",
                            "id": 6
                         }, {
                            "image": null,
                            "description": "The V.A.L.E. system is Two Brothers Racings revolutionary and patent pending method of attaching our muffler canisters to the exhaust tube without the use of springs or welding. \r\n\r\nThe V.A.L.E. system allows the muffler assembly - exhaust tube and canister - to be positioned perfectly on the bike before all the mounting hardware is fully tightened. Once the canister and exhaust tubes are properly aligned, the V.A.L.E. assembly locks the muffler canister to the exhaust tube assuring a perfect, leak-free fit. \r\n\r\nThis system is simple and easy to install, requiring nothing more than a 5mm hex wrench, which is included with every Two Brothers V.A.L.E. exhaust system",
                            "name": "V.A.L.E.",
                            "id": 23
                         }, {
                            "image": "X-TRAFIT-Technology.jpg",
                            "description": "GORE-TEX gloves with X-Trafit Technology are ideal when a close fit and high tactility are desired.  The gluing of GORETEX  membrane on the outside to the internal liner creates a waterproof, windproof, breathable three-layer structure that gives the feeling of being just one layer, providing optimal grip and comfort.Key advantages include a close fit, high tactility, improved dexterity combined with durability, waterproof, windproof protection and breathability. Three-layer comfort, one-layer feeling, which is ideal for motorcycling.",
                            "name": "X-Trafit",
                            "id": 104
                         }, {
                            "image": "tactical_hao_resize.jpg",
                            "description": "Vest designed specifically for tactical insertions, securing your load-out and checking the perimeter.",
                            "name": "tactical vest",
                            "id": 181
                         }, {
                            "image": "1521808208874.jpg",
                            "description": "Dyneema&reg; is known as the premium brand of Ultra-High Molecular Weight Polyethylene (UHMwPE). Polyethylene with a very high molecular weight provides excellent tear resistance, tensile strength and impact abrasion. ",
                            "name": "Dyneema&reg;",
                            "id": 224
                         }, {
                            "image": "ece_22.05.gif",
                            "description": "The ECE 22.05 (Economic Commission for Europe) standard is quite a bit younger than the current DOT standard, and in many ways offers a more comprehensive battery of testing than its American cousin. ECE standards test for safety features that can contribute to avoiding an accident altogether, such as the optical quality of approved face shields and safety factors not directly related to impact, such as shell rigidity. Unlike the DOT, every ECE 22.05 certified helmet model must actually be tested against the standard by an independent lab before it is available for sale with an ECE sticker.",
                            "name": "ECE 22.05",
                            "id": 1232
                         }, {
                            "image": "ece_22.05.gif",
                            "description": "The ECE 22.05 (Economic Commission for Europe) standard is quite a bit younger than the current DOT standard, and in many ways offers a more comprehensive battery of testing than its American cousin. ECE standards test for safety features that can contribute to avoiding an accident altogether, such as the optical quality of approved face shields and safety factors not directly related to impact, such as shell rigidity. Unlike the DOT, every ECE 22.05 certified helmet model must actually be tested against the standard by an independent lab before it is available for sale with an ECE sticker.",
                            "name": "ECE-22.05",
                            "id": 1233
                         }, {
                            "image": null,
                            "description": "The ECE (Economic Commission for Europe) standard is quite a bit younger than the current DOT standard, and in many ways offers a more comprehensive battery of testing than its American cousin. ECE standards test for safety features that can contribute to avoiding an accident altogether, such as the optical quality of approved face shields and safety factors not directly related to impact, such as shell rigidity. Unlike the DOT, every ECE certified helmet model must actually be tested against the standard by an independent lab before it is available for sale with an ECE sticker.",
                            "name": "ECE certified",
                            "id": 1234
                         }, {
                            "image": null,
                            "description": "The SNELL Memorial Foundation is still largely considered the gold standard for helmet safety. SNELL M2020 certification uses the most aggressive anvil profile, known as an edge anvil, and demands a ridiculously low 275 g maximum energy transfer after two blows. SNELL testing is designed with the energy levels and safety requirements of the racetrack in mind, and this is reflected in the additional testing for characteristics such as stability and ease of removal in an emergency. SNELL technicians look for the weakest point in the helmet and target that point when testing. Technicians will strike multiple locations, testing until they are satisfied an accurate indication of the helmet’s energy-management ability has been attained. Also listed as SNELL M2020D. ",
                            "name": "SNELL M2020",
                            "id": 1235
                         }, {
                            "image": null,
                            "description": "The SNELL Memorial Foundation is still largely considered the gold standard for helmet safety. SNELL M2020 certification uses the most aggressive anvil profile, known as an edge anvil, and demands a ridiculously low 275 g maximum energy transfer after two blows. SNELL testing is designed with the energy levels and safety requirements of the racetrack in mind, and this is reflected in the additional testing for characteristics such as stability and ease of removal in an emergency. SNELL technicians look for the weakest point in the helmet and target that point when testing. Technicians will strike multiple locations, testing until they are satisfied an accurate indication of the helmet’s energy-management ability has been attained. Also listed as SNELL M2020D. ",
                            "name": "SNELL 2020",
                            "id": 1238
                         }, {
                            "image": null,
                            "description": "The SNELL Memorial Foundation is still largely considered the gold standard for helmet safety. SNELL M2020 certification uses the most aggressive anvil profile, known as an edge anvil, and demands a ridiculously low 275 g maximum energy transfer after two blows. SNELL testing is designed with the energy levels and safety requirements of the racetrack in mind, and this is reflected in the additional testing for characteristics such as stability and ease of removal in an emergency. SNELL technicians look for the weakest point in the helmet and target that point when testing. Technicians will strike multiple locations, testing until they are satisfied an accurate indication of the helmet’s energy-management ability has been attained. Also listed as SNELL M2020D. ",
                            "name": "Snell M2020 ",
                            "id": 1239
                         }, {
                            "image": null,
                            "description": "The SNELL Memorial Foundation is still largely considered the gold standard for helmet safety. SNELL M2020 certification uses the most aggressive anvil profile, known as an edge anvil, and demands a ridiculously low 275 g maximum energy transfer after two blows. SNELL testing is designed with the energy levels and safety requirements of the racetrack in mind, and this is reflected in the additional testing for characteristics such as stability and ease of removal in an emergency. SNELL technicians look for the weakest point in the helmet and target that point when testing. Technicians will strike multiple locations, testing until they are satisfied an accurate indication of the helmet’s energy-management ability has been attained. Also listed as SNELL M2020D. ",
                            "name": "Snell 2020",
                            "id": 1240
                         }, {
                            "image": null,
                            "description": "Thinsulate® is a synthetic fiber used for thermal insulation in clothing. Thinsulate® fibers are about 15 micrometers in diameter, which is thinner than the polyester fibers normally used in insulation for clothing such as gloves or winter jackets. Thinsulate® insulation is soft and compressible.",
                            "name": "Thinsulate",
                            "id": 1241
                         }, {
                            "image": "dks434_3d_c_mx_d.png",
                            "description": "A Pinlock lens is made to enjoy a fog-free ride. It is based on two key principles to ensure a fog-free vision. The moisture absorbing surface of the lens effectively attracts and stores water molecules, while the airtight seal creates a thermal barrier together preventing condensation of the visor. The system is kept in place by positioning the lens between two adjustable  pins, making Pinlock the number one anti-fog solution for helmets.",
                            "name": "Pinlock",
                            "id": 1243
                         }, {
                            "image": "dks434_3d_c_mx_d.webp",
                            "description": "A Pinlock lens is made to enjoy a fog-free ride. It is based on two key principles to ensure a fog-free vision. The moisture absorbing surface of the lens effectively attracts and stores water molecules, while the airtight seal creates a thermal barrier together preventing condensation of the visor. The system is kept in place by positioning the lens between two adjustable pins, making Pinlock the number one anti-fog solution for helmets.",
                            "name": "PINLOCK",
                            "id": 1244
                         }, {
                            "image": "AT286_WHITE_11_PFP.jpg",
                            "description": "Tricot fabrics are often used as a lining material and can take many shapes and forms. Typically made from polyester, tricot can also be made from any natural or synthetic fiber. The tricot \"treatment\" can make a material softer and more breathable than standard, non-tricot fabrics. Lightweight tricot liners can be found on apparel like gloves for added comfort and airflow. Heavier, more durable tricot liners can be found on luggage, bike covers, etc. ",
                            "name": "Tricot",
                            "id": 1246
                         }, {
                            "image": "AT286_WHITE_11_PFP.jpg",
                            "description": "Tricot fabrics are often used as a lining material and can take many shapes and forms. Typically made from polyester, tricot can also be made from any natural or synthetic fiber. The tricot \"treatment\" can make a material softer and more breathable than standard, non-tricot fabrics. Lightweight tricot liners can be found on apparel like gloves for added comfort and airflow. Heavier, more durable tricot liners can be found on luggage, bike covers, etc. ",
                            "name": "tricot",
                            "id": 1247
                         }, {
                            "image": "Ultrasonic_Welding.jpg",
                            "description": "Sonic or ultrasonic welding (USW) is the joining or reforming of thermoplastic materials through the use of heat generated from high-frequency mechanical motion. Sonic welding is often found as an alternative to traditional sewn connection points in apparel. Sonic welding is common in riding gear that requires high dexterity (gloves) or high comfort (footwear) where bulky seams would be unwelcome.",
                            "name": "Sonic welded",
                            "id": 1248
                         }, {
                            "image": "Ultrasonic_Welding.jpg",
                            "description": "Sonic or ultrasonic welding (USW) is the joining or reforming of thermoplastic materials through the use of heat generated from high-frequency mechanical motion. Sonic welding is often found as an alternative to traditional sewn connection points in apparel. Sonic welding is common in riding gear that requires high dexterity (gloves) or high comfort (footwear) where bulky seams would be unwelcome.",
                            "name": "sonic welded",
                            "id": 1249
                         }, {
                            "image": "if3ldk2w2j841.webp",
                            "description": "Finite Element Analysis (FEA) is the process of simulating the behavior of a part or assembly under given conditions so that it can be better assessed and understood. Typical FEA areas of interest include structural analysis, heat transfer, fluid flow and mass transfer. \r\n\r\nLet's translate that into two-wheeled language: FEA means your slick, new ADV helmet or track-ready rearsets were engineered with real world forces and factors in mind.",
                            "name": "Finite Element Analysis",
                            "id": 1250
                         }, {
                            "image": "if3ldk2w2j841.webp",
                            "description": "Finite Elements Analysis is the process of simulating the behavior of a part or assembly under given conditions so that it can better assessed and understood. Using the Finite Element Method (FEM), variables of interest include structural analysis, heat transfer, fluid flow and mass transfer. \r\n\r\nTranslated into two-wheeled language, FEA means your slick, new ADV helmet or track-ready rearsets were engineered with real world forces and factors in mind.",
                            "name": "Finite Elements Analysis",
                            "id": 1251
                         }, {
                            "image": "if3ldk2w2j841.webp",
                            "description": "Finite Element Analysis (FEA) is the process of simulating the behavior of a part or assembly under given conditions so that it can be better assessed and understood. Typical FEA areas of interest include structural analysis, heat transfer, fluid flow and mass transfer. \r\n\r\nLet's translate that into two-wheeled language: FEA means your slick, new ADV helmet or track-ready rearsets were engineered with real world forces and factors in mind.",
                            "name": "finite element analysis",
                            "id": 1252
                         }, {
                            "image": "Ax_Finger.png",
                            "description": "Ax Connect is a patented, third party fabric sourced from Ax Materials. The fabric contains organic compounds to mimic the conductivity of human skin - allowing for reliable interaction with smartphones, GPS, tablets and other touchscreens. In moto gloves, it is typically applied to the thumb and tip of index finger (not finger pad) to save the fabric from wear and degradation. ",
                            "name": "Ax Connect",
                            "id": 1253
                         }, {
                            "image": "Ax_Finger.png",
                            "description": "AX Connect is a patented, third party fabric sourced from AX Materials. The fabric contains organic compounds to mimic the conductivity of human skin - allowing for reliable interaction with smartphones, GPS, tablets and other touchscreens. In moto gloves, it is typically applied to the thumb and tip of index finger (not finger pad) to save the fabric from wear and degradation. ",
                            "name": "AX Connect",
                            "id": 1254
                         }, {
                            "image": "unece-22_06-featured.png",
                            "description": "ECE 22.06 is a helmet safety rating that extends and increases the testing requirements of ECE 22.05 (with 22.05 being a more modern, more comprehensive European alternative to DOT). With 22.06, 12 additional impact points are analyzed (now totaling 18) and impact speed is increased (from 7.5 to 8.2 m/s). Unlike DOT, every ECE helmet model must actually be tested by an independent lab before it receives 22.06 certification.",
                            "name": "ECE 22.06",
                            "id": 1255
                         }, {
                            "image": "unece-22_06-featured.png",
                            "description": "ECE 22.06 is a helmet safety rating that extends and increases the testing requirements of ECE 22.05 (with 22.05 being a more modern, more comprehensive European alternative to DOT). With 22.06, 12 additional impact points are analyzed (now totaling 18) and impact speed is increased (from 7.5 to 8.2 m/s). Unlike DOT, every ECE helmet model must actually be tested by an independent lab before it receives 22.06 certification.",
                            "name": "ECE-22.06",
                            "id": 1256
                         }, {
                            "image": "images.jpg",
                            "description": "The Double-D ring closure is THE tried-and-true  motorcycle helmet retention system. Consisting of two \"D\" shaped rings, the rider laces the opposing strap through the closure to secure the helmet. It is strong, simple, reliable and infinitely adjustable. Some helmets use alternative closure methods, but the Double D-ring remains the gold standard for these reasons.. ",
                            "name": "Double-D ring",
                            "id": 1257
                         }, {
                            "image": "images.jpg",
                            "description": "The Double D-ring closure is THE tried-and-true  motorcycle helmet retention system. Consisting of two \"D\" shaped rings, the rider laces the opposing strap through the closure to secure the helmet. It is strong, simple, reliable and infinitely adjustable. Some helmets use alternative closure methods, but the Double D-ring remains the gold standard for these reasons.",
                            "name": "Double D-ring",
                            "id": 1258
                         }, {
                            "image": "ECE-2205-logo.jpg",
                            "description": "The ECE 22.05 (Economic Commission for Europe) standard is quite a bit younger than the current DOT standard and, in many ways, offers a more comprehensive battery of testing than its American cousin. ECE standards test for safety features that can contribute to avoiding an accident altogether, such as the optical quality of approved face shields and safety factors not directly related to impact, such as shell rigidity. Unlike the DOT, every ECE 22.05 certified helmet model must actually be tested against the standard by an independent lab before it is available for sale with an ECE sticker.",
                            "name": "ECE 22-05",
                            "id": 1262
                         }, {
                            "image": "t5evox-web-thumb.png",
                            "description": "Evo Pro XT limb protection from D3O utilizes the latest tech in advanced, rate-sensitive shock absorption and impact protection. Evo Pro XT offers greater impact absorption along with Area B coverage. The range is available in knee, hip, shoulder and elbow pads which are CE certified to EN1621-1:2012 Level 2 across ambient, wet and cold conditions. ",
                            "name": "EVO PRO XT",
                            "id": 1267
                         }, {
                            "image": "Elbow_x900.webp",
                            "description": "T5 impact armor from D3O is an excellent protection option that balances reduced weight and a low profile with excellent Level 1 impact absorption. T5 incorporates D3O's patented elastomer technology that offers advanced, rate-sensitive shock absorption and impact protection. The T5 range is available in knee, hip, shoulder and elbow protection. T5 armor achieves Type A / EN1621-1:2012 Level 1 standards in ambient, wet and cold conditions.",
                            "name": "D3O T5",
                            "id": 1268
                         }, {
                            "image": "hqdefault.jpg",
                            "description": "Poron XRD is a foam designed for impact absorption that is also comfortable when incorporated in moto apparel. Poron XRD is not a fully closed-cell urethane, giving Poron XRD softness and flexibility that competing impact armor brands lack. When the foam impacts a hard surface, its soft insides quickly absorb the shock and bounce back - allowing the foam to stiffen. This process cushions impact and protects the user from harm.",
                            "name": "Poron XRD",
                            "id": 1269
                         }, {
                            "image": "KEVLAR-Carbon_Hybrid-Yellow-2.jpg",
                            "description": "In woven form, aramid is an organic fiber known for excellent mechanical properties, including high tenacity, low density and low conductivity of heat. Mixed with resin and hardened, high impact resistance is yet another characteristic of this fiber. For the two-wheeled folk out there, Aramid is a friend. The fiber - as a cloth - adds abrasion-resistant to riding gear and adds rigidity when incorporated in the shell of helmets. DuPont™ Kevlar® is a trademarked brand name of (generic) aramid. ",
                            "name": "aramid fiber",
                            "id": 1271
                         }, {
                            "image": "p201704260933327567875.webp",
                            "description": "Expanded polystyrene (EPS) is a rigid, energy absorbing foam. In the helmet industry, EPS is the most common means of energy management to protect the brain. Generic EPS is often referred to as “Styrofoam” (a trademarked name owned by the Dow Chemical Company). Premium helmet producers utilize multi-density EPS liners to balance comfort, safety and performance. ",
                            "name": "EPS liner",
                            "id": 1273
                         }, {
                            "image": "images.png",
                            "description": "How does the Mips® safety system work?\r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries.\r\n\r\n\r\nRotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. The Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.",
                            "name": "MIPS Multi-Directional Impact Protection System",
                            "id": 1274
                         }, {
                            "image": "images.png",
                            "description": "How does the Mips® safety system work?\r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries.\r\n\r\n\r\nRotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. The Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.",
                            "name": "Mips Multi-Directional Impact Protection System",
                            "id": 1275
                         }, {
                            "image": "shopping.webp",
                            "description": "ProTint Photochromatic Face Shields quickly darken from clear to smoke when exposed to bright sunlight. ProTint adaptive technology adjusts to changing light conditions and offers exceptional clarity in low light. Many brands have attempted an effective transitions moto shield in the past. ProTint Shields are genuinely the first do-it-all shield option for motorcyclists and are known for maximum clarity when riding at night. ",
                            "name": "ProTint Photochromatic",
                            "id": 1276
                         }, {
                            "image": "nexx_xwed2_xwst2_transitions_face_shield_750x750.jpg",
                            "description": "Transitions Photochromic Technology packs millions of UV light-sensitive molecules into the structure of the face shield. Transitions patented technology constantly and smoothly recalibrates the face shield's level of tint, making it a do-it-all shield for bright sunlight, cloud cover and nighttime riding.",
                            "name": "Transitions Photochromic",
                            "id": 1277
                         }, {
                            "image": null,
                            "description": "NutraFog II is a chemical coating added to the surface of face shields to help prevent fogging. While a physical anti-fog system is superior (like a face shield equipped with  Pinlock lens insert), NutraFog II provides moderate fog resistance without any additional hardware.",
                            "name": "NutraFog II",
                            "id": 1278
                         }, {
                            "image": "47325143_10156305304044221_7714561411728277504_n.jpg",
                            "description": "A modular helmet with P/J homologation or \"dual homologation\" meets its desired ECE certification  with the chin bar down (like a full face helmet) or chin bar up (like an open face or \"jet\" style helmet). The \"J\" portion of the certification refers to passing safety standards in this \"jet\" configuration. Most modular helmets are only tested with the chin bar locked in the closed position to achieve P homologation; only select helmets also achieve J homologation with the chin bar up. ",
                            "name": "P/J homologation",
                            "id": 1279
                         }, {
                            "image": "M2020R.png",
                            "description": "The Snell M2020R is a not-so-common \"hybrid\" helmet certification that is intended to enable the M2020 (also known as M2020D) safety certification in addition to EU ECE 22-05 and FIM FRHPhe-1 certifications. A very small minority of race-oriented helmets achieve certification with M2020R. ",
                            "name": "M2020R",
                            "id": 1280
                         }, {
                            "image": "micrometric-motorcycle-crash-helmet-fastener.jpg",
                            "description": "A micrometric fastener is an adjustable fastener commonly used in helmets, pants, boots, etc. Also known as \"micro ratchet\" or just plain \"ratchet fastener\", the system uses a spring-loaded ratchet mechanism that interlocks with an opposing strip of toothed metal or plastic. It is best known for its ease of adjustment - especially with gloved hands. In helmets, it takes the place of the classic double D-ring closure. ",
                            "name": "micrometric",
                            "id": 1281
                         }, {
                            "image": "FidLock.png",
                            "description": "A FidLock® magnetic fastener utilizes a combination of mechanical locking and magnetic forces to create a robust, high-strength closure. In the realm of motodom, a FidLock is sometimes used in place of the classic double D-ring helmet closure.  But why? A FidLock closure can be operated with one hand tied behind your back. And the free hand can be wearing the heaviest gloves in your closet. A FidLock closure practically closes itself and opening is just as easy. ",
                            "name": "FidLock",
                            "id": 1282
                         }, {
                            "image": "FidLock.png",
                            "description": "A Fidlock® magnetic fastener utilizes a combination of mechanical locking and magnetic forces to create a robust, high-strength closure. In the realm of motodom, a Fidlock is sometimes used in place of the classic double D-ring helmet closure.  But why? A Fidlock closure can be operated with one hand tied behind your back. And the free hand can be wearing the heaviest gloves in your closet. A Fidlock closure practically closes itself and opening is just as easy. ",
                            "name": "fidlock",
                            "id": 1283
                         }, {
                            "image": "FidLock.png",
                            "description": "A Fid-lock® magnetic fastener utilizes a combination of mechanical locking and magnetic forces to create a robust, high-strength closure. In the realm of motodom, a Fid-lock is sometimes used in place of the classic double D-ring helmet closure. But why? A Fid-lock closure can be operated with one hand tied behind your back. And the free hand can be wearing the heaviest gloves in your closet. A Fid-lock closure practically closes itself and opening is just as easy.\t",
                            "name": "Fid-lock",
                            "id": 1284
                         }, {
                            "image": "dart_marlin_flyscreen_rollover.jpg",
                            "description": "Dartec II is a thin, outer layer of silicate material bonded to the windshield's primary polycarbonate construction material. Dartec II adds a glass-like hardness and abrasion resistance. It also makes the screen easier to clean. Dirt just rinses right off. ",
                            "name": "Dartec II",
                            "id": 1286
                         }, {
                            "image": null,
                            "description": "DEST: Dynamic Energy Surface Treatment. This race-bred  tech delivers consistent, fade-free performance during extreme braking conditions. No thermal bedding-in process is required due to the DEST process. Furthermore, as brake temperatures rise, DEST eliminates the gaseous film created between disc and pad surface - reducing fade during heavy use. ",
                            "name": "DEST Technology",
                            "id": 2287
                         }, {
                            "image": null,
                            "description": "Aramidic fiber with elevated resistance to tear, wear, shear and heat complemented by low electrical conductivity and high resistance to chemical corrosion. This excellent mechanical performance is matched by the lightweight and softness of the thread that guarantees comfort and a perfect fit at the same time.",
                            "name": "DuPont™ Kevlar®",
                            "id": 2288
                         }, {
                            "image": null,
                            "description": "Scott’s Amplifer Lens Technology utilizes a unique light transmission curve to optimize the transmission of key light waves that are most important to the human eye, so you can see more in every condition. This ultimately gives you the ability to enhance your contrast and color definition, amplifying your vision and allowing for incredible clarity.",
                            "name": "AMP Lens technology",
                            "id": 2289
                         }, {
                            "image": "Mips_Integra_TX.jpg",
                            "description": "When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. The Mips® Integra TX system is designed to provide movement inside the helmet to help reduce rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries. \r\n\r\n\r\nMips® Integra TX features a thin, low-friction layer integrated between the fabric and the foam of the padding, allowing omnidirectional movement inside the helmet. This makes for an invisible and fully integrated system. The low-friction layer is designed to help reduce rotational motion without altering comfort and fit or adding weight to the helmet.",
                            "name": "Mips® Integra TX",
                            "id": 2290
                         }, {
                            "image": "Screenshot_2025-03-14_212951.jpg",
                            "description": "When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. The Mips® Evolve Core system is designed to provide movement inside the helmet to help reduce rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries.\r\n\r\n\r\nThe Mips® Evolve Core system is based on a low-friction layer that is attached to the inner surface of the helmet’s energy-absorbing liner, using versatile fixations. This allows it to move in all directions, with the intention to help reduce rotational motion. The comfort padding is fixed to the low-friction layer, resulting in a refined fit and a light construction.",
                            "name": "Mips® Evolve Core",
                            "id": 2291
                         }, {
                            "image": "Screenshot_2024-11-04_110340.png",
                            "description": "Every item carrying a bluesign PRODUCT or APPROVED label has been manufactured to strict safety and environmental requirements. Known as the bluesign CRITERIA, these are the highest standards in the industry for chemical consumption, carbon emission, water consumption, energy consumption and worker health & safety.",
                            "name": "bluesign",
                            "id": 2292
                         }, {
                            "image": null,
                            "description": "A waterproof H2Out membrane usable on the inside and outside of SPIDI garments.",
                            "name": "InsideOut",
                            "id": 2293
                         }, {
                            "image": "Mips_logo_screen.png",
                            "description": "How does the Mips® safety system work? \r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries. Rotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. \r\n\r\n\r\nThe Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.\r\n\r\n\r\nThe Mips Spherical system uses a unique ball and socket design to provide movement inside the helmet. When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. This sliding layer helps reduce the rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries.",
                            "name": "Spherical MIPS Technology",
                            "id": 2294
                         }, {
                            "image": "icons_0002_RC_POLYMER.png",
                            "description": "RC Polymer technology optimizes the distribution of silica within the rubber compound and improves tread flexibility allowing greater contact with the road surface in both hot and cold conditions. The reduction in molecular friction also improves rolling resistance, therefore increasing fuel economy.",
                            "name": "RC Polymer",
                            "id": 2295
                         }, {
                            "image": "icons_0007_logo_ologic_ultimateye.png",
                            "description": "Visualization of the tire contact patch behavior with measurement and simulation technology. Supplies less slip area for good traction while riding and improves wear life.",
                            "name": "ULTIMATEYE",
                            "id": 2296
                         }, {
                            "image": null,
                            "description": "Structure in which multiple belt layers are wound at different angles relative to the tire's cross-sectional direction.",
                            "name": "Cross Belt",
                            "id": 2303
                         }, {
                            "image": "icons_0005_MSBelt-Icon.png",
                            "description": "MSB construction means that a continuous single strand is wrapped around the circumference of the tire. This one-piece construction eliminates overlapping of belts, seams, and joints. An MSB tire is lighter than conventional multi-cross belt construction, it also has more stability since it minimizes heat generation inside the tire and gives high shock absorption.",
                            "name": "MS Belt",
                            "id": 2304
                         }, {
                            "image": "icons_0008_HTSPC.png",
                            "description": "Bridgestone was the very first motorcycle tire manufacturer to utilize 1X5 filament rubber insulated steel (MSB) in the manufacture of its motorcycle radial tires. This makes the tire more flexible, provides more stability without a reduction in shock absorption, and minimizes the generation of heat throughout the tire.",
                            "name": "HTSPC",
                            "id": 2305
                         }, {
                            "image": "3lc-logo.png",
                            "description": "Provides grip performance demanded in all riding modes. The center compound offers linear handling. The shoulder compound secures high grip and solid contact feel.",
                            "name": "3LC",
                            "id": 2306
                         }, {
                            "image": "maxresdefault.jpg",
                            "description": "Bell \"Flex\" Progressive Layering Technology is a first-of-its kind, three-layer impact liner designed to manage energy from three potential impact scenarios: low, mid and high-speed. \r\n\r\nA “slip zone” within the impact liner allows for subtle movement between the inner layers and works to reduce rotational energy transfer from angular impacts to the rider. While also aiding fit, comfort and ventilation, Bell Flex Technology significantly reduces the likelihood of serious brain injury. ",
                            "name": "Progressive Layering Technology",
                            "id": 2310
                         }, {
                            "image": "maxresdefault.jpg",
                            "description": "The Flex Impact Liner from Bell uses a progressive layering design to create a first-of-its kind, three-layer impact liner designed to manage energy from three potential impact scenarios: low, mid and high-speed. \r\n\r\nA “slip zone” within the Flex liner allows for subtle movement between the inner layers and works to reduce rotational energy transfer from angular impacts to the rider. While also aiding fit, comfort and ventilation, Bell Flex Technology significantly reduces the likelihood of serious brain injury.",
                            "name": "Flex Impact Liner",
                            "id": 2311
                         }, {
                            "image": "Screenshot_2025-02-10_173743.jpg",
                            "description": "LS2's Integrated Synthetic Sliding Impact System is a proprietary safety technology built into the liner system of select LS2 helmets. The system reduces rotational energy transfer to the rider's head in the event of angular impact - significantly reducing the chances of major brain injury. ",
                            "name": "Integrated Synthetic Sliding Impact System",
                            "id": 2312
                         }, {
                            "image": "Screenshot_2025-02-10_173743.jpg",
                            "description": "LS2's Advanced Rotational Energy Management technology is a proprietary safety system engineered into the liner of select LS2 helmets. The technology reduces energy transfer to the rider's head in the event of angular impact - significantly reducing the chances of major brain injury. AREM equipped helmets exceed ECE 22.06 rotational safety standards, offering pro-level protection to every rider. ",
                            "name": "A.R.E.M.",
                            "id": 2313
                         }, {
                            "image": "Screenshot_2025-02-10_173743.jpg",
                            "description": "LS2's Advanced Rotational Energy Management technology is a proprietary safety system engineered into the liner of select LS2 helmets. The technology reduces energy transfer to the rider's head in the event of angular impact - significantly reducing the chances of major brain injury. AREM equipped helmets exceed ECE 22.06 rotational safety standards, offering pro-level protection to every rider. ",
                            "name": "AREM",
                            "id": 2314
                         }, {
                            "image": "NGX7QDPSDFBYBL5LAUATPI56JM.jpg",
                            "description": "Omni-Directional Suspension (ODS) is an active, in-helmet energy management system. The system reduces energy transfer to the brain over a wider range of energy demands, including low, mid, and high-velocity impacts for both linear and angular acceleration. \r\n\r\nODS performance is achieved through the use of a suspended dual-liner assembly that can displace and shear in any direction upon impact. Not only has ODS received helmet safety awards from the NFL, but ODS helmets can also be rebuilt / repaired after impact by 6D. ",
                            "name": "Omni-Directional Suspension",
                            "id": 2315
                         }, {
                            "image": "Screenshot_2025-02-10_175737.jpg",
                            "description": "Sliding Layer Impact Distribution (SLID) \r\nis a helmet safety technology that incorporates a special gel-like material inside the helmet liner. This technology reduces the amount of energy delivered to the brain in the event of an impact by providing a rotating function that cushions and disperses rotational forces.\r\n\r\nThe advanced gel layer provides flowable properties that disperse impact, ensuring maximum safety and protection for riders.",
                            "name": "Sliding Layer Impact Distribution",
                            "id": 2316
                         }, {
                            "image": "mipslogo.png",
                            "description": "How does the Mips® safety system work?\r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries.\r\n\r\n\r\nRotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. The Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.\r\n\r\n\r\nRevised Mips-E2 technology slides 10 to 15mm in all directions, providing the helmet wearer with the best possible protection against head and brain damage, especially in the event of a fall with a glancing impact as a result of rotational movement.",
                            "name": "Mips-E2",
                            "id": 2317
                         }, {
                            "image": "Koroyd-Flat-Sheet-1-jpg-1024x683.webp",
                            "description": "Koroyd relies on a matrix of tiny, \"welded\" tubes that crumples instantly and consistently on impact, absorbing maximum force and minimizing energy transferred to your head. Koroyd has significantly less elasticity than EPS foam, correlating to a lower risk of injury. \r\n\r\nStudies prove that in angled impacts, when direct acceleration is reduced, there is a 91% correlation with a reduction in the rotational motion of your head and brain. In simple terms, with Koroyd your helmet absorbs more energy, and you are better protected from every angle of impact.",
                            "name": "Koroyd",
                            "id": 2321
                         }, {
                            "image": "Screenshot+2024-01-10+at+5.09.42_PM__1_.png",
                            "description": "Energy Reduction Technology (ERT) incorporates soft advanced polymer pads into the helmet to help manage both rotational and linear impact energy. Patented ERT pads mitigate impacts through both their unique material properties and their refined geometry. \r\n\r\nUnlike most impact energy management materials which do not deform and dissipate energy below a certain force threshold, ERT responds instantly, even at low speeds, to protect the brain from impact. ",
                            "name": "Energy Reduction Technology",
                            "id": 2322
                         }, {
                            "image": "FLY-Forumla-1080-x-1080.webp",
                            "description": "RHEON technology is an energy-absorbing super polymer. It is soft and flexible in its natural state but absorbs energy by stiffening when subjected to force.\r\n\r\nIn helmets, RHEON is crafted into a \"metamaterial\" using carefully developed geometry combined with the active polymer to reduce the forces transferred to the brain.\r\n\r\nThe unique anisotropic shape allows the cells to absorb energy differently in compression and shear. The adaptive chemistry of RHEON maximizes absorption of low-speed linear and rotational impact energy depending on the severity and direction of an impact.",
                            "name": "RHEON",
                            "id": 2323
                         }, {
                            "image": "TEN-THINGS-SHOEI-VFX-EVO-MEDS-01.jpg",
                            "description": "Motion Energy Distribution System (M.E.D.S.) relies on a unique framework in the design of the helmet's dual-layer, multi-density EPS liner. The EPS inner layer is secured to the outer layer using sacrificial EPS columns. \r\n\r\nUpon impact, this framework allows for a calculated amount of \"swing\" between the two layers, which is the key to energy absorption. MEDS results in significantly reduced rotational forces reaching the riders head. ",
                            "name": "Motion Energy Distribution System",
                            "id": 2324
                         }, {
                            "image": "Screenshot_2025-02-17_135100.jpg",
                            "description": "Quad Core is a proprietary low-density layer used in select Kali helmets to reduces rotational impact forces up to 25% and reduces low G-force linear impacts up to 30%. ",
                            "name": "QuadCore",
                            "id": 2325
                         }, {
                            "image": null,
                            "description": "Alpinestars' patented low-friction coating is applied to the inner part of the main EPS liner to reduce the rotational acceleration forces that can result from certain oblique impacts. This layer essentially acts as a slip plane to mimic the brain’s own low-friction cerebrospinal fluid, which is the body’s natural defense against oblique impacts.",
                            "name": "Rotational Acceleration Force Protection",
                            "id": 2330
                         }, {
                            "image": "Koroyd-Flat-Sheet-1-jpg-1024x683.webp",
                            "description": "KOROYD relies on a matrix of tiny, \"welded\" tubes that crumples instantly and consistently on impact, absorbing maximum force and minimizing energy transferred to your head. KOROYD has significantly less elasticity than EPS foam, correlating to a lower risk of injury. \r\n\r\nStudies prove that in angled impacts, when direct acceleration is reduced, there is a 91% correlation with a reduction in the rotational motion of your head and brain. In simple terms, with KOROYD your helmet absorbs more energy, and you are better protected from every angle of impact.",
                            "name": "KOROYD",
                            "id": 2331
                         }, {
                            "image": "mipslogo.png",
                            "description": "How does the Mips® safety system work? \r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries. Rotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. \r\n\r\n\r\nThe Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.",
                            "name": "Mips® safety system",
                            "id": 2332
                         }, {
                            "image": "mipslogo.png",
                            "description": "How does the Mips® safety system work? \r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries. Rotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. \r\n\r\n\r\nThe Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.\r\n\r\n\r\nThe Mips Spherical system uses a unique ball and socket design to provide movement inside the helmet. When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. This sliding layer helps reduce the rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries.",
                            "name": "Mips® Spherical",
                            "id": 2333
                         }, {
                            "image": "mipslogo.png",
                            "description": "How does the Mips® safety system work? \r\n\r\n\r\nThe brain is typically more sensitive to rotational motion than linear motion because it has shear properties similar to water or gel. When different parts of the brain move relative to each other because of rotational motion, the tissues can stretch, which can cause concussions or other brain injuries. Rotational motion is a common cause of concussions and more severe brain injury in oblique hits to the head. \r\n\r\n\r\nThe Mips® safety system consists of a low friction layer mounted inside the helmet. In a crash, the low friction layer is designed to move slightly inside the helmet to help redirect forces away from the head. This is intended to help reduce the risk of brain injury.\r\n\r\n\r\nThe Mips Spherical system uses a unique ball and socket design to provide movement inside the helmet. When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. This sliding layer helps reduce the rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries.",
                            "name": "Spherical Mips®",
                            "id": 2334
                         }, {
                            "image": "Screenshot_2025-03-14_205352.jpg",
                            "description": "When a helmet is impacted at an angle, it can cause the head to rotate suddenly and violently. This is a common source of concussions and brain injury. The Mips® Integra Split system is designed to provide movement inside the helmet to help reduce rotational motion to the head in certain angled impacts, thereby lowering the risk of such injuries.\r\n\r\n\r\nThe Mips® Integra Split system is integrated into the energy-absorbing liner. By splitting the liner into three separate parts and adding a low-friction surface between the movable layers, the system can move, with the intention to help reduce rotational motion. The design of the Mips® Integra Split provides seamless integration, a comfortable fit, and allows for incorporated ventilation in helmets with ample EPS coverage.",
                            "name": "Mips® Integra Split",
                            "id": 2335
                         }, {
                            "image": "Screenshot_2025-04-04_125145.jpg",
                            "description": "A helmet eject system allows for the inflation of an air bladder either pre-installed in a helmet or inserted by an EMS professional at the scene of a crash. Inflating the bladder lifts the helmet off of the rider's head with reduced neck movement - thereby reducing the likelihood of further injury from helmet removal. ",
                            "name": "Eject System",
                            "id": 2337
                         }]);
                      });
                      if (typeof (affirm) === 'undefined') {
                         var _affirm_config = {
                            public_api_key: "LV2522QG9NXCFS23",
                            script: "https://cdn1.affirm.com/js/v2/affirm.js"
                         };
                         (function (l, g, m, e, a, f, b) {
                            var d, c = l[m] || {},
                               h = document.createElement(f),
                               n = document.getElementsByTagName(f)[0],
                               k =
                               function (a, b, c) {
                                  return function () {
                                     a[b]._.push([c, arguments])
                                  }
                               };
                            c[e] = k(c, e, "set");
                            d = c[e];
                            c[a] = {};
                            c[a]._ = [];
                            d._ = [];
                            c[a][b] = k(c, a, b);
                            a = 0;
                            for (b = "set add save post open empty reset on off trigger ready setProduct".split(
                                  " "); a < b.length; a++) d[b[a]] = k(c, e, b[a]);
                            a = 0;
                            for (b = ["get", "token", "url", "items"]; a < b.length; a++) d[b[a]] =
                               function () {};
                            h.async = !0;
                            h.src = g[f];
                            n.parentNode.insertBefore(h, n);
                            delete g[f];
                            d(g);
                            l[m] = c
                         })(window, _affirm_config, "affirm", "checkout", "ui", "script", "ready");
                      }

                      window["turnToConfig"] = {
                         locale: "en_US",
                         pageId: "pdp-page",
                         sku: "1100726",
                         reviewsTruncateLineLength: 500,
                         gallery: {
                            skus: ["1100726"]
                         },
                         eventHandlers: {
                            onReviewSubmit: function () {

                               $(document).trigger("turnTo.reviewSubmit");
                               var MILLISECONDS_BEFORE_RELOAD = 3000;

                               var loginButton = document.querySelector('[data-js="TurnTo.loginButton"]');
                               if (loginButton != null) {
                                  setTimeout(function () {
                                     window.location.reload();
                                  }, MILLISECONDS_BEFORE_RELOAD);
                               }

                            }
                         },
                         sso: {
                            userDataFn: function (contextObj) {
                               $.get("/auth/turnto-token", function (response) {
                                  TurnToCmd('ssoRegDone', {
                                     context: contextObj,
                                     userDataToken: response
                                  });
                               });
                            },
                            loggedInDataFn: function (contextObj) {
                               if (window.user.authed) {
                                  $.get("/auth/turnto-token", function (response) {
                                     TurnToCmd('loggedInDataFnDone', {
                                        context: contextObj,
                                        loggedInData: response
                                     });
                                  });

                                  var xhr = new XMLHttpRequest();
                                  var ugcCountsUrl =
                                     "https://cdn-ws.turnto.com/v5/sitedata/JlwvU6H5qZNF3NTsite/1100726/d/ugc/counts/en_US";
                                  xhr.open('GET', ugcCountsUrl, true);
                                  xhr.addEventListener('load', function () {
                                     if (xhr.responseText) {
                                        var data = JSON.parse(xhr.responseText);

                                        $('[data-js="questions-count"]').html(data.questions);
                                        $('[data-js="answers-count"]').html(data.answers);
                                        $('[data-js="reviews-count"]').html(data.reviews);
                                     }
                                  });
                                  xhr.send();
                               } else {
                                  window.lightbox.openHref(
                                     '/auth/identity?state=2f6d6f746f726379636c652f617261692d726567656e742d782d68656c6d65743f7475726e746f',
                                     'authentication-form-modal');
                               }
                            }
                         }
                      };
                      window.TurnToCmd = window.TurnToCmd || function () {
                         (TurnToCmd.q = TurnToCmd.q || []).push(arguments)
                      };

                      if (!!window.location.search.match(/(&|\?)turnto=/)) {
                         window.onload = function () {
                            $('[data-js="ReviewInterface.writeLink"]').click();
                         }
                      }
                      req("web/static/js/redline/templates/product/show/review_interface").then(({
                         ReviewInterface
                      }) => {
                         new ReviewInterface(
                            "https://widgets.turnto.com/v5/widgets/JlwvU6H5qZNF3NTsite/js/turnto.js"
                         );
                      });



                   })
                })(this)
            </script>

            {{-- Custom Js Code --}}

           <script>
            document.addEventListener('DOMContentLoaded', function () {
                const headers = document.querySelectorAll('[data-js="Tab.header"]');
                const contents = document.querySelectorAll('[data-js="Tab.content"]');

                headers.forEach(header => {
                    header.addEventListener('click', () => {
                        const tabId = header.dataset.tabId;

                        // Remove active classes
                        headers.forEach(h => h.classList.remove('tab-header--active'));
                        contents.forEach(c => c.classList.remove('tab-content--active'));

                        // Activate clicked header and its content
                        header.classList.add('tab-header--active');
                        document.querySelector(`[data-js="Tab.content"][data-tab-id="${tabId}"]`)
                            .classList.add('tab-content--active');
                    });
                });
            });
            </script>

            {{-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Main image element
                const mainImg = document.querySelector('[data-js="Gallery.activeImage"]');

                // All thumbnails
                const thumbnails = document.querySelectorAll('.product-show-media-image__thumbnail-image');

                thumbnails.forEach(function (thumb) {
                    thumb.addEventListener('click', function () {
                        // Get the full image URL from data-src
                        const newSrc = thumb.getAttribute('data-src');
                        if (newSrc) {
                            mainImg.src = newSrc;
                            mainImg.setAttribute('data-src', newSrc);

                            // Remove active state from other thumbs
                            thumbnails.forEach(t => t.parentElement.removeAttribute('aria-selected'));
                            // Highlight current thumbnail
                            thumb.parentElement.setAttribute('aria-selected', 'true');
                        }
                    });
                });

                // === Simple zoom effect on hover ===
                const zoomContainer = mainImg.closest('.hover-zoom__image-wrapper');

                zoomContainer.addEventListener('mousemove', function (e) {
                    const rect = zoomContainer.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;
                    mainImg.style.transformOrigin = `${x}% ${y}%`;
                    mainImg.style.transform = 'scale(2)';
                });

                zoomContainer.addEventListener('mouseleave', function () {
                    mainImg.style.transformOrigin = 'center center';
                    mainImg.style.transform = 'scale(1)';
                });
            });
            </script> --}}
<!-- jQuery (required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Elevate Zoom Plus -->
<script src="https://cdn.jsdelivr.net/npm/elevatezoom-plus@1.1.21/jquery.ez-plus.min.js"></script>

            <script>
document.addEventListener("DOMContentLoaded", function () {
    const mainImg = document.querySelector('[data-js="Gallery.activeImage"]');
    const thumbnails = document.querySelectorAll('.product-show-media-image__thumbnail-image');
    const zoomContainer = mainImg.closest('.hover-zoom__image-wrapper');

    // ===== Thumbnail switching =====
    thumbnails.forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            const newSrc = thumb.getAttribute('data-src');
            if (newSrc) {
                mainImg.src = newSrc;
                mainImg.setAttribute('data-src', newSrc);
                thumbnails.forEach(t => t.parentElement.removeAttribute('aria-selected'));
                thumb.parentElement.setAttribute('aria-selected', 'true');
            }
        });
    });

    // ===== Smooth zoom tracking =====
    let targetX = 50, targetY = 50;   // Desired position
    let currentX = 50, currentY = 50; // Animated position
    let scale = 2.2;                   // Zoom level
    let animFrame;

    function animate() {
        // Ease the movement for smoothness
        currentX += (targetX - currentX) * 0.15;
        currentY += (targetY - currentY) * 0.15;
        mainImg.style.transformOrigin = `${currentX}% ${currentY}%`;
        animFrame = requestAnimationFrame(animate);
    }

    zoomContainer.addEventListener('mouseenter', () => {
        cancelAnimationFrame(animFrame);
        mainImg.style.transform = `scale(${scale})`;
        animate();
    });

    zoomContainer.addEventListener('mousemove', e => {
        const rect = zoomContainer.getBoundingClientRect();
        targetX = ((e.clientX - rect.left) / rect.width) * 100;
        targetY = ((e.clientY - rect.top) / rect.height) * 100;
    });

    zoomContainer.addEventListener('mouseleave', () => {
        cancelAnimationFrame(animFrame);
        mainImg.style.transformOrigin = 'center center';
        mainImg.style.transform = 'scale(1)';
    });
});
</script>




@endsection

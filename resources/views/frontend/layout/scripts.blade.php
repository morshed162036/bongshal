   <script type="136ba6a1ac3be6cd75fee6c3-text/javascript">
      (function (d, s, id, c) {
         var js, rC = [],
            uRC = [],
            r = 0;
         Array.from(document.querySelectorAll('[class*="stjr-"]')).forEach(r => {
            rC = [...rC, ...Array.from(r.classList).filter((cl) => {
               return /^stjr-/.test(cl);
            })]
         });
         uRC = [...new Set(rC)];
         t = d.getElementsByTagName(s)[0];
         js = d.createElement(s);
         js.id = id;
         js.src = 'https://www.sitejabber.com/js/v2/63974cbaeb757/widgets.js' + (uRC.length ? '?widget-classes=' +
            uRC.join("|") : '?widget-classes=stjr-base') + '';
         js.onload = js.onreadystatechange = function () {
            if (!r && (!this.readyState || this.readyState[0] == 'c')) {
               r = 1;
               c();
            }
         };
         t.parentNode.insertBefore(js, t);
      }(document, 'script', 'sj-widget', function () {}));
   </script>
   <input name="_csrf_token" type="hidden" value="Wwx_ThknTlgIPUEmYGdTJTZ4CGErPi5SmU78lQymDHro1V5rQ0o5QKYb">
   <script src="https://www.revzilla.com/js/redline/app_init-9efb0ef6ddace5b9c92a3f07142ecc50.js?vsn=d"
      type="136ba6a1ac3be6cd75fee6c3-text/javascript"></script>
   <script src="https://www.revzilla.com/js/redline/app_vendor-e3849de6c18b0a77aa488b806e124a45.js?vsn=d"
      type="136ba6a1ac3be6cd75fee6c3-text/javascript"></script>
   <script src="https://www.revzilla.com/js/sites/revzilla/app-02ac847d9d69f8ab884b2a86821a4dec.js?vsn=d"
      type="136ba6a1ac3be6cd75fee6c3-text/javascript"></script>
   <script type="136ba6a1ac3be6cd75fee6c3-text/javascript">
      require("web/static/js/sites/revzilla/app").then(({
         App
      }) => App.init({
         "youtube_host": "https://www.youtube.com",
         "registered_scripts": "/js/redline/app_init-9efb0ef6ddace5b9c92a3f07142ecc50.js?vsn=d,/js/redline/app_vendor-e3849de6c18b0a77aa488b806e124a45.js?vsn=d,/js/sites/revzilla/app-02ac847d9d69f8ab884b2a86821a4dec.js?vsn=d",
         "csrf_needs_refresh": false,
         "csrf": "Wwx_ThknTlgIPUEmYGdTJTZ4CGErPi5SmU78lQymDHro1V5rQ0o5QKYb",
         "request_id": null,
         "server_version": "0.0.1+bab6948a5d6"
      }));
   </script>
   <script type="136ba6a1ac3be6cd75fee6c3-text/javascript">
      (function (w, r) {
         var q = w.__rq;
         w.__rq = {
            push: function (f) {
               f.call(w, r)
            }
         };
         for (var i = 0; i < q.length; i++) {
            w.__rq.push(q[i])
         }
      }(this, require))
   </script>
   <script type="136ba6a1ac3be6cd75fee6c3-text/javascript">
      (function () {
         function riskifiedBeaconLoad() {
            var store_domain = 'revzilla.com';
            var session_id = '5add501e-d4c2-46aa-a5c9-2fa30aac6f24';
            var url = ('https:' == document.location.protocol ? 'https://' : 'http://') +
               "beacon.riskified.com?shop=" + store_domain + "&sid=" + session_id;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
         }
         if (window.attachEvent)
            window.attachEvent('onload', riskifiedBeaconLoad)
         else
            window.addEventListener('load', riskifiedBeaconLoad, false);
      })();
   </script>
   <script async class="optanon-category-C0003" data-cfasync="false" type="text/plain"> var sailthruScript = document.createElement('script');
                  sailthruScript.src = 'https://ak.sail-horizon.com/spm/spm.v1.min.js';
                  document.head.appendChild(sailthruScript);
                  var sailthruScriptTime = 0;
                  var sailthruScriptLoad = setInterval(function(){
                    sailthruScriptTime += 200;
                    if (typeof(Sailthru) !== 'undefined') {
                      clearInterval(sailthruScriptLoad);
                      Sailthru.init({customerId: '42c76820aabdfbff194069b09b7bb888' });
                    } else if (sailthruScriptTime > 5000) {
                      clearInterval(sailthruScriptLoad);
                    }
                  }, 200);
               </script>
   <script type="text/plain" src="js/custom.js"></script>

   <script src="https://www.revzilla.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
      data-cf-settings="136ba6a1ac3be6cd75fee6c3-|49" defer></script>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
         const sliderContainer = document.getElementById('autoSlider');
         if (!sliderContainer) return; // Exit if slider container not found

         const sliderItems = sliderContainer.querySelectorAll('.slider-item');
         let currentIndex = 0;
         const slideInterval = 5000;

         // Function to lazy load images
         const lazyLoadImage = (imgElement) => {
            if (imgElement.dataset.src && !imgElement.src) {
               imgElement.src = imgElement.dataset.src;
               imgElement.removeAttribute('data-src');
            }
         };

         // Function to show a specific slide
         const showSlide = (index) => {
            sliderItems.forEach(item => {
               item.classList.remove('active');
               item.style.position = 'absolute';
            });

            const currentSlide = sliderItems[index];
            currentSlide.classList.add('active');
            currentSlide.style.position = 'relative';
            const imgToLoad = currentSlide.querySelector('.lazy-slider-image');
            if (imgToLoad) {
               lazyLoadImage(imgToLoad);
            }
         };

         showSlide(currentIndex);

         setInterval(() => {
            currentIndex = (currentIndex + 1) % sliderItems.length;
            showSlide(currentIndex);
         }, slideInterval);

         if ('IntersectionObserver' in window) {
            const sliderImageObserver = new IntersectionObserver((entries, observer) => {
               entries.forEach(entry => {
                  if (entry.isIntersecting) {
                     const imgElement = entry.target;
                     lazyLoadImage(imgElement);
                     observer.unobserve(imgElement);
                  }
               });
            }, {
               rootMargin: '0px 0px 100px 0px'
            });

            sliderContainer.querySelectorAll('.lazy-slider-image').forEach(img => {
               sliderImageObserver.observe(img);
            });
         }
      });
   </script>
   {{-- <script>
      document.addEventListener('DOMContentLoaded', () => {
         const sliderContainer = document.getElementById('autoSlider');
         if (!sliderContainer) return; // Exit if slider container not found

         const sliderItems = sliderContainer.querySelectorAll('.slider-item');
         let currentIndex = 0;
         const slideInterval = 5000;

         // Function to lazy load images
         const lazyLoadImage = (imgElement) => {
            if (imgElement.dataset.src && !imgElement.src) {
               imgElement.src = imgElement.dataset.src;
               imgElement.removeAttribute('data-src');
            }
         };

         // Function to show a specific slide
         const showSlide = (index) => {
            sliderItems.forEach(item => {
               item.classList.remove('active');
               item.style.position = 'absolute';
            });

            const currentSlide = sliderItems[index];
            currentSlide.classList.add('active');
            currentSlide.style.position = 'relative';
            const imgToLoad = currentSlide.querySelector('.lazy-slider-image');
            if (imgToLoad) {
               lazyLoadImage(imgToLoad);
            }
         };

         showSlide(currentIndex);

         setInterval(() => {
            currentIndex = (currentIndex + 1) % sliderItems.length;
            showSlide(currentIndex);
         }, slideInterval);

         if ('IntersectionObserver' in window) {
            const sliderImageObserver = new IntersectionObserver((entries, observer) => {
               entries.forEach(entry => {
                  if (entry.isIntersecting) {
                     const imgElement = entry.target;
                     lazyLoadImage(imgElement);
                     observer.unobserve(imgElement);
                  }
               });
            }, {
               rootMargin: '0px 0px 100px 0px'
            });

            sliderContainer.querySelectorAll('.lazy-slider-image').forEach(img => {
               sliderImageObserver.observe(img);
            });
         }
      });
   </script> --}}
   <script>
      const canvas = document.getElementById("wheelCanvas");
      const ctx = canvas.getContext("2d");
      const spinBtn = document.getElementById("spinBtn");
      const resultText = document.getElementById("result");

      const segments = [
         "20% OFF",
         "50% OFF",
         "Try Again",
         "Free Gift",
         "30% OFF",
         "5% OFF",
         "No Luck",
         "10% OFF",
      ];

      const segmentCount = segments.length;
      const segmentAngle = 360 / segmentCount;
      const radius = canvas.width / 2;
      const colors = ["#c9000aff", "#f68f3bff"];

      let rotationDeg = 0;
      let hasSpun = false;

      function drawWheel(angleOffset = 0) {
         ctx.clearRect(0, 0, canvas.width, canvas.height);
         for (let i = 0; i < segmentCount; i++) {
            const startAngle = ((i * segmentAngle + angleOffset) * Math.PI) / 180;
            const endAngle =
               (((i + 1) * segmentAngle + angleOffset) * Math.PI) / 180;

            ctx.beginPath();
            ctx.moveTo(radius, radius);
            ctx.arc(radius, radius, radius, startAngle, endAngle);
            ctx.fillStyle = colors[i % colors.length];
            ctx.fill();
            ctx.stroke();

            // Text
            const textAngle = (startAngle + endAngle) / 2;
            ctx.save();
            ctx.translate(radius, radius);
            ctx.rotate(textAngle);
            ctx.textAlign = "right";
            ctx.fillStyle = "#fff";
            ctx.font = "bold 14px sans-serif";
            ctx.fillText(segments[i], radius - 10, 5);
            ctx.restore();
         }
      }

      drawWheel();

      spinBtn.addEventListener("click", () => {
         if (hasSpun) {
            alert("You have already spun the wheel!");
            return;
         }

         hasSpun = true;

         const randomExtra = Math.floor(Math.random() * 360);
         const totalRotation = 360 * 5 + randomExtra;

         let current = 0;
         const interval = setInterval(() => {
            drawWheel(current);
            current += 10;
            if (current >= totalRotation) {
               clearInterval(interval);
               const finalDeg = totalRotation % 360;
               drawWheel(finalDeg);

               const adjustedAngle = (360 - finalDeg + 270) % 360;
               const index =
                  Math.floor(adjustedAngle / segmentAngle) % segmentCount;

               const winner = segments[index];
               resultText.innerHTML = `🎉 You got: <strong>${winner}</strong>`;
            }
         }, 10);
      });
   </script>
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Modal Containers
        const shopRideModal = document.getElementById("shop-your-ride-modal");
        const loginModal = document.getElementById("login-modal");

        // All elements that open the "Shop Your Ride" modal
        const showRideBtn = document.getElementById("show-modal-button");

        // All elements that open the "Login" modal (using a common class)
        const openLoginBtns = document.querySelectorAll(".open-login-modal-btn");

        // Modal Close Buttons
        const closeButtons = document.querySelectorAll(".reveal-header__close");

        // Function to open the Login modal
        function openLoginModal() {
            if (loginModal) {
                loginModal.style.display = "block";
            }
        }

        // Function to open the "Shop Your Ride" modal
        function openShopRideModal() {
            if (shopRideModal) {
                shopRideModal.style.display = "block";
            }
        }

        // Function to close all modals
        function closeAllModals() {
            if (shopRideModal) {
                shopRideModal.style.display = "none";
            }
            if (loginModal) {
                loginModal.style.display = "none";
            }
        }

        // Add event listener to the "Shop Your Ride" button
        if (showRideBtn) {
            showRideBtn.addEventListener("click", (e) => {
                e.preventDefault();
                closeAllModals(); // Close any open modal first
                openShopRideModal();
            });
        }

        // Add event listener to ALL buttons that should open the Login modal
        if (openLoginBtns.length > 0) {
            openLoginBtns.forEach(button => {
                button.addEventListener("click", (e) => {
                    e.preventDefault();
                    closeAllModals(); // Close any other open modal
                    openLoginModal(); // Open the login modal
                });
            });
        }

        // Add event listener to ALL close buttons
        if (closeButtons.length > 0) {
            closeButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    closeAllModals();
                });
            });
        }
    });
</script>
<script>
//hedaer slider script
document.addEventListener('DOMContentLoaded', () => {
    const messages = document.querySelectorAll('.js-MarketingBanner-message');
    const prevButton = document.querySelector('.js-MarketingBanner-prevButton');
    const nextButton = document.querySelector('.js-MarketingBanner-nextButton');
    let currentIndex = 0;
    const slideInterval = 5000;
    function showMessage(index) {
        messages.forEach(message => {
            message.style.display = 'none';
        });
        messages[index].style.display = 'block';
    }
    function nextMessage() {
        currentIndex = (currentIndex + 1) % messages.length;
        showMessage(currentIndex);
    }
    function prevMessage() {
        currentIndex = (currentIndex - 1 + messages.length) % messages.length;
        showMessage(currentIndex);
    }

    let sliderTimer = setInterval(nextMessage, slideInterval);

    function resetTimer() {
        clearInterval(sliderTimer);
        sliderTimer = setInterval(nextMessage, slideInterval);
    }

    nextButton.addEventListener('click', () => {
        nextMessage();
        resetTimer();
    });
    prevButton.addEventListener('click', () => {
        prevMessage();
        resetTimer();
    });
    showMessage(currentIndex);
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const scrollWrapper = document.querySelector('.top-brands__scroll-wrapper');
    const brandLinks = document.querySelectorAll('.top-brands__brand-link');

    if (!scrollWrapper || brandLinks.length === 0) {
        console.error('Slider elements not found.');
        return;
    }

    const slideWidth = brandLinks[0].offsetWidth;
    let currentIndex = 0;

    function autoSlide() {
        currentIndex = (currentIndex + 1) % brandLinks.length;
        const newScrollPosition = brandLinks[currentIndex].offsetLeft;

        scrollWrapper.scrollTo({
            left: newScrollPosition,
            behavior: 'smooth'
        });
    }

    // Set an interval to trigger the auto-sliding every 3 seconds
    setInterval(autoSlide, 3000);
});
</script>

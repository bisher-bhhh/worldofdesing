<footer id="footer" class="mt-0">
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p><strong>world of designs</strong> - © Copyright 2024. All Rights Reserved </p>| Powered by
                    <a href="https://bichrbraighle.worldofdesigns.ca/" style="color: #f6941c">  &nbsp;BH</a>
                </div>
            </div>
        </div>
    </div>
</footer>








<!-- Vendor -->
<script src="<?php echo e(asset('assets/frontend/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.appear/jquery.appear.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.cookie/jquery.cookie.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/frontend/vendor/jquery.validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/lazysizes/lazysizes.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/isotope/jquery.isotope.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/vide/jquery.vide.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/vivus/vivus.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js')); ?>"></script>
<!-- Theme Base, Components and Settings -->
<script src="<?php echo e(asset('assets/frontend/js/theme.js')); ?>"></script>

<script src="<?php echo e(asset('assets/frontend/js/views/view.contact.js')); ?>"></script>

<!-- Theme Custom -->
<script src="<?php echo e(asset('assets/frontend/js/custom.js')); ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo e(asset('assets/frontend/js/theme.init.js')); ?>"></script>

<!-- Examples -->
<script src="<?php echo e(asset('assets/frontend/js/examples.portfolio.js')); ?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdyth2EiAjU9m9eE_obC5fnTY1yeVNTJU"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */
    var preloader = $('#preloader');
    $(window).on('load', function() {
        setTimeout(function() {
            preloader.fadeOut('slow', function() { $(this).remove(); });
        }, 200)
    });
    function initializeGoogleMaps() {
        // Map Markers
        var mapMarkers = [{
            address: "New York, NY 10017",
            html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 5
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{"color": "#dedede"}, {"lightness": 21}]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
        }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
        }];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
    }

    // Initialize Google Maps when element enter on browser view
    theme.fn.intObs('.google-map', 'initializeGoogleMaps()', {});

    // Map text-center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

</script>
<script>
    function loadPage(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Perform any necessary actions here before loading the page

        // Make an AJAX request to fetch the page content
        fetch("<?php echo e(route('frontend.projects_test')); ?>")
            .then(response => response.text())
            .then(data => {
                // Create a modal element
                const modal = document.createElement('div');
                modal.classList.add('modal');
                modal.innerHTML = data;

                // Append the modal to the document body
                document.body.appendChild(modal);

                // Show the modal using a modal library like Bootstrap
                // Example using Bootstrap modal:
                $(modal).modal('show');
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
<script>
    (function( $ ) {

        'use strict';
        $('.simple-ajax-popup').magnificPopup({
            type: 'ajax',
            callbacks: {
                open: function() {
                    $('html').addClass('lightbox-opened');
                },
                close: function() {
                    $('html').removeClass('lightbox-opened');
                }
            }
        });

        $(window).on('load',function(){
        $('.navbar-nav li > ul.sub-menu').parent().addClass('menu-item-has-children');
        /*-----------------------------
            preloader
        -----------------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
        /*-----------------------------
            back to top
        -----------------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);

    });
    }).apply( this, [ jQuery ]);
    (function( $ ) {

        'use strict';
        var preloader = $('#preloader');
    $(window).on('load', function() {
        setTimeout(function() {
            preloader.fadeOut('slow', function() { $(this).remove(); });
        }, 300)
    });
        /*
        * Custom See More Overlay
        */
        $('.custom-seemore-overlay-button').on('click', function(e){
            e.preventDefault();

            var $this    = $(this),
                $wrapper = $this.closest('.custom-seemore-overlay');

            $wrapper.addClass('active');

            setTimeout(function(){
                $this.closest('.custom-seemore-overlay').animate({
                    'max-height': $wrapper[0].scrollHeight
                }, function(){
                    $this.remove();
                    $wrapper.closest('.custom-seemore-overlay').css('max-height', 'none');
                });
            }, 200);
        });

    }).apply( this, [ jQuery ]);
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdyth2EiAjU9m9eE_obC5fnTY1yeVNTJU"></script>
<script>
    // $(document).ready(function () {
    //     // Initialize Isotope
    //     var $grid = $('#project-list').isotope({
    //         itemSelector: '.isotope-item',
    //         layoutMode: 'fitRows'
    //     });
    //
    //     $('#load-more').click(function () {
    //         var nextPageUrl = $(this).data('next-page-url');
    //         if (nextPageUrl) {
    //             $.ajax({
    //                 url: nextPageUrl,
    //                 type: 'GET',
    //                 beforeSend: function() {
    //                     $('#load-more').text('Loading...');
    //                 },
    //                 success: function (data) {
    //                     // Parse the HTML data received from the server
    //                     var $newItems = $(data.html).find('.isotope-item');
    //
    //                     // Append the new items to the grid
    //                     $grid.append($newItems)
    //                         .isotope('appended', $newItems)
    //                         .isotope('layout');
    //
    //                     // Update the next page URL
    //                     $('#load-more').data('next-page-url', data.next_page_url);
    //                     $('#load-more').text('Load More');
    //
    //                     // Hide the load more button if there's no next page
    //                     if (!data.next_page_url) {
    //                         $('#load-more').hide();
    //                     }
    //                 },
    //                 error: function () {
    //                     $('#load-more').text('Load More');
    //                 }
    //             });
    //         }
    //     });
    // });
    // $(document).ready(function () {
    //     $('#load-more').click(function () {
    //         var nextPageUrl = $(this).data('next-page-url');
    //         if (nextPageUrl) {
    //             $.ajax({
    //                 url: nextPageUrl,
    //                 type: 'GET',
    //                 beforeSend: function() {
    //                     $('#load-more').text('Loading...');
    //                 },
    //                 success: function (data) {
    //                     $('#project-list').append(data.html);
    //                     $('#load-more').data('next-page-url', data.next_page_url);
    //                     $('#load-more').text('Load More');
    //                     if (!data.next_page_url) {
    //                         $('#load-more').hide();
    //                     }
    //                     // Reinitialize any layout scripts if needed
    //                     $('#project-list').isotope('reloadItems').isotope();
    //                 },
    //                 error: function () {
    //                     $('#load-more').text('Load More');
    //                 }
    //             });
    //         }
    //     });
    // });

    // document.addEventListener('DOMContentLoaded', function () {
    //     let loadMoreBtn = document.getElementById('portfolioLoadMore');
    //     let loadMoreWrapper = document.getElementById('portfolioLoadMoreWrapper');
    //     let iso;
    //
    //     // Initialize Isotope
    //     if (loadMoreWrapper) {
    //         iso = new Isotope(loadMoreWrapper, {
    //             itemSelector: '.isotope-item',
    //             layoutMode: 'fitRows'
    //         });
    //     }
    //
    //     loadMoreBtn.addEventListener('click', function () {
    //         let nextPageUrl = loadMoreBtn.getAttribute('data-next-page-url');
    //
    //         if (nextPageUrl) {
    //             fetch(nextPageUrl, {
    //                 headers: {
    //                     'X-Requested-With': 'XMLHttpRequest'
    //                 }
    //             })
    //                 .then(response => response.json())
    //                 .then(data => {
    //                     if (data.html) {
    //                         // Create a temporary DOM element to hold the response
    //                         let tempDiv = document.createElement('div');
    //                         tempDiv.innerHTML = data.html;
    //                         let elements = tempDiv.querySelectorAll('.isotope-item');
    //
    //                         // Append elements to Isotope instance and then add them to the grid
    //                         loadMoreWrapper.append(...elements);
    //                         iso.appended(elements); // Notify Isotope that new items have been added
    //
    //                         // Update the URL for the next set of items
    //                         loadMoreBtn.setAttribute('data-next-page-url', data.next_page_url);
    //                         if (!data.next_page_url) {
    //                             loadMoreBtn.style.display = 'none';
    //                         }
    //
    //                         // Lay out all item elements
    //                         iso.layout();
    //                     }
    //                 })
    //                 .catch(error => console.error('Error:', error));
    //         }
    //     });
    // });
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\testbasel\testbasel\pr\resources\views/frontend/footer.blade.php ENDPATH**/ ?>
    $.fn.kdMap = function(options) {
    this.options = options;
    this.markers = [];
    this.infowindows = [];
    _this = this;

    this.initMap = function(){
        var mapOptions = {
              center: { lat: -34.397, lng: 150.644},
	      this.options.mapMiddle,
              zoom:8 
	      this.options.initialZoom,
              maxZoom: this.options.maxZoom,
              minZoom: this.options.minZoom,
              scrollwheel: false,
              draggable: !("ontouchend" in document),
              navigationControl: false,
              mapTypeControl: false,
              streetViewControl: false,
              disableDefaultUI: true,
              keyboardShortcuts: false,
              overviewMapControl: false,
              panControl: true,
              scaleControl: false,
              zoomControl: true,
              zoomControlOptions: {
              style: google.maps.ZoomControlStyle.LARGE,
              position: google.maps.ControlPosition.LEFT_CENTER,
	      $("#map-wrapper button").addclass('aaaaa');		
            }
        }

        _this.map = new google.maps.Map(this.get(0), mapOptions);

        google.maps.event.addListener(this.map, 'click', function(){
            _this.closeModal();
        });
        google.maps.event.addListener(this.map, 'rightclick', function(){
            _this.closeModal();
        });
    }

    this.addMarkerVisibilityControlEvent = function(){
        google.maps.event.addListener(_this.map, 'zoom_changed', function() {
            var zoom = _this.map.getZoom();
            for (i = 0; i < _this.markers.length; i++) {
                if (zoom >= 5) {
                    _this.markers[i].setVisible(_this.markers[i].type == 'minor');
                } else {
                    _this.markers[i].setVisible(_this.markers[i].type == 'major');
                }
            }
        });
    }

    this.closeModal = function(){
        this.options.modalWrapper.hide();
    }

    this.centerMap = function(){
        var center = new google.maps.LatLng(this.options.mapMiddle);
        _this.map.panTo(center);
        _this.map.setZoom(4);
    }

    $.get(this.options.ajaxUrl, this.options.ajaxCallback, 'json');
    this.initMap();
    this.map = _this.map;
    this.addMarkerVisibilityControlEvent();

    return this;
}

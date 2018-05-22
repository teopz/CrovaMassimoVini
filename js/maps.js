function myMap() {
    var lat=45.0767045;
    var lon=8.3565623;
    var zoom=15;
    map = new OpenLayers.Map ("map", {
        controls:[
		   new OpenLayers.Control.Navigation(),
           new OpenLayers.Control.PanZoomBar(),
           new OpenLayers.Control.ScaleLine(),
           new OpenLayers.Control.Permalink('permalink'),
           new OpenLayers.Control.MousePosition(),
           new OpenLayers.Control.Attribution()
        ],
        projection: new OpenLayers.Projection("EPSG:900913"),
        displayProjection: new OpenLayers.Projection("EPSG:4326")
        } );

		var mapnik = new OpenLayers.Layer.OSM("OpenStreetMap (Mapnik)");

		map.addLayer(mapnik);

        var lonLat = new OpenLayers.LonLat( lon ,lat )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );

        var markers = new OpenLayers.Layer.Markers( "Markers" );
        map.addLayer(markers);
        markers.addMarker(new OpenLayers.Marker(lonLat));

		map.setCenter (lonLat, zoom);
}

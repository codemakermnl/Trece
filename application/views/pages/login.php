<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Points on a map</title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <style>
      body { 
        margin: 0; 
        padding: 0; 
      }
      #map { 
        position: absolute; 
        top: 0; 
        bottom: 0; 
        width: 100%; 
      }
    </style>
  </head>
  <body>
    <div id='map'></div>
     <script>
    // The value for 'accessToken' begins with 'pk...'
    mapboxgl.accessToken = 'pk.eyJ1Ijoid2luc3Rvbm1jZ2VlIiwiYSI6ImNrdGZsaGFzbDA5ZTkydm9pb3hpcTltN2UifQ.iaFejEop2PfzE1vqtNYyQA'; 
    const map = new mapboxgl.Map({
      container: 'map',
      // Replace YOUR_STYLE_URL with your style URL.
      style: 'mapbox://styles/winstonmcgee/ckxs09ej0ib6x15t9yw4un9of', 
      center: [-87.661557, 41.893748],
      zoom: 10.7
    });

    // Code from the next step will go here.


    /* 
    Add an event listener that runs
      when a user clicks on the map element.
    */
    map.on('click', (event) => {
      // If the user clicked on one of your markers, get its information.
      const features = map.queryRenderedFeatures(event.point, {
        layers: ['chicago-parks'] // replace with your layer name
      });
      if (!features.length) {
        return;
      }
    const feature = features[0];

    const popup = new mapboxgl.Popup({ offset: [0, -15] })
                    .setLngLat(feature.geometry.coordinates)
                    .setHTML(
                      `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
                    )
                    .addTo(map);
    });
    </script> 
  </body>
</html>

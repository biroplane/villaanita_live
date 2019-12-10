const loadGoogleMApsApi = require('load-google-maps-api');

class Map {
  static loadGoogleMApsApi() {
    return loadGoogleMApsApi({
      key: process.env.GOOGLE_MAPS_API_KEY
    })
  }
  static createMap(googleMaps, mapElement, options) {
    return new googleMaps.Map(mapElement, options)
  }
}


export {
  Map
};
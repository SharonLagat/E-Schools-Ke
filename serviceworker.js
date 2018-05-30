"use strict";

var ekCacheName = 'ekCacheV1';
var ekCacheImagesName = 'ekCacheImagesV1';
var ekCachePagesName = 'ekCachePagesV1';

var ekCacheFiles = [
  'js/student.js', 
  'php/index.php',
  'php/student's-site.php',
  'php/school-buzz.php',
  'php/contacts.php',
  'favicon.ico',
  './',

];

var latestPath = '/E-Schools%20Ke/student's-site.php';
var imagePath = '/E-Schools%20Ke/school-buzz.php';
var carPath = '/E-Schools%20Ke/contact-us.php';

//Installing
//Pre-cache App Shell
self.addEventListener('install', function(event) {
  console.log("From SW: Install Event");
  self.skipWaiting();
  event.waitUntil(
    caches.open(ekCacheName)
    .then(function(cache){
      return cache.addAll(ekCacheFiles)
    })
  );
});
//V2
//Activating
//Clean up
self.addEventListener('activate', function(event) {
  console.log("From SW: Activate Event");
  self.clients.claim();
  event.waitUntil(
    caches.keys()
      .then(function(cacheKeys){
        var deletePromises = [];
        for(var i = 0; i < cacheKeys.length; i++){
          if(cacheKeys[i] != ekCacheName &&
             cacheKeys[i] != ekCacheImagesName &&
             cacheKeys[i] != ekCachePagesName){
            deletePromises.push(caches.delete(cacheKeys[i]));
          }
        }
        return Promise.all(deletePromises);
      })
  );
});

//Event Listeners Once Activated
self.addEventListener('fetch', function(event) {
  var requestUrl = new URL(event.request.url);
  var requestPath = requestUrl.pathname;
  var fileName = requestPath.substring(requestPath.lastIndexOf('/')+1);

  if(requestPath == latestPath || fileName == "sw.js"){
    //Network Only Strategy
    event.respondWith(fetch(event.request));
  }else if(requestPath == imagePath){
    //Network First then Offline Strategy
    event.respondWith(networkFirstStrategy(event.request));
  }else{
    //Offline First then Network Strategy
    event.respondWith(cacheFirstStrategy(event.request));
  }
});

//Caching Strategies
function cacheFirstStrategy(request){
  return caches.match(request).then(function(cacheResponse){
    return cacheResponse || fetchRequestAndCache(request);
  });
}

function networkFirstStrategy(request){
  return fetchRequestAndCache(request).catch(function(response){
    return caches.match(request);
  })
}

//Fetch Request And Cache
function fetchRequestAndCache(request){
    return fetch(request).then(function(networkResponse){
      caches.open(getCacheName(request)).then(function(cache) {
        cache.put(request, networkResponse);
      })
      return networkResponse.clone();
    });
}

function getCacheName(request){
  var requestUrl = new URL(request.url);
  var requestPath = requestUrl.pathname;
    
  if(requestPath == imagePath){
    return ekCacheImagesName;
  }else if(requestPath == carPath){
    return ekCachePagesName;
  }else{
    return ekCacheName;
  }
}

/*self.addEventListener('message', function(event) {
  var sourceID = event.source ? event.source.id : 'unknown';
  event.waitUntil(
    event.source.postMessage({
        sourceID: sourceID,
        message: 'sw:' + event.data
      })
  );
});*/
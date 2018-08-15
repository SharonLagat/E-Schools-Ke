importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.4.1/workbox-sw.js');

if (workbox) {
  console.log(`Yay! Workbox is loaded 🎉`);
} else {
  console.log(`Boo! Workbox didn't load 😬`);
}
const version = "0.6.11";
const cacheName = `eschoolske-${version}`;
self.addEventListener('install', e => {
  const timeStamp = Date.now();
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        `/`,
        `/index.php`,
        `/favicon.ico`,
        `/tutor.php`,
        `/sidebar.php`,
        `/page.php`,
        `/header.php`,
        `/footer.php`,
        `/contact-us.php`,
        `/events.php`,
        `/manifest.json`,
        `/events.php`,
        `/composer.lock`,
        `/composer.json`,
        `/.htaccess`
        `/css/images/bg1.png`,
        `/css/images/banner.jpg`,
        `/css/images/button.svg`,
        `/css/images/button-hover.svg`,
        `/css/images/header.svg`,
        `/css/images/header-wrapper.svg`,
        `/css/images/icon-bubble.png`,
        `/css/images/mobileUI-site-nav-opener-bg.svg`,
        `/css/images/nav-a.svg`,
        `/css/images/nav-a-hover.svg`,
        `/css/images/slfavicon.ico`,
        `/images/students.jpg`,
        `/css/style.css`,
        `/css/style-desktop.css`,
        `/css/style-1000px.css`,
        `/css/skel-noscript.css`,
        `/css/ie9.css`,
        `/css/search-icon.png`,
		`/js/jquery.min.js`,
        `/js/config.js`,
        `/js/skel.min.js`,
        `/js/html5shiv.js`,
        `/js/skel-panels.min.js`
      ])
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName)
      .then(cache => cache.match(event.request, {ignoreSearch: true}))
      .then(response => {
      return response || fetch(event.request);
    })
  );

});
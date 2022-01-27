self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open('v1').then((cache) => {
      return cache.addAll([
        './index.php',
        './assets/css/bootstrap.min.css',
        './assets/js/bootstrap.min.js',
        './index.js',
        './assets/img/pattern.jpeg'
      ]);
    })
  );
});
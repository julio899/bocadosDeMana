if (navigator.serviceWorker) {
	navigator.serviceWorker.register('/sw.js');
	console.log('resource si se puede implementar el serviceWorker');
}

self.addEventListener('fetch', event => {
	// URl de recusos Usados
	console.log(event.request.url);
});

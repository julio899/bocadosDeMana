if (navigator.serviceWorker) {
	navigator.serviceWorker.register('/sw.js');
	console.log('resource si se puede implementar el serviceWorker');

/*	caches.has('static').then(()=>{
			// si no existe se crea el espacio de cache
			caches.open('static').then(cache => {
				cache.addAll([
					'/img/bg2.jpg'
				]);
			});

	});*/

}



self.addEventListener('install', event => {
	console.log('Instalando SW...');
	const installation = new Promise((resolve,reject)=>{
		setTimeout(()=>{
			console.log('instalaciones terminadas');
			self.skipWaiting();
			resolve();
		},1000);
	});
	event.waitUntil(installation);
});

self.addEventListener('activate', event => {
	// Borrar cache Vieja
	console.log('SW activo...');

});

self.addEventListener('fetch', event => {

	// URl de recusos Usados
	// console.log(event.request.url);
	// caches.open('static').then(cache => {
	// 	cache.match(event.request.url)
	// 		.then((r)=>{
	// 				console.log(r.ok,event.request.url);
	// 				if(!r.ok){
	// 					cache.add(event.request.url)
	// 				}
	// 			});
	// });
/*
	// ------
	let req = event.request;
	let url = event.request.url;
	
	let buffer = null;
	let existe = caches.open('static')
	.then(cache => {
		cache.match(url)
			.then((r)=>{
				return ( r === undefined ) ? false:true;
			})
			.then((respuesta)=>{
				if(!respuesta && url.indexOf('chrome-extension')!==0 && url.indexOf('inject.js')===-1 )
				{
					// si no esta en el cache que lo agregue
	 				cache.add(url);
				}

			});			
	});
		event.waitUntil(existe);			
	if ( url.indexOf('chrome-extension')!==0 && url.indexOf('inject.js')===-1 ) {
		return event.respondWith( caches.match(event.request) );	
	}
	
	*/
});

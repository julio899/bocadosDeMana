if (navigator.serviceWorker) {
	navigator.serviceWorker.register('/sw.js');
	console.log('resource si se puede implementar el serviceWorker');
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
	console.log(event.request.url);
	console.log('*** req');
});

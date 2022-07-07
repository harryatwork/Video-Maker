console.log(2);
var animation = bodymovin.loadAnimation({
	container: document.getElementById('anim'),
	renderer: 'svg',
	loop: true,
	autoplay: true,
	path: 'data.json'
	console.log(1);
});

window.addEventListener("load", function(event) {
    console.log("Tutte le risorse hanno terminato il caricamento!");
});
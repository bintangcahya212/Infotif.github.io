const tanggalTujuan = new Date('Mar 7, 2022 18:00:00').getTime();

const hitungMundur = setInterval(function(){

	const sekarang = new Date().getTime();
	const selisih = tanggalTujuan - sekarang;
	
	const hari = Math.floor(selisih/(1000 * 60 * 60 * 24));
	const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
	const menit = Math.floor(selisih % (1000 * 60 * 60 ) / (1000 * 60 ));
	const detik = Math.floor(selisih % (1000 * 60) / 1000 );
	
	const teks = document.getElementsById('teks');
	teks.innerHTML = hari + 'hari' + jam + 'jam' + menit + 'menit' + detik + 'detik';
	

}, 1000);


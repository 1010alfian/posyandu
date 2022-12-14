// Pesan Data Profile
const flash = $(".flash-data").data("flashdata");

if (flash) {
	Swal.fire("Profile", flash, "success");
}
// Layanan Ibu Hamil
const flashibu = $(".flash-dataibu").data("flashdata");

if (flashibu) {
	Swal.fire("Pemeriksaan Ibu Hamil", flashibu, "success");
}

// msg layanan lansia
const flashb = $(".flash-datab").data("flashdata");

if (flashb) {
	Swal.fire("Data Lansia", flashb, "success");
}

// msg layanan lansia
const flasha = $(".flash-dataa").data("flashdata");

if (flasha) {
	Swal.fire("Data Layanan Lansia", flasha, "success");
}

// Pesan Data Ibu
const flashq = $(".flash-dataq").data("flashdata");

if (flashq) {
	Swal.fire("Data Ibu", flashq, "success");
}

// Pesan Data Anak
const flashw = $(".flash-dataw").data("flashdata");

if (flashw) {
	Swal.fire("Data Anak", flashw, "success");
}

// Pesan Data Petugas
const flashe = $(".flash-datae").data("flashdata");

if (flashe) {
	Swal.fire("Data Petugas", flashe, "success");
}

// Pesan Penimbangan Anak
const flashp = $(".flash-datap").data("flashdata");

if (flashp) {
	Swal.fire("Penimbangan Anak", flashp, "success");
}

// Pesan Imunisasi Anak
const flashr = $(".flash-datar").data("flashdata");

if (flashr) {
	Swal.fire("Imunisasi Anak", flashr, "success");
}

// Pesan Data Bidan
const flashdan = $(".flash-datadan").data("flashdata");

if (flashdan) {
	Swal.fire("Data Bidan", flashdan, "success");
}

// Pesan Data Lansia
const flashx = $(".flash-datax").data("flashdata");

if (flashx) {
	Swal.fire("Data Lansia", flashx, "success");
}

// Tombol Konfirmasi Hapus Data
$(".tbl-hapus").on("click", function (a) {
	a.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data ini akan dihapus",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ok!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// Tombol Konfirmasi Log Out
$(".tbl-logout").on("click", function (a) {
	a.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apakah anda yakin ingin keluar?",
		text: "Keluar dari aplikasi posyandu",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Iya",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});



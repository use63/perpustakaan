const dashMain = document.querySelector(".dash-main");
const jumlahElemenAnak = dashMain.children.length;

for (let i = 1; i <= jumlahElemenAnak; i++) {
	const variabelNama = "dashDiv" + i;
	window[variabelNama] = dashMain.children[i - 1];
}

window.addEventListener("load", () => {
	dashDiv1.style.display = "block";
	navAdmin["beranda"].classList.add("nav-active");
});

navAdmin["beranda"].addEventListener("click", function (event) {
	navAdmin["beranda"].classList.add("nav-active");
	navAdmin["mbuku"].classList.remove("nav-active");
	navAdmin["manggota"].classList.remove("nav-active");
	navAdmin["laporan"].classList.remove("nav-active");
	dashDiv1.style.display = "block";
	dashDiv2.style.display = "none";
	dashDiv3.style.display = "none";
	dashDiv4.style.display = "none";
	if (window.innerWidth < 786) {
		navList.style.display = "none";
	}
});

navAdmin["mbuku"].addEventListener("click", function (event) {
	navAdmin["beranda"].classList.remove("nav-active");
	navAdmin["mbuku"].classList.add("nav-active");
	navAdmin["manggota"].classList.remove("nav-active");
	navAdmin["laporan"].classList.remove("nav-active");
	dashDiv1.style.display = "none";
	dashDiv2.style.display = "block";
	dashDiv3.style.display = "none";
	dashDiv4.style.display = "none";
	if (window.innerWidth < 786) {
		navList.style.display = "none";
	}
});

navAdmin["manggota"].addEventListener("click", function (event) {
	navAdmin["beranda"].classList.remove("nav-active");
	navAdmin["mbuku"].classList.remove("nav-active");
	navAdmin["manggota"].classList.add("nav-active");
	navAdmin["laporan"].classList.remove("nav-active");
	dashDiv1.style.display = "none";
	dashDiv2.style.display = "none";
	dashDiv3.style.display = "block";
	dashDiv4.style.display = "none";
	if (window.innerWidth < 786) {
		navList.style.display = "none";
	}
});

navAdmin["laporan"].addEventListener("click", function (event) {
	navAdmin["beranda"].classList.remove("nav-active");
	navAdmin["mbuku"].classList.remove("nav-active");
	navAdmin["manggota"].classList.remove("nav-active");
	navAdmin["laporan"].classList.add("nav-active");
	dashDiv1.style.display = "none";
	dashDiv2.style.display = "none";
	dashDiv3.style.display = "none";
	dashDiv4.style.display = "block";
	if (window.innerWidth < 786) {
		navList.style.display = "none";
	}
});

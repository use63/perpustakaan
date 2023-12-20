const navButton = document.querySelector(".nav-button");
const navList = document.querySelector(".nav-list");
const navListClose = document.querySelector(".nav-list ul li.close");
navButton.addEventListener("click", () => {
	navList.style.display = "block";
});
navListClose.addEventListener("click", () => {
	navList.style.display = "none";
});

let navAdmin = {
	beranda: document.querySelectorAll(".nav-list ul li")[1],
	mbuku: document.querySelectorAll(".nav-list ul li")[2],
	manggota: document.querySelectorAll(".nav-list ul li")[3],
	laporan: document.querySelectorAll(".nav-list ul li")[4],
	keluar: document.querySelectorAll(".nav-list ul li")[5],
};

navAdmin["keluar"].addEventListener("click", () => {
	window.location.replace("/login");
});

function Map_points(map_container, list_cont, map_section) {
	this.map_section = document.querySelector(`#${map_section}`);
	this.map_container = document.querySelector(`#${map_container}`);
	this.list_container = document.querySelector(`.${list_cont}`);
	this.lamele = this.map_container.querySelectorAll(".lamele");
	this.points = this.map_container.querySelectorAll(".point_wrapper");
	let list_itms = this.list_container.querySelectorAll(".location");
	let lamela_card = document.querySelector("#lamela_info");
	let lamelaCardInfo = [
		{
			hdl: "Premium kondo naselje",

			text: `<p>Fruške Residence se sastoji od 140 apartmana, za ličnu upotrebu ili za izdavanje – izbor je isključivo Vaš!</p>
			<p>Apartmani nude udobnost i potpuni komfor za svakodnevni život, ali na drugačiji način od života u gradu.</p>`,
			img: "assets/map/card_2.jpg",
		},
		{
			hdl: `Istorijski spomenik
			Vrdnička kula`,

			text: `<p>Vrdnička kula predstavlja neprocinjivi spomenik kulture, za koji se veruje da datira 
			još od doba Rimljana. Smeštena je nedaleko od starog naselja Vrdnik.</p>
			<p>Sa vrha visoke kule, smeštene na bregu, pruža se neverovatan pogled na šumovite obronke najstarijeg Nacionalnog parka u Srbiji.</p>`,
			img: "assets/map/card_3.jpg",
		},
		{
			hdl: `Etno kompleks
			Vrdnička kula`,

			text: `<p>Godine 2015. otvoren je Etno restoran Vrdnička Kula i Etno
			apartmani Vrdnička Kula. Godinu dana kasnije počinje sa radom Etno hotel Vrdnička Kula, čime se kompletira 
			izgradnja Etno Kompleksa 
			Vrdnička Kula 4*, drugog hotelsko-turističkog kompleksa Promont Hotelijerstva nadomak Banje Vrdnik.</p>`,
			img: "assets/map/card_4.jpg",
		},
		{
			hdl: `Wellness & Spa Resort Fruške Terme`,

			text: `<p>Godine 2019. otvoren je  treći hotelsko-turistički kompleks, Wellness & Spa 
			Resort Fruške Terme 4*, proglašen za najbolju investiciju u oblasti
			turizma u Srbiji iste godine. </p> 
			<p>Fruške Terme predstavljaju prve terme u Srbiji koje istovremeno mogu da smeste i do 700  wellness gostiju. Izmedju ostalog, Resort Fruške Terme u svom sastavu ima 8 bazena sa termo-mineralnom vodom (5 zatvorenih, 3 otvorena), 12 sauna, 11 konferencijskih sala i 5 restorana i barova.</p>`,
			img: "assets/map/card_6.jpg",
		},
		{
			hdl: `Termalna Rivijera`,

			text: `<p>Termalnu Rivijeru čini Panoramski “infinity” bazen sa pogledom na Frušku goru sa jedinstvenim staklenim zidom (500 m2) zatim Poluolimpijski “infinity” bazen (300 m2), Bazen za decu sa
			 prskalicama (300m2) kao i Mini aqua park sa tri vrste tobogana.</p>`,
			img: "assets/map/card_7.jpg",
		},
		{
			hdl: "Hotel Premier Aqua",
			hdl2: "Premium zgrada sa apartmanima",
			text: `<p>TEXT 2 se sastoji od 140 apartmana, za 
			ličnu upotrebu ili za izdavanje – izbor je isključivo Vaš!</p> 
			<p>KONDO MONDOnude udobnost i potpuni komfor za 
			svakodnevni život, ali na drugačiji način od života u gradu.</p>`,
			img: "assets/map/card_5.jpg",
		},
		{
			hdl: `Sportski tereni`,

			text: `<p>Godine 2014. nadomak hotela otvaraju se sportski tereni Premier. Tri teniska terena i 
			jedan multifunkcionialni predstavljaju sportsko-rekreativni dopunski sadržaj za sve goste 
			prvog hotelsko-turističkog kompleksa Promont Hotelijerstva, hotela Premier Aqua.</p>`,
			img: "assets/map/card_1.jpg",
		},
		{
			hdl: `Staza zdravlja`,

			text: `<p>Staza zdravlja dužine je 1,96km, povezuje Banju Vrdnik sa 
			Vrdnickom kulom i kao takva predstavlja idealnu rutu za ljubitelje
			 rekreativnih aktivnosti u prirodi.</p>`,
			img: "assets/map/card_8.jpg",
		},
	];
	let height = 0;
	let width = 0;

	this.reszieMap = function () {
		height = this.map_container.offsetHeight;
		width = this.map_container.offsetWidth;
		let box_height = Math.floor(height * 0.055);
		let box_width = Math.floor(height * 0.125);
		this.lamele.forEach((lamela) => {
			lamela.style.width = box_width + "px";
			lamela.style.height = box_height + "px";
		});

		this.points.forEach((point, index) => {
			let num = point.getAttribute("data-point");
			let point_num = point.children[1];
			let point_width = Math.floor(height * 0.048);
			let point_height = Math.floor(height * 0.06);
			let top = (point.style.top = point.getAttribute("data-top") + "%");
			let left = (point.style.left = point.getAttribute("data-left") + "%");
			point.style.width = point_width + "px";
			point.style.height = point_height + "px";
			point_num.innerText = num;
			point_num.style.fontSize = point_width * 0.75 + "px";
			point.addEventListener("mouseenter", () => {
				list_itms[index].classList.add("active");
				point.classList.add("hovering");
			});
			point.addEventListener("mouseleave", () => {
				list_itms[index].classList.remove("active");
				point.classList.remove("hovering");
			});
		});
	};
	list_itms.forEach((location, index) => {
		location.addEventListener("mouseenter", () => {
			this.points[index].classList.add("hovering");
		});
		location.addEventListener("mouseleave", () => {
			this.points[index].classList.remove("hovering");
		});
	});
	let lamelaInfo = function (lml) {
		let current = lml.getAttribute("data-point");
		console.log(lamelaCardInfo[current - 1]);
		createLamelaCard(lamelaCardInfo[current - 1]);
	};

	this.map_section.addEventListener("click", (e) => {
		if (
			e.target.classList.contains("point_wrapper") ||
			e.target.classList.contains("location")
		) {
			let currentLamela = e.target;
			lamelaInfo(e.target);
		} else {
			lamela_card.classList.remove("show_info");
		}
	});
	this.close_card = function () {
		lamela_card.classList.remove("show_info");
	};

	function createLamelaCard(info) {
		lamela_card.classList.remove("show_info");
		let naslov1 = lamela_card.querySelector("h3");
		let naslov2 = lamela_card.querySelector(".subHeading");
		let img = lamela_card.querySelector(".img-wrapper img");
		let text = lamela_card.querySelector(".card_text");
		let card_text = info.text;

		setTimeout(() => {
			lamela_card.classList.add("show_info");
			naslov1.innerText = info.hdl;

			img.setAttribute("src", info.img);

			text.innerHTML = info.text;
		}, 500);
	}
}

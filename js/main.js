let window_heigh, window_width, window_scroll;
let def = document.querySelector("#default");
let slider1 = document.querySelector("#mySlide1");
let slider_1;
let slider_2;
let slider2 = document.querySelector("#mySlide2");
let map_1;
let map_section_1 = document.querySelector("#map_container");
let burger = document.querySelector(".burger");
let drop_down_nav = document.querySelector(".drop_wrapper");
let links = document.querySelectorAll(".drop_down .link");
let card_header_def = document.querySelector("#card_header_def");
let card_headers = document.querySelectorAll(
	"#res_card .card_body h2:not(#card_header_def)"
);
window.addEventListener("click", show_drop_nav);

function show_drop_nav(e) {
	if (window.innerWidth < 1225 && window.innerWidth > 450) {
		if (e.target.classList.contains("burger")) {
			drop_down_nav.classList.toggle("show_nav");

			if (drop_down_nav.classList.contains("show_nav")) {
				links.forEach((link) => {
					link.addEventListener("click", pageTrans);
				});
			}
		} else {
			drop_down_nav.classList.remove("show_nav");
		}
	} else if (window.innerWidth < 450) {
		if (
			e.target.classList.contains("burger") ||
			e.target.classList.contains("nav_bar")
		) {
			drop_down_nav.classList.toggle("show_nav");

			if (drop_down_nav.classList.contains("show_nav")) {
				links.forEach((link) => {
					link.addEventListener("click", pageTrans);
				});
			}
		} else {
			drop_down_nav.classList.remove("show_nav");
		}
	}
}

function pageTrans(e) {
	let location = e.target.getAttribute("href");

	e.preventDefault();

	drop_down_nav.classList.remove("show_nav");
	setTimeout(() => {
		window.location.href = location;
	}, 450);
}

if (slider2) {
	slider_2 = new Slider("slider2");
}
if (slider1) {
	slider_1 = new Slider("slider1");
}

function start() {
	window_width = def.offsetWidth;
	window_heigh = def.offsetHeight;
	// console.log(window_width, window_heigh);
	if (map_section_1) {
		map_1.reszieMap();
	}
	if (slider1) {
		slider_1.setSize();
		slider_1.start();
		slider_1.show_img();
	}
	if (slider2) {
		slider_2.setSize();
		slider_2.start();
		slider_2.show_img();
	}

	blur_img();
	if (!card_headers) {
		return;
	}
	cardHeaderH();
	// enableScroll();
	// resizeBodyHeight();
}

function cardHeaderH() {
	if (!card_header_def) {
		return;
	}

	let header_h = card_header_def.offsetHeight;
	card_headers.forEach((header) => {
		header.style.height = `${header_h}px`;
	});
}

function resize() {
	window_width = def.offsetWidth;
	window_heigh = def.offsetHeight;
	if (map_section_1) {
		map_1.reszieMap();
	}
	if (slider1) {
		slider_1.setSize();
		slider_1.start();
	}
	if (slider2) {
		slider_2.setSize();
		slider_2.start();
	}
	blur_img();

	if (!card_headers) {
		return;
	}
	cardHeaderH();
	// resizeBodyHeight();
}

// #region Map

if (map_section_1) {
	map_1 = new Map_points("map_container", "map-legend", "map-section");
}

// #endregion

// SLIDER

function blur_img() {
	let blur_container = document.querySelector(".videoSection img");
	let videoSection = document.querySelector(".videoSection");
	if (blur_container) {
		let blurImg = document.querySelector(".blured");
		let play_container = document.querySelector(".play_btn");
		let hg = document.querySelector(".overlay_hg");

		let b_height = blur_container.offsetHeight;
		let b_width = blur_container.offsetWidth;
		let b_top = blur_container.offsetTop;

		blurImg.style.height = b_height + "px";
		blurImg.style.width = b_width + "px";
		blurImg.style.top =
			-(
				play_container.offsetTop +
				(videoSection.offsetHeight - hg.offsetHeight) / 2
			) + "px";
	}

	// console.log(blurImg.offsetTop);
	// console.log(hg_top.top + play_cont_top.top);
}

// PARALAX
let paralax_items = document.querySelectorAll(".paralax_itm");

function paralax(items, ws) {
	window_width = def.offsetWidth;
	window_heigh = def.offsetHeight;
	let el_pos_top = 0;

	items.forEach((item, index) => {
		let scroll_data = item.getAttribute("data-scroll");
		let paralax_direction = item.getAttribute("data-direction");
		el_pos_top = item.offsetTop;
		let scroll_effect = Math.ceil(
			10 + (scroll_data * (ws - el_pos_top)) / window_heigh
		);

		if (paralax_direction === "top") {
			item.style.marginTop = -scroll_effect + "px";
		} else if (paralax_direction === "left") {
			item.style.transform = `translate(${scroll_effect}px , -50%)`;
		} else if (paralax_direction === "bottom") {
			item.style.marginBottom = -scroll_effect + "px";
		}
	});
}

// window.onresize = () => {
// 	resizeBodyHeight();
// };

// window.onload = () => {
// 	enableScroll();
// 	resizeBodyHeight();
// };

// APARTMANI
function apartmani_set() {
	let card_lml_points = document.querySelectorAll(".card_pointer");
	if (window.scrollY > 80) {
		card_lml_points.forEach((card_point) => {
			card_point.classList.add("point_active");
		});
	}
	// else {
	// 	card_lml_points.forEach((card_point) => {
	// 		card_point.classList.remove("point_active");
	// 	});
	// }
}
let apear_items = document.querySelectorAll(".apear_scroll");
function apear_In(items, ws) {
	window_width = def.offsetWidth;
	window_heigh = def.offsetHeight;

	items.forEach((item, index) => {
		let item_pos = item.offsetTop;

		if (item_pos - window_heigh * 0.93 < ws) {
			item.classList.remove("opacity_0");
			item.classList.add("opacity_1");
		} else {
			item.classList.add("opacity_0");
			item.classList.remove("opacity_1");
		}
	});
}

// Functions
let contact_badge = document.querySelector(".contact_badge");
let ws = 0;

let isScrolling;
window.addEventListener("load", start);
window.addEventListener("resize", resize);
window.addEventListener("scroll", () => {
	window.clearTimeout(isScrolling);
	ws = window.scrollY;
	paralax(paralax_items, ws);

	apear_In(apear_items, ws);
	apartmani_set();
	if (!contact_badge) {
		return;
	}
	show_contact();

	isScrolling = setTimeout(function () {
		// Run the callback
		remove_contact();
	}, 3000);
});

function show_contact() {
	if (ws > 80) {
		contact_badge.classList.add("show_contact");
	}
}
function remove_contact() {
	contact_badge.classList.remove("show_contact");
}

// APARTMANI RENEDERS

let panoSelector_1 = document.querySelector("#panoS_1");
let panoSelector_2 = document.querySelector("#panoS_2");
let pano_Slider = document.querySelector(".render_apart .render_wrapper");
if (pano_Slider) {
	panoSelector_1.addEventListener("click", slide_pano);
	panoSelector_2.addEventListener("click", slide_pano);
}

function slide_pano(e) {
	e.preventDefault();
	// console.log(e.target.id);
	if (e.target.id === "panoS_2") {
		pano_Slider.classList.add("render_active");
		panoSelector_2.classList.add("green");
		panoSelector_1.classList.remove("green");
		panoSelector_1.classList.add("white");
	} else {
		pano_Slider.classList.remove("render_active");
		panoSelector_2.classList.add("white");
		panoSelector_2.classList.remove("green");
		panoSelector_1.classList.add("green");
	}
}

// PROJECT
let loader_art = document.querySelector(".loader");
let loader_count = document.querySelector(".loader_cont");
let main_header = document.querySelector(".main-hero");
let page_header = document.querySelector("section.pageHeader");
var load_page_images = [],
	load_page_im = [],
	load_page_panos = [],
	load_page_p = [],
	load_page_count = 0,
	load_page_fin = 0,
	loader_po = false;
ret = 0;
load_page_start();
function load_page_start() {
	let imgs = document.querySelectorAll("img");
	let pano = document.querySelectorAll(".pano iframe");

	imgs.forEach((img) => {
		load_page_images.push(img);
	});
	pano.forEach((pan) => {
		load_page_panos.push(pan);
	});
	load_page_count = load_page_images.length + load_page_panos.length;
	for (let i = 0; i < load_page_images.length; i++) {
		load_page_im[i] = new Image();
		load_page_im[i].src = load_page_images[i].src;
		load_page_im[i].addEventListener("load", load_page_update);
	}
	for (let i = 0; i < load_page_panos.length; i++) {
		load_page_p.push(load_page_panos[i]);
		load_page_p[i].addEventListener("load", load_page_update);
	}
}

function load_page_update() {
	load_page_fin++;
	// console.log(load_page_count);
	if (load_page_count > 0) {
		ret = Math.ceil((100 * load_page_fin) / load_page_count);
	}
	if (ret > 98) {
		loader_art.classList.add("remove_load");
		setTimeout(() => {
			loader_art.classList.add("disable");
			start_anim();
		}, 300);
	}

	loader_count.innerHTML = ret + "%";
}
function start_anim() {
	if (loader_art.classList.contains("disable")) {
		if (main_header) {
			main_header.classList.add("headerAnim");
		}
		if (page_header) {
			page_header.classList.add("pageHeadAnim");
		}
	}
}

function show_video(event) {
	event.preventDefault();
	let btn = event.target;

	let video_wrapper = document.querySelector(".video_wrapper");
	let iframe = document.querySelector(".video_wrapper iframe");
	let src = btn.getAttribute("data-src");

	video_wrapper.classList.add("active_video");
	iframe.src = src;
}
function close_video() {
	let video_wrapper = document.querySelector(".video_wrapper");
	video_wrapper.classList.remove("active_video");
	let iframe = document.querySelector(".video_wrapper iframe");
	iframe.src = "";
}

let pano_1 = document.querySelector(".overlay_pano");

if (pano_1) {
	pano_1.addEventListener("click", (e) => {
		show_pano(e);
	});
}

function show_pano(e) {
	let current_pano = e.target;
	let data_show = current_pano.getAttribute("data-show");

	if (!data_show) {
		current_pano.setAttribute("data-show", true);
		data_show = current_pano.getAttribute("data-show");

		ovarlayHide(current_pano);
	} else {
		showOverylay(current_pano);
	}
}

function ovarlayHide(current_pano) {
	let pano_cont = current_pano.parentElement;
	let pano_children = pano_cont.children;
	let link = current_pano.getAttribute("data-frame");
	let pano_wrapper = document.querySelector(".pano_wrapper");

	let iFrame = document.createElement("iFrame");
	// iFrame.setAttribute("frameborder", "0");

	iFrame.setAttribute("src", `${link}`);
	for (let i = 0; pano_children[i]; i++) {
		if (pano_children[i].classList.contains("pano_img")) {
			pano_children[i].style.display = "none";
		}
	}
	pano_wrapper.appendChild(iFrame);

	current_pano.classList.add("hide_overlay");
}

function showOverylay(current_pano) {
	let pano_cont = current_pano.parentElement;

	let pano_children = pano_cont.children;

	for (let i = 0; pano_children[i]; i++) {
		if (pano_children[i].classList.contains("pano_img")) {
			pano_children[i].style.display = "block";
		}
		if (pano_children[i].classList.contains("pano_wrapper")) {
			pano_children[i].children[0].remove();
		}
	}
	current_pano.classList.remove("hide_overlay");
	current_pano.removeAttribute("data-show");
}

// PROBA FORME

// FORM VALIDATOR

function validate_form(event) {
	event.preventDefault();
	let name = document.querySelector('input[name="name"]');
	let email = document.querySelector('input[name="email"]');
	let msg = document.querySelector("textarea[name='message']");

	name.classList.remove("alert");
	email.classList.remove("alert");
	msg.classList.remove("alert");
	if (!name.value) {
		form_alerts(name);
	}

	if (!email.value) {
		form_alerts(email);
	}
	if (!msg.value) {
		form_alerts(msg);
	}
}

function form_alerts(el) {
	console.log(el);
	el.classList.add("alert");
}

function linkPrevent(event) {
	event.preventDefault();
}

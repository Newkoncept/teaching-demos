const card = document.querySelector(".card-2");

card.addEventListener("click", showFaq);

function showFaq(e) {
	if (e.target.localName === "h2") {
		let heading = e.target;
		let tag = e.target.parentElement.querySelector(".faq-body");
		tag.classList.toggle("faq-body-display");
		heading.classList.toggle("faq-head-weight");
		heading.classList.toggle("image_rotation");
	}
}

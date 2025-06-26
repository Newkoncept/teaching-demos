// Variables
const sendBtn = document.querySelector("#sendBtn"),
	resetBtn = document.querySelector("#resetBtn"),
	emailForm = document.querySelector("#email-form"),
	emailField = document.querySelector("#email"),
	subjectField = document.querySelector("#subject"),
	messageField = document.querySelector("#message"),
	imgLoaders = document.querySelector("#loaders");

// Event Listeners
document.addEventListener("DOMContentLoaded", disableSendBtn);
emailField.addEventListener("blur", validateField);
subjectField.addEventListener("blur", validateField);
messageField.addEventListener("blur", validateField);
sendBtn.addEventListener("click", sendEmail);
resetBtn.addEventListener("click", resetEmailForm);

// Functions
function disableSendBtn() {
	sendBtn.disabled = true;
	resetBtn.disabled = false;
}

function validateField() {
	//   validate the length of the input
	validateFieldLength(this);

	//   validate the email field(To field in the form)
	if (this.type === "email") {
		validateEmailField(this);
	}

	//   activate the send button if all the field return true
	let errors = document.querySelectorAll(".error");

	//   Checking to see that the values of all the inputs are not empty
	if (emailField.value !== "" && subjectField.value !== "" && messageField.value !== "") {
		if (errors.length === 0) {
			sendBtn.disabled = false;
		} else {
			disableSendBtn();
		}
	} else {
		disableSendBtn();
	}
}

function validateFieldLength(field) {
	if (field.value.length === 0) {
		field.classList.add("error");
		field.classList.remove("success");
	} else {
		field.classList.remove("error");
		field.classList.add("success");
	}
}

function validateEmailField(emailField) {
	if (emailField.value.indexOf("@") === -1) {
		emailField.classList.add("error");
		emailField.classList.remove("success");
	} else {
		emailField.classList.remove("error");
		emailField.classList.add("success");
	}
}

function sendEmail(e) {
	e.preventDefault();

	disableSendBtn();
	resetBtn.disabled = true;

	const spinner = document.querySelector("#spinner");
	const mailImg = document.createElement("img");
	mailImg.src = "img/mail.gif";

	spinner.style.display = "block";

	setTimeout(function () {
		//   simulate email sending
		spinner.style.display = "none";
		mailImg.style.display = "block";
		imgLoaders.appendChild(mailImg);

		setTimeout(function () {
			// reset the whole form
			emailForm.reset();
			mailImg.style.display = "none";
			removeFieldClass();
			disableSendBtn();
		}, 5000);
	}, 3000);
}

function removeFieldClass() {
	emailField.classList.remove("success");
	subjectField.classList.remove("success");
	messageField.classList.remove("success");
	emailField.classList.remove("error");
	subjectField.classList.remove("error");
	messageField.classList.remove("error");
}

function resetEmailForm(e) {
	e.preventDefault();
	emailForm.reset();
	disableSendBtn();
	removeFieldClass();
}

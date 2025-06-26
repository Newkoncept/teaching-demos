// document.querySelector("#post").addEventListener("click", loadPostsAjax);
document.querySelector("#post").addEventListener("click", loadPostsFetchApi);

function loadPostsAjax() {
	const xhr = new XMLHttpRequest();

	xhr.open("GET", "JSON/post.json", true);

	xhr.onload = function () {
		const posts = JSON.parse(this.responseText);

		posts.forEach((post) => {
			const div = document.createElement("div");
			div.innerHTML = `
                <h3>${post.title} </h3>
                <p>${post.body} </p>
            `;

			document.querySelector(".result").appendChild(div);
		});
	};

	xhr.send();
}

function loadPostsFetchApi() {
	fetch("JSON/post.json")
		.then((response) => response.json())
		.then((posts) => {
			posts.forEach((post) => {
				const div = document.createElement("div");
				div.innerHTML = `
                <h3>${post.title} </h3>
                <p>${post.body} </p>
            `;

				document.querySelector(".result").appendChild(div);
			});
		})
		.catch((error) => console.log(error));
}

var num = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
	num1 = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

function multiply(x) {
	// Variable Declaration
	var result = document.getElementById("result"),
		table = document.createElement("table"),
		caption = document.createElement("caption"),
		thead = document.createElement("thead"),
		tbody = document.createElement("tbody"),
		tr = document.createElement("tr"),
		th1 = document.createElement("th"),
		th2 = document.createElement("th");

	// inner html
	caption.innerHTML = "Multiplication Table " + x;
	th1.innerHTML = "Number";
	th2.innerHTML = "Result";

	// Appending
	thead.appendChild(tr);
	thead.appendChild(th1);
	thead.appendChild(th2);
	table.appendChild(caption);
	table.appendChild(thead);

	for (let counter = 0; counter < num.length; counter++) {
		var answer = x * num[counter];
		var tRow = document.createElement("tr");
		var col_one = document.createElement("td");
		var col_two = document.createElement("td");

		//   inner html
		col_one.innerHTML = x + " * " + num[counter];
		col_two.innerHTML = answer;

		//   appending child
		tRow.appendChild(col_one);
		tRow.appendChild(col_two);
		tbody.appendChild(tRow);
		table.appendChild(tbody);
		result.append(table);
	}
}

for (let i = 0; i < num1.length; i++) {
	multiply(num1[i]);
}

function oddNum() {
	var oddNumber = document.querySelector("#oddNumber");
	var title = document.createElement("h2");
	title.innerHTML = "***************** ODD NUMBERS *****************";
	oddNumber.append(title);

	//   Odd number creation method 1 using modulus
	for (let counter = 0; counter <= 100; counter++) {
		if (counter % 2 !== 0) {
			var span = document.createElement("span");
			span.innerHTML = counter;
			oddNumber.append(span);
		}
	}
}
oddNum();

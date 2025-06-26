var num = new Array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20
  ),
  num1 = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

function multiply(x) {
  // Variable Declaration
  var result = document.getElementById("result"),
    table = document.createElement("table");

  table.innerHTML = `
                <caption>Multiplication Table ${x}</caption>
                <thead>
                    <tr>
                    <th>Number</th>
                    <th>Result</th>
                    </tr>
                </thead>
                <tbody>
        `;

  for (let counter = 0; counter < num.length; counter++) {
    var answer = x * num[counter];
    var tRow = document.createElement("tr");
    tRow.innerHTML = `
            <td>${x} * ${num[counter]}</td>
            <td>${answer}</td>
            </tr>
            </tbody>
            </table>
        `;
    table.appendChild(tRow);
    result.append(table);
  }
}

for (let i = 0; i < num1.length; i++) {
  multiply(num1[i]);
}

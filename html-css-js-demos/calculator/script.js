let displayValue = "";
let sign = "";
let firstValue = "";
let result = 0;

function display(x) { 
  let display1 = document.getElementById("d1");
  let display2 = document.getElementById("d2");
  let display3 = document.getElementById("d3");
  let equalChecker = display1.innerText.substr(-1);
  if(equalChecker == "="){
    display1.innerText = "";
    display2.innerText = 0;
    display2.style.display = "block";
    display3.style.display = "none";
    displayValue = "";
    sign = "";
    firstValue = "";
    result = 0;
  } 
  display2.style.display = "block";
  display3.style.display = "none";
  if (display2.innerText == 0) {
    display2 = display2.innerText = x;
  } else {
    if (display2.innerText.length < 11) {
      display2 = display2.innerText += x;
    } else {
      alert("Maximum value reached");
    }
  }
  displayValue = Number(display2);
}

function eval(x) {
  let display1 = document.getElementById("d1");
  let display2 = document.getElementById("d2");
  let display3 = document.getElementById("d3");

  if (displayValue != "") {
    display1 = display1.innerText += ` ${displayValue} ${x}`;
    display2.innerHTML = 0;
    
    // Checking if the calculator has values before
    if(firstValue == "") {
      firstValue = Number(displayValue)
      result = displayValue;
      sign = x;
      displayValue = "";
    } else {
      answer = calc(result, displayValue, sign);
      result = answer;
      displayValue = "";
      sign = x;
      display2.style.display = "none";
      display3.style.display = "block";
      display3.innerHTML = answer
    }
  }
}

function finalAnswer(x){
  let display1 = document.getElementById("d1");
  let display2 = document.getElementById("d2");
  let display3 = document.getElementById("d3");

  if (displayValue != "") {
    if(result != 0) {
        display1 = display1.innerText += ` ${displayValue} =`;
        answer = calc(result, displayValue, sign);
        let checker = answer.toString();
        if(checker.indexOf('.')) {
          answer = Number(answer.toFixed(1));
        } 
        result = 0;
        displayValue = "";
        sign = "";
        display2.style.display = "none";
        display3.style.display = "block";
        display3.innerHTML = answer
    } else {
      display1.innerText = `${displayValue} =`;
      display2.innerText = 0;
      display3.innerText = `${displayValue}`;
      result = 0;
      displayValue = "";
      display2.style.display = "none";
      display3.style.display = "block";   
    }
  }
}

function calc(result, s, x) {
  let answer;
  switch (x) {   
    case "*" :
      answer = (result) * s;
      return answer;
      break;
      case "+" :
      answer = (result) + s;
      return answer;
      break;
    case "-" :
      answer = (result) - s;
      return answer;
      break;
    case "/" :
      answer = (result) / s;
      return answer;
      break;
  }
}

function reset() {
  location.reload();
}
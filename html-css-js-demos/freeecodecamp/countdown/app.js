const days = document.querySelector("days");
const hours = document.querySelector("hours");
const mins = document.querySelector("mins");
const secs = document.querySelector("secs");

const base_time = new Date("1970-01-01T00:00:00").getTime();
const present_date = new Date("2022-07-06T21:39:00").getTime();
const expected_date = new Date("2022-07-06T22:10:00").getTime();

setInterval(function () {
  let current_date = new Date().getTime();

  if (expected_date > current_date) {
    let time_left = expected_date - current_date;

    let display = new Date(expected_date - time_left);

    // console.log(current_date);
    // console.log(present_date);
    // console.log(expected_date);
    console.log(display);
    console.log(display.getHours());
    console.log(display.getMinutes());
    console.log(display.getDate());
    console.log(display.getDay());
  }
}, 1000);

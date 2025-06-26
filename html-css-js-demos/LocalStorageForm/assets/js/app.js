// Variables
const tweetForm = document.querySelector("#form");
const tweetList = document.querySelector("#tweet-list");
const tweetInput = document.querySelector("#tweet");
const tweetBtn = document.querySelector("#tweetBtn");

// Event Listeners
document.addEventListener("DOMContentLoaded", disableTweetBtn);
document.addEventListener("DOMContentLoaded", loadLSTweets);
tweetForm.addEventListener("submit", addNewTweet);
tweetList.addEventListener("click", deleteTweet);
tweetInput.addEventListener("blur", sendBtnActivator);

// Functions
function disableTweetBtn() {
  // disable the send button if there is no input from the user
  tweetBtn.disabled = true;
  tweetBtn.classList.add("sendBtn");
}

function loadLSTweets() {
  let LSTweets = getItemsFromLS();

  LSTweets.forEach(function (tweet) {
    //   Creation of the li to display the tweets
    const li = document.createElement("li");
    li.textContent = tweet;

    // Create the remove button
    const removeBtn = document.createElement("a");
    removeBtn.textContent = "X";
    removeBtn.classList.add("remove-tweet");

    //   Attaching the removeBtn to the user input
    li.appendChild(removeBtn);

    //   Attaching the user input to the display tweet section
    tweetList.appendChild(li);
  });
}

function sendBtnActivator() {
  if (tweetInput.value !== "") {
    tweetBtn.disabled = false;
    tweetBtn.classList.remove("sendBtn");
  }
}

function getItemsFromLS() {
  let LSTweets;

  //   Getting to see if the tweets key exists in the local storage
  if (localStorage.getItem("tweets") === null) {
    LSTweets = [];
  } else {
    LSTweets = JSON.parse(localStorage.getItem("tweets"));
  }

  return LSTweets;
}

function addNewTweet(e) {
  // Prevent submission to another page
  e.preventDefault();

  // User inputs
  const tweetInput = document.querySelector("#tweet").value;

  if (tweetInput !== "") {
    //   Creation of the li to display the tweets
    const li = document.createElement("li");
    li.textContent = tweetInput;

    // Create the remove button
    const removeBtn = document.createElement("a");
    removeBtn.textContent = "X";
    removeBtn.classList.add("remove-tweet");

    //   Attaching the removeBtn to the user input
    li.appendChild(removeBtn);

    //   Attaching the user input to the display tweet section
    tweetList.appendChild(li);

    //   Saving the tweet to the local storage
    addTweetToLS(tweetInput);
    alert("New Tweet Added to the display section");

    this.reset();
    disableTweetBtn();
  }
}

function addTweetToLS(tweet) {
  //   Getting the result from the local storage in form of an array
  let LSTweets = getItemsFromLS();

  //   Pushing the result to the array
  LSTweets.push(tweet);

  //   Sending the result to the local storage
  localStorage.setItem("tweets", JSON.stringify(LSTweets));
}

function deleteTweet(e) {
  if (e.target.classList.contains("remove-tweet")) {
    //   removing the tweet from the display
    e.target.parentElement.remove();

    //   removing the tweet from the local storage
    deleteTweetFromLS(e.target.parentElement.textContent);

    alert("Tweet Deleted from the display section");
  }
}

function deleteTweetFromLS(tweet) {
  // removing the delete button (X)
  let deletedTweet = tweet.slice(0, tweet.length - 1);

  //   getting the result from the local storage
  let LSTweets = getItemsFromLS();

  LSTweets.forEach(function (LSTweet, index) {
    if (LSTweet === deletedTweet) {
      //   deleting the result
      LSTweets.splice(index, 1);
    }
  });
  //   Upadting the local storage
  localStorage.setItem("tweets", JSON.stringify(LSTweets));
}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attractive Tailwind CSS Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-10 w-auto" src="src/logo.webp" style="border-radius: 15px;" alt="Your Company">
          </div>
          <div class="hidden sm:ml-6 sm:block" style="
    display: flex;
    margin-left: 370px;
">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                aria-current="page">Dashboard</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Write
                a Line</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Stories</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Settings</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button"
            class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button type="button"
                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
               <a href="login.php"> <i class="material-icons h-8 w-8 rounded-full" style="
    color: white;
    font-size: 32px;
">account_circle</i></a>
              </button>
            </div>


          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
          aria-current="page">Dashboard</a>
        <a href="#"
          class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#"
          class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#"
          class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">



<?php 
error_reporting(0);
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
  $email = $_SESSION['email'];
  $username =  $_SESSION['username'];
  $sno = $_SESSION['sno'];
echo'';
}

?>

<main style="
border-radius: 20px;
">
  <div class="create-tweet">
    <textarea id="tweet-text" placeholder="Whats happening?" style="
border: 1px solid;
"></textarea>
    <div class="actions1">
      <button class="btn btn-primary" onclick="tweet()"><b>Post My Story</b></button>
      <span class="char-count" id="word-limit">280</span>
    </div>
  </div>
  <div class="tweets">
    <!-- Display tweets here -->
  </div>
</main>

    
  </div>
  <br>
  <div class="container2">
    <div class="card-row">

      <div class="card">
        <div class="profile">
          <img src="https://cdn.britannica.com/98/236598-050-9F0C5A8D/Mark-Zuckerberg-2019.jpg" alt="Profile Photo 1">
          <h2>John Doe</h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat eget nisi bibendum,
          eget commodo quam laoreet.
        </p>
        <div class="actions">
          <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
          <button class="like-button" onclick="animateButton(this)"><i class="material-icons" >thumb_up</i><b>
              Like</b></button>
          <button class="comment-button" onclick="animateButton(this)" style="
    display: flex;
    align-items: center;
    justify-content: center;
"><b> <span class="material-icons">add_box</span></b><b> Add A Line</b></button>
          <button class="share-button" onclick="animateButton(this)"><i class="material-icons">share</i><b>
              Share</b></button>
        </div>
        <div class="counts" style="
    display: flex;
    align-items: flex-start;
    margin-top: 10px;
">
          <div class="likes-count" style="
    padding-right: 18px;
    align-items: center;
    justify-content: center;
    display: flex;
">
            <i class="material-icons" style="
    padding-right: 2px;
">thumb_up</i>
            <span>128</span>
          </div>
          <div class="comments-count">
            <i class="material-icons">comment</i>
            <span>42</span>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="profile">
          <img src="https://cdn.britannica.com/98/236598-050-9F0C5A8D/Mark-Zuckerberg-2019.jpg" alt="Profile Photo 1">
          <h2>John Doe</h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat eget nisi bibendum,
          eget commodo quam laoreet.
        </p>
        <div class="actions">
          <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
          <button class="like-button" onclick="animateButton(this)"><i class="material-icons">thumb_up</i><b>
              Like</b></button>
          <button class="comment-button" onclick="" style="
    display: flex;
    align-items: center;
    justify-content: center;
"><b> <span class="material-icons">add_box</span></b><b><a href="particularpost.php"> Add A Line</a></b></button>
          <button class="share-button" onclick="animateButton(this)"><i class="material-icons">share</i><b>
              Share</b></button>
        </div>
        <div class="counts" style="
    display: flex;
    align-items: flex-start;
    margin-top: 10px;
">
          <div class="likes-count" style="
    padding-right: 18px;
    align-items: center;
    justify-content: center;
    display: flex;
">
            <i class="material-icons" style="
    padding-right: 2px;
">thumb_up</i>
            <span>128</span>
          </div>
          <div class="comments-count">
            <i class="material-icons">comment</i>
            <span>42</span>
          </div>
        </div>
      </div>
    </div>
  </div>







<style>

    textarea {
      transition: 0.5s;
    }

    body {}

    header {
      background-color: #1da1f2;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      justify-content: center;
    }

    nav {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    aside {
      flex-basis: 20%;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    main {
      flex-basis: 75%;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 1px 8px rgba(0,0,0,0.2);;
      border-radius: 20px;
      border: 1px solid #e1e8ed;
      
    }

    .create-tweet {
      border-bottom: 1px solid #e1e8ed;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .create-tweet textarea {
      width: 100%;
      height: 100px;
      resize: none;
      font-size: 16px;
      padding: 10px;
      border-radius: 8px;
      border: none;
    }

    .actions1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .btn {
      padding: 8px 16px;
      border-radius: 20px;
      cursor: pointer;
    }

    .btn-primary {
      background-color: #1da1f2;
      color: #fff;
      border: none;
    }

    .char-count {
      color: #657786;
    }

    .tweet {
      border-bottom: 1px solid #e1e8ed;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .char-count {
      color: #657786;
      font-weight: bold;
    }

    .card-row {
      display: flex;
      justify-content: space-between;
      max-width: 900px;
      margin: 20px auto;
    }

    .card {
      flex-basis: 48%;
      background-color: #fff;
      box-shadow: 0 1px 8px rgba(0,0,0,0.2);;
      border-radius: 8px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .profile {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .profile img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .profile h2 {
      margin: 0;
    }

    p {
      margin-top: 10px;
      color: #333;
    }

    .actions {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .actions button {
      margin-right: 10px;
      padding: 8px 12px;
      border: none;
      border-radius: 20px;
      background-color: #1da1f2;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .actions button:hover {
      background-color: #177cb0;
    }

    .likes {
      display: flex;
      align-items: center;
      color: #657786;
      margin-top: 10px;
    }

    .likes i {
      margin-right: 5px;
      color: #1da1f2;
    }

    .material-icons {
      vertical-align: middle;
    }

    /* Style other tweet elements as desired */
  </style>
  <script>
    const tweetText = document.getElementById('tweet-text');
    const wordLimitSpan = document.getElementById('word-limit');
    const maxLength = 280;

    function tweet() {
      const tweetContent = tweetText.value;
      // Here you can implement the logic to submit the tweet content to the server or do other processing.
      // For this example, we'll simply display an alert with the tweet content.
      alert(tweetContent);
      tweetText.value = ''; // Clear the textarea after tweeting.
      updateWordCount(); // Update the word count after tweeting.
    }

    function countWords(text) {
      // Remove leading and trailing spaces
      const trimmedText = text.trim();
      // Split the text by spaces and other whitespace characters
      const words = trimmedText.split(/\s+/);
      // Filter out empty strings (e.g., consecutive spaces)
      const nonEmptyWords = words.filter(word => word !== "");
      return nonEmptyWords.length;
    }

    function updateWordCount() {
      const wordCount = countWords(tweetText.value);
      const remainingWords = maxLength - wordCount;
      wordLimitSpan.textContent = remainingWords;
    }

    // Initial word count update
    updateWordCount();

    tweetText.addEventListener('input', updateWordCount);
  </script>
</body>

</html>
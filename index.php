<!DOCTYPE html>
<html lang="en">

<head>
  <title>Earl Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patrick+Hand">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Patrick Hand", sans-serif;
    }

    /* Sidebar styles */
    .w3-sidebar {
      background: linear-gradient(to bottom, #ffeb3b, #03a9f4, #f44336, #9c27b0, #8bc34a);
      height: 100%;
      width: 300px;
    }

    .w3-sidebar .w3-bar-item {
      font-weight: bold;
    }

    .w3-main {
      margin-left: 300px;
      display: none;
      /* Initially hide the main content */
      transition: margin-left 0.5s ease;
    }

    .w3-padding-large img {
      border-radius: 15px;
      border: 5px solid #ffeb3b;
      object-fit: cover;
      width: 100%;
      height: auto;
    }

    .emotion-circle {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      display: inline-block;
      margin: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .emotion-circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .joy {
      background-color: #ffeb3b;
    }

    .sadness {
      background-color: #03a9f4;
    }

    .anger {
      background-color: #f44336;
    }

    .fear {
      background-color: #9c27b0;
    }

    .disgust {
      background-color: #8bc34a;
    }

    /* Button hover effect */
    button {
      background-color: #ffeb3b;
      border: none;
      padding: 10px 20px;
      color: #333;
      cursor: pointer;
    }

    button:hover {
      background-color: #fbc02d;
    }

    .emotion-circle {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    /* Hover effect for the personality circles */
    .emotion-circle:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    /* Additional Content Styles */
    #contact {
      background-color: #fbe9e7;
    }

    #contact input,
    #contact textarea {
      border: 2px solid #8bc34a;
    }

    .memory-orbs {
      display: flex;
      flex-direction: column;
      /* Changed to column for vertical layout */
      align-items: center;
      justify-content: center;
      margin-top: 50px;
    }

    .emotion-circle {
      width: 200px;
      /* Increased size */
      height: 200px;
      /* Increased size */
      border-radius: 50%;
      display: inline-block;
      margin: 20px 0;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .youtube-section {
      position: relative;
      background: url('insideout2.jpg') no-repeat center center;
      background-size: cover;
      /* Ensures the image covers the full section */
      padding: 50px 20px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .video-wrapper {
      position: relative;
      z-index: 2;
      /* Ensures the video stays on top of the background */
      max-width: 100%;
      height: auto;
      padding-top: 56.25%;
      /* Maintains 16:9 aspect ratio for the video */
    }

    .youtube-section iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 15px;
    }

    /* Import a fun font (Bangers, similar to Inside Out) */
    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');


    /* Style the #home section */
    #home {
      background-image: url('insideout2.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
    }

    #home::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.3);
      z-index: 1;
    }

    #home iframe {
      z-index: 2;
    }


    /* Style for the animated text */
    .animated-text {
      font-family: 'Bangers', cursive;
      font-size: 20px;
      font-weight: bold;
      color: #ffffff;
      /* Default white text color */
      animation: color-change 4s infinite alternate;
      /* Alternating text color animation */
      line-height: 1.5;

      /* Center the text horizontally at the top */
      position: absolute;
      top: 0;
      /* Position at the top */
      left: 50%;
      /* Center horizontally */
      transform: translateX(-50%);
      /* Adjust for exact center alignment */
      width: 100%;
      /* Ensures it takes full container width */
      text-align: center;
      /* Align text in the center */
    }


    /* Keyframes for alternating colors */
    @keyframes color-change {
      0% {
        color: #ffeb3b;
        /* Yellow */
      }

      50% {
        color: #03a9f4;
        /* Blue */
      }

      100% {
        color: #e91e63;
        /* Pink */
      }
    }
  </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-animate-left w3-text-light-grey w3-collapse w3-top w3-center"
    style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
    <div class="w3-padding-64 w3-center">
      <img src="insideoutlogo.png" alt="Inside Out Logo" style="width:80%; max-width:200px; border-radius:10px;">
    </div>

    <a href="javascript:void(0)" onclick="w3_open()" class="w3-bar-item w3-button w3-padding w3-hide-large">OPEN</a>
    <a href="javascript:void(0)" onclick="showPage('home')" class="w3-bar-item w3-button">HOME</a>
    <a href="javascript:void(0)" onclick="showPage('memoryOrbs')" class="w3-bar-item w3-button">MEMORY ORBS</a>
    <a href="javascript:void(0)" onclick="showPage('aboutEmotions')" class="w3-bar-item w3-button">ABOUT EMOTIONS</a>
    <a href="javascript:void(0)" onclick="showPage('contact')" class="w3-bar-item w3-button">CONTACT</a>
  </nav>
  <div id="home">
  <h1 class="animated-text">Welcome to Inside Out World!<br>Explore the emotions that make us human.</h1>

  <!-- Embedded YouTube Video Centered in Home -->
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/LEjhY15eCx0" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<style>
  /* Home Section */
  #home {
    background-image: url('insideout2.jpg'); /* Your background image */
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
  }

  /* Dark overlay to make text more readable */
  #home::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3); /* Dark overlay */
    z-index: 1;
  }
/* Video Container */
.video-container {
  position: relative;
  z-index: 2; /* Ensure the video is above the overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Ensures full width */
  height: 100%; /* Ensures full height */
  max-width: 100%; /* Optional: optional max-width to make sure it doesn't overflow */
  margin: 0 auto; /* Ensure the container itself is centered */
}

/* YouTube Video (Embedded) */
.video-container iframe {
  width: 80%; /* Adjust width as needed */
  height: 400px; /* Adjust height as needed */
  max-width: 800px; /* Optional: maximum width for responsiveness */
  display: block; /* Ensures it's treated as a block element */
  margin-left: auto;
  margin-right: auto; /* Ensures the iframe itself is centered */
}

/* Animated Text */
.animated-text {
  font-family: 'Bangers', cursive;
  font-size: 35px; /* Adjust to a more moderate size */
  font-weight: bold;
  color: #ffffff;
  animation: color-change 4s infinite alternate;
  line-height: 1.5;
  position: absolute;
  top: 10%; /* Adjust for vertical positioning */
  left: 50%;
  transform: translateX(-50%); /* Centers the text horizontally */
  width: auto; /* Set to 'auto' or remove this if you don't need it */
  text-align: center;
}


  
  

  /* Keyframes for alternating colors */
  @keyframes color-change {
    0% {
      color: #ffeb3b; /* Yellow */
    }
    50% {
      color: #03a9f4; /* Blue */
    }
    100% {
      color: #e91e63; /* Pink */
    }
  }
</style>


  
  <div id="memoryOrbs" class="w3-main">
    <div class="w3-center">
      <!-- Joy Emotion -->
      <div class="emotion-circle joy">
        <img src="Goofball_Island.webp" alt="Joy">
      </div>
      <div class="orb-description">
        <h3>Goofball Island</h3>
        <p>Goofball Island is a vibrant and playful realm where Riley’s carefree spirit shines brightest. This is the place where her joy thrives, full of spontaneous laughter, light-hearted moments, and quirky fun. Every corner of Goofball Island is designed for silliness and positivity—whether it’s a silly dance or a random act of joy, this island celebrates the simple, joyful moments that make life feel light and fun. Joy’s energy creates a place where Riley can escape into the carefree excitement of her imagination, reminding her that happiness is often found in the smallest of things.</p>
      </div>

     
      <div class="emotion-circle sadness">
        <img src="FamilyIslandOld.webp" alt="Sadness">
      </div>
      <div class="orb-description">
        <h3>Family Island</h3>
        <p>Family Island is the heart of Riley’s deepest, most reflective emotions. It’s a quiet, soulful place where her melancholic memories of family, love, and loss reside. This island is peaceful, filled with familiar sights and sounds that evoke the warmth and sometimes sorrow of her family’s influence on her life. It’s a place for deep reflection, where Riley can process and heal from difficult moments and cherish the memories that shape her identity. Though the island can sometimes feel lonely or nostalgic, it is essential for building emotional depth and fostering connection with others.</p>
      </div>

     
      <div class="emotion-circle anger">
        <img src="friendshipisland.webp" alt="Anger">
      </div>
      <div class="orb-description">
        <h3>Friendship Island</h3>
        <p>Friendship Island is a land of intense emotion and passion, where Riley’s sense of justice and personal boundaries take root. It’s here that her frustration and anger drive her to protect her relationships and uphold fairness in her world. The island is rugged and full of strong, bold features, symbolizing Riley’s willingness to fight for what’s right. It is fueled by a fierce desire to stand up for her friends, defend what she believes in, and express her thoughts passionately. While the island may be marked by moments of tension, it ultimately represents Riley’s loyalty and devotion to the people she cares about, helping her build meaningful and fair friendships.</p>
      </div>

      
      <div class="emotion-circle fear">
        <img src="sports_island.jpg" alt="Fear">
      </div>
      <div class="orb-description">
        <h3>Sports Island</h3>
        <p>Sports Island is a landscape marked by caution, uncertainty, and the instinctual need for self-preservation. This is where Riley’s fears are embraced as a means of protecting her from harm. The island is filled with obstacles, tightropes, and other challenges that test her ability to stay alert and make safe choices. Fear thrives here by guiding Riley to assess risk and avoid dangers, helping her stay grounded and careful in unfamiliar or potentially harmful situations. While the island may feel uncertain or overwhelming at times, it ensures that Riley remains mindful of her surroundings, safeguarding her from harm and encouraging careful decision-making.</p>
      </div>

     
      <div class="emotion-circle disgust">
        <img src="knowledge_island.jpg" alt="Disgust">
      </div>
      <div class="orb-description">
        <h3>Knowledge Island</h3>
        <p>Knowledge Island is a place shaped by Riley’s strong sense of discernment, where her dislikes and discomforts take form. It’s here that she processes her aversions to unpleasant situations, social faux pas, or anything that feels off or uncomfortable. This island is filled with facts, books, and symbols of personal standards, reflecting Riley’s desire to maintain social acceptance and avoid things that don’t sit well with her. It’s a place where she can learn about what is good, acceptable, and beneficial, steering her away from things that might make her feel uncomfortable or out of place. Knowledge Island helps Riley stay true to her own values and maintain her personal integrity.</p>
      </div>
    </div>
  </div>



  <!-- About Emotions Page -->
  <div id="aboutEmotions" class="w3-main">
    <div class="w3-container w3-padding-32 w3-center">
      <h2>About Emotions</h2>
      <p>Inside Out beautifully illustrates the importance of emotions in shaping our experiences and guiding us through life. Each emotion represents a unique aspect of our inner world, helping us process complex feelings, navigate challenges, and respond to the ever-changing circumstances we face. The film shows how emotions work together in harmony, influencing our thoughts, decisions, and actions.</p>
    </div>
    

    <div class="w3-card-4 w3-margin w3-white">
      <img src="joy.webp" alt="Joy" style="width:100%; border-radius:10px;">
      <div class="w3-container w3-center">
        <h3>Joy</h3>
        <p>The embodiment of happiness and positivity, Joy is always enthusiastic, bright, and determined to keep Riley's spirits high. She works tirelessly to create moments of happiness and laughter, ensuring that Riley stays cheerful and optimistic no matter what life throws at her. Joy's ability to find the silver lining in any situation helps Riley maintain a hopeful outlook, even when things seem tough. With her contagious energy, she encourages Riley to embrace the joys of life and stay connected to the things that make her happiest.</p>
      </div>
    </div>

    <div class="w3-card-4 w3-margin w3-white">
      <img src="sadness.webp" alt="Sadness" style="width:100%; border-radius:10px;">
      <div class="w3-container w3-center">
        <h3>Sadness</h3>
        <p>Sadness may seem gloomy, but she plays a crucial role in Riley’s emotional development. Despite her melancholic outlook, she helps Riley process more complex feelings and contributes to creating meaningful memories. Sadness allows Riley to experience empathy, connection, and vulnerability, teaching her that it’s okay to feel down and that these emotions can lead to growth and understanding. While Joy may shine brightly, Sadness provides balance, reminding Riley that it's natural to experience sorrow and that these moments are part of what makes life rich and memorable.</p>
      </div>
    </div>

    <div class="w3-card-4 w3-margin w3-white">
      <img src="anger2.webp" alt="Anger" style="width:100%; border-radius:10px;">
      <div class="w3-container w3-center">
        <h3>Anger</h3>
        <p>Passionate and fiery, Anger is quick to respond when Riley faces injustice or unfairness. With a strong sense of right and wrong, Anger ensures Riley stands up for herself and others, fighting for what she believes is fair. Though fiery, Anger is not reckless but rather a protective force that helps Riley assert herself when she feels wronged or frustrated. This powerful emotion fuels Riley's desire to make positive changes and hold people accountable for their actions, giving her the courage to voice her concerns and seek resolution in difficult situations.</p>
      </div>
    </div>

    <div class="w3-card-4 w3-margin w3-white">
      <img src="fear.webp" alt="Fear" style="width:100%; border-radius:10px;">
      <div class="w3-container w3-center">
        <h3>Fear</h3>
        <p>Fear is Riley’s ever-vigilant protector, helping her stay safe by guiding her away from dangerous situations. With a keen awareness of potential threats, Fear encourages Riley to think twice before making risky decisions, pushing her to exercise caution in unfamiliar or potentially harmful environments. Fear is not about being paralyzed by anxiety but rather about assessing danger and reacting appropriately. By helping Riley navigate challenges safely, Fear plays a pivotal role in her survival and ability to make sound, thoughtful choices.</p>
      </div>
    </div>

    <div class="w3-card-4 w3-margin w3-white">
      <img src="disgust2.webp" alt="Disgust" style="width:100%; border-radius:10px;">
      <div class="w3-container w3-center">
        <h3>Disgust</h3>
        <p>Disgust serves as the voice of discernment and good taste, helping Riley navigate the complexities of social interactions and personal boundaries. With a sharp sense of what’s socially acceptable or unpleasant, Disgust ensures Riley avoids situations that might be harmful, uncomfortable, or socially awkward. Whether it’s steering clear of unappetizing foods or rejecting behaviors that feel wrong, Disgust plays a vital role in helping Riley maintain her personal integrity and avoid situations that could make her feel uncomfortable or out of place.</p>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div id="contact" class="w3-main">
    <div class="w3-container w3-padding-32 w3-center" style="margin-top: 50px;">
      <h2>Contact Us</h2>
      <p>Have questions? Share your emotions with us!</p>
      <form action="#">
        <div class="w3-section">
          <label for="name">Name</label>
          <input class="w3-input w3-border" type="text" id="name" name="Name" required>
        </div>
        <div class="w3-section">
          <label for="email">Email</label>
          <input class="w3-input w3-border" type="email" id="email" name="Email" required>
        </div>
        <div class="w3-section">
          <label for="message">Message</label>
          <textarea class="w3-input w3-border" id="message" name="Message" rows="4" required></textarea>
        </div>
        <button type="submit" class="w3-button w3-block w3-large w3-yellow">Submit</button>
      </form>
    </div>
  </div>

  <script>
    // Function to show the different sections
    function showPage(page) {
      // Hide all pages
      document.getElementById('home').style.display = 'none';
      document.getElementById('memoryOrbs').style.display = 'none';
      document.getElementById('aboutEmotions').style.display = 'none';
      document.getElementById('contact').style.display = 'none';

      // Show the selected page
      document.getElementById(page).style.display = 'block';
    }

    // Show the home page by default
    showPage('home');
  </script>

</body>

</html>
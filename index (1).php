
<!DOCTYPE html>
    <html>
    <head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">      <title>Chitti AI Chat</title>
        <style>
            body {
                font-family:"Times New Roman", sans-serif;
                font-size: 18px;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }
    
            .header {
                background-color: black;
                color: #ffffff;
                padding: 10px;
                text-align: center;
                font-family: "Times New Roman", sans-serif;
            }
    
            .chat-container {
                width: 300px;
                margin: 0 auto;
                padding: 10px;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
    
            .chat-box {
                max-height: 400px;
                overflow-y: auto;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
    
            .message {
                background-color: #e1e1e1;
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
            }
    
            .user-message {
                text-align: right;
            }
    
            .assistant-message {
                text-align: left;
            }
    
            .input-container {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
    
            input[type="text"] {
                width: 280px;
                padding: 10px;
                border: none;
                border-radius: 5px;
            }
    
            button.send-button {
                width: 35%;
                padding: 10px;
                background-color: black;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            #ans{
                width: 350px;
                height: 250px;
                color: white;
                background-color: #444;
                border-radius: 10px;
                text-align: center;
            }
            .menu-container {
            position: fixed;
            top: 0;
            left: -300px; /* Initially hidden */
            width: 250px;
            height: 100vh;
            background-color: #333;
            transition: left 0.3s ease-in-out;
        }

        .menu-button {
            color: white;
            position: fixed;
            top: 35px;
            left: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .menu {
            padding: 20px;
        }

        /* Optional styles for menu links */
        .menu a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
        }
.menu .heading{
    background-color: black;
    color: whitesmoke;
    border-radius: 10px;
    radius: 2px;
}
        /* Show the menu when the button is clicked */
        .menu-button:focus + .menu-container {
            left: 0;
        }
        a:active {
      background-color: transparent;
      outline: none;
    }

/* The switch - the box around the slider */
.switch {
  font-size: 17px;
  position: relative;
  display: inline-block;
  width: 3.5em;
  height: 2em;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
  transition: .4s;
  border-radius: 5px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 1.4em;
  width: 0.1em;
  border-radius: 0px;
  left: 0.3em;
  bottom: 0.3em;
  background-color: white;
  transition: .4s;
}

input:checked + .slider {
  background-color: #171717;
  box-shadow: inset 2px 5px 10px rgb(0, 0, 0);
}

input:checked + .slider:before {
  transform: translateX(2.8em) rotate(360deg);
}

body {
            transition: background-color 0.5s;
        }

body.dark-mode {
    background-color: #333333;
    color: #ffffff;
}

body.dark-mode h1 {
 
                background-color: black;
                color: #999;
                padding: 10px;
                text-align: center;
                font-family: "Times New Roman", sans-serif;
                       
}
body.dark-mode .assistant-message {
                background-color: black;
                color: white;
                text-align: left;
            }
body.dark-mode .chat-box{
                background-color: #444;
                max-height: 400px;
                overflow-y: auto;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 5px;
}
body.dark-mode .chat-container{
                width: 300px;
                margin: 0 auto;
                padding: 10px;
                background-color: #222;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}
body.dark-mode .input-container {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #333;
            }
#clogo {
    position: absolute;
    top: 25px;
    left: 480px;
    height: 70px;
    width: 70px;
    border-radius: 50px;
    z-index: 1; /* Adjust the z-index as needed to overlay on the header */
}
@media only screen and (max-width: 767px) {
    #clogo {
        top: 34px;
        left: 120px; /* Adjust the left value as needed for the desired position */
        height: 55px;
        width: 55px;
    }
}

        </style>




    </head>
    <body>
    <div class="menu-button" tabindex="0">&#9776;</div>
    <div class="menu-container">
        <div class="menu">
            <div class="heading">
                <h2 style="text-align: center;">Chitti AI</h2>
            </div>
            <br>
            <a href="index.php" style="color: white; text-align: center;">Home</a><br>
            <a href="upload.php" style="color: white; text-align: center;">Teach Chitti</a>
            </div>
    </div>
        <div >
        
        <img src="img/chittiai_logo.png" alt="Chittiai Logo" id="clogo">
        </div>
        <div class="header">
            <h1>CHITTI AI</h1>
        </div><br>
        <div class="chat-container">
            <div class="chat-box" id="chatBox">

            <label class="switch">
                <input type="checkbox"  onclick="toggleDarkMode()">
                <span class="slider" ></span>
            </label>

                <div class="message assistant-message">
                    Welcome to Chitti AI !
                </div>
            </div>
            <div class="input-container">
                <form action="" method="post">
                <input type="text" id="userInput" name="question" placeholder="Type your message..."  onkeydown="handleKeyPress(event)">
                <br><br>
                <button class="send-button" onclick="sendMessage()" type="submit" name="submit">Send &#x2794;</button>
                </form>
            </div>
        </div>
       
    
      <center><br><br>
     
<?php
if (isset($_POST['submit'])) {
    session_start();
    require 'connect.php'; // Make sure to include your database connection code

    $question = $_POST['question'];
    $_SESSION['q'] = $question;

    if ($question == NULL) {
        echo "<script>alert('Don't you have any question to ask!')</script>";
        exit();
    }

    // Construct and execute the database query with prepared statement
    $query = "SELECT DISTINCT answer FROM qa WHERE question LIKE ?";
    $stmt = $conn->prepare($query);
    $searchTerm = "%" . $question . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and display the results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display the retrieved data
            echo "<br><br>";
            echo "<div id='ans'>";
            echo "<br>You    : " . $question;
            echo "<br><br>Chitti : " . $row['answer'];
            
            $link = "https://cse.google.com/cse?cx=1192f7b163175499e&q=" . urlencode($question);
            if (strcasecmp($question, 'Who created you') == 0 || strcasecmp($question, 'when was you created') == 0 || strcasecmp($question,'DnDevelops')==0) {
            echo "<br><br><a href='https://dndevelops.42web.io' target='_blank'><button>Know More</button></a>";
            }
            elseif (stripos($question, 'youtube') !== false) {
            echo "<br><br><a href=Fetch.php ><button>YouTube</button></a>";
            }
            elseif (stripos($question, 'insta') !== false) {
            echo "<br><br><a href=fetchi.php ><button>Instagram</button></a>";
            }
            else{
            echo "<br><br><a href=$link target='_blank'><button>Know More</button></a>";
            }
            echo "</div>";
            
            // Display other columns as needed
        }
    } else {
    echo "<div id='ans'>";
    echo "<br>You    : " . $question;
    echo "<br><br>As an AI, I am still learning! :(";
    echo "<br><br><a href='upload.php'><button>Help Me To Learn</button></a>";
    echo "<br><br>OR<br><br>";
    
    $link = "https://cse.google.com/cse?cx=1192f7b163175499e&q=" . urlencode($question);
 if (stripos($question, 'youtube') !== false) {
    // Remove the word 'youtube' from the question
    $cleanedQuestion = str_ireplace('youtube', '', $question);

    // Create the YouTube search link without the word 'youtube'
    $ylink = "https://www.youtube.com/results?search_query=" . urlencode($cleanedQuestion);

    // Display the link with a button
    echo '<a href="' . $ylink . '" target="_blank"><button>YouTube</button></a>';
}

else{
   
    echo "<br><br><a href=$link target='_blank'><button>Try This !</button></a>";     
}
echo "</div>";
}


    // Close the database connection
    $stmt->close();
    $conn->close();
}

?>

<script>
  function toggleDarkMode() {
      const body = document.body;

      // Toggle the class to switch between dark and light mode
      body.classList.toggle('dark-mode');

      // Save the user's preference in local storage
      const isDarkMode = body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', isDarkMode);
  }

  // Function to apply dark mode on page load
  function applyDarkModeOnLoad() {
      const isDarkMode = localStorage.getItem('darkMode') === 'true';
      if (isDarkMode) {
          document.body.classList.add('dark-mode');
      }
  }

  // Call the function to apply dark mode on page load
  applyDarkModeOnLoad();
</script>



    </body>
    </html>
    
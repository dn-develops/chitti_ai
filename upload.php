
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chitti AI Chat</title>
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
                padding: 5px;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
    
            .chat-box {
                max-height: 400px;
                overflow-y: auto;
                padding: 10px;
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
                width: 25%;
                padding: 10px;
                background-color: black;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .menu-container {
            position: fixed;
            top: 0;
            left: -300px; /* Initially hidden */
            width: 300px;
            height: 100vh;
            background-color: #333;
            transition: left 0.3s ease;
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

        <div class="header">
            <h1>CHITTI AI</h1>
        </div><br>
        <div class="chat-container">
            <div class="chat-box" id="chatBox">
                <div class="message assistant-message">
                    Welcome to Chitti AI Q & A area
                </div>
            </div>
            <div class="input-container">
                <form action="upload.php" method="post">
                <input type="text" id="q" name="q" placeholder="Type your question ?"><br><br>
                <input type="text" id="a" name="a" placeholder="Type your answer ..."><br><br>
                <button class="send-button" type="submit" name="submit">submit</button>
                </form>
            </div>
        </div>
        <?php
 
     if (isset($_POST['submit'])) {
        // Get the data from the form
        require 'connect.php';

        $q = $_POST['q'];
        $a = $_POST['a'];

        $sql = "INSERT INTO qa (question,answer) VALUES ('$q', '$a')";
      
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data submitted successfully :)')</script>";
    
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error."')</script>";
        }
        $conn->close();
    }
    
    // Close the connection
    
    ?>
    </body>
    </html>
    
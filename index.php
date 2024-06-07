<!DOCTYPE html>
<html lang="en">
  
<style>

  /* width */
  ::-webkit-scrollbar {
    width: 15px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
  
  c {
  background-color: #000000;
  text-color: #000000;
  }
  
  .chat-messages {
    display: flex;
    flex-direction: column;
  }

  button {
    margin-top: 4px;
    margin-bottom: 4px;
  }

  .message-area {
    margin: none;
    color: white;
  }

  #box2 {
    display: none;
  }

  #checkbox-1:checked ~ #box2 {
    display: inline-block;
  }

  #rules {
    display: none;
  }

  #show_rules:checked ~ #rules {
    display: inline-block;
  }
  
</style>
  
<body>
<button id="Refresh" onclick="window.location.reload();">Refresh</button>
  <button id="Refresh" onclick="localStorage.setItem('name', ''); localStorage.setItem('colour', ''); window.location.reload();">Clear All</button> 
  <button onclick = "window.location.href='https://176e9383-74a8-4b20-9662-126c60b518af-00-1d6tbqwg87mhx.janeway.replit.dev/all_chat.php';"">View All Messages</button>
 Rules<input type="checkbox" name="show_rules" id="show_rules" /><br>
<p name="rules" id="rules">1. Do not talk about self harm or suicide<br>2. Do not use slurs or excessive swearing<br>3. Do not send explicit images</p>
<form action="chat.php" method="GET">
  <div class="user-input">
    
    <input type="text" name="name" id="name" placeholder="Type your name" required size="10" autocomplete="on">
    
    <input type="text" name="message-input" id="message-input" placeholder="Type your message..."required size="20"  autocomplete="off" pattern="^((?!<script>)(?!<script).)*$">
    
    <input type="text" name="colour" id="colour" placeholder="Colour" required size="5" autocomplete="on">

    Send Image<input type="checkbox" name="checkbox-1" id="checkbox-1" />

    <input type="text" placeholder="Pate Website URL" name="box2" id="box2" />
    
    <button id="send" onclick="submitForm();" required>Send</button>
    <script>
      function submitForm() {
        var getName = document.getElementById("name");
        var getColour = document.getElementById("colour");
        localStorage.setItem("name", getName.value);
        localStorage.setItem("colour", getColour.value);
      }
    </script>
    <script>
      let name = localStorage.getItem("name");
      let colour = localStorage.getItem("colour");
      document.getElementById('name').value = name;
      document.getElementById('colour').value = colour;
      if (name == '') {
        document.getElementById('name').value = "Anonymous";
        document.getElementById('colour').value = "black";
      }
    </script>
  </div>
</form>
  
          <div method="get" class="chat-messages">
          <!-- pattern="^((?!nigga)(?!Nigga)(?!paki)(?!Paki)(?!heil hitler)(?!Heil hitler)(?!heil Hitler)(?!Heil Hitler)(?!<)(?!>).)*$"
            title="Please do not use banned words or html script in your message." -->
        </div>

  <?php
    $MSG = fopen("MSG.txt", "r");
    $x = fread($MSG, filesize("MSG.txt"));
    //$y = '<span style="color: #FFFFFF;">';
    //$z = '</span>';
    echo "$x";
    fclose($MSG);

    function loadMSG() {
      ob_end_clean();
      $MSG = fopen("MSG.txt", "r");
      echo fread($MSG, filesize("MSG.txt"));
      fclose($MSG);
    }
  ?>

  
</body>
</html>
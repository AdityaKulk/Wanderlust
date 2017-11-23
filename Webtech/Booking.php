<?php
    //session_start();
?>
<DOCTYPE !html>
    <head>
        <title>Book Now</title>
        <style>
            body{
                background-color: rgba(0,0,0,0.1)
            }
            form{
                color: white;
                font-family: serif;
                font-size: 2em;
            }
            div{
                background-color: rgba(0,0,0,0.5);
                position: relative;
                top: 30px;
            }
            input{
                opacity: 0.6;
                border-radius: 10px;
                font-size: 1em;
                outline: none;
            }
            button{
                border-style: none  ;
                background-color: black;
                color: white;
                position: relative;
                left: 35%;
                font-size: 1em;
                border-radius: 10px;
            }
            button:hover{
                border-style: double;
                color: black;
                background-color: whitesmoke;
                text-shadow: 0.8px 0.8px;
            }
            h1{
                font-size: 5em;
                font-family: serif;
                position: relative;
                top: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Enter Booking Details:</h1>
        <!--<button onclick="logout()">Logout</button>-->
       

        <form action = "logout.php" method="post">
            <input type="submit" name="" value="Logout">
        </form>


        <div style="position:relative;padding-left:15%;padding-bottom:10px;padding-top:20px;">
            <form action="Webtechproject.html">
                Number of guests:  <input type="number" style="width: 100px;"><br><br>
                FirstName:   <input type="text" id="fname" value=""><br><br>
                LastName:   <input type="text" id="lname" value=""><br><br>
                Email:   <input type="email" id="mail" value=""><br><br>
                Journey Start Date:  <input type="date"><br><br>
                Journey End Date  :<input type="date"><br><br>
                Destination:<input type="text" placeholder="Destination" maxlength="40" size="50"><br><br>
                <button type="submit" onclick="alert('Booking Successful')">Submit</button>
            </form>
        </div>
        <script type="text/javascript">
            var fn=document.getElementById("fname");
            fn.setAttribute("value","<?php echo $_SESSION["firstname"]?>");
            var ln=document.getElementById("lname");
            ln.setAttribute("value","<?php echo $_SESSION["lastname"]?>");
            var em=document.getElementById("mail");
            em.setAttribute("value","<?php echo $_SESSION["email"]?>");

        </script>
        
    </body>
</DOCTYPE>
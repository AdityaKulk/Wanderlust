
<DOCTYPE !html>
    <head>
        <title>Sign-Up to WanderLust</title>
        <style>
            .table{
                position: fixed;
                background-color: rgba(0,0,0,0.6);
                font-family: cursive;
                font-size: 2em;
                z-index: 1;
                width: 100%;
                margin-left: -8px;
                margin-top: -10px;
            }
            .dropdown{
                position: relative;
                text-align: center;
                color: whitesmoke;
                font-family: cursive;
                font-size: 1em;
            }
            .dropcontent{
                display: none;
                position:absolute;
                text-align: center;
                color: whitesmoke;
                background-color: rgba(0,0,0,0.6);
                font-family: cursive;
                font-size: 1em;
                width: 100%;
            }
            #button{
                text-align: center;
                color: whitesmoke;
                background-color: transparent;
                padding-bottom: 0px;
                border-style: none;
                font-family: cursive;
                font-size: 1em;
                width: 100%;
            }
            a{
                color: whitesmoke;
                text-decoration-line: none;
            }
            a:hover{
                color: gainsboro;
            }
            button:hover{
                color: gainsboro;
            }
            .dropdown:hover{
                color: gainsboro;
            }
            .dropdown:hover .dropcontent{
                display: block;
                color: gainsboro;
            }
            .button{
                position: relative;
                font-size: 0.8em;
                border-style: hidden;
                background-color: transparent;
                width: 50%;
                top: 20px;
            }
            .button:hover{
                border: solid 2px gainsboro;
                text-shadow: 0.8px 0.8px;
                
            }
            input{
                font-size: 0.8em;
                background-color: rgba(0,0,0,0);
                border:whitesmoke;
                color: white;
            }
            input::-webkit-input-placeholder{
                color:whitesmoke !important;
                opacity: 0.4;
            }
            #name{
                font-family: fantasy;
                color: burlywood;
                font-size: 3.5em;
                position: relative;
                top:60px;
            }
            form{
                position: relative;
                color: white;
            }
            .footer{
                background-color: rgba(0,0,0,0.9);
                position: relative;
                top: 20px;
                font-size: 1em;
                font-family: cursive;
                margin-left: -8px;
                width: 100%;
            }
            body{
                font-family: Tahoma;
                background-color:rgba(0,0,0,0.8);
                background-position: center;
                background-size: cover;
            }
            
        </style>
    </head>
    <body>
        <script>
            function signup(){
                alert("You have successfully created your account");
            }
        </script>
        <table class="table" cellspacing="0" cellpadding="0" width="100%" >
                <tr>
                    <td><button id="button"><a href="Webtechproject.html" >Home</a></button></td>
                    <td>
                        <div class="dropdown">About
                            <div class="dropcontent"><button id="button"><a href="About.html">The WanderLust Way</a></button><br>
                                <!--<div class="dropcontent"><button id="button"><a href="Gallery.html">Past Adventures</a></button></div>-->
                            </div>
                        </div>
                    </td>
                    <td><button id="button"><a href="Signup1.php">Sign Up</a></button></td>
                    <td><button id="button"><a href="Login.html">Login</a></button></td>
                </tr>
            </table>
        <p align="center" id="name">
            WanderLust
        </p>
        <p align="center" style="color:whitesmoke;font-size:2em;position:relative;top:30px;">Help Us Get To Know You Better!</p>
        <div style="padding-left:25%;position:relative;top:50px;font-size:2em;">
            <form method="POST" action="check.php">
                Firstname: <input type="text" name="FirstName" size="20" maxlength="30" placeholder="FirstName">     
                Lastname: <input type="text" name="LastName" size="20" maxlength="30" placeholder="LastName"><br><br>
                <div>
                    Email: <input type="email" name="email" size="30" maxlength="30" placeholder="Email-id"><br><br>
                    Phone: <input type="tel" name="Phone" placeholder="Phone: +91" size="30" maxlength="13"><br><br>
                    Password: <input type="password" name="password" placeholder="Choose a password" maxlength="15" size="30"><br><br>
                    Confirm Password: <input type="password" name="cpassword" placeholder="Confirm password" maxlength="15" size="30"><br><br>
                </div>
                <div style="padding-left:10%;"><button class="button" style="color:burlywood;position:relative;bottom:10px;" type="submit">Sign-Up</button></div>
            </form>

        </div><br><br>
            <footer class="footer">
                <table align="center" caption="Contact us:" style="font-style:fantasy;font-size:1.5em;color:whitesmoke;">
                    <tr>
                        <td>E-mail: <a style="color:whitesmoke;" href="helpdesk@wanderlust.com";>helpdesk@wanderlust.com</a></td>
                    </tr>
                    <tr>
                        <td>Phone: 9482154128</td>
                    </tr>
                </table>
            </footer>
    </body>
</DOCTYPE>


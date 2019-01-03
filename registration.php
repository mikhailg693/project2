<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>

    <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Custom styles here-->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-image: ;
            background-size: ;  
        }

    </style>

</head>

<body style="background-color:white;margin-bottom:30px;">

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!--Logo & Nav-->
    <div class="header" style="background-color:white;margin-bottom:15px;">
        <!--background-image: url(img/mhshsbackground.jpg);-->

        <div class="col-xs-3">
            <a href="index.html">
            <img src="img/mhshslogo.png" style="width:120px;height:75px;padding-top:3px;"></a>
        </div>

        <div class="navbar" id="navbar" style="margin-bottom:15px;margin-left:15px;margin-right:15px;padding-right:20px;padding-top:10px;">
            <ul class="nav navbar-nav navbar-right" style="background-color:white;border:2px solid mediumpurple;background-color:white;border-radius: 15px;">
                <li class="active" style="border-right: 1px solid mediumpurple"><a href="index.html">Home</a></li>
                <li style="border-right: 1px solid mediumpurple"><a href="contact.html" target="_blank">Contact Us</a></li>
                <li style="border-right: 1px solid mediumpurple"><a href="events.html" target="_blank">Events</a></li>
                <li style="border-right: 0px solid mediumpurple"><a href=registration.php target="_blank">Registration</a></li>
                <li style="border-left: 1px solid mediumpurple"><a href="http://www.psal.org/events-and-standings/school-calendar.aspx?schid=03548" target="_blank">Athletics</a></li>
            </ul>
            <!--<img src="img/mhshsbackground.jpg" style="width:1206px">-->
        </div>
    </div>

    <!--School Events-->
    <div class="container">
        <div class="row">
            <div class="col-xs-8 events">
                <div style="border: 5px dashed white;padding:20px;">

                    <h2>Event Registration</h2>
                    <p><span class="error">Note: * required field.</span></p>
                    
                    <form id="myForm" method="post" action="dbprocess.php" enctype ='multipart/form-data'>
                    <div>
                        <label>Full Name<span class="error">*</span><br>
                            <input type="text" name="fullname" placeholder="Ex. John Appleseed" style="border-radius:5px;width:300px">
                            </label>
                    </div><br>
                        
                    <div>
                        <label>Student ID<span class="error">*</span><br>
                            <input type="text" name="studentid" placeholder="Ex. 994466" style="border-radius:5px;width:300px">
                            </label>
                    </div><br>

                    <div>
                        <label>Email Address<span class="error">*</span><br>
                            <input type="text" name="email" placeholder="Ex. john@gmail.com" style="border-radius:5px;width:300px">
                            </label>
                    </div><br>

                    <div>
                        <label>Events<span class="error">*</span><br>
                            <input type="radio" name="events" value="Syracuse"> College Trip at Syracuse University<br>
                            <input type="radio" name="events" value="Lion King"> Lion King Play<br>
                            <input type="radio" name="events" value="Facebook"> Day at Facebook<br>
                            </label>
                    </div><br>

<!--
                    <div>
                        <label style="box-sizing: border-box;">Questions/Concerns<br>
                            <textarea rows="3" cols="18" style="width: 600px;height:200px;border-radius: 5px"> 
                            </textarea>
                            </label>
                    </div>
-->
                    
                    <button style="border-radius:5px;" onclick="submitButton()">Register</button>
<!--                    <input type="submit" name="emailNow" value="Send Email" style="border-radius: 5px">-->

                    </form>
                </div>
            </div>


            <!--Contact Information-->
            <div class="col-xs-4">
                <div style="border: 5px dashed white;text-align:center;padding: 20px;padding-bottom: 68px;">

                    <h2>Contact Information</h2>

                    <p>Telephone: <br>(212)-501-1235</p>
                    <p>Address: <br>Manhattan/Hunter Science High School<br>122 Amsterdam Ave, 5th Floor
                        <br>New York City, NY 10023</p>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <!--Required scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Custom script here-->
    <script>

        function submitButton(){
            alert("Your email was sent successfully!\nThank for contacting Manhattan Hunter Science High School.")
        }

        var form = document.getElementById("myForm");
        form.reset();

    </script>
</body>

<footer class="col-xs-12" style="text-align:center;padding-bottom:30px;padding-top:30px;">
    <p>
        <a/ href="index.html">Home</a> |
            <a/ href="contact.html">Contact</a> |
                <a/ href="events.html">Events</a>
    </p>
    <p>Copyright 2018</p>

</footer>
    
</html>
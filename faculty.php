
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faculty App</title>
    
    <style>
        footer{
    height: 40vh;
    background: black;
    color: white;
    font-family: sans-serif;
    column-count: 3;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-around;
}

footer div{
    width: 350px;
    height: 100%;
}

footer ul{
    list-style: none;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-around;
    width: 300px;
    margin-left: -60px
}

footer ul li a div{
    height: 40px;
    width: 40px;
    background: white;
    border-radius: 50%;
}

footer p{
    font-size: 14px;
    width: 300px;
}

body{
    margin: 0;
    background:  rgb(42,226,243);
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
    padding: 0;
    overflow-x: hidden;
    width: 100%;
}

nav{
    height: 100px;
    width: 100%;
    background: #1e90ff;
    color: black;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-between;

}

nav div#logo{
    height: 100px;
    width: 100px;
    border-radius: 50%;
    background: black;
    transform: scale(0.6);
}

ul{
    width: 50%;
    height: 100px;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-around;
}

ul li{
    list-style: none;
}

ul li a{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;

}
.logodiv{
    height: 100px;
    width: 150px;
    background: black;
    color: white;
    font-size: 30px;
    text-align: center;
    line-height: 100px;
}



#main-wrapper{
    height: 80vh;
    width: 100vw;
    /* margin-left: 100px; */
    background: rgba(255,255,255,0.2);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    /* margin: 100px; */
    /* margin-left: 125px; */
    /* padding: 100px; */
}

#menucontainer{
    height: 80%;
    width: 80%;
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: space-around;
}

#menucontainer a div{
    height: 100px;
    width: 300px;
    background: #1e90ff;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.5);
    text-align: center;
    line-height: 100px;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

#menucontainer a{
    text-decoration: none;
}

footer input[type = "submit"]{
    height:30px;
    width: 100px;
    color: white;
    background:#1e90ff;
    border:none;
    border-radius: 15px;
}
    </style>

</head>
<body>
<nav>
        <div id="logo">
            <img src="#" alt="">
        </div>
        <ul>
            <li><a href="homepage.php">home</a></li>
            <li><a href="faculty.php">faculty</a></li>
            <li><a href="student.php">student</a></li>
            <li><a href="timetale.php">timetable</a></li>
        </ul>
    </nav>
        <section id="main-wrapper">
            <div id="menucontainer">
                <a href="facultyinsert.php"><div>add new faculty data</div></a>
                <a href="facultydelete.php"><div>remove faculty data</div></a>
                <!-- <a href="#"><div>modify faculty data</div></a> -->
                <a href="includes/showfaculty.inc.php"><div>list of faculty</div></a>
                <!-- <a href="#"><div>log out of admin page</div></a> -->
            </div>
        </section>
    <footer>
        <div>
            <h3>Jain collage of enginerring and research</h3>
            <h4>udyambag, Belagavi - 590010</h4>
            <span></span>
        </div>
        <div>
                <h3>Get socialized with us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aliquam dicta optio reprehenderit doloribus accusantium? Fuga alias, et quisquam consectetur repellat, assumenda natus hic cumque veniam quam laudantium eos!</p>
                <ul>
                    <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                    <li><a href="#"><div id="icon">.</div></a></li>
                    <li><a href="#"><div id="icon">.</div></a></li>
                    <li><a href="#"><div id="icon">.</div></a></li>
                </ul>
        </div>
        <div>
                <h4>share your thoughts with us</h4>
                <input type="text" name="sharebox" id="suggestions">
                <input type="submit" id="share">
        </div>
    </footer>
    
</body>
</html>


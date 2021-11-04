<php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>timetable</title>
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
    background:rgb(42,226,243);
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color:black;
    padding: 0;
    overflow-x: hidden;
}

 header{
    height: 100px;
    width: 100%;
    background: #1e90ff;
    color: white;
    font-weight: bold;
    font-size: 16px;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-between;
}

.logodiv{
    height: 100px;
    width: 150px;
    background:black;
    color: white;
    font-size: 20px;
    word-wrap: wrap;
    text-align: center;
    /* line-height: 100px; */
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

main{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-flow: column nowrap;
    align-items: center;
    justify-content: center;
}

table.facultyTT{
    width: 80vh;
    width: 80vw;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: space-around;
    background: rgba(255, 255, 255, 0.2);
    padding-bottom: 100px;
}

table tr{
    width: 100%;
    height: 50px;
}

form{
    height: 500px;
    width: 450px;
    display: flex;
    flex-flow: column nowrap;
    align-items: flex-start;
    justify-content: space-around;
    margin-left: 100px;
}

.slotchange{
    margin-left: 100px;
}

form input{
    width: 400px;
    border: none;
    border-bottom: 3px solid #1e90ff;
    height: 30px;
    background: rgb(255, 255, 255, 0.2);
    color: white;
}

form input[type = "submit"] {
    height: 40px;
    width: 150px;
    background: #1e90ff;
}

footer input[type = "submit"]{
    height:30px;
    width: 100px;
    color: white;
    background: #1e90ff;
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
            <main>
                <table class="facultyTT">
                    <tr>
                        <th><h1>faculty time-table</h1></th>
                    </tr>

                    <tr>
                        <th>weekdays</th>
                        <th>slot-1 (9:15am - 10:15am)</th>
                        <th>slot-2 (10:15am - 11:15am)</th>
                        <th>slot-3 (11:30am - 12:30pm)</th>
                        <th>slot-4 (12:30pm - 1:30pm)</th>
                    </tr>

                    <tr>
                            <th>monday</th>
                            <th>DBMS</th>
                            <th>AI/.NET</th>
                            <th>CN</th>
                            <th>ATC</th>
                        </tr>

                        <tr>
                                <th>tuesday</th>
                                <th>OOMD/AJ</th>
                                <th>AI/.NET</th>
                                <th>DBMS</th>
                                <th>CN</th>
                            </tr>

                            <tr>
                                    <th>wednesday</th>
                                    <th>CN</th>
                                    <th>AI/.NET</th>
                                    <th>OOMD/AJ</th>
                                    <th>MGMT</th>
                                </tr>

                                <tr>
                                        <th>thursday</th>
                                        <th>AI/.NET</th>
                                        <th>ATC</th>
                                        <th>OOMD/AJ</th>
                                        <th>MGMT</th>
                                    </tr>

                                    <tr>
                                            <th>friday</th>
                                            <th>MGMT</th>
                                            <th>OOMD/AJ</th>
                                            <th>CN</th>
                                            <th>ATC</th>
                                        </tr>

                                        <tr>
                                                <th>saturday</th>
                                                <th>MGMT</th>
                                                <th>ATC</th>
                                                <th>DBMS</th>
                                                <th>DBMS</th>
                                            </tr>
                </table>
            </main>
           
            <footer>
                    <div>
                        <h3>S.G.Balekundri Institute of Technology</h3>
                        <h4>Shivbasava Nagar, Belagavi - 590010</h4>
                        <span></span>
                    </div>
                    <div>
                            <h3>Get socialized with us</h3>
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aliquam dicta optio reprehenderit doloribus accusantium? Fuga alias, et quisquam consectetur repellat, assumenda natus hic cumque veniam quam laudantium eos!</p>
                            <ul>
                                <li><a href="#"><div id="icon">.</div></a></li>
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

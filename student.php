<php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student details</title>

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
    margin-top: 100px;
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
    background: black;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
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
    background: black;
    color: white;
    font-size: 30px;
    text-align: center;
    line-height: 100px;
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
#main-wrapper{
    height: 80vh;
    width: 80vw;
    /* margin-left: 100px; */
    background: rgb(20,216,223);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 100px;
    margin-left: 125px;
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
    /* line-height: 100px; */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

#menucontainer a{
    text-decoration: none;
}

.studentmarksform{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}

.studentmarksform h1{
    font-size: 30px;
    text-transform: uppercase;
    padding: 20px;
}

.studentmarksform table.studentdata{
    height: 80%;
    width: 80%;
    background: rgb(20, 216, 223);
}

.studentmarksform table.studentdata input{
    height: 30px;
    width: 200px;
    background: black;
    color: white;
    border: none;
}

.studentmarksform table.studentdata select{
    height: 30px;
    width: 120px;
    background: black;
    color: white;
    border: none;
}

.studentmarksform table.studentdata select option{
    height: 30px;
    width: 120px;
    background: black;
    color: white;
    border: none;
}

.studentmarksform table.studentdata select option:hover{
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
            <section class="studentmarksform">
                <h1>student marksheet.</h1>
                <form action="student__data.php" method="POST">
                <table class="studentdata">
                    <tr>
                        <th>marks for the month:</th>
                        <th>
                            <select id="month">
                                <option>jan</option>
                                <option>feb</option>
                                <option>mar</option>
                                <option>apr</option>
                                <option>may</option>
                                <option>jun</option>
                                <option>jul</option>
                                <option>aug</option>
                                <option>sep</option>
                                <option>oct</option>
                                <option>nov</option>
                                <option>dec</option>
                            </select>
                        </th>
                        <th>faculty incharge:</th>
                        <th><input type="text" name="facultyname" id="facultyincharge"></th>
                    </tr>

                    <tr>
                        <th>student id</th>
                        <th>student USN</th>
                        <th>student name</th>
                        <th>marks</th>
                    </tr>

                    <tr>
                        <th><input type="text" id="studentid"></th>
                        <th><input type="text" id="studentUSN"></th>
                        <th><input type="text" id="studentName"></th>
                        <th><input type="text" id="studentMarks"></th>
                    </tr>

                    
                    <tr>
                            <th><input type="text" id="studentid"></th>
                            <th><input type="text" id="studentUSN"></th>
                            <th><input type="text" id="studentName"></th>
                            <th><input type="text" id="studentMarks"></th>
                        </tr>

                        
                    <tr>
                            <th><input type="text" id="studentid"></th>
                            <th><input type="text" id="studentUSN"></th>
                            <th><input type="text" id="studentName"></th>
                            <th><input type="text" id="studentMarks"></th>
                        </tr>

                        
                    <tr>
                            <th><input type="text" id="studentid"></th>
                            <th><input type="text" id="studentUSN"></th>
                            <th><input type="text" id="studentName"></th>
                            <th><input type="text" id="studentMarks"></th>
                        </tr>

                        
                    <tr>
                            <th><input type="text" id="studentid"></th>
                            <th><input type="text" id="studentUSN"></th>
                            <th><input type="text" id="studentName"></th>
                            <th><input type="text" id="studentMarks"></th>
                        </tr>
                </table>
                </form>
            </section>
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


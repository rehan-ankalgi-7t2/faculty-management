<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete page</title>
    <!-- <link rel="stylesheet" href="css/homepage.css"> -->
    <style>
        body{
            height:100vh;
            width:100%;
            display:flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: center;
            padding:0;
            margin:0;
            color: white;
            background: black;
            font-family: 'Trebuchet MS';
        }

        form{
            height:450px;
            width:300px;
            background: #444;
            border-radius: 10px;
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: space-evenly;
            text-align: center;
        }

        form h1{
            color: #1e90ff;
        }

        form input{
            height:35px;
            border-radius: 35px;
            /* border-bottom-color:#1e90ff; */
            border: 3px solid #1e90ff;
            width: 85%;
            background: black;
            color: white;
        }

        form input::placeholder {
            padding-left: 15px;
            /* color: white; */
        }

        button{
            height: 35px;
            width: 120px;
            background: #1e90ff;
            border: 3px solid #000;
            border-radius: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>delete a faculty data here.</h1>
    <form method="post" class="facultyDATAinsert" action="includes/delete.inc.php">
        <input type="text" name="firstname" placeholder="firstname of the faculty">
        <!-- <input type="text" name="lastname" placeholder="lastname of the faculty"> -->
        <button type="submit" name="DELETEfaculty">remove faculty</button>
    </form>
</body>
</html>   
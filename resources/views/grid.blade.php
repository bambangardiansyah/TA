<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>

    <style>
        html,body{
            margin: 0;
            padding: 0;
            font-size: 25px;
            text-align: center;
            color: pink;
        }

        .container{
            /* width: 800px; */
            margin-top: 70px;
            border: 5px solid red;
            /* box-sizing: border-box; */
            padding: 20px;
            display: grid;
            grid-template-areas: "header header"
                                "aside main"
                                "nav main"
                                "footer footer";
            grid-template-columns: 1fr 4.7fr;                
            grid-template-rows: 1fr 1fr 5.3fr;
      
        }

        header{
            grid-area: header;
            padding: 30px 0;
            background-color: blue;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        aside{
            grid-area: aside;
            padding: 20px 0;
            background-color: green;
            display: flex;
            /* justify-content: center;
            align-items: center; */
        }

        nav{
            grid-area: nav;
            padding: 50px 0;
            background-color: orange;
        }

        main{
            grid-area: main;
            padding: 50px;
            background-color: yellow;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer{
            grid-area: footer;
            padding: 10px 0;
            background-color: brown;
        }

        @media only screen and (min-width: 0px) and (max-width: 591px){
            .container{
                transition: 1s;
                width: 470px;
                grid-template-columns: 1fr 4fr;
            }
        }
        @media only screen and (min-width: 592px) and (max-width: 800px){
            .container{
                transition: 1s;
                width: 570px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
        <h2>The Legend of God of War</h2>
        </header>
        <aside>
            <ul style="text-align: left;">
                <li><a style="text-decoration: none;" href="">Contact Us</a></li>
                <li><a style="text-decoration: none;" href="">About Us</a></li>
                <li><a style="text-decoration: none;" href="">Donate Us</a></li>
            </ul>
        </aside>
        <nav>Navbar</nav>
        <Main>Main</Main>
        <footer>Footer</footer>
    </div>
    
</body>
</html>
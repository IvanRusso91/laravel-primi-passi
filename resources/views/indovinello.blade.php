<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <a href="http://127.0.0.1:8000/"><img src="https://ordernavi.com/wp-content/uploads/2018/10/laravel.png" alt=""></a>
    </header>

        <div class="btn-box">

            <h3>1. {{$domanda_1}}</h3>
            <div class="box">
                <a  class="risposta" href="http://127.0.0.1:8000/primo">La ricchezza</a>
                <a  class="risposta" href="http://127.0.0.1:8000/secondo">Il nulla</a>
                <a  class="risposta" href="http://127.0.0.1:8000/terzo">La fortuna</a>
            </div>

        </div>

        <div class="btn-box">

            <h3>2. {{$domanda_2}}</h3>
            <div class="box">
                <a  class="risposta" href="http://127.0.0.1:8000/primo">La cassaforte</a>
                <a  class="risposta" href="http://127.0.0.1:8000/terzo">Gli orecchini</a>
                <a  class="risposta" href="http://127.0.0.1:8000/secondo">La bara</a>
            </div>

        </div>

        <div class="btn-box">

            <h3>3. {{$domanda_3}}</h3>
            <div class="box">
                <a class="risposta"  href="http://127.0.0.1:8000/secondo">La bandiera</a>
                <a class="risposta"  href="http://127.0.0.1:8000/primo">La mano</a>
                <a class="risposta" href="http://127.0.0.1:8000/terzo">Il sole</a>
            </div>

        </div>
    </main>
</body>
</html>

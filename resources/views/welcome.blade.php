<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: #ffffff;
        }

        h1 {
            color: #a22525;
            font-size: 50px;
            padding-bottom: 30px;
            text-transform: uppercase;
        }

        .relogio {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            border: 8px solid #0e155b;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .relogio::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            background: #000000;
            z-index: 9999;
        }

        .hora, .minutos, .segundos {
            position: absolute;
        }

        .hora,.hr {
            width: 200px;
            height: 200px;
        }

        .minutos,.min {
            width: 230px;
            height: 230px;
        }

        .segundos, .seg {
            width: 250px;
            height: 250px;
        }

        .hr, .min, .seg {
            position: absolute;
            display: flex;
            justify-content: center;
        }

        .hr::before {
            content: "";
            position: absolute;
            width: 7px;
            height: 110px;
            background: #0381ff;
        }

        .min::before {
            content: "";
            position: absolute;
            width: 4px;
            height: 125px;
            background: #0381ff;
        }

        .seg::before {
            content: "";
            position: absolute;
            width: 2px;
            height: 120px;
            background: #49d0dc;
        }

        #relogio-ditital {
            background: #fff;
            height: 150px;
            width: 00px;
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 5rem;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relogio">
        <div class="hora">
            <div id="hr" class="hr"></div>
        </div>
        <div class="minutos">
           <div id="min" class="min"></div>
        </div>
        <div class="segundos">
           <div id="seg" class="seg"></div>
        </div>
    </div>

    <div id="relogio-ditital">
        <div id="horas"></div>
        <div id="minutos"></div>
        <div id="segundos"></div>
        <div id="ampm"></div>
    </div>
    <form method="post" action="{{ route('cache.timestamp')}}">
        @csrf
        <input id="time" hidden name="hour">
        <button id="btn-sumit" type="submit" > Marcar </button>
    </form>

    <script>

        const hr = document.querySelector('#hr');
        const min = document.querySelector('#min');
        const seg = document.querySelector('#seg');

        setInterval(() => {
            let day = new Date();
            let hh = day.getHours() * 30;
            let mm = day.getMinutes() * 6;
            let ss = day.getSeconds() * 6;

            hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
            min.style.transform = `rotateZ(${mm}deg)`;
            seg.style.transform = `rotateZ(${ss}deg)`;


            // *********************************************
            // Relógio Digital
            const horas = document.querySelector('#horas');
            const minutos = document.querySelector('#minutos');
            const segundos = document.querySelector('#segundos');
            const ampm = document.querySelector('#ampm');
            const time = document.querySelector('#time');

            let h = new Date().getHours();
            let m = new Date().getMinutes();
            let s = new Date().getSeconds();
            let am = "AM";

            // Am ou PM
            if (h > 12) {
                // h = h - 12     .... deixar a hora com só com os 12 números
                am = "PM"
            }

            // Inserir zero
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            horas.innerHTML = h + ":";
            minutos.innerHTML = m + ":";
            segundos.innerHTML = s + "&nbsp";
            ampm.innerHTML = am;

            time.value = h + ":" + m + ":" + s;
        })



    </script>
</body>
</html>

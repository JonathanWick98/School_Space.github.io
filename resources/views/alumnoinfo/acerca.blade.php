<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Alumno/Acerca.css') }}">
    <!-- Estilos para el mini juego de memoria -->
    <style>
        .memory-game {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            max-width: 100%;
            margin: 0 auto;
            justify-content: center;
        }

        .card {
            width: 100px;
            height: 100px;
            background-color: #98ff98; /* Verde menta */
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: transparent; /* Inicialmente el contenido es transparente */
        }

        .card[data-card="1"]::after { content: "Estrella"; }
        .card[data-card="2"]::after { content: "Planeta"; }
        .card[data-card="3"]::after { content: "Galaxia"; }
        .card[data-card="4"]::after { content: "Cometa"; }
        .card[data-card="5"]::after { content: "Agujero Negro"; }
        .card[data-card="6"]::after { content: "Nebulosa"; }

        .card.flipped {
            background-color: #fff;
            color: #000; /* Mostrar el contenido al voltear */
        }

        .card.matched {
            visibility: hidden;
        }

        .btn-replay {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #65a675;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .btn-replay:hover {
            background-color: #67b588;
        }

        /* Estilos adicionales para la sección Acerca de Nosotros */
        .about-section {
            background-color: rgba(20, 19, 37, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            color: #FFFCF7;
        }

        .about-section h2 {
            color: #67b588;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
        </div>
        
        <a href="{{ route('alumnoinfo.inicio') }}">Inicio</a>
        <a href="{{ route('alumnoinfo.expe') }}">Expediente del Alumno</a>
        <a href="{{ route('alumnoinfo.nota') }}">Notas</a>
        <a href="{{ route('alumnoinfo.materia') }}">Materias</a>
        <a href="{{ route('alumnoinfo.ayuda') }}">Ayuda</a>
        <a href="{{ route('alumnoinfo.contacto') }}">Contacto</a>
        <a href="{{ route('alumnoinfo.acerca') }}">Acerca de Nosotros</a>
        <br><br><br><br><br>
      
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>
    
    <!-- Contenedor para el juego de memoria -->
    <div class="container" style="background-color: rgba(20, 19, 37, 0.8); padding: 20px; border-radius: 10px; margin-top: 20px;">
        <div class="memory-game"></div>
        <button class="btn-replay">Volver a Jugar</button>
        <br>
        
        <h2>Acerca de Nosotros</h2>
        <p>En SchoolSpace, nos dedicamos a transformar la educación a través de la tecnología innovadora. Somos un equipo apasionado y comprometido con la creación de soluciones educativas que faciliten la enseñanza y el aprendizaje en la era digital. Nuestra misión es proporcionar una plataforma integral que conecte a estudiantes, profesores y administradores, fomentando una comunidad educativa más efectiva y colaborativa.</p>
        <p>Fundados con la visión de aprovechar el poder de la tecnología para mejorar la educación, combinamos experiencia en desarrollo de software, diseño de interfaces y pedagogía para ofrecer una herramienta intuitiva y poderosa. Nuestro objetivo es hacer que la gestión educativa sea más sencilla y eficiente, permitiendo a los educadores centrarse en lo que realmente importa: la enseñanza y el desarrollo de sus estudiantes.</p>
    </div>

   
    <!-- Script para el juego de memoria -->
    <script>
        const cardsArray = [
            { type: '1' },
            { type: '2' },
            { type: '3' },
            { type: '4' },
            { type: '5' },
            { type: '6' }
        ];

        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        function createCards() {
            const memoryGame = document.querySelector('.memory-game');
            memoryGame.innerHTML = ''; // Limpiar el contenido existente
            const cardElements = [];

            // Duplicar las cartas
            const doubledCardsArray = [...cardsArray, ...cardsArray];
            
            // Mezclar las cartas
            shuffle(doubledCardsArray);

            // Crear los elementos de las cartas
            doubledCardsArray.forEach(card => {
                const cardElement = document.createElement('div');
                cardElement.classList.add('card');
                cardElement.dataset.card = card.type;
                cardElements.push(cardElement);
            });

            // Agregar las cartas al DOM
            cardElements.forEach(card => memoryGame.appendChild(card));
        }

        function setupGame() {
            let selectedCards = [];

            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('click', () => {
                    if (selectedCards.length < 2 && !card.classList.contains('flipped')) {
                        card.classList.add('flipped');
                        selectedCards.push(card);

                        if (selectedCards.length === 2) {
                            setTimeout(() => {
                                if (selectedCards[0].dataset.card !== selectedCards[1].dataset.card) {
                                    selectedCards.forEach(card => card.classList.remove('flipped'));
                                } else {
                                    selectedCards.forEach(card => card.classList.add('matched'));
                                }
                                selectedCards = [];
                            }, 1000);
                        }
                    }
                });
            });
        }

        document.querySelector('.btn-replay').addEventListener('click', () => {
            createCards();
            setupGame();
        });

        // Inicializar el juego al cargar la página
        createCards();
        setupGame();
    </script>
</body>
</html>

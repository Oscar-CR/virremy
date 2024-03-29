<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        .circles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 90%;
            height: 100%;
            z-index: -10 !important;
            overflow-x: hidden;

        }

        .circle {
            position: absolute;
            background-color: #F9D3FF;
            border-radius: 50%;
            z-index: -10 !important;
            overflow-x: hidden;

        }

        body {
            overflow-x: hidden;
        }
    </style>
    <title>Virreymi</title>
</head>
<body>
    <header class="border-b-2 border-gray-300 py-4 sticky top-0 bg-white px-6 md:px-10" style="z-index:50;">
        <div class="flex items-center justify-between">
            <a href="/"> <img src="./img/Vir1.png" alt="" style="width: 150px;"></a>

            <div class="md:hidden">
                <button class="text-gray-800 focus:outline-none" onclick="toggleMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <ul class="hidden md:flex space-x-4 md:mt-4" id="navList">
                <li><a href="/#inicio" class="hover:underline hover:text-purple-500 md:mt-4">Inicio</a></li>
                <li><a href="/#quienes-somos" class="hover:underline hover:text-purple-500">Quienes somos</a></li>
                <li><a href="/#servicios" class="hover:underline hover:text-purple-500">Servicios</a></li>
                <li><a href="/#casos" class="hover:underline hover:text-purple-500">Casos de éxito</a></li>
                <li><a href="/#contacto" class="hover:underline hover:text-purple-500">Contacto</a></li>
            </ul>
        </div>
    </header>

    <script>
        function toggleMenu() {
            var navList = document.getElementById('navList');
            navList.classList.toggle('hidden');
        }
    </script>
    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md h-full" style="height: 100vh !important;">

    <h1 class="text-3xl font-semibold mb-6">Aviso de Privacidad - Virreymi</h1>

    <p class="text-gray-700 mb-6">
        Vireeymi es el responsable del uso y protección de datos personales, mismos que serán utilizados para el desarrollo
        de estrategias de protección de seguros, de blindaje patrimonial y desarrollo de productos enfocados a cubrir las
        necesidades específicas de acuerdo al giro de nuestra empresa.
    </p>

    <h2 class="text-2xl font-semibold mb-4">Datos Personales Recopilados</h2>

    <p class="text-gray-700 mb-6">
        En el proceso de ofrecer nuestros servicios de inversión, Virreymi recopilará y utilizará los siguientes datos
        personales:
    </p>

    <ul class="list-disc pl-6 mb-6">
        <li>Información de contacto (nombre, dirección, correo electrónico, teléfono).</li>
        <li>Información financiera y patrimonial.</li>
        <li>Otros datos necesarios para el análisis y desarrollo de estrategias personalizadas.</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-4">Uso de la Información</h2>

    <p class="text-gray-700 mb-6">
        Los datos personales recopilados, incluyendo nombre, teléfono, y correo electrónico proporcionados a través del
        formulario de cotización, serán utilizados exclusivamente para los fines mencionados anteriormente. Virreymi se
        compromete a mantener la confidencialidad y seguridad de la información proporcionada por nuestros clientes.
    </p>

    <!-- Agrega más secciones según sea necesario -->

    <p class="text-gray-700">
        Fecha de última actualización: <b>10/03/2024</b>
    </p>

    </div>


    <script>
        
        document.addEventListener("DOMContentLoaded", function () {

            const container = document.body;
            const numCircles = 20;
            const circles = [];

            // Función para crear y posicionar los círculos
            function createCircles() {
                for (let i = 0; i < numCircles; i++) {
                    const circle = document.createElement("div");
                    circle.className = "circle";
                    setRandomPosition(circle);
                    setRandomSize(circle);
                    circle.style.zIndex = "-1";
                    container.appendChild(circle);
                    circles.push(circle);
                    container.style.overflowX = "hidden";  
                }
            }
          
            // Función para actualizar la posición de los círculos en el redimensionamiento
            function updateCirclesPosition() {
                circles.forEach(circle => {
                    setRandomPosition(circle);
                });
            }

            // Llamada inicial para crear círculos
            createCircles();

            // Manejar el redimensionamiento de la ventana
            window.addEventListener('resize', function () {
                updateCirclesPosition();
            });
        });

        function setRandomPosition(element) {
            const maxX = document.body.clientWidth;
            const maxY = document.documentElement.scrollHeight;

            const randomX = Math.floor(Math.random() * maxX);
            const randomY = Math.floor(Math.random() * maxY);

            element.style.left = `${randomX}px`;
            element.style.top = `${randomY}px`;
        }

        function setRandomSize(element) {
            const minSize = 10;
            const maxSize = 100;

            const randomSize = Math.floor(Math.random() * (maxSize - minSize + 1)) + minSize;

            element.style.width = `${randomSize}px`;
            element.style.height = `${randomSize}px`;
        }
    </script>

    <style>
        #whatsapp-link {
        z-index: 30;
        margin: 0 80px 0 0;
        }

        @media (max-width: 768px) {
        #whatsapp-link {
            margin: 0 100px 0 0;
        }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <a id="whatsapp-link" href="https://api.whatsapp.com/send?phone=5611875303" class="fixed bottom-4 right-4 p-4 bg-green-500 text-white rounded-full shadow-lg"  style=" z-index:30; @media (max-width: 768px) { margin: 0 120px 0px 0; z-index:30; }">
        <svg width="40px" height="40px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"/>
            <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"/>
            <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"/>
            <defs>
            <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5BD066"/>
            <stop offset="1" stop-color="#27B43E"/>
            </linearGradient>
            </defs>
        </svg>
    </a>

    <footer class="bg-gray-800 text-white p-4 text-center flex justify-between pb-10">
        <p>&copy; Virremy 2024</p>
        <a  href="/aviso-de-privacidad" class="text-gray-300">Aviso de Privacidad</a>
        <p> Desarrollador por <b> OG Digital Solutions®️ </b> </p>

        <div id="default-modal-9" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Póliza de comercio
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_comercio.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-8" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </footer>
</body>
</html>
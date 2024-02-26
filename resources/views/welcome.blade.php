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
    <header class="border-b-2 border-gray-300 py-4 sticky top-0 bg-white px-6 md:px-10">
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
                <li><a href="#inicio" class="hover:underline hover:text-purple-500 md:mt-4">Inicio</a></li>
                <li><a href="#quienes-somos" class="hover:underline hover:text-purple-500">Quienes somos</a></li>
                <li><a href="#servicios" class="hover:underline hover:text-purple-500">Servicios</a></li>
                <li><a href="#casos" class="hover:underline hover:text-purple-500">Casos de éxito</a></li>
                <li><a href="#contacto" class="hover:underline hover:text-purple-500">Contacto</a></li>
            </ul>
        </div>
    </header>

    <script>
        function toggleMenu() {
            var navList = document.getElementById('navList');
            navList.classList.toggle('hidden');
        }
    </script>

    <img src="./img/banner_principal.png" alt="" style="width: 100%; margin-top: -4px; z-index: 20;">

    <div class="flex" id="inicio" style="padding: 5% 5% 5% 5%; z-index:100 !important;">
        <div class="w-full md:w-1/2 p-4">
            <h2 class="font-bold text-lg md:text-2xl lg:text-3xl xl:text-4xl">¿Sabías que solo el 1% de la población cuenta con fondos de inversión?</h2>
        </div>

        <div class="w-full md:w-1/2 p-4">
            <img src="./img/porcentage.png" alt="">
        </div>
    </div>

    <div class="contenedor" id="quienes-somos" style="padding: 5% 15% 5% 15%;">

        <div class="title mb-10">
            <h1 class="text-white font-bold" style="width: 240px; font-size: 30px; background-color: #B500D2;">¿Quiénes somos?</h1>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 p-4">
                <img src="./img/family1.png" alt="">
            </div>
            
            <div class="w-full md:w-1/2 p-4 font-semibold text-lg md:text-xl lg:text-2xl xl:text-3xl">
                <p>Nos dedicamos a ofrecer tranquilidad y protección financiera a nuestros clientes. Nuestra misión es proporcionar soluciones de servicios de calidad que les permitan enfrentar los desafíos de la vida con confianza y seguridad.</p>
            </div>
        </div>
                
    </div>
    <div class="contenedor" id="servicios" style="padding: 5% 15% 5% 15%;">

        <div class="title">
            <h1 class="text-white font-bold mb-10" style="width: 140px; font-size: 30px; background-color: #B500D2;">Servicios</h1>
        </div>
        <div class="contenedor mx-auto mt-8">
            <div class="grid grid-cols-2 gap-8">
                <div>

                    <a data-modal-target="default-modal-1" data-modal-toggle="default-modal-1" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio1.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Gastos médicos mayores
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_gastos_medicos.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-1" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
         
                    <a data-modal-target="default-modal-2" data-modal-toggle="default-modal-2" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio2.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Seguro de vida
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{asset('/img/plan_proteccion.jpg') }} " alt="">

                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-2" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                    <a data-modal-target="default-modal-3" data-modal-toggle="default-modal-3" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio3.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Seguro de hogar
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{asset('img/plan_hogar.jpg') }} " alt="">

                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-3" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                    <a data-modal-target="default-modal-4" data-modal-toggle="default-modal-4" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio4.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-4" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Seguro de auto
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_auto.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-4" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                    <a data-modal-target="default-modal-5" data-modal-toggle="default-modal-5" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio5.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-5" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Retiro
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_retiro.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-5" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div>

                    <a data-modal-target="default-modal-6" data-modal-toggle="default-modal-6" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio6.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-6" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Inversión
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_inversion.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-6" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div>

                    <a data-modal-target="default-modal-7" data-modal-toggle="default-modal-7" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio7.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-7" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Rentas privadas
                                    </h3>
                                  
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <img src="{{ asset('img/plan_residencial.jpg')}}" alt="">
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal-7" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div>
                    <a data-modal-target="default-modal-8" data-modal-toggle="default-modal-8" type="button" class="transition-transform transform hover:scale-110">
                        <img src="{{asset('img/servicio8.png') }} " alt="">
                    </a>

                    <!-- Main modal -->
                    <div id="default-modal-8" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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

                </div>
            </div>
        </div>

        <p class="text-center mt-10 mb-5 text-2xl font-semibold">En asociacion con</p>
        <img class="mx-auto" src="./img/allianz_logo.png" alt="" style="width: 200px;">

    </div>


    <div class="contenedor" style="padding: 5% 15% 5% 15%;">

        <div class="title">
            <h1 class="text-white font-bold mb-10" style="width: 180px; font-size: 30px; background-color: #B500D2;">Contáctanos</h1>
        </div>
        <div class="container mx-auto mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <p class="font-semibold text-center md:text-left" style="font-size: 30px;">¡Ponte en contacto con nuestros expertos, te llevarán de la mano para elegir un plan que se adapte a tus necesidades!.</p>
                
                <div class="text-center md:text-right">
                    <img src="./img/asesor.png" alt="">
                    <p style="color: #4F005B; font-size: 24px;" class="font-semibold mt-5 md:mt-10">Asesor Financiero Certificado</p>
                </div>
                
            </div>
        </div>

    </div>


    <div class="contenedor mx-auto mt-8" id="contacto"  style="padding:  5% 15% 5% 15%;">
  
        <form id="myForm" action="{{ route('formulario') }}" method="POST" class="bg-white p-8 rounded shadow-lg">
            @csrf
        
            <h2 class="text-2xl font-bold mb-6 mb-10" style="color: #4F005B; font-size: 30px;">Ponte en contacto con nosotros</h2>

            <!-- Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600 mb-1">Nombre</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Teléfono -->
            <div class="mb-4">
                <label for="details" class="block text-sm font-semibold text-gray-600 mb-1">Teléfono</label>
                <input type="tel" id="details" name="details" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Correo Electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Tipo de Seguro (Select) -->
            <div class="mb-4">
                <label for="options" class="block text-sm font-semibold text-gray-600 mb-1">Tipo de Seguro</label>
                <select id="options" name="options" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="" disabled selected>Seleccione un tipo de seguro</option>
                    <option value="gastosMedicosMayores">Gastos Médicos Mayores</option>
                    <option value="seguroVida">Seguro de Vida</option>
                    <option value="seguroHogar">Seguro de Hogar</option>
                    <option value="seguroAuto">Seguro de Auto</option>
                    <option value="retiro">Retiro</option>
                    <option value="inversion">Inversión</option>
                    <option value="rentasPrivadas">Rentas Privadas</option>
                    <option value="polizaComercio">Póliza de Comercio</option>
                </select>
            </div>

            <div>
                <button type="submit" class="text-white px-6 py-2 rounded-md hover:bg-purple-500" style="background-color: #4F005B; ">Enviar</button>
            </div>

        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const container = document.body;
            const numCircles = 60;
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
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

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 9999;
            display: none; /* Inicialmente oculto */
        }
        /* Estilo para la imagen */
        #myImage {
            width: 200px;
            margin-top: 80px;
            z-index: 10000; /* Asegura que la imagen esté sobre la capa negra */
        }

        body {
            overflow-x: hidden;
        }

        .watermark {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: white;
            font-size: 12px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
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
        <img class="mx-auto" src="./img/allianz_logo.jpg" alt="" style="width: 200px;">

    </div>


    <div class="contenedor" style="padding: 5% 15% 5% 15%;">

        <div class="title">
            <h1 class="text-white font-bold mb-10" style="width: 180px; font-size: 30px; background-color: #B500D2;">Contáctanos</h1>
        </div>
        <div class="container mx-auto mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col items-center">

                    <p class="font-semibold text-center md:text-left" style="font-size: 30px;">¡Ponte en contacto con nuestros expertos, te llevarán de la mano para elegir un plan que se adapte a tus necesidades!.</p>
                    <img  id="myImage" src="{{asset('img/certificado.png')}}" alt="cetificado" style="width: 200px; margin-top:80px;">
                    <div class="watermark">© Consultora Certificada</div>

                </div>
                <script>
                    // Función para deshabilitar el botón derecho del ratón
                    document.addEventListener('contextmenu', function(e) {
                        e.preventDefault();
                    });
                    // Mostrar la capa negra cuando se detecta un intento de captura de pantalla
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'PrintScreen') {
                            console.log('oculta')
                            document.querySelector('.overlay').style.display = 'block';
                            document.getElementById('myImage').classList.add('hidden'); // Agrega la clase 'hidden' para ocultar la imagen
                        }
                    });
                    
                </script>
                <div class="text-center md:text-center">
                    <img src="./img/asesor.png" alt="">
                    <p style="color: #4F005B; font-size: 24px;" class="font-semibold mt-5 md:mt-2">Vianey Oceguera Zepeda</p>
                    <p style="color: #4F005B; font-size: 16px;" class="font-semibold mt-5 md:mt-2"><a href="{{ asset('img/asesor.pdf')}}" target="__blank">Asesor Financiero Certificado</a> </p>
                    <p style="color: #4F005B; font-size: 16px;" class="font-semibold mt-5 md:mt-2">56 1187 5303 vireemy@ogdigitalsolutions.com.mx</p>
                </div>
                
            </div>
        </div>
    </div>

    <div id="testimonial-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="max-w-screen-md mx-auto text-center">
                    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <blockquote>
                        <p class="text-xl italic font-medium text-gray-900 text-black">"María, una cliente de largo plazo, experimentó un evento desafortunado cuando su casa fue dañada por un incendio. Gracias a la rápida respuesta y el apoyo de nuestro equipo, María pudo presentar una reclamación y recibir una compensación justa para reconstruir su hogar. Nuestra póliza de seguro del hogar no solo la protegió económicamente, sino que también le brindó paz mental en un momento difícil."</p>
                    </blockquote>
                </figure>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="max-w-screen-md mx-auto text-center">
                    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <blockquote>
                        <p class="text-xl italic font-medium text-gray-900 text-black">"Javier y Carla, una pareja que se acercaba a la jubilación, recurrieron a nosotros en busca de ayuda para planificar su retiro. Trabajamos juntos para establecer un plan financiero sólido que les permitió jubilarse cómodamente y cumplir con sus metas de viaje y tiempo libre. Hoy en día, disfrutan de una jubilación feliz y sin preocupaciones."</p>
                    </blockquote>
                </figure>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="max-w-screen-md mx-auto text-center">
                    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <blockquote>
                        <p class="text-xl italic font-medium text-gray-900 text-black">"Roberto, un hombre que se acerca a la jubilación, utilizó nuestros servicios de planificación financiera para asegurarse de que su retiro fuera tranquilo. Con un plan de jubilación bien estructurado, Roberto tiene la seguridad de que podrá disfrutar de su jubilación con el estilo de vida que siempre soñó, sin preocupaciones financieras."</p>
                    </blockquote>
                </figure>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <figure class="max-w-screen-md mx-auto text-center">
                    <<svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <blockquote>
                        <p class="text-xl italic font-medium text-gray-900 text-black">"Luis, un dueño de un pequeño negocio, se benefició de nuestro seguro de ingresos para empresarios cuando su empresa tuvo que cerrar temporalmente debido a una situación inesperada. La póliza le proporcionó un flujo de ingresos que le permitió mantener sus operaciones y evitar dificultades financieras durante el cierre temporal."</p>
                    </blockquote>
                </figure>
            </div>
        
        </div>


        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Testimonio 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Testimonio 2" data-carousel-slide-to="1"></button>
        
        </div>

        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        
        </button>

        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        
        </button>
    </div>


    <div class="contenedor mx-auto mt-8" id="contacto"  style="padding:  5% 15% 5% 15%;">
  
        <form id="myForm" action="{{ route('formulario') }}" method="POST" class="bg-white p-8 rounded shadow-lg">
            @csrf
        
            <h2 class="text-2xl font-bold mb-6 mb-10" style="color: #4F005B; font-size: 30px;">Cotizar</h2>

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
                    <option value="Gastos Medicos Mayores">Gastos Médicos Mayores</option>
                    <option value="Seguro de Vida">Seguro de Vida</option>
                    <option value="Seguro de Hogar">Seguro de Hogar</option>
                    <option value="Seguro de Auto">Seguro de Auto</option>
                    <option value="Retiro">Retiro</option>
                    <option value="Inversion">Inversión</option>
                    <option value="Rentas Privadas">Rentas Privadas</option>
                    <option value="Poliza de Comercio">Póliza de Comercio</option>
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
            const numCircles = 30;
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

    <footer class="bg-gray-800 text-white p-4 text-center flex flex-col md:flex-row md:justify-between md:items-center pb-10">
        <p>&copy; Virremy 2024</p>
        <a href="{{ route('privacidad')}}" class="text-gray-300">Aviso de Privacidad</a>
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <style>
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }

            .animate-fade-in {
                animation: fade-in 1s ease-in-out;
            }
            
        </style>
        <!-- Encabezado Sticky -->
        <header class="fixed top-0 left-0 right-0 z-50  w-full  text-white p-4 flex justify-between items-center bg-black bg-opacity-50">
            <!-- Sección Izquierda -->
            <div class="left-section">
                <a href="#" class="text-3xl font-bold">ViRrEmy</a>
                <p>Soluciones Financieras para tu Patrimonio </p>
            </div>
            <!-- Sección Derecha -->
            <div class="right-section">
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#inicio" class="hover:underline">Inicio</a></li>
                        <li><a href="#acerca-de" class="hover:underline">Acerca de</a></li>
                        <li><a href="#servicios" class="hover:underline">Servicios</a></li>
                        <li><a href="#exito" class="hover:underline">Casos de éxito</a></li>
                        <li><a href="#contacto" class="hover:underline">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>

       <!--  <div>
            <img src="{{ asset('/img/banner.png') }}" alt="img" class="w-full" />

            <div class="absolute bottom-40 left-40 bg-opacity-50 text-white p-2 font-bold  animate-fade-in text-8xl" >
                <h1>Soluciones Financieras
                    <br> para tu Patrimonio
                </h1>
                
            </div>
        </div> -->

        <div id="inicio">
            <video class="inset-0 w-full object-cover" autoplay loop muted style="height: 100vh;">
                <source src="{{ asset('/video/nightcity.mp4') }}" type="video/mp4">
    
            </video>

            <div class="absolute pl-20 -mt-80 bg-opacity-50 text-white p-2 font-bold  animate-fade-in text-8xl"  >
                <h1>Soluciones Financieras
                    <br> para tu Patrimonio
                </h1>
                
            </div>

        </div>

        <div  id="acerca-de" class="w-full bg-neutral-800 " style="height: 100vh;">

            <div class="flex items-center justify-start">
            <div class="w-1/2 p-4 ">
                <h2 class="text-white text-6xl font-bold mb-20 pl-20 animate-fade-in">¿Quienes somos?</h2>
                <p class="text-white text-3xl mb-5 pl-20 pr-20 animate-fade-in">Nos dedicamos a ofrecer tranquilidad y protección financiera a nuestros clientes.</p>
                <p class="text-white text-3xl mb-5 pl-20 pr-20 animate-fade-in">Nuestra misión es proporcionar soluciones de servicios de calidad que les permitan enfrentar los desafíos de la vida con confianza y seguridad.</p>
            </div>
                <div class="w-1/2">
                    
                    <img class="w-full" src="{{ asset('/img/family.png')}}" alt="">
                </div>
            </div>
        </div>

        <div id="servicios" class="w-full" style="background-image: url('{{ asset('/img/people.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 900px;">

            <h2 class="text-white text-6xl pl-20 pt-20 font-bold">Nuestros servicios</h2>
            <div class="grid grid-rows-1 grid-cols-3 gap-4" >

            <div class="row-span-1 p-2 text-white">
                <p class="text-3xl pl-20 pt-20">Gastos médicos mayores.</p>
                <p class="text-3xl pl-20 pt-20">Seguro de vida</p>
                <p class="text-3xl pl-20 pt-20">Seguro de hogar</p>
                <p class="text-3xl pl-20 pt-20">Seguro de auto</p>
                
            </div>

            <div class="row-span-1 p-2 text-white">
                <p class="text-3xl pl-20 pt-20">Retiro</p>
                <p class="text-3xl pl-20 pt-20">Inversión</p>
                <p class="text-3xl pl-20 pt-20">Rentas privadas</p>
                <p class="text-3xl pl-20 pt-20">Póliza de comercio</p>
            </div>

            <div class="row-span-1 p-2 text-white mt-20">
                
                <svg xmlns="http://www.w3.org/2000/svg" class="bg-white mr-10 pd rounded-lg px-4" width="141.03mm" height="34.98mm" viewBox="0 0 399.76 99.15"><title>allianz-logo</title><path d="M36.43,52.48H22.78l7.27-23.72ZM15.7,78.62,20.36,63H38.75l4.36,15.58h17L43.22,19.18c-1-3.51-3.1-5.13-6.79-5.13H12.32v5.61h2c2.52,0,3.88,1,3.88,2.91,0,1.27-.28,2.33-1.28,5.22L0,78.62Z" fill="#003781"/><path d="M79.78,78.62V19c0-3.11-1.82-4.95-4.83-4.95H60v5.61h1c2.51,0,3.58,1.07,3.58,3.61V78.62Z" fill="#003781"/><path d="M105.62,78.62V19c0-3.11-1.85-4.95-4.84-4.95H85.88v5.61h1c2.52,0,3.59,1.07,3.59,3.61V78.62Z" fill="#003781"/><path d="M132.13,19.94c0-4.33-3.21-7-8.71-7s-8.73,2.62-8.73,7,3.31,7,8.73,7,8.71-2.6,8.71-7m-.29,58.68V35.16c0-3.1-1.84-4.93-4.85-4.93H112.28v5.5h.87c2.51,0,3.58,1.16,3.58,3.68V78.62Z" fill="#003781"/><path d="M165.12,55.38v9.41C162.59,67.4,159.51,69,156.9,69s-3.68-1.34-3.68-5,.76-5.21,3.48-6.26a38.66,38.66,0,0,1,8.42-2.36m-20.44-11.3a36.51,36.51,0,0,1,14.91-3.78c4.08,0,5.53,1.45,5.53,5.68v1.08c-6.19,1-8.13,1.38-11.62,2.15A34.7,34.7,0,0,0,147.78,51c-6.11,2.45-9,7.17-9,14.42,0,9.2,4,13.64,12.19,13.64a21.94,21.94,0,0,0,8.14-1.53,27.07,27.07,0,0,0,6.49-4.16v.68c0,3,1.54,4.53,4.55,4.53H184V73.41h-.68c-2.61,0-3.57-1.17-3.57-4.26V46.1c0-12.29-4.27-16.57-16.58-16.57a51.9,51.9,0,0,0-11.59,1.37,38.84,38.84,0,0,0-10.27,3.88Z" fill="#003781"/><path d="M206.05,78.62V45.9c2.53-2.81,5.13-4.08,8.13-4.08,3.21,0,4,1.27,4,6.14V78.62h15.1V45.72c0-7.66-.55-10.08-3-12.68-2-2.25-5.13-3.39-9.12-3.39-5.91,0-10.07,1.83-15.66,7.06V34.78c0-3-1.57-4.55-4.66-4.55H186.49v5.5h.87c2.51,0,3.59,1.16,3.59,3.68V78.62Z" fill="#003781"/><path d="M278.07,68.46H257l20.15-28.25v-10H245.55c-3.58,0-5.23,1.64-5.23,5.23v8.8h5.61v-.86c0-2.23,1.16-3.29,3.57-3.29h10.86L240,68.66v10h38Z" fill="#003781"/><path d="M357.34,77.39V22.68c0-4.36-1.55-5.83-5.78-5.83H338.75V23h.77c2.92,0,3.49.66,3.49,4.18V77.39Zm6.32,0h14.22V34.78c0-4.28-1.65-5.82-5.82-5.82h-8.4Zm-26.93,0V29H328.3c-4.17,0-5.8,1.54-5.8,5.82V77.39Zm54.61-27.81c0,24.11-17.34,41.64-41.15,41.64S309,73.69,309,49.58,326.37,7.94,350.19,7.94s41.15,17.63,41.15,41.64m8.42,0C399.76,21.23,378.55,0,350.19,0S300.6,21.23,300.6,49.58s21.21,49.57,49.59,49.57S399.76,78,399.76,49.58" fill="#003781"/></svg>
               
                <p class="pt-12 text-xl  mr-10">En asociación con Allianz, líder mundial en administración de activos, te ofrecemos una oportunidad única para hacer crecer tu patrimonio y asegurar un mañana más próspero. No importa cuáles sean tus objetivos financieros, estamos aquí para ayudarte a alcanzarlos.</p>
            </div>
            </div>
           

        </div>


        <div id="exito" class="w-full bg-neutral-800 h-auto">

            <h2 class="text-white text-6xl pl-20 pt-20 font-bold mb-20">Casos de éxito</h2>
        
            <div class="w-full overflow-x-auto  pb-20">
                <div class="grid grid-cols-2 gap-10 pl-20 pr-20 ">

                    <div class="w-full bg-neutral-700 p-4 rounded-lg shadow-lg px-10 py-10">
                        <div class="flex">
                            <div class="w-1/2 rounded-lg shadow-lg">
                                <img class="w-full" src="{{asset('/img/people1.png')}}" alt="">
                            </div>
                            <div class="w-1/2 rounded-lg shadow-lg text-white pl-8 text-xl">
                                María, una cliente de largo plazo, experimentó un evento desafortunado cuando su casa fue dañada por un incendio. Gracias a la rápida respuesta y el apoyo de nuestro equipo, María pudo presentar una reclamación y recibir una compensación justa para reconstruir su hogar. Nuestra póliza de seguro del hogar no solo la protegió económicamente, sino que también le brindó paz mental en un momento difícil.
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-neutral-700 p-4 rounded-lg shadow-lg px-10 py-10">
                        <div class="flex">
                            <div class="w-1/2 rounded-lg shadow-lg">
                                <img src="{{asset('/img/people2.png')}}" alt="persona">
                            </div>
                            <div class="w-1/2 rounded-lg shadow-lg text-white pl-8 text-xl">
                                Javier y Carla, una pareja que se acercaba a la jubilación, recurrieron a a nosotros en busca de ayuda para planificar su retiro. Trabajamos juntos para establecer un plan financiero sólido que les permitió jubilarse cómodamente y cumplir con sus metas de viaje y tiempo libre. Hoy en día, disfrutan de una jubilación feliz y sin preocupaciones.
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-neutral-700 p-4 rounded-lg shadow-lg px-10 py-10">
                        <div class="flex">
                            <div class="w-1/2 rounded-lg shadow-lg">
                                <img class="rounded h-full w-full object-cover"  src="{{asset('/img/people3.jpg')}}" alt="persona">
                            </div>
                            <div class="w-1/2 rounded-lg shadow-lg text-white pl-8 text-xl">
                                Roberto, un hombre que se acerca a la jubilación, utilizó nuestros servicios de planificación financiera para asegurarse de que su retiro fuera tranquilo. Con un plan de jubilación bien estructurado, Roberto tiene la seguridad de que podrá disfrutar de su jubilación con el estilo de vida que siempre soñó, sin preocupaciones financieras.
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-neutral-700 p-4 rounded-lg shadow-lg px-10 py-10">
                    <div class="flex">
                            <div class="w-1/2 rounded shadow-lg">
                                <img class="rounded-lg h-full w-full object-cover" src="{{asset('/img/people4.jpg')}}" alt="persona">
                            </div>
                            <div class="w-1/2 shadow-lg text-white pl-8 text-xl">
                                Luis, un dueño de un pequeño negocio, se benefició de nuestro seguro de ingresos para empresarios cuando su empresa tuvo que cerrar temporalmente debido a una situación inesperada. La póliza le proporcionó un flujo de ingresos que le permitió mantener sus operaciones y evitar dificultades financieras durante el cierre temporal.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="contacto" class="w-full bg-neutral-800 h-auto">

            <h2 class="text-white text-6xl pl-20 pt-20 font-bold mb-20">¡Agenda una cita con nosotros!</h2>
        
            <div class="w-full overflow-x-auto pb-20">
                <div class="grid grid-cols-2 gap-10 pl-20 pr-20 ">

                    <div class="w-full">
                        <form method="POST" action="{{ route('formulario') }}" class="p-4">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-white text-sm font-bold mb-2">Nombre:</label>
                                <input type="text" name="name" id="correo" class="w-full px-4 py-2 border rounded-lg">
                            </div>


                            <div class="mb-4">
                                <label for="correo" class="block text-white text-sm font-bold mb-2">Correo:</label>
                                <input type="email" name="correo" id="correo" class="w-full px-4 py-2 border rounded-lg">
                            </div>
                            
                            <div class="mb-4">
                                <label for="opciones" class="block text-white text-sm font-bold mb-2">Selecciona una opción:</label>
                                <select name="opciones" id="opciones" class="w-full px-4 py-2 border rounded-lg">
                                    <option value="Gastos médicos mayores">Gastos médicos mayores</option>
                                    <option value="Seguro de vida">Seguro de vida</option>
                                    <option value="Seguro de hogar">Seguro de hogar</option>
                                    <option value="Seguro de auto">Seguro de auto</option>
                                    <option value="Retiro">Retiro</option>
                                    <option value="Inversión">Inversión</option>
                                    <option value="Rentas privadas">Rentas privadas</option>
                                    <option value="Póliza de comercio">Póliza de comercio</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Enviar</button>
                            </div>
                        </form>
                    </div>

                    <div class="w-full flex-col items-center">
                        <img style="width: 350px; height: 450px; object-fit: cover;" src="{{ asset('/img/vianey.png') }}" alt="persona" class="mx-auto">
                        <p class="text-center text-white text-2xl font-bold mt-2">Vianey Oceguera Zepeda</p>
                        <p class="text-center text-gray-300 text-xl font-semibold mt-2">Asesora inmobiliaria</p>
                        <p class="text-center text-gray-300 text-xl mt-2">55 5555 5555  mail@mail.com</p>
                    </div>


                    
                </div>
            </div>
        </div>


            

    </body>
</html>
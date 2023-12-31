<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>


        <title>Virremy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

    </head>
    <body >
    <script>
       function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            console.log('Mobile menu toggled');
        }
    </script>
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

            @media (max-width: 768px) {
                .action-text1{
                    padding-left: 20px;
                }
                .header-text{
                    margin-top: -30px;
                    font-size: 40px;
                }

                .subtitle1{
                    font-size: 20px;
                }


                .content1{
                    font-size: 16px;
                    
                }

                .content2{
                    font-size: 12px;
                    
                }
            }

           
            @media (max-width: 480px) {
                
            }
            
        </style>
        <!-- Encabezado Sticky -->
        <header class="fixed top-0 left-0 right-0 z-50 w-full text-white p-4 flex justify-between items-center bg-black bg-opacity-50">
            <!-- Sección Izquierda -->
            <div class="left-section">
                <a href="#" class="text-3xl font-bold">ViRrEmy</a>
                <p class="hidden md:block">Soluciones Financieras para tu Patrimonio</p>
            </div>
            <!-- Sección Derecha -->
            <div class="right-section">
                <nav class="md:hidden">
                    <button id="menu-toggle" class="text-white text-3xl" onclick="toggleMobileMenu()">
                        &#9776;
                    </button>
                </nav>
                <nav class="hidden md:block">
                    <ul class="flex space-x-4">
                        <li><a href="#inicio" class="hover:underline text-2xl ">Inicio</a></li>
                        <li><a href="#acerca-de" class="hover:underline text-2xl">Acerca de</a></li>
                        <li><a href="#servicios" class="hover:underline text-2xl">Servicios</a></li>
                        <li><a href="#exito" class="hover:underline text-2xl">Casos de éxito</a></li>
                        <li><a href="#contacto" class="hover:underline text-2xl">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <nav id="mobile-menu" class=" hidden md:hidden fixed z-50  bg-black bg-opacity-50 w-full" style="margin-top: 68px;">
            <!-- Contenido del menú en dispositivos móviles -->
            <ul class="text-white text-2xl p-4 space-y-4">
                <li><a href="#inicio" class="hover:underline">Inicio</a></li>
                <li><a href="#acerca-de" class="hover:underline">Acerca de</a></li>
                <li><a href="#servicios" class="hover:underline">Servicios</a></li>
                <li><a href="#exito" class="hover:underline">Casos de éxito</a></li>
                <li><a href="#contacto" class="hover:underline">Contacto</a></li>
            </ul>
        </nav>

    

       <!--  <div>
            <img src="{{ asset('/img/banner.png') }}" alt="img" class="w-full" />

            <div class="absolute bottom-40 left-40 bg-opacity-50 text-white p-2 font-bold  animate-fade-in text-8xl" >
                <h1>Soluciones Financieras
                    <br> para tu Patrimonio
                </h1>
                
            </div>
        </div> -->

        <div id="inicio" class="w-full">
            <video class="inset-0 w-full object-cover" autoplay loop muted style=" height: 100vh;">
                <source src="{{ asset('/video/nightcity.mp4') }}" type="video/mp4" class="w-full">
    
            </video>

            <div class="absolute pl-20 -mt-80 bg-opacity-50 text-white p-2 font-bold  animate-fade-in text-8xl action-text1"  >
                <h1 class="header-text">Soluciones Financieras
                    <br> para tu Patrimonio
                </h1>
                
            </div>

        </div>

        <div id="acerca-de" class="w-full bg-neutral-800" style="height: auto;">
            <div class="flex flex-col md:flex-row items-center justify-start">
                <div class="w-full md:w-1/2">
                    <h2 class="text-white text-5xl md:text-6xl font-bold mb-10 pl-4 md:pl-20 animate-fade-in pt-10  subtitle1">¿Quiénes somos?</h2>
                    <p class="text-white text-2xl md:text-3xl mb-5 pl-4 md:pl-20 pr-4 md:pr-20 animate-fade-in content1">Nos dedicamos a ofrecer tranquilidad y protección financiera a nuestros clientes.</p>
                    <p class="text-white text-2xl md:text-3xl mb-5 pl-4 md:pl-20 pr-4 md:pr-20 animate-fade-in content1">Nuestra misión es proporcionar soluciones de servicios de calidad que les permitan enfrentar los desafíos de la vida con confianza y seguridad.</p>
                </div>
                <div class="w-full md:w-1/2 ">
                    <img class="w-full" src="{{ asset('/img/family.png')}}" alt="">
                </div>
            </div>
        </div>

        <div id="servicios" class="w-full bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('{{ asset('/img/people.png') }}'); height: auto;">
            <h2 class="text-white text-5xl md:text-6xl pl-4 md:pl-20 pt-6 md:pt-20 font-bold subtitle1 pb-4">Nuestros servicios</h2>
            <div class="grid grid-rows-1 grid-cols-1 md:grid-cols-3 gap-4 md:mt-2" >
                <div class="row-span-1 text-white">
                    <p class="text-2xl md:text-3xl pl-4 md:pl-20 pt-6 content1">Gastos médicos mayores.</p>
                    <p class="text-2xl md:text-3xl pl-4 md:pl-20 pt-6 content1">Seguro de vida</p>
                    <p class="text-2xl md:text-3xl pl-4 md:pl-20 pt-6 content1">Seguro de hogar</p>
                    <p class="text-2xl md:text-3xl pl-4 md:pl-20 pt-6 content1">Seguro de auto</p>
                </div>
                <div class="row-span-1 text-white">
                    <p class="text-2xl md:text-3xl pl-4 pt-6 content1">Retiro</p>
                    <p class="text-2xl md:text-3xl pl-4  pt-6 content1">Inversión</p>
                    <p class="text-2xl md:text-3xl pl-4  pt-6 content1">Rentas privadas</p>
                    <p class="text-2xl md:text-3xl pl-4  pt-6 content1">Póliza de comercio</p>
                </div>
                <div class="row-span-1 text-white">
                    <div class="pl-4 pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="bg-white  mr-10 pd rounded-lg px-4" width="120" height="40" viewBox="0 0 399.76 99.15"><title>allianz-logo</title><path d="M36.43,52.48H22.78l7.27-23.72ZM15.7,78.62,20.36,63H38.75l4.36,15.58h17L43.22,19.18c-1-3.51-3.1-5.13-6.79-5.13H12.32v5.61h2c2.52,0,3.88,1,3.88,2.91,0,1.27-.28,2.33-1.28,5.22L0,78.62Z" fill="#003781"/><path d="M79.78,78.62V19c0-3.11-1.82-4.95-4.83-4.95H60v5.61h1c2.51,0,3.58,1.07,3.58,3.61V78.62Z" fill="#003781"/><path d="M105.62,78.62V19c0-3.11-1.85-4.95-4.84-4.95H85.88v5.61h1c2.52,0,3.59,1.07,3.59,3.61V78.62Z" fill="#003781"/><path d="M132.13,19.94c0-4.33-3.21-7-8.71-7s-8.73,2.62-8.73,7,3.31,7,8.73,7,8.71-2.6,8.71-7m-.29,58.68V35.16c0-3.1-1.84-4.93-4.85-4.93H112.28v5.5h.87c2.51,0,3.58,1.16,3.58,3.68V78.62Z" fill="#003781"/><path d="M165.12,55.38v9.41C162.59,67.4,159.51,69,156.9,69s-3.68-1.34-3.68-5,.76-5.21,3.48-6.26a38.66,38.66,0,0,1,8.42-2.36m-20.44-11.3a36.51,36.51,0,0,1,14.91-3.78c4.08,0,5.53,1.45,5.53,5.68v1.08c-6.19,1-8.13,1.38-11.62,2.15A34.7,34.7,0,0,0,147.78,51c-6.11,2.45-9,7.17-9,14.42,0,9.2,4,13.64,12.19,13.64a21.94,21.94,0,0,0,8.14-1.53,27.07,27.07,0,0,0,6.49-4.16v.68c0,3,1.54,4.53,4.55,4.53H184V73.41h-.68c-2.61,0-3.57-1.17-3.57-4.26V46.1c0-12.29-4.27-16.57-16.58-16.57a51.9,51.9,0,0,0-11.59,1.37,38.84,38.84,0,0,0-10.27,3.88Z" fill="#003781"/><path d="M206.05,78.62V45.9c2.53-2.81,5.13-4.08,8.13-4.08,3.21,0,4,1.27,4,6.14V78.62h15.1V45.72c0-7.66-.55-10.08-3-12.68-2-2.25-5.13-3.39-9.12-3.39-5.91,0-10.07,1.83-15.66,7.06V34.78c0-3-1.57-4.55-4.66-4.55H186.49v5.5h.87c2.51,0,3.59,1.16,3.59,3.68V78.62Z" fill="#003781"/><path d="M278.07,68.46H257l20.15-28.25v-10H245.55c-3.58,0-5.23,1.64-5.23,5.23v8.8h5.61v-.86c0-2.23,1.16-3.29,3.57-3.29h10.86L240,68.66v10h38Z" fill="#003781"/><path d="M357.34,77.39V22.68c0-4.36-1.55-5.83-5.78-5.83H338.75V23h.77c2.92,0,3.49.66,3.49,4.18V77.39Zm6.32,0h14.22V34.78c0-4.28-1.65-5.82-5.82-5.82h-8.4Zm-26.93,0V29H328.3c-4.17,0-5.8,1.54-5.8,5.82V77.39Zm54.61-27.81c0,24.11-17.34,41.64-41.15,41.64S309,73.69,309,49.58,326.37,7.94,350.19,7.94s41.15,17.63,41.15,41.64m8.42,0C399.76,21.23,378.55,0,350.19,0S300.6,21.23,300.6,49.58s21.21,49.57,49.59,49.57S399.76,78,399.76,49.58" fill="#003781"/></svg>
                    </div>
                    <p class="text-lg md:text-xl pl-4 pr-4 pt-6  pb-60 content1">En asociación con Allianz, líder mundial en administración de activos, te ofrecemos una oportunidad única para hacer crecer tu patrimonio y asegurar un mañana más próspero. No importa cuáles sean tus objetivos financieros, estamos aquí para ayudarte a alcanzarlos.</p>
                </div>
            </div>
        </div>


        <div id="exito" class="w-full bg-neutral-800 h-auto">
            <h2 class="text-white text-5xl md:text-6xl pl-4 md:pl-20 pt-6 md:pt-20 font-bold subtitle1 pb-4">Casos de éxito</h2>
            
            <div class="w-full overflow-x-auto pb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pl-4 md:pl-20 pr-4 md:pr-20">
                    <!-- Primer caso de éxito -->
                    <div class="w-full bg-neutral-700 p-2 md:p-4 rounded-lg shadow-lg px-4 py-4">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 rounded-lg mb-2 md:mb-0">
                                <img class="w-full pr-4" src="{{asset('/img/people1.png')}} " alt="" style="height: 400px; object-fit:cover;">
                            </div>
                            <div class="w-full md:w-1/2 rounded-lg text-white text-xl content2">
                                María, una cliente de largo plazo, experimentó un evento desafortunado cuando su casa fue dañada por un incendio. Gracias a la rápida respuesta y el apoyo de nuestro equipo, María pudo presentar una reclamación y recibir una compensación justa para reconstruir su hogar. Nuestra póliza de seguro del hogar no solo la protegió económicamente, sino que también le brindó paz mental en un momento difícil.
                            </div>
                        </div>
                    </div>

                    <!-- Segundo caso de éxito -->
                    <div class="w-full bg-neutral-700 p-2 md:p-4 rounded-lg shadow-lg px-4 py-4">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 rounded-lg mb-2 md:mb-0">
                                <img src="{{asset('/img/people2.png')}}" alt="persona" class="w-full pr-4" style="height: 400px; object-fit:cover;">
                            </div>
                            <div class="w-full md:w-1/2 rounded-lg text-white text-xl content2">
                                Javier y Carla, una pareja que se acercaba a la jubilación, recurrieron a nosotros en busca de ayuda para planificar su retiro. Trabajamos juntos para establecer un plan financiero sólido que les permitió jubilarse cómodamente y cumplir con sus metas de viaje y tiempo libre. Hoy en día, disfrutan de una jubilación feliz y sin preocupaciones.
                            </div>
                        </div>
                    </div>

                    <!-- Tercer caso de éxito -->
                    <div class="w-full bg-neutral-700 p-2 md:p-4 rounded-lg shadow-lg px-4 py-4">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 rounded-lg mb-2 md:mb-0">
                                <img src="{{asset('/img/people3.jpg')}}" alt="persona" class="rounded h-full w-full object-cover pr-4" style="height: 400px; object-fit:cover;">
                            </div>
                            <div class="w-full md:w-1/2 rounded-lg text-white text-xl content2">
                                Roberto, un hombre que se acerca a la jubilación, utilizó nuestros servicios de planificación financiera para asegurarse de que su retiro fuera tranquilo. Con un plan de jubilación bien estructurado, Roberto tiene la seguridad de que podrá disfrutar de su jubilación con el estilo de vida que siempre soñó, sin preocupaciones financieras.
                            </div>
                        </div>
                    </div>

                    <!-- Cuarto caso de éxito -->
                    <div class="w-full bg-neutral-700 p-2 md:p-4 rounded-lg shadow-lg px-4 py-4">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 rounded-lg mb-2 md:mb-0">
                                <img src="{{asset('/img/people4.jpg')}}" alt="persona" class="rounded-lg h-full w-full object-cover pr-4" style="height: 400px; object-fit:cover;">
                            </div>
                            <div class="w-full md:w-1/2 rounded-lg text-white text-xl content2">
                                Luis, un dueño de un pequeño negocio, se benefició de nuestro seguro de ingresos para empresarios cuando su empresa tuvo que cerrar temporalmente debido a una situación inesperada. La póliza le proporcionó un flujo de ingresos que le permitió mantener sus operaciones y evitar dificultades financieras durante el cierre temporal.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <!--  <div id="contacto" class="w-full bg-neutral-800 h-auto">
            <h2 class="text-white text-5xl md:text-6xl pl-4 md:pl-20 pt-6 md:pt-20 font-bold subtitle1 pb-4">¡Realiza tu cotización!</h2>
            
            <div class="w-full overflow-x-auto pb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pl-4 md:pl-20 pr-4 md:pr-20">
                   
                    <div class="w-full"> 
                        @if (isset($message))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif
                        <form id="myForm" action="{{ route('cotizacion') }}" method="POST">
                            @csrf

                            <p class="text-white text-xl">Por favor, selecciona el servicio para obtener una cotización detallada. Estamos aquí para brindarte información sobre una amplia gama de servicios financieros, desde gastos médicos mayores hasta pólizas de comercio. </p>
                            
                            <p class="text-white text-xl mt-6">Si tienes alguna duda o necesitas asesoramiento adicional, no dudes en ponerte en contacto con nosotros.</p>

                            <select name="options" id="options" class="w-full px-4 py-2 border rounded-lg mt-12">
                                <option value="Gastos médicos mayores">Gastos médicos mayores</option>
                                <option value="Seguro de vida">Seguro de vida</option>
                                <option value="Seguro de hogar">Seguro de hogar</option>
                                <option value="Seguro de auto">Seguro de auto</option>
                                <option value="Retiro">Retiro</option>
                                <option value="Inversión">Inversión</option>
                                <option value="Rentas privadas">Rentas privadas</option>
                                <option value="Póliza de comercio">Póliza de comercio</option>
                            </select>
                            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mt-6">Cotizar</button>
                        </form>
                    </div>

                 
                    <div class="w-full flex-col items-center ">
                        <img style="width: 350px; height: 450px; object-fit: cover;" src="{{ asset('/img/vianey.png') }}" alt="persona" class="mx-auto">
                        <p class="text-center text-white text-2xl font-bold mt-2 content1">Vianey Oceguera Zepeda</p>
                        <p class="text-center text-gray-300 text-xl font-semibold mt-2 content1">Asesora inmobiliaria</p>
                        <p class="text-center text-gray-300 text-xl mt-2 content1">55 5555 5555  mail@mail.com</p>
                    </div>
                </div>
            </div> -->

            <div id="contacto" class="w-full bg-neutral-800 h-auto">
            <h2 class="text-white text-5xl md:text-6xl pl-4 md:pl-20 pt-6 md:pt-20 font-bold subtitle1 pb-4">¡Contáctanos!</h2>
            
            <div class="w-full overflow-x-auto pb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pl-4 md:pl-20 pr-4 md:pr-20">
                   
                    <div class="w-full"> 
                        @if (isset($message))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif

                        <p class="text-white text-xl mt-10">Nuestros asesores expertos te ofrecen un abanico de servicios diseñados específicamente para cubrir tus necesidades individuales. Más que ofrecerte productos, se centran en comprender tus prioridades y proporcionarte un asesoramiento detallado. Resuelve tus dudas y diseña un plan de seguridad que se ajuste perfectamente a tu estilo de vida.</p>
                            
<!--                         <p class="text-white text-xl mt-6">Si tienes alguna duda o necesitas asesoramiento adicional, no dudes en ponerte en contacto con nosotros.</p>
 -->                        


                        <!-- <form id="myForm" action="{{ route('cotizacion') }}" method="POST">
                            @csrf
                            <select name="options" id="options" class="w-full px-4 py-2 border rounded-lg mt-12">
                                <option value="Gastos médicos mayores">Gastos médicos mayores</option>
                                <option value="Seguro de vida">Seguro de vida</option>
                                <option value="Seguro de hogar">Seguro de hogar</option>
                                <option value="Seguro de auto">Seguro de auto</option>
                                <option value="Retiro">Retiro</option>
                                <option value="Inversión">Inversión</option>
                                <option value="Rentas privadas">Rentas privadas</option>
                                <option value="Póliza de comercio">Póliza de comercio</option>
                            </select>
                            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mt-6">Cotizar</button>
                        </form> -->
                    </div>

                 
                    <div class="w-full flex-col items-center ">
                        <img style="width: 350px; height: 450px; object-fit: cover;" src="{{ asset('/img/vianey.png') }}" alt="persona" class="mx-auto">
                        <p class="text-center text-white text-2xl font-bold mt-2 content1">Vianey Oceguera Zepeda</p>
                        <p class="text-center text-gray-300 text-xl font-semibold mt-2 content1">Asesora inmobiliaria</p>
                        <p class="text-center text-gray-300 text-xl mt-2 content1">55 7798 1941  vianey.vireemy@gmail.com</p>
                    </div>
                </div>
            </div>

           <!--  <df-messenger
            intent="WELCOME"
            chat-title="NewAgent"
            agent-id="fd268007-098c-4fa5-ad7a-076de917d1f9"
            language-code="es"
            ></df-messenger> -->

            <a href="https://api.whatsapp.com/send?phone=5577981941" class="fixed bottom-4 right-4 p-4 bg-green-500 text-white rounded-full shadow-lg">
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
        </div>


        
    </body>
</html>

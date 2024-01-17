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
    <body class="bg-stone-800">
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
                <a href="{{ route('index')}}" class="text-3xl font-bold">ViRrEmy</a>
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
                    <!-- <ul class="flex space-x-4">
                        <li><a href="#inicio" class="hover:underline text-2xl ">Inicio</a></li>
                        <li><a href="#acerca-de" class="hover:underline text-2xl">Acerca de</a></li>
                        <li><a href="#servicios" class="hover:underline text-2xl">Servicios</a></li>
                        <li><a href="#exito" class="hover:underline text-2xl">Casos de éxito</a></li>
                        <li><a href="#contacto" class="hover:underline text-2xl">Contacto</a></li>
                    </ul> -->
                </nav>
            </div>
        </header>

        <nav id="mobile-menu" class=" hidden md:hidden fixed z-50  bg-black bg-opacity-50 w-full" style="margin-top: 68px;">
            <!-- Contenido del menú en dispositivos móviles -->
            <!-- <ul class="text-white text-2xl p-4 space-y-4">
                <li><a href="#inicio" class="hover:underline">Inicio</a></li>
                <li><a href="#acerca-de" class="hover:underline">Acerca de</a></li>
                <li><a href="#servicios" class="hover:underline">Servicios</a></li>
                <li><a href="#exito" class="hover:underline">Casos de éxito</a></li>
                <li><a href="#contacto" class="hover:underline">Contacto</a></li>
            </ul> -->
        </nav>   

        <div class="flex justify-center items-center w-full p-12 mt-20">
            <div class="bg-stone-100 p-6 rounded-lg shadow-lg">
                
                <h2 class="text-2xl mb-4 text-black flex justify-center font-bold">Cotización: {{ $cotizacion }}</h2>
                <div class="flex justify-center">

                @switch($cotizacion)
                    @case('OptiMaxxplus')
                        
                        <h3>Hola !</h3>

                        @break

                    @case('OptiMaxxprotección')
                        <div class="flex justify-center">
                            <!-- Columna 1 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Básico de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Vida Básico</p>
                                <p><strong>Inversión Mensual:</strong> $300 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Beneficio por fallecimiento de $200,000 MXN para los beneficiarios designados.</li>
                                    <li>Cobertura por fallecimiento accidental con doble indemnización.</li>
                                    <li>Asistencia funeraria básica incluida.</li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Intermedio de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Vida Plus</p>
                                <p><strong>Inversión Mensual:</strong> $800 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Beneficio por fallecimiento de $500,000 MXN para los beneficiarios designados.</li>
                                    <li>Cobertura ampliada por fallecimiento accidental y por enfermedades terminales.</li>
                                    <li>Asistencia funeraria con mayor cobertura y servicios adicionales.</li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Premium de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Vida Platinum</p>
                                <p><strong>Inversión Mensual:</strong> $2,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Beneficio por fallecimiento de $1,500,000 MXN para los beneficiarios designados.</li>
                                    <li>Cobertura amplia por fallecimiento accidental, enfermedades terminales y discapacidad.</li>
                                    <li>Asistencia funeraria completa y servicios adicionales para la familia.</li>
                                </ul>
                            </div>
                        </div>
                        @break

                    @case('AllianzAuto')

                        <div class="flex justify-center">
                            <!-- Columna 1 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Básico de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Hogar Básico</p>
                                <p><strong>Inversión Anual:</strong> $2,500 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Cobertura básica contra incendios y daños por fenómenos naturales (terremotos, inundaciones, etc.).</li>
                                    <li>Protección limitada contra robo y vandalismo.</li>
                                    <li>Asistencia básica para reparaciones y mantenimiento del hogar.</li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Intermedio de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Hogar Plus</p>
                                <p><strong>Inversión Anual:</strong> $5,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Cobertura ampliada contra incendios, fenómenos naturales y daños estructurales.</li>
                                    <li>Protección extendida contra robo, vandalismo y responsabilidad civil.</li>
                                    <li>Asistencia para reparaciones y servicios de emergencia 24/7.</li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Premium de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Hogar Premium</p>
                                <p><strong>Inversión Anual:</strong> $9,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Cobertura extensa contra daños materiales, robo, vandalismo y responsabilidad civil ampliada.</li>
                                    <li>Asistencia completa para reparaciones y servicios de emergencia, incluyendo pérdida de renta por inhabilitación del hogar.</li>
                                    <li>Protección adicional para bienes valiosos y cobertura especializada.</li>
                                </ul>
                            </div>
                        </div>

                        @break

                    @case('AllianzResidencial')
                        <div class="flex justify-center">
                            <!-- Columna 1 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Básico de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Auto Básico</p>
                                <p><strong>Inversión Anual:</strong> $3,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Responsabilidad civil por daños a terceros con límite de $100,000 MXN.</li>
                                    <li>Cobertura limitada contra robo total del vehículo.</li>
                                    <li>Asistencia en carretera básica.</li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Intermedio de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Auto Plus</p>
                                <p><strong>Inversión Anual:</strong> $7,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Responsabilidad civil ampliada por daños a terceros hasta $300,000 MXN.</li>
                                    <li>Cobertura contra robo total, daños parciales y colisión del vehículo.</li>
                                    <li>Asistencia en carretera extendida y servicio de grúa.</li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Premium de Inversión</h2>
                                <p><strong>Tipo de Seguro:</strong> Seguro de Auto Premium</p>
                                <p><strong>Inversión Anual:</strong> $12,000 MXN</p>
                                <p><strong>Cobertura y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Responsabilidad civil completa por daños a terceros sin límite.</li>
                                    <li>Cobertura ampliada contra robo total, daños parciales, colisión y vandalismo.</li>
                                    <li>Asistencia en carretera completa, auto sustituto y servicios especiales.</li>
                                </ul>
                            </div>
                        </div>
                        @break
                        
                    @default
                        
                @endswitch


                
                    
            </div>
            <form action="{{ route('formulario', ['cotizacion' => $cotizacion]) }}" method="POST">
                @csrf
                <p class="mt-6 font-bold flex justify-center mt-20 text-2xl">¡Contáctanos!</p>

                <div class="w-full p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p>Nombre</p>
                        <input type="text" name="name" placeholder="Ingrese su nombre" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"> 
                    </div>
                    <div>
                        <p>Teléfono</p>
                        <input type="text" name="phone" placeholder="Ingrese su numero de teléfono" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <p>Email</p>
                        <input type="email" name="email" placeholder="Correo electrónico" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-1">Este elemento es requerido</p>
                        @enderror
                    </div>
                    <div>
                    </div>
                </div>

                <button type="submit" class="w-full  bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-md focus:outline-none ml-4">Enviar a mi correo</button>

            </form>
        </div>

        <df-messenger
        intent="WELCOME"
        chat-title="NewAgent"
        agent-id="fd268007-098c-4fa5-ad7a-076de917d1f9"
        language-code="es"
        ></df-messenger>
        
    </body>
</html>

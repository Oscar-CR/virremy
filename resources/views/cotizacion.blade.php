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
                    @case('Gastos médicos mayores')
                        
                        <!-- Columna 1 -->
                        <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4">Nivel Básico de Inversión</h2>
                            <p><strong>Plan de Seguro:</strong> Plan Básico de Gastos Médicos Mayores</p>
                            <p><strong>Inversión Mensual:</strong> $500 MXN</p>
                            <p><strong>Cobertura y Ventajas:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>Cobertura de hospitalización por accidente y enfermedad hasta $100,000 MXN anuales.</li>
                                <li>Consultas médicas ambulatorias con copago de $200 MXN por visita.</li>
                                <li>Medicamentos con descuento en farmacias afiliadas.</li>
                                <li>Acceso a red de hospitales y clínicas básicas.</li>
                            </ul>
                        </div>

                        <!-- Columna 2 -->
                        <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4">Nivel Intermedio de Inversión</h2>
                            <p><strong>Plan de Seguro:</strong> Gastos Médicos Mayores Plus</p>
                            <p><strong>Inversión Mensual:</strong> $1,500 MXN</p>
                            <p><strong>Cobertura y Ventajas:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>Cobertura ampliada de hospitalización por accidente y enfermedad hasta $500,000 MXN anuales.</li>
                                <li>Consultas médicas ambulatorias sin copago.</li>
                                <li>Reembolso de medicamentos recetados.</li>
                                <li>Acceso a una red más extensa de hospitales y clínicas, incluyendo especialidades.</li>
                            </ul>
                        </div>

                        <!-- Columna 3 -->
                        <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4">Nivel Premium de Inversión</h2>
                            <p><strong>Plan de Seguro:</strong> Gastos Médicos Mayores Platinum</p>
                            <p><strong>Inversión Mensual:</strong> $3,000 MXN</p>
                            <p><strong>Cobertura y Ventajas:</strong></p>
                            <ul class="list-disc ml-6">
                                <li>Cobertura máxima de hospitalización por accidente y enfermedad hasta $1,000,000 MXN anuales.</li>
                                <li>Consultas médicas ambulatorias y hospitalización sin costos adicionales.</li>
                                <li>Amplio reembolso de medicamentos, incluyendo tratamientos especializados.</li>
                                <li>Acceso preferencial a los mejores hospitales y especialistas a nivel nacional e internacional.</li>
                            </ul>
                        </div>


                        @break

                    @case('Seguro de vida')
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

                    @case('Seguro de hogar')

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

                    @case('Seguro de auto')
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

                    @case('Retiro')
                        <div class="flex justify-center">
                            <!-- Columna 1 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Básico de Inversión</h2>
                                <p><strong>Tipo de Plan:</strong> Plan de Ahorro para el Retiro Básico</p>
                                <p><strong>Inversión Mensual:</strong> $1,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Contribuciones regulares para el retiro con rendimientos moderados.</li>
                                    <li>Crecimiento del fondo con base en inversiones seguras y de bajo riesgo.</li>
                                    <li>Beneficios fiscales por aportaciones al fondo de retiro.</li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Intermedio de Inversión</h2>
                                <p><strong>Tipo de Plan:</strong> Plan de Ahorro para el Retiro Plus</p>
                                <p><strong>Inversión Mensual:</strong> $3,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Mayor contribución mensual para un crecimiento más acelerado del fondo de retiro.</li>
                                    <li>Opciones de inversión más variadas que incluyen fondos mixtos y de renta variable.</li>
                                    <li>Posibilidad de ajustar las inversiones según las condiciones del mercado.</li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Premium de Inversión</h2>
                                <p><strong>Tipo de Plan:</strong> Plan de Ahorro para el Retiro Premium</p>
                                <p><strong>Inversión Mensual:</strong> $7,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Alta contribución mensual para un crecimiento agresivo del fondo de retiro.</li>
                                    <li>Acceso a una gama completa de opciones de inversión, incluyendo fondos de alto rendimiento y diversificación internacional.</li>
                                    <li>Flexibilidad para realizar aportaciones adicionales y ajustar estrategias de inversión según el perfil de riesgo.</li>
                                </ul>
                            </div>
                        </div>
                        @break

                    @case('Inversión')
                        <div class="flex justify-center">
                            <!-- Columna 1 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Conservador</h2>
                                <p><strong>Tipo de Inversión:</strong> Certificados de Depósito a Plazo (CDP) y Bonos Gubernamentales</p>
                                <p><strong>Inversión Mensual:</strong> $5,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Inversión en CDP con tasas de interés fijas y plazos cortos.</li>
                                    <li>Bonos gubernamentales de bajo riesgo y rendimientos estables.</li>
                                    <li>Protección del capital invertido, pero con rendimientos moderados.</li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Moderado</h2>
                                <p><strong>Tipo de Inversión:</strong> Fondos de Inversión Diversificados</p>
                                <p><strong>Inversión Mensual:</strong> $10,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Inversión en fondos diversificados que incluyen acciones, bonos y otros activos.</li>
                                    <li>Mayor potencial de crecimiento que los instrumentos de bajo riesgo.</li>
                                    <li>Riesgo moderado, ya que se diversifica la inversión en diferentes clases de activos.</li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-4">Nivel Agresivo</h2>
                                <p><strong>Tipo de Inversión:</strong> Acciones y Mercado de Valores</p>
                                <p><strong>Inversión Mensual:</strong> $20,000 MXN</p>
                                <p><strong>Características y Ventajas:</strong></p>
                                <ul class="list-disc ml-6">
                                    <li>Inversión directa en acciones de empresas seleccionadas o a través de fondos de inversión de renta variable.</li>
                                    <li>Mayor potencial de rendimiento, pero con mayor volatilidad y riesgo.</li>
                                    <li>Posibilidad de obtener beneficios significativos a largo plazo.</li>
                                </ul>
                            </div>
                        </div>
                        @break

                    @case('Rentas privadas')
                            <div class="flex justify-center">
                                <!-- Columna 1 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Propiedad Residencial Pequeña</h2>
                                    <p><strong>Tipo de Inversión:</strong> Casa o Departamento Pequeño en Zona Urbana</p>
                                    <p><strong>Inversión Inicial:</strong> $1,000,000 MXN (Compra del inmueble)</p>
                                    <p><strong>Renta Mensual Estimada:</strong> $8,000 MXN</p>
                                    <p><strong>Características y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Inversión inicial modesta con rendimientos mensuales estables pero limitados.</li>
                                        <li>Menor riesgo de vacancia debido a la alta demanda de viviendas en áreas urbanas.</li>
                                    </ul>
                                </div>

                                <!-- Columna 2 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Propiedad Comercial</h2>
                                    <p><strong>Tipo de Inversión:</strong> Local Comercial en Zona Comercial</p>
                                    <p><strong>Inversión Inicial:</strong> $3,000,000 MXN (Compra del inmueble)</p>
                                    <p><strong>Renta Mensual Estimada:</strong> $25,000 MXN</p>
                                    <p><strong>Características y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Mayor inversión inicial con rendimientos mensuales más altos.</li>
                                        <li>Riesgo moderado debido a la estabilidad de los negocios en zonas comerciales consolidadas.</li>
                                    </ul>
                                </div>

                                <!-- Columna 3 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Inversión Inmobiliaria a Gran Escala</h2>
                                    <p><strong>Tipo de Inversión:</strong> Edificio de Apartamentos o Condominios</p>
                                    <p><strong>Inversión Inicial:</strong> $20,000,000 MXN (Compra del inmueble)</p>
                                    <p><strong>Renta Mensual Estimada:</strong> $200,000 MXN</p>
                                    <p><strong>Características y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Gran inversión inicial con rendimientos mensuales significativos.</li>
                                        <li>Mayor complejidad en la gestión y mantenimiento, pero potencial para mayores retornos a largo plazo.</li>
                                    </ul>
                                </div>
                            </div>
                        @break

                    @case('Póliza de comercio')
                            <div class="flex justify-center">
                                <!-- Columna 1 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Póliza Básica de Comercio</h2>
                                    <p><strong>Tipo de Cobertura:</strong> Póliza Básica para Pequeños Negocios</p>
                                    <p><strong>Cobertura y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Protección contra incendios, inundaciones y daños estructurales básicos.</li>
                                        <li>Responsabilidad civil por daños a terceros dentro del negocio.</li>
                                        <li>Cobertura limitada para equipos y mercancías.</li>
                                    </ul>
                                </div>

                                <!-- Columna 2 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Póliza de Comercio Ampliada</h2>
                                    <p><strong>Tipo de Cobertura:</strong> Póliza Ampliada para Medianas Empresas</p>
                                    <p><strong>Cobertura y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Protección extensa contra incendios, daños por fenómenos naturales y robo.</li>
                                        <li>Responsabilidad civil ampliada, incluyendo indemnización por lesiones a empleados.</li>
                                        <li>Cobertura más amplia para equipos, inventario y pérdida de ingresos por interrupción del negocio.</li>
                                    </ul>
                                </div>

                                <!-- Columna 3 -->
                                <div class="bg-white p-6 m-4 rounded-lg shadow-lg">
                                    <h2 class="text-2xl font-bold mb-4">Póliza de Comercio Premium</h2>
                                    <p><strong>Tipo de Cobertura:</strong> Póliza Premium para Grandes Corporaciones</p>
                                    <p><strong>Cobertura y Ventajas:</strong></p>
                                    <ul class="list-disc ml-6">
                                        <li>Cobertura integral contra múltiples riesgos, incluyendo ciberataques, terrorismo y eventos catastróficos.</li>
                                        <li>Responsabilidad civil extensa, incluyendo defensa legal y compensaciones elevadas.</li>
                                        <li>Cobertura ampliada para equipos, inventario, pérdida de ingresos y protección internacional.</li>
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

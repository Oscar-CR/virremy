@component('mail::message')

# Estimado , {{ $name }}

Espero que se encuentren bien. Mi nombre es Vianey Oceguera Zepeda, y me pongo en contacto con usted para brindar más información acerca del servicio de **{{ $cotization }}** que ofrece: 

<br>


@switch($cotization)
    @case('Gastos médicos mayores')
### Nivel Básico de Inversión

- **Plan de Seguro:** Plan Básico de Gastos Médicos Mayores
- **Inversión Mensual:** $500 MXN
- **Cobertura y Ventajas:**
- Cobertura de hospitalización por accidente y enfermedad hasta $100,000 MXN anuales.
- Consultas médicas ambulatorias con copago de $200 MXN por visita.
- Medicamentos con descuento en farmacias afiliadas.
- Acceso a red de hospitales y clínicas básicas.

---

### Nivel Intermedio de Inversión

- **Plan de Seguro:** Gastos Médicos Mayores Plus
- **Inversión Mensual:** $1,500 MXN
- **Cobertura y Ventajas:**
- Cobertura ampliada de hospitalización por accidente y enfermedad hasta $500,000 MXN anuales.
- Consultas médicas ambulatorias sin copago.
- Reembolso de medicamentos recetados.
- Acceso a una red más extensa de hospitales y clínicas, incluyendo especialidades.

---

### Nivel Premium de Inversión

- **Plan de Seguro:** Gastos Médicos Mayores Platinum
- **Inversión Mensual:** $3,000 MXN
- **Cobertura y Ventajas:**
- Cobertura máxima de hospitalización por accidente y enfermedad hasta $1,000,000 MXN anuales.
- Consultas médicas ambulatorias y hospitalización sin costos adicionales.
- Amplio reembolso de medicamentos, incluyendo tratamientos especializados.
- Acceso preferencial a los mejores hospitales y especialistas a nivel nacional e internacional.
        @break
    @case('Seguro de vida')
### Nivel Básico de Inversión

- **Tipo de Seguro:** Seguro de Vida Básico
- **Inversión Mensual:** $300 MXN
- **Cobertura y Ventajas:**
- Beneficio por fallecimiento de $200,000 MXN para los beneficiarios designados.
- Cobertura por fallecimiento accidental con doble indemnización.
- Asistencia funeraria básica incluida.

---

### Nivel Intermedio de Inversión

- **Tipo de Seguro:** Seguro de Vida Plus
- **Inversión Mensual:** $800 MXN
- **Cobertura y Ventajas:**
- Beneficio por fallecimiento de $500,000 MXN para los beneficiarios designados.
- Cobertura ampliada por fallecimiento accidental y por enfermedades terminales.
- Asistencia funeraria con mayor cobertura y servicios adicionales.

---

### Nivel Premium de Inversión

- **Tipo de Seguro:** Seguro de Vida Platinum
- **Inversión Mensual:** $2,000 MXN
- **Cobertura y Ventajas:**
- Beneficio por fallecimiento de $1,500,000 MXN para los beneficiarios designados.
- Cobertura amplia por fallecimiento accidental, enfermedades terminales y discapacidad.
- Asistencia funeraria completa y servicios adicionales para la familia.
        @break
    @case('Seguro de hogar')
### Nivel Básico de Inversión

- **Tipo de Seguro:** Seguro de Hogar Básico
- **Inversión Anual:** $2,500 MXN
- **Cobertura y Ventajas:**
- Cobertura básica contra incendios y daños por fenómenos naturales (terremotos, inundaciones, etc.).
- Protección limitada contra robo y vandalismo.
- Asistencia básica para reparaciones y mantenimiento del hogar.

---

### Nivel Intermedio de Inversión

- **Tipo de Seguro:** Seguro de Hogar Plus
- **Inversión Anual:** $5,000 MXN
- **Cobertura y Ventajas:**
- Cobertura ampliada contra incendios, fenómenos naturales y daños estructurales.
- Protección extendida contra robo, vandalismo y responsabilidad civil.
- Asistencia para reparaciones y servicios de emergencia 24/7.

---

### Nivel Premium de Inversión

- **Tipo de Seguro:** Seguro de Hogar Premium
- **Inversión Anual:** $9,000 MXN
- **Cobertura y Ventajas:**
- Cobertura extensa contra daños materiales, robo, vandalismo y responsabilidad civil ampliada.
- Asistencia completa para reparaciones y servicios de emergencia, incluyendo pérdida de renta por inhabilitación del hogar.
- Protección adicional para bienes valiosos y cobertura especializada.
        @break
    @case('Seguro de auto')
### Nivel Básico de Inversión

- **Tipo de Seguro:** Seguro de Auto Básico
- **Inversión Anual:** $3,000 MXN
- **Cobertura y Ventajas:**
- Responsabilidad civil por daños a terceros con límite de $100,000 MXN.
- Cobertura limitada contra robo total del vehículo.
- Asistencia en carretera básica.

---

### Nivel Intermedio de Inversión

- **Tipo de Seguro:** Seguro de Auto Plus
- **Inversión Anual:** $7,000 MXN
- **Cobertura y Ventajas:**
- Responsabilidad civil ampliada por daños a terceros hasta $300,000 MXN.
- Cobertura contra robo total, daños parciales y colisión del vehículo.
- Asistencia en carretera extendida y servicio de grúa.

---

### Nivel Premium de Inversión

- **Tipo de Seguro:** Seguro de Auto Premium
- **Inversión Anual:** $12,000 MXN
- **Cobertura y Ventajas:**
- Responsabilidad civil completa por daños a terceros sin límite.
- Cobertura ampliada contra robo total, daños parciales, colisión y vandalismo.
- Asistencia en carretera completa, auto sustituto y servicios especiales.
        @break

    @case('Retiro')
### Nivel Básico de Inversión

- **Tipo de Plan:** Plan de Ahorro para el Retiro Básico
- **Inversión Mensual:** $1,000 MXN
- **Características y Ventajas:**
- Contribuciones regulares para el retiro con rendimientos moderados.
- Crecimiento del fondo con base en inversiones seguras y de bajo riesgo.
- Beneficios fiscales por aportaciones al fondo de retiro.

---

### Nivel Intermedio de Inversión

- **Tipo de Plan:** Plan de Ahorro para el Retiro Plus
- **Inversión Mensual:** $3,000 MXN
- **Características y Ventajas:**
- Mayor contribución mensual para un crecimiento más acelerado del fondo de retiro.
- Opciones de inversión más variadas que incluyen fondos mixtos y de renta variable.
- Posibilidad de ajustar las inversiones según las condiciones del mercado.

---

### Nivel Premium de Inversión

- **Tipo de Plan:** Plan de Ahorro para el Retiro Premium
- **Inversión Mensual:** $7,000 MXN
- **Características y Ventajas:**
- Alta contribución mensual para un crecimiento agresivo del fondo de retiro.
- Acceso a una gama completa de opciones de inversión, incluyendo fondos de alto rendimiento y diversificación internacional.
- Flexibilidad para realizar aportaciones adicionales y ajustar estrategias de inversión según el perfil de riesgo.
        @break

    @case('Inversión')
### Nivel Conservador

- **Tipo de Inversión:** Certificados de Depósito a Plazo (CDP) y Bonos Gubernamentales
- **Inversión Mensual:** $5,000 MXN
- **Características y Ventajas:**
- Inversión en CDP con tasas de interés fijas y plazos cortos.
- Bonos gubernamentales de bajo riesgo y rendimientos estables.
- Protección del capital invertido, pero con rendimientos moderados.

---

### Nivel Moderado

- **Tipo de Inversión:** Fondos de Inversión Diversificados
- **Inversión Mensual:** $10,000 MXN
- **Características y Ventajas:**
- Inversión en fondos diversificados que incluyen acciones, bonos y otros activos.
- Mayor potencial de crecimiento que los instrumentos de bajo riesgo.
- Riesgo moderado, ya que se diversifica la inversión en diferentes clases de activos.

---

### Nivel Agresivo

- **Tipo de Inversión:** Acciones y Mercado de Valores
- **Inversión Mensual:** $20,000 MXN
- **Características y Ventajas:**
- Inversión directa en acciones de empresas seleccionadas o a través de fondos de inversión de renta variable.
- Mayor potencial de rendimiento, pero con mayor volatilidad y riesgo.
- Posibilidad de obtener beneficios significativos a largo plazo.
        @break

    @case('Rentas privadas')
### Propiedad Residencial Pequeña

- **Tipo de Inversión:** Casa o Departamento Pequeño en Zona Urbana
- **Inversión Inicial:** $1,000,000 MXN (Compra del inmueble)
- **Renta Mensual Estimada:** $8,000 MXN
- **Características y Ventajas:**
- Inversión inicial modesta con rendimientos mensuales estables pero limitados.
- Menor riesgo de vacancia debido a la alta demanda de viviendas en áreas urbanas.

---

### Propiedad Comercial

- **Tipo de Inversión:** Local Comercial en Zona Comercial
- **Inversión Inicial:** $3,000,000 MXN (Compra del inmueble)
- **Renta Mensual Estimada:** $25,000 MXN
- **Características y Ventajas:**
- Mayor inversión inicial con rendimientos mensuales más altos.
- Riesgo moderado debido a la estabilidad de los negocios en zonas comerciales consolidadas.

---

### Inversión Inmobiliaria a Gran Escala

- **Tipo de Inversión:** Edificio de Apartamentos o Condominios
- **Inversión Inicial:** $20,000,000 MXN (Compra del inmueble)
- **Renta Mensual Estimada:** $200,000 MXN
- **Características y Ventajas:**
- Gran inversión inicial con rendimientos mensuales significativos.
- Mayor complejidad en la gestión y mantenimiento, pero potencial para mayores retornos a largo plazo.
        @break

    @case('Póliza de comercio')
### Póliza Básica de Comercio

- **Tipo de Cobertura:** Póliza Básica para Pequeños Negocios
- **Cobertura y Ventajas:**
- Protección contra incendios, inundaciones y daños estructurales básicos.
- Responsabilidad civil por daños a terceros dentro del negocio.
- Cobertura limitada para equipos y mercancías.

---

### Póliza de Comercio Ampliada

- **Tipo de Cobertura:** Póliza Ampliada para Medianas Empresas
- **Cobertura y Ventajas:**
- Protección extensa contra incendios, daños por fenómenos naturales y robo.
- Responsabilidad civil ampliada, incluyendo indemnización por lesiones a empleados.
- Cobertura más amplia para equipos, inventario y pérdida de ingresos por interrupción del negocio.

---

### Póliza de Comercio Premium

- **Tipo de Cobertura:** Póliza Premium para Grandes Corporaciones
- **Cobertura y Ventajas:**
- Cobertura integral contra múltiples riesgos, incluyendo ciberataques, terrorismo y eventos catastróficos.
- Responsabilidad civil extensa, incluyendo defensa legal y compensaciones elevadas.
- Cobertura ampliada para equipos, inventario, pérdida de ingresos y protección internacional.
        @break

    @default
        Gracias por su tiempo y atención.
@endswitch

<br>

Número de seguimiento de solicitud:

### {{ $details }}



<a href="https://wa.me/+525577981941?text=¡Hola%mi%20nombre%20es^%20{{urlencode($name)}}!,%20Me%20interesa%20conocer%20acerca%20de%20{{urlencode($cotization)}}" target="_blank">
    <button style="background-color: green; color:white; padding:4px;">Enviar mensaje por WhatsApp</button>
</a>
<br>

Gracias por su tiempo y atención.

Atentamente, Vianey Oceguera Zepeda

### Accede a nuestro sitio web
<br>
<img src="{{ asset('img/qr-virrey.png') }}" alt="Virremy" width="100" height="120">


@endcomponent
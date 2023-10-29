@component('mail::message')

# Estimado , {{ $name }}

Espero que se encuentren bien. Mi nombre es Vianey Oceguera Zepeda, y me pongo en contacto con usted para brindar más información acerca del servicio de **{{ $cotization }}** que ofrece: 

<br>


@switch($cotization)
    @case('Gastos médicos mayores')
        Plan de Cobertura: Individual
        Suma Asegurada Deseada: 500,000 MXN
        Deducible: 10,000 MXN
        Cobertura de Enfermedades Críticas: Sí
        Coaseguro: 20%
        @break

    @case('Seguro de vida')
        Tipo de Seguro de Vida: Vida entera
        Suma Asegurada Deseada: 1,000,000 MXN
        Beneficiarios: Cónyuge e hijos
        @break

    @case('Seguro de hogar')
        Tipo de Vivienda: Casa
        Ubicación de la Vivienda: Ciudad de México
        Suma Asegurada para la Vivienda: 1,500,000 MXN
        Cobertura de Contenidos: 300,000 MXN
        Cobertura contra Daños Naturales: Sí
        @break

    @case('Seguro de auto')
        Marca y Modelo del Vehículo: Toyota Corolla 2022
        Tipo de Cobertura: Amplia
        Suma Asegurada para Daños a Terceros: 500,000 MXN
        Cobertura de Responsabilidad Civil: 500,000 MXN
        Deducible: 5,000 MXN
        @break

    @case('Retiro')
        Plan de Retiro: Afore
        Contribución Mensual: 2,000 MXN
        Duración del Plan: 30 años
        @break

    @case('Inversión')
        Tipo de Inversión: Acciones
        Monto de Inversión Inicial: 50,000 MXN
        Horizonte de Inversión: 10 años
        @break

    @case('Rentas privadas')
        Tipo de Inversión: Propiedad
        Inversión Inicial: 1,000,000 MXN
        Duración de la Inversión: 5 años
        Rendimiento Esperado: 8% anual
        @break

    @case('Póliza de comercio')
        Tipo de Negocio: Restaurante
        Ubicación del Negocio: Guadalajara
        Suma Asegurada Deseada: 2,000,000 MXN
        Cobertura de Responsabilidad Civil: 500,000 MXN
        Cobertura contra Daños a la Propiedad: 1,500,000 MXN
        @break

    @default
        Gracias por su tiempo y atención.
@endswitch

<br>

Número de seguimiento de solicitud:

### {{ $details }}

<br>

Gracias por su tiempo y atención.

Atentamente, Vianey Oceguera Zepeda

### Accede a nuestro sitio web
<br>
<img src="{{ asset('img/qr-virrey.png') }}" alt="Virremy" width="100" height="120">


@endcomponent
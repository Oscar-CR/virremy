@component('mail::message')

# ¡Hola, {{ $name }}!

Espero que se encuentre bien. Soy Vianey Oceguera Zepeda, y me complace contactarte respecto a nuestro servicio de **{{ $cotization }}**. En breve, nuestro equipo se pondrá en contacto con usted para brindarle una atención personalizada.

Número de seguimiento de solicitud: **{{ $details }}**

Si tienes alguna pregunta o deseas más información, no dudes en enviarnos un mensaje por WhatsApp.

<a href="https://wa.me/+525611875303?text=¡Hola%mi%20nombre%20es^%20{{urlencode($name)}}!,%20Me%20interesa%20conocer%20acerca%20de%20{{urlencode($cotization)}}" target="_blank">
    <button style="background-color: green; color:white; padding:4px;">Enviar mensaje por WhatsApp</button>
</a>

Gracias por tu tiempo y atención. Agradecemos tu interés en nuestro servicios.


### Accede a nuestro sitio web
[![Virremy]({{ asset('img/qr-virrey.png') }})](https://vireemy.ogdigitalsolutions.com.mx/)

@endcomponent
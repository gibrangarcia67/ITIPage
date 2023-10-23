<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITIworks</title>
    <link rel="stylesheet" href="{{asset('../css/create.css')}}">
    <link rel="shortcut icon" href="{{asset('../img/wifi (2).png')}}" type="image/x-icon">
</head>
<body>
    
    <header class="header">
        <a href="/" class="header_circle">
            <svg focusable="false" width="24" fill="#5f6368" height="24" viewBox="0 0 24 24" class=" NMm5M"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg>
        </a>
        <div class="header_circle">
            <svg focusable="false" width="24" fill="#fff" height="24" viewBox="0 0 24 24" class=" NMm5M hhikbc"><path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7z"></path><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04a2.008 2.008 0 0 0-1.44 1.19c-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"></path></svg>
        </div>
        <div class="header_text">
            Trabajo 
        </div>

        <button class="button">
            Guardar
        </button>
    </header>
    <section class="section">
        <div class="section_left">
            <div class="section_left_work">
                <input type="text" placeholder="Titulo" class="section_left_work_title">
                <textarea name="" id="" cols="30" rows="10" class="section_left_work_instrucciones" placeholder="Instrucciones (Opcional)"></textarea>
            </div>
            <div class="section_left_workarchive">
                <p>
                    Adjuntar
                </p>
                <div class="section_left_workarchive_circle">
                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"><path d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.41-7.59L11 7.83V16h2V7.83l2.59 2.59L17 9l-5-5-5 5 1.41 1.41z"></path></svg>
                </div>
                <p>
                    Subir
                </p>
            </div>
        </div>
        <div class="section_right">
            <p>
                Texto del trabajo (Opcional):
            </p>
            <textarea name="" id="" cols="30" rows="10" placeholder="Vista previa al trabajo"></textarea>
        </div>
    </section>
</body>
</html>
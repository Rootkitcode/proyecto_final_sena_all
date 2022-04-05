<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<body class="container-body">
    <div class="container-main">
        <p class="text-inicial">Hola, 
            He enviado un tiket con el Token "token", para "asunto", lo que sucede es "mensaje"<br>
            Enviado por: "correo" editado
        </p>
        <button class="button-34">
            Ir al sistema
        </button>
        <p class="text-final">
            Esperamos un pronta respuesta, muchas gracias, tenga un buen dia!.
        </p>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
        }
        .container-body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }
        .container-main{
            width: 50%;
            height: 20rem;
            border: 1px black solid;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .text-inicial{
            align-self: baseline;
            margin: 1rem;
        }
        .button-34 {
            background: #5E5DF0;
            border-radius: 999px;
            box-shadow: #5E5DF0 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
                border: 0;
            }
        .text-final{
            margin: 3rem;
        }
    </style>
</body>
</html>
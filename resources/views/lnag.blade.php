<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <style>
        body{
            margin: 0;
        }
        div{
            height:720px;
            display: flex;
            margin: auto;
            align-items:center;
            justify-content:center;
            font-family: 'Times New Roman', Times, serif;
            font-weight:initial;
            font-size: 35px;
            background-color: #8ac8ec;
        }
        .border{
            height:auto;
            width: auto;
            background-color: #f3dbc4;
            border-style: outset;
        }
    </style>
    <body>
        <div>
            <div class= "border">
            {{ __('txt.string') }}
            </div>
        </div>
    </body>
</html>
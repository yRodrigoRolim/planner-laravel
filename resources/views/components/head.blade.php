<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu planner</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkblue: '#010030',
                    },
                    boxShadow: {
                        'purple': '0 0px 22px #8E5AC2',
                    }
                }
            }
        }
    </script>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        onload="this.rel='stylesheet'">

    <style>
        .animation-edit div{
            animation: off 0.6s ease-in-out forwards;
        }
        .animation-edit svg:hover + div{
            display: flex;
            cursor: pointer;
            animation: on 0.6s ease-in-out;
        }
        .batata div:hover{
            display: flex !important;
        }

        @keyframes on{
            0%{
                margin-right: -16px;
            }
            60%{
                margin-right: 4px;
            }
            100%{
                margin-right: 0px;
            }
        }
        @keyframes off{
            0%{
                margin-right: 0px;
            }
            60%{
                margin-right: 4px;
            }
            100%{
                margin-right: -10px;
                opacity: 0.5;
                display: none;
            }
        }
    </style>
</head>

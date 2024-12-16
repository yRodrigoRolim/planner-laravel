<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu planner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkblue: '#010030',
                        darkbluedetails: '#020066',
                        purplecolor: '#150D45',
                        lightpurplecolor: '#2A1A5A',
                    },
                    boxShadow: {
                        'purple': '0 0px 22px #8E5AC2',
                    }
                },
                animation: {
                    'banneropacity': 'banner_opacity 0.3s forwards',
                },
                keyframes: {
                    banner_opacity: {
                        '0%': {
                            opacity: 1,
                        },
                        '50%': {
                            opacity: 0,
                        },
                        '100%': {
                            opacity: 1,
                        },
                    }
                },

            }
        }
    </script>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        onload="this.rel='stylesheet'">

    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #8E5AC2;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #8E5AC2;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #8E5AC2 transparent;
        }

        input::-webkit-calendar-picker-indicator {
            filter: invert(80%);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const select = document.getElementById('createItem'); // Select com o ID 'createItem'
            const outroSelect = document.getElementById('outroselect'); // Elemento para trocar classe
            const newType = document.getElementById('newtype'); // Elemento para remover 'hidden'

            if (select && outroSelect && newType) {
                select.addEventListener('change', () => {
                    const selectedOption = select.value; // Valor da opção selecionada
                    if (selectedOption === 'outros') {
                        // Troca a classe grid-cols-1 por grid-cols-2
                        outroSelect.classList.remove('grid-cols-1');
                        outroSelect.classList.add('grid-cols-2');

                        // Remove a classe 'hidden' do elemento newtype
                        newType.classList.remove('hidden');
                    } else {
                        // Volta ao estado original caso não seja 'outro'
                        outroSelect.classList.remove('grid-cols-2');
                        outroSelect.classList.add('grid-cols-1');
                        newType.classList.add('hidden');
                    }
                });
            } else {
                console.error('Um ou mais elementos não foram encontrados.');
            }
        });
    </script>
    <style>
        .fontpersonalizada {
            font-family: "Quicksand", sans-serif;
        }
    </style>

</head>

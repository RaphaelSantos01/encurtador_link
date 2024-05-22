<style>
        /* Estilos para o menu hamburger */
        .menu-hamburger {
            display: flex;
            flex-direction: column;
            cursor: pointer;
            margin-right: 20px; /* Espaçamento à direita do menu */
            margin-left: 10px; /* Espaçamento à esquerda do menu */
        }

        .menu-hamburger span {
            width: 25px;
            height: 3px;
            background-color: white;
            margin-bottom: 5px;
        }

    </style>
<header>
    <div class="row bg-primary">
        <div class="col">
            <div class="d-flex justify-content-start align-items-center">
                <div class="menu-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="max-width: 200px; color:white">
                    <h2>Atividade</h2>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('index')


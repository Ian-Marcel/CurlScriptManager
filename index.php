<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🔩</text></svg>">
        <!-- <link rel="shortcut icon" href="http://localhost/.elephpant.png" image/x-icon"> -->
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>ToolsPot</title>
    </head>
    <body class="Harvest">
        <main >
            <section class="closet">
                <button id="closet-backward" class="closet_btn Harvest"><b><</b></button>
                <section class="apps">
                    <div class="app_background"><button id="app" class="Harvest-alt"></button></div>
                    <div class="app_background"><button id="app" class="Harvest-alt"></button></div>
                    <div class="active_app_background"><button id="app" class="Harvest-alt active">active app</button></div>
                    <div class="app_background"><button id="app" class="Harvest-alt"></button></div>
                    <div class="app_background"><button id="app" class="Harvest-alt"></button></div>
                    <div class="app_background"><button id="app" class="Harvest-alt"></button></div>
                </section>
                <button id="closet-forward" class="closet_btn Harvest"><b>></b></button>
            </section>
            <!-- <div class="hr Harvest"></div> -->
            <section id="active_app">
                <h1>APP</h1>
            </section>
        </main>
        <!-- scripts -->
        <script src="script.js"></script>

    </body>
</html>

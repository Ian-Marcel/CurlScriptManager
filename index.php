<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🔩</text></svg>">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>ToolPot</title>
    </head>
    <body class="Harvest">
        <main >
            <section class="closet">
                <button id="closet-backward" class="closet_btn Harvest"><b><</b></button>
                <section class="apps">
                    <div><button id="appButton" class="app Harvest-alt" value="/assets/apps/password_generator/" title="Gerador de Senhas"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.iconsdb.com%2Ficons%2Fdownload%2Fbrown%2Fkey-4-512.png&f=1&nofb=1&ipt=7a2dbbb9b3a0ca70c5e8c08c6fc78384ddfe9f72f2a8f0d517668d18115e5352&ipo=images" alt="key"></button></div>
                    <div><button id="appButton" class="app Harvest-alt" value="/assets/apps/calculator/" title="Calculadora"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.iconsdb.com%2Ficons%2Fdownload%2Fbrown%2Fcalculator-2-512.png&f=1&nofb=1&ipt=a19e7be880f6db0525585e2d198019e292a39f8c3fa13db4446b457ae083fb35&ipo=images" alt="key"></button></div>
                </section>
                <button id="closet-forward" class="closet_btn Harvest"><b>></b></button>
            </section>
            <iframe src="/assets/apps/password_generator/" class="app_viewer" id="appViewer" title="App_Viewer" name="App_Viewer">
            </iframe>
        </main>
        <!-- scripts -->
        <script src="/assets/scripts/appButton>appDisplay.js"></script>

    </body>
</html>

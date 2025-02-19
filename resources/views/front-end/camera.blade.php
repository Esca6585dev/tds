<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }

    #reader {
        width: 600px;
    }

    #resuls {
        text-align: center;
        font-style: 1.5rem;
    }
</style>

<main>
    <div id="reader"></div>
    <div id="result"></div>
</main>

<script>
    const scanner = new Html5QrcodeScanner('reader', {
        qrbox: {
            width: 250,
            height: 250,
        },
        fps: 20,
    });

    scanner.render(success, error);

    function success(result) {
        var position = result.search("tds.gov.tm/tm/demiryol/check/ticket");

        if(position > -1){
            document.getElementById('result').innerHTML = `
                <div class="center mb-60">
                    <a href="${result}" class="center__btn">Siziň Petegiňiz Dogry</a>
                </div>
            `;
        } else {
            document.getElementById('result').innerHTML = `
                <div class="center mb-60">
                    <a href="#Siziň Petegiňiz Nädogry!" class="center__btn" style="background-color: red !important;">Siziň Petegiňiz Nädogry!</a>
                </div>
            `;
        }

        scanner.clear();
        document.getElementById('reader').remove();
    }

    function error(err) {
        console.error(err);
    }

</script>

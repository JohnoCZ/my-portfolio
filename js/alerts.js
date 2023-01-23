function open_alert(name) {
    if(name === "markusfilm") {
        Swal.fire({
            title: '<strong>Markusfilm.com</strong>',
            html: '<p>Web je napsaný ve framework Laravel, databáze běží na SQL. ' +
                'Mojí hlavní náplní práce je vyvíjení nových funkcí pro casting, ' +
                'který se nachází na webu. Dále upravuji již zavedené funkce a ' +
                'udržuji vše funkční.</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "chapes") {
        Swal.fire({
            title: '<strong>Chápeš.cz</strong>',
            html: '<p>Web běží na jazyce PHP a dále je osazen o jazyky JavaScript, ' +
                'CSS, HTML a knihovnu stylů Bootstrap. Mojí hlavní náplní práce je upravování ' +
                'již zavedených funkcí či přidávání nových vylepšení + udržuji vše funkční.</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "drip") {
        Swal.fire({
            title: '<strong>DRIP</strong>',
            html: '<p>Mojí hlavní náplní práce je vedení IT teamu společně s grafickým teamem. ' +
                'Dále vyvíjím eshop pro prodej dřevěných výrobků, kde si uživatel může ' +
                'sám navrhnout grafiku, která bude na produkt vypálená. Web beží na jazyce ' +
                'PHP a na front-end byly použity jazyky JavaScript, HTML, CSS a knihovna ' +
                'stylů Bootstrap.</p>' +
                '<p>22.11.2022: Tento den jsem již pouze manažer IT teamu a kontroluji ' +
                'vývoj nové verze E-Shopu psaného v JavaScriptu (React, TypeScript, Nodejs).</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "youtube") {
        Swal.fire({
            title: '<strong>YouTube Downloader</strong>',
            html: '<p>Kamarád mě kdysi poprosil o jednoduchou Python aplikaci na automatické ' +
                'stahování podle zkopírovaného odkazu na YouTube. Do budoucnosti se chystám tuto ' +
                'aplikaci přepsat a přidat jí jednoduchou instalaci a GUI prostředí ' +
                'pro lehčí uživatelské používání.</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "paspal") {
        Swal.fire({
            title: '<strong>PASPAL</strong>',
            html: '<p>Po nástupu na střední školu jsem se zapojil společně s 5 spolužáky ' +
                'do souteže CanSat, kde jsme měli za úkol vytvořit satelit velikosti plechovky. ' +
                'Mojí hlavní náplní práce bylo vytváření webových stránek pro propagaci teamu a ' +
                '"živého" webu pro zobrazení aktuálních dat ze satelitu v realném čase. Hlavní web ' +
                'byl napsaný v jazyce HTML a CSS společně s knihovnou stylů W3.CSS a "živy" web byl ' +
                'napsaný v jazyke PHP a následně přepsaný do Node.js.</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "traiderblocks") {
        Swal.fire({
            title: '<strong>TraiderBlocks.eu</strong>',
            html: '<p>V roce 2019 jsem byl přizvaný do jednoho MC projektu, ' +
                'kde jsem měl tvořit webové strány a spravovat pluginy na serverech. ' +
                'Tento projekt však rychle zaniknul a celý tým jsem vzal pod nový projekt ' +
                'TraiderBlocks.eu. Mojí náplní práce bylo vést celý team a spravovat linuxové servery ' +
                'společně s webovými stránkami a databázovým systémem MariaDB. V dnešní době je projekt ' +
                'neaktivní, jeho plánovaná obnova je v polovině roku 2023.</p>',
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
}
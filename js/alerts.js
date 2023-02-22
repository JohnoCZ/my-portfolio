function open_alert(name) {
    if(name === "markusfilm") {
        Swal.fire({
            title: '<strong>Markusfilm.com</strong>',
            html: document.getElementById('alert.markusfilm').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "chapes") {
        Swal.fire({
            title: '<strong>Chápeš.cz</strong>',
            html: document.getElementById('alert.chapes').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "drip") {
        Swal.fire({
            title: '<strong>DRIP</strong>',
            html: document.getElementById('alert.drip').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "paspal") {
        Swal.fire({
            title: '<strong>PASPAL</strong>',
            html: document.getElementById('alert.paspal').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }
    else if (name === "traiderblocks") {
        Swal.fire({
            title: '<strong>TraiderBlocks.eu</strong>',
            html:  document.getElementById('alert.traiderblocks').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }else if (name === "livezone") {
        Swal.fire({
            title: '<strong>LiveZone.cz</strong>',
            html: document.getElementById('alert.livezone').innerText,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Zavřít',
        })
    }

}
function animate() {
    animate_banner_title();
    setTimeout(function() { animate_banner_motto() }, 1000);
}

function animate_banner_title() {
    let title_text = document.getElementById('title-text');
    let text = "JONÁŠ ŽIDEK";
    let i = 0;
    loop();

    function loop() {
        setTimeout(function() {
            title_text.innerHTML = title_text.innerHTML + text.charAt(i);
            if(i < text.length)
                loop();
            i++;
        }, 100);
    }
}

function animate_banner_motto() {
    let motto = document.getElementById('motto');
    let text = "SOFTWARE & WEB DEVELOPER";
    let i = 0;

    motto.style.color = "#2863e5";
    motto.innerHTML = '「 <span id="motto-text"></span> 」';
    let motto_text = document.getElementById('motto-text');

    loop();

    function loop() {
        setTimeout(function() {
            motto_text.innerHTML = motto_text.innerHTML + text.charAt(i);
            if(i < text.length)
                loop();
            i++;
        }, 75);
    }
}
function Translate() {
    //initialization
    this.init =  function(attribute, lng){
        this.attribute = attribute;
        this.lng = lng;
    }
    //translate
    this.process = function(){
        _self = this;
        let xrhFile = new XMLHttpRequest();
        //load content data
        xrhFile.open("GET", "lang/"+this.lng+".json", false);
        xrhFile.onreadystatechange = function ()
        {
            if(xrhFile.readyState === 4)
            {
                if(xrhFile.status === 200 || xrhFile.status == 0)
                {
                    let LngObject = JSON.parse(xrhFile.responseText);
                    let allDom = document.getElementsByTagName("*");
                    for(
                        let i =0; i < allDom.length; i++){
                        let elem = allDom[i];
                        let key = elem.getAttribute(_self.attribute);
                        if(key != null) {
                            elem.innerHTML = LngObject[key]  ;
                        }
                    }

                }
            }
        }
        xrhFile.send();
    }
}

//This function will be called when user click changing language
function translate(lng){
    let translate = new Translate();
    translate.init('data-lang', lng);
    translate.process();
}

$(document).ready(function(){
    //This is id of HTML element (English) with attribute lng-tag
    $("#enTranslator").click(function(){
        translate('en');
    });
    //This is id of HTML element (Khmer) with attribute lng-tag
    $("#csTranslator").click(function(){
        translate('cs');
    });
});
import { lang } from "../lang/cs.js"
export function switch_lang(selected_lang = null) {
    // Check if lang is on the list and import lang file
    if(selected_lang == "en") {
        // Translate content
        translate()
    }

    /*
        This function is for translating original content to the
        other lang from variable $lang form lang file.
     */
    function translate() {
        for (const [key, value] of Object.entries(lang)) {
            const elements = document.querySelectorAll('[data-id=' + key +']');
            for (const element of elements) {
                element.innerHTML = value;
            }
        }
    }
}
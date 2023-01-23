function change_year() {
    let date = new Date();
    document.getElementById('current_year').innerHTML = date.getFullYear() + "";
}
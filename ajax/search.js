
let tbody = document.getElementById("users_body");

let searchC = (firstname) => {
    let request = new XMLHttpRequest();

    if (firstname.length == 0) {
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("users_body").innerHTML = this.responseText;
            }
        }
        request.open("GET", "search.php?findAll", true);
        request.send();

    } else {

        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("users_body").innerHTML = this.responseText;
            }
        }
        request.open("GET", "search.php?q=" + firstname, true);
        request.send();
    }

};

let searchP = (pName) => {
    let request = new XMLHttpRequest();

    if (pName.length == 0) {

        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("products_body").innerHTML = this.responseText;
            }
        }
        request.open("GET", "search.php?findAllP", true);
        request.send();

    } else {

        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("products_body").innerHTML = this.responseText;
            }
        }
        request.open("GET", "search.php?qP=" + pName, true);
        request.send();
    }

};

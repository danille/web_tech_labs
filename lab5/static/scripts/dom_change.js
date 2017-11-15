window.onload = function () {

    function addMainHeader() {
        var headerText = "Lorem Ipsum Times";
        var mainHeaderText = document.createElement('h1');
        var content = document.createTextNode(headerText);
        mainHeaderText.appendChild(content);

        var mainHeader = document.getElementById('id_main_header');
        mainHeader.appendChild(mainHeaderText);

    }

    var reset_button = document.getElementById("id_bt_add_headers");
    reset_button.addEventListener('click', addMainHeader, false)
};


window.onload = function () {

    function addMainHeader() {
        var headerText = "Lorem Ipsum Times";
        var mainHeaderText = document.createElement('h1');
        var content = document.createTextNode(headerText);
        mainHeaderText.appendChild(content);

        var mainHeader = document.getElementById('id_main_header');
        mainHeader.appendChild(mainHeaderText);
    }

    function hideLinks() {
        var links = document.getElementsByClassName("cl_nav_link");
        for (var i = 0; i < links.length; i++){
            links[i].style.visibility = "hidden";
        }
    }

    var resetButton = document.getElementById("id_bt_add_headers");
    var hideLinksButton = document.getElementById('id_bt_hide_links');

    resetButton.addEventListener('click', addMainHeader, false);
    hideLinksButton.addEventListener('click', hideLinks, false);
};


window.onload = function () {

    function addMainHeader() {
        var headerText = "Lorem Ipsum Times";
        var mainHeaderText = document.createElement("h1");
        var content = document.createTextNode(headerText);
        mainHeaderText.appendChild(content);

        var mainHeader = document.getElementById("id_main_header");
        mainHeader.appendChild(mainHeaderText);
    }

    function hideLinks() {
        var links = document.getElementsByClassName("cl_nav_link");
        for (var i = 0; i < links.length; i++){
            links[i].style.visibility = "hidden";
        }
    }

    function changeHeadersFont() {
        var fontFamilyList = document.getElementById("id_font_list");
        var fontFamilyName = fontFamilyList.options[fontFamilyList.selectedIndex].value;

        var headers = document.getElementsByTagName("h4");

        console.log(headers);

        for (var i = 0; i < headers.length; i++){
            headers[i].style.fontFamily = fontFamilyName;
        }
    }

    function getFocus() {
        var link = document.getElementsByClassName("cl_nav_link")[0];
        link.focus();
    }

    function looseFocus() {
        var link = document.getElementsByClassName("cl_nav_link")[0];
        link.blur();
    }

    function changeBackgroundColor() {
        var bgColorInput = document.getElementById("id_bg_color_input");
        document.body.style.backgroundColor = bgColorInput.value;
    }

    var resetButton = document.getElementById("id_bt_add_headers");
    var hideLinksButton = document.getElementById("id_bt_hide_links");
    var changeHeadersFontButton = document.getElementById("id_bt_change_headers_font");
    var changeBgColorButton = document.getElementById("id_bt_change_bg_color");
    var getFocusButton = document.getElementById("id_bt_get_focus");
    var looseFocusButton = document.getElementById("id_bt_loose_focus");

    resetButton.addEventListener("click", addMainHeader, false);
    hideLinksButton.addEventListener("click", hideLinks, false);
    changeHeadersFontButton.addEventListener("click", changeHeadersFont, false);
    changeBgColorButton.addEventListener("click", changeBackgroundColor, false);
    getFocusButton.addEventListener("click", getFocus, false);
    looseFocusButton.addEventListener("click", looseFocus, false);
};


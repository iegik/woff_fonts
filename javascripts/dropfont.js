var doc = document.documentElement;
doc.ondragover = function () {
    //this.className = 'hover';
    return false;
};
doc.ondragend = function () {
    //this.className = '';
    return false;
};
doc.ondrop = function (event) {
    event.preventDefault && event.preventDefault();
    this.className = '';

    // now do something with:
    var files = event.dataTransfer.files;
    console.log(files);

    file = files[0];
    fontFamily = file.name.replace(/(bold|italic|regular|-|\.woff)/gi,'');
    fontWeight = /bold/i.test(file.name)?"bold":"normal";
    fontStyle = /italic/i.test(file.name)?"italic":"normal";
    console.log([fontFamily, fontWeight, fontStyle]);
    /*
	If the file is a font and the web browser supports FileReader,
	append css @font-face rule to the page; Change page`s font
*/
    if (typeof FileReader !== "undefined" && (/font/i).test(file.type)) {
        reader = new FileReader();
        reader.onload = (function (d) {
            return function (evt) {
                style = document.createElement("style");
                style.innerText = "@font-face { font-family: '"+fontFamily+"';font-style: " + fontStyle + ";font-weight: "+fontWeight+"; src: local('Boton Bold'), url('" + evt.target.result + "') format('woff');}";
                d.appendChild(style);
                d.style.fontFamily = fontFamily;
                d.style.fontWeight = fontWeight;
                d.style.fontStyle = fontStyle;
            };
        }(document.getElementsByTagName('body')[0]));
        reader.readAsDataURL(file);
    }
    return false;
};
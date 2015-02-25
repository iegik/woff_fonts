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
    /*
	If the file is an image and the web browser supports FileReader,
	present a preview in the file list
*/
    if (typeof FileReader !== "undefined" && (/image/i).test(file.type)) {
        reader = new FileReader();
        reader.onload = (function (d) {
            return function (evt) {
                 d.style.backgroundImage = 'url(' + evt.target.result + ')';
            };
        }(document.getElementsByTagName('body')[0]));
        reader.readAsDataURL(file);
    }
    return false;
};
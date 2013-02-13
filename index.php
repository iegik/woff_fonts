<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8' />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="description" content="Woff fonts : " />

    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">

    <title>Woff fonts</title>
<style id="template">
@font-face {
  font-family: 'LondrinaShadow';
  font-style: normal;
  font-weight: bold;
  src: local('LondrinaShadow Bold'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold.eot?#') format('embedded-opentype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold.woff') format('woff'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold.ttf') format('truetype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold.svg#Boton-Bold') format('svg');
}
@font-face {
  font-family: 'LondrinaShadow';
  font-style: normal;
  font-weight: normal;
  src: local('LondrinaShadow Regular'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Regular.eot?#') format('embedded-opentype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Regular.woff') format('woff'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Regular.ttf') format('truetype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Regular.svg#Boton-Regular') format('svg');
}
@font-face {
  font-family: 'LondrinaShadow';
  font-style: italic;
  font-weight: bold;
  src: local('LondrinaShadow Bold Italic'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold-Italic.eot?#') format('embedded-opentype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold-Italic.woff') format('woff'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold-Italic.ttf') format('truetype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Bold-Italic.svg#Boton-Bold-Italic') format('svg');
}
@font-face {
  font-family: 'LondrinaShadow';
  font-style: italic;
  font-weight: normal;
  src: local('LondrinaShadow Italic'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Italic.eot?#') format('embedded-opentype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Italic.woff') format('woff'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Italic.ttf') format('truetype'),
    url('../fonts/LondrinaShadow/LondrinaShadow-Italic.svg#Boton-Italic') format('svg');
}

p {
	background-size: 100% 2em;
	line-height: 2;
}
</style>
</head>

  <body>

    <!-- HEADER -->
    <div id="header_wrap" class="outer">
        <header class="inner">
          <a id="forkme_banner" href="https://github.com/iegik/woff_fonts">Fork Me on GitHub</a>

          <h1 id="project_title">Woff fonts</h1>
          <h2 id="project_tagline"></h2>

          <section id="downloads">
            <a class="zip_download_link" href="https://github.com/iegik/woff_fonts/zipball/master">Download this project as a .zip file</a>
            <a class="tar_download_link" href="https://github.com/iegik/woff_fonts/tarball/master">Download this project as a tar.gz file</a>
          </section>
        </header>
    </div>

    <!-- MAIN CONTENT -->
    <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner">
        <h1>Woff Fonts</h1>

<p>Some open source OTF fonts which I've converted to WOFF format for use on websites</p>

<form id="sidebar">
	<p>
		<input id="mainFont1" placeholder="LondrinaShadow" onchange="changeFont(this);">
		<select id="mainFont" onchange="changeFont(this);" data-old="LondrinaShadow">
          <option value="">none</option>
        <?php foreach (array_diff(scandir(dirname(__FILE__)),array('.','..','.git','stylesheets','javascripts','images','websafe')) as $f){
          if(is_dir($f) && $f)
            printf('<option value="%s">%s</option>',$f,$f);
        }?>
        </select>
		<select id="alternativeFont" onchange="changeFont(this);">
			<optgroup label="serif Fonts">
				<option value="Georgia">Georgia, serif	</option>
				<option value="Palatino Linotype">Palatino Linotype, Book Antiqua, Palatino, serif	</option>
				<option value="Times New Roman">Times New Roman, Times, serif	</option>
			</optgroup>
			<optgroup label="sans-Serif Fonts">
				<option value="Arial">Arial, Helvetica, sans-serif	</option>
				<option value="Arial Black">Arial Black, Gadget, sans-serif	</option>
				<option value="Comic Sans MS">Comic Sans MS, cursive, sans-serif	</option>
				<option value="Impact">Impact, Charcoal, sans-serif	</option>
				<option value="Lucida Sans Unicode">Lucida Sans Unicode, Lucida Grande, sans-serif	</option>
				<option value="Tahoma">Tahoma, Geneva, sans-serif	</option>
				<option value="Trebuchet MS">Trebuchet MS, Helvetica, sans-serif	</option>
				<option value="Verdana">Verdana, Geneva, sans-serif	</option>
			</optgroup>
			<optgroup label="monospace Fonts">
				<option value="Courier New">Courier New, Courier, monospace	</option>
				<option value="Lucida Console">Lucida Console, Monaco, monospace	</option>
			</optgroup>
		</select>

		<input type="number" value="12" onchange="(function(d,s){d.body.style.fontSize=s+'pt';console.log('font-size: '+s+'pt')})(document,this.value)" style="
    width: 45px;
">pt
	</p>

	<textarea id="source"></textarea>
	<!--div id="aaa">
		<p id="monospace">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
	</div-->
</form>
<div id="test" onclick="this.contentEditable=true;this.style.webkitApperiance='textarea'" onchange="this.style.webkitAppearance=this.contentEditable=false" class="editable">
	<h3>Regular</h3>
    <p>
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
	<h3>Bold</h3>
    <p style="font-weight: bold;">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
	<h3>Italic</h3>
    <p style="font-style: italic;">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
	<h3>Bold Italic</h3>
    <p style="font-weight: bold;font-style: italic;">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
	<h3>Oblique</h3>
    <p style="font-style: oblique;">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
	<h3>Bold Oblique</h3>
    <p style="font-weight: bold;font-style: oblique;">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
</div>
<hr/>
<form>
		font-weight:
		<label><input name="fontWeight" type="radio" value="inherit">inherit</label>
		<label>
			<select name="fontWeight">
				<optgroup label="Normal">
					<option>(Very Light)</option>
					<option value="100">(100) Ultra Light (Light)</option>
					<option value="200">(200) Thin (Thin)</option>
					<option value="300">(300) Light (Book)</option>
					<option value="400" selected="selected">(400) Regular (Medium)</option>
					<option value="500">(500) Semi Bold (Demi)</option>
				</optgroup>
				<optgroup label="Bold">
					<option value="600">(600) Bold (Bold)</option>
					<option value="700">(700) Extra Bold (Heavy)</option>
					<option value="800">(800) Heavy (Black)</option>
					<option value="900">(900) Ultra Heavy (Nord)</option>
				</optgroup>
			</select>
		</label>
		<label><input name="fontWeight" type="radio" value="-100">lighter</label>
		<label><input name="fontWeight" type="radio" value="initial">initial</label>
		<label><input name="fontWeight" type="radio" value="100">bolder</label>
		
		<label>line-height:<input name="lineheight" type="number" placeholder="1.5" size="3"/>em</label>
		<label><em>interligne</em>:<input name="lineheight" type="number" placeholder="0.5"  size="3"/>em</label>
</form>
<div id="test1">
	<h3>Custom</h3>
    <p class="custom">
        <span style="text-transform:lowercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:capitalize;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="font-variant:small-caps;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        <span style="text-transform:uppercase;">Quick Brown Fox Jumped Over The Lazy Dog</span><br>
        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
        0123456789!@#$%^&amp;*(){}[],.
    </p>
</div>
<script src="http://leaverou.github.com/prefixfree/prefixfree.min.js"></script>
	<script>
	/* For counting average letter width (absolute width for monospace fonts)
Element.prototype.getElementWidth = function() {
    return typeof this.clip === "undefined" && this.style.pixelWidth || this.offsetWidth || this.clip.width
};
Element.prototype.getElementHeight = function() {
    return typeof this.clip === "undefined" && this.style.pixelHeight || this.offsetHeight || this.clip.height
};

div = function(a,b){
    return (a - a % b) / b;
};

Element.prototype.getFontWidth = function() {
    return div(this.getElementWidth(), this.innerText && this.innerText.length || this.value.length)
};

Element.prototype.getFontWidthEm = function() {
    return (this.getElementWidth() / (this.innerText && this.innerText.length || this.value.length)) / this.getElementHeight();
};
(function(d,s){
	d.getElementById('monospace').onmouseout=function(){
		var bs= (this.style.backgroundSize || (this.style.backgroundSize = this.style.webkitBackgroundSize = this.getFontWidthEm() + 'em')),
			ew=this.style.width = ((this.innerText && this.innerText.length || this.value.length)*this.style.backgroundSize.substring(0,this.style.backgroundSize.length-2))+'em',
			fhp=this.getElementHeight() + 'px',fwe=Math.round(this.getFontWidthEm(),2) + 'em',
			fwp=this.style.webkitFontWidth = this.style.fontWidth = this.getFontWidth() + 'px',
			lc=(this.innerText && this.innerText.length || this.value.length);
		console.log('background-size:',bs);
		console.log('element-width:',ew);
		console.log('font-size: 1em');
		console.log('font-height:',fhp);
		console.log('font-width:',fwe);
		console.log('font-width:',fwp);
		console.log('letter-count:',lc);
		console.log(this.style);
	};
	d.getElementById('monospace').onmouseout();
})(document);
*/
//var mainFont = document.getElementById('mainFont');
function changeFont(selected){
	var 
		style = document.getElementById('template'),
		mainFont = selected,
		oldFont = 'data-old',
		tmp = mainFont.getAttribute(oldFont),
		output = document.getElementsByTagName('textarea')[0],
		body = document.getElementsByTagName('body')[0],
		alternativeFont = document.getElementById('alternativeFont'),
		regex = new RegExp(tmp,'gi'),
		s = style.innerHTML,
		fontFamily = tmp + ', ' + alternativeFont.selectedOptions[0].innerText;
	if(selected.value === alternativeFont.value) {
	
		body.style.fontFamily = (RegExp(mainFont.value).test(alternativeFont.selectedOptions[0].innerText)?'':mainFont.value + ', ')+alternativeFont.selectedOptions[0].innerText;
	}else{
		tmp = selected.value || tmp;
		mainFont.setAttribute(oldFont,tmp);
		output.value = style.innerHTML = s.replace(regex,tmp);
		regex = new RegExp(fontFamily,'gi');
		fontFamily = tmp + ', ' + alternativeFont.selectedOptions[0].innerText;
		body.style.fontFamily = fontFamily;
	}
	console.log('font-family:' + body.style.fontFamily);
}

</script>
<script src="https://gist.github.com/raw/4706804/dropimage.js"></script>
<script src="https://gist.github.com/raw/4706804/dropfont.js"></script>
      </section>
    </div>

    <!-- FOOTER  -->
    <div id="footer_wrap" class="outer">
      <footer class="inner">
        <p class="copyright">Woff fonts maintained by <a href="https://github.com/iegik">iegik</a></p>
        <p>Published with <a href="http://pages.github.com">GitHub Pages</a></p>
      </footer>
    </div>

  </body>
</html>

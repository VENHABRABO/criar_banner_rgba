<html>

<head><meta charset="utf-8">
	<title>GERADOR DE BANNER RGB</title>
	<link href="fav2.ico" rel="icon" /><meta name="viewport" content="width=device-width, user-scalable=no"><meta name="google" content="notranslate"><meta name="Description" content="Gere banner gradiente RGB para todos os aplicativos netfree e vps."><script src="https://cdn.jsdelivr.net/npm/jquery%403.6.0/dist/jquery.min.js"></script>
	<link href="../banner/bootstrap.min.css" rel="stylesheet" />
	<link href="../banner/style.css" rel="stylesheet" /><noscript> <META HTTP-EQUIV="Refresh" CONTENT="0;URL=error.html"> </noscript>
	<script async src="https://imgbb.com/upload.js" data-palette="purple" data-auto-insert="html-embed-medium" data-sibling-pos="before" data-sibling="center"></script>
	
<style>

		button {
			color: #000000;
			background-color: #ffea00;
			font-size: 11px;
			border: 1px solid #000000;
			border-radius: 28px;
 			padding: 4px px;
                        margin-left: 1rem;
			letter-spacing: 1px;
			cursor: pointer
		}
		button:hover {}

	</style>
</head>
<body id="bg">
<div class="container">
<div id="header">
<h1 class="text-center" id="title"><strong>GERADOR DE BANNER RGB</strong></h1>

<p id="graylabel1" style="padding-bottom: 10px;">Gerador de banner RGB V1.0</p>
</div>

<div class="col-md-2" id="input" style="padding-left: 0;"><label for="color1" id="label1">cor prim&aacute;ria</label> <input class="form-control col-md-4" data-jscolor="{preset:'small dark'}" id="color1" name="color1" onchange="updateSpitter(event)" oninput="updateSpitter(event)" style="border-radius: 10px; position: inherit;" value="00A1FB" /><br />
<label for="color2" id="label2">segunda cor</label> <input class="form-control col-md-3" data-jscolor="{preset:'small dark'}" id="color2" name="color2" onchange="updateSpitter(event)" oninput="updateSpitter(event)" style="border-radius: 10px; position: inherit;" value="01FD75" /><br />
<label for="color3" id="label3" style="display: none;">terceira cor</label> <input class="form-control col-md-2" data-jscolor="{preset:'small dark'}" id="color3" name="color3" onchange="updateSpitter(event)" oninput="updateSpitter(event)" style="border-radius: 10px; position: inherit; display: none;" value="FFFFFF" /><br />
<label for="color4" id="label4" style="display: none;">quarta cor</label> <input class="form-control col-md-1" data-jscolor="{preset:'small dark'}" id="color4" name="color4" onchange="updateSpitter(event)" oninput="updateSpitter(event)" style="border-radius: 10px; position: inherit; display: none;" value="FFFFFF" /> <label for="steps" id="label5">insira seu texto</label> <input class="form-control col-md-2" id="nickname" name="nickname" onchange="updateSpitter(event)" oninput="updateSpitter(event);" placeholder="Texto" style="border-radius: 10px; position: inherit;" type="text" value="@VEM_BRABO" />
<div id="options">
<div id="typeslist"><label style="margin-bottom: 0px; margin-top: 15px;">Codigo</label> <select id="types" onchange="rgbtype = this.options[this.selectedIndex].innerText; updateSpitter(event);" style="width:100%; border-radius: 10px; padding-right: 6px; padding-left: 6px; padding-top: 6px; padding-bottom: 6px;" type="select"><option value="0">HTML</option> </select></div>

<div id="coloramountlist"><label style="margin-bottom: 0px; margin-top: 15px;">Quantidade de Cores</label> <select id="numOfColors" onchange="numberOfColors = this.options[this.selectedIndex].innerText; updateSpitter(event); hideColors();" style="width:100%; border-radius: 10px; padding-right: 6px; padding-left: 6px; padding-top: 6px; padding-bottom: 6px;" type="select"><option value="2">2</option><option value="3">3</option><option value="4">4</option> </select></div>
&nbsp;

<div id="appearance"><input id="darkmode" onclick="darkMode();" type="checkbox" /> <label for="darkmode" style="margin-bottom: 0px;margin-top: 0px;">mudar cor do fundo do site</label></div>
</div>
</div>
&nbsp;

<div class="minecraft" id="coloredNick" style="word-wrap: break-word;"></div>
<div class="containerr">
<div id="output"><label for="spitter" id="label4">COPIE SEU BANNER HTML CUSTOMIZADO<button class="button" onclick="copyElementText()" type="button">Copiar Código</button></label>
 <button class="button" onclick="alert('VAMOS ASSISTIR O TUTORIAL EM VIDEO! CLIQUE NO BOTÃO AO LADO')"<strong>DICA</strong></button>&nbsp;
<a href="video/tutorial.mp4"><font color="#FFFF00"><strong>TUTORIAL EM VIDEO</strong></a>
</div>
</div>
<pre class="pp" id="spitter" onclick="copyTextToClipboard(document.getElementById('spitter').textContent);" style="border-radius: 10px; white-space: pre-wrap; height: 95px; margin-right: 15px;">
</pre>

<p id="error" style="display: none; margin-bottom: 10px;">Observe que alguns aplicativos NetFree limitam o n&uacute;mero de caracteres que voc&ecirc; pode inserir.</p>
</div>
</div>

<footer class="footer" style="background-color: #0a4275;">  
	   <div class="container">   
 <div class="row align-items-end" style="padding: 10px;"> 
       <div class="col-12 text-center" style="padding: 10px;">  
         Editado por <a class="text-info text-decoration-none" href="https://t.me/VEM_BRABO"><span style="color:#01c8fd">@VEM_BRABO</span></a> 
	 <a class="text-info text-decoration-none" href="https://vembrabo.alphi.media/portifolio"><button type="button" class="btn btn-primary pull-right btn-sm">Portifolio</button></a>  
</div>
</div>
</footer>
<script>

  function copyElementText() {
  var copyText = document.getElementById('spitter').innerText;
  var elem = document.createElement("textarea");
  document.body.appendChild(elem);
   elem.value = copyText;
   elem.select();
 document.execCommand("copy");
   document.body.removeChild(elem);
   alert('Banner Copiado');
}
	   
	   </script><script src="script.js"></script><script src="../banner/jscolor.js"></script>
	   </div>
	   <script src="../banner/snowstorm.js"></script>
	   </body>
	   
	   
	   

<script type="text/javascript" src="https://usuariosonline.s12.com.br/uo-aD7zB1bW61CD7872-52-0.js"></script><br><a href="https://usuariosonline.s12.com.br/" target="_blank"><img src="https://usuariosonline.s12.com.br/selo/selo-uo.gif" alt="usuﾃ｡rios online" border="0"></a>

<button id="like">
  <div class="label">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8.4 5.25C5.61914 5.25 3.25 7.3293 3.25 10.0298C3.25 11.8927 4.12235 13.4612 5.27849 14.7604C6.43066 16.0552 7.91714 17.142 9.26097 18.0516L11.5796 19.6211C11.8335 19.793 12.1665 19.793 12.4204 19.6211L14.739 18.0516C16.0829 17.142 17.5693 16.0552 18.7215 14.7604C19.8777 13.4612 20.75 11.8927 20.75 10.0298C20.75 7.3293 18.3809 5.25 15.6 5.25C14.1665 5.25 12.9052 5.92214 12 6.79183C11.0948 5.92214 9.83347 5.25 8.4 5.25Z" fill="black"/>
    </svg>
    Curtir
  </div>
  <div class="number" id="number">50</div>
</button>

</html>
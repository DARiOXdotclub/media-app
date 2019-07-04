// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.

var contentaaase = `
<div id="titlebar">
	<img src="imageasset/circlogo.png" id="titlebar-icon" height="30px" width="30px">
	<span id="version"></span>
	<span id="platform"></span>
	<!--
	<div id="backbtn">
		<span onclick="iframe.history.back()"><img src="imageasset/appbar.arrow.left.png" height="25px" width="25px">Back</span>
	</div>
	<div id="iframelocation">
		<img height="30px" width="30px" src="imageasset/appbar.link.svg">
		<span id="iframelocationtext">Loading DARiOX Media</span>
	</div> -->
	</div>
		<div id="buttons" style="-webkit-app-region: no-drag;position: absolute;top: 0;right:0;width:60px;height:30px;background-color:#212121;">
			<div id="minbtn" class="minbtn">
				<img src="imageasset/appbar.minus.svg" height="34px" width="34px" id="minimg">
			</div>
			<div id="closebtn" class="closebtn">
				<img src="imageasset/appbar.close.svg" height="34px" width="34px" id="closeimg">
			</div>
			<!--div id="maxbtn" class="maxbtn">
				<img src="imageasset/appbar.add.svg" height="34px" width="34px" id="maximg">
			</div>-->
		</div>
	<div class="loading" style="height:calc(100% - 30px);width:100%;position:absolute;top:30px;left:0;background-image:url('./loadingbg.png');background-repeat: repeat;border-bottom-left-radius: 15px;border-bottom-right-radius:15px;">
		<center><br><br>
			<h1 style="color:white;font-family:sans-serif;">Loading DARiOX Media</h1>
		</center>
	</div>
</div>
<iframe src="http://media.dariox.club" id="iframe" name="iframe" height="calc(100% - 31px)" width="100%" disablewebsecurity frameborder="0">
`

document.getElementById("body").innerHTML = contentaaase;
const {remote} = require('electron');
const package = require('./package.json');
document.getElementById("version").innerHTML = package.version;

if (process.platform === 'darwin') {
	document.getElementById("platform").innerHTML = "Mac (darwin)"
}
if (process.platform === 'win32') {
	document.getElementById("platform").innerHTML = "Windows (win32)"
}

document.getElementById('minbtn').addEventListener('click', () => {
  remote.getCurrentWindow().minimize()
})

//document.getElementById('maxbtn').addEventListener('click', () => {
//  const currentWindow = remote.getCurrentWindow()
//  if(currentWindow.isMaximized()) {
//    currentWindow.unmaximize()
//  } else {
//    currentWindow.maximize()
//  }
//})

document.getElementById('closebtn').addEventListener('click', () => {
  remote.app.quit()
})
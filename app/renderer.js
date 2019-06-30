// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.
const { remote } = require('electron')
function minwin() {
	Window.minimize()
	console.log("Window Minimized")
}
function maxwin() {
	Window.maximize()
	console.log("Window Maximized")
}
function closewin() {
	Window.close()
}
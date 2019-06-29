// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.

const customTitlebar = require('custom-electron-titlebar');

new customTitlebar.Titlebar({
    shadow: true
});

titlebar.updateBackground(new Color(new RGBA(29, 29, 29, .7)));
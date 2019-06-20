#!/bin/bash
electron-packager ./ "DARiOX Media" --out=dist/osx --platform=darwin --arch=x64 --icon=image/logo.icns --osx-sign.identity="DARiOX" --overwrite
electron-packager ./ "DARiOX Media" --out=dist/win --platform=win32 --arch=x64 --app-version=1.1 --icon=image/logo.ico --overwrite
#zip -r dist/osx/DARiOXMediaApp-mac.zip dist/osx/DARiOX\ Media-darwin-x64/DARiOX\ Media.app/
#zip -r dist/osx/DARiOXMediaApp-mac.zip dist/osx/DARiOX\ Media-win32-x64/
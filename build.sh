#!/bin/bash
electron-packager ./app "DARiOX.Media" --out=dist/osx --platform=darwin --arch=x64 --icon=./image/circlogo.icns --osx-sign.identity="DARiOX" --overwrite
electron-packager ./app "DARiOX.Media" --out=dist/win --platform=win32 --arch=x64 --app-version=1.3 --icon=./image/circlogo.ico --overwrite
#zip -r dist/osx/DARiOXMediaApp-mac.zip dist/osx/DARiOX\ Media-darwin-x64/DARiOX\ Media.app/
#zip -r dist/osx/DARiOXMediaApp-mac.zip dist/osx/DARiOX\ Media-win32-x64/
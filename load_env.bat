@echo off
setlocal enabledelayedexpansion

:: Read the .env file and set environment variables
for /f "tokens=* delims=" %%a in ('.env') do (
    set "line=%%a"
    if not "!line!"=="" (
        if not "!line:~0,1!"=="#" (
            set "key=!line:~0,findstr /b /e /c:= "!line!"!"
            set "value=!line:~findstr /b /c:= !line!"
            set !key!=!value!
            echo !key!=!value!
        )
    )
)

endlocal & set

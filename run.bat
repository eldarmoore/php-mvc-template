@echo off
setlocal EnableDelayedExpansion

:: Load environment variables from .env file
for /f "usebackq tokens=1,* delims==" %%a in (".env") do (
    if not "%%a"=="" (
        set "%%a=%%b"
        set %%a=%%b
    )
)

if "%1" == "start" (
    docker-compose --env-file .env -f docker/docker-compose.yml up --build -d
) else if "%1" == "stop" (
    docker-compose --env-file .env -f docker/docker-compose.yml down
) else if "%1" == "build" (
    docker-compose --env-file .env -f docker/docker-compose.yml build
) else if "%1" == "shell" (
    for /f "tokens=2 delims==" %%a in ('findstr APP_NAME .env') do set APP_NAME=%%a
    docker exec -it %APP_NAME%_app /bin/bash
) else (
    echo "Usage: run.bat [start|stop|build|shell]"
)

endlocal

@echo off

rem -------------------------------------------------------------
rem  Falcon CMS command line bootstrap script for Windows.
rem -------------------------------------------------------------

@setlocal

set CMS_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%CMS_PATH%cms" %*

@endlocal

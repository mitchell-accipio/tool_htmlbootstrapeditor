echo off
set pluginPath=..\moodledev4\admin\tool\htmlbootstrapeditor

rem remove the current link
..\outils\junction -d src

rem set the link
..\outils\junction src %pluginPath%

pause
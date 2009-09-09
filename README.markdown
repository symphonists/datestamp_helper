# Datestamp Helper #

Version: 1.1
Author: [Rainer Borene](mailto:rainerborene@gmail.com)  
Build Date: 02 August 2009  
GitHub Repository: [http://github.com/rainerborene/datestamp_helper/tree/master](http://github.com/rainerborene/datestamp_helper/tree/master)  
Requirements: Symphony 2

Gets file modification time which is returned as a Unix timestamp.

## Installation ##

1. Upload the `datestamp_helper` folder in this archive to your Symphony `extensions` folder

2. Enable it by selecting `Datestamp Helper`, choose Enable from the with-selected menu, then click Apply.

## Example ##

    <link href="{$workspace}/stylesheets/screen.css:datestamp" media="screen, projection" rel="stylesheet" type="text/css" />

Output

    <link href="http://localhost/example/workspace/stylesheets/screen.css?t=1248022788" media="screen, projection" rel="stylesheet" type="text/css" />

Remember, you only can use it with files that are in `workspace` directory.

Have fun!
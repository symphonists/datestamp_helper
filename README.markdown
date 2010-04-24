# Datestamp Helper #

Version: 1.1  
Author: [Rainer Borene](mailto:me@rainerborene.com)  
Build Date: 24 April 2010  
GitHub Repository: [http://github.com/rainerborene/datestamp_helper/tree/master](http://github.com/rainerborene/datestamp_helper/tree/master)  
Requirements: Symphony 2.0.7

Gets file modification time which is returned as a Unix timestamp.

## Installation ##

1. Upload the `datestamp_helper` folder in this archive to your Symphony `extensions` folder

2. Enable it by selecting `Datestamp Helper`, choose Enable from the with-selected menu, then click Apply.

## Example ##

    <?xml version="1.0" encoding="UTF-8"?>
    <xsl:stylesheet version="1.0"
    	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    	xmlns:php="http://php.net/xsl"
    	exclude-result-prefixes="php">
	
    <xsl:output method="xml"
    	doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
    	doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
    	omit-xml-declaration="yes"
    	encoding="UTF-8"
    	indent="yes" />
	
    <xsl:template match="/">
	
    <html>
        <head>
            <title>Datestamp Development</title>
            <link rel="stylesheet" href="{php:function('mtime', 'assets/style.css')}"/>
        </head>
        <body>
    
        </body>
    </html>
	
    </xsl:template>
	
    </xsl:stylesheet>

Have fun!
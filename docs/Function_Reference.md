# Function Reference

## $theme Object
Theme object is loaded only when the page is being output. It handles the "interface" partition of the site and 
takes care of outputting assets and formatting pages. $theme is available in the /interface/ and /interface/controllers/
portition of the system. 

### site( $property )
Echos a property of the site directly.

### get_site( $property )
Returns a property of the site.

### title( $custom_format = null )
Generates a title for the site. Custom format may be supplied to change how the title is rendered.

### description( $scope = null )
Generates a description for the site. Scope may be provided to change the scope of the description
generated. In general, scope can be 'global', 'section', 'content'.

### generator()
Echos the generator string of the engine. This functionality can be suppressed using filters.

### theme_dir( $append = "" )
Echos the theme's directory, appending $append after the string. Note: the directory contains no
trailing backslash! 
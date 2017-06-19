Silverback Design System - A CINgroup Project
===========

>WordPress starter theme based on Underscores using Bootstrap with LESS for responsiveness, Grunt.js for automation and NPM for package management

Prerequisites: Node, NPM, WordPress

You also need `grunt-init`, which you can install globally with
```
npm install -g grunt-init
```

To clone the repository and add the template to grunt-init for automated project scaffolding run
```
git clone github:wilmoth77/Silverback---WP.git ~/.grunt-init/silverback
```


## Installation

Install a copy of WordPress on your localhost.
```
cd /var/www/YourWordPressInstallation/wp-content/themes
```
and create a new, empty theme folder.
```
mkdir NewThemeName
```
cd /var/www/YourWordPressInstallation/wp-content/themes/NewThemeName
```




## Installation

Install a copy of WordPress on your localhost. Cd into your themes folder with and create a new, empty theme folder.
```
cd /var/www/YourWordPressInstallation/wp-content/themes
```
and create a new, empty theme folder.
```
mkdir NewThemeName
```


### 1. Generate the template files in your empty theme folder

```
grunt-init silverback
```
You should give your theme a title and function-prefix (e.g. MyTheme / mytheme).

### 2. Install all required NPM modules

```
npm install
```

### 3. Compile folder structure with Grunt

```
grunt compile
```

### 4. Monitor your filesystem for changes

```
grunt
```

### 5. Build
```
Currently same Grunt tasks as "grunt compile", except less is ran without source mapping
grunt build
```

###

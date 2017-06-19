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
git clone github:wilmoth77/Silverback---WP ~/.grunt-init/silverback
```


## Installation

CD into your themes directory
```
cd /var/www/YourSite/wp-content/themes
```
Create a new, empty theme folder.
```
mkdir NewThemeName
```
CD to the new theme folder.
```
cd /var/www/YourSite/wp-content/themes/NewThemeName
```



### 1. Generate the template files in your empty theme directory

```
grunt-init silverback
```
You should give your theme a title and function-prefix (e.g. MyTheme / myt).

### 2. Install all required NPM modules

```
npm install
```


### 3. Compile folder structure with Grunt

```
grunt compile
```

### 5. Monitor your filesystem for changes

```
grunt
```

### 5. Build

```
grunt build
```
Same grunt tasks as "grunt compile" except Less is compiled without source maps.

###

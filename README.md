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
git clone github:wilmoth77/moscow.git ~/.grunt-init/moscow
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
grunt-init moscow
```
You should give your theme a title and function-prefix (e.g. MyTheme / mytheme).

### 2. Install all required NPM modules

```
npm install
```


### 3. Install Bootstrap and other frontend dependencies with Bower

To add your packages of choice, modify ```bower.json``` and run

```
bower install
```


### 4. Compile folder structure with Grunt

```
grunt compile
```

### 5. Monitor your filesystem for changes

```
grunt
```

###

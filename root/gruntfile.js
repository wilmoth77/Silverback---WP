'use strict';
module.exports = function(grunt) {
  // Load all tasks
  require('load-grunt-tasks')(grunt);
  // Show elapsed time
  require('time-grunt')(grunt);

  var jsFileList = [
    './node_modules/bootstrap/js/transition.js',
    './node_modules/bootstrap/js/alert.js',
    './node_modules/bootstrap/js/button.js',
    './node_modules/bootstrap/js/carousel.js',
    './node_modules/bootstrap/js/collapse.js',
    './node_modules/bootstrap/js/dropdown.js',
    './node_modules/bootstrap/js/modal.js',
    './node_modules/bootstrap/js/tooltip.js',
    './node_modules/bootstrap/js/popover.js',
    './node_modules/bootstrap/js/scrollspy.js',
    './node_modules/bootstrap/js/tab.js',
    './node_modules/bootstrap/js/affix.js',
    './assets/js/plugins/*.js',
    './assets/js/theme.js'
  ];

  // Initialize configuration object
  grunt.initConfig({

    // Less tasks
    less: {
      development: {
        files: {
          "./assets/css/wp-login.css":"./assets/less/wp-login.less",
          "./public/css/app.min.css":"./assets/less/main.less",
        },
        options: {
          compress: true,
          sourceMap: true,
          sourceMapFilename: 'assets/css/app.css.map',
          sourceMapRootpath: '/wp-content/themes/{%= title %}/',
          sourceMapURL: '/wp-content/themes/{%= title %}/assets/css/app.css.map'
        },
        plugins: [
          new (require('less-plugin-autoprefix'))({browsers: ["> 5%, last 2 versions"]})
        ],
      },
      dist: {
        files: {
          "./public/css/wp-login.min.css":"./assets/less/wp-login.less",
          "./public/css/app.min.css":"./assets/less/main.less",
        },
        options: {
          compress: true,
          sourceMap: false
        },
        plugins: [
          new (require('less-plugin-autoprefix'))({browsers: ["> 5%, last 2 versions"]})
        ],
      },
    },


    // Concatenate and minify
    concat: {
      options: {
        separator: ';',
      },
      development: {
        src: [jsFileList],
        dest: './assets/js/script.js',
      },
    },
    uglify: {
      dist: {
        files: {
          './public/js/script.min.js': './assets/js/script.js',
        }
      }
    },
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'gruntfile.js',
        'assets/js/*.js',
        '!assets/js/script.js',
      ]
    },

    watch: {
      js: {
        files: [
          jsFileList,
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'concat', 'uglify'],
      },
      less: {
        files: [
          './assets/less/*.less',
          './assets/less/**/*.less'
        ],
        tasks: ['less:development'],
      },
      images: {
        files: ['./assets/img/**/*.{png,jpg,gif}'],
        tasks: ['imagemin'],
      },
      html: {
        files: ['**/*.php'],
        tasks: [],
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          '**/*.php',
          './assets/css/app.css',
          './assets/js/*.js'
        ]
      }
    },

    copy: {
      main: {
        files: [
          {expand: true,
            cwd: './node_modules/bootstrap/dist/fonts/',
            src: ['*.*'],
            dest: './assets/fonts'
          },
        ],
      }
    },

  });
  // Compile tasks
     grunt.registerTask('compile', ['concat', 'less:development', 'uglify', 'jshint', 'copy']);
     grunt.registerTask('build', ['concat', 'less:dist', 'uglify', 'jshint', 'copy']);
  // Set default task
  grunt.registerTask('default', ['watch']);
};

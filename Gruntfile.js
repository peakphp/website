module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    copy: {
      main: {
        files: [],
      }
    },

    sass: {
      prod: {
        options: {
          sourceMap: false,
        },
        files: {
          "public/assets/css/site.css": "src/sass/import.scss"
        }
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      js: {
        src: [
          'src/js/libs/jquery-3.2.1.min.js',
        ],
        dest: 'public/assets/js/libs.min.js',
      },

    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          "public/assets/css/site.min.css": ["public/assets/css/site.css"]
        }
      }
    },

    watch: {
      scripts: {
        files: [
          'src/js/*.js',
          'src/sass/*.scss',
        ],
        tasks: ['default'],
        options: {
          spawn: false,
        },
      },
    },

    clean: {
      folders: [ ],
      files: [
        "public/assets/css/site.css",
      ]
    }

  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['sass:prod', 'copy', 'concat:js', 'cssmin', 'clean']);

};
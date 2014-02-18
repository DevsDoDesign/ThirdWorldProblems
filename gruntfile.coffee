module.exports = (grunt) ->

  grunt.initConfig
    pkg: grunt.file.readJSON 'package.json'

    watch:
      scripts:
        files: [
          'public/assets/sass/screen.scss'
        ]
        tasks: ['sass']
        options:
          nospawn: true
          interrupt: true


    # GRUNT CONTRIB SASS

    # sass:
    #   compile:
    #     options:
    #       sourcemap: false
    #       style: 'expanded'
    #     files:
    #       'public/assets/css/scaffolder.css': 'public/assets/sass/scaffolder.scss'


    # GRUNT SASS (C COMPILER)

    sass:
      compile:
        files:
          'public/assets/css/screen.css': 'public/assets/sass/screen.scss'


  # grunt.loadNpmTasks 'grunt-contrib-handlebars'
  grunt.loadNpmTasks 'grunt-sass'
  grunt.loadNpmTasks 'grunt-contrib-watch'


  grunt.registerTask 'default', ['sass','watch']
module.exports = {
    options: {
        spawn: false,
        livereload: 35729
    },
    scripts: {
        files: [
            '../../assets/src/js/*.js'
        ],
        tasks: [
            'jshint',
            'uglify'
        ]
    },
    styles: {
        files: [
            '../../assets/src/css/*.less'
        ],
        tasks: [
            'less:dev'
        ]
    },
    php: {
        files: [
            '../../*.php'
        ],
        options: {
          livereload: 35729
        }
    }
};

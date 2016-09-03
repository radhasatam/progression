module.exports = {
    all: {
        files: [{
            expand: true,
            cwd: '../assets/src/js',
            src: '*.js',
            dest: '../assets/js',
            ext: '.min.js'
        }]
    }
};

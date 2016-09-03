module.exports = {
    all: {
        files: [{
            expand: true,
            cwd: '../assets/src/images',
            src: ['*.{png,jpg,gif}'],
            dest: '../assets/images'
        }]
    }
};

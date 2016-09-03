module.exports = {
    // Development settings
    dev: {
        options: {
            style: 'nested'
        },
        files: [{
            expand: true,
            cwd: '../assets/src/less',
            src: ['*.less'],
            dest: '../assets/css',
            ext: '.css'
        }]
    },
    // Production settings
    prod: {
        options: {
            //outputStyle: 'compressed',
            compress: true,
        },
        plugins: [
          new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
        ],
        files: [{
            expand: true,
            cwd: '../assets/src/less',
            src: ['*.less'],
            dest: '../assets/css',
            ext: '.min.css'
        }]
    }
};

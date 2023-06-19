module.exports = function(grunt) {
	grunt.initConfig({
		sass: {
			dev: {
				files: [{
					expand: true,
					cwd: 'assets/sass',
					src: ['*.scss', 'blocks/*.scss', 'woocommerce/woocommerce.scss'],
					dest: 'assets/css',
					ext: '.css'
				}],
			},
			dist: {
				files: [{
					expand: true,
					cwd: 'assets/sass',
					src: ['*.scss', 'blocks/*.scss', 'woocommerce/woocommerce.scss'],
					dest: 'assets/css',
					ext: '.css'
				}],
				options: { 'no-source-map': '' }
			},

		},
		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'assets/css',
					src: ['*.css', '!*.min.css', 'blocks/*.css', 'blocks/!*.min.css', 'woocommerce/*.css', 'woocommerce/!*.min.css'],
					dest: 'assets/css',
					ext: '.min.css'
				}],
				options: { 'sourceMap': false }
			}
		},
		watch: {
			css: {
				files: ['assets/sass/*.scss', 'assets/sass/blocks/*.scss', 'assets/sass/woocommerce/*.scss'],
				tasks: ['sass:dev'],
			},
		},
		autoprefixer: {
			options: {
				processors: [
					require('autoprefixer')(),
				]
			},
			dist: {
				src: 'assets/css/**/*.css'
			}
		},
		clean: ['assets/css/**/*.min.css']
	});
	
	
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-autoprefixer');
	
	grunt.registerTask('default', ['sass:dev', 'autoprefixer']);
	grunt.registerTask('css', ['sass:dist', 'autoprefixer', 'clean', 'cssmin']);
	grunt.registerTask('dist', ['css']);
};
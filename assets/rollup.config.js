import babel from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import copy from 'rollup-plugin-copy';
import cssnano from 'cssnano';
import livereload from 'rollup-plugin-livereload';
import postcss from 'rollup-plugin-postcss';
import resolve from '@rollup/plugin-node-resolve';
import sortMediaQueries from 'postcss-sort-media-queries';
import terser from '@rollup/plugin-terser';

const IS_DEVELOPMENT = process.env.ROLLUP_WATCH === 'true';

export default {
  input: 'src/scripts/main.js',
  output: {
    file: 'dist/main.min.js',
    format: 'iife'
  },
  plugins: [
    resolve(),
    commonjs(),
    babel( { babelHelpers: 'bundled' } ),
    !IS_DEVELOPMENT && terser(),
    postcss( {
      extract: 'main.min.css',
      extensions: [ '.css', '.scss', '.sass' ],
      use: [ 'sass' ],
      plugins: [ cssnano( { preset: IS_DEVELOPMENT ? 'default' : 'advanced' } ), sortMediaQueries() ]
    } ),
    copy( {
      targets: [ { src: 'src/fonts/**/*.*', dest: 'dist/fonts' }, { src: 'src/images/**/*.*', dest: 'dist/images' } ]
    } ),
    IS_DEVELOPMENT && livereload()
  ]
};
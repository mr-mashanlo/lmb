import babel from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import cssnano from 'cssnano';
import livereload from 'rollup-plugin-livereload';
import postcss from 'rollup-plugin-postcss';
import resolve from '@rollup/plugin-node-resolve';
import sortMediaQueries from 'postcss-sort-media-queries';
import terser from '@rollup/plugin-terser';

const IS_DEVELOPMENT = process.env.ROLLUP_WATCH === 'true';

export default {
  input: 'assets/src/scripts/main.js',
  output: {
    file: 'assets/dist/main.min.js',
    format: 'iife'
  },
  plugins: [
    resolve(),
    commonjs(),
    babel( { babelHelpers: 'bundled' } ),
    !IS_DEVELOPMENT && terser(),
    postcss({
      include: "assets/src/styles/main.sass",
      extract: 'main.min.css',
      extensions: [ '.css', '.scss', '.sass' ],
      use: [ 'sass' ],
      plugins: [ cssnano( { preset: IS_DEVELOPMENT ? 'default' : 'advanced' } ), sortMediaQueries() ]
    } ),
    IS_DEVELOPMENT && livereload()
  ]
};
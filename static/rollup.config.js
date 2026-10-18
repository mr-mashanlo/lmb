import { babel } from '@rollup/plugin-babel';
import terser from '@rollup/plugin-terser';
import postcss from 'rollup-plugin-postcss'
import cssnano from 'cssnano';
import autoprefixer from 'autoprefixer';

export default {
  input: [ 'src/scripts/main.js' ],
  output: {
    dir: '../theme/assets',
    format: 'es',
    entryFileNames: '[name].min.js',
    assetFileNames: '[name].min.[ext]',
  },
  plugins: [
    babel(),
    terser(),
    postcss( {
      extract: true,
      plugins: [ cssnano(), autoprefixer() ]
    } )
  ]
};
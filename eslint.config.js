import globals from "globals";
import pluginJs from "@eslint/js";
import simpleImportSort from 'eslint-plugin-simple-import-sort';

/** @type {import('eslint').Linter.Config[]} */

export default [
  { languageOptions: { globals: globals.browser } },
  pluginJs.configs.recommended,
    {
    plugins: { 'simple-import-sort': simpleImportSort },
    rules: {
      'no-trailing-spaces': 'error',
      'no-multiple-empty-lines': 'error',
      'comma-spacing': 'error',
      'comma-dangle': 'error',
      'indent': [ 'error', 2 ],
      'semi': [ 'error', 'always' ],
      'quotes': [ 'error', 'single' ],
      'object-curly-spacing': [ 'error', 'always' ],
      'array-bracket-spacing': [ 'error', 'always' ],
      'space-in-parens': [ 'error', 'always' ],
      'linebreak-style': [ 'error', 'unix' ],
      'simple-import-sort/exports': 'error',
      'simple-import-sort/imports': 'error'
    }
  }
];
import globals from 'globals';
import { FlatCompat } from '@eslint/eslintrc';
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import { defineConfig } from 'eslint/config';
import eslintPluginPrettier from 'eslint-plugin-prettier';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const compat = new FlatCompat({
    baseDirectory: __dirname,
});

export default defineConfig([
    ...compat.config({
        extends: ['standard', 'prettier'],
    }),
    {
        files: ['**/*.{js,mjs,cjs}'],
        languageOptions: {
            sourceType: 'module',
            globals: {
                ...globals.browser,
                ...globals.es2021,
            },
        },
        plugins: {
            prettier: eslintPluginPrettier,
        },
        rules: {
            'array-callback-return': 'warn',
            semi: ['warn', 'always'],
            'no-void': 'off',
            'prettier/prettier': 'error',
            'no-case-declarations': 'warn',
            'no-sparse-arrays': 'warn',
            'no-regex-spaces': 'error',
            'use-isnan': 'error',
            'no-fallthrough': 'error',
            'no-empty-pattern': 'error',
            'no-redeclare': 'error',
            'no-self-assign': 'error',
            strict: 'off',
            'sort-imports': [
                'warn',
                {
                    ignoreCase: true,
                    ignoreDeclarationSort: true,
                },
            ],
            'no-undef': 'off',
            'no-console': 'off',
            'no-implicit-globals': 'off',
        },
    },
]);

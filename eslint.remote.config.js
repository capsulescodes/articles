import stylistic from '@stylistic/eslint-plugin';


export default [
	{
		plugins : {
			'@stylistic' : stylistic,
		},
		files : [ '**/*.js' ],
		rules : {
			'@stylistic/brace-style' : 'error',
			'@stylistic/space-before-blocks' : [ 'error', 'never' ],
			'@stylistic/space-in-parens' : [ 'error', 'never' ]

		},
	},
];

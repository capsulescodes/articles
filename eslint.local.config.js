import stylistic from '@stylistic/eslint-plugin';


export default [
	{
		plugins : {
			'@stylistic' : stylistic,
		},
		files : [ '**/*.js' ],
		rules : {
			'@stylistic/brace-style' : [ 'error', 'allman' ],
			'@stylistic/space-in-parens' : [ 'error', 'always' ]
		},
	},
];

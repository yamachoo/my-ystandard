const fs = require( 'fs-extra' );
const globby = require( 'globby' );

const file = 'my-ystandard';

fs.copySync( 'assets', `${ file }/assets` );
fs.copySync( 'inc', `${ file }/inc` );

const phps = globby.sync( '*.php' );

for ( const php of phps ) {
	fs.copyFileSync( php, `${ file }/${ php }` );
}

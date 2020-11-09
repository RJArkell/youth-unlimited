/*
---------------------------------------
Assets - Build
---------------------------------------
*/

const
  {series, parallel} = require('gulp'),
  env = require('dotenv')
;

function deploy() {

}

/*
 * Exports
 */

exports.deploy = series(
  deploy
);

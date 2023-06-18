let mix = require('laravel-mix')

require('./nova.mix')

mix
  .setPublicPath('dist')
  .js('resources/js/xero-manager.js', 'js')
  .vue({ version: 3 })
  .css('resources/css/xero-manager.css', 'css')
  .nova('tndjx/xero-manager')

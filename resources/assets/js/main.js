var angular = require('angular');

angular.module('bugueadosApp', [])
  .service('Request', require('./services/Request.js'))
  .controller('ScoreController',  require('./controllers/ScoreController.js'))

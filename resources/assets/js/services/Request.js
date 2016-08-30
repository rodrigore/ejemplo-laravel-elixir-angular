module.exports = function($http) {

  this.createScore = function(data) {
    var $promise = $http.post('/scores/create', data);

    $promise.then(function(d) {
      console.log('bacan', d);
    });

    $promise.then(function(errors){
      console.log(errors);
    });
  };
}

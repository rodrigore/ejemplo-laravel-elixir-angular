module.exports = function (Request) {
  var vm = this;

  vm.data = {
    username: '',
    email: ''
  };

  vm.submitForm = function() {
    Request.createScore(vm.data);
  };
};

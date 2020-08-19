'use strict';


app
  // your Firebase data URL goes here, no trailing slash
  .constant('FBURL', 'https://resplendent-heat-5958.firebaseio.com/')

  // where to redirect users if they need to authenticate (see routeSecurity.js)
  .constant('loginRedirectPath', 'core.login')

  // main app settings
  .controller('MainCtrl', ['$scope', 'fbutil', 'FBURL', 'Auth', '$state', 'loginRedirectPath', '$firebaseObject', function($scope, fbutil, FBURL, Auth, $state, loginRedirectPath, $firebaseObject) {

    $scope.main = {
      title: 'Minovate CRUD App',
      appName: 'minovateApp',
      settings: {
        navbarHeaderColor: 'scheme-default',
        sidebarColor: 'scheme-default',
        brandingColor: 'scheme-default',
        activeColor: 'default-scheme-color',
        headerFixed: true,
        asideFixed: true,
        rightbarShow: false
      }
    };

    $scope.settings = $firebaseObject(new Firebase(FBURL).child('settings'));

    Auth.$onAuth(function(user) {
      if(user) {
        var unbind;
        // create a 3-way binding with the user profile object in Firebase
        var profile = $firebaseObject(fbutil.ref('users', user.uid));
        profile.$bindTo($scope, 'profile').then(function(ub) { unbind = ub; });

        $scope.logout = function() {
          if( unbind ) { unbind(); }
          profile.$destroy();
          Auth.$unauth();
          $state.go(loginRedirectPath, {}, {reload: true});
        };
      }
    });
  }]);

'use strict';

/* global app:true */
/* exported app */

var app = angular
  .module('fitLogApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngTouch',
    'firebase',
    'ui.router',
    'ui.bootstrap',
    'ngTable',
    'ui.utils',
    'toastr',
    'localytics.directives',
    'ngFileUpload',
    'slick',
    'angles'
  ]);

  app.run(['$rootScope', 'Auth', function($rootScope, Auth) {

    // track status of authentication
    Auth.$onAuth(function(user) {
      $rootScope.loggedIn = !!user;
    });

  }]);


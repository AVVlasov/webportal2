 'use strict';
var webPortalApplication = angular.module('web-portal', ['ui.router']);

webPortalApplication.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('');

    $stateProvider
        .state('currency', {
            url: 'currency',
            templateUrl: 'view/part-currency.html'
        })
        .state('prior-approval', {
            url: 'prior-approval',
            templateUrl: 'view/part-prior-approval.html'
        })
        .state('contact', {
            url: 'contact',
            templateUrl: 'view/part-contact.html'
        })
        .state('complaints', {
            url: 'complaints',
            templateUrl: 'view/part-complaints.html'
        })
      ;

});



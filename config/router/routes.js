var app = angular.module('domain', [
    'ngRoute',
    'Controllers'
]);

app.config(['$routeProvider',
            function ($routeProvider) {
        $routeProvider.
        when('/', { 
            templateUrl: 'app/view/pages/templates/blog.php',
            controller: 'blogController' 
        }).
        when('/resume', { 
            templateUrl: 'app/view/pages/templates/resume.php',
            controller: 'resumeController' 
        }).
        when('/portfolio', { 
            templateUrl: 'app/view/pages/templates/portfolio.php',
            controller: 'portfolioController' 
        }).
         when('/contact', { 
            templateUrl: 'app/view/pages/templates/contact.php',
            controller: 'contactController' 
        }).
        when('/about', { 
            templateUrl: 'app/view/pages/templates/about.php',
        }).
        otherwise({ 
            redirectTo: '/'
        });
    }]);
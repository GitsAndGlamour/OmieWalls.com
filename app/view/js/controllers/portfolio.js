Controllers.controller('portfolioController', ['$scope',
  function ($scope) {
        $scope.filterCourses = function() {

            $year = $('#select-year').val();
            $semester = $('#select-semester').val();
            $courses = '';
            console.log($year, ' ', $semester);

            if($year == '2014') {
                $('#spring-semester').show();
                $('#summer-semester').show();
                $('#fall-semester').hide();
                $('#interim-semester').hide();
                $courses = [$('<option value="">All</option')];
                if($semester == 'Spring') {
                     $courses = [$('<option>All</option>'), $('<option>Info St 110</option>'), $('<option>Info St 210</option>'), $('<option>Info St 230</option>'), $('<option>Info St 240</option>'), $('<option>Comp Sci 210</option>')];
                } else if ($semester == 'Summer') {
                     $courses = [$('<option>Comp Sci 251</option>')];
                } else if ($semester == 'All') {
                     $courses = [$('<option>All</option>'), $('<option>Info St 110</option>'), $('<option>Info St 210</option>'), $('<option>Info St 230</option>'), $('<option>Info St 240</option>'), $('<option>Comp Sci 210</option>'), $('<option>Comp Sci 251</option>')];
                }
            } else if ($year == '2015') {
                $('#spring-semester').hide();
                $('#summer-semester').show();
                $('#fall-semester').show();
                $('#interim-semester').show();
                $courses = [$('<option value="">All</option')];
                if($semester == 'Summer') {
                     $courses = [$('<option value="">All</option>'), $('<option>Info St 340</option>'), $('<option>Info St 375</option>')];
                } else if ($semester == 'Fall') {
                     $courses = [$('<option value="">All</option>'), $('<option>Info St 310</option>'), $('<option>Info St 410</option>'), $('<option>Info St 430</option>'), $('<option>Info St 491</option>')];
                } else if ($semester == 'Interim'){
                    $courses = [$('<option value="">All Projects</option>')];
                } else if ($semester == 'All') {
                     $courses = [$('<option value="">All</option>'), $('<option>Info St 340</option>'), $('<option>Info St 375</option>'), $('<option>Info St 310</option>'), $('<option>Info St 410</option>'), $('<option>Info St 430</option>'), $('<option>Info St 491</option>'), $('<option>All Projects</option>')];
                }
            } else if ($year == '2016') {
                $('#spring-semester').show();
                $('#summer-semester').show();
                $('#fall-semester').hide();
                $('#interim-semester').show();
                $courses = [$('<option value="">All</option')];
                if($semester == 'Spring') {
                     $courses = [$('<option value="">All</option>'), $('<option>Info St 383</option>'), $('<option>Info St 440</option>'), $('<option>Info St 490</option>'), $('<option>Info St 491</option>'), $('<option>Info St 583</option>'), $('<option>Art 124</option>')];
                } else if ($semester == 'Summer') {
                     $courses = [$('<option>Info St 491</option>')];
                } else if ($semester == 'Interim'){
                    $courses = [$('<option value="">All Projects</option>')];
                } else if ($semester == 'All') {
                     $courses = [$('<option value="">All</option>'), $('<option>Info St 383</option>'), $('<option>Info St 440</option>'), $('<option>Info St 490</option>'), $('<option>Info St 491</option>'), $('<option>Info St 583</option>'), $('<option>Art 124</option>'), $('<option>All Projects</option>')];
                }
            } else if ($year == 'All'){
                $('#spring-semester').hide();
                $('#summer-semester').hide();
                $('#fall-semester').hide();
                $('#interim-semester').hide();
                $courses = [$('<option value="">All</option')];
                if($semester == 'All') {
                    $courses = [$('<option value="">All</option>'), $('<option>Info St 110</option>'), $('<option>Info St 210</option>'), $('<option>Info St 230</option>'), $('<option>Info St 240</option>'), $('<option>Comp Sci 210</option>'), $('<option>Comp Sci 251</option>'), $('<option>Info St 340</option>'), $('<option>Info St 375</option>'), , $('<option>Info St 310</option>'), $('<option>Info St 410</option>'), $('<option>Info St 430</option>'), $('<option>Info St 491</option>'), $('<option>Info St 383</option>'), $('<option>Info St 440</option>'), $('<option>Info St 490</option>'), $('<option>Info St 491</option>'), $('<option>Info St 583</option>'), $('<option>Art 124</option>')];
                }
            } else {
                $courses = [$('<option value="">All</option>')];
            }

            $('#select-course').empty();
            $('#select-course').append($courses);
        }
        $scope.toggleFilterSwitch = function () {
                    $('.filter-results').toggle('fast');
                    $('#icon-toggler').find('img').toggle('fast');
                };
        $scope.clear = function() {
          $('#search-portfolio').val('');
        };
  }]);

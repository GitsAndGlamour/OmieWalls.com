<?php
    $model_path = '../../../model/portfolio/model.php';
    require ($model_path);
 ?>
<form name="portfolio-filter" id="portfolio-filter-form" action="#/portfolio/:filterResults/">
    <fieldset id="portfolio-filter">
        <legend>Filter Results
            <span id="icon-toggler" ng-click="toggleFilterSwitch()">
                <img src="app/view/img/icons/toggle_on-icon.png"/>
                <img src="app/view/img/icons/toggle_off-icon.png" style="display:none"/>
            </span>
            <span style="width: 33%; float: right;">
                    <input class="form-control" id="search-portfolio" placeholder="Search" name="keyword" type="text" ng-focus="clear()" >
            </span>
        </legend>
        <br>
        <div class="form-group filter-results">
            <label for="select" class="control-label">Languages</label>
            <select class="form-control" id="select-language" name="language">
                <option value="">All</option>
                <option>PHP</option>
                <option>SQL</option>
                <option>Java</option>
                <option>HTML</option>
                <option>CSS</option>
                <option>JavaScript</option>
                <option>jQuery</option>
                <option>JSON</option>
                <option>XHTML</option>
                <option>XML</option>
                <option>LESS</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group filter-results">
            <label for="select" class="control-label">Year</label>
            <select class="form-control" id="select-year" ng-change="filterCourses()" name="year" ng-model="year">
                <option selected="true" value="" id="all-years">All</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
            </select>
        </div>
        <div class="form-group filter-results">
            <label for="select" class="control-label">Semester</label>
            <select class="form-control" id="select-semester" ng-change="filterCourses()" name="semester" ng-model="semester">
                <option selected="true" value="" id="all-semesters">All</option>
                <option id="fall-semester">Fall</option>
                <option id="spring-semester">Spring</option>
                <option id="summer-semester">Summer</option>
                <option id="interim-semester">Interim</option>
            </select>
        </div>
        <div class="form-group filter-results">
            <label for="select" class="control-label">Course</label>
            <select class="form-control" id="select-course" name="course">
                <option value="">All</option>
            </select>
        </div>
        <input id="submit" type="submit" placeholder="Submit" class="btn btn-default filter-results"/>
    </fieldset>
</form>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Project</th>
            <th>Date</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php getResults(); ?>
    </tbody>
</table>
<br>
<br>
<hr>

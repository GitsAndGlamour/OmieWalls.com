<?php
$db_path = '../../../../config/db/db.php';
require ($db_path);
function getQuery($needle, $haystack, $http) {
    if(strrpos($haystack, $needle) >= 1){
        return filter_var(urldecode(explode('?',$http)[1]), FILTER_SANITIZE_STRING);
    } else {
        return null;
    }
}

function setParams() {
    $http_referer = $_SERVER['HTTP_REFERER'];
    $needle = '?';
    $haystack = $http_referer;
    $query = getQuery($needle, $haystack, $http_referer);
    if(isset($query)) {
        $form = explode('&', $query);

        $keyword = "(title LIKE '%". explode('=', $form[0])[1]."%' OR description LIKE '%". explode('=', $form[0])[1]. "%')";
        $language = "tags LIKE '%". explode('=', $form[1])[1]."%'";
        $year = "year LIKE '%". explode('=', $form[2])[1]."%'";
        $semester = "semester LIKE '%". explode('=', $form[3])[1]."%'";
        $course = "course  LIKE '%". explode('=', $form[4])[1]."%'";
        $array = [$keyword, $language, $year, $semester, $course];
        foreach ($array as $param) {
            str_replace('%3F+undefined%3Aundefined+%3F', '', $param);
            echo '<script>console.log("'.$param.'")</script>';
        }
        $params = 'WHERE '.implode(' AND ', $array).";";
        echo '<script>console.log("'.$params.'")</script>';
        return $params;
    }
    return ";";
}
function setQuery($params) {
    $query = "select project_id, url, title, description, date_format(date, '%b %Y') as `date` from portfolio inner join class on class.class_id = portfolio.class_id";
    $query_array = [$query, $params];
    $query_string = implode(' ', $query_array);
    return $query_string;
}
function getResults() {
    $database = new DB();
    //OR...
    $database = DB::getInstance();
    $params = setParams();
    $query = setQuery($params);
    $results = $database->get_results($query);
    foreach( $results as $row ) {
        $id = $row['project_id'];
        $url = $row['url'];
        $title = $row['title'];
        $description = $row['description'];
        $date = $row['date'];
        $script = "$('#modal-".$id."').children().children().children().children('iframe').prop('src','".$url."');";
        echo '
        <tr data-toggle="modal" data-target="#modal-'.$id.'" onclick="'.$script.'">
            <td>'.$date.'</td><td>'.$title.'</td><td>'.$description.'</td>
        </tr>
        <div class="modal fade" id="modal-'.$id.'" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">'.$title.'</h4>
                        </div>
                        <div class="modal-body">
                           <iframe src="" style="border:none; width: 100%; height:65%;"></iframe>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}


?>

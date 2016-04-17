<?php 

$db_path = '../../../../config/db/db.php';
require ($db_path);
$database = new DB();
//OR...
$database = DB::getInstance();

$query = "SELECT blog_id, url, title, subtitle, date_format(date, '%M %d, %Y') as `formatted_date` FROM blog";
$results = $database->get_results($query);
foreach( $results as $row ) {
    $id = $row['blog_id'];
    $href = '#/blog/:blog'.$id;
    $url = $row['url'];
    $title = $row['title'];
    $subtitle = $row['subtitle'];
    $date = $row['formatted_date'];
    $post_preview = 
    '<div class="post-preview">
        <a data-toggle="modal" data-target="#modal-'.$id.'">
            <h2 class="post-title">'.$title.'</h2>
            <h3 class="post-subtitle">'.$subtitle.'</h3>
        </a>
        <p class="post-meta">Posted by <a href="#/about">Omie Walls</a> on '.$date.'</p>
        <div class="modal fade" id="modal-'.$id.'" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">'.$title.'</h4>
                    </div>
                    <div class="modal-body">
                       <iframe src="'.$url.'" style="border:none; width: 100%; height:65%;"></iframe>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 <hr>
';
    echo $post_preview;
}; 





?>

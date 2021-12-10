<?php

function getMainPost()
{
    $db=mysqli_connect("localhost", "Krisadell", "Kr1s4nd1_03", "dramakost");
    $query = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);

    while($row = mysqli_fetch_array($result))
    {
        $query = "SELECT name FROM Category INNER JOIN
        has_category ON category.id = has_category.category WHERE has_category.post = ". $row['id'];
        $cat_result = mysqli_query($db, $query);
        $categories = "";
        while($category = mysqli_fetch_array($cat_result))
        {
            $categories .= '<span class="badge badge-success fs-5">'. $category['name'].'</span>';
        }
        echo '
        <article class="col-md-4 p-0">
          <div class="m-1 shadow">  
            <a target="_blank" href="detail-1.html">        
            <img class="img-fluid" alt="'. $row['title'].'" src="asset/'. $row['id'].'.jpg">
            </a>
            <div class="article-content px-2 py-1">
              <h2 class="fs-3 font-weight-bold mb-1">'. $row['title'].'</h2>
              <div class="d-flex justify-content-between">
                <p>Rp. '.number_format($row['price'], 1, ",", ".").' </p>
                <p>'.$categories.'</p>
              </div>
            </div>
            <div class="card-footer text-muted text-center"> '. substr($row['date'], 0, 10).' </div>
          </div>
        </article>';
    }
}

?>

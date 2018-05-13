<?php
/**
 * DbContent.
 */

/**
 * Displays dbcontents.
 */
$app->router->get("dbcontent", function () use ($app) {
    $sql = "SELECT * FROM content;";
    $app->db->connect();
    
    $data = [
        "title" => "Show all content",
        "resultset" => $app->db->executeFetchAll($sql)
    ];

    $app->view->add("dbcontent/navbar", $data);
    $app->view->add("dbcontent/show-all", $data);
    $app->page->render($data);
});

$app->router->get("dbcontent/add", function () use ($app) {
    $data = [
        "title" => "Add"
    ];

    $app->view->add("dbcontent/navbar", $data);
    $app->view->add("dbcontent/add", $data);
    $app->page->render($data);
});

$app->router->post("dbcontent/add", function () use ($app) {
    $app->db->connect();
    $title = $app->request->getPost("contentTitle");

    $sql = "INSERT INTO content (title) VALUES (?);";
    $app->db->execute($sql, [$title]);
    $id = $app->db->lastInsertId();
    header("Location: edit?id=$id");
    exit;
});

$app->router->get("dbcontent/edit", function () use ($app) {
    $app->db->connect();
    $contentId = $app->request->getGet("id");
    $sql = "SELECT * FROM content WHERE id = ?;";

    $data = [
        "title" => "Edit",
        "content" => $app->db->executeFetch($sql, [$contentId])
    ];

    $app->view->add("dbcontent/navbar", $data);
    $app->view->add("dbcontent/edit", $data);
    $app->page->render($data);
});

$app->router->post("dbcontent/edit", function () use ($app) {
    $app->db->connect();
    $post = $app->request->getPost();

    $slug = "";
    if (empty($post["contentSlug"])) {
        $slug = slugify($post["contentTitle"]);
    } else {
        $slug = $post["contentSlug"];
    }

    $count = $app->db->executeFetch("SELECT COUNT(*) AS count FROM content WHERE slug = ? AND NOT id = ?;", [$slug, $post["contentId"]])->count;
    if ($count > 0) {
        $search = $slug . "%";
        $count = $app->db->executeFetch("SELECT COUNT(*) AS count FROM content WHERE slug LIKE ?;", [$search])->count;
        $slug = $slug . $count;
    }

    $path = null;
    if (!empty($post["contentPath"])) {
        $path = $post["contentPath"];
    }

    if ($path) {
        $count = $app->db->executeFetch("SELECT COUNT(*) AS count FROM content WHERE path = ? AND NOT id = ?;", [$path, $post["contentId"]])->count;
        if ($count > 0) {
            $data = [
                "title" => "Error",
                "message" => "There alredy exists content with the path $path."
            ];
            $app->view->add("dbcontent/error", $data);
            $app->page->render($data);
        }
    }

    if (isset($post["contentId"])) {
        if (empty($slug)) {
            $sql = "UPDATE content SET title=?, path=?, data=?, type=?, filter=?, published=? WHERE id = ?;";
            $app->db->execute($sql, [
                $post["contentTitle"],
                $path,
                $post["contentData"],
                $post["contentType"],
                $post["contentFilter"],
                $post["contentPublish"],
                $post["contentId"]
            ]);
        } else {
            $sql = "UPDATE content SET title=?, path=?, slug=?, data=?, type=?, filter=?, published=? WHERE id = ?;";
            $app->db->execute($sql, [
                $post["contentTitle"],
                $path,
                $slug,
                $post["contentData"],
                $post["contentType"],
                $post["contentFilter"],
                $post["contentPublish"],
                $post["contentId"]
            ]);
        }
        header("Location: /dbcontent");
        exit;
    } else {
        $data = [
            "title" => "Error",
            "message" => "No id to edit."
        ];
        $app->view->add("dbcontent/error", $data);
        $app->page->render($data);
    }
});

$app->router->get("dbcontent/delete", function () use ($app) {
    $app->db->connect();
    $contentId = $app->request->getGet("id");
    $sql = "SELECT id, title FROM content WHERE id = ?;";

    $data = [
        "title" => "Edit",
        "content" => $app->db->executeFetch($sql, [$contentId])
    ];

    $app->view->add("dbcontent/navbar", $data);
    $app->view->add("dbcontent/delete", $data);
    $app->page->render($data);
});

$app->router->post("dbcontent/delete", function () use ($app) {
    $app->db->connect();
    $contentId = $app->request->getPost("contentId");
    $sql = "UPDATE content SET deleted=NOW() WHERE id=?;";

    if (isset($contentId)) {
        $app->db->execute($sql, [$contentId]);
        header("Location: /dbcontent");
        exit;
    } else {
        $data = [
            "title" => "Error",
            "message" => "No id to delete."
        ];
        $app->view->add("dbcontent/error", $data);
        $app->page->render($data);
    }
});

$app->router->get("dbcontent/page", function () use ($app) {
    $app->db->connect();
    $route = $app->request->getGet("route");

    if (empty($route)) {
        $sql = <<<EOD
SELECT
    *,
    CASE 
        WHEN (deleted <= NOW()) THEN "isDeleted"
        WHEN (published <= NOW()) THEN "isPublished"
        ELSE "notPublished"
    END AS status
FROM content
WHERE type=?
;
EOD;
        $data = [
            "title" => "Pages",
            "resultset" => $app->db->executeFetchAll($sql, ["page"])
        ];

        $app->view->add("dbcontent/navbar", $data);
        $app->view->add("dbcontent/pages", $data);
        $app->page->render($data);
    } else {
        $sql = "SELECT * FROM content WHERE path = ?;";
        $content = $app->db->executeFetch($sql, [$route]);

        $data = [
            "title" => $content->title,
            "content" => $content
        ];

        $app->view->add("dbcontent/navbar", $data);
        $app->view->add("dbcontent/page", $data);
        $app->page->render($data);
    }
});

$app->router->get("dbcontent/post", function () use ($app) {
    $app->db->connect();
    $route = $app->request->getGet("route");

    if (empty($route)) {
        $sql = <<<EOD
SELECT
    *,
    CASE 
        WHEN (deleted <= NOW()) THEN "isDeleted"
        WHEN (published <= NOW()) THEN "isPublished"
        ELSE "notPublished"
    END AS status
FROM content
WHERE type=?
;
EOD;
        $data = [
            "title" => "Pages",
            "resultset" => $app->db->executeFetchAll($sql, ["post"])
        ];

        $app->view->add("dbcontent/navbar", $data);
        $app->view->add("dbcontent/blog", $data);
        $app->page->render($data);
    } else {
        $sql = "SELECT * FROM content WHERE slug = ?;";
        $content = $app->db->executeFetch($sql, [$route]);

        $data = [
            "title" => $content->title,
            "content" => $content
        ];

        $app->view->add("dbcontent/navbar", $data);
        $app->view->add("dbcontent/blogpost", $data);
        $app->page->render($data);
    }
});

/**
 * Create a slug of a string, to be used as url.
 *
 * @param string $str the string to format as slug.
 * 
 * @return str the formatted slug.
 */
function slugify($str)
{
    $str = mb_strtolower(trim($str));
    $str = str_replace(array('å','ä','ö'), array('a','a','o'), $str);
    $str = preg_replace('/[^a-z0-9-]/', '-', $str);
    $str = trim(preg_replace('/-+/', '-', $str), '-');
    return $str;
}

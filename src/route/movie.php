<?php
/**
 * Movie database routes.
 */

$app->router->get("movie", function () use ($app) {
    $sql = "SELECT * FROM movie;";
    $app->db->connect();

    $data = [
        "title"     => "Movies",
        "resultset" => $app->db->executeFetchAll($sql)
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/show-all", $data);
    $app->page->render($data);
});

$app->router->get("movie/select", function () use ($app) {
    $sql = "SELECT * FROM movie;";
    $app->db->connect();

    $data = [
        "title"     => "Movies",
        "resultset" => $app->db->executeFetchAll($sql)
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/select", $data);
    $app->page->render($data);
});

$app->router->get("movie/search-title", function () use ($app) {
    $app->db->connect();

    $searchTitle = $app->request->getGet("searchTitle");

    $sql = "SELECT * FROM movie;";
    $resultset = null;
    if ($searchTitle) {
        $sql = "SELECT * FROM movie WHERE title LIKE ?;";
        $resultset = $app->db->executeFetchAll($sql, [$searchTitle]);
    } else {
        $resultset = $app->db->executeFetchAll($sql);
    }

    $data = [
        "title"         => "Search title",
        "searchTitle"   => $searchTitle,
        "resultset"     => $resultset
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/search-title", $data);
    $app->view->add("movie/show-all", $data);
    $app->page->render($data);
});

$app->router->get("movie/search-year", function () use ($app) {
    $app->db->connect();

    $year1 = $app->request->getGet("year1");
    $year2 = $app->request->getGet("year2");

    $sql = "SELECT * FROM movie;";
    $params = null;
    if ($year1 && $year2) {
        $sql = "SELECT * FROM movie WHERE year >= ? AND year <= ?;";
        $params = [$year1, $year2];
    } elseif ($year1) {
        $sql = "SELECT * FROM movie WHERE year >= ?;";
        $params = [$year1];
    } elseif ($year2) {
        $sql = "SELECT * FROM movie WHERE year <= ?;";
        $params = [$year2];
    }

    $resultset = null;
    if ($params) {
        $resultset = $app->db->executeFetchAll($sql, $params);
    } else {
        $resultset = $app->db->executeFetchAll($sql);
    }

    $data = [
        "title"     => "Search year",
        "year1"     => $year1,
        "year2"     => $year2,
        "resultset" => $resultset
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/search-year", $data);
    $app->view->add("movie/show-all", $data);
    $app->page->render($data);
});

$app->router->get("movie/edit", function () use ($app) {
    $app->db->connect();

    $sql = "SELECT * FROM movie WHERE id = ?;";
    $id = $app->request->getGet("id");

    $data = [
        "title"     => "Edit movie",
        "movie" => $app->db->executeFetchAll($sql, [$id])[0]
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/edit", $data);
    $app->page->render($data);
});

$app->router->post("movie/edit", function () use ($app) {
    $app->db->connect();

    $post = $app->request->getPost();

    if (isset($post["movieId"])
        && isset($post["movieTitle"])
        && isset($post["movieYear"])
        && isset($post["movieImage"])
    ) {
        $sql = "UPDATE movie SET title = ?, year = ?, image = ? WHERE id = ?;";
        $app->db->execute($sql, [
            $post["movieTitle"],
            $post["movieYear"],
            $post["movieImage"],
            $post["movieId"]
        ]);
        $urlPrefix = $_SERVER["SERVER_NAME"] == "www.student.bth.se" ? "/~rasb14/dbwebb-kurser/oophp/me/redovisa/htdocs" : "";
        header("Location: " . $urlPrefix . "/movie");
        exit;
    } else {
        $data = [
            "title"   => "Error",
            "message" => "Invalid input data."
        ];
        $app->view->add("movie/error", $data);
        $app->page->render($data);
    }
});

$app->router->get("movie/delete", function () use ($app) {
    $app->db->connect();

    $sql = "SELECT * FROM movie WHERE id = ?;";
    $id = $app->request->getGet("id");

    $data = [
        "title" => "Delete movie",
        "movie" => $app->db->executeFetchAll($sql, [$id])[0]
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/delete", $data);
    $app->page->render($data);
});

$app->router->post("movie/delete", function () use ($app) {
    $app->db->connect();

    $post = $app->request->getPost();

    if (isset($post["movieId"])) {
        $sql = "DELETE FROM movie WHERE id = ?;";
        $app->db->execute($sql, [$post["movieId"]]);
        $urlPrefix = $_SERVER["SERVER_NAME"] == "www.student.bth.se" ? "/~rasb14/dbwebb-kurser/oophp/me/redovisa/htdocs" : "";
        header("Location: " . $urlPrefix . "/movie");
        exit;
    } else {
        $data = [
            "title"   => "Error",
            "message" => "Invalid input data."
        ];
        $app->view->add("movie/error", $data);
        $app->page->render($data);
    }
});

$app->router->get("movie/add", function () use ($app) {
    $data = [
        "title" => "Add movie",
    ];

    $app->view->add("movie/navbar", $data);
    $app->view->add("movie/add", $data);
    $app->page->render($data);
});

$app->router->post("movie/add", function () use ($app) {
    $app->db->connect();

    $post = $app->request->getPost();

    if (isset($post["movieTitle"])
        && isset($post["movieYear"])
        && isset($post["movieImage"])
    ) {
        $sql = "INSERT INTO movie(title, year, image) VALUES (?, ?, ?);";
        $app->db->execute($sql, [
            $post["movieTitle"],
            $post["movieYear"],
            $post["movieImage"]
        ]);
        $urlPrefix = $_SERVER["SERVER_NAME"] == "www.student.bth.se" ? "/~rasb14/dbwebb-kurser/oophp/me/redovisa/htdocs" : "";
        header("Location: " . $urlPrefix . "/movie");
        exit;
    } else {
        $data = [
            "title"   => "Error",
            "message" => "Invalid input data."
        ];
        $app->view->add("movie/error", $data);
        $app->page->render($data);
    }
});

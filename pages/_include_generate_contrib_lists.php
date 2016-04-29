<?php
  include('../php-lib/mysql.php');
  
  $link = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
  mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link);

  mysql_select_db(MYSQL_DB);
  
  //$result = mysql_query('SELECT * FROM topics LIMIT 1');
  $result = mysql_query('
    SELECT 
      applications.aid AS contrib_id,
      applications.title AS title,
      applications.name AS author,
      applications.affiliation AS author_affiliation,
      applications.abstract AS abstract,
      topics.name AS topic_name,
      status.sid AS status_id,
      status.name AS status_name
    FROM applications 
    LEFT JOIN topics ON applications.tid = topics.tid
    LEFT JOIN status ON applications.sid = status.sid
    WHERE applications.tid = applications.sid
    ORDER BY topics.tid, applications.title
   ');
    
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }
  
  $res = array();
  
  while ($row = mysql_fetch_assoc($result)) {
    //print_r($row);
    $res[$row['topic_name']][] = $row;
  }
  
  //print_r($res);
  
  mysql_close($link);

  /**********************************/
  function generate_type($key, $header, $p, $file) {
    global $res; 
    
    $file_handle = fopen($file, "w") or die("Unable to open file!");
    $value = $res[$key];    
    
    fwrite($file_handle, "<h1>" . $header . "</h1>\n");
    fwrite($file_handle, "<p>" . $p . "</p>\n");
    fwrite($file_handle, "<dl>\n");
    
    foreach ($value as $talk) {
      //print_r($talk);
      
      $author = trim($talk['author']);
      $affiliation = trim($talk['author_affiliation']);
      $author_long = (strlen(preg_replace('/\s+/', '', $affiliation)) > 0) ? $author . ', ' . $affiliation : $author ;

      fwrite($file_handle, "  <dt id=\"" . $talk['contrib_id'] . "\" style=\"padding-left: 2em; text-indent: -2em;\"><a data-toggle=\"collapse\" data-target=\"#a-" . $talk['contrib_id'] . "\" style=\"cursor: pointer;\">" . $talk['title'] . "</a> <span style=\"font-weight: normal; font-style: italic;\">(" . $author . ")</span></dt>\n");      
      fwrite($file_handle, "  <dd id=\"a-" . $talk['contrib_id'] . "\" class=\"collapse\"><p style=\"padding-top: 0.5em;\">" . $author_long . ":</p><blockquote>" . $talk['abstract'] . "</blockquote><div style=\"height: 0.5em;\"></div></dd>\n");        
    }
    
    fwrite($file_handle, "</dl>\n");
    
    fwrite($file_handle, 
"      <script type=\"text/javascript\">
      $(document).ready(function() {
        var anchor = window.location.hash;
        var anchor_collapse = '#a-' + anchor.replace('#', '');
        $(anchor_collapse).collapse('toggle');
      });
      </script>\n");

    fclose($file_handle);
  }
  
  generate_type('Oral Presentation', 'Contributed Talks', 'Lists of confirmed speakers sorted by presentation title. Click for: <a href="./lightning_talks">Lightning Talks</a>.', 'pages/draft_contributed_talks.php');
  generate_type('Lightning Talk', 'Lightning Talks', 'Lists of confirmed speakers sorted by presentation title. Click for: <a href="./contributed_talks">Contributed Talks</a>.', 'pages/draft_lightning_talks.php');
  generate_type('Poster', 'Posters', 'The useR! 2015 poster session is organised for Wednesday evening. The list of posters will be extended right up until the conference. Lists of confirmed posters sorted by poster title. ', 'pages/draft_posters.php');

  
  
?>

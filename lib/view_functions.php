<?php

function NavBar() {
    print LoadTemplate("navbar");
}
function BasicHead() {
    print LoadTemplate("basic_head");
}

function LoadTemplate ( $name ) {
    $template_html = file_get_contents("templates/$name.html");
    return $template_html;
}

function ReplaceContent( $data, $template_html )
{
    foreach ( $data as $row )
    {
        //replace fields with values in template
        $content = $template_html;
        foreach($row as $field => $value)
        {
            $content = str_replace("@@$field@@", $value, $content);
        }

        print $content;
    }
}
